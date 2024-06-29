<?php

class ImportPage extends RunnerPage
{
	/**
	 * An audit object instance
	 * @type Mixed
	 */
	public $audit = null;

	/**
	 * @type String
	 */
	public $action;

	/**
	 * @type String
	 */
	public $importType;

	/**
	 * @type String
	 */
	public $importText;

	/**
	 * @type Boolean
	 */
	public $useXHR = false;

	/**
	 * @type Array
	 */
	public $importData;

	/**
	 * The final date format used in the actual import.
	 * This variable is set in the beginning of the actual import process ( insert into the database ) and used through it.
	 * @type string
	 */
	public $currentDateFormat;


	/**
	 * @constructor
	 * @param &Array params
	 */
	function __construct(&$params)
	{
		parent::__construct($params);

		$this->audit = GetAuditObject( $this->tName );
		$this->jsSettings["tableSettings"][ $this->tName ]["importFieldsLabels"] = $this->getImportfieldsLabels();
	}

	/**
	 * Get import fields labels data
	 * @return Array
	 */
	protected function getImportfieldsLabels() {
		$importFieldsLabels = array();
		foreach( $this->pSet->getImportFields() as $importField ) {
			$importFieldsLabels[ $importField ] = GetFieldLabel( GoodFieldName($this->tName), GoodFieldName($importField) );
		}

		return $importFieldsLabels;
	}

	/**
	 * Process the page
	 */
	public function process()
	{
		if( !strlen( $this->action ) )
			$this->removeOldTemporaryFiles();

		//	Before Process event
		if( $this->eventsObject->exists("BeforeProcessImport") )
			 $this->eventsObject->BeforeProcessImport( $this );

		if( $this->action == "importPreview" ) {
			$this->prepareAndSentPreviewData();
			return;
		}

		if( $this->action == "importData" ) {
			//	CSRF protection
			if( !isPostRequest() )
				return false;

			$this->runImportAndSendResultReport();
			return;
		}

		if( $this->action == "downloadReport" )
		{
			$this->downloadReport();
			return;
		}

		if( $this->action == "downloadUnprocessed" )
		{
			$this->downloadUnprocessed();
			return;
		}

		$this->doCommonAssignments();

		$this->addButtonHandlers();
		$this->addCommonJs();

		$this->displayImportPage();
	}

	/**
	 * Send the preview data to client
	 */
	protected function prepareAndSentPreviewData()
	{
		$response = array();

		// prepare the temp import file name
		$rnrTempFileName = $this->getImportTempFileName();
		// prepare the temp file path
		$rnrTempImportFilePath = getabspath("templates_c/".$rnrTempFileName.".csv");

		if( $this->importType == "text" ) {
			// save file in a temporary directory
			runner_save_textfile( $rnrTempImportFilePath, $this->importText );

			$response["previewData"] = $this->getPreviewDataFromText( $this->importText );
		} else {
			$ext = getImportFileExtension( "importFile".$this->id );
			$isExcel = strtoupper( $ext ) == "XLS" ||  strtoupper( $ext ) == "XLSX";

			if( $isExcel )
				$rnrTempImportFilePath = getabspath("templates_c/".$rnrTempFileName.".".$ext);

			$importFileData = getImportFileData( "importFile".$this->id );
			// save file in a temporary directory
			upload_File( $importFileData, $rnrTempImportFilePath );

			if( $isExcel ) {
				$response["previewData"] = $this->getPreviewDataFromExcel( $rnrTempImportFilePath );
			} else {
				$importText = CSVFileToText( $rnrTempImportFilePath, true );
				$response["previewData"] = $this->getPreviewDataFromText( $importText );
			}
		}

		// keep the temporary path in the SESSION variable
		$_SESSION[ $this->sessionPrefix ."_tempImportFilePath" ] = $rnrTempImportFilePath;

		$returnJSON = printJSON( $response, $this->useXHR );

		if( $returnJSON != false )
			echo $returnJSON;
		else
			echo "The file you're trying to import cannot be parsed";

		exit();
	}

	/**
	 * Import the data and send a report
	 */
	protected function runImportAndSendResultReport()
	{
		if( $this->eventsObject->exists("BeforeImport") )
		{
			$message = "";
			if( $this->eventsObject->BeforeImport($this, $message) === false )
			{
				echo printJSON( array( "failed" => true, "message" => $message ) );
				exit();
			}
		}

		$rnrTempImportFilePath = $_SESSION[ $this->sessionPrefix ."_tempImportFilePath" ];
		$resultData = $this->ImportFromFile( $rnrTempImportFilePath, $this->importData );
		// remove a temporary import file
		runner_delete_file( $rnrTempImportFilePath );

		if( $this->eventsObject->exists("AfterImport") )
			$this->eventsObject->AfterImport( $resultData["totalRecordsNumber"], $resultData["unprocessedRecordsNumber"], $this);

		// keep all necessary data in SESSION variables
		$_SESSION[ $this->sessionPrefix ."_tempImportLogFilePath" ] = $resultData["logFilePath"];
		if( $resultData["unprocessedRecordsNumber"] )
			 $_SESSION[ $this->sessionPrefix ."_tempDataFilePath" ] = $resultData["unprocessedFilePath"];

		echo printJSON( $resultData );
		exit();
	}

	/**
	 *
	 */
	protected function downloadReport()
	{
		$logFilePath = $_SESSION[ $this->sessionPrefix ."_tempImportLogFilePath" ];
		if( !myfile_exists( $logFilePath ) )
		{
			$data = array( "success" => false );
			echo printJSON( $data );
			exit();
		}

		header("Content-Type: text/plain");
		header("Content-Disposition: attachment;Filename=importLog.txt");
		header("Cache-Control: private");

		printfile( $logFilePath );
		exit();
	}

	/**
	 *
	 */
	protected function downloadUnprocessed()
	{
		$dataFilePath = $_SESSION[ $this->sessionPrefix ."_tempDataFilePath" ];
		if( !myfile_exists( $dataFilePath ) )
		{
			$data = array( "success" => false );
			echo printJSON( $data );
			exit();
		}

		header("Content-Type: application/csv");
		header("Content-Disposition: attachment;Filename=unpocessedData.csv");

		printfile( $dataFilePath );
		exit();
	}

	/**
	 * Assign 'body' element
	 */
	public function doCommonAssignments()
	{

		// assign body begin
		$this->body["begin"] = GetBaseScriptsForPage(false);
		// assign body end
		$this->body["end"] = XTempl::create_method_assignment( "assignBodyEnd", $this);

		$this->xt->assignbyref("body", $this->body);
	}

	/**
	 * Clear session kyes
	 * @intellisense
	 */
	public function clearSessionKeys()
	{
		parent::clearSessionKeys();

		if( !count($_POST) && !count($_GET) )
		{
			unset( $_SESSION[ $this->sessionPrefix ."_tempImportFilePath" ] );
			unset( $_SESSION[ $this->sessionPrefix ."_tempImportLogFilePath" ] );
			unset( $_SESSION[ $this->sessionPrefix ."_tempDataFilePath" ] );
		}
	}


	/**
	 * A wrapper for the import function getPreviewDataFromExcel
	 * @param String filePath
	 * @param String ext
	 * @return Array
	 */
	protected function getPreviewDataFromExcel( $filePath )
	{
		$fileHandle = openImportExcelFile( $filePath );

		$headerFieldsFromExcel = getImportExcelFields( $fileHandle );
		$fieldsData = $this->getCorrespondingImportFieldsData( $headerFieldsFromExcel );

		$previewData = getPreviewDataFromExcel( $fileHandle, $fieldsData );
		$previewData["fieldsData"] = $fieldsData;

		return $previewData;
	}

	/**
	 * Get preview data for an importing text
	 * @param String importText
	 * @return Array
	 */
	public function getPreviewDataFromText( $importText ) {
		$lines = $this->removeEmptyLines( ImportPage::CSVTextToLines( $importText ) );
		if( !$lines )
			return array();

		// find delimiter basing on first two lines
		$delimiter = $this->getCSVDelimiter( array_slice( $lines, 0, 2 ) );

		$headerFieldsFromCSV = parseCSVLineNew( $lines[0], $delimiter );
		$fieldsData = $this->getCorrespondingImportFieldsData( $headerFieldsFromCSV );

		$previewData = array();
		$previewData["CSVPreview"] = true;
		$previewData["delimiter"] = $delimiter;
		$previewData["fieldsData"] = $fieldsData;

		// first 100 lines for preview
		$previewData["CSVlinesData"] = array_slice( $lines, 0, 100 );

		//	always show Date Format box.
		$dateFormat = $this->geDateFormat( $lines, $delimiter, $fieldsData );
		$previewData["dateFormat"] = $this->getImportDateFormat( $dateFormat );

		return $previewData;
	}

	/**
	 *
	 */
	protected function geDateFormat( $lines, $delimiter, $fieldsData ) {
		$dateFormat = "";

		foreach( $lines as $line ) {
			$elems = parseCSVLineNew( $line, $delimiter );
			foreach( $elems as $idx => $elem ) {
				if( isset($fieldsData[ $idx ]) && $fieldsData[ $idx ]["dateTimeType"] ) {
					$dateFormat = ImportPage::extractDateFormat( $elem );
					if( strlen( $dateFormat ) ) {
						return $dateFormat;
					}
				}
			}
		}

		return 	$dateFormat;
	}

	/**
	 * Remove elementes containing empty lines forms the lines array
	 * @param Array lines
	 * @return Array
	 */
	protected function removeEmptyLines( $lines )
	{
		$resultLines = array();

		foreach( $lines as $line )
		{
			if( strlen( trim($line) ) )
				$resultLines[] = $line;
		}

		return $resultLines;
	}

	/**
	 * Extract a date format form the dateTime string //#9684
	 * @param String dateString
	 * @return String
	 */
	public static function extractDateFormat($dateString)
	{
		global $locale_info;

		$dateComponents = parsenumbers( $dateString );
		if( count($dateComponents) < 3 )
			return "";

		$dateSeparator = $locale_info["LOCALE_SDATE"];
		$format = "";

		if( $dateComponents[0] > 31 && ImportPage::testMonth($dateComponents[1]) && $dateComponents[2] >= 12)
		{
			$year = $dateComponents[0];
			$format = "Y".$dateSeparator."M".$dateSeparator."D";
		}

		if( $dateComponents[0] >= 12 && ImportPage::testMonth($dateComponents[1]) && $dateComponents[2] > 31 )
		{
			$year = $dateComponents[3];
			$format = "D".$dateSeparator."M".$dateSeparator."Y";
		}

		if( ImportPage::testMonth($dateComponents[0]) && $dateComponents[1] >= 12 && $dateComponents[2] > 31 )
		{
			$year = $dateComponents[3];
			$format = "M".$dateSeparator."D".$dateSeparator."Y";
		}

		if( $format )
			$format = str_replace("Y", $year < 100 ? "YY" : "YYYY", $format);

		return $format;
	}

	 /**
	 * Check if the number passed could be a month component of a date
	 * @param Number number
	 * @return Boolean
	 */
	public static function testMonth( $number )
	{
		$match = array();
		$matched = preg_match('/0[1-9]|1[0-2]/', $number, $match);

		 //  add [1-9]| to pattern ??
		if( $matched && count($match) || 1 <= $number && $number <= 12 )
			return true;

		return false;
	}

	/**
	 * Get the date format string
	 * @param String dateFormat
	 * @return String
	 */
	public static function getRefinedDateFormat( $dateFormat ) {
		$refinedFormat = "";

		$dateFormat = strtolower( $dateFormat );
		for( $i = 0; $i < strlen($dateFormat); $i++ ) {
			$letter = $dateFormat[$i];
			if( ( $letter == "d" || $letter == "m" || $letter == "y" ) && strpos($refinedFormat, $letter) === false )
				$refinedFormat.= $letter;
		}

		return $refinedFormat;
	}

	/**
	 * Detect a delimiter value by the first two not empty file (or text) lines
	 * @param Array firstTwoLinesData	An array containing no more then first two file (or text) lines
	 * @return String
	 */
	protected function getCSVDelimiter( $firstTwoLines )
	{
		// the most possible delimiters values
		$delimiters = array(",", ";", "\t", " ");
		$delimitersData = array();

		foreach($delimiters as $delim)
		{
			$delimitersData[ $delim ] = array();

			foreach($firstTwoLines as $idx => $line)
			{
				$elemsNumber = count( parseCSVLineNew( $line, $delim ) );
				if( $elemsNumber <= 1 )
					break;

				$delimitersData[ $delim ][ $idx ] = $elemsNumber;
			}
		}

		// the default delimiter value
		$delimiter = ",";
		$maxNumOfElems = 1;

		foreach($delimitersData as $delim => $data)
		{
			if( !$data )
				continue;

			if( (count($firstTwoLines) == 1 || count($firstTwoLines) == 2 && $data[0] == $data[1]) && $data[0] > $maxNumOfElems )
			{
				$maxNumOfElems = $data[0];
				$delimiter = $delim;
			}
		}

		return $delimiter;
	}

	/**
	 * Check if header fields correspond to any import dateTime field
	 * @param Array
	 * @return Boolean
	 */
	static function hasDateTimeFields($fieldsData)
	{
		//	always show Date Format box.
		return true;
	}

	/**
	 * Get the field names array for Import
	 * @param Array headerFields
	 * @return Array
	 */
	public function getCorrespondingImportFieldsData( $headerFields )
	{
		$importFields = $this->pSet->getImportFields();
		$tempFieldArray = array();
		$tempLabelArray	= array();
		$tempGNamesArray = array();

		foreach($headerFields as $idx => $headerField)
		{
			$lowerHeaderField = strtolower($headerField);
			foreach($importFields as $importField)
			{
				$dateTimeType = IsDateFieldType( $this->pSet->getFieldType($importField) );

				if( $lowerHeaderField == strtolower($importField) )
				{
					$tempFieldArray[ $idx ]["fName"] = $importField;
					$tempFieldArray[ $idx ]["dateTimeType"] = $dateTimeType;
				}

				$trimHeaderField = trim($lowerHeaderField);
				$gName = GoodFieldName($importField);
				if( $trimHeaderField == strtolower(trim( $gName )) )
				{
					$tempGNamesArray[ $idx ]["fName"] = $importField;
					$tempGNamesArray[ $idx ]["dateTimeType"] = $dateTimeType;
				}

				$label = GetFieldLabel(GoodFieldName($this->tName), GoodFieldName($importField));
				if( $trimHeaderField == strtolower(trim( $label )) )
				{
					$tempLabelArray[ $idx ]["fName"] = $importField;
					$tempLabelArray[ $idx ]["dateTimeType"] = $dateTimeType;
				}
			}
		}

		if( !$tempFieldArray && !$tempGNamesArray && !$tempLabelArray )
			return array();

		if( count($tempFieldArray) >= count($tempLabelArray) && count($tempFieldArray) >= count($tempGNamesArray) )
			return $tempFieldArray;

		if( count($tempLabelArray) >= count($tempFieldArray) && count($tempLabelArray) >= count($tempGNamesArray) )
			return $tempLabelArray;

		return $tempGNamesArray;
	}

	/**
	 * Import data form a file to db
	 * @param String filePath
	 * @param Array &importData
	 * @return Array
	 */
	public function ImportFromFile( $filePath, &$importData )
	{
		$fieldsData = $this->refineImportFielsData( $importData["importFieldsData"] );
		$dateFormat = ImportPage::getRefinedDateFormat( $this->getImportDateFormat( $importData["dateFormat"] ) );
		$this->currentDateFormat = $dateFormat;

		$headersLineOption = null;
		$skipLinesOption = null;
		if ( $importData["useHeadersLineOption"] )  {
			$headersLineOption = array();
			$headersLineOption["number"] = $importData["headersLineNumber"];
		}

		if ( $importData["useSkipLinesOption"] ) {
			$skipLinesOption = array();
			$skipLinesOption["amount"] = $importData["skipLinesAmount"];
		}

		if( $importData["CSV"] )
			$metaData = $this->importFromCSV( $filePath, $fieldsData, $importData["delimiter"], $headersLineOption, $skipLinesOption);
		else
			$metaData = $this->importFromExcel( $filePath, $fieldsData, $headersLineOption, $skipLinesOption );


		$resultData = array();
		$resultData["reportText"] = $this->getBasicReportText( $metaData["totalRecords"], $metaData["addedRecords"], $metaData["updatedRecords"] );
		$resultData["unprocessedRecordsNumber"] = count( $metaData["errorMessages"] );
		$resultData["totalRecordsNumber"] = $metaData["totalRecords"] - $resultData["unprocessedRecordsNumber"];

		// prepare a report file
		$reportFileText = $this->getBasicReportText( $metaData["totalRecords"], $metaData["addedRecords"], $metaData["updatedRecords"], false, "\r\n", $metaData["errorMessages"], $metaData["unprocessedData"] );
		$logFilePath = getabspath("templates_c/".$this->getImportLogFileName().".txt");
		runner_save_file( $logFilePath, $reportFileText );
		$resultData["logFilePath"] = $logFilePath;

		if( count( $metaData["unprocessedData"] ) )
		{
			// prepare an unprocessed data log
			$unprocFilePath = getabspath("templates_c/".$this->getUnprocessedDataFileName().".csv");
			$unprocContent = $this->getUnprocessedDataContent( $metaData["unprocessedData"] );
			runner_save_file( $unprocFilePath, $unprocContent );
			$resultData["unprocessedFilePath"] = $unprocFilePath;
		}

		return $resultData;
	}

	/**
	 * @param String
	 * @return String dateFormat
	 */
	protected function getImportDateFormat( $dateFormat ) {
		global $locale_info;
		return !strlen($dateFormat) ? $locale_info["LOCALE_SSHORTDATE"] : $dateFormat;
	}

	/**
	 * Refine user import fields data
	 * @param Array importFiledsData
	 * @return Array
	 */
	protected function refineImportFielsData( $importFiledsData )
	{
		$fieldsData = array();
		foreach($importFiledsData as $idx => $fData)
		{
			$fName = $fData["fName"];
			if( $fName )
				$fieldsData[ $idx ] = array( "fName" => $fName, "type" => $this->pSet->getFieldType($fName) );
		}

		return $fieldsData;
	}

	/**
	 *
	 */
	protected function importFromCSV( $filePath, $fieldsData, $delimiter, $headersLineOption, $skipLinesOption) {
		$text = CSVFileToText( $filePath, false );
		$lines = ImportPage::CSVTextToLines( $text );


		$autoinc = $this->hasAutoincImportFields( $fieldsData );

		$errorMessages = array();
		$unprocessedData = array();
		$addedRecords = 0;
		$updatedRecords = 0;
		$totalRecords = 0;

		if ( $headersLineOption != null ) {
			$idx = $headersLineOption["number"] - 1;
			unset($lines[$idx]);
		}

		if ( $skipLinesOption != null)  {
			$linesCount = $skipLinesOption["amount"];
			for ($i = 0; $i < $linesCount; $i++) {
				unset($lines[$i]);
			}
		}

		foreach( $lines as $line ) {
			$elems = parseCSVLineNew( $line, $delimiter );

			$fieldsValuesData = array();

			foreach( $elems as $idx => $elem )
			{
				if( !isset( $fieldsData[ $idx ] ) )
					continue;

				$importFieldName = $fieldsData[ $idx ]["fName"];
				$fType = $fieldsData[ $idx ]["type"];

				$fieldsValuesData[ $importFieldName ] = $elem;
			}

			$this->importRecord( $fieldsValuesData, $autoinc, $addedRecords, $updatedRecords, $errorMessages, $unprocessedData );
			$totalRecords = $totalRecords + 1;
		}

		$metaData = array();
		$metaData["totalRecords"] = $totalRecords;
		$metaData["addedRecords"] = $addedRecords;
		$metaData["updatedRecords"] = $updatedRecords;
		$metaData["errorMessages"] = $errorMessages;
		$metaData["unprocessedData"] = $unprocessedData;

		return $metaData;
	}


	/**
	 * Import data form an Excel file
	 * @param String filePath
	 * @param Array fieldsData
	 * @param Boolean useFirstLine
	 * @param String dateFormat
	 * @return Array
	 */
	protected function importFromExcel( $filePath, $fieldsData, $headersLineOption, $skipLinesOption) {
		$fileHandle = openImportExcelFile( $filePath );
		$autoinc = $this->hasAutoincImportFields( $fieldsData );

		return ImportDataFromExcel( $fileHandle, $fieldsData, $this, $autoinc, $headersLineOption, $skipLinesOption );
	}

	/**
	 * Check if there is an auto-incremented field among the import fields
	 * @param Array fieldsData
	 * @return Boolean
	 */
	protected function hasAutoincImportFields( $fieldsData )
	{
		foreach( $fieldsData as $f )
		{
			if( $this->pSet->isAutoincField( $f[ "fName" ] ) )
				return true;
		}

		return false;
	}



	/**
	 * Prepare fields' values of numeric and time types for db
	 * The fields of other types have been already db-prepared
	 * @param Array fieldsValuesData
	 * @return Array
	 */
	protected function prepareFiledsValuesData( $fieldsValuesData )
	{
		global $locale_info;

		$refinedFieldsValuesData = array();

		$this->setUpdatedLatLng( $fieldsValuesData );

		foreach($fieldsValuesData as $field => $val)
		{
			$type = $this->pSet->getFieldType($field);

			if( IsTimeType($type) || $this->pSet->getEditFormat( $field ) == EDIT_FORMAT_TIME )
			{
				$value = prepare_for_db( $field, $val, "time", "", $this->tName );

				if ( strlen($value) > 0 )
					$refinedFieldsValuesData[ $field ] = $value;
				else
					$refinedFieldsValuesData[ $field ] = NULL;

				continue;
			}
			if( IsDateFieldType($type) )
			{
				if( !dateInDbFormat( $val ) )
					$value = localdatetime2db($val, $this->currentDateFormat);
				else
					$value = $val;

				if ( strlen($value) > 0 )
					$refinedFieldsValuesData[ $field ] = $value;
				else {
					$refinedFieldsValuesData[ $field ] = NULL;
				}

				continue;
			}

			if( !IsNumberType($type) || is_numeric( $val ) ) {
				$refinedFieldsValuesData[ $field ] = $val;
				continue;
			}

			$value = str_replace(",", ".", (string)$val);

			if( strlen($value) > 0 )
			{
				if( strpos($value, $locale_info["LOCALE_SCURRENCY"]) !== FALSE )
				{
					// try to process the currency format
					$value = str_replace( array($locale_info["LOCALE_SCURRENCY"], " "), array("", ""), $value );

					$matches = array();
					if( preg_match('/^\((.*)\)$/', $value, $matches) )
						$value = -1 * $matches[1];
				}

				if (is_numeric($value))
					$refinedFieldsValuesData[$field] = (float)$value;
				else
					$refinedFieldsValuesData[$field] = 0;
			}
			else
				$refinedFieldsValuesData[ $field ] = NULL;
		}

		return $refinedFieldsValuesData;
	}

	/**
	 *
	 */
	protected function callBeforeInsert( &$rawvalues, &$fieldsValuesData, &$errorMessage ) {
		if( !$this->eventsObject->exists("BeforeInsert") )
			return true;

		//	fire event
		if( $this->eventsObject->BeforeInsert($rawvalues, $fieldsValuesData, $this, $errorMessage) === false )
			return false;

		return true;
	}


	/**
	 * Insert an imported record to the database
	 * @param Array values						Import data as array( <fieldName> => <fieldValue>, ... );
	 * @param Boolean identiyInsertOff			The flag indicating if there is any autoincremented import field
	 * @param &Number addedRecords
	 * @param &Number updatedRecords
	 * @param &Array errorMmessages
	 * @param &Array unprocessedData
	 */
	public function importRecord( $values, $identiyInsertOff, &$addedRecords, &$updatedRecords, &$errorMessages, &$unprocessedData )
	{
		$rawValues = $values;
		$values = $this->prepareFiledsValuesData( $values );
		$errorMessage = "";

		if( $this->callBeforeInsert( $rawValues, $values, $errorMessage ) )
			$failed = !$this->_importRecord( $values, $identiyInsertOff, $addedRecords, $updatedRecords, $errorMessage );
		else
			$failed = true;

		if( $failed ) {
			// report error
			if( !$unprocessedData ) {
				$fieldNames = array_keys( $values );
				$unprocessedData[] = $this->getImportFieldsLogCSVLine( $fieldNames );
			}
			// nothing to update
			$unprocessedData[] = $this->parseValuesDataInLogCSVLine( $rawValues );
			$errorMessages[] = $errorMessage;
		}
	}

	/**
	 * @return Boolean
	 */
	protected function _importRecord( $values, $identiyInsertOff, &$addedRecords, &$updatedRecords, &$errorMessage ) {
		$dc = new DsCommand();
		$dc->identiyInsertOff = $identiyInsertOff;
		$dc->values = &$values;

		$insertResult = $this->dataSource->insertSingle( $dc );
		if( $insertResult !== false ) {
			// successfully inserted
			$addedRecords = $addedRecords + 1;

			if( $this->audit )
				$this->audit->LogAdd( $this->tName, $values, $this->getRecordKeys( $insertResult ) );

			return true;
		}

		$errorMessage = $this->dataSource->lastError();

		$_keys = $this->getRecordKeys( $values );
		//	don't update if we don't have keys
		if( !$_keys )
			return false;

		// prepare for updating attempt
		$dc = new DsCommand();
		$dc->keys = $_keys;

		$rs = $this->dataSource->getSingle( $dc );
		$recordData = null;
		if( $rs ) {
			$fetchedArray = $rs->fetchAssoc();
			$recordData = $this->cipherer->DecryptFetchedArray( $fetchedArray );
		}
		if( !$recordData ) {
			// nothing to update
			return false;
		}

		$dc = new DsCommand();
		$dc->identiyInsertOff = $identiyInsertOff;
		$dc->keys = $_keys;
		$updateValues = array();
		foreach( $values as $f => $v ) {
			if( !isset( $_keys[ $f ] ) ) {
				$updateValues[ $f ] = $v;
			}
		}
		$dc->values = $updateValues;

		$updateResult = $this->dataSource->updateSingle( $dc );
		if( $updateResult ) {
			// successfully updated
			$updatedRecords = $updatedRecords + 1;

			if( $this->audit )
				$this->audit->LogEdit( $this->tName, $values, $recordData , $_keys );

			return true;
		}

		return false;
	}


	protected function getRecordKeys( $values ) {
		$keys = array();
		$keyFields = $this->pSet->getTableKeys();

		foreach( $keyFields as $kf ) {
			if( array_key_exists( $kf, $values ) )
				$keys[ $kf ] = $values[ $kf ];
		}

		if( count( $keys ) != count( $keyFields ) )
			return array();

		return $keys;
	}


	/**
	 * Get a data line for an unprocessed data log
	 * @param Array fieldsValuesData
	 * @return String
	 */
	protected function parseValuesDataInLogCSVLine( $fieldsValuesData )
	{
		$values = array();
		foreach($fieldsValuesData as $fName => $value)
		{
			$fType = $this->pSet->getFieldType($fName);
			if( !IsBinaryType($fType) )
				$values[] = '"'.str_replace('"', '""', $value).'"';
		}

		return implode(",", $values);
	}

	/**
	 * Get a headers line for an unprocessed data log
	 * @param Array importFields
	 * @return String
	 */
	protected function getImportFieldsLogCSVLine( $importFields )
	{
		$headerFields = array();
		foreach( $importFields as $fName )
		{
			$fType = $this->pSet->getFieldType($fName);
			if( !IsBinaryType($fType) )
				$headerFields[] = '"'.str_replace('"', '""', $fName).'"';
		}

		return implode(",", $headerFields);
	}

	/**
	 * Get content for an unprocessed data log
	 * @param Array unprocessedData
	 * @return String
	 */
	protected function getUnprocessedDataContent( $unprocessedData )
	{
		global $useUTF8;

		$content = $headerLine.implode( "\r\n", $unprocessedData );
		return $useUTF8 ? "\xEF\xBB\xBF".$content : $content;
	}

	/**
	 * Get report text
	 * @param Number totalRecords
	 * @param Number addedRecords
	 * @param Number updatedRecords
	 * @param Boolean isNotLogFile
	 * @rturn String
	 */
	protected function getBasicReportText( $totalRecords, $addedRecords, $updatedRecords,
		$isNotLogFile = true, $lineBreak = "<br>", $errorMessages = array(), $unprocessedData = array() )
	{
		$importedReords = $addedRecords + $updatedRecords;
		$notImportedRecords = $totalRecords - $importedReords;
		$boldBegin = "";
		$boldEnd = "";
		$reportText = "";
		if( $isNotLogFile )
		{
			$boldBegin = "<b>";
			$boldEnd = "</b>";
		}
		else
		{
			$reportText .= "Import into"." ".$this->strOriginalTableName.$lineBreak.
				str_format_datetime( db2time( now() ) ) .$lineBreak.$lineBreak;
		}

		$reportText .= mysprintf("%s out of %s records processed successfully.", array($boldBegin.$importedReords.$boldEnd, $boldBegin.$totalRecords.$boldEnd))
			. $lineBreak
			. mysprintf("%s records added.", array($boldBegin.$addedRecords.$boldEnd)) .$lineBreak
			. mysprintf("%s records updated.", array($boldBegin.$updatedRecords.$boldEnd)) .$lineBreak;

		if( $notImportedRecords )
			$reportText.= mysprintf("%s records processed with errors", array($boldBegin.$notImportedRecords.$boldEnd));

		if( $notImportedRecords && count($errorMessages) )
		{
			$reportText .= ":";
			for( $i = 0; $i < count($errorMessages); $i++ )
			{
				if( $isNotLogFile )
				{
					$reportText.= $lineBreak.$errorMessages[ $i ];
				}
				else
				{
					$reportText.= $lineBreak.$lineBreak.$errorMessages[ $i ].$lineBreak.$unprocessedData[ $i + 1 ];
				}
			}
		}
		return $reportText;
	}

	/**
	 * Get a temporary importing file name
	 * @return String
	 */
	public function getImportTempFileName()
	{
		return "import".$this->getUniqueFileNameSuffix();
	}

	/**
	 * Get a temporary log file name
	 * @return String
	 */
	public function getImportLogFileName()
	{
		return "importLog".$this->getUniqueFileNameSuffix();
	}

	/**
	 * Get an unprocessed data CSV file name
	 * @return String
	 */
	public function getUnprocessedDataFileName()
	{
		return "importUnprocessed".$this->getUniqueFileNameSuffix();
	}

	/**
	 * Get the unique name suffix containig the date stamp
	 * @return String
	 */
	protected function getUniqueFileNameSuffix()
	{
		$dateMarker = getYMDdate( time() );
		return $dateMarker."_".$this->tName."_".generatePassword(5);
	}

	/**
	 * Remove temp import files older than 3 days
	 * from the 'templates_c' directory
	 */
	public function removeOldTemporaryFiles()
	{
		$this->deleteTemporaryFilesFromDir( "templates_c/" );
			}

	public function deleteTemporaryFilesFromDir( $dir )
	{
		$tempFilesDirectory = getabspath($dir);
		$fileNamesList = getFileNamesFromDir( $tempFilesDirectory );
		$currentTime = strtotime(now());
		// the word "import" + some letters + the 'Y-m-d' formatted date value + "_" + the table name + "_"
		// + the unique sequence of length 5 + any extension
		$tempNamePattern = "/^import.*([\d]{4}-(0[1-9]|1[0-2])-([0-2][1-9]|3[0-1])).*_".$this->tName."_.{5}\.\w+/";

		foreach($fileNamesList as $fileName)
		{
			$matches = array();
			if( preg_match($tempNamePattern, $fileName, $matches) )
			{
				$timeFromFileName = strtotime( $matches[1] );
				if( $timeFromFileName !== FALSE && $currentTime - $timeFromFileName > 259200 )
					deleteImportTempFile( $tempFilesDirectory.$fileName );
			}
		}
	}

	/**
	 * @param String text
	 * @return Array
	 */
	public static function CSVTextToLines( $text ) {
		$inQuotes = false;

		$j = 0;
		$lines = array();

		//possible values are \r\n or \n
		$eol = "";

		for( $i = 0; $i < strlen( $text ); $i++ ) {
			$char = substr( $text, $i, 1 );
			$charNext = substr( $text, $i + 1, 1 );

			if( $char == "\"" ) {
				if( !$inQuotes )
					$inQuotes = true;
				else {
					if( $charNext == "\"" )
					{
						$i++;
						$lines[ $j ].= $char;
					}
					else
						$inQuotes = false;
				}
			}

			if( !$inQuotes && !$eol ) {
				//no in quotes
				if( ord( $char ) == 10 ) {
					//"\n"
					$eol = $char;
				} else if( ord( $char ) == 13 && ord( $charNext ) == 10 ) {
					//"\r\n"
					$eol =  $char.$charNext;
				}
			}


			if( !$inQuotes && $eol && substr( $text, $i, strlen( $eol ) ) == $eol ) {
				$j++;
				$i+= strlen( $eol ) - 1;
			}
			else
				$lines[ $j ].= $char;
		}

		return $lines;
	}

	/**
	 * Display the import page
	 */
	protected function displayImportPage()
	{
		$templatefile = $this->templatefile;

		if( $this->eventsObject->exists("BeforeShowImport") )
			$this->eventsObject->BeforeShowImport($this->xt, $templatefile, $this);

		$hiddenBricks = array( "import_rawtext_control", "import_preview", "import_process", "import_results", "error_message" );
		$this->xt->displayBricksHidden( $hiddenBricks );

		$this->display( $templatefile );
	}
}
?>