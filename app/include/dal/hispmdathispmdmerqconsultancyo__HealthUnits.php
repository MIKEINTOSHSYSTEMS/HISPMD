<?php
$dalTableHealthUnits = array();
$dalTableHealthUnits["unit_id"] = array("type"=>3,"varname"=>"unit_id", "name" => "unit_id", "autoInc" => "1");
$dalTableHealthUnits["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableHealthUnits["type"] = array("type"=>129,"varname"=>"type", "name" => "type", "autoInc" => "0");
$dalTableHealthUnits["strategic_plan"] = array("type"=>16,"varname"=>"strategic_plan", "name" => "strategic_plan", "autoInc" => "0");
$dalTableHealthUnits["unit_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__HealthUnits"] = &$dalTableHealthUnits;
?>