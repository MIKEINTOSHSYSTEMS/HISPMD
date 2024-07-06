<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");

if(!isWRAdmin())
{
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: ".GetTableLink("webreport"));
	return;
}

include('include/xtempl.php');
$xt = new Xtempl();
$_SESSION["webobject"]["table_type"]="custom";
$b_includes = "";
$h_includes = "";

$h_includes .= '
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/jquery-ui.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/dstyle.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/fancybox/jquery.fancybox.css").'" type="text/css" media="screen">
	
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.min.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.dimensions.pack.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.easing.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.fancybox.pack.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery-ui.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/json.js").'"></script>
'."\r\n";

$xt->assign("h_includes", $h_includes);

$b_includes .= '<script type="text/javascript">'."\r\n";
  
$b_includes .= '
$(document).ready(function(){
	$("a#a_editsql").fancybox({
		fitToView: false,
				autoSize: false,
				width : 850,
				height : 550,
				overlayShow: true
	});
	$("a#a_resultsql").fancybox({
		fitToView: false,
				autoSize: false,
				width : 850,
				height : 550,
				overlayShow: true
	});
	$("a#a_addsql").fancybox({
		fitToView: false,
				autoSize: false,
				width : 850,
				height : 550,
				overlayShow: true
	});
	';

$b_includes .= alertDialog();
$b_includes .= '$("#backbtn").click(function(){
			window.location = "'.GetTableLink("webreport").'";
			return;
		});
	$("#fancy_overlay").unbind();
	$("#addsql").click(function(){
		$("#a_addsql").click();
	});
	$("#editsql").click(function(){
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-admin").'",
			data: {
				name: "getcustomsql",
				output: $("#sql_list option:selected").val(),
				rnd: (new Date().getTime())
			},
			success: function(msg)
			{
				$("#a_editsql").click();
			}
		});
		
	});
	$("#deletesql").click(function(){
		$("#sql_list").change();
		mess="<p>'."Do you really want to delete custom query %s ?".'</p>";
		mess=mess.replace("%s",$("#sql_list option:selected").text());
		$("#alert")
			.html(mess)
			.dialog("option", "buttons", {
				"No": function() { $(this).dialog("close"); },
				"Delete": function() {
					$.ajax({
						type: "POST",
						url: "'.GetTableLink("save-admin").'",
						data: {
							name: "deletesql",
							idsql: $("#sql_list option:selected").val(),
							rnd: (new Date().getTime())
						},
						success: function(msg){
							if ( msg == "OK" ) {
								window.location.reload();
							} else {
								$("#alert").html("<p>"+msg+"</p>").dialog("open");
							}
						},
						error: function() {
							$("#alert").html("<p>'."Try again later".'</p>").dialog("open");
						}
					});				
				}
			})
			.dialog("open");
	});
	$("#resultsql").click(function(){
		$("#sql_list").change();
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("web_query").'",
			data: {
				name: "resultsql",
				output: $("#sql_list option:selected").val(),
				rnd: (new Date().getTime())
			},
			success: function(msg)
			{
				$("#a_resultsql").click();
			}
		});
		
	});
	$("#sql_list").change(function(){
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-admin").'",
			data: {
				name: "getcustomsql",
				output: $("#sql_list option:selected").val(),
				rnd: (new Date().getTime())
			},
			success: function(msg)
			{
				$("#sql_content").html(msg);
			}
		});
	});';

if(postvalue("name"))
	$b_includes .= '
	$("#sql_list option").each(function(i){
		if($(this).text()=="'.str_replace("\"","\\\"",postvalue("name")).'")
			$(this).attr("selected","yes");
	});
	';
else
	$b_includes .= '
	$("#sql_list").get(0).selectedIndex=0;
	$("#sql_list option:first").attr("selected", "yes");
	';

	
$b_includes .= '
	$("#sql_list").change();';


$arr_custom=WRGetListCustomSQL();

$sql_list="<select name=sql_list id=sql_list size=20 style='width:500px;font-size:11pt;'>";
foreach($arr_custom as $value)
	$sql_list.="<option value=\"".$value["id"]."\">".runner_htmlspecialchars($value["sqlname"])."</option>";
$sql_list.="</select>";

if(!pre8count($arr_custom))
	$b_includes .= '
		$("#editsql,#deletesql,#resultsql").attr("disabled","disabled")
											.css("color","#847C7C")
											.css("cursor","default");
		
	';

$b_includes .= '
});
</script>'."\r\n";
$xt->assign("b_includes", $b_includes);

if($wr_is_standalone)
	$xt->assign("saveexit",false);
else
	$xt->assign("saveexit",true);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);	
$xt->assign("sql_list",$sql_list);
$templatefile = GetTemplateName("", "webreport_sql");
$xt->display($templatefile);
?>
