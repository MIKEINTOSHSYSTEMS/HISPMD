<?php
$dalTableResearch = array();
$dalTableResearch["research_id"] = array("type"=>3,"varname"=>"research_id", "name" => "research_id", "autoInc" => "1");
$dalTableResearch["title"] = array("type"=>200,"varname"=>"title", "name" => "title", "autoInc" => "0");
$dalTableResearch["conducted"] = array("type"=>16,"varname"=>"conducted", "name" => "conducted", "autoInc" => "0");
$dalTableResearch["research_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__Research"] = &$dalTableResearch;
?>