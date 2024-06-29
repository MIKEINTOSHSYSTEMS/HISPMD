<?php

class ExportPage extends RunnerPage
{
	public $exportType = "";

	public $allPagesMode = false;
	public $currentPageMode = false;
	
	protected $textFormattingType;

	public $useRawValues = false;

	public $csvDelimiter = ",";

	public $selectedFields = array();

	/**
	 * @constructor
	 * @param &Array params
	 */
	function __construct( &$params )
	{
		parent::__construct( $params );

		if( $this->getLayoutVersion() === PD_BS_LAYOUT ) 
		{
			$this->headerForms = array( "top" );
			$this->footerForms = array( "footer" );
			$this->bodyForms = array( "grid" );
		} 
		else 
		{		
			$this->formBricks["header"] = "exportheader";
			$this->formBricks["footer"] = "exportbuttons";
			$this->assignFormFooterAndHeaderBricks( true );
		}
		
		if( $this->pSet->chekcExportDelimiterSelection() )
			$this->jsSettings["tableSettings"][ $this->tName ]["csvDelimiter"] = $this->pSet->getExportDelimiter();

		$this->textFormattingType = $this->pSet->getExportTxtFormattingType();

		$this->useRawValues = $this->useRawValues || $this->textFormattingType == EXPORT_RAW;

		if( $this->exportType && $this->useRawValues && $this->textFormattingType == EXPORT_FORMATTED )
			$this->useRawValues = false;

		if( !$this->selectedFields )
			$this->selectedFields = $this->pSet->getExportFields();

		if( !$this->searchClauseObj )
			$this->searchClauseObj = $this->getSearchObject();
			
		if( $this->selection )
			$this->jsSettings["tableSettings"][ $this->tName ]["selection"] = $this->getSelection();			
	}

	
	/**
	 *
	 */
	public function process()
	{
		if( $this->eventsObject->exists("BeforeProcessExport") )
			$this->eventsObject->BeforeProcessExport( $this );

		if( $this->exportType ) {
			$this->exportByType();
			exit();
			return;
		}

		$this->fillSettings();

		$this->doCommonAssignments();
		$this->addButtonHandlers();
		$this->addCommonJs();

		$this->displayExportPage();
	}

	/**
	 *
	 */
	function addCommonJs()
	{
		parent::addCommonJs();

		if( $this->pSet->checkExportFieldsSelection() && $this->isBootstrap() )
		{
			$this->AddCSSFile("include/chosen/bootstrap-chosen.css");
			$this->AddJSFile("include/chosen/chosen.jquery.js");
		}
	}

	/**
	 * Assign basic page's xt variables
	 */
	protected function doCommonAssignments()
	{

		if( $this->mode == EXPORT_SIMPLE )
		{
			$this->body["begin"] = GetBaseScriptsForPage( false );
			$this->body["end"] = XTempl::create_method_assignment( "assignBodyEnd", $this );
			$this->xt->assignbyref("body", $this->body);
		}
		else
			$this->xt->assign("cancel_button", true);

		$this->xt->assign("groupExcel", true);
		$this->xt->assign("exportlink_attrs", 'id="saveButton'.$this->id.'"');

		if( $this->pSet->checkExportFieldsSelection() && $this->isBootstrap() )
		{
			$this->xt->assign("choosefields", true);
			$this->xt->assign("exportFieldsCtrl", $this->getChooseFieldsCtrlMarkup() );
		}

		if( !$this->selection )
		{
			$this->xt->assign("rangeheader_block", true);
			$this->xt->assign("range_block", true);
		}

		if( $this->textFormattingType == EXPORT_BOTH )
			$this->xt->assign("exportformat", true);
	}

	/**
	 * @return String
	 */
	protected function getChooseFieldsCtrlMarkup()
	{
		$options = array();
		foreach( $this->pSet->getExportFields() as $field )
		{
			$options[] = '<option value="'.runner_htmlspecialchars( $field ).'" selected="selected">'.runner_htmlspecialchars( $this->pSet->label( $field ) ).'</option>';
		}

		return '<select name="exportFields" multiple style="width: 100%;" data-placeholder="'."Please select".'" id="exportFields'. $this->id .'">'. implode( "", $options ) .'</select>';
	}
	
	/**
	 *
	 */
	protected function exportByType()
	{
		$myPage = 1;
		$pageSize = 0;
		if( $this->currentPageMode ) {
			$myPage = (integer)@$_SESSION[ $this->tName."_pagenumber" ];
			if( !$myPage )
				$myPage = 1;

			$pageSize = (integer)@$_SESSION[ $this->tName."_pagesize" ];
			if( !$pageSize )
				$pageSize = $this->pSet->getInitialPageSize();

			if( $this->pSet->getRecordsLimit() )
				$pageSize = $this->pSet->getRecordsLimit() - ( $myPage - 1 ) * $pageSize;
			
			if( $pageSize < 0 )
				$pageSize = 0;
			
		} else if( $this->allPagesMode && $this->pSet->getRecordsLimit() ) {
			$pageSize = $this->pSet->getRecordsLimit();
		}
		

		$dc = $this->getSubsetDataCommand();
		if( $this->currentPageMode || $this->allPagesMode && $this->pSet->getRecordsLimit() ) {
			$dc->startRecord = $pageSize * ( $myPage - 1 );
			$dc->reccount = $pageSize;				
		}

		if( $this->eventsObject->exists("BeforeQueryExport") ) {
			$prep = $this->dataSource->prepareSQL( $dc );
			$sql = $prep["sql"];
			$where = $prep["where"];
			$order = $prep["order"];
			
			$this->eventsObject->BeforeQueryExport( $sql, $where, $order, $this );
			if( $sql != $prep["sql"] ) {
				$this->dataSource->overrideSQL( $dc, $sql );
			} else if( $where != $prep["where"] ) {
				$this->dataSource->overrideWhere( $dc, $where );
			}
			if( $order != $prep["order"] ) {
				$this->dataSource->overrideOrder( $dc, $order );
			}
		}
		runner_set_page_timeout(300);

		$rs = $this->dataSource->getList( $dc );
		if( !$rs ) {
			showError( $this->dataSource->lastError() );
		}
		
		$this->exportTo( $this->exportType, $rs , $pageSize );
	}

	public function getSubsetDataCommand( $ignoreFilterField = "" ) {
		$dc = parent::getSubsetDataCommand( $ignoreFilterField );
		
		$this->reoderCommandForReoderedRows( $this->getListPSet(), $dc );
		return $dc;
	}
	
	/**
	 * @param String type
	 * @param Mixed rs
	 * @param Number pageSize
	 */
	public function exportTo( $type, $rs, $pageSize )
	{
		global $locale_info;

		if( substr($type, 0, 5) == "excel" )
			$type = "excel";
		
		if( $type == "excel" ) 
		{
			$locale_info["LOCALE_SGROUPING"] = "0";
			$locale_info["LOCALE_SMONGROUPING"] = "0";
			ExportToExcel( $rs, $pageSize, $this );
		} 
		else if( $type == "word" ) 
		{
				$this->ExportToWord( $rs, $pageSize );
		}
		else if( $type == "xml" ) 
		{
			$this->ExportToXML( $rs, $pageSize );
		}
		else if( $type == "csv" ) 
		{
			$locale_info["LOCALE_SGROUPING"] = "0";
			$locale_info["LOCALE_SDECIMAL"] = ".";
			$locale_info["LOCALE_SMONGROUPING"] = "0";
			$locale_info["LOCALE_SMONDECIMALSEP"] = ".";

			$this->ExportToCSV( $rs, $pageSize );
		}
	}

	/**
	 * @param Mixed rs
	 * @param Number pageSize
	 */
	public function ExportToWord( $rs, $pageSize )
	{
		global $cCharset;
		header("Content-Type: application/vnd.ms-word");
		header("Content-Disposition: attachment;Filename=".GetTableURL( $this->tName ).".doc");

		echo "<html>";
		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
		echo "<body>";
		echo "<table border=1>";

		$this->WriteTableData( $rs, $pageSize );

		echo "</table>";
		echo "</body>";
		echo "</html>";
	}

	/**
	 * @param Mixed rs
	 * @param Number pageSize
	 */
	public function ExportToXML( $rs, $pageSize )
	{
		global $cCharset;

		header("Content-Type: text/xml");
		header("Content-Disposition: attachment;Filename=".GetTableURL( $this->tName ).".xml");
		
		echo "<?xml version=\"1.0\" encoding=\"".$cCharset."\" standalone=\"yes\"?>\r\n";
		echo "<table>\r\n";
		
		$this->viewControls->setForExportVar("xml");

		$row = $this->cipherer->DecryptFetchedArray( $rs->fetchAssoc() );
		$numberOfRows = 0;
		
		while( ( !$pageSize || $numberOfRows < $pageSize ) && $row )
		{
			RunnerContext::pushRecordContext( $row, $this );
			$values = $this->getValuesFromRow( $row );
			
			$eventRes = true;
			if( $this->eventsObject->exists('BeforeOut') )
				$eventRes = $this->eventsObject->BeforeOut( $row, $values, $this );

			if( $eventRes ) {
				$numberOfRows++;
				
				echo "<row>\r\n";
				foreach( $values as $fName => $val ) {
					$field = runner_htmlspecialchars( XMLNameEncode( $fName ) );
					echo "<".$field.">" . xmlencode( $values[ $fName ] ) . "</".$field.">\r\n";
				}
				echo "</row>\r\n";
			}

			RunnerContext::pop();
			$row = $this->cipherer->DecryptFetchedArray( $rs->fetchAssoc() );
		}

		echo "</table>\r\n";
	}

	/**
	 * @param Mixed rs
	 * @param Number pageSize
	 */
	public function ExportToCSV( $rs, $pageSize )
	{
		if( $this->pSet->chekcExportDelimiterSelection() && strlen( $this->csvDelimiter ) )
			$delimiter = $this->csvDelimiter;
		else
			$delimiter = $this->pSet->getExportDelimiter();

		header("Content-Type: application/csv");
		header("Content-Disposition: attachment;Filename=".GetTableURL($this->tName).".csv");
		printBOM();

		$this->viewControls->setForExportVar( "csv" );

		$row = $this->cipherer->DecryptFetchedArray( $rs->fetchAssoc() );
		
		// write header
		$headerParts = array();
		foreach( $this->selectedFields as $field )
		{
			$headerParts[] = '"'.str_replace( '"', '""', $field ).'"';
		// 	$headerParts[] = '"'.str_replace( '"', '""', GetFieldLabel( GoodFieldName( $this->tName ), GoodFieldName( $field ) ) ).'"';			
		}
		echo implode( $delimiter, $headerParts );
		echo "\r\n";

		// write data rows
		$numberOfRows = 0;
		while( ( !$pageSize || $numberOfRows < $pageSize ) && $row )
		{
			RunnerContext::pushRecordContext( $row, $this );
			$values = $this->getValuesFromRow( $row );

			$eventRes = true;
			if( $this->eventsObject->exists('BeforeOut') )
				$eventRes = $this->eventsObject->BeforeOut( $row, $values, $this );

			if( $eventRes ) {
				$dataRowParts = array();
				foreach( $this->selectedFields as $field ) {
					$dataRowParts[] = '"'.str_replace( '"', '""', $values[ $field ] ).'"';
				}
				echo implode( $delimiter, $dataRowParts );
			}
			
			RunnerContext::pop();
			
			$numberOfRows++;
			$row = $this->cipherer->DecryptFetchedArray( $rs->fetchAssoc() );

			if( ( !$pageSize || $numberOfRows < $pageSize) && $row && $eventRes )
				echo "\r\n";
		}
	}

	/**
	 * @param String fName
	 * @param Array row
	 */
	public function getFormattedFieldValue( $fName, $row )
	{
		if( $this->useRawValues )
			return $row[ $fName ];

		return $this->getExportValue( $fName, $row, "", $this->exportType == "word" );
	}

	/**
	 * @param Mixed rs
	 * @param Number pageSize
	 */
	protected function WriteTableData( $rs, $pageSize )
	{
		$totalFieldsData = $this->pSet->getTotalsFields();
		$row = $this->cipherer->DecryptFetchedArray( $rs->fetchAssoc() );

		// write header
		echo "<tr>";
		foreach( $this->selectedFields as $field ) {
			if( $this->exportType == "excel" )
				echo '<td style="width: 100" x:str>'.PrepareForExcel( $this->pSet->label( $field ) ).'</td>';
			else
				echo "<td>".$this->pSet->label( $field )."</td>";
		}
		echo "</tr>";

		$totals = array();
		$totalsFields = array();
		foreach( $totalFieldsData as $data )
		{
			if( !in_array( $data["fName"], $this->selectedFields ) )
				continue;

			$totals[ $data["fName"] ] = array("value" => 0, "numRows" => 0);
			$totalsFields[] = array('fName' => $data["fName"], 'totalsType' => $data["totalsType"], 
				'viewFormat' => $this->pSet->getViewFormat( $data["fName"] ));
		}

		// write data rows
		$numberOfRows = 0;
		$this->viewControls->setForExportVar( "export" );
		while( ( !$pageSize || $numberOfRows < $pageSize ) && $row )
		{
			RunnerContext::pushRecordContext( $row, $this );			
			countTotals( $totals, $totalsFields, $row );
			$values = $this->getValuesFromRow( $row );

			$eventRes = true;
			if( $this->eventsObject->exists('BeforeOut') )
				$eventRes = $this->eventsObject->BeforeOut( $row, $values, $this );

			if( $eventRes )
			{
				$numberOfRows++;
				echo "<tr>";

				foreach( $this->selectedFields as $field )
				{
					$fType = $this->pSet->getFieldType( $field );
					if( IsCharType( $fType ) && $this->exportType == "excel" )
						echo '<td x:str>';
					else
						echo '<td>';

					$editFormat = $this->pSet->getEditFormat( $field );
					if( $editFormat == EDIT_FORMAT_LOOKUP_WIZARD )
					{
						if( $this->pSet->NeedEncode( $field ) && $this->exportType == "excel" )
							echo PrepareForExcel( $values[ $field ] );
						else
							echo $values[ $field ];
					}
					elseif( IsBinaryType( $fType ) )
					{
						echo $values[ $field ];
					}
					else
					{
						if( NeedQuotes( $field ) && $this->exportType == "excel" && $editFormat != FORMAT_CUSTOM && !$this->pSet->isUseRTE( $field ) )
							echo PrepareForExcel( $values[ $field ] );
						else
							echo $values[ $field ];
					}

					echo '</td>';
				}
				echo "</tr>";
			}

			RunnerContext::pop();
			
			$row = $this->cipherer->DecryptFetchedArray( $rs->fetchAssoc() );
		}

		if( count( $totalFieldsData ) )
		{
			echo "<tr>";
			foreach( $totalFieldsData as $data )
			{
				if( !in_array( $data["fName"], $this->selectedFields ) )
					continue;

				echo "<td>";
				if( strlen( $data["totalsType"] ) )
				{
					if( $data["totalsType"] == "COUNT" )
						echo "Count".": ";
					elseif( $data["totalsType"] == "TOTAL" )
						echo "Total".": ";
					elseif( $data["totalsType"] == "AVERAGE" )
						echo "Average".": ";

					echo runner_htmlspecialchars( GetTotals($data["fName"],
						$totals[ $data["fName"] ]["value"],
						$data["totalsType"],
						$totals[ $data["fName"] ]["numRows"],
						$this->pSet->getViewFormat( $data["fName"] ),
						PAGE_EXPORT,
						$this->pSet, $this->useRawValues,
						$this ) );
				}

				echo "</td>";
			}

			echo "</tr>";
		}
	}

	public function getValuesFromRow( &$row ) {
		$values = array();
		foreach( $this->selectedFields as $field )
		{
			$fType = $this->pSet->getFieldType( $field );
			if( IsBinaryType( $fType ) )
				$values[ $field ] = "LONG BINARY DATA - CANNOT BE DISPLAYED";
			else
				$values[ $field ] = $this->getFormattedFieldValue( $field, $row );
		}
		return $values;
	}
	
	/**
	 * @deprecated
	 * @param Mixed rs
	 * @param Number nPageSize
	 */
	public function ExportToExcel_old($rs, $nPageSize)
	{
		global $cCharset;
		header("Content-Type: application/vnd.ms-excel");
		header("Content-Disposition: attachment;Filename=".GetTableURL( $this->tName ).".xls");

		echo "<html>";
		echo "<html xmlns:o=\"urn:schemas-microsoft-com:office:office\" xmlns:x=\"urn:schemas-microsoft-com:office:excel\" xmlns=\"http://www.w3.org/TR/REC-html40\">";

		echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=".$cCharset."\">";
		echo "<body>";
		echo "<table border=1>";

		$this->WriteTableData( $rs, $nPageSize );

		echo "</table>";
		echo "</body>";
		echo "</html>";
	}

	/**
	 *
	 */
	protected function displayExportPage()
	{
		$templatefile = $this->templatefile;

		if( $this->eventsObject->exists("BeforeShowExport") )
			$this->eventsObject->BeforeShowExport( $this->xt, $templatefile, $this );

		if( $this->mode == EXPORT_POPUP )
		{
			$this->xt->assign("footer", false);
			$this->xt->assign("header", false);
			$this->xt->assign("body", $this->body);

			$this->displayAJAX( $templatefile, $this->id + 1 );
			exit();
		}

		$this->display( $templatefile );
	}

	/**
	 * @return Number
	 */
	public static function readModeFromRequest()
	{
		if( postvalue("onFly") )
			return EXPORT_POPUP;

		return EXPORT_SIMPLE;
	}

	
	public function getDataSourceFilterCriteria( $ignoreFilterField = "" ) {
		$filter = parent::getDataSourceFilterCriteria();
		$selectedRecords = $this->getSelectedRecords();

		if( $selectedRecords !== null ) {
			$keyFields = $this->pSet->getTableKeys();
			
			$recConditions = array();
			foreach( $selectedRecords as $keys ) {
				$recConditions[] = DataCondition::FieldsEqual( $keyFields, $keys );
			}

			$filter = DataCondition::_And( array( 
				$filter,
				DataCondition::_Or( $recConditions )
			));
		}
		return $filter;
	}
	
	public function getSecurityCondition() {
		return Security::SelectCondition( "P", $this->pSet );
	}
}