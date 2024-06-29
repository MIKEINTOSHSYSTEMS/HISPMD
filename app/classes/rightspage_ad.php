<?php
/**
 * Class for display admin_rights_list with Active directory data 
 */
class RightsPage_AD extends RightsPage
{	
	/**
	 * Contructor
	 *
	 * @param array $params
	 * @return RightsPage_AD
	 */
	function __construct(&$params)
	{
		parent::__construct($params);	
	}
	
	function fillGroupsArr()
	{
		global $cman;
		$grConnection = $cman->getForUserGroups(); 		
		
		//	select groups list
		$this->groups[-2] = "<".##message AA_GROUP_DEFAULT##.">";
		$this->groups[-3] = "<".##message AA_GROUP_GUEST##.">";
		
		$sql = "select ". $grConnection->addFieldWrappers( "##@BUILDER.groups_groupid s##" ) .", "
			. $grConnection->addFieldWrappers( "##@BUILDER.groups_label s##" )
			." from ". $grConnection->addTableWrappers( "##@BUILDER.strUGGroups s##" ) 
			." order by ". $grConnection->addFieldWrappers( "##@BUILDER.groups_label s##" );
		
		$qResult = $grConnection->query( $sql );
		while( $tdata = $qResult->fetchNumeric() )
		{
			$this->groups[ $tdata[0] ] = $tdata[1];
		}
	}
	
	function commonAssign() 
	{
		parent::commonAssign();
		
		$this->xt->assign("menu_block",false);
		// hide Rename button
		$this->hideItem("rights_rename_group");
	}
}
?>