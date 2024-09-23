<?php
$dalTablekbcomments = array();
$dalTablekbcomments["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablekbcomments["moderated"] = array("type"=>3,"varname"=>"moderated", "name" => "moderated", "autoInc" => "0");
$dalTablekbcomments["created_date"] = array("type"=>135,"varname"=>"created_date", "name" => "created_date", "autoInc" => "0");
$dalTablekbcomments["ArticleID"] = array("type"=>3,"varname"=>"ArticleID", "name" => "ArticleID", "autoInc" => "0");
$dalTablekbcomments["comment"] = array("type"=>201,"varname"=>"comment", "name" => "comment", "autoInc" => "0");
$dalTablekbcomments["CommentID"] = array("type"=>3,"varname"=>"CommentID", "name" => "CommentID", "autoInc" => "1");
$dalTablekbcomments["email"] = array("type"=>200,"varname"=>"email", "name" => "email", "autoInc" => "0");
$dalTablekbcomments["CommentID"]["key"]=true;

$dal_info["hispmdathispmdmerqconsultancyo_public_kbcomments"] = &$dalTablekbcomments;
?>