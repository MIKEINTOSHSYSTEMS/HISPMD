<?php
$dalTablehealthfacilities = array();
$dalTablehealthfacilities["hf_id"] = array("type"=>200,"varname"=>"hf_id", "name" => "hf_id", "autoInc" => "0");
$dalTablehealthfacilities["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablehealthfacilities["type"] = array("type"=>200,"varname"=>"type", "name" => "type", "autoInc" => "0");
$dalTablehealthfacilities["his_audit_started"] = array("type"=>200,"varname"=>"his_audit_started", "name" => "his_audit_started", "autoInc" => "0");
$dalTablehealthfacilities["hf_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_healthfacilities"] = &$dalTablehealthfacilities;
?>