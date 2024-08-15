<?php

$tdataGLOBAL = array();


$tdataGLOBAL[".pagesByType"] = my_json_decode( "{\"admin_members_list\":[\"admin_members_list\"],\"admin_rights_list\":[\"admin_rights_list\"],\"login\":[\"login\"],\"menu\":[\"menu\"],\"userinfo\":[\"userinfo\"]}" );
$tdataGLOBAL[".originalPagesByType"] = $tdataGLOBAL[".pagesByType"];
$tdataGLOBAL[".pages"] = types2pages( my_json_decode( "{\"admin_members_list\":[\"admin_members_list\"],\"admin_rights_list\":[\"admin_rights_list\"],\"login\":[\"login\"],\"menu\":[\"menu\"],\"userinfo\":[\"userinfo\"]}" ) );
$tdataGLOBAL[".originalPages"] = $tdataGLOBAL[".pages"];
$tdataGLOBAL[".defaultPages"] = my_json_decode( "{\"admin_members_list\":\"admin_members_list\",\"admin_rights_list\":\"admin_rights_list\",\"login\":\"login\",\"menu\":\"menu\",\"userinfo\":\"userinfo\"}" );
$tdataGLOBAL[".originalDefaultPages"] = $tdataGLOBAL[".defaultPages"];

$tables_data["<global>"] =& $tdataGLOBAL;


$detailsTablesData["<global>"] = array();
$masterTablesData["<global>"] = array();

?>