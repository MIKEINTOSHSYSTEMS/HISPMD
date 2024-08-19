<?php
$dalTableregions = array();
$dalTableregions["region_id"] = array("type"=>200,"varname"=>"region_id", "name" => "region_id", "autoInc" => "0");
$dalTableregions["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableregions["his_strategic_plan"] = array("type"=>200,"varname"=>"his_strategic_plan", "name" => "his_strategic_plan", "autoInc" => "0");
$dalTableregions["region_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_regions"] = &$dalTableregions;
?>