<?php
$dalTableHISPartners = array();
$dalTableHISPartners["partner_id"] = array("type"=>3,"varname"=>"partner_id", "name" => "partner_id", "autoInc" => "1");
$dalTableHISPartners["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableHISPartners["aligned_plan"] = array("type"=>16,"varname"=>"aligned_plan", "name" => "aligned_plan", "autoInc" => "0");
$dalTableHISPartners["partner_id"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo__HISPartners"] = &$dalTableHISPartners;
?>