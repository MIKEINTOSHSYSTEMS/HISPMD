<?php
require_once(getabspath("classes/cipherer.php"));



$tdatahispmd_moh_indicators_dashboard = array();
$tdatahispmd_moh_indicators_dashboard[".ShortName"] = "hispmd_moh_indicators_dashboard";

$tdatahispmd_moh_indicators_dashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"hispmd_dashboard\",\"aio_moh_indicators_dashboard\",\"hispmd_advanced_dashboard_data_visualizer\",\"hispmd_chart_builder\",\"hispmd_data_quality_dashboard\",\"hispmd_data_use_dashboard\",\"hispmd_data_visualizer\",\"hispmd_digital_health_dashboard\",\"hispmd_his_governance_dashboard\",\"hispmd_indicator_chart\",\"hispmd_ir_pathway_dashboard\",\"hispmd_other_additional_dashboard\",\"hispmd_moh_dahsboard\"]}" );
$tdatahispmd_moh_indicators_dashboard[".originalPagesByType"] = $tdatahispmd_moh_indicators_dashboard[".pagesByType"];
$tdatahispmd_moh_indicators_dashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"hispmd_dashboard\",\"aio_moh_indicators_dashboard\",\"hispmd_advanced_dashboard_data_visualizer\",\"hispmd_chart_builder\",\"hispmd_data_quality_dashboard\",\"hispmd_data_use_dashboard\",\"hispmd_data_visualizer\",\"hispmd_digital_health_dashboard\",\"hispmd_his_governance_dashboard\",\"hispmd_indicator_chart\",\"hispmd_ir_pathway_dashboard\",\"hispmd_other_additional_dashboard\",\"hispmd_moh_dahsboard\"]}" ) );
$tdatahispmd_moh_indicators_dashboard[".originalPages"] = $tdatahispmd_moh_indicators_dashboard[".pages"];
$tdatahispmd_moh_indicators_dashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"hispmd_dashboard\"}" );
$tdatahispmd_moh_indicators_dashboard[".originalDefaultPages"] = $tdatahispmd_moh_indicators_dashboard[".defaultPages"];


//	field labels
$fieldLabelshispmd_moh_indicators_dashboard = array();
$pageTitleshispmd_moh_indicators_dashboard = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshispmd_moh_indicators_dashboard["English"] = array();
}

/*
//	search fields
$tdatahispmd_moh_indicators_dashboard[".searchFields"] = array();

// all search fields
$tdatahispmd_moh_indicators_dashboard[".allSearchFields"] = array();

// good like search fields
$tdatahispmd_moh_indicators_dashboard[".googleLikeFields"] = array();
*/

/*
$tdatahispmd_moh_indicators_dashboard[".dashElements"] = array();

*/
$tdatahispmd_moh_indicators_dashboard[".shortTableName"] = "hispmd_moh_indicators_dashboard";
$tdatahispmd_moh_indicators_dashboard[".entityType"] = 4;




$tdatahispmd_moh_indicators_dashboard[".hasEvents"] = false;


$tdatahispmd_moh_indicators_dashboard[".tableType"] = "dashboard";


	
$tdatahispmd_moh_indicators_dashboard[".addPageEvents"] = false;

$tdatahispmd_moh_indicators_dashboard[".isUseAjaxSuggest"] = true;

$tables_data["HISPMD_MOH_Indicators_Dashboard"]=&$tdatahispmd_moh_indicators_dashboard;
$field_labels["HISPMD_MOH_Indicators_Dashboard"] = &$fieldLabelshispmd_moh_indicators_dashboard;
$page_titles["HISPMD_MOH_Indicators_Dashboard"] = &$pageTitleshispmd_moh_indicators_dashboard;

?>