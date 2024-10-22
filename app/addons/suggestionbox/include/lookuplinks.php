<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["sgb_status"] ) ) {
			$lookupTableLinks["sgb_status"] = array();
		}
		if( !isset( $lookupTableLinks["sgb_status"]["sgb_suggestions.status"] )) {
			$lookupTableLinks["sgb_status"]["sgb_suggestions.status"] = array();
		}
		$lookupTableLinks["sgb_status"]["sgb_suggestions.status"]["edit"] = array("table" => "sgb_suggestions", "field" => "status", "page" => "edit");
		if( !isset( $lookupTableLinks["sgb_categories"] ) ) {
			$lookupTableLinks["sgb_categories"] = array();
		}
		if( !isset( $lookupTableLinks["sgb_categories"]["sgb_suggestions.categoryid"] )) {
			$lookupTableLinks["sgb_categories"]["sgb_suggestions.categoryid"] = array();
		}
		$lookupTableLinks["sgb_categories"]["sgb_suggestions.categoryid"]["edit"] = array("table" => "sgb_suggestions", "field" => "categoryid", "page" => "edit");
		if( !isset( $lookupTableLinks["sgb_status"] ) ) {
			$lookupTableLinks["sgb_status"] = array();
		}
		if( !isset( $lookupTableLinks["sgb_status"]["sgb_admin_suggestions.status"] )) {
			$lookupTableLinks["sgb_status"]["sgb_admin_suggestions.status"] = array();
		}
		$lookupTableLinks["sgb_status"]["sgb_admin_suggestions.status"]["edit"] = array("table" => "sgb_admin_suggestions", "field" => "status", "page" => "edit");
		if( !isset( $lookupTableLinks["sgb_categories"] ) ) {
			$lookupTableLinks["sgb_categories"] = array();
		}
		if( !isset( $lookupTableLinks["sgb_categories"]["sgb_admin_suggestions.categoryid"] )) {
			$lookupTableLinks["sgb_categories"]["sgb_admin_suggestions.categoryid"] = array();
		}
		$lookupTableLinks["sgb_categories"]["sgb_admin_suggestions.categoryid"]["edit"] = array("table" => "sgb_admin_suggestions", "field" => "categoryid", "page" => "edit");
		if( !isset( $lookupTableLinks["sgb_suggestions"] ) ) {
			$lookupTableLinks["sgb_suggestions"] = array();
		}
		if( !isset( $lookupTableLinks["sgb_suggestions"]["sgb_admin_comments.s_id"] )) {
			$lookupTableLinks["sgb_suggestions"]["sgb_admin_comments.s_id"] = array();
		}
		$lookupTableLinks["sgb_suggestions"]["sgb_admin_comments.s_id"]["edit"] = array("table" => "sgb_admin_comments", "field" => "s_id", "page" => "edit");
		if( !isset( $lookupTableLinks["sgb_suggestions"] ) ) {
			$lookupTableLinks["sgb_suggestions"] = array();
		}
		if( !isset( $lookupTableLinks["sgb_suggestions"]["sgb_merge.search_s"] )) {
			$lookupTableLinks["sgb_suggestions"]["sgb_merge.search_s"] = array();
		}
		$lookupTableLinks["sgb_suggestions"]["sgb_merge.search_s"]["edit"] = array("table" => "sgb_merge", "field" => "search_s", "page" => "edit");
		if( !isset( $lookupTableLinks["sgb_status"] ) ) {
			$lookupTableLinks["sgb_status"] = array();
		}
		if( !isset( $lookupTableLinks["sgb_status"]["sgb_split.status"] )) {
			$lookupTableLinks["sgb_status"]["sgb_split.status"] = array();
		}
		$lookupTableLinks["sgb_status"]["sgb_split.status"]["edit"] = array("table" => "sgb_split", "field" => "status", "page" => "edit");
		if( !isset( $lookupTableLinks["sgb_status"] ) ) {
			$lookupTableLinks["sgb_status"] = array();
		}
		if( !isset( $lookupTableLinks["sgb_status"]["sgb_split.newstatus"] )) {
			$lookupTableLinks["sgb_status"]["sgb_split.newstatus"] = array();
		}
		$lookupTableLinks["sgb_status"]["sgb_split.newstatus"]["edit"] = array("table" => "sgb_split", "field" => "newstatus", "page" => "edit");
}

?>