<?php
class ViewLookupWizardField extends ViewControl
{
	public $nLookupType;
	public $lookupTable;
	public $displayFieldName;
	public $linkFieldName;
	public $linkAndDisplaySame;
	public $pSet;
	public $lookupPSet;
	public $cipherer;
	public $lookupQueryObj;
	public $displayFieldIndex;
	public $LookupSQL; // need to be removed
	public $resolvedLookupValues = array();
	public $resolvedLinkLookupValues = array();
	public $linkFieldIndex;

	public $localControlsContainer;

	protected $lookupDataSource;

	public function __construct($field, $container, $pageObject)
	{
		parent::__construct($field, $container, $pageObject);

		$this->lookupPSet = null;
		$this->cipherer = null;

		if($this->container->pSet->getEditFormat($field) != EDIT_FORMAT_LOOKUP_WIZARD)
		{
			$this->pSet = new ProjectSettings( $this->container->pSet->_table );
			//	set view page
			$this->pSet->setPageType( $this->container->pageType );
			//	set edit page
			$this->pSet->setPageType( $this->container->pSet->getPageTypeByFieldEditFormat($field, EDIT_FORMAT_LOOKUP_WIZARD) );
		}
		else
			$this->pSet = $this->container->pSet;

		$this->nLookupType = $this->pSet->getLookupType($this->field);
		$this->lookupTable = $this->pSet->getLookupTable($this->field);
		$this->lookupDataSource = getLookupDataSource( $this->field, $this->pSet );


		$this->displayFieldName = $this->pSet->getDisplayField($this->field);
		$this->linkFieldName = $this->pSet->getLinkField($this->field);
		$this->linkAndDisplaySame = $this->displayFieldName == $this->linkFieldName;
		if($this->nLookupType == LT_QUERY)
		{
			$this->lookupPSet = new ProjectSettings($this->lookupTable, $this->container->pageType);
			$this->cipherer = new RunnerCipherer($this->lookupTable);
		}
		else
		{
			$this->cipherer = new RunnerCipherer($this->pSet->_table);
		}

		$this->localControlsContainer = new ViewControlsContainer($this->pSet, $this->container->pageType, $pageObject);
		$this->localControlsContainer->isLocal = true;
	}

	/**
	 * @param Array values
	 * @param Boolean withoutWhere
	 * @return Array
	 * 	"command" => DsCommand
	 *  "displayAlias" => bname of display field column
	 */
	protected function getLookupCommand( $values, $withoutWhere ) {
		$dc = new DsCommand();
		$pSet = $this->pSet;

		//	custom display field
		$displayField = $pSet->getDisplayField( $this->field );
		if( $this->pSet->getCustomDisplay( $this->field ) ) {
			$displayFieldAlias = generateAlias();
			$dc->extraColumns[] = new DsFieldData( $displayField, $displayFieldAlias, "" );
		} else {
			$displayFieldAlias = $displayField;
		}

		//	filters
		$filters = array();

		//	select only current value
		$linkField = $pSet->getLinkField( $this->field );
		$multiselect = $pSet->multiSelect( $this->field );
		$valueConditions = array();
		foreach( $values as $v ) {
			$valueConditions[] = DataCondition::FieldEquals( $linkField , $v );
		}
		$filters[] = DataCondition::_Or( $valueConditions );

		//	user-provided WHERE expression
		if( !$withoutWhere )
		{
			$filters[] = DataCondition::SQLCondition( prepareLookupWhere( $this->field, $pSet ) );
		}

		//	security filter
		$filters[] = Security::SelectCondition( "S", $this->lookupPSet, true );

		$dc->filter = DataCondition::_And( $filters );
		return array( "command" => $dc, "displayAlias" => $displayFieldAlias );

	}


	/**
	 * @param String lookupValue
	 * @return String
	 */
	protected function getDecryptLookupValue( $lookupValue )
	{
		if( $this->nLookupType == LT_QUERY || $this->linkAndDisplaySame )
			return $this->cipherer->DecryptField($this->nLookupType == LT_QUERY ? $this->displayFieldName : $this->field, $lookupValue);

		return $lookupValue;
	}

	

	/**
	 * @param String value
	 * @return Array of arrays"
	 * array( array( "link" => $value, "display" => $display ))
	 */
	protected function getLookupValues( $value )
	{
		if( $this->pSet->multiSelect($this->field) ) {
			$values = splitLookupValues($value);
		} else {
			$values = array( $value );
		}
		$unresolved = array();
		foreach( $values as $v ) {
			if( !$this->resolvedLookupValues[ $v ] ) {
				$unresolved[] = $v;
			}
		}

		//	resolve with user's WHERE expression
		if( $unresolved && $this->pSet->isLookupWhereSet( $this->field ) ) {
			$resolved = $this->fetchLookupValues( $unresolved, false );
			if( $resolved ) {
				foreach( $resolved as $r ) {
					$this->resolvedLookupValues[ $r["link"] ] = $r[ "display" ];
				}
			}
			//	update unresolved values
			$oldUnresolved = $unresolved;
			$unresolved = array();
			foreach( $oldUnresolved as $v ) {
				if( !$this->resolvedLookupValues[ $v ] ) {
					$unresolved[] = $v;
				}
			}
		}

		//	repeat without user's WHERE expression
		if( $unresolved ) {
			$resolved = $this->fetchLookupValues( $unresolved, true );
			if( $resolved === false ) {
				showError( $this->lookupDataSource->lastError() );
			} else {
				foreach( $resolved as $r ) {
					$this->resolvedLookupValues[ $r["link"] ] = $r[ "display" ];
				}
			}
		}
		$ret = array();
		foreach( $values as $v ) {
			if( $this->resolvedLookupValues[ $v ] ) {
				$ret[] = array( "link" => $v, "display" => $this->resolvedLookupValues[ $v ] );
			} else {
				$ret[] = array( "link" => $v, "display" => $v );
			}
		}
		return $ret;
	}

	/**
	 * @return Array of arrays
	 * array( array( "link" => $value, "display" => $display ))
	 */
	protected function fetchLookupValues( $values, $withoutWhere ) {
		$lookupCommand = $this->getLookupCommand( $values, $withoutWhere );
		$dc = $lookupCommand["command"];
		$dispAlias = $lookupCommand["displayAlias"];
		$rs = $this->lookupDataSource->getList( $dc );
		if( !$rs ) {
			showError( $this->lookupDataSource->lastError() );
			return false;
		}
		$ret = array();
		$fetchedLinkValues = array();
		while( $data = $rs->fetchAssoc() ) {
			$linkValue = $data[ $this->linkFieldName ];
			if( !$fetchedLinkValues[ $linkValue ] ) {
				$ret[] = array(
					"link" => $linkValue,
					"display" => $data[ $dispAlias ]
				);
				$fetchedLinkValues[ $linkValue ] = true;
			}
		}
		return $ret;
	}

	/**
	 * @param &Array data
	 * @param String keylink
	 */
	public function showDBValue( &$data, $keylink, $html = true )
	{
		$value = $data[ $this->field ];
		if( !strlen($value) )
			return "";

		if ( !$this->lookupTable ) {
			return $value;
		}

		$outValues = array();
		$localData = $data;

		$lookupValues = $this->getLookupValues( $value );
		foreach( $lookupValues as $lv )
		{
			$linkValue = $lv["link"];
			$displayValue = $lv["display"];

			$this->localControlsContainer->linkFieldValues[ $this->field ] = $data[ $this->field ];
			$this->localControlsContainer->originlinkValues[ $this->field ] = $linkValue;


			if( $this->pSet->getViewFormat($this->field) != "Custom" )
				$localData[ $this->field ] = $displayValue;

			$outputValue = $this->localControlsContainer->showDBValue( $this->field, $localData, $keylink, $displayValue, $html );

			if( $html && !$this->container->forExport ) {
				$outputValue = '<span class="r-lookup-value">' . $outputValue . '</span>';
			}

			$outValues[] = $outputValue;
		}

		return implode( $html ? '<span class="r-lookup-sep">,</span>' : ',', $outValues);
	}

	/**
	 * User API function
	 * @param &Array data
	 * @return String
	 */
	public function getTextValue(&$data)
	{
		$value = $data[ $this->field ];
		if( !strlen($value) )
			return "";

		$textValues = array();
		$localData = $data;

		$lookupValues = $this->getLookupValues( $value );
		foreach( $lookupValues as $lv )
		{
			$linkValue = $lv["link"];
			$displayValue = $lv["display"];
			if( $this->pSet->getViewFormat($this->field) != "Custom" )
				$localData[ $this->field ] = $displayValue;

			$textValues[] = $this->localControlsContainer->getControl( $this->field )->getTextValue( $localData );
		}

		return implode(",", $textValues);
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "", $html = false )
	{
		$this->localControlsContainer->setForExportVar( $this->container->forExport );
		return $this->showDBValue($data, $keylink, $html );
	}
}
?>