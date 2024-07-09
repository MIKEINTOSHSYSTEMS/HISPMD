<?php
$dalTableHealthFacilities = array();
$dalTableHealthFacilities["hf_id"] = array("type"=>3,"varname"=>"hf_id", "name" => "hf_id", "autoInc" => "1");
$dalTableHealthFacilities["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableHealthFacilities["type"] = array("type"=>129,"varname"=>"type", "name" => "type", "autoInc" => "0");
$dalTableHealthFacilities["his_audit_started"] = array("type"=>16,"varname"=>"his_audit_started", "name" => "his_audit_started", "autoInc" => "0");
$dalTableHealthFacilities["hf_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__HealthFacilities"] = &$dalTableHealthFacilities;
?>