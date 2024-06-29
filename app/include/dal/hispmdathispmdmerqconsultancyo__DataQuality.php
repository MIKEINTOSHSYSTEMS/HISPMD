<?php
$dalTableDataQuality = array();
$dalTableDataQuality["dq_id"] = array("type"=>3,"varname"=>"dq_id", "name" => "dq_id", "autoInc" => "1");
$dalTableDataQuality["report_type"] = array("type"=>200,"varname"=>"report_type", "name" => "report_type", "autoInc" => "0");
$dalTableDataQuality["timeliness_percentage"] = array("type"=>5,"varname"=>"timeliness_percentage", "name" => "timeliness_percentage", "autoInc" => "0");
$dalTableDataQuality["completeness_percentage"] = array("type"=>5,"varname"=>"completeness_percentage", "name" => "completeness_percentage", "autoInc" => "0");
$dalTableDataQuality["dq_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__DataQuality"] = &$dalTableDataQuality;
?>