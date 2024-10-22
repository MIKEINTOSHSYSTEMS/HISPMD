<?php

$tdataGLOBAL = array();


$tdataGLOBAL[".pagesByType"] = my_json_decode( "{\"changepwd\":[\"changepwd_Project\"],\"changepwd_success\":[\"changepwd_success_Project\"],\"login\":[\"login_Project\"],\"menu\":[\"menu_Project\"],\"remind\":[\"remind\"],\"remind_success\":[\"remind_success\"],\"userinfo\":[\"userinfo_Project\"]}" );
$tdataGLOBAL[".originalPagesByType"] = $tdataGLOBAL[".pagesByType"];
$tdataGLOBAL[".pages"] = types2pages( my_json_decode( "{\"changepwd\":[\"changepwd_Project\"],\"changepwd_success\":[\"changepwd_success_Project\"],\"login\":[\"login_Project\"],\"menu\":[\"menu_Project\"],\"remind\":[\"remind\"],\"remind_success\":[\"remind_success\"],\"userinfo\":[\"userinfo_Project\"]}" ) );
$tdataGLOBAL[".originalPages"] = $tdataGLOBAL[".pages"];
$tdataGLOBAL[".defaultPages"] = my_json_decode( "{\"changepwd\":\"changepwd_Project\",\"changepwd_success\":\"changepwd_success_Project\",\"login\":\"login_Project\",\"menu\":\"menu_Project\",\"remind\":\"remind\",\"remind_success\":\"remind_success\",\"userinfo\":\"userinfo_Project\"}" );
$tdataGLOBAL[".originalDefaultPages"] = $tdataGLOBAL[".defaultPages"];

$tables_data["<global>"] =& $tdataGLOBAL;


$detailsTablesData["<global>"] = array();
$masterTablesData["<global>"] = array();

?>