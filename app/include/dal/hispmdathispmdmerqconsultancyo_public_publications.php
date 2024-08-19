<?php
$dalTablepublications = array();
$dalTablepublications["publication_id"] = array("type"=>20,"varname"=>"publication_id", "name" => "publication_id", "autoInc" => "0");
$dalTablepublications["title"] = array("type"=>200,"varname"=>"title", "name" => "title", "autoInc" => "0");
$dalTablepublications["level"] = array("type"=>200,"varname"=>"level", "name" => "level", "autoInc" => "0");
$dalTablepublications["publication_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_publications"] = &$dalTablepublications;
?>