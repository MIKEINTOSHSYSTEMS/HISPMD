<?php
require_once(getabspath("classes/cipherer.php"));



$tdatahispmd_web_reports_and_charts_builder = array();
$tdatahispmd_web_reports_and_charts_builder[".ShortName"] = "hispmd_web_reports_and_charts_builder";

$tdatahispmd_web_reports_and_charts_builder[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"HISPMD_Web_Reports_and_Charts_Builder\"]}" );
$tdatahispmd_web_reports_and_charts_builder[".originalPagesByType"] = $tdatahispmd_web_reports_and_charts_builder[".pagesByType"];
$tdatahispmd_web_reports_and_charts_builder[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"HISPMD_Web_Reports_and_Charts_Builder\"]}" ) );
$tdatahispmd_web_reports_and_charts_builder[".originalPages"] = $tdatahispmd_web_reports_and_charts_builder[".pages"];
$tdatahispmd_web_reports_and_charts_builder[".defaultPages"] = my_json_decode( "{\"dashboard\":\"HISPMD_Web_Reports_and_Charts_Builder\"}" );
$tdatahispmd_web_reports_and_charts_builder[".originalDefaultPages"] = $tdatahispmd_web_reports_and_charts_builder[".defaultPages"];


//	field labels
$fieldLabelshispmd_web_reports_and_charts_builder = array();
$pageTitleshispmd_web_reports_and_charts_builder = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_web_reports_and_charts_builder["English"] = array();
}
if(mlang_getcurrentlang()=="Amharic")
{
	$fieldLabelshispmd_web_reports_and_charts_builder["Amharic"] = array();
}

/*
//	search fields
$tdatahispmd_web_reports_and_charts_builder[".searchFields"] = array();

// all search fields
$tdatahispmd_web_reports_and_charts_builder[".allSearchFields"] = array();

// good like search fields
$tdatahispmd_web_reports_and_charts_builder[".googleLikeFields"] = array();
*/

/*
$tdatahispmd_web_reports_and_charts_builder[".dashElements"] = array();

*/
$tdatahispmd_web_reports_and_charts_builder[".shortTableName"] = "hispmd_web_reports_and_charts_builder";
$tdatahispmd_web_reports_and_charts_builder[".entityType"] = 4;




$tdatahispmd_web_reports_and_charts_builder[".hasEvents"] = false;


$tdatahispmd_web_reports_and_charts_builder[".tableType"] = "dashboard";



$tdatahispmd_web_reports_and_charts_builder[".addPageEvents"] = false;

$tdatahispmd_web_reports_and_charts_builder[".isUseAjaxSuggest"] = true;

$tables_data["HISPMD_Web_Reports_and_Charts_Builder"]=&$tdatahispmd_web_reports_and_charts_builder;
$field_labels["HISPMD_Web_Reports_and_Charts_Builder"] = &$fieldLabelshispmd_web_reports_and_charts_builder;
$page_titles["HISPMD_Web_Reports_and_Charts_Builder"] = &$pageTitleshispmd_web_reports_and_charts_builder;

?>