<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblhispmdathispmdmerqconsultancyo_public_ai_data_assistant;
	var $tblhispmdathispmdmerqconsultancyo_public_chat_history;
	var $tblhispmdathispmdmerqconsultancyo_public_dataquality;
	var $tblhispmdathispmdmerqconsultancyo_public_datause;
	var $tblhispmdathispmdmerqconsultancyo_public_dhis2_periods;
	var $tblhispmdathispmdmerqconsultancyo_public_digitalhealth;
	var $tblhispmdathispmdmerqconsultancyo_public_digitalhealthapps;
	var $tblhispmdathispmdmerqconsultancyo_public_ethprism_additional_organizational_and_behavioral_assessment;
	var $tblhispmdathispmdmerqconsultancyo_public_ethprism_facility_level_rhis_performance_diagnostic;
	var $tblhispmdathispmdmerqconsultancyo_public_ethprism_facility_office_checklist;
	var $tblhispmdathispmdmerqconsultancyo_public_ethprism_healthpost_level_rhis_performance_diagnostic;
	var $tblhispmdathispmdmerqconsultancyo_public_ethprism_national_prism_woreda_level_diagnostic;
	var $tblhispmdathispmdmerqconsultancyo_public_ethprism_organizational_and_behavioral_assessment;
	var $tblhispmdathispmdmerqconsultancyo_public_faicons;
	var $tblhispmdathispmdmerqconsultancyo_public_financialresources;
	var $tblhispmdathispmdmerqconsultancyo_public_healthfacilities;
	var $tblhispmdathispmdmerqconsultancyo_public_healthunits;
	var $tblhispmdathispmdmerqconsultancyo_public_hisgovernance;
	var $tblhispmdathispmdmerqconsultancyo_public_hispartners;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd__audit;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd__locking;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd_noti;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd_organisations;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd_prism_settings;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd_settings;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd_uggroups;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd_ugmembers;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmd_ugrights;
	var $tblhispmdathispmdmerqconsultancyo_public_hispmdusers;
	var $tblhispmdathispmdmerqconsultancyo_public_kbarticles;
	var $tblhispmdathispmdmerqconsultancyo_public_kbcategories;
	var $tblhispmdathispmdmerqconsultancyo_public_kbcomments;
	var $tblhispmdathispmdmerqconsultancyo_public_kbusers;
	var $tblhispmdathispmdmerqconsultancyo_public_mfr_dashboard_reports;
	var $tblhispmdathispmdmerqconsultancyo_public_mfr_facilities_register;
	var $tblhispmdathispmdmerqconsultancyo_public_mfr_operational_status;
	var $tblhispmdathispmdmerqconsultancyo_public_mfr_region;
	var $tblhispmdathispmdmerqconsultancyo_public_mfr_woreda;
	var $tblhispmdathispmdmerqconsultancyo_public_mfr_zone;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_administration_units;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_assessments;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_data_scope;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_data_sources;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_facility_types;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_health_facilities;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_indicator_data;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_indicator_groups;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_indicators;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_ir_datasource;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_months;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_period_types;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_quarters;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_regions;
	var $tblhispmdathispmdmerqconsultancyo_public_moh_years;
	var $tblhispmdathispmdmerqconsultancyo_public_publications;
	var $tblhispmdathispmdmerqconsultancyo_public_regions;
	var $tblhispmdathispmdmerqconsultancyo_public_research;
	var $tblhispmdathispmdmerqconsultancyo_public_timetracker;
	var $tblhispmdathispmdmerqconsultancyo_public_webreport_admin;
	var $tblhispmdathispmdmerqconsultancyo_public_webreport_style;
	var $tblhispmdathispmdmerqconsultancyo_public_webreports;
	var $tblhispmdathispmdmerqconsultancyo_public_workforce;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "ai_data_assistant", "varname" => "hispmdathispmdmerqconsultancyo_public_ai_data_assistant", "altvarname" => "ai_data_assistant", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "chat_history", "varname" => "hispmdathispmdmerqconsultancyo_public_chat_history", "altvarname" => "chat_history", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "dataquality", "varname" => "hispmdathispmdmerqconsultancyo_public_dataquality", "altvarname" => "dataquality", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "datause", "varname" => "hispmdathispmdmerqconsultancyo_public_datause", "altvarname" => "datause", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "dhis2_periods", "varname" => "hispmdathispmdmerqconsultancyo_public_dhis2_periods", "altvarname" => "dhis2_periods", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "digitalhealth", "varname" => "hispmdathispmdmerqconsultancyo_public_digitalhealth", "altvarname" => "digitalhealth", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "digitalhealthapps", "varname" => "hispmdathispmdmerqconsultancyo_public_digitalhealthapps", "altvarname" => "digitalhealthapps", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "ethprism_additional_organizational_and_behavioral_assessment", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_additional_organizational_and_behavioral_assessment", "altvarname" => "ethprism_additional_organizational_and_behavioral_assessment", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "ethprism_facility_level_rhis_performance_diagnostic", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_facility_level_rhis_performance_diagnostic", "altvarname" => "ethprism_facility_level_rhis_performance_diagnostic", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "ethprism_facility_office_checklist", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_facility_office_checklist", "altvarname" => "ethprism_facility_office_checklist", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "ethprism_healthpost_level_rhis_performance_diagnostic", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_healthpost_level_rhis_performance_diagnostic", "altvarname" => "ethprism_healthpost_level_rhis_performance_diagnostic", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "ethprism_national_prism_woreda_level_diagnostic", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_national_prism_woreda_level_diagnostic", "altvarname" => "ethprism_national_prism_woreda_level_diagnostic", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "ethprism_organizational_and_behavioral_assessment", "varname" => "hispmdathispmdmerqconsultancyo_public_ethprism_organizational_and_behavioral_assessment", "altvarname" => "ethprism_organizational_and_behavioral_assessment", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "faicons", "varname" => "hispmdathispmdmerqconsultancyo_public_faicons", "altvarname" => "faicons", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "financialresources", "varname" => "hispmdathispmdmerqconsultancyo_public_financialresources", "altvarname" => "financialresources", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "healthfacilities", "varname" => "hispmdathispmdmerqconsultancyo_public_healthfacilities", "altvarname" => "healthfacilities", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "healthunits", "varname" => "hispmdathispmdmerqconsultancyo_public_healthunits", "altvarname" => "healthunits", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hisgovernance", "varname" => "hispmdathispmdmerqconsultancyo_public_hisgovernance", "altvarname" => "hisgovernance", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispartners", "varname" => "hispmdathispmdmerqconsultancyo_public_hispartners", "altvarname" => "hispartners", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd__audit", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd__audit", "altvarname" => "hispmd__audit", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd__locking", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd__locking", "altvarname" => "hispmd__locking", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd_noti", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_noti", "altvarname" => "hispmd_noti", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd_organisations", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_organisations", "altvarname" => "hispmd_organisations", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd_prism_settings", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_prism_settings", "altvarname" => "hispmd_prism_settings", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd_settings", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_settings", "altvarname" => "hispmd_settings", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd_uggroups", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_uggroups", "altvarname" => "hispmd_uggroups", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd_ugmembers", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_ugmembers", "altvarname" => "hispmd_ugmembers", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmd_ugrights", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmd_ugrights", "altvarname" => "hispmd_ugrights", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "hispmdusers", "varname" => "hispmdathispmdmerqconsultancyo_public_hispmdusers", "altvarname" => "hispmdusers", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "kbarticles", "varname" => "hispmdathispmdmerqconsultancyo_public_kbarticles", "altvarname" => "kbarticles", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "kbcategories", "varname" => "hispmdathispmdmerqconsultancyo_public_kbcategories", "altvarname" => "kbcategories", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "kbcomments", "varname" => "hispmdathispmdmerqconsultancyo_public_kbcomments", "altvarname" => "kbcomments", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "kbusers", "varname" => "hispmdathispmdmerqconsultancyo_public_kbusers", "altvarname" => "kbusers", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "mfr_dashboard_reports", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_dashboard_reports", "altvarname" => "mfr_dashboard_reports", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "mfr_facilities_register", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_facilities_register", "altvarname" => "mfr_facilities_register", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "mfr_operational_status", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_operational_status", "altvarname" => "mfr_operational_status", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "mfr_region", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_region", "altvarname" => "mfr_region", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "mfr_woreda", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_woreda", "altvarname" => "mfr_woreda", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "mfr_zone", "varname" => "hispmdathispmdmerqconsultancyo_public_mfr_zone", "altvarname" => "mfr_zone", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_administration_units", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_administration_units", "altvarname" => "moh_administration_units", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_assessments", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_assessments", "altvarname" => "moh_assessments", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_data_scope", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_data_scope", "altvarname" => "moh_data_scope", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_data_sources", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_data_sources", "altvarname" => "moh_data_sources", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_facility_types", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_facility_types", "altvarname" => "moh_facility_types", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_health_facilities", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_health_facilities", "altvarname" => "moh_health_facilities", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_indicator_data", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_indicator_data", "altvarname" => "moh_indicator_data", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_indicator_groups", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_indicator_groups", "altvarname" => "moh_indicator_groups", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_indicators", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_indicators", "altvarname" => "moh_indicators", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_ir_datasource", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_ir_datasource", "altvarname" => "moh_ir_datasource", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_months", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_months", "altvarname" => "moh_months", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_period_types", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_period_types", "altvarname" => "moh_period_types", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_quarters", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_quarters", "altvarname" => "moh_quarters", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_regions", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_regions", "altvarname" => "moh_regions", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "moh_years", "varname" => "hispmdathispmdmerqconsultancyo_public_moh_years", "altvarname" => "moh_years", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "publications", "varname" => "hispmdathispmdmerqconsultancyo_public_publications", "altvarname" => "publications", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "regions", "varname" => "hispmdathispmdmerqconsultancyo_public_regions", "altvarname" => "regions", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "research", "varname" => "hispmdathispmdmerqconsultancyo_public_research", "altvarname" => "research", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "timetracker", "varname" => "hispmdathispmdmerqconsultancyo_public_timetracker", "altvarname" => "timetracker", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "webreport_admin", "varname" => "hispmdathispmdmerqconsultancyo_public_webreport_admin", "altvarname" => "webreport_admin", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "webreport_style", "varname" => "hispmdathispmdmerqconsultancyo_public_webreport_style", "altvarname" => "webreport_style", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "webreports", "varname" => "hispmdathispmdmerqconsultancyo_public_webreports", "altvarname" => "webreports", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
		$this->lstTables[] = array("name" => "workforce", "varname" => "hispmdathispmdmerqconsultancyo_public_workforce", "altvarname" => "workforce", "connId" => "hispmdathispmdmerqconsultancyo", "schema" => "public", "connName" => "hisp_md at hispmd.merqconsulta");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>