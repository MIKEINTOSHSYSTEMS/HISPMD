<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_main  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeShowView"]=true;

		$this->events["BeforeShowList"]=true;




		$this->events["ProcessValuesView"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowView(&$xt, &$templatefile, &$values, $pageObject)
{

		$xt->assign("pagetitle",$values["Title"]);

if(Security::getUserGroup()!=="admin")
	$pageObject->hideItem("integrated_edit_field1");

$stylename = "main";
if (Security::isLoggedIn())
	$stylename.=" LoggedIn";
$xt->assign("stylename",$stylename);


DB::Update("kbarticles",array("Views" => $values["Views"]+1),array("ArticleID" => $values["ArticleID"]));
$comments_rs = DB::Select("kbcomments",array("moderated" => 1,"ArticleID" => $values["ArticleID"]));
/*if($comments_rs->count() == 0)
	$xt->assign("details_kbcomments",false);*/


$xt->assign( "breadcrumbs", true );
$xt->assign( "breadcrumb", true );
$xt->assign("crumb_home_link",GetTableLink("main","list"));

$breadcrumb = array();
$breadcrumb[0] = array("crumb_attrs" => "href='".GetTableLink("main","list")."?page=list&f=(Category~equals~".rawurlencode($values["Category"]).")'" ,"crumb_title_link"=>true, "crumb_title"=> $values["Category"]);
$breadcrumb[1] = array("crumb_attrs" => "", "crumb_title_span" => true,"crumb_title" => $values["Title"]);
$xt->assign_loopsection("crumb", $breadcrumb);
;		
} // function BeforeShowView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

				$stylename = "main ".$pageObject->pageName;
if ( Security::isLoggedIn() )
	$stylename.=" LoggedIn";
$xt->assign( "stylename",$stylename );

unset($_SESSION["category"]);
if( $pageObject->pageName === "category" ){
	$find = array();
	//preg_match_all("/\(Category~equals~(.+)\)/U",postvalue("q"),$find);
	//preg_match_all("/\(Category~contains~($values[CategoryID])\)/U",postvalue("f"),$find);
	//preg_match_all("/\(Category~contains~(".rawurlencode($values["CategoryID"]).")\)/U",postvalue("f"),$find);
	preg_match_all("/\(Category~contains~(.+)\)/U",postvalue("f"),$find);
	if( count( $find[1] ) > 0 && count( $find[1][0] ) ){
		$breadcrumb = array();
		$breadcrumb[] = array("crumb_attrs" => "", "crumb_title_span" => true,"crumb_title" => $find[1][0]);
		$xt->assign_loopsection("crumb", $breadcrumb);
		$_SESSION["category"] = $find[1][0];
	}

}





//$stylename = "main ".$pageObject->pageName;
//if ( Security::isLoggedIn() )
//	$stylename.=" LoggedIn";
//$xt->assign( "stylename",$stylename );

//unset($_SESSION["category"]);
//if( $pageObject->pageName === "category" ){
//	$find = array();
//	preg_match_all("/\(Category~equals~(.+)\)/U",postvalue("f"),$find);
//	if( count( $find[1] ) > 0 && count( $find[1][0] ) ){
//		$breadcrumb = array();
//		$breadcrumb[] = array("crumb_attrs" => "", "crumb_title_span" => true,"crumb_title" => $find[1][0]);
//		$xt->assign_loopsection("crumb", $breadcrumb);
//		$_SESSION["category"] = $find[1][0];
//	}

//}
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesView(&$values, $pageObject)
{

		//like dislike
if(empty($values["likecount"]))
	$values["likecount"] = 0;
if(empty($values["dislikecount"]))
	$values["dislikecount"] = 0;
	
if(postvalue("incrimentColumn")!=false){
	$incCol = postvalue("incrimentColumn");
	$ucount = $values[$incCol]+1;
	DB::Update("kbarticles",array($incCol => $ucount),array("ArticleID" => $values["ArticleID"]));
	echo $ucount;
	exit();
}

;		
} // function ProcessValuesView

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
