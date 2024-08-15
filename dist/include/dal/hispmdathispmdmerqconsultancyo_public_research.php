<?php
$dalTableresearch = array();
$dalTableresearch["research_id"] = array("type"=>200,"varname"=>"research_id", "name" => "research_id", "autoInc" => "0");
$dalTableresearch["title"] = array("type"=>200,"varname"=>"title", "name" => "title", "autoInc" => "0");
$dalTableresearch["conducted"] = array("type"=>200,"varname"=>"conducted", "name" => "conducted", "autoInc" => "0");
$dalTableresearch["research_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_research"] = &$dalTableresearch;
?>