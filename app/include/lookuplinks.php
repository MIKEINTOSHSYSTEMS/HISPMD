<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["Regions"] ) ) {
			$lookupTableLinks["Regions"] = array();
		}
		if( !isset( $lookupTableLinks["Regions"]["financialresources.region_id"] )) {
			$lookupTableLinks["Regions"]["financialresources.region_id"] = array();
		}
		$lookupTableLinks["Regions"]["financialresources.region_id"]["edit"] = array("table" => "FinancialResources", "field" => "region_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Regions"] ) ) {
			$lookupTableLinks["Regions"] = array();
		}
		if( !isset( $lookupTableLinks["Regions"]["workforce.region_id"] )) {
			$lookupTableLinks["Regions"]["workforce.region_id"] = array();
		}
		$lookupTableLinks["Regions"]["workforce.region_id"]["edit"] = array("table" => "Workforce", "field" => "region_id", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Indicator"] ) ) {
			$lookupTableLinks["DHIS2_Indicator"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics1.Data"] )) {
			$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics1.Data"] = array();
		}
		$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics1.Data"]["edit"] = array("table" => "DHIS2_Analytics", "field" => "Data", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics1.Organisation unit"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics1.Organisation unit"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics1.Organisation unit"]["edit"] = array("table" => "DHIS2_Analytics", "field" => "Organisation unit", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Indicator"] ) ) {
			$lookupTableLinks["DHIS2_Indicator"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics1.dx"] )) {
			$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics1.dx"] = array();
		}
		$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics1.dx"]["edit"] = array("table" => "DHIS2_Analytics", "field" => "dx", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics1.ou"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics1.ou"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics1.ou"]["edit"] = array("table" => "DHIS2_Analytics", "field" => "ou", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Indicator"] ) ) {
			$lookupTableLinks["DHIS2_Indicator"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_chart.Data"] )) {
			$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_chart.Data"] = array();
		}
		$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_chart.Data"]["search"] = array("table" => "DHIS2_Analytics Chart", "field" => "Data", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_chart.Organisation unit"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_chart.Organisation unit"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_chart.Organisation unit"]["search"] = array("table" => "DHIS2_Analytics Chart", "field" => "Organisation unit", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Indicator"] ) ) {
			$lookupTableLinks["DHIS2_Indicator"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_chart.dx"] )) {
			$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_chart.dx"] = array();
		}
		$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_chart.dx"]["search"] = array("table" => "DHIS2_Analytics Chart", "field" => "dx", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_chart.ou"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_chart.ou"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_chart.ou"]["search"] = array("table" => "DHIS2_Analytics Chart", "field" => "ou", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Indicator"] ) ) {
			$lookupTableLinks["DHIS2_Indicator"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_report.Data"] )) {
			$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_report.Data"] = array();
		}
		$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_report.Data"]["search"] = array("table" => "DHIS2_Analytics Report", "field" => "Data", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_report.Organisation unit"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_report.Organisation unit"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_report.Organisation unit"]["search"] = array("table" => "DHIS2_Analytics Report", "field" => "Organisation unit", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Indicator"] ) ) {
			$lookupTableLinks["DHIS2_Indicator"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_report.dx"] )) {
			$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_report.dx"] = array();
		}
		$lookupTableLinks["DHIS2_Indicator"]["dhis2_analytics_report.dx"]["search"] = array("table" => "DHIS2_Analytics Report", "field" => "dx", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_report.ou"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_report.ou"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_analytics_report.ou"]["search"] = array("table" => "DHIS2_Analytics Report", "field" => "ou", "page" => "search");
}

?>