<?php
$dalTablehispmd_ugmembers = array();
$dalTablehispmd_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablehispmd_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablehispmd_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablehispmd_ugmembers["UserName"]["key"]=true;
$dalTablehispmd_ugmembers["GroupID"]["key"]=true;
$dalTablehispmd_ugmembers["Provider"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_hispmd_ugmembers"] = &$dalTablehispmd_ugmembers;
?>