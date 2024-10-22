<?php
class LookupField extends EditControl
{
	/**
	 * Name of table which is lookup source
	 * @var unknown_type
	 */
	public $lookupTable = "";
	/**
	 * Type of lookup source (db table, project table, etc.)
	 * @var int
	 */
	public $lookupType = 0;
	/**
	 * Type of lookup control (Dropdown, List page with search, etc.)
	 * @var int
	 */
	public $LCType = 0;

	/**
	 * RunnerCipherer entity for lookup table
	 * @var RunnerCipherer
	 */
	public $ciphererLookup = null;

	public $displayFieldName = "";
	public $linkFieldName = "";
	public $linkAndDisplaySame = false;

	/*
	public $linkFieldIndex = 0;
	public $displayFieldIndex = 0;
	*/

	public $lookupSize = 1;
	public $multiple = "";
	public $postfix = "";
	public $alt = "";

	public $clookupfield = "";
	public $openlookup = "";

	public $bUseCategory = false;
	public $horizontalLookup = false;
	public $addNewItem = false;

	public $isLinkFieldEncrypted = false;
	public $isDisplayFieldEncrypted = false;

	public $lookupPageType = "";

	public $lookupPSet = null;

	public $multiselect = false;
	public $lwLinkField = "";
	public $lwDisplayFieldWrapped = "";
	public $customDisplay = "";
	public $tName = "";
	private $displayFieldAlias = "";

	/**
	 * Generated lookup table aliases' array
	 */
	protected $lookupTableAliases = array();
	/**
	 * Generated link field aliases' array
	 */
	protected $linkFieldAliases = array();
	/**
	 * AbnGenerated displayed field aliases' array
	 */
	protected $displayFieldAliases = array();
	/**
	 * A flag indicating that search by displayed field is allowed
	 * @type Boolean
	 */
	protected $searchByDisplayedFieldIsAllowed = null;

	protected $lookupDataSource;
	
	function __construct($field, $pageObject, $id, $connection)
	{
		parent::__construct($field, $pageObject, $id, $connection);

		$this->tName = $this->pageObject->tName;
		if($this->pageObject->tableBasedSearchPanelAdded)
			$this->tName = $this->pageObject->searchTableName;

		$this->format = EDIT_FORMAT_TEXT_FIELD;

		if($pageObject->pageType == PAGE_LIST || !$pageObject->isPageTableBased())
			$this->lookupPageType = PAGE_SEARCH;
		else
			$this->lookupPageType = $pageObject->pageType;

		$this->lookupTable = $this->pageObject->pSetEdit->getLookupTable($this->field);
		$this->lookupType = $this->pageObject->pSetEdit->getLookupType($this->field);
		$this->lookupDataSource = getLookupDataSource( $this->field, $this->pageObject->pSetEdit );
		
		if($this->lookupType == LT_QUERY) {
			$this->lookupPSet = new ProjectSettings($this->lookupTable);
		}

		$this->displayFieldName = $this->pageObject->pSetEdit->getDisplayField($this->field);
		$this->linkFieldName = $this->pageObject->pSetEdit->getLinkField($this->field);
		$this->linkAndDisplaySame = $this->displayFieldName == $this->linkFieldName;

		if($this->lookupType == LT_QUERY)
			$this->ciphererLookup = new RunnerCipherer($this->lookupTable);

		$this->LCType = $this->pageObject->pSetEdit->lookupControlType($this->field);

		$this->multiselect = $this->pageObject->pSetEdit->multiSelect($this->field);
		$this->customDisplay = $this->pageObject->pSetEdit->getCustomDisplay($this->field);


		// The number of rows in a multiline lookup
		$this->lookupSize = $this->pageObject->pSetEdit->selectSize($this->field);
		$this->bUseCategory = $this->pageObject->pSetEdit->useCategory($this->field);
	}


	/**
	 * Create a CSS rule specifying the control's width
	 * @param Number widthPx
	 * @return String
	 */
	function makeWidthStyle($widthPx)
	{
		if( $this->LCType !== LCT_DROPDOWN )
			return parent::makeWidthStyle( $widthPx );

		if( 0 == $widthPx )
			return "";

		return "width: ".( $widthPx + 7 )."px";
	}

	/**
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
		if( $this->multiselect && ( $this->LCType == LCT_DROPDOWN && $this->lookupSize == 1 || $this->LCType == LCT_AJAX || $this->LCType == LCT_LIST ) )
			$this->pageObject->AddJSFile("include/chosen/chosen.jquery.js");
	}

	/**
	 * Add control CSS files to page object
	 */
	function addCSSFiles()
	{
		if( $this->multiselect && ( $this->LCType == LCT_DROPDOWN && $this->lookupSize == 1 || $this->LCType == LCT_AJAX || $this->LCType == LCT_LIST ) )
		{
			if ( $this->pageObject->isBootstrap() )
				$this->pageObject->AddCSSFile("include/chosen/bootstrap-chosen.css");
			else
				$this->pageObject->AddCSSFile("include/chosen/chosen.css");
		}
	}

	/**
	 * This function need to bypass buildControl function of this class. It calls from LookupTextField class only.
	 */
	function parentBuildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
	}

	/**
	 * Get the control's settings and build its HTML markup
	 */
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);

		
		$this->alt = ($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508 ? ' alt="'.runner_htmlspecialchars($this->strLabel).'" ' : "";

		$suffix = "_".GoodFieldName($this->field)."_".$this->id;
		$this->clookupfield = "display_value".($fieldNum ? $fieldNum : '').$suffix;
		$this->openlookup = "open_lookup".$suffix;

		$this->cfield = "value".$suffix;
		$this->ctype = "type".$suffix;
		if($fieldNum)
		{
			$this->cfield = "value".$fieldNum.$suffix;
			$this->ctype = "type".$fieldNum.$suffix;
		}

		if( $this->ciphererLookup )
			$this->isLinkFieldEncrypted = $this->ciphererLookup->isFieldPHPEncrypted( $this->linkFieldName );

		$this->horizontalLookup = $this->pageObject->pSetEdit->isHorizontalLookup($this->field);

		$this->addMainFieldsSettings();

		//	alter "add on the fly" settings
		$this->addNewItem = $this->isAllowToAdd( $mode );

		// prepare multi-select attributes
		$this->multiple = $this->multiselect ? " multiple" : "";
		$this->postfix = $this->multiselect ? "[]" : "";
		if( $this->multiselect )
			$avalue = splitLookupValues($value);
		else
			$avalue = array((string)$value);

		$searchOption = $additionalCtrlParams["option"];

		//	build the control
		if( $this->lookupType == LT_LISTOFVALUES )
		{
			$this->buildListOfValues($avalue, $value, $mode, $searchOption);
		}
		else
		{
			if( !$this->lookupDataSource ) {
				return;
			}
				// build a table-based lookup
			if( $this->ciphererLookup )
				$this->isDisplayFieldEncrypted = $this->ciphererLookup->isFieldPHPEncrypted( $this->displayFieldName );

			if( $this->LCType == LCT_AJAX || $this->LCType == LCT_LIST )
			{
				$this->buildAJAXLookup($avalue, $value, $mode, $searchOption);
			}
			else
			{
				$this->buildClassicLookup($avalue, $value, $mode, $searchOption);
			}
		}

		$this->buildControlEnd($validate, $mode);
	}

	/**
	 * //	alter "add on the fly" settings
	 * @param String mode
	 * @return Boolean
	 */
	protected function isAllowToAdd( $mode )
	{
		$addNewItem = false;
		$strPerm = GetUserPermissions($this->lookupTable);
		if( strpos($strPerm,"A") !== false && $this->LCType != LCT_LIST && $mode != MODE_SEARCH )
		{
			$addNewItem = $this->pageObject->pSetEdit->isAllowToAdd($this->field);
			$advancedadd = !$this->pageObject->pSetEdit->isSimpleAdd($this->field);
			if(!$advancedadd || $this->pageObject->pageType == PAGE_REGISTER)
				$addNewItem = false;
		}

		return $addNewItem;
	}

	/**
	 *
	 */
	protected function addMainFieldsSettings()
	{
		if( $this->pageObject->pSetEdit->isLookupWhereCode( $this->field ) )
			return;

		$mainMasterFields = array();
		$mainFields = array();

		$where = $this->pageObject->pSetEdit->getLookupWhere( $this->field );
		foreach( DB::readSQLTokens( $where ) as $token )
		{
			$prefix = "";
			$field = $token;
			$dotPos = strpos( $token, ".");

			if( $dotPos !== FALSE )
			{
				$prefix = strtolower( substr( $token, 0, $dotPos ) );
				$field = substr( $token, $dotPos + 1 );
			}

			if( $prefix == "master" )
				$mainMasterFields[] = $field;
			else if( !$prefix )
				$mainFields[] = $field;
		}

		$this->addJSSetting( "mainFields", $mainFields );
		$this->addJSSetting( "mainMasterFields", $mainMasterFields );
	}

	/**
	 * Get indexes of link and display fields
	 */
	/*
	public function fillLookupFieldsIndexes()
	{
		$lookupIndexes = GetLookupFieldsIndexes($this->pageObject->pSetEdit, $this->field);
		$this->linkFieldIndex = $lookupIndexes["linkFieldIndex"];
		$this->displayFieldIndex = $lookupIndexes["displayFieldIndex"];
	}
	*/

	/**
	 * Build HTML markup fo the 'List of values' lookup field
	 */
	public function buildListOfValues($avalue, $value, $mode, $searchOption)
	{
		// read lookup values
		$arr = $this->pageObject->pSetEdit->getLookupValues($this->field);
		$display_values = $arr;

		if (in_array( $this->pageObject->pSetEdit->getViewFormat($this->field), array(FORMAT_DATE_SHORT, FORMAT_DATE_LONG, FORMAT_DATE_TIME)))
		{
			$container = new ViewControlsContainer($this->pageObject->pSetEdit, PAGE_LIST, null);
			foreach ( $arr as $key => $opt )
			{
				$data = array();
				$data[$this->field] = $opt;
				$display_values[$key] = $container->getControl($this->field)->getTextValue($data);
			}
		}

		$dropDownHasSimpleBox = $this->LCType == LCT_DROPDOWN && !$this->multiselect && $mode == MODE_SEARCH;
		$optionContains = $dropDownHasSimpleBox && $this->isSearchOpitonForSimpleBox( $searchOption );

		//	print Type control to allow selecting nothing
		if( $this->multiselect )
			echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="multiselect">';

		switch($this->LCType)
		{
			case LCT_DROPDOWN:
				$dataAttr = $selectClass = '';
				if( $dropDownHasSimpleBox )
				{
					$dataAttr = ' data-usesuggests="true"';
					$selectClass = $optionContains ? ' class="rnr-hiddenControlSubelem" ' : '';
					$simpleBoxClass = $optionContains ? '' : ' class="rnr-hiddenControlSubelem" ';
					$simpleBoxStyle = $this->getWidthStyleForAdditionalControl();
					echo '<input id="'.$this->cfield.'_simpleSearchBox" type="text" value="'.runner_htmlspecialchars($value).'" autocomplete="off"'.$simpleBoxClass.' '.$simpleBoxStyle.'>';
				}

				echo '<select id="'.$this->cfield.'" size="'.$this->lookupSize.'" '.$dataAttr.$selectClass.' name="'.$this->cfield.$this->postfix.'" '
					.$this->multiple.' '.$this->inputStyle.'>';
				if( !$this->multiselect )
					echo '<option value="">'."Please select".'</option>';
				else if($mode == MODE_SEARCH)
					echo '<option value=""> </option>';

				foreach($arr as $key => $opt)
				{
					$res = array_search((string)$opt, $avalue);
					if( $res !== FALSE )
						echo '<option value="'.runner_htmlspecialchars($opt).'" selected>'.runner_htmlspecialchars($display_values[$key]).'</option>';
					else
						echo '<option value="'.runner_htmlspecialchars($opt).'">'.runner_htmlspecialchars($display_values[$key]).'</option>';
				}
				echo "</select>";
				break;

			case LCT_CBLIST:
				echo '<div data-lookup-options class="'. ( $this->horizontalLookup ? 'rnr-horizontal-lookup' : 'rnr-vertical-lookup' ).'">';
				$spacer = '<br/>';
				if($this->horizontalLookup)
					$spacer = '&nbsp;&nbsp;';
				$i = 0;
				foreach($arr as $key => $opt)
				{
					echo '<span class="checkbox"><label>';
					echo '<input id="'.$this->cfield.'_'.$i.'" class="rnr-checkbox" type="checkbox" '.$this->alt.' name="'.$this->cfield.$this->postfix.'" value="'
						.runner_htmlspecialchars($opt).'"';
					$res = array_search((string)$opt, $avalue);
					if( $res !== FALSE )
						echo ' checked="checked" ';
					echo '/>';

					echo '&nbsp;<span class="rnr-checkbox-label" id="data_'.$this->cfield.'_'.$i.'">'.runner_htmlspecialchars($display_values[$key]).'</span>'.$spacer;
					echo '</label></span>';
					$i++;
				}
				echo '</div>';
				break;

			case LCT_RADIO:
//				$spacer = $this->horizontalLookup ? "&nbsp;&nbsp;" : "<br/>";
				echo '<div data-lookup-options class="'. ( $this->horizontalLookup ? 'rnr-horizontal-lookup' : 'rnr-vertical-lookup' ).'">';
				echo '<input id="'.$this->cfield.'" type="hidden" name="'.$this->cfield.'" value="'.runner_htmlspecialchars($value).'">';
				$i = 0;
				foreach($arr as $key => $opt)
				{
					$checked = "";
					if($opt == $value)
						$checked = ' checked="checked" ';
					echo '<span class="radio"><label>';
					echo '<input type="Radio" class="rnr-radio-button" id="radio_'.$this->cfieldname.'_'.$i.'" '
						.$this->alt.' name="radio_'.$this->cfieldname.'" '.$checked.' value="'.runner_htmlspecialchars($opt).'">'
						.' <span id="label_radio_'.$this->cfieldname.'_'.$i.'" class="rnr-radio-label">'
						.runner_htmlspecialchars($display_values[$key]).'</span >';
					echo '</label></span>';
					$i++;
				}
				echo '</div>';
				break;
		}
	}

	/**
	 * Build the markup for the 'Edit box with AJAX popup' or 'List page with search' lookup field
	 * @param Array avalue			An array of the control values
	 * @param String value			A control's value string representation
	 * @param String mode			The control's mode (MODE_INLINE_EDIT, MODE_INLINE_ADD)
	 * @param String searchOption 	The control's search option
	 */
	public function buildAJAXLookup($avalue, $value, $mode, $searchOption)
	{
		if( $this->multiselect )
		{
			$this->buildMultiselectAJAXLookup($avalue, $value, $mode, $searchOption);
			return;
		}
		

		$listSearchHasSimpleBox = $mode == MODE_SEARCH && $this->isAdditionalControlRequired();
		$optionContains = $this->isSearchOpitonForSimpleBox( $searchOption );
		$listOptionContains = $listSearchHasSimpleBox && $optionContains;
		$dataAttr = '';


		if( $this->LCType == LCT_LIST )
		{
			$dataAttr = $listSearchHasSimpleBox ? ' data-usesuggests="true"' : '';
		}
		else if( $this->LCType == LCT_AJAX && $optionContains )
		{
			$dataAttr = ' data-simple-search-mode="true" ';
		}

		if($this->bUseCategory)
		{
			$valueAttr = '';
			if( $this->LCType == LCT_AJAX && $optionContains || $this->LCType == LCT_LIST && $listOptionContains )
				$valueAttr = ' value="'.runner_htmlspecialchars($value).'"';

			// dependent ajax-lookup control
			$inputParams = '" '.$this->getPlaceholderAttr().' autocomplete="off" id="'.$this->clookupfield.'" '.$valueAttr.' name="'.$this->clookupfield.'" '.$this->inputStyle;
			$inputParams.= $this->LCType == LCT_LIST && !$listOptionContains ? 'readonly': '';
			echo '<input type="text" '.$inputParams.'>';

			echo '<input type="hidden" id="'.$this->cfield.'" '.$valueAttr.' name="'.$this->cfield.'"'.$dataAttr.'>';

			echo $this->getLookupLinks( $listOptionContains );
			return;
		}

		//	get the initial value
		$lookup_value = "";
		$lookupDc = $this->getLookupDataCommand( array(), $value, false, true );

		$qResult = $this->lookupDataSource->getList( $lookupDc );
		if( !$qResult ) {
			showError( $this->lookupDataSource->lastError() );
		}

		if( $data = $qResult->fetchAssoc() )
		{
			if($this->isDisplayFieldEncrypted)
				$lookup_value = $this->ciphererLookup->DecryptField( $this->displayFieldName , $data[ $this->displayFieldAlias ]);
			else
				$lookup_value = $data[ $this->displayFieldAlias ];
		}
		elseif( $this->pageObject->pSetEdit->isLookupWhereSet( $this->field ) )
		{
			// try w/o WHERE expression
			$lookupDc = $this->getLookupDataCommand( array(), $value, false, true, false );
			$qResult = $this->lookupDataSource->getList( $lookupDc );
			if( !$qResult ) {
				showError( $this->lookupDataSource->lastError() );
			}
			if( $data = $qResult->fetchAssoc() )
			{
				if($this->isDisplayFieldEncrypted)
					$lookup_value = $this->ciphererLookup->DecryptField( $this->displayFieldName , $data[ $this->displayFieldAlias ]);
				else
					$lookup_value = $data[ $this->displayFieldAlias ];
			}
		}

		// build the regular ajax-lookup control
		if( $this->LCType == LCT_AJAX && !strlen($lookup_value) && ($this->pageObject->pSetEdit->isfreeInput($this->field) || $this->lookupPageType == PAGE_SEARCH)
			|| $this->LCType == LCT_LIST && $listOptionContains )
		{
			$lookup_value = $value;
		}

		if ( in_array( $this->pageObject->pSetEdit->getViewFormat($this->field), array(FORMAT_DATE_SHORT, FORMAT_DATE_LONG, FORMAT_DATE_TIME) ) )
		{
			$container = new ViewControlsContainer($this->pageObject->pSetEdit, PAGE_LIST, null);

			$ctrlData = array();
			$ctrlData[ $this->field ] = $lookup_value;
			$lookup_value = $container->getControl( $this->field )->getTextValue( $ctrlData );
		}

		$inputParams = 'autocomplete="off" '.$this->getPlaceholderAttr().' id="'.$this->clookupfield.'" name="'.$this->clookupfield.'" '.$this->inputStyle.$this->alt;
		$inputParams.= ' value="'.runner_htmlspecialchars($lookup_value).'"';;

		if( $this->LCType == LCT_LIST && !$listOptionContains )
			$inputParams.= ' readonly ';

		if( $this->LCType == LCT_LIST && !$this->pageObject->pSetEdit->isRequired($this->field))
			$inputParams.= ' class="clearable" ';

		$inputTag = '<input type="text" '.$inputParams.'>';
		if ( $this->LCType == LCT_LIST )
		{
			echo '<span class="bs-list-lookup">'.$inputTag.'</span>';
		}
		else
		{
			echo $inputTag;
		}

		echo '<input type="hidden" id="'.$this->cfield.'" name="'.$this->cfield.'" value="'.runner_htmlspecialchars($value).'"'.$dataAttr.'>';

		echo $this->getLookupLinks( $listOptionContains );
	}

	/**
	 * Build a multiselect control html markup to apply JS 'chosen' plugin
	 * @param Array avalue			An array of the control values
	 * @param String value			A control's value string representation
	 * @param String mode			The control's mode (MODE_INLINE_EDIT, MODE_INLINE_ADD)
	 * @param String searchOption 	The control's search option
	 */
	protected function buildMultiselectAJAXLookup($avalue, $value, $mode, $searchOption)
	{
		echo '<select '.$this->getPlaceholderAttr().' '.$this->multiple.' id="'.$this->cfield.'" name="'.$this->cfield.$this->postfix.'" '.$this->inputStyle.$this->alt.'>';

		if( !$this->bUseCategory && strlen($value) )
			$this->buildMultiselectAJAXLookupRows($avalue, $value, $mode, $searchOption);

		echo '</select>';

		echo $this->getLookupLinks();
	}

	/**
	 * Build the control's 'option' elements. If the link and displayed fields are not the same
	 * a db query is used to retrieve displayed values corresponding to the link values ($avalue)
	 * @param Array avalue			An array of the control values
	 * @param String value			A control's value string representation
	 * @param String mode			The control's mode (MODE_INLINE_EDIT, MODE_INLINE_ADD)
	 * @param String searchOption 	The control's search option
	 */
	protected function buildMultiselectAJAXLookupRows($avalue, $value, $mode, $searchOption)
	{
		//$this->fillLookupFieldsIndexes();

		if( $this->linkAndDisplaySame || $this->lookupPageType == PAGE_SEARCH )
		{
			$this->displayFieldAlias = $this->displayFieldName;
			foreach($avalue as $mKey => $mValue)
			{
				$data = array();
				$data[ $this->linkFieldName ] = $mValue;
				$data[ $this->displayFieldAlias ] = $mValue;

				$this->buildLookupRow( $mode, $data, ' selected', $mKey );
			}
			return;
		}

		$lookupDc = $this->getLookupDataCommand( array(), $value, false, true );
		$qResult = $this->lookupDataSource->getList( $lookupDc );
		if( !$qResult ) {
			showError( $this->lookupDataSource->lastError() );
		}

		$options = 0;
		while( $data = $qResult->fetchAssoc() )
		{
			$this->decryptDataRow( $data );
			if( array_search( $data[ $this->linkFieldName ], $avalue ) !== FALSE )
			{
				$this->buildLookupRow( $mode, $data, ' selected', $options );
				$options++;
			}
		}

		// try the same query w/o WHERE clause if options were not found
		if( $options == 0 && strlen($value) && $mode == MODE_EDIT && $this->pageObject->pSetEdit->isLookupWhereSet( $this->field ) )
		{
			//one record mode true
			$lookupDc = $this->getLookupDataCommand( array(), $value, false, true, false, true );
			$qResult = $this->lookupDataSource->getList( $lookupDc );

			if( $data = $qResult->fetchAssoc() )
			{
				$this->decryptDataRow( $data );
				$this->buildLookupRow( $mode, $data, ' selected', $options );
			}
		}
	}

	/**
	 * Build HTML markup for the 'dropdown box', 'checkbox list' or 'radio button' lookup field
	 * @param Array avalue
	 * @param String value
	 * @param String mode
	 * @param String searchOption
	 */
	public function buildClassicLookup($avalue, $value, $mode, $searchOption)
	{
		$dropDownHasSimpleBox = $this->LCType == LCT_DROPDOWN && $mode == MODE_SEARCH && $this->isAdditionalControlRequired();
		$optionContains = $dropDownHasSimpleBox && $this->isSearchOpitonForSimpleBox( $searchOption );

		if( $this->multiselect ) //	print Type control to allow selecting nothing
			echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="multiselect">';

		if($this->bUseCategory)
		{
			//	dependent classic lookup
			switch ($this->LCType)
			{
				case LCT_CBLIST:
					echo '<div data-lookup-options>';
					echo '<input id="'.$this->cfield.'" type="checkbox" name="'.$this->cfield.'" style="display:none;">';
					echo '</div>';
					break;

				case LCT_RADIO:
					echo '<input id="'.$this->cfield.'" type="hidden" name="'.$this->cfield.'" value="'.runner_htmlspecialchars($value).'">';
					echo '<div data-lookup-options>';
					echo '</div>';
					break;

				case LCT_DROPDOWN:
					$dataAttr = '';
					$selectClass = $this->pageObject->isBootstrap() ? 'form-control' : '';
					$simpleBoxClass = $this->pageObject->isBootstrap() ? 'form-control' : '';
					if( $dropDownHasSimpleBox )
					{
						$dataAttr = ' data-usesuggests="true"';
						$selectClass .= $optionContains ? ' rnr-hiddenControlSubelem' : '';
						$simpleBoxClass .= $optionContains ? '' : ' rnr-hiddenControlSubelem';
						$simpleBoxStyle = $this->pageObject->isBootstrap() ? '' : $this->getWidthStyleForAdditionalControl();
						echo '<input id="'.$this->cfield.'_simpleSearchBox" type="text" value="'.runner_htmlspecialchars($value).'" autocomplete="off" class="'.$simpleBoxClass.'" '.$simpleBoxStyle.'>';
					}

					echo '<select size="'.$this->lookupSize.'" id="'.$this->cfield.'" name="'.$this->cfield.$this->postfix.'" class="'.$selectClass.'" '.$dataAttr.
						$this->multiple.' '.$this->inputStyle.'>';
					echo '<option value="">'."Please select".'</option>';
					echo '</select>';
					break;
			}

			echo $this->getLookupLinks();
			return;
		}

		$lookupDc = $this->getLookupDataCommand( array(), "", false );
		$qResult = $this->lookupDataSource->getList( $lookupDc );
		if( !$qResult ) {
			showError( $this->lookupDataSource->lastError() );
		}

		//	simple classic lookup
		if($this->LCType == LCT_DROPDOWN)
		{
			$dataAttr = '';
			$selectClass = $this->pageObject->isBootstrap() ? 'form-control' : '';
			$simpleBoxClass = $this->pageObject->isBootstrap() ? 'form-control' : '';

			if( $dropDownHasSimpleBox )
			{
				$dataAttr = ' data-usesuggests="true"';
				$selectClass .= $optionContains ? ' rnr-hiddenControlSubelem' : '';
				$simpleBoxClass .= $optionContains ? '' : ' rnr-hiddenControlSubelem';
				$simpleBoxStyle = $this->pageObject->isBootstrap() ? '' : $this->getWidthStyleForAdditionalControl();
				echo '<input id="'.$this->cfield.'_simpleSearchBox" type="text" value="'.runner_htmlspecialchars($value).'" autocomplete="off" class="'.$simpleBoxClass.'" '.$simpleBoxStyle.'>';
			}

			echo '<select size="'.$this->lookupSize.'" id="'.$this->cfield.'" '
				.$this->alt.' name="'.$this->cfield.$this->postfix.'"'.$dataAttr.' class="'.$selectClass.'" '.$this->multiple.' '.$this->inputStyle.'>';
			if( !$this->multiselect )
				echo '<option value="">'."Please select".'</option>';
			else if($mode == MODE_SEARCH)
				echo '<option value=""> </option>';
		}
		else
		{
			if($this->LCType == LCT_RADIO)
				echo '<input id="'.$this->cfield.'" type="hidden" name="'.$this->cfield.'" value="'.runner_htmlspecialchars($value).'">';

			echo '<div data-lookup-options class="'. ( $this->horizontalLookup ? 'rnr-horizontal-lookup' : 'rnr-vertical-lookup' ).'">';
		}

		//	print lookup data
	 	$found = false;
		$i = 0;
		$isLookupUnique = $this->lookupType == LT_QUERY && $this->pageObject->pSetEdit->isLookupUnique($this->field);
		$uniqueArray = array();
		while( $data = $qResult->fetchAssoc() )
		{
			$this->decryptDataRow( $data );
			$linkValue = $data[ $this->linkFieldName ];
			if($isLookupUnique)
			{
				if( in_array( $linkValue, $uniqueArray) )
					continue;
				$uniqueArray[] = $linkValue;
			}

			$res = array_search( (string) $linkValue, $avalue );
			$checked = "";
			if( $res !== FALSE )
			{
				$found = true;
				$checked = $this->LCType == LCT_CBLIST || $this->LCType == LCT_RADIO ? ' checked="checked"' : ' selected';
			}
			$this->buildLookupRow($mode, $data, $checked, $i);
			$i++;
		}

		//	try the same query w/o WHERE clause if current value not found
		if(!$found && strlen($value) && $mode == MODE_EDIT && $this->pageObject->pSetEdit->isLookupWhereSet( $this->field ) )
		{
			$lookupDc = $this->getLookupDataCommand( array(), $value, false, true, false, true );
			$qResult = $this->lookupDataSource->getList( $lookupDc );
			if( !$qResult ) {
				showError( $this->lookupDataSource->lastError() );
			}
			if( $data = $qResult->fetchAssoc() )
			{
				$this->decryptDataRow($data);
				$checked = $this->LCType == LCT_CBLIST || $this->LCType == LCT_RADIO ? ' checked="checked"' : ' selected';
				$this->buildLookupRow($mode, $data, $checked, $i);
			}
		}

		// print footer
		$footer = $this->LCType == LCT_DROPDOWN ? '</select>' : '</div>';
		echo $footer;

		echo $this->getLookupLinks();
	}

	/**
	 * @param &Array data
	 */
	public function decryptDataRow(&$data)
	{
		if($this->isLinkFieldEncrypted)
			$data[$this->linkFieldName] = $this->ciphererLookup->DecryptField( $this->linkFieldName, $data[$this->linkFieldName] );
		if($this->isDisplayFieldEncrypted)
			$data[$this->displayFieldAlias] = $this->ciphererLookup->DecryptField( $this->displayFieldName, $data[$this->displayFieldAlias] );
	}

	/**
	 * Build HTML markup for a lookup item
	 * @param String mode
	 * @param Array data
	 * @param String checked
	 * @param Number i
	 * @return String
	 */
	public function buildLookupRow($mode, $data, $checked, $i)
	{
		$display_value = $data[ $this->displayFieldAlias ];
		$link_value = $data[ $this->linkFieldName ];

		if( in_array( $this->pageObject->pSetEdit->getViewFormat($this->field), array(FORMAT_DATE_SHORT, FORMAT_DATE_LONG, FORMAT_DATE_TIME) ) )
		{
			$container = new ViewControlsContainer($this->pageObject->pSetEdit, PAGE_LIST, null);

			$ctrlData = array();

			$ctrlData[ $this->field ] = $link_value;

			$display_value = $container->getControl( $this->field )->getTextValue( $ctrlData );
		}

		$render_value = $this->getLookupTextValue( $display_value );

		switch($this->LCType)
		{
			case LCT_DROPDOWN:
			case LCT_LIST:
			case LCT_AJAX:
				echo '<option value="'.runner_htmlspecialchars($data[ $this->linkFieldName ]).'"'.$checked.'>'
						.$render_value.'</option>';
				break;

			case LCT_CBLIST:
				echo '<span class="checkbox"><label>'
						.'<input id="'.$this->cfield.'_'.$i.'" class="rnr-checkbox" type="checkbox" '.$this->alt.' name="'.$this->cfield.$this->postfix
							.'" value="'.runner_htmlspecialchars( $link_value ).'"'.$checked.'/>&nbsp;'
						.'<span class="rnr-checkbox-label" id="data_'.$this->cfield.'_'.$i.'">'
							.$render_value
						.'</span>'
					.'</label></span>';
				break;

			case LCT_RADIO:
				echo '<span class="radio"><label>'
						.'<input type="Radio" class="rnr-radio-button" id="radio_'.$this->cfieldname.'_'.$i.'" '
							.$this->alt.' name="radio_'.$this->cfieldname.'" '.$checked.' value="'.runner_htmlspecialchars( $link_value ).'">'
						.' <span id="label_radio_'.$this->cfieldname.'_'.$i.'" class="rnr-radio-label">'
							.$render_value
						.'</span>'
					.'</label></span>';
				break;
		}
	}

	function getFirstElementId()
	{
		switch($this->LCType)
		{
			case LCT_AJAX:
				return "display_value_" . $this->goodFieldName . "_" . $this->id;
			break;
			default:
				return $this->cfield;
			break;
		}
	}

	/**
	 * Check if a simple search box should be displayed
	 * for a particular search options
	 * @param String searchOption
	 * @return Boolean
	 */
	public function isSearchOpitonForSimpleBox( $searchOption )
	{
		if( $searchOption == 'Contains' || $searchOption == 'Starts with' )
			return true;

		if( $searchOption != '' )
			return false;

		$userSearchOptions = $this->pageObject->pSetEdit->getSearchOptionsList( $this->field );
		return !($userSearchOptions) || in_array('Contains', $userSearchOptions) || in_array('Starts with', $userSearchOptions);
	}

	/**
	 * Check if an additional simple search box control should be added to
	 * the ordinary control's markup
	 * @return Boolean
	 */
	protected function isAdditionalControlRequired()
	{
		if( $this->multiselect )
			return false;

		$hostPageType = $this->pageObject->pSetEdit->getTableType();
		if( $hostPageType == "report" || $hostPageType == "chart" )
			return false;

		$userSearchOptions = $this->pageObject->pSetEdit->getSearchOptionsList( $this->field );
		if( !!$userSearchOptions && !in_array('Contains', $userSearchOptions) && !in_array('Starts with', $userSearchOptions) )
			return false;

		if( $this->lookupType == LT_LISTOFVALUES || $this->linkAndDisplaySame )
			return true;

		// #9875 connection and lookupConnection props must be the same
		if( $this->connection->connId != $this->lookupDataSource->getConnectionId() )
			return false;

		if( !$this->connection->checkIfJoinSubqueriesOptimized() && $this->LCType == LCT_LIST )
			return false;

		return $this->isLookupSQLquerySimple() && $this->isMainTableSQLquerySimple();
	}

	/**
	 * Get the additional control element's style attribute string
	 * @return String
	 */
	protected function getWidthStyleForAdditionalControl()
	{
		$width = $this->searchPanelControl ? 150 : $this->pageObject->pSetEdit->getControlWidth( $this->field );
		//$style = parent::makeWidthStyle( $width );

		return 'style="'.$style.'"';
	}

	/**
	 * Check if the lookup table doesn't have encription and its SQL query doesn't have HAVING,
	 * ORDER BY clauses and FROM clause with subqueries. #8564
	 * @return Boolean
	 */
	protected function isLookupSQLquerySimple()
	{
		$lookupConnection = $this->lookupDataSource->getConnection();
		if( $lookupConnection->dbType == nDATABASE_DB2 || $lookupConnection->dbType == nDATABASE_Informix || $lookupConnection->dbType == nDATABASE_SQLite3 )
			return false;

		if( $this->lookupType == LT_LOOKUPTABLE || $this->lookupType == LT_LISTOFVALUES )
			return true;

		// encription is turned on
		if( $this->lookupPSet->hasEncryptedFields() )
			return false;

		$lookupSqlQuery = $this->lookupPSet->getSQLQuery();

		if( !$lookupSqlQuery ) {
			return false;
		}

		if( $lookupSqlQuery->HasGroupBy() || $lookupSqlQuery->HavingToSql() != "" || $lookupSqlQuery->HasSubQueryInFromClause() )
			return false;

		if( $lookupConnection->dbType != nDATABASE_MySQL )
		{
			$linkFieldType = $this->lookupPSet->getFieldType( $this->linkFieldName );
			if( !(IsNumberType($this->type) && IsNumberType($linkFieldType) || IsCharType($this->type) && IsCharType($linkFieldType) || IsDateFieldType($this->type) && IsDateFieldType($linkFieldType)) )
				return false;
		}
		return true;
	}

	/**
	 * Check if the main table doesn't have encryption and its SQL query doesn't have HAVING,
	 * ORDER BY clauses and FROM clause with sub-queries. #8564
	 * @return Boolean
	 */
	protected function isMainTableSQLquerySimple()
	{
		if( $this->connection->dbType != nDATABASE_MySQL
			&& $this->connection->dbType != nDATABASE_MSSQLServer
			&& $this->connection->dbType != nDATABASE_Oracle
			&& $this->connection->dbType != nDATABASE_PostgreSQL )
			return false;

		// encription is turned on
		if( $this->pageObject->pSetEdit->hasEncryptedFields() )
			return false;

		$sqlQuery = $this->pageObject->pSetEdit->getSQLQueryByField( $this->field );

		if( !$sqlQuery ) {
			return false;
		}

		if( $sqlQuery->HasGroupBy() || $sqlQuery->HavingToSql() != "" || $sqlQuery->HasSubQueryInFromClause() )
			return false;

		return true;
	}

	/**
	 * Check if searching by displayed field is allowed
	 * @return Boolean
	 */
	protected function isSearchByDispalyedFieldAllowed()
	{
		if ( !is_null( $this->searchByDisplayedFieldIsAllowed ) )
			return $this->searchByDisplayedFieldIsAllowed;

		// #9875 connection and lookupConnection props must be the same
		if( !$this->lookupDataSource ) {
			$this->searchByDisplayedFieldIsAllowed = false;
			return $this->searchByDisplayedFieldIsAllowed;
		}
		if( $this->connection->connId != $this->lookupDataSource->getConnectionId() )
		{
			$this->searchByDisplayedFieldIsAllowed = false;
			return $this->searchByDisplayedFieldIsAllowed;
		}

		if( !$this->connection->checkIfJoinSubqueriesOptimized() && ( $this->LCType == LCT_LIST || $this->LCType == LCT_AJAX ) )
		{
			$this->searchByDisplayedFieldIsAllowed = false;
			return $this->searchByDisplayedFieldIsAllowed;
		}

		$hostPageType = $this->pageObject->pSetEdit->getTableType();

		$this->searchByDisplayedFieldIsAllowed = $hostPageType != "report" && $hostPageType != "chart" && !$this->linkAndDisplaySame
			&& !$this->multiselect && ( $this->LCType == LCT_LIST || $this->LCType == LCT_DROPDOWN || $this->LCType == LCT_AJAX )
			&& $this->lookupType != LT_LISTOFVALUES && $this->isLookupSQLquerySimple() && $this->isMainTableSQLquerySimple();

		return $this->searchByDisplayedFieldIsAllowed;
	}


	/**
	 * @param String strSearchOption
	 * @return Boolean
	 */
	public function checkIfDisplayFieldSearch( $strSearchOption )
	{
		return $this->isSearchByDispalyedFieldAllowed() && ( $strSearchOption === "Starts with" || $strSearchOption === "Contains" );
	}

	/**
	 * Get the substitute columns list for the SELECT Clause and the FORM clause part
	 * that will be joined to the basic page's FROM clause
	 * @param String searchFor
	 * @param String searchOpt
	 * @param Boolean isSuggest
	 * @return Array
	 */
	public function getSelectColumnsAndJoinFromPart($searchFor, $searchOpt, $isSuggest)
	{
		if( !$isSuggest || !$this->isSearchByDispalyedFieldAllowed() )
			return parent::getSelectColumnsAndJoinFromPart($searchFor, $searchOpt, $isSuggest);

		$this->initializeLookupTableAliases();

		return array(
			"selectColumns"=> $this->getSelectColumns( $isSuggest ),
			"joinFromPart"=> $this->getFromClauseJoinPart( $searchFor, $searchOpt, $isSuggest)
		);
	}

	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value
	 * @param Boolean not		It indicates if the search option negation is set
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */
	function getSearchOptions($selOpt, $not, $both)
	{
		$optionsArray = array();
		if ($this->multiselect)
			$optionsArray[] = CONTAINS;
		else
		{
			if($this->lookupType == LT_QUERY)
				$this->ciphererLookup = new RunnerCipherer($this->lookupTable);

			if( $this->ciphererLookup )
				$this->isDisplayFieldEncrypted = $this->ciphererLookup->isFieldPHPEncrypted( $this->displayFieldName );

			if($this->LCType == LCT_AJAX && !$this->isDisplayFieldEncrypted)
			{
				if( $this->isSearchByDispalyedFieldAllowed() || $this->linkAndDisplaySame )
				{
				$optionsArray[] = CONTAINS;
				$optionsArray[] = STARTS_WITH;
				}
				$optionsArray[] = MORE_THAN;
				$optionsArray[] = LESS_THAN;
				$optionsArray[] = BETWEEN;
			}

			if( ($this->LCType == LCT_LIST || $this->LCType == LCT_DROPDOWN) && $this->isAdditionalControlRequired() )
			{
				$optionsArray[] = CONTAINS;
				$optionsArray[] = STARTS_WITH;
			}
		}
		$optionsArray[] = EQUALS;
		$optionsArray[] = EMPTY_SEARCH;

		if($both)
		{
			if ($this->multiselect)
				$optionsArray[] = NOT_CONTAINS;
			else
			{
				if($this->LCType == LCT_AJAX && !$this->isDisplayFieldEncrypted)
				{
					if( $this->isSearchByDispalyedFieldAllowed() || $this->linkAndDisplaySame )
					{
					$optionsArray[] = NOT_CONTAINS;
					$optionsArray[] = NOT_STARTS_WITH;
					}
					$optionsArray[] = NOT_MORE_THAN;
					$optionsArray[] = NOT_LESS_THAN;
					$optionsArray[] = NOT_BETWEEN;
				}
				if( ($this->LCType == LCT_LIST || $this->LCType == LCT_DROPDOWN) && $this->isAdditionalControlRequired() )
				{
					$optionsArray[] = NOT_CONTAINS;
					$optionsArray[] = NOT_STARTS_WITH;
				}
			}

			$optionsArray[] = NOT_EQUALS;
			$optionsArray[] = NOT_EMPTY;
		}

		return $this->buildSearchOptions($optionsArray, $selOpt, $not, $both);
	}

	/**
	 * Fill the response array with the suggest values
	 *
	 *
	 * @param String value
	 *		Note: value is preceeded with "_"
	 * @param String searchFor
	 * @param &Array response
	 * @param &Array row
	 */
	function suggestValue($value, $searchFor, &$response, &$row)
	{
		parent::suggestValue($value, $searchFor, $response, $row);
		return;

		// ??????
		if( !GetGlobalData("handleSearchSuggestInLookup", true) || $this->lookupType == LT_LISTOFVALUES || $this->isSearchByDispalyedFieldAllowed() )
		{
			parent::suggestValue($value, $searchFor, $response, $row);
			return;
		}

		$lookupDc = $this->getLookupDataCommand( array(), substr($value, 1), false, true, true, true );
		$qResult = $this->lookupDataSource->getList( $lookupDc );

		if( $data = $qResult->fetchAssoc() )
		{
			// "_" is added to convert number type to string
			if( $this->isDisplayFieldEncrypted )
			{
				$lookup_value = "_" . $this->ciphererLookup->DecryptField( $this->displayFieldName , $data[ $this->displayFieldAlias ] );
			}
			else
				$lookup_value = "_" . $data[ $this->displayFieldAlias ];

			parent::suggestValue($lookup_value, $searchFor, $response, $row);
		}
	}

	/**
	 * @param Array parentValuesData
	 * @return Boolean
	 */
	protected function needCategoryFiltering( $parentValuesData )
	{
		foreach( $this->pageObject->pSetEdit->getParentFieldsData( $this->field ) as $cData )
		{
			$strCategoryControl = $cData['main'];

			if( !isset( $parentValuesData[ $cData['main'] ] ) )
				continue ;

			$parentValue = $parentValuesData[ $cData['main'] ];
			$parentVals = $this->pageObject->pSetEdit->multiSelect($strCategoryControl) ? splitLookupValues( $parentValue ) : array( $parentValue );

			foreach( $parentVals as $parentVal )
			{
				if( strlen( trim( $parentVal ) ) )
					return true;
			}
		}

		return false;
	}

	/**
	 * Get for the dependent lookup an array containing the link field values with even indices
	 * and the corresponding displayed values with odd indices
	 *
	 * @intellisense
	 * @param Array parentValuesData
	 * @param String childVal
	 * @param Boolean doCategoryFilter
	 * @param Boolean initialLoad
	 * @return Array
	 */
	public function loadLookupContent( $parentValuesData, $childVal = "", $doCategoryFilter = true, $initialLoad = true )
	{
		if( $this->bUseCategory && $doCategoryFilter )
		{
			if( !$this->needCategoryFiltering( $parentValuesData ) )
				return array();
		}

		$lookupDc = $this->getLookupDataCommand( $parentValuesData, $childVal, $doCategoryFilter, $this->LCType == LCT_AJAX && $initialLoad );
		return $this->getLookupContentData( $lookupDc, $childVal != "" );
	}

	/**
	 * @param DsCommand lookupDc
	 * @param Boolean selectValue
	 * @return Array
	 */
	protected function getLookupContentData( $lookupDc, $selectValue )
	{
		$response = array();
		$qResult = $this->lookupDataSource->getList( $lookupDc );
		if( !$qResult ) {
			showError( $this->lookupDataSource->lastError() );
		}

		if( $this->LCType !== LCT_AJAX || $this->multiselect )
		{
			$isUnique = $this->pageObject->pSetEdit->isLookupUnique( $this->field );
			$uniqueArray = array();
			while( $data = $qResult->fetchAssoc() )
			{
				$dispValue = $data[ $this->displayFieldAlias ];
				if( $isUnique )
				{
					if( in_array( $dispValue, $uniqueArray) )
						continue;

					$uniqueArray[] = $dispValue;
				}
				$response[] = $data[ $this->linkFieldName ];
				$response[] = $this->getLookupTextValue( $dispValue );
			}
		}
		else
		{
			$data = $qResult->fetchAssoc();
			//	assign value if it is asked for, or if there is only oine record in recordset

			if( $data && ( $selectValue || !$qResult->fetchAssoc() ) )
			{
				$response[] = $data[ $this->linkFieldName ];
				$response[] = $this->getLookupTextValue( $data[ $this->displayFieldAlias ] );
			}
		}

		return $response;
	}

	/**
	 * @param Boolean isExistParent
	 * @param Number mode
	 * @param Array parentCtrlsData
	 * @return Mixed
	 */
	public function getLookupContentToReload( $isExistParent, $mode, $parentCtrlsData )
	{
		// there are parent lookups on the page
		if( $isExistParent )
		{
			$hasEmptyParent = false;
			foreach($parentCtrlsData as $value)
			{
				if( $value === '' )
				{
					$hasEmptyParent = true;
					break;
				}
			}

			if( !$hasEmptyParent )
			{
				// there are parent lookups on the page none of them is empty
				return $this->loadLookupContent( $parentCtrlsData, '', true, false );
			}

			if( $mode == MODE_SEARCH || $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD || $mode == MODE_ADD )
				return '';

			// which mode is this?
			return $this->loadLookupContent( $parentCtrlsData, '', true, false );
		}
		// there are not parent lookups on the page
		else
		{
			if( $mode == MODE_SEARCH || $mode == MODE_INLINE_ADD || $mode == MODE_ADD || $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT )
				return $this->loadLookupContent( array(), '', false, false );

			return $this->loadLookupContent( array(), '', true, false );
		}

		return '';
	}

	/**
	 * @param String linkFieldVal
	 * @return Array
	 */
	public function getAutoFillData( $linkFieldVal )
	{
		$data = array();

		$lookupDc = $this->getLookupDataCommand( array(), $linkFieldVal, false, true, true );
		$rs = $this->lookupDataSource->getList( $lookupDc );
		if( !$rs ) {
			showError( $this->lookupDataSource->lastError() );
		}
		$row = $rs->fetchAssoc();

		$autoCompleteFields = $this->pageObject->pSetEdit->getAutoCompleteFields( $this->field );
		if( $this->lookupType == LT_QUERY )
		{
			$data =  $this->ciphererLookup->DecryptFetchedArray( $row );
		}
		else
		{
			foreach( $autoCompleteFields as $aData )
			{
				$data[ $aData["lookupF"] ] = $row[ $aData["lookupF"] ];
			}
		}

		$ret = array();
		$masterData = array();
		foreach( $autoCompleteFields as $aData ) {
			$masterData[ $aData["masterF"] ] = $data[ $aData["lookupF"] ];

			$fieldData = array();
			$val = $data[ $aData["lookupF"] ];
			$ctrl = $this->pageObject->getControl( $aData["masterF"] );
			$dispValue = $ctrl->getDisplayValue( $masterData );
			if( $ctrl->format == EDIT_FORMAT_READONLY ) {
				$fieldData["value"] = $val;
				$fieldData["dispValue"] = $dispValue;
			} else {
				$fieldData["value"] = $dispValue;
			}

			$ret[ $aData["lookupF"] ] = $fieldData;
		}
		
		if( !$ret )
			$ret[ $this->field ] = '';

		return $ret;
	}


	function getInputStyle( $mode )
	{
		if ($this->pageObject->isBootstrap())
			return "class='form-control'";
		else
			return parent::getInputStyle($mode);
	}

	/**
	 * Select & Add new links block
	 * @param Boolean hiddenSelect
	 * @return String
	 */
	protected function getLookupLinks( $hiddenSelect = false )
	{
		$links = array();

		if( $this->LCType == LCT_LIST )
		{
			$visibility = $hiddenSelect ? ' style="visibility: hidden;"' : '';
			$links[] = '<a href="#" id="'.$this->openlookup.'"'.$visibility.'>'."Select".'</a>';
		}

		if( $this->addNewItem )
			$links[] = '<a href="#" id="addnew_'.$this->cfield.'">'."Add new".'</a>';

		if( !count($links) )
			return "";

		if( $this->pageObject->isBootstrap() )
			return '<div class="bs-lookup-links">'.implode("", $links).'</div>';

		return '&nbsp;'.implode('&nbsp;', $links);
	}
	public function getBasicFieldCondition( $searchFor, $strSearchOption, $searchFor2 = "", $etype = "" ) {
		if( !$this->multiselect ) 
			return $this->singleValueCondition( $searchFor, $strSearchOption, $searchFor2 );
		else 
			return $this->multiValueCondition( $searchFor, $strSearchOption, $searchFor2 );

	}
	public function multiValueCondition( $searchFor, $strSearchOption, $searchFor2 = "" ) {
		$values = splitLookupValues( $searchFor );
		//	single-select on Add/Edit, butmuti on search
		if( !$this->pageObject->pSetEdit->multiSelectLookupEdit( $this->field ) ) {
			$conditions = array();
			foreach( $values as $v ) {
				$conditions[] = $this->singleValueCondition( $v, $strSearchOption, $searchFor2 );
			}
			return DataCondition::_Or( $conditions );
		}
		//	true muti-select control
		//	takes only Equals and Contains
		if( $strSearchOption == EQUALS ) {
			//	all of searched values must be present in the field
			return DataCondition::FieldHasList( $this->field, dsopALL_IN_LIST, $values );
		}
		if( $strSearchOption == CONTAINS ) {
			//	at least one of searched values must be present in the field
			return DataCondition::FieldHasList( $this->field, dsopSOME_IN_LIST, $values );
		}
		return null;
	}

	
	public function singleValueCondition( $searchFor, $strSearchOption, $searchFor2 = "" ) {
		$cond = parent::getBasicFieldCondition( $searchFor, $strSearchOption, $searchFor2 );
		
		if( $this->displayFieldSearch( $strSearchOption ) ) {
			$cond->operands[0]->joinData = $this->createJoinData();
		}
		return $cond;
	}

	/**
	 * Returns true when searching by display field makes sense.
	 * It only takes in account field Edit settings.
	 * Database and other limitations are handled by the datasource
	 * @return Boolean
	 */
	protected function displayFieldSearch( $searchOption ) 
	{
		if( $searchOption !== CONTAINS && $searchOption !== STARTS_WITH ) {
			//	basic search, no display field substitution
			return false;
		}
		if( $this->linkAndDisplaySame || $this->lookupType == LT_LISTOFVALUES ) {
			//	no lookup display field
			return false;
		}

		if( $this->multiselect && $this->pageObject->pSetEdit->multiSelectLookupEdit( $this->field )) {
			// multiselect everywhere
			return false;
		}
		return true;

	}

	/**
	 * @return DsJoinData
	 */
	protected function createJoinData() {
		$jd = new DsJoinData;
		$jd->dataSource = $this->lookupDataSource;
		$jd->linkField = $this->linkFieldName;
		if( $this->customDisplay )
			$jd->displayExpression = $this->displayFieldName;
		else
			$jd->displayField = $this->displayFieldName;
		
		//	we assume here that 'AJAX' and 'List page' lookups are choosen when the lookup table is rather long
		$jd->longList = ( $this->LCType == LCT_AJAX || $this->LCType == LCT_LIST );
		$jd->displayAlias = generateAlias();
		return $jd;
	}

	/**
	 * Returns command for the list of lookup values
	 * @param Array parentValuesData
	 * @param String value - field value.
	 * @param Boolean doCategoryFilter - dependent dropdowns
	 * @param Boolean doValueFilter	- select only one value
	 * @param Boolean doWhereFilter - add custom WHERE filter
	 * @param Boolean oneRecordMode
	 *
	 * @return DsCommand
	 */

	 protected function getLookupDataCommand(
		 $parentValuesData,
		 $value = "",
		 $doCategoryFilter = true,
		 $doValueFilter = false,
		 $doWhereFilter = true,
		 $oneRecordMode = false )
	{
		$pSet = $this->pageObject->pSetEdit;

		$ret = LookupField::makeLookupDataCommand(
			$this->field,
			$pSet,
			$parentValuesData,
			$value,
			$doCategoryFilter,
			$doValueFilter,
			$doWhereFilter,
			$oneRecordMode
		);
		$this->displayFieldAlias = $ret["displayField"];
		return $ret["dc"];


	}

	/**
	 * @param String field name
	 * @param ProjectSettings
	 * @param Array parentValuesData
	 * @param String value - field value.
	 * @param Boolean doCategoryFilter - dependent dropdowns
	 * @param Boolean doValueFilter	- select only one value
	 * @param Boolean doWhereFilter - add custom WHERE filter
	 * @param Boolean oneRecordMode
	 * @return array
	 * 	"ds" => DsCommand
	 *  "displayField" => display field alias in the command result
	 */
	public static function makeLookupDataCommand( $field, $pSet, $parentValuesData, $value, $doCategoryFilter, $doValueFilter, $doWhereFilter, $oneRecordMode )
	{

		$dc = new DsCommand();

		//	order
		$orderField = $pSet->getLookupOrderBy( $field );
		if( $orderField ) {
			$dir = $pSet->isLookupDesc( $field ) ? 'DESC' : 'ASC';
			$dc->order[] = array( "column" => $orderField, "dir" => $dir );
		} else {
			$lookupType = $pSet->getLookupType( $field );
			if( $lookupType == LT_QUERY ) {
				require_once( getabspath('classes/orderclause.php') );
				$lookupTable = $pSet->getLookupTable( $field );
				$dc->order = OrderClause::originalOrderFields( new ProjectSettings( $lookupTable ) );
			}
		}

		//	custom display field
		$displayField = $pSet->getDisplayField( $field );
		if( $pSet->getCustomDisplay( $field ) ) {
			$displayFieldAlias = generateAlias();
			$dc->extraColumns[] = new DsFieldData( $displayField, $displayFieldAlias, "" );
		} else {
			$displayFieldAlias = $displayField;
		}

		//	filters
		$filters = array();

		//	select only current value
		if( $doValueFilter ) {
			if( $value === "" || $value === null ) {
				//	add/search page or empty value
				$filters[] = DataCondition::_False();
			} else {
				$linkField = $pSet->getLinkField( $field );
				$multiselect = $pSet->multiSelect( $field );
				if( !$multiselect ) {
					$filters[] = DataCondition::FieldEquals( $linkField , $value );
				} else {
					$values = splitLookupValues( $value );
					$valueConditions = array();
					foreach( $values as $v ) {
						$valueConditions[] = DataCondition::FieldEquals( $linkField , $v );
					}
					$filters[] = DataCondition::_Or( $valueConditions );
				}
			}
		}

		//	user-provided WHERE expression
		if( $doWhereFilter )
		{
			$filters[] = DataCondition::SQLCondition( prepareLookupWhere( $field, $pSet ) );
		}

		//	security filter
		//	only check row-level permissions
		if( $pSet->getLookupType( $field ) == LT_QUERY ) {
			$filters[] = Security::SelectCondition( "S", new ProjectSettings( $pSet->getLookupTable($field) ), true );
		}

		//	category filter
		$parents = $pSet->getParentFieldsData( $field );
		if( $doCategoryFilter && $parentValuesData && $parents )
		{
			$parentFilters = array();
			foreach( $parents as $cdata ) {
				$mainControlName = $cdata['main'];
				$filterFieldName = $cdata['lookup'];
				$mainControlVal = $parentValuesData[ $mainControlName ];

				if( $pSet->multiSelect( $mainControlName ) || strlen( $mainControlVal ) )
					$filters[] = LookupField::categoryCondition( $pSet, $mainControlName, $filterFieldName, $mainControlVal );
			}
		}

		if( $pSet->isLookupUnique($field) ) {
			$dc->totals[] = array( "field" => $pSet->getLinkField($field), "total" => "distinct" );
			$dc->totals[] = array( "field" => $displayFieldAlias, "total" => "distinct" );
		}

		$dc->filter = DataCondition::_And( $filters );

		if( $oneRecordMode )
			$dc->reccount = 1;
		return array(
			"dc" => $dc,
			"displayField" => $displayFieldAlias
		);
	}


	/**
	 * 
	 */
	public static function categoryCondition( $pSet, $parentControlName, $filterFieldName, $parentControlValue ) {
		//	single-select
		if( !$pSet->multiSelect( $parentControlName ) ) {
			return DataCondition::FieldEquals( $filterFieldName, $parentControlValue );
		}

		//	multiselect parent
		$values = splitLookupValues( $parentControlValue );

		$conditions = array();
		foreach( $values as $value )
		{
			$conditions[] = DataCondition::FieldEquals( $filterFieldName, $value );
		}

		return DataCondition::_Or( $conditions );
	}

	public function getSuggestCommand( $searchFor, $searchOpt, $numberOfSuggests ) 
	{
		$dc = parent::getSuggestCommand( $searchFor, $searchOpt, $numberOfSuggests );
	
		//	add extra field and replace totals
		if( $this->displayFieldSearch( $searchOpt ) ) {
			
			$displayAlias = generateAlias();
			$dc->extraColumns[] = new DsFieldData( "", $displayAlias, $this->field, 0, $this->createJoinData() );

			$dc->totals = array( 
				array(
					"field" => $displayAlias,
					"total" => "distinct"
				) 
			);
		}

		return $dc;
	}

	protected function getLookupTextValue( $displayValue ) {
		if( $this->pageObject->pSetEdit->getViewFormat( $this->field ) == FORMAT_HTML ) {
			if ( $this->LCType == LCT_CBLIST || $this->LCType == LCT_RADIO ) {
				return $displayValue;
			}
		}

		return runner_htmlspecialchars( $displayValue );
	}
}
?>