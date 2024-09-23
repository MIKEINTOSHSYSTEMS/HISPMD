<?php
$dalTablekbcategories = array();
$dalTablekbcategories["Category"] = array("type"=>200,"varname"=>"Category", "name" => "Category", "autoInc" => "0");
$dalTablekbcategories["CategoryID"] = array("type"=>3,"varname"=>"CategoryID", "name" => "CategoryID", "autoInc" => "1");
$dalTablekbcategories["Description"] = array("type"=>200,"varname"=>"Description", "name" => "Description", "autoInc" => "0");
$dalTablekbcategories["faicon"] = array("type"=>200,"varname"=>"faicon", "name" => "faicon", "autoInc" => "0");
$dalTablekbcategories["CategoryID"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_kbcategories"] = &$dalTablekbcategories;
?>