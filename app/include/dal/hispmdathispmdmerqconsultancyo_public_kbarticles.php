<?php
$dalTablekbarticles = array();
$dalTablekbarticles["ArticleID"] = array("type"=>3,"varname"=>"ArticleID", "name" => "ArticleID", "autoInc" => "1");
$dalTablekbarticles["Category"] = array("type"=>200,"varname"=>"Category", "name" => "Category", "autoInc" => "0");
$dalTablekbarticles["DateCreated"] = array("type"=>7,"varname"=>"DateCreated", "name" => "DateCreated", "autoInc" => "0");
$dalTablekbarticles["Problem"] = array("type"=>201,"varname"=>"Problem", "name" => "Problem", "autoInc" => "0");
$dalTablekbarticles["Solution"] = array("type"=>201,"varname"=>"Solution", "name" => "Solution", "autoInc" => "0");
$dalTablekbarticles["Title"] = array("type"=>200,"varname"=>"Title", "name" => "Title", "autoInc" => "0");
$dalTablekbarticles["Views"] = array("type"=>3,"varname"=>"Views", "name" => "Views", "autoInc" => "0");
$dalTablekbarticles["likecount"] = array("type"=>3,"varname"=>"likecount", "name" => "likecount", "autoInc" => "0");
$dalTablekbarticles["dislikecount"] = array("type"=>3,"varname"=>"dislikecount", "name" => "dislikecount", "autoInc" => "0");
$dalTablekbarticles["ArticleID"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_kbarticles"] = &$dalTablekbarticles;
?>