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
		if( !isset( $lookupTableLinks["DHIS2_Periods"] ) ) {
			$lookupTableLinks["DHIS2_Periods"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Periods"]["dhis2_analytics1.pe"] )) {
			$lookupTableLinks["DHIS2_Periods"]["dhis2_analytics1.pe"] = array();
		}
		$lookupTableLinks["DHIS2_Periods"]["dhis2_analytics1.pe"]["edit"] = array("table" => "DHIS2_Analytics", "field" => "pe", "page" => "edit");
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
		if( !isset( $lookupTableLinks["DHIS2_Periods"] ) ) {
			$lookupTableLinks["DHIS2_Periods"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Periods"]["dhis2_analytics_report.pe"] )) {
			$lookupTableLinks["DHIS2_Periods"]["dhis2_analytics_report.pe"] = array();
		}
		$lookupTableLinks["DHIS2_Periods"]["dhis2_analytics_report.pe"]["search"] = array("table" => "DHIS2_Analytics Report", "field" => "pe", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Datasets"] ) ) {
			$lookupTableLinks["DHIS2_Datasets"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Datasets"]["dhis2_reports.Data Set"] )) {
			$lookupTableLinks["DHIS2_Datasets"]["dhis2_reports.Data Set"] = array();
		}
		$lookupTableLinks["DHIS2_Datasets"]["dhis2_reports.Data Set"]["edit"] = array("table" => "DHIS2_Reports", "field" => "Data Set", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Periods"] ) ) {
			$lookupTableLinks["DHIS2_Periods"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Periods"]["dhis2_reports.Report Period"] )) {
			$lookupTableLinks["DHIS2_Periods"]["dhis2_reports.Report Period"] = array();
		}
		$lookupTableLinks["DHIS2_Periods"]["dhis2_reports.Report Period"]["edit"] = array("table" => "DHIS2_Reports", "field" => "Report Period", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reports.Organisation Unit ID"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reports.Organisation Unit ID"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reports.Organisation Unit ID"]["edit"] = array("table" => "DHIS2_Reports", "field" => "Organisation Unit ID", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate.organisationUnit"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate.organisationUnit"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate.organisationUnit"]["edit"] = array("table" => "DHIS2_Reporting_Rate", "field" => "organisationUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Datasets"] ) ) {
			$lookupTableLinks["DHIS2_Datasets"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate.dataSet"] )) {
			$lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate.dataSet"] = array();
		}
		$lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate.dataSet"]["edit"] = array("table" => "DHIS2_Reporting_Rate", "field" => "dataSet", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Periods"] ) ) {
			$lookupTableLinks["DHIS2_Periods"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate.reportPeriod"] )) {
			$lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate.reportPeriod"] = array();
		}
		$lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate.reportPeriod"]["edit"] = array("table" => "DHIS2_Reporting_Rate", "field" => "reportPeriod", "page" => "edit");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate_chart1.organisationUnit"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate_chart1.organisationUnit"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate_chart1.organisationUnit"]["search"] = array("table" => "DHIS2_Reporting_Rate_Chart", "field" => "organisationUnit", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Datasets"] ) ) {
			$lookupTableLinks["DHIS2_Datasets"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate_chart1.dataSet"] )) {
			$lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate_chart1.dataSet"] = array();
		}
		$lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate_chart1.dataSet"]["search"] = array("table" => "DHIS2_Reporting_Rate_Chart", "field" => "dataSet", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Periods"] ) ) {
			$lookupTableLinks["DHIS2_Periods"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate_chart1.reportPeriod"] )) {
			$lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate_chart1.reportPeriod"] = array();
		}
		$lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate_chart1.reportPeriod"]["search"] = array("table" => "DHIS2_Reporting_Rate_Chart", "field" => "reportPeriod", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"] ) ) {
			$lookupTableLinks["DHIS2_Organisation_Unit"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate_report1.organisationUnit"] )) {
			$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate_report1.organisationUnit"] = array();
		}
		$lookupTableLinks["DHIS2_Organisation_Unit"]["dhis2_reporting_rate_report1.organisationUnit"]["search"] = array("table" => "DHIS2_Reporting_Rate_Report", "field" => "organisationUnit", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Datasets"] ) ) {
			$lookupTableLinks["DHIS2_Datasets"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate_report1.dataSet"] )) {
			$lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate_report1.dataSet"] = array();
		}
		$lookupTableLinks["DHIS2_Datasets"]["dhis2_reporting_rate_report1.dataSet"]["search"] = array("table" => "DHIS2_Reporting_Rate_Report", "field" => "dataSet", "page" => "search");
		if( !isset( $lookupTableLinks["DHIS2_Periods"] ) ) {
			$lookupTableLinks["DHIS2_Periods"] = array();
		}
		if( !isset( $lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate_report1.reportPeriod"] )) {
			$lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate_report1.reportPeriod"] = array();
		}
		$lookupTableLinks["DHIS2_Periods"]["dhis2_reporting_rate_report1.reportPeriod"]["search"] = array("table" => "DHIS2_Reporting_Rate_Report", "field" => "reportPeriod", "page" => "search");
}

?>