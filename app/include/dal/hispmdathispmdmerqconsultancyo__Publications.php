<?php
$dalTablePublications = array();
$dalTablePublications["publication_id"] = array("type"=>3,"varname"=>"publication_id", "name" => "publication_id", "autoInc" => "1");
$dalTablePublications["title"] = array("type"=>200,"varname"=>"title", "name" => "title", "autoInc" => "0");
$dalTablePublications["level"] = array("type"=>129,"varname"=>"level", "name" => "level", "autoInc" => "0");
$dalTablePublications["publication_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__Publications"] = &$dalTablePublications;
?>