<?php
require_once(getabspath("classes/cipherer.php"));



$tdatacontributor = array();
$tdatacontributor[".ShortName"] = "contributor";

$tdatacontributor[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatacontributor[".originalPagesByType"] = $tdatacontributor[".pagesByType"];
$tdatacontributor[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatacontributor[".originalPages"] = $tdatacontributor[".pages"];
$tdatacontributor[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatacontributor[".originalDefaultPages"] = $tdatacontributor[".defaultPages"];


//	field labels
$fieldLabelscontributor = array();
$pageTitlescontributor = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscontributor["English"] = array();
	$fieldLabelscontributor["English"]["sgb_users_suggestions_id"] = "Id";
	$fieldLabelscontributor["English"]["sgb_users_suggestions_title"] = "Title";
	$fieldLabelscontributor["English"]["sgb_users_suggestions_name"] = "Name";
	$fieldLabelscontributor["English"]["sgb_users_suggestions_email"] = "Email";
	$fieldLabelscontributor["English"]["sgb_users_suggestions_ip"] = "Ip";
}

/*
//	search fields
$tdatacontributor[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"sgb_users_suggestions", "field"=>"id" );
$tdatacontributor[".searchFields"]["sgb_users_suggestions_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sgb_users_suggestions", "field"=>"title" );
$tdatacontributor[".searchFields"]["sgb_users_suggestions_title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sgb_users_suggestions", "field"=>"name" );
$tdatacontributor[".searchFields"]["sgb_users_suggestions_name"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sgb_users_suggestions", "field"=>"email" );
$tdatacontributor[".searchFields"]["sgb_users_suggestions_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sgb_users_suggestions", "field"=>"ip" );
$tdatacontributor[".searchFields"]["sgb_users_suggestions_ip"] = $dashField;

// all search fields
$tdatacontributor[".allSearchFields"] = array();
$tdatacontributor[".allSearchFields"][] = "sgb_users_suggestions_id";
$tdatacontributor[".allSearchFields"][] = "sgb_users_suggestions_title";
$tdatacontributor[".allSearchFields"][] = "sgb_users_suggestions_name";
$tdatacontributor[".allSearchFields"][] = "sgb_users_suggestions_email";
$tdatacontributor[".allSearchFields"][] = "sgb_users_suggestions_ip";

// good like search fields
$tdatacontributor[".googleLikeFields"] = array();
$tdatacontributor[".googleLikeFields"][] = "sgb_users_suggestions_id";
$tdatacontributor[".googleLikeFields"][] = "sgb_users_suggestions_title";
$tdatacontributor[".googleLikeFields"][] = "sgb_users_suggestions_name";
$tdatacontributor[".googleLikeFields"][] = "sgb_users_suggestions_email";
$tdatacontributor[".googleLikeFields"][] = "sgb_users_suggestions_ip";
*/

/*
$tdatacontributor[".dashElements"] = array();

	$dbelement = array( "elementName" => "sgb_users_suggestions_list", "table" => "sgb_users_suggestions",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatacontributor[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "sgb_users_comments_list", "table" => "sgb_users_comments",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatacontributor[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "contributor_snippet", "table" => "contributor",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "contributor_snippet";


	$tdatacontributor[".dashElements"][] = $dbelement;
*/
$tdatacontributor[".shortTableName"] = "contributor";
$tdatacontributor[".entityType"] = 4;





include_once(getabspath("include/contributor_events.php"));
$tdatacontributor[".hasEvents"] = true;


$tdatacontributor[".tableType"] = "dashboard";


			
$tdatacontributor[".addPageEvents"] = false;

$tdatacontributor[".isUseAjaxSuggest"] = true;

$tables_data["contributor"]=&$tdatacontributor;
$field_labels["contributor"] = &$fieldLabelscontributor;
$page_titles["contributor"] = &$pageTitlescontributor;

?>