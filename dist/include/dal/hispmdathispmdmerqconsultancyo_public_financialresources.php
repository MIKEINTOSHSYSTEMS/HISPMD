<?php
$dalTablefinancialresources = array();
$dalTablefinancialresources["resource_id"] = array("type"=>20,"varname"=>"resource_id", "name" => "resource_id", "autoInc" => "0");
$dalTablefinancialresources["year"] = array("type"=>20,"varname"=>"year", "name" => "year", "autoInc" => "0");
$dalTablefinancialresources["amount"] = array("type"=>14,"varname"=>"amount", "name" => "amount", "autoInc" => "0");
$dalTablefinancialresources["utilized"] = array("type"=>14,"varname"=>"utilized", "name" => "utilized", "autoInc" => "0");
$dalTablefinancialresources["region_id"] = array("type"=>20,"varname"=>"region_id", "name" => "region_id", "autoInc" => "0");
$dalTablefinancialresources["resource_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_financialresources"] = &$dalTablefinancialresources;
?>