<?php
$dalTableFinancialResources = array();
$dalTableFinancialResources["resource_id"] = array("type"=>3,"varname"=>"resource_id", "name" => "resource_id", "autoInc" => "1");
$dalTableFinancialResources["year"] = array("type"=>3,"varname"=>"year", "name" => "year", "autoInc" => "0");
$dalTableFinancialResources["amount"] = array("type"=>14,"varname"=>"amount", "name" => "amount", "autoInc" => "0");
$dalTableFinancialResources["utilized"] = array("type"=>14,"varname"=>"utilized", "name" => "utilized", "autoInc" => "0");
$dalTableFinancialResources["region_id"] = array("type"=>3,"varname"=>"region_id", "name" => "region_id", "autoInc" => "0");
$dalTableFinancialResources["resource_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__FinancialResources"] = &$dalTableFinancialResources;
?>