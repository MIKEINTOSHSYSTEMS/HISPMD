<?php

require_once getabspath( "plugins/PHPExcel.php" );
require_once getabspath( "include/export_functions_excel.php" );

function ExportToExcel($rs, $pageSize, $pageObj)
{
	$row = $pageObj->cipherer->DecryptFetchedArray( $rs->fetchAssoc() );
	
	$totals = array();
	$arrLabel = array();
	$arrTotal = array();
	$arrFields = array();
	$arrColumnWidth = array();
	$arrTotalMessage = array();
	
	foreach( $pageObj->selectedFields as $field )
	{
		if( $pageObj->pSet->appearOnExportPage( $field ) )
			$arrFields[] = $field;
	}
	
	$arrTmpTotal = $pageObj->pSet->getTotalsFields();
	$pageObj->viewControls->setForExportVar( "excel" );
	foreach( $arrFields as $field )
	{
		$arrLabel[ $field ] = GetFieldLabel( GoodFieldName( $pageObj->tName ), GoodFieldName( $field ) ); 
		$arrColumnWidth[ $field ] = 10;
		$totals[ $field ] = array("value" => 0, "numRows" => 0);
		
		foreach( $arrTmpTotal as $tvalue )
		{
			if( $tvalue["fName"] == $field ) 
				$totalsFields[] = array( 'fName' => $field, 'totalsType' => $tvalue["totalsType"], 'viewFormat' => $pageObj->pSet->getViewFormat( $field ) );
		}
	}
	
// write data rows
	$iNumberOfRows = 0;
	
	$objPHPExcel = ExportExcelInit( $arrLabel, $arrColumnWidth );
	
	while( (!$pageSize || $iNumberOfRows < $pageSize) && $row )
	{
		RunnerContext::pushRecordContext( $row, $pageObj );
		
		countTotals($totals, $totalsFields, $row);
		
		$values = array();	
		foreach( $arrFields as $field ) {
			$type = $pageObj->pSet->getFieldType( $field );
			
			if( IsBinaryType( $type ) || IsNumberType( $type ) 
				&& ( $pageObj->pSet->getViewFormat( $field ) == FORMAT_NUMBER 
					|| $pageObj->pSet->getViewFormat( $field ) == FORMAT_CURRENCY ) ) {
				$values[ $field ] = $row[ $field ];
			} else {
				$values[ $field ] = $pageObj->getFormattedFieldValue( $field, $row );
			}
		}
		
		$eventRes = true;
		if( $pageObj->eventsObject->exists('BeforeOut') )
			$eventRes = $pageObj->eventsObject->BeforeOut( $row, $values, $pageObj );
		
		if( $eventRes )
		{
			$arrData = array();
			$arrDataType = array();
			
			$iNumberOfRows++;
			$i = 0;
			foreach( $arrFields as $field )
			{
				$arrData[ $field ] = $values[ $field ];
				$vFormat = $pageObj->pSet->getViewFormat( $field );
				$type = $pageObj->pSet->getFieldType( $field );
				
				if( IsBinaryType( $type ) )
					$arrDataType[ $field ] = "binary";
				elseif( $vFormat == FORMAT_DATE_SHORT || $vFormat == FORMAT_DATE_LONG || $vFormat == FORMAT_DATE_TIME )
					$arrDataType[ $field ] = "date";
				elseif( $vFormat == FORMAT_FILE_IMAGE )
					$arrDataType[ $field ] = "file";
				elseif( FORMAT_NUMBER == $vFormat && IsNumberType( $type ) )
					$arrDataType[ $field ] = "number";
				elseif( FORMAT_CURRENCY == $vFormat && IsNumberType( $type ) )
					$arrDataType[ $field ] = "currency";
				else
					$arrDataType[ $field ] = "";
			}
			
			ExportExcelRecord( $arrData, $arrDataType, $iNumberOfRows, $objPHPExcel, $pageObj );
		}
		
		RunnerContext::pop();
		
		$row = $pageObj->cipherer->DecryptFetchedArray( $rs->fetchAssoc() );
	}
	
	if( count( $arrTmpTotal ) )
	{
		foreach( $arrFields as $fName )
		{
			$value = array();
			foreach( $arrTmpTotal as $tvalue )
			{
				if( $tvalue["fName"] == $fName )
					$value = $tvalue;
			}
			
			$total = "";
			$totalMess = "";
			if( $value["totalsType"] )
			{
				if( $value["totalsType"] == "COUNT" )
					$totalMess = "Count".": ";
				elseif( $value["totalsType"] == "TOTAL" )
					$totalMess = "Total".": ";
				elseif( $value["totalsType"] == "AVERAGE" )
					$totalMess = "Average".": ";
					
				$total = GetTotals( $fName, $totals[ $fName ]["value"], $value["totalsType"], $totals[ $fName ]["numRows"], 
					$value["viewFormat"], "export", $pageObj->pSet, $pageObj->useRawValues, $pageObj );
			}
			
			$arrTotal[ $fName ] = $total;
			$arrTotalMessage[ $fName ] = $totalMess;
		}
	}

	ExportExcelTotals( $arrTotal, $arrTotalMessage, ++$iNumberOfRows, $objPHPExcel );
	ExportExcelSave( GoodFieldName( $pageObj->tName ).".xlsx", "Excel2007", $objPHPExcel );
}

/**
 * simplified number formate code
 */
function excelNumberFormat( $nDigits ) {
	global $locale_info;
	
	if( $nDigits === false )  
		$nDigits = $locale_info["LOCALE_IDIGITS"];
	
	if( $nDigits > 0 ) {
		$nFormat = '#,##0.' . str_pad( '', $nDigits, '0');
	} else {
		$nFormat = '#,#'.'#';
	}
	
	$positive = $locale_info["LOCALE_SPOSITIVESIGN"]. $nFormat;
	$negatives = ""; 
	switch( $locale_info["LOCALE_INEGNUMBER"] ) {
		case 0:
			$negative = "(".$nFormat.")";
			break;
		case 1:
			$negative = "-".$nFormat;
			break;
		case 2:
			$negative = "- ".$nFormat;
			break;
		case 3:
			$negative = $nFormat."-";
			break;
		case 4:
			$negative = $nFormat." -";
			break;
	}
	return $positive .";[Red]". $negative;
}


/**
 * simplified currency formate code
 */
function excelCurrencyFormat() {
	global $locale_info;
	
	if( $locale_info["LOCALE_ICURRDIGITS"] > 0 ) {
		$nFormat = '#,#'.'#0.' . str_pad( '', $locale_info["LOCALE_ICURRDIGITS"], '0');
	} else {
		$nFormat = '# #'.'#0';
	}
	
	$curr = "\"".$locale_info["LOCALE_SCURRENCY"]."\"";
	
	$positive = "";
	$negative = "";
	switch( $locale_info["LOCALE_ICURRENCY"] ) {
		case 0:
			$positive = $locale_info["LOCALE_SCURRENCY"].$nFormat;
			break;
		case 1:
			$positive = $nFormat.$locale_info["LOCALE_SCURRENCY"];
			break;
		case 2:
			$positive = $locale_info["LOCALE_SCURRENCY"]." ".$nFormat;
			break;
		case 3:
			$positive = $nFormat." ".$locale_info["LOCALE_SCURRENCY"];
			break;
	}

	switch( $locale_info["LOCALE_INEGCURR"] ) {
		case 0:
			$negative = "(".$locale_info["LOCALE_SCURRENCY"].$nFormat.")";
			break;
		case 1:
			$negative = "-".$locale_info["LOCALE_SCURRENCY"].$nFormat;
			break;
		case 2:
			$negative = $locale_info["LOCALE_SCURRENCY"]."-".$nFormat;
			break;
		case 3:
			$negative = $locale_info["LOCALE_SCURRENCY"].$nFormat."-";
			break;
		case 4:
			$negative = "(".$nFormat.$locale_info["LOCALE_SCURRENCY"].")";
			break;
		case 5:
			$negative = "-".$nFormat.$locale_info["LOCALE_SCURRENCY"];
			break;
		case 6:
			$negative = $nFormat."-".$locale_info["LOCALE_SCURRENCY"];
			break;
		case 7:
			$negative = $nFormat.$locale_info["LOCALE_SCURRENCY"]."-";
			break;
		case 8:
			$negative = "-".$nFormat." ".$locale_info["LOCALE_SCURRENCY"];
			break;
		case 9:
			$negative = "-".$locale_info["LOCALE_SCURRENCY"]." ".$nFormat;
			break;
		case 10:
			$negative = $nFormat." ".$locale_info["LOCALE_SCURRENCY"]."-";
			break;
		case 11:
			$negative = $locale_info["LOCALE_SCURRENCY"]." ".$nFormat."-";
			break;
		case 12:
			$negative = $locale_info["LOCALE_SCURRENCY"]." -".$nFormat;
			break;
		case 13:
			$negative = $nFormat."- ".$locale_info["LOCALE_SCURRENCY"];
			break;
		case 14:
			$negative = "(".$locale_info["LOCALE_SCURRENCY"]." ".$nFormat.")";
			break;
		case 15:
			$negative = "(".$nFormat." ".$locale_info["LOCALE_SCURRENCY"].")";
			break;
	}
	
	return $positive .";[Red]". $negative;
}

?>