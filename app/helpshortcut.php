<?php
require_once("include/dbcommon.php");
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");
add_nocache_headers();
require_once('include/xtempl.php');
$xt = new Xtempl();
//$templatefile="helpshortcut.htm";
$xt->display($templatefile);
?>