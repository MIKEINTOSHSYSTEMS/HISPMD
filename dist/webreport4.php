<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");

	if( !Security::getUserName() )
	{
		$_SESSION["MyURL"] = GetTableLink("webreport");
		header("Location: ".GetTableLink("login", "", "message=expired"));
		return;
	}

Reload_Report(postvalue("rname"));

if (strpos($_SESSION['webreports']['table_relations']['join_tables'], ",") !== false) {
	$arr_join_tables = array_slice(explode(",", $_SESSION['webreports']['table_relations']['join_tables']), 0, -1);	
}

$arr_join_tables[] = $_SESSION['webreports']['tables'][0];

if (is_wr_project()) 
	foreach ($arr_join_tables as $tbl)
		include_once("include/" . GetTableURL($tbl) . "_settings.php");	



include('include/xtempl.php');
$xt = new Xtempl();
$aSelGroupFields=array();
$arr = $_SESSION['webreports']['group_fields'];
if ( !empty( $arr ) ){

	for ( $i=0; $i < count($arr)-1; $i++ ) {
		$aSelGroupFields[] = $arr[$i]["name"];
	}
}
$is_crosstable_report=$arr[count($arr)-1]["cross_table"];
$aTableFields = array();
foreach($aSelGroupFields as $grval) 
{
	foreach($_SESSION['webreports']['totals'] as $val)
	{
		$field=$val["name"];
		if(is_wr_db())
			$field=$val["table"].".".$field;
		if($field==$grval)
			$aTableFields[] = array('table' => $val["table"], 'field' => $val["name"]);		
	}
}

$arr_fields = array();
$arr_fields = $_SESSION['webreports']['totals'];
foreach($arr_fields as $key=>$val) 
{
	$field=$val["name"];
	if(is_wr_db())
		$field=$val["table"].".".$field;
	if(!in_array($field,$aSelGroupFields))
		$aTableFields[] = array('table' => $val["table"], 'field' => $val["name"]);
}


$table_name = $_SESSION['webreports']['tables'][0];
//$aTableFields = GetFieldsList($table_name);

if (@$_SESSION['webreports']['settings']['title'] != "") {
	$title=@$_SESSION['webreports']['settings']['title'];
	if(strlen($title)>25)
		$title=substr($title,25)."...";
	$xt->assign("report_title",", "."Title".": ".$title);
} else {
	$xt->assign("report_title","");
}
if (@$_SESSION['webreports']['tables'][0] != "") {
	$stable=@$_SESSION['webreports']['tables'][0];
	if(strlen($stable)>25)
		$stable=substr($stable,25)."...";

	$xt->assign("report_table",", "."Table".": ".$stable);
} else {
	$xt->assign("report_table","");
}
$xt->assign("b_is_report_save",($_SESSION['webreports']['tmp_active'] != "x"));	
$xt->assign("b_is_report_name",($_SESSION['webreports']['settings']['name'] != ""));
$xt->assign("report_name",$_SESSION['webreports']['settings']['name']);

$tgFields = "";
$types = "";

$h_includes = "";
$b_includes = "";

$h_includes .= '
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/dstyle.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/jquery-ui.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/fancybox/jquery.fancybox.css").'" type="text/css" media="screen">
	
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.min.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.dimensions.pack.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.easing.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.fancybox.pack.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery-ui.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/json.js").'"></script>
'."\r\n";


$xt->assign("h_includes", $h_includes);

$b_includes .= '
<script type="text/javascript">
var timeout	= 200;
var closetimer	= 0;
var relation_stack = [];

$(document).ready(function(){
	$("a#sql_query").fancybox({
		fitToView: false,
				autoSize: false,
				width : 800,
				height : 550,
				overlayShow: true
	});
		$("a#preview").fancybox({
			fitToView: false,
				autoSize: false,
				width : 820,
				height : 660,
				overlayShow: true
		});
	';
	$b_includes .= alertDialog();
	$b_includes .= '
	
	$("input[id^=all]").click(function(){
		thisid=this.id.replace("all","");
		if($(this).prop("checked"))
			$("input[name^=val_"+thisid+"]").prop("checked",true);
		else
			$("input[name^=val_"+thisid+"]").prop("checked",false);
	});
	
	$("input[name^=val_]").click(function(){
		thisname=this.name;
		check_all=true;
		$("input[name="+thisname+"]").each(function(i){
			if(!$(this).prop("checked"))
				check_all=false;
		});
		$("#all"+thisname.replace("val_","")).prop("checked",check_all);
	});
	
	function collect_input_data() {
		var output = {};
		output.totals = {};
		$("tr[class*=tbody]", "#trt").each(function(i){
			var parts = $("td",this).eq(1).text().split(".");
			var sfield=parts[parts.length-1];
			var stable = $("td",this).eq(1).text();
			stable = stable.substring(0,stable.length-sfield.length-1);
			if($("td",this).eq(8).find("input").prop("checked"))
				vf="'.FORMAT_CURRENCY.'";
			else
				vf=$("td",this).eq(9).find("input").eq(0).val();
			output.totals[this.id] = {
				name : sfield, 
				table : stable,
				label : $("td",this).eq(2).find("input").val(),
				show : $("td",this).eq(3).find("input").prop("checked").toString(),
				min : $("td",this).eq(4).find("input").prop("checked").toString(),
				max : $("td",this).eq(5).find("input").prop("checked").toString(),
				sum : $("td",this).eq(6).find("input").prop("checked").toString(),
				avg : $("td",this).eq(7).find("input").prop("checked").toString(),
				curr : $("td",this).eq(8).find("input").prop("checked").toString(),
				search : "",
				view_format : vf,
				edit_format : $("td",this).eq(9).find("input").eq(1).val(),
				display_field : $("td",this).eq(9).find("input").eq(2).val(),
				linkfield : $("td",this).eq(9).find("input").eq(3).val(),
				show_thumbnail : $("td",this).eq(9).find("input").eq(4).val(),
				need_encode : $("td",this).eq(9).find("input").eq(5).val(),
				thumbnail : $("td",this).eq(9).find("input").eq(6).val(),
				listformatobj_imgwidth : $("td",this).eq(9).find("input").eq(7).val(),
				listformatobj_imgheight : $("td",this).eq(9).find("input").eq(8).val(),
				hlprefix : $("td",this).eq(8).find("input").eq(10).val(),
				listformatobj_filename : $("td",this).eq(9).find("input").eq(10).val(),
				lookupobj_lookuptype : $("td",this).eq(9).find("input").eq(11).val(),
				editformatobj_lookupobj_customdispaly : $("td",this).eq(9).find("input").eq(12).val(),
				editformatobj_lookupobj_table : $("td",this).eq(9).find("input").eq(13).val(),
				editformatobj_lookupobj_where : $("td",this).eq(9).find("input").eq(14).val()
			};
		});
		return JSON.stringify(output);
	}	
	
	$("#sqlbtn").click(function(){
		var output = collect_input_data();
		
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("save-state").'",
			data: {
				name: "totals",
				web: "webreports",
				str_xml: output,
				rnd: (new Date().getTime())
			},
			success: function(msg){
				if ( msg == "OK" ) {
					$("#sql_query").click();
				} else {
					$("#alert").html("<p>"+msg+"</p>").dialog("open");
				}
			}
		});
	});	
	
	$("#row4")
		.css("cursor", "default")
		.css("font-weight", "bold");

	$("td[id^=row]").mouseover(function(){
		for(var i=0; i<=11; i++) {
			if(i == this.id.replace("row", "")) {
				$("td[id=row" + i + "]").css("background-color","#92BEEB");
			}
			else {
				$("td[id=row" + i + "]").css("background-color","#F4F7FB");
			}
		}
	});
 

'."\r\n";

$b_includes .= JumpTo();

if (count(GetUserGroups()) < 2 || isset( $_SESSION['webreports']['settings']['status'] )
	&& $_SESSION['webreports']['settings']['status'] == "private" ) {
	$b_includes .= '$("td[id=row9]").hide();'."\r\n";
}
if (is_wr_project() || is_wr_custom()) {
	$b_includes .= '$("td[id=row1], td[id=row2]").hide();'."\r\n";
}
if($wr_is_standalone)
	$b_includes .= '$("td[id=row11]").hide();'."\n";

if ($_SESSION['webreports']['settings']['title'] == "") {
	$b_includes .= '
		for (var i=2; i<=9; i++){
			$("td[id=row" + i + "]").hide();
		};
	'."\r\n";
}

if($is_crosstable_report=="true")
{
	$b_includes.='$("td[name=show_fields]").hide();'."\r\n";
	$b_includes .= '$("#row5,#row6").hide();'."\r\n";	
}   

$rLinks = "var rlinks = {};\r\n";
for($ri = 0; $ri < 10; $ri++)
	$rLinks.= "rlinks['".$ri."'] = '".GetTableLink("webreport".$ri)."';\r\n";

$b_includes .= '
	$("#nextbtn, #backbtn, td[id^=row], #savebtn, #saveasbtn, #previewbtn").click(function(){
		var URL = "'.GetTableLink("webreport").'";
		if( this.id == "nextbtn" )'."\r\n";	
if($is_crosstable_report=="true")		
	$b_includes .= 'URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";'."\r\n";	
else
	$b_includes .= 'URL = "'.GetTableLink("webreport5").'";'."\r\n";	
$b_includes .= '	
		'.$rLinks.'
		if( this.id == "backbtn" )
			URL = "'.GetTableLink("webreport3").'";
		if( this.id == "saveasbtn" )
			URL = "'.GetTableLink("webreport8", "", "saveas=1").'";			
		if( this.id.substr(0,3)=="row" && this.id != "row4" )
			URL = rlinks[this.id.replace(\'row\',\'\')];
		if( this.id == "row10" )
			URL = "'.GetTableLink("webreport").'";
		if( this.id == "row11" )
			URL = "'.GetTableLink("menu").'";
		if ( this.id == "row7" )
			URL = "'.GetTableLink("dreport").'?edit=style&rname='.@$_SESSION['webreports']['settings']['name'].'";			
	
		var output = collect_input_data();
		var_save=0;
		if( this.id == "savebtn")
			var_save=1;
		if( this.id == "savebtn" || this.id == "previewbtn") {
			id=this.id;
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					save: var_save,
					web: "webreports",
					name: "totals",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						if(id=="savebtn")
						{
							$("#alert")
								.html("<p>'."Report Saved".'</p>")
								.dialog("option", "close", function(){
									window.location = "'.GetTableLink("webreport").'";
								})
								.dialog("open");
						}
						else
							$("#preview").click();
					} else {
						$("#alert").html("<p>"+msg+"</p>").dialog("open");
					}
				},
				error: function() {
					$("#alert").html("<p>'."Some problems appear during saving".'</p>").dialog("open");
				}
			});
		}
		
		thisid=this.id;
		if(this.id != "row4" && this.id !="savebtn" && this.id !="previewbtn") {
			$.ajax({
				type: "POST",
				url: "'.GetTableLink("save-state").'",
				data: {
					name: "totals",
					web: "webreports",
					str_xml: output,
					rnd: (new Date().getTime())
				},
				success: function(msg){
					if ( msg == "OK" ) {
						window.location = URL;
					} else {
						$("#alert").html("<p>"+msg+"</p>").dialog("open");
						if( thisid == "row10" || thisid == "row11" )
							window.location=URL;	
					}
				}
			});
		}
	});
});
</script>'."\r\n";

$cnt = 0;
if(is_wr_custom())
{
	$fields_type=array();
	$fields_type=WRGetAllCustomFieldType();
}

$disableLabel="";
if(is_wr_project())
	$disableLabel="disabled";

$pSet = new ProjectSettings($table_name);
foreach ($aTableFields as $arr) {
	$cnt++;
	$disabled = "";
	$class = "active";

	$blobDisabled = "";
	$blobClass = "active";
	$blobCheck = "checked";

	$adClass = "active";

	$field=$arr['field'];
	if (is_wr_db()) 
		$field=$arr['table'].".".$field;

	if ( !empty($aSelGroupFields) && $is_crosstable_report!="true") {
		if ( in_array( $field, $aSelGroupFields ) ) {
			$disabled = "disabled";
			$class = "inactive";
			$blobClass = "";
		}
	}
	
	if (!is_wr_custom()) 
		$field_type=WRGetFieldType( $arr['table'].".".$arr['field']);
	else
		$field_type=$fields_type[$arr['field']];
		
	if(is_wr_custom())
		$arr['table']=$table_name;
	
	if ( IsBinaryType( $field_type ) )  {
		$blobDisabled = "disabled";
		$class = "";
		$blobClass = "inactive";
		$adClass = "inactive";
		$blobCheck = "";
	}

	if ( $class == "active" && $blobClass == "active" ) {
		$blobClass = "";
	}

	$tgFields .='<tr id="'. GoodFieldName($arr['table'].".".$arr['field']) .'" class="tbody">
		<td width="10px" style="border:0px">
				<div style="height:7px">';
	if($disabled=="")
		$tgFields .='<img src="'.GetRootPathForResources("images/arr_up.jpg").'" onclick="total_td_move(this,\'up\');return false;" style="cursor:pointer">';
	$tgFields .='</div>
	<div style="height:2px">&nbsp;</div>
	<div style="height:7px">';
	$val_show="";
	$val_min="";
	$val_max="";
	$val_sum="";
	$val_avg="";
	$val_curr="";
	if($disabled=="")
	{
		$tgFields .='<img src="'.GetRootPathForResources("images/arr_down.jpg").'" onclick="total_td_move(this,\'down\');return false;" style="cursor:pointer">';
		$val_show="val_show";
		if($blobDisabled=="")
		{
			$val_min="val_min";
			$val_max="val_max";
			$val_sum="val_sum";
			$val_avg="val_avg";
			$val_curr="val_curr";
		}
	}
	$prefix="";
	if (is_wr_custom()) 
		$prefix=$_SESSION['webreports']["tables"][0]."_";
	if($_SESSION['webreports']['totals'][$prefix.$arr['field']]['curr']=="true")
		$vf=FORMAT_CURRENCY;
	else
		$vf=GetGenericViewFormat($arr['table'], $arr['field']);
	
	$tgFields .='</div>
		</td>
		<td >' . $field . '</td> 
		<td ><input type="text" value="' . runner_htmlspecialchars($pSet->label($arr['field'])) . '" name="" '.$disableLabel.'></td>
		<td align="center"  name=show_fields ' . $class . substr( $blobClass, 2 ) . '"><input ' . $disabled . ' checked type="checkbox" name="'.$val_show.'" ></td>
		<td align="center" ' . $class . $blobClass . '"><input ' . $blobDisabled . $disabled . ' type="checkbox" name="'.$val_min.'" ></td>
		<td align="center" ' . $class . $blobClass . '"><input ' . $blobDisabled . $disabled . ' type="checkbox" name="'.$val_max.'" ></td>
		<td align="center" ' . $class . $blobClass . '"><input ' . $blobDisabled . $disabled . ' type="checkbox" name="'.$val_sum.'" ></td>
		<td align="center" ' . $class . $blobClass . '"><input ' . $blobDisabled . $disabled . ' type="checkbox" name="'.$val_avg.'" ></td>
		<td align="center" ' . $class . $blobClass . '"><input ' . $blobDisabled . ' type="checkbox" name="'.$val_curr.'" ></td>
		<td style="display:none;">
			<input type="text" id="vf' . $cnt . '" name="vf' . $cnt . '" value="' . $vf . '" >
			<input type="text" id="ef' . $cnt . '" name="ef' . $cnt . '" value="' . GetGenericEditFormat( $arr['table'], $arr['field'] ) . '" >
			<input type="text" id="display_field_' . $cnt . '" name="display_field_' . $cnt . '" value="' . $pSet->getDisplayField( $arr['field'] ). '" >
			<input type="text" id="linkfield_' . $cnt . '" name="linkfield_' . $cnt . '" value="' . $pSet->getLinkField( $arr['field'] ) . '" >
			<input type="text" id="show_thumbnail_' . $cnt . '" name="show_thumbnail_' . $cnt . '" value="' . $pSet->showThumbnail( $arr['field'] ) . '" >
			<input type="text" id="need_encode_' . $cnt . '" name="need_encode_' . $cnt . '" value="' . $pSet->NeedEncode($arr['field']) . '" >
			<input type="text" id="thumbnail_' . $cnt . '" name="thumbnail_' . $cnt . '" value="' . $pSet->getStrThumbnail( $arr['field'] ) . '" >
			<input type="text" id="listformatobj_imgwidth_' . $cnt . '" name="listformatobj_imgwidth_' . $cnt . '" value="' . $pSet->getImageWidth( $arr['field'] ) . '" >
			<input type="text" id="listformatobj_imgheight_' . $cnt . '" name="listformatobj_imgheight_' . $cnt . '" value="' . $pSet->getImageHeight( $arr['field'] ) . '" >
			<input type="text" id="hlprefix_' . $cnt . '" name="hlprefix_' . $cnt . '" value="' . $pSet->getLinkPrefix($arr['field']) . '" >
			<input type="text" id="listformatobj_filename_' . $cnt . '" name="listformatobj_filename_' . $cnt . '" value="' . $pSet->getFilenameField( $arr['field']) . '" >
			<input type="text" id="lookupobj_lookuptype_' . $cnt . '" name="lookupobj_lookuptype_' . $cnt . '" value="' . $pSet->getLookupType( $arr['field'] ) . '" >
			<input type="text" id="editformatobj_lookupobj_customdispaly_' . $cnt . '" name="editformatobj_lookupobj_customdispaly_' . $cnt . '" value="' . $pSet->getDisplayField( $arr['field'] ) . '" >
			<input type="text" id="editformatobj_lookupobj_table_' . $cnt . '" name="editformatobj_lookupobj_table_' . $cnt . '" value="' . $pSet->getLookupTable( $arr['field'] ) . '" >
			<input type="text" id="editformatobj_lookupobj_where_' . $cnt . '" name="editformatobj_lookupobj_where_' . $cnt . '" value="' . prepareLookupWhere( $arr['field'], $pSet ) . '" >
		</td>
	</tr>';
}

$arr = $_SESSION['webreports']['totals'];

if ( !empty( $arr ) ) {

	$b_includes .= '<script type="text/javascript">
		$(document).ready(function(){'."\n";

	foreach ($arr as $id => $totals) {
		if(!is_wr_custom()) 
			$b_includes .= "$('tr[id=".$id."]', '#trt').find('td').eq(1).text('" . jsreplace($totals["table"].".".$totals["name"]) . "');"."\n";
		$b_includes .= "$('tr[id=".$id."]', '#trt').find('td').eq(2).find('input').val('" . jsreplace($totals["label"]) . "');"."\n";
		$total_name=$totals["name"];
		if(is_wr_db()) 
			$total_name=$totals["table"].".".$totals["name"];
		if ( !in_array($total_name, $aSelGroupFields) || $is_crosstable_report=="true") {
			$b_includes .= '$("tr[id='.$id.']", "#trt").find("td").eq(3).find("input").attr("checked",' . ($totals["show"] == "true" ? "true" : "false") . ');'."\n";
			$b_includes .= '$("tr[id='.$id.']", "#trt").find("td").eq(4).find("input").attr("checked",' . ($totals["min"] == "true" ? "true" : "false") . ');'."\n";
			$b_includes .= '$("tr[id='.$id.']", "#trt").find("td").eq(5).find("input").attr("checked",' . ($totals["max"] == "true" ? "true" : "false") . ');'."\n";
			$b_includes .= '$("tr[id='.$id.']", "#trt").find("td").eq(6).find("input").attr("checked",' . ($totals["sum"] == "true" ? "true" : "false") . ');'."\n";
			$b_includes .= '$("tr[id='.$id.']", "#trt").find("td").eq(7).find("input").attr("checked",' . ($totals["avg"] == "true" ? "true" : "false") . ');'."\n";
			$b_includes .= '$("tr[id='.$id.']", "#trt").find("td").eq(8).find("input").attr("checked",' . ($totals["curr"] == "true" ? "true" : "false") . ');'."\n";
		}
	}
	$b_includes .= '
	arr=new Array;
	arr[0]="show"
	arr[1]="min"
	arr[2]="max"
	arr[3]="sum"
	arr[4]="avg"
	arr[5]="curr"
	for(i=0;i<6;i++)
	{
		thisname=arr[i];
		check_all=true;
		$("input[name=val_"+thisname+"]").each(function(j){
			if(!$(this).prop("checked"))
				check_all=false;
		});
		$("#all"+thisname).prop("checked", check_all);
	}';
	$b_includes .= '});';

$b_includes .= MoveTdTotal();

$b_includes .= '</script>';
}
$xt->assign("report_name_preview",$_SESSION['webreports']['settings']['name']);
$xt->assign("b_includes", $b_includes);
$xt->assign("tgFields", $tgFields);
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$templatefile = GetTemplateName("", "webreport4");
$xt->display($templatefile);
?>
