<?php
$dalTablehispmd_organisations = array();
$dalTablehispmd_organisations["orgid"] = array("type"=>3,"varname"=>"orgid", "name" => "orgid", "autoInc" => "1");
$dalTablehispmd_organisations["organisation_name"] = array("type"=>200,"varname"=>"organisation_name", "name" => "organisation_name", "autoInc" => "0");
$dalTablehispmd_organisations["organisation_country"] = array("type"=>200,"varname"=>"organisation_country", "name" => "organisation_country", "autoInc" => "0");
$dalTablehispmd_organisations["organisation_city"] = array("type"=>200,"varname"=>"organisation_city", "name" => "organisation_city", "autoInc" => "0");
$dalTablehispmd_organisations["organisation_address"] = array("type"=>201,"varname"=>"organisation_address", "name" => "organisation_address", "autoInc" => "0");
$dalTablehispmd_organisations["organisation_phone"] = array("type"=>200,"varname"=>"organisation_phone", "name" => "organisation_phone", "autoInc" => "0");
$dalTablehispmd_organisations["organisation_email"] = array("type"=>200,"varname"=>"organisation_email", "name" => "organisation_email", "autoInc" => "0");
$dalTablehispmd_organisations["organisation_website"] = array("type"=>200,"varname"=>"organisation_website", "name" => "organisation_website", "autoInc" => "0");
$dalTablehispmd_organisations["orgid"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_hispmd_organisations"] = &$dalTablehispmd_organisations;
?>