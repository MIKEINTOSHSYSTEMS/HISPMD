<?php
$dalTablesgb_votes = array();
$dalTablesgb_votes["user_id"] = array("type"=>3,"varname"=>"user_id", "name" => "user_id", "autoInc" => "0");
$dalTablesgb_votes["s_id"] = array("type"=>3,"varname"=>"s_id", "name" => "s_id", "autoInc" => "0");
$dalTablesgb_votes["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip", "autoInc" => "0");
$dalTablesgb_votes["s_id"]["key"]=true;
$dalTablesgb_votes["ip"]["key"]=true;

$dal_info["project_at_localhost__sgb_votes"] = &$dalTablesgb_votes;
?>