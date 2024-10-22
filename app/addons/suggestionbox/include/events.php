<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events


		$this->events["AfterSuccessfulLogin"]=true;

		$this->events["AfterLogout"]=true;

		$this->events["BeforeShowLogin"]=true;

		$this->events["BeforeShowChangePwd"]=true;

		$this->events["BeforeShowMenu"]=true;

		$this->events["BeforeShowUserinfo"]=true;


//	onscreen events
		$this->events["sgb_suggestions_snippet"] = true;
		$this->events["sgb_category_select"] = true;
		$this->events["sgb_status_select"] = true;
		$this->events["sgb_promo"] = true;
		$this->events["sgb_page_caption"] = true;
		$this->events["sgb_comments_countheader"] = true;
		$this->events["sgb_admin_notification"] = true;
		$this->events["sgb_moderate_filter_status"] = true;
		$this->events["sgb_moderate_mark_as"] = true;
		$this->events["sgb_admin_mod_navigation"] = true;
		$this->events["sgb_admin_comments_filter"] = true;
		$this->events["sgb_admin_comments_mark"] = true;
		$this->events["sgb_category_change"] = true;
		$this->events["sgb_status_change"] = true;
		$this->events["sgb_suggestions_snippet1"] = true;
		$this->events["sgb_comments_moderate_panel"] = true;
		$this->events["sgb_suggestions_showdeleted"] = true;
		$this->events["sgb_comments_edit_back"] = true;
		$this->events["sgb_user_edit"] = true;
		$this->events["sgb_suggestions_already_posted"] = true;
		$this->events["sgb_contributor_header"] = true;
		$this->events["sgb_login_header"] = true;
		$this->events["sgb_logo"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["uid"] = $data[$_SESSION["lkey"]];
$_SESSION["udata"] = $data;
HeaderRedirect(getHomePage());
exit();

;
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
				// After Logout
function AfterLogout($username)
{

		unset($_SESSION["udata"]);
HeaderRedirect("sgb_suggestions","list");
;
} // function AfterLogout

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowLogin(&$xt, &$templatefile, $pageObject)
{

		$pageObject->AddCSSFile("styles/sgb.css");

;
} // function BeforeShowLogin

		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowChangePwd(&$xt, &$templatefile, $pageObject)
{

		$pageObject->AddCSSFile("styles/sgb.css");
;
} // function BeforeShowChangePwd

		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowMenu(&$xt, &$templatefile, $pageObject)
{

		$xt->assign("stylename","sgb");
$pageObject->AddCSSFile("styles/sgb.css");
;
} // function BeforeShowMenu

		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowUserinfo(&$xt, &$templatefile, $values, $pageObject)
{

		$pageObject->AddCSSFile("styles/sgb.css");
;
} // function BeforeShowUserinfo


//	onscreen events
	function event_sgb_suggestions_snippet(&$params)
	{
	/*sgb_suggestions_list*/
echo "<a class='sortbtn top' href='".GetTableLink("sgb_suggestions","list")."?orderby=dvote'><span class='fa fa-star-o'></span>".GetCustomLabel("top")."</a><a class='sortbtn new' href='".GetTableLink("sgb_suggestions","list")."?orderby=dcreated_date'><span class='fa fa-clock-o'></span>".GetCustomLabel("new")."</a>";

	;
}
	function event_sgb_category_select(&$params)
	{
	/*sgb_suggestions_list*/
$status = "";
if(!is_null($_SESSION["status"])){
	if($_SESSION["status"]==="notdone")
		$status = "&status=notdone";
	else
		$status = "&f=(status~equals~".rawurlencode($_SESSION["status"]).")";
} 
$first_select_label = "All categories";
if(postvalue("category")!=false){
	$crs = DB::Select("sgb_categories",array("url" => postvalue("category") ));
	$category_post = $crs->fetchAssoc();
	$first_select_label = $category_post["name"];
}
$category_rs = DB::Select("sgb_categories");
echo "<div class='fisrt_select'>".$first_select_label."<span class='fa fa-caret-down'></span></div>";
echo "<div class='select_list'>";
echo "<span><a href='".GetTableLink("sgb_suggestions","list")."?".$status."'>All categories</a></span>";
echo "<span class='separator'></span>";
while($category = $category_rs->fetchAssoc()){
	echo "<span><a href='".GetTableLink("sgb_suggestions","list")."?category=".$category["url"].$status."'>".$category["name"]."</a></span>";
}
echo "</div>";
	;
}
	function event_sgb_status_select(&$params)
	{
	$category = "";
if(postvalue("category")!=false) 
	$category = "&category=".rawurlencode(postvalue("category"));
$first_select_label = "All";
if(!is_null($_SESSION["status"])){
	if($_SESSION["status"]==="notdone")
		$first_select_label = GetCustomLabel("_all_except_done");
	else{
		$srs = DB::Select("sgb_status",array("statusname" => $_SESSION["status"] ));
		$status_post = $srs->fetchAssoc();
		$first_select_label = $status_post["status_label"];
	}

}
/*sgb_suggestions_list*/
$status_rs = DB::Select("sgb_status",array("visibility" => "public"));
$all = DBLookup("select count(*) from ".AddTableWrappers("sgb_suggestions"));
$allExeptDone = DBLookup("select count(*) from ".AddTableWrappers("sgb_suggestions")." where ".AddTableWrappers("status")."<>'Done'");
echo "<div class='fisrt_select'>".$first_select_label."<span class='scount'>(".$all.")</span><span class='fa fa-caret-down'></span></div>";
echo "<div class='select_list'>";
echo "<span><a href='".GetTableLink("sgb_suggestions","list")."?".$category."'>All<span class='scount'>(".$all.")</span></a></span>";
echo "<span><a href='".GetTableLink("sgb_suggestions","list")."?status=notdone".$category."'>".GetCustomLabel("_all_except_done")."(".$allExeptDone.")</a></span>";
echo "<span class='separator'></span>";
$count = 0;
while($status = $status_rs->fetchAssoc()){
	$count = DBLookup("select count(*) from ".AddTableWrappers("sgb_suggestions")." where ".AddTableWrappers("status")."='".$status["statusname"]."'");
	echo "<span><a href='".GetTableLink("sgb_suggestions","list")."?f=(status~equals~".$status["statusname"].")".$category."'>".$status["status_label"]."<span class='scount'>(".$count.")</span></a></span>";
}
echo "</div>";
	;
}
	function event_sgb_promo(&$params)
	{
	/*sgb_suggestions_list*/
echo "Suggest an improvement for '".GetCustomLabel("project_name")."'";

	;
}
	function event_sgb_page_caption(&$params)
	{
	// Put your code here.
echo $_SESSION["smaster"]["title"];
	;
}
	function event_sgb_comments_countheader(&$params)
	{
	
echo "<span class='fa fa-comment-o'>".GetCustomLabel("comments").": ".$_SESSION["comment_count"]."</span>";
	;
}
	function event_sgb_admin_notification(&$params)
	{
	$moderated_sugg = DBLookup("select count(*) from ".AddTableWrappers("sgb_suggestions")." where ".AddFieldWrappers("status")."='awaiting_approval'");
$moderated_com = DBLookup("select count(*) from ".AddTableWrappers("sgb_comments")." where ".AddFieldWrappers("status")."='awaiting_moderation'");
$notify = intval($moderated_sugg) + intval($moderated_com);
echo "<a class='fa fa-envelope-o' href='".GetTableLink("sgb_admin_suggestions","list")."'><div class='amount' title='Items awaiting moderation'>",$notify."</div></a>";
	;
}
	function event_sgb_moderate_filter_status(&$params)
	{
	$selected_status = null;
if(postvalue("f")!=false){
	$find = array();
	preg_match_all("/\(status~equals~(.+)\)/U",postvalue("f"),$find);
	if(isset($find[1]) && isset($find[1][0])) 
		$selected_status = $find[1][0];
}
$selected_aw = "";
if(urldecode($selected_status) === "awaiting_approval")
			$selected_aw = "selected";

/*sgb_admin_suggestions*/
$status_rs = DB::Select("sgb_status",array("visibility" => "public"));
$all = DBLookup("select count(*) from ".AddTableWrappers("sgb_suggestions"));
echo "<select class='form-control'>";
echo "<option value='".GetTableLink("sgb_admin_suggestions","list")."'>All (".$all.")</option>";
echo "<option disabled=''>──────────</option>";
$aw_label = DBLookup("select ".AddFieldWrappers("status_label")." from ".AddTableWrappers("sgb_status")." where ".AddFieldWrappers("statusname")."='awaiting_approval'");

$av = DBLookup("select count(*) from ".AddTableWrappers("sgb_suggestions")." where ".AddFieldWrappers("status")."='awaiting_approval'");
echo "<option value='".GetTableLink("sgb_admin_suggestions","list")."?f=(status~equals~awaiting_approval)' ".$selected_aw.">".$aw_label." (".$av.")</option>";
echo "<option disabled=''>──────────</option>";
while($status = $status_rs->fetchAssoc()){
		$selected = "";
		if(urldecode($selected_status) === $status["statusname"])
			$selected = "selected";
		$count = DBLookup("select count(*) from ".AddTableWrappers("sgb_suggestions")." where ".AddTableWrappers("status")."='".$status["statusname"]."'");
		echo "<option value='".GetTableLink("sgb_admin_suggestions","list")."?f=(status~equals~".rawurlencode($status["statusname"]).")' ".$selected.">".$status["status_label"]." (".$count.")</option>";
}
echo "<option disabled=''>──────────</option>";
$deleted = DBLookup("select count(*) from ".AddTableWrappers("sgb_suggestions")." where ".AddFieldWrappers("status")."='deleted'");
$deleted_label = DBLookup("select ".AddFieldWrappers("status_label")." from ".AddTableWrappers("sgb_status")." where ".AddFieldWrappers("statusname")."='deleted'");

$deleted_aw = "";
if(urldecode($selected_status) === "deleted")
			$deleted_aw = "selected";

echo "<option value='".GetTableLink("sgb_admin_suggestions","list")."?f=(status~equals~deleted)' ".$deleted_aw.">".$deleted_label." (".$deleted.")</option>";
echo "</select>";

	;
}
	function event_sgb_moderate_mark_as(&$params)
	{
	/*sgb_admin_suggestions*/
$status_rs = DB::Select("sgb_status",array("visibility" => "public"));
echo "<select class='form-control' disabled=disabled>";
echo "<option>Mark As</option>";
echo "<option disabled=''>──────────</option>";
$aw_label = DBLookup("select ".AddFieldWrappers("status_label")." from ".AddTableWrappers("sgb_status")." where ".AddFieldWrappers("statusname")."='awaiting_approval'");

echo "<option value='awaiting_approval'>".$aw_label."</option>";
echo "<option disabled=''>──────────</option>";
while($status = $status_rs->fetchAssoc()){
	echo "<option value='".$status["statusname"]."'>".$status["status_label"]."</option>";
}
echo "<option disabled=''>──────────</option>";
$deleted_label = DBLookup("select ".AddFieldWrappers("status_label")." from ".AddTableWrappers("sgb_status")." where ".AddFieldWrappers("statusname")."='deleted'");

echo "<option value='deleted'>".$deleted_label."</option>";
echo "</select>";
	;
}
	function event_sgb_admin_mod_navigation(&$params)
	{
	$suggestion_class = "";
$comments_class = "";
if($_SESSION["mod_page"] === "sgb_admin_suggestions"){
	$suggestion_class = "active";
}
else{
	$comments_class = "active";
}
echo "<nav class='page-nav'><ul>";
echo "<li class='".$suggestion_class."'><a href='".GetTableLink("sgb_admin_suggestions","list")."'>Suggestions</a></li>";        
echo "<li class='".$comments_class."'><a href='".GetTableLink("sgb_admin_comments","list")."'>Comments</a></li></ul></nav>";            
            
        
    
	;
}
	function event_sgb_admin_comments_filter(&$params)
	{
	/*sgb_admin_comments*/

$all = DBLookup("select count(*) from ".AddTableWrappers("sgb_comments"));
echo "<select class='form-control'>";
echo "<option value='".GetTableLink("sgb_admin_comments","list")."'>All (".$all.")</option>";
echo "<option disabled=''>──────────</option>";
$am = DBLookup("select count(*) from ".AddTableWrappers("sgb_comments")." where ".AddFieldWrappers("status")."='awaiting_moderation'");
echo "<option data-status='awaiting_moderation' value='".GetTableLink("sgb_admin_comments","list")."?f=(status~equals~awaiting_moderation)'>".GetCustomLabel("awaiting_moderation")." (".$am.")</option>";
$ap = DBLookup("select count(*) from ".AddTableWrappers("sgb_comments")." where ".AddFieldWrappers("status")."='approved'");
echo "<option data-status='approved' value='".GetTableLink("sgb_admin_comments","list")."?f=(status~equals~approved)'>".GetCustomLabel("approved")." (".$ap.")</option>";
$deleted = DBLookup("select count(*) from ".AddTableWrappers("sgb_comments")." where ".AddFieldWrappers("status")."='deleted'");
echo "<option data-status='deleted' value='".GetTableLink("sgb_admin_comments","list")."?f=(status~equals~deleted)'>".GetCustomLabel("deleted")." (".$deleted.")</option>";
$spam = DBLookup("select count(*) from ".AddTableWrappers("sgb_comments")." where ".AddFieldWrappers("status")."='spam'");
echo "<option data-status='spam' value='".GetTableLink("sgb_admin_comments","list")."?f=(status~equals~spam)'>".GetCustomLabel("spam")." (".$spam.")</option>";
echo "</select>";
	;
}
	function event_sgb_admin_comments_mark(&$params)
	{
	/*sgb_admin_suggestions*/
echo "<select class='form-control' disabled=disabled>";
echo "<option>Mark As</option>";
echo "<option disabled=''>──────────</option>";
echo "<option value='awaiting_moderation'>".GetCustomLabel("awaiting_moderation")."</option>";
echo "<option value='approved'>".GetCustomLabel("approved")."</option>";
echo "<option value='deleted'>".GetCustomLabel("deleted")."</option>";
echo "<option value='spam'>".GetCustomLabel("spam")."</option>";
echo "</select>";
	;
}
	function event_sgb_category_change(&$params)
	{
	$category_rs = DB::Select("sgb_categories");
echo "<div class='fisrt_select'>".GetCustomLabel("categories")."<span class='fa fa-caret-down'></span></div>";
echo "<div class='select_list' data-action='mark_category'>";
while($category = $category_rs->fetchAssoc()){
	$ccategory = "";
	if($category["id"] === $_SESSION["smaster"]["categoryid"])
		$ccategory  = "active";	
	echo "<span class='".$ccategory."' data-value='".$category["id"]."'>".$category["name"]."</span>";
}
echo "<span class='separator'></span>";
echo "<span>".GetCustomLabel("create_new_category")."</span>";
echo "<span>".GetCustomLabel("manage_category")."<i class='fa fa-external-link'></i></span>";
echo "</div>";
	;
}
	function event_sgb_status_change(&$params)
	{
	//var_dump($_SESSION["smaster"]);
$aw_label = DBLookup("select ".AddFieldWrappers("status_label")." from ".AddTableWrappers("sgb_status")." where ".AddFieldWrappers("statusname")."='awaiting_approval'");
$deleted_label = DBLookup("select ".AddFieldWrappers("status_label")." from ".AddTableWrappers("sgb_status")." where ".AddFieldWrappers("statusname")."='deleted'");
$status_rs = DB::Select("sgb_status",array("visibility" => "public"));
$aw_active="";
if($_SESSION["smaster"]["status"]==="awaiting_approval") $aw_active="active";
echo "<div class='fisrt_select'>".GetCustomLabel("change_status")."<span class='fa fa-caret-down'></span></div>";
echo "<div class='select_list' data-action='mark_status'>";
echo "<span class='".$aw_active."' data-value='awaiting_approval'>".$aw_label."</span>";
echo "<span class='separator'></span>";
while($status = $status_rs->fetchAssoc()){
	$cstatus="";
	if($status["statusname"] === $_SESSION["smaster"]["status"])
		$cstatus = "active";
	echo "<span class='".$cstatus."' data-value='".$status["statusname"]."'>".$status["status_label"]."</span>";
}
echo "<span class='separator'></span>";
$del_active="";
if($_SESSION["smaster"]["status"]==="deleted") $del_active="active";
echo "<span class='".$del_active."' data-value='deleted'>".$deleted_label."</span>";
echo "</div>";
	;
}
	function event_sgb_suggestions_snippet1(&$params)
	{
	// Put your code here.
echo "<div class='alert alert-success'>This suggestion has been marked as Under consideration.</div>";
//echo $_SESSION["change_text"];
	;
}
	function event_sgb_comments_moderate_panel(&$params)
	{
	echo "<div class='comment_moderate_panel'>";
echo "<a class='btn btn-default editaction'>Edit</a>";

echo "<div class='status_buttons'>";
echo "<span class='btn btn-default' data-status='awaiting_moderation'>Awaiting approval</span>";
echo "<span class='btn btn-default' data-status='approved'><i class='fa fa-check'></i>Approved</span>";
echo "<span class='btn btn-default' data-status='deleted'><i class='fa fa-trash'></i>Deleted</span>";
echo "<span class='btn btn-default' data-status='spam'><i class='fa fa-exclamation'></i>Spam</span>";
echo "</div>";

echo "</div>";
	;
}
	function event_sgb_suggestions_showdeleted(&$params)
	{
	// Put your code here.
$checked = "checked";
if(!intval($_SESSION["showDeleted"]) || !isset($_SESSION["showDeleted"]))
	$checked = "";
echo '<input id="showDeleted" class="form-control styledCheckbox showDeleted" type="checkbox" '.$checked.'>';
echo '<label for="showDeleted">Show Deleted</label>';
	;
}
	function event_sgb_comments_edit_back(&$params)
	{
	// Put your code here.
//echo "<a href='".GetTableLink()."'>Back</a>";
	;
}
	function event_sgb_user_edit(&$params)
	{
	// Put your code here.
echo "Your message";
	;
}
	function event_sgb_suggestions_already_posted(&$params)
	{
	echo "<div class='already_posted'>";
echo "<div class='aptitle'>".GetCustomLabel("already_posted")."</div>";
echo "<div class='rcount'>".GetCustomLabel("results").":<span>7</span></div>";

echo "<div class='slist'>";
echo "</div>";
echo "<div class='sar'><a href=''>".GetCustomlabel("see_all_results")."<i class='fa fa-arrow-right'></i></a></div>";

echo "</div>";
	;
}
	function event_sgb_contributor_header(&$params)
	{
	echo "<a href='' class='fa fa-arrow-left'></i>Board</a>";
echo "<span class='ch'>Contributor</span>";
	;
}
	function event_sgb_login_header(&$params)
	{
	echo "<div class='alert alert-info loginheader'>Use <b>admin@test.com/admin</b> to login
</div>";
	;
}
	function event_sgb_logo(&$params)
	{
	// Put your code here.
echo Labels::getProjectLogo();
	;
}




}
?>