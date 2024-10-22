<?php
$dalTablesgb_users = array();
$dalTablesgb_users["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesgb_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablesgb_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablesgb_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablesgb_users["usertype"] = array("type"=>200,"varname"=>"usertype", "name" => "usertype", "autoInc" => "0");
$dalTablesgb_users["reset_token"] = array("type"=>201,"varname"=>"reset_token", "name" => "reset_token", "autoInc" => "0");
$dalTablesgb_users["reset_date"] = array("type"=>135,"varname"=>"reset_date", "name" => "reset_date", "autoInc" => "0");
$dalTablesgb_users["id"]["key"]=true;

$dal_info["project_at_localhost__sgb_users"] = &$dalTablesgb_users;
?>