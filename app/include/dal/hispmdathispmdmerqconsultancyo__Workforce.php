<?php
$dalTableWorkforce = array();
$dalTableWorkforce["workforce_id"] = array("type"=>3,"varname"=>"workforce_id", "name" => "workforce_id", "autoInc" => "1");
$dalTableWorkforce["region_id"] = array("type"=>3,"varname"=>"region_id", "name" => "region_id", "autoInc" => "0");
$dalTableWorkforce["adequate_staff"] = array("type"=>16,"varname"=>"adequate_staff", "name" => "adequate_staff", "autoInc" => "0");
$dalTableWorkforce["competency_index"] = array("type"=>5,"varname"=>"competency_index", "name" => "competency_index", "autoInc" => "0");
$dalTableWorkforce["workforce_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__Workforce"] = &$dalTableWorkforce;
?>