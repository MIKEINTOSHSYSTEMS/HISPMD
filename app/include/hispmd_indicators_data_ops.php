<?php
$topshispmd_indicators_data = array();
		$topshispmd_indicators_data["insert"] = array(
		"subtype" => "sql",
		"sql" => "INSERT INTO \"Indicators_Dashboard\" (

)
VALUES
(

)"
	);
				$topshispmd_indicators_data["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
  ig.indicator_group_name AS \"Indicator Group\",
  mi.indicator_name AS \"Indicator Name\",
  mi.baseline AS \"Baseline\",
  mi.target AS \"Target\",
  mf.facility_type_name AS \"Facility Type\",
  ds.data_source_name AS \"Data Source\",
  a.assessment_name AS \"Assessment\",
  u.unit_name AS \"Administration Unit\",
  ind.year AS \"Year\",
  s.scope_name AS \"Scope\",
  r.region_name AS \"Region\",
  ind.gender_sex AS \"Gender/Sex\",
  ind.value AS \"Value\",
  ind.data_representation AS \"Data Representation\"
FROM
  public.moh_indicator_data ind
INNER JOIN public.moh_indicators mi ON ind.indicator_id = mi.indicator_id
LEFT JOIN public.moh_facility_types mf ON ind.facility_type_id = mf.facility_type_id
LEFT JOIN public.moh_data_scope s ON ind.scope_id = s.scope_id
LEFT JOIN public.moh_regions r ON ind.region_id = r.region_id
LEFT JOIN public.moh_administration_units u ON ind.unit_id = u.unit_id
LEFT JOIN public.moh_data_sources ds ON ind.data_source_id = ds.data_source_id
LEFT JOIN public.moh_assessments a ON ind.assessment_id = a.assessment_id
LEFT JOIN public.moh_indicator_groups ig ON mi.indicator_group_id = ig.indicator_group_id

GROUP BY
  mi.indicator_name,
  mi.baseline,
  mi.target,
  mf.facility_type_name,
  ds.data_source_name,
  a.assessment_name,
  r.region_name,
  u.unit_name,
  ind.year,
  s.scope_name,
  ind.gender_sex,
  ind.data_representation,
  ig.indicator_group_id,
  ind.value
"
	);
		$tables_data["hispmd_indicators_data"][".operations"] = &$topshispmd_indicators_data;
?>