<?php
$dalTablekbusers = array();
$dalTablekbusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablekbusers["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablekbusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTablekbusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTablekbusers["email"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_kbusers"] = &$dalTablekbusers;
?>