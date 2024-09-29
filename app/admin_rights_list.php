<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "MFR_Dashboard_Report";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_dashboard_report", " " . GetTableCaption("MFR_Dashboard_Report"));
$table = "MFR_Status_Report";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_status_report", " " . GetTableCaption("MFR_Status_Report"));
$table = "MFR_Facilities";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_facilities", " " . GetTableCaption("MFR_Facilities"));
$table = "MFR_Region_Report";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_region_report", " " . GetTableCaption("MFR_Region_Report"));
$table = "MFR_Zone_Report";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_zone_report", " " . GetTableCaption("MFR_Zone_Report"));
$table = "MFR_Woreda_Report";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_woreda_report", " " . GetTableCaption("MFR_Woreda_Report"));
$table = "DHIS2_Indicators";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_indicators", " " . GetTableCaption("DHIS2_Indicators"));
$table = "DHIS2_Organisation_Units";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_organisation_units", " " . GetTableCaption("DHIS2_Organisation_Units"));
$table = "DHIS2_Analytics";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_analytics1", " " . GetTableCaption("DHIS2_Analytics"));
$table = "DHIS2_Indicator";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_indicator", " " . GetTableCaption("DHIS2_Indicator"));
$table = "DHIS2_Organisation_Unit";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_organisation_unit", " " . GetTableCaption("DHIS2_Organisation_Unit"));
$table = "DHIS2_Analytics Chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_analytics_chart", " " . GetTableCaption("DHIS2_Analytics_Chart"));
$table = "DHIS2_Analytics Report";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_analytics_report", " " . GetTableCaption("DHIS2_Analytics_Report"));
$table = "DHIS2_Reports";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_reports", " " . GetTableCaption("DHIS2_Reports"));
$table = "DHIS2_Datasets";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_datasets", " " . GetTableCaption("DHIS2_Datasets"));
$table = "DHIS2_Reporting_Rate";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_reporting_rate", " " . GetTableCaption("DHIS2_Reporting_Rate"));
$table = "DHIS2_Reporting_Rate_Chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_reporting_rate_chart1", " " . GetTableCaption("DHIS2_Reporting_Rate_Chart"));
$table = "DHIS2_Reporting_Rate_Report";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_reporting_rate_report1", " " . GetTableCaption("DHIS2_Reporting_Rate_Report"));
$table = "DHIS2_Reporting_Rates_Chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_reporting_rates_chart", " " . GetTableCaption("DHIS2_Reporting_Rates_Chart"));
$table = "MFR_AIO_Dashboard";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_aio_dashboard", " " . GetTableCaption("MFR_AIO_Dashboard"));
$table = "MFR_Facility";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_facility", " " . GetTableCaption("MFR_Facility"));
$table = "MFR_Regions";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_regions", " " . GetTableCaption("MFR_Regions"));
$table = "MFR_Zones";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_zones", " " . GetTableCaption("MFR_Zones"));
$table = "MFR_Woredas";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_woredas", " " . GetTableCaption("MFR_Woredas"));
$table = "MFR_Facility_Types";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_facility_types", " " . GetTableCaption("MFR_Facility_Types"));
$table = "MFR_Operational_Statuses";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_operational_statuses", " " . GetTableCaption("MFR_Operational_Statuses"));
$table = "MFR_Status";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_status", " " . GetTableCaption("MFR_Status"));
$table = "DHIS2_OrgUnit_Country";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_orgunit_country", " " . GetTableCaption("DHIS2_OrgUnit_Country"));
$table = "DHIS2_OrgUnit_Regions";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_orgunit_regions", " " . GetTableCaption("DHIS2_OrgUnit_Regions"));
$table = "DHIS2_OrgUnit_Zone";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_orgunit_zone", " " . GetTableCaption("DHIS2_OrgUnit_Zone"));
$table = "DHIS2_OrgUnit_Woredas";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_orgunit_woredas", " " . GetTableCaption("DHIS2_OrgUnit_Woredas"));
$table = "DHIS2_OrgUnit_Groups";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_orgunit_groups", " " . GetTableCaption("DHIS2_OrgUnit_Groups"));
$table = "DHIS2_OrgUnit_Group_Sets";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_orgunit_group_sets", " " . GetTableCaption("DHIS2_OrgUnit_Group_Sets"));
$table = "DHIS2_AIO_OrgUnit";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_aio_orgunit", " " . GetTableCaption("DHIS2_AIO_OrgUnit"));
$table = "DHIS2_OrgUnit_Distributions";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_orgunit_distributions", " " . GetTableCaption("DHIS2_OrgUnit_Distributions"));
$table = "public.ai_data_assistant";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ai_data_assistant", " " . GetTableCaption("public_ai_data_assistant"));
$table = "public.dataquality";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dataquality", " " . GetTableCaption("public_dataquality"));
$table = "public.datause";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("datause", " " . GetTableCaption("public_datause"));
$table = "public.dhis2_periods";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_periods", " " . GetTableCaption("public_dhis2_periods"));
$table = "public.digitalhealth";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("digitalhealth", " " . GetTableCaption("public_digitalhealth"));
$table = "public.digitalhealthapps";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("digitalhealthapps", " " . GetTableCaption("public_digitalhealthapps"));
$table = "public.financialresources";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("financialresources", " " . GetTableCaption("public_financialresources"));
$table = "public.healthfacilities";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("healthfacilities", " " . GetTableCaption("public_healthfacilities"));
$table = "public.healthunits";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("healthunits", " " . GetTableCaption("public_healthunits"));
$table = "public.hisgovernance";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hisgovernance", " " . GetTableCaption("public_hisgovernance"));
$table = "public.hispartners";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispartners", " " . GetTableCaption("public_hispartners"));
$table = "public.mfr_dashboard_reports";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_dashboard_reports", " " . GetTableCaption("public_mfr_dashboard_reports"));
$table = "public.mfr_operational_status";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_operational_status", " " . GetTableCaption("public_mfr_operational_status"));
$table = "public.mfr_region";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_region", " " . GetTableCaption("public_mfr_region"));
$table = "public.mfr_woreda";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_woreda", " " . GetTableCaption("public_mfr_woreda"));
$table = "public.mfr_zone";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_zone", " " . GetTableCaption("public_mfr_zone"));
$table = "public.publications";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("publications", " " . GetTableCaption("public_publications"));
$table = "public.regions";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("regions", " " . GetTableCaption("public_regions"));
$table = "public.research";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("research", " " . GetTableCaption("public_research"));
$table = "public.workforce";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("workforce", " " . GetTableCaption("public_workforce"));
$table = "public.hispmdusers";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmdusers", " " . GetTableCaption("public_hispmdusers"));
$table = "mfr_dashboard_reports_chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_dashboard_reports_chart", " " . GetTableCaption("mfr_dashboard_reports_chart"));
$table = "mfr_operational_status_chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_operational_status_chart", " " . GetTableCaption("mfr_operational_status_chart"));
$table = "mfr_region_chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_region_chart", " " . GetTableCaption("mfr_region_chart"));
$table = "public.ethprism_additional_organizational_and_behavioral_assessment";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ethprism_additional_organizational_and_behavioral_assessment", " " . GetTableCaption("public_ethprism_additional_organizational_and_behavioral_assessment"));
$table = "public.ethprism_facility_level_rhis_performance_diagnostic";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ethprism_facility_level_rhis_performance_diagnostic", " " . GetTableCaption("public_ethprism_facility_level_rhis_performance_diagnostic"));
$table = "public.ethprism_facility_office_checklist";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ethprism_facility_office_checklist", " " . GetTableCaption("public_ethprism_facility_office_checklist"));
$table = "public.ethprism_healthpost_level_rhis_performance_diagnostic";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ethprism_healthpost_level_rhis_performance_diagnostic", " " . GetTableCaption("public_ethprism_healthpost_level_rhis_performance_diagnostic"));
$table = "public.ethprism_national_prism_woreda_level_diagnostic";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ethprism_national_prism_woreda_level_diagnostic", " " . GetTableCaption("public_ethprism_national_prism_woreda_level_diagnostic"));
$table = "public.ethprism_organizational_and_behavioral_assessment";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("ethprism_organizational_and_behavioral_assessment", " " . GetTableCaption("public_ethprism_organizational_and_behavioral_assessment"));
$table = "public.hispmd_prism_settings";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_prism_settings", " " . GetTableCaption("public_hispmd_prism_settings"));
$table = "PRISM Dashboard";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("prism_dashboard", " " . GetTableCaption("PRISM_Dashboard"));
$table = "hispmd_users_audit";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_users_audit", " " . GetTableCaption("hispmd_users_audit"));
$table = "hispmd_system_settings";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_system_settings", " " . GetTableCaption("hispmd_system_settings"));
$table = "hispmd_prism_data_forms";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_prism_data_forms", " " . GetTableCaption("hispmd_prism_data_forms"));
$table = "public.moh_administration_units";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_administration_units", " " . GetTableCaption("public_moh_administration_units"));
$table = "public.moh_assessments";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_assessments", " " . GetTableCaption("public_moh_assessments"));
$table = "public.moh_data_sources";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_data_sources", " " . GetTableCaption("public_moh_data_sources"));
$table = "public.moh_facility_types";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_facility_types", " " . GetTableCaption("public_moh_facility_types"));
$table = "public.moh_health_facilities";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_health_facilities", " " . GetTableCaption("public_moh_health_facilities"));
$table = "public.moh_indicator_data";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_indicator_data", " " . GetTableCaption("public_moh_indicator_data"));
$table = "public.moh_indicators";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_indicators", " " . GetTableCaption("public_moh_indicators"));
$table = "public.moh_regions";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_regions", " " . GetTableCaption("public_moh_regions"));
$table = "public.moh_indicator_groups";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_indicator_groups", " " . GetTableCaption("public_moh_indicator_groups"));
$table = "public.timetracker";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("timetracker", " " . GetTableCaption("public_timetracker"));
$table = "public.mfr_facilities_register";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("mfr_facilities_register", " " . GetTableCaption("public_mfr_facilities_register"));
$table = "System_Users_Activity_Dashboard";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("system_users_activity_dashboard", " " . GetTableCaption("System_Users_Activity_Dashboard"));
$table = "HISPMD_Web_Reports_and_Charts_Builder";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_web_reports_and_charts_builder", " " . GetTableCaption("HISPMD_Web_Reports_and_Charts_Builder"));
$table = "public.mfr_facilities_register_report";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("public_mfr_facilities_register_report", " " . GetTableCaption("public_mfr_facilities_register_report"));
$table = "public.hispmd_organisations";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_organisations", " " . GetTableCaption("public_hispmd_organisations"));
$table = "public.hispmd_uggroups";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_uggroups", " " . GetTableCaption("public_hispmd_uggroups"));
$table = "public.mfr_facilities_register_chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("public_mfr_facilities_register_chart", " " . GetTableCaption("public_mfr_facilities_register_chart"));
$table = "public.moh_data_scope";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_data_scope", " " . GetTableCaption("public_moh_data_scope"));
$table = "HISPMD_MOH_Indicators_Dashboard";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_moh_indicators_dashboard", " " . GetTableCaption("HISPMD_MOH_Indicators_Dashboard"));
$table = "MOH_Indicators_Data_Report";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_indicators_data_report", " " . GetTableCaption("MOH_Indicators_Data_Report"));
$table = "MOH_Indicators_data_Chart";
$mask="";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("moh_indicators_data_chart", " " . GetTableCaption("MOH_Indicators_data_Chart"));
$table = "DHIS2_OrgUnits_Distribution";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("dhis2_orgunits_distribution", " " . GetTableCaption("DHIS2_OrgUnits_Distribution"));
$table = "public.chat_history";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("chat_history", " " . GetTableCaption("public_chat_history"));
$table = "kbarticles";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("kbarticles", " " . GetTableCaption("kbarticles"));
$table = "kbcategories";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("kbcategories", " " . GetTableCaption("kbcategories"));
$table = "kbcomments";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("kbcomments", " " . GetTableCaption("kbcomments"));
$table = "kbusers";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("kbusers", " " . GetTableCaption("kbusers"));
$table = "main";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("main", " " . GetTableCaption("main"));
$table = "faicons";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("faicons", " " . GetTableCaption("faicons"));
$table = "admin_comments";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("admin_comments", " " . GetTableCaption("admin_comments"));
$table = "public.hispmd_noti_view";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hispmd_noti_view", " " . GetTableCaption("public_hispmd_noti_view"));
$table = "public.faicons";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("faicons1", " " . GetTableCaption("public_faicons"));

if ( pageEnabled(GLOBAL_PAGES, 'menu') )
	$pageMask[GLOBAL_PAGES] = "S";
else
	$pageMask[GLOBAL_PAGES] = "";
$tables[GLOBAL_PAGES] = array(GoodFieldName(GLOBAL_PAGES_SHORT), " " . GLOBAL_PAGES);

require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = "admin_rights_list";
$options["pageTable"] = GLOBAL_PAGES;
$options["id"] = postvalue_number("id") ? postvalue_number("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;
$options["requestGoto"] = postvalue_number("goto");


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	//	CSRF protection
	if( !isPostRequest() )
		return;
	$modifiedRights = my_json_decode(postvalue('data'));
	$pageObject->saveRights( $modifiedRights );
	return;
}


// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();



?>
