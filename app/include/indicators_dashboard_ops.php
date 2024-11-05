<?php
$topsindicators_dashboard = array();
		$topsindicators_dashboard["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT
  ig.indicator_group_id AS \"Indicator Group\",
  mi.indicator_name AS \"Indicator Name\",
  mi.baseline AS \"Baseline\",
  mi.target AS \"Target\",
  mf.facility_type_name AS \"Facility Type\",
  ds.data_source_name AS \"Data Source\",
  a.assessment_name AS \"Assessment\",
  u.unit_name AS \"Administration Unit\",
  ind.\"year\" AS \"Year\",
  s.scope_name AS \"Scope\",
  r.region_name AS \"Region\",
  ind.gender_sex AS \"Gender/Sex\",
  ind.value AS \"Value\",
  ind.data_representation AS \"Data Representation\",
  ind.quarter_id AS \"Quarter ID\",
  ind.month_id AS \"Month ID\",
  ind.period_id AS \"Period ID\",
  CASE 
        WHEN ind.quarter_id IS NOT NULL THEN CONCAT('Q', ind.quarter_id::TEXT, '-', ind.\"year\"::TEXT)
        WHEN ind.month_id IS NOT NULL THEN CONCAT('M', ind.month_id::TEXT, '-', ind.\"year\"::TEXT)
        ELSE ind.\"year\"::TEXT
    END AS \"Period\"
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
  ig.indicator_group_id,
  mi.indicator_name,
  mi.baseline,
  mi.target,
  mf.facility_type_name,
  ds.data_source_name,
  a.assessment_name,
  u.unit_name,
  ind.\"year\",
  s.scope_name,
  r.region_name,
  ind.gender_sex,
  ind.value,
  ind.data_representation,
  ind.quarter_id,
  ind.month_id,
  ind.period_id,
  CASE 
        WHEN ind.quarter_id IS NOT NULL THEN CONCAT('Q', ind.quarter_id::TEXT, '-', ind.\"year\"::TEXT)
        WHEN ind.month_id IS NOT NULL THEN CONCAT('M', ind.month_id::TEXT, '-', ind.\"year\"::TEXT)
        ELSE ind.\"year\"::TEXT
    END
ORDER BY ind.\"year\"
"
	);
		$tables_data["Indicators_Dashboard"][".operations"] = &$topsindicators_dashboard;
?>