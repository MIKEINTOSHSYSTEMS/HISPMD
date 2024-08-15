<?php
$dalTabledataquality = array();
$dalTabledataquality["dq_id"] = array("type"=>20,"varname"=>"dq_id", "name" => "dq_id", "autoInc" => "0");
$dalTabledataquality["report_type"] = array("type"=>200,"varname"=>"report_type", "name" => "report_type", "autoInc" => "0");
$dalTabledataquality["timeliness_percentage"] = array("type"=>5,"varname"=>"timeliness_percentage", "name" => "timeliness_percentage", "autoInc" => "0");
$dalTabledataquality["completeness_percentage"] = array("type"=>5,"varname"=>"completeness_percentage", "name" => "completeness_percentage", "autoInc" => "0");
$dalTabledataquality["dq_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_dataquality"] = &$dalTabledataquality;
?>