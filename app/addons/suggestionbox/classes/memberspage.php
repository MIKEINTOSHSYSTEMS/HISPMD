<?php
require_once(getabspath("classes/listpage_simple.php"));
class MembersPage extends ListPage_Simple 
{	
	/**
	 * Groups array from DB
	 * @type array
	 */
	var $groups = array();
	
	var $groupFullChecked = array();
	
	/**
	 * Members array from DB
	 * @type array
	 */	
	var $members = array();
	
	/**
	 * Users array from DB
	 * @type array
	 */	
	var $users = array();
	
	var $fields = array();
	
	var $listAjax = false;

	/**
	 * @type Boolean
	 */
	protected $noRecordsFound = false;

	protected $sources = array();
	
	protected $providerLabels = array();

	/**
	 * Contructor
	 *
	 * @param array $params
	 * @return MembersPage
	 */
	function __construct( &$params ) 
	{
		parent::__construct( $params );
		
		$this->listAjax = false;
		$this->pageSize = -1;	// all rows
	}
	
	/**
	 * Override, add admin_members specific assignments
	 */
	function commonAssign() 
	{	
		// call parent
		parent::commonAssign();

		if ( !$this->noRecordsFound ) 
		{
			$this->xt->assign("savebuttons_block", true);
			$this->xt->assign("savebutton_attrs","id=\"saveBtn\"");
			$this->xt->assign("resetbutton_attrs", "id=\"resetBtn\"");
		}
		
		$this->xt->assign("search_records_block",true);
		// The user might rewrite $_SESSION["UserName"] value with HTML code in an event, 
		// so no encoding will be performed while printing this value.
		$this->initLogin();
		
		$this->hideElement("message");
		$this->xt->assign("menu_block",true);
		
		$this->xt->assign("grid_block", true);

		if( $this->showDisplayField() ) {
			$this->xt->assign("displayname_column", true);
		}
		if( $this->showEmailField() ) {
			$this->xt->assign("email_column", true);	
		}
	}		
	
	/**
	 * Fills grid rows and headers
	 */
	function fillGridData() 
	{
		$rowInfo = array();	
		$data = $this->beforeProccessRow();
		
		//ext-security_id 
		$securityIdField = Security::extIdField();

		$dbProvider = Security::dbProvider();


		while( $data ) {
			$userid = $this->recNo;
			
			$row = array();
			$row["grid_record"] = array();
			$row["grid_record"]["data"] = array();
			$username = $data[ Security::usernameField() ];
			
			$securityId = "";
			$provider = $dbProvider;
			if( $securityIdField ) {
				// ext-security_id
				$securityId = $data[ $securityIdField ];
				if( $securityId ) {
					$provider = Security::findProvider( substr( $securityId, 0, 2 ) );
				}
			}
			if( $provider && array_search( $provider["code"], $this->sources ) === false ) {
				$this->sources[] = $provider["code"];
			}
			//	unknown provider - treat as DB user
			if( !$provider ) {
				$provider = $dbProvider;
				$securityId = '';
			}

		
			$groups_sate = array();	
			$rowgroups = array();

			
			$userGroups = array();
			foreach( $this->members as $m ) {
				if( $provider["type"] == stDB && !$m["provider"] && $m["userId"] == $username 
					|| $provider["type"] != stDB && $m["provider"] == $provider["code"] && $m["userId"] == $securityId ) {
	
					$userGroups[] = $m["groupId"];
				}
			}
			
			foreach( $this->groups as $g ) {
				$groupId = $g[0];
				
				$checked = 0;
				foreach( $userGroups as $userGroup ) {
					if( $userGroup == $groupId ) {
						$checked = 1;
						break;		
					}
				}
				
				if( $groupId == -1 && ( Security::getUserName() == $username || $securityId && $securityId == Security::getUserName() ) ) {
					$checked = 3;
				}
				
				$groups_sate[ $groupId ] = $checked;
				
				$smarty_group = array();
				$smarty_group["group"] = $groupId;
				$smarty_group["groupbox_attrs"] = "data-checked=\"".$checked."\" id=\"box"
					.$groupId.$userid."\" data-userid=\"".$userid."\" data-group=\"".$groupId."\"";
				
				$rowgroups[] = array(
					"usergroup_box" => array(
						"data" => array( $smarty_group )
					), 
					"groupcellbox_attrs" => "id=\"cell".$groupId.$userid."\" data-col=\"".$groupId."\""
				);
			}
			
			$rowgroups[ count($rowgroups) - 1 ]["rnredgeclass"] = "rnr-edge";
			$row["usergroup_boxes"] = array("data" => $rowgroups);
			
			$row["usernamecell_attrs"] = "data-userid=\"userid\" id=\"cellusername".runner_htmlspecialchars($userid)."\"";
			$row["usernamerow_attrs"] = "id=\"usernamerow".runner_htmlspecialchars($userid)."\"";
			$row["usernamebox_attrs"] = "data-userid=\"".runner_htmlspecialchars($userid)."\" data-checked=\"0\" id=\"rowbox"
				.runner_htmlspecialchars($userid)."\"";
			
			$formattedUsername = $username;
			if( $provider && $provider["type"] != stDB ) {
				$formattedUsername = substr( $securityId, 2 );
			}
			$row["username"] = runner_htmlspecialchars( $formattedUsername );
			
			$this->users[ $userid ] = array();
			$this->users[ $userid ][ "provider" ] = $provider["code"];

			if( $this->showDisplayField() ) {
				$row["displayusername"] = runner_htmlspecialchars( $data["fullname"] );
				$row["displayusername_attrs"] = "id=\"cellDisplayName".runner_htmlspecialchars($userid)."\"";
				$this->users[ $userid ]["displayUserName"] = $data["fullname"];
			}
			if( $this->showEmailField() ) {
				$row["emailuser"] = runner_htmlspecialchars( $data[Security::emailField()] );
				$row["emailuser_attrs"] = "id=\"cellEmail".runner_htmlspecialchars($userid)."\"";
				$this->users[ $userid ]["emailUser"] = $data[Security::emailField()];
			}

			
			//	source
			$row["source"] = GetMLString( $provider["label"] );
			
			if( $securityId )
				$this->users[ $userid ]["userName"] = $securityId;
			else
				$this->users[ $userid ]["userName"] = $username;
			
			$this->users[ $userid ]["groups"] = $groups_sate;
			$this->users[ $userid ]["visible"] = true;
			
			$row["recNo"] = $this->recNo; 
			$this->recNo++;
			
			//	assign row spacings for vertical layout
			$row["grid_rowspace"] = true;
			$row["grid_recordspace"] = array( "data" => array() );
			
			for( $i = 0; $i < $this->colsOnPage * 2 - 1; $i++ ) {
				$row["grid_recordspace"]["data"][] = true;
			}
			
			if( $this->eventExists("BeforeMoveNextList") )
				$this->eventsObject->BeforeMoveNextList( $data, $row, $record, $record["recId"], $this );
			
			$rowInfo[] = $row;
			$data = $this->beforeProccessRow();
		}
		
		$smartyGroups = array();
		// fill headers array
		foreach( $this->groups as $g ) {
			$smartyGroups[] = array("groupname" => runner_htmlspecialchars($g[1]),
				"groupheadersort_attrs" => "data-group=\"".$g[0]."\" id=\"colsort".$g[0]."\" href=\"#\"",
				"groupheadertdsort_attrs" => "id=\"tdsort".$g[0]."\"",
				"groupheaderbox_attrs" => "data-group=\"".$g[0]."\" data-checked=\"0\" id=\"colbox".$g[0]."\"",
				"groupheadertdbox_attrs" => "id=\"tdbox".$g[0]."\"",
			);
		}
		
		$this->xt->assign("displayuserheadersort_attrs", "id=\"displayNameSort\" href=\"#\"");
		$this->xt->assign("emailuserheadersort_attrs", "id=\"EmailSort\" href=\"#\"");
		$this->xt->assign("usernameheadersort_attrs", "id=\"userNameSort\" href=\"#\"");
		$this->xt->assign("choosecolumnsbutton_attrs", "id=\"chooseColumnsButton\" href=\"#\"");
		$this->xt->assign("sourceuserheadersort_attrs", "id=\"SourceSort\" href=\"#\"");
		
		$this->xt->assign("displayuserheadertdbox_attrs", "id=\"tdboxDisplayName\"");
		$this->xt->assign("displayuserheadertdsort_attrs", "id=\"tdsortDisplayName\"");
		$this->xt->assign("emailuserheadertdsort_attrs", "id=\"tdsortEmail\"");
		$this->xt->assign("emailuserheadertdbox_attrs", "id=\"tdboxEmail\"");
		
		// assign grid rows		
		$this->xt->assign_loopsection("grid_row", $rowInfo);
		// assign grid headers
		$smartyGroups[ count($smartyGroups) - 1 ]["rnredgeclass"] = "rnr-edge";
		$this->xt->assign_loopsection("usergroup_header", $smartyGroups);
		
		if( !$rowInfo )
			$this->noRecordsFound = true;
	}
	
	/**
	 * Fill members array from DB, call after save
	 */
	function fillMembers()
	{
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		
		$dc->order = array();
		$dc->order[] = array( "column" => "" );
		$dc->order[] = array( "column" => "" );
		
		// ugmembers username field may contains username or security plugin user id value
		$qResult = $dataSource->getList( $dc );
		while( $tdata = $qResult->fetchAssoc() ) {
			$provider = $tdata[""];
			$this->members[] = array( 
				"userId" => $tdata[""], 
				"groupId" => $tdata[""],
				"provider" => $provider
			);
		}
	}
	
	/**
	 * Fill groups array from DB, call after save
	 */
	function fillGroups()
	{
		$this->groups[] = array(-1, "<"."Admin".">");
		$this->groupFullChecked[] = true;

		$groupIdField = "";
		$groupLabelField = "";
		$groupProviderField = "";
		
		$dataSource = Security::getUgGroupsDatasource();
		$dc = new DsCommand();
		if( storageGet( "groups_provider_field" ) ) {
			$dc->order[] = array( "column" => $groupProviderField, "dir" => "ASC" );
		}
		$dc->order[] = array( "column" => $groupLabelField, "dir" => "ASC" );
		$qResult = $dataSource->getList($dc );
		storageSet( "groups_provider_field", $qResult->fieldExists( $groupProviderField ) );
		while( $data = $qResult->fetchAssoc() )
		{
			// only database groups are shown here
			if( !!$data[ $groupProviderField ] ) {
				continue;
			}
			$this->groups[] = array( $data[ $groupIdField ], $data[ $groupLabelField ], $data[ $groupProviderField ] );
			$this->groupFullChecked[] = true;
		}
	}
	
	/**
	 * A stub
	 */
	function prepareForResizeColumns() {}
		
	/**
	 * PRG rule, to avoid POSTDATA resend
	 * call after save
	 */
	function rulePRG() 
	{		
		if( no_output_done() && postvalue("a") == "save" ) 
		{
			// redirect, add a=return param for saving SESSION
			HeaderRedirect($this->shortTableName, $this->getPageType(), "a=return");
			// turned on output buffering, so we need to stop script
			exit();
		}
	}
		
	/**
	 * Main function, call to build page
	 * Do not change methods call oreder!!
	 */
	function prepareForBuildPage() 
	{
		// PRG rule, to avoid POSTDATA resend
		$this->rulePRG();
		
		// fill data
		$this->fillMembers();
		$this->fillGroups();
		
		$this->calculateRecordCount();

		// build pagination block
		$this->buildPagination();

		$this->recSet = $this->dataSource->getList( $this->queryCommand );

		if( !$this->recSet ) {
			showError( $this->dataSource->lastError() );
		}

		$this->fillGridData();

		//	must be called after fillGridData
		$this->fillSources();
		
		$this->buildSearchPanel();
		$this->fillFields();

		$this->addCommonJs();
		$this->addCommonHtml();

		$this->commonAssign();	
	}
	
	/**
	 * show page at the end of its proccess, depending on mode
	 */
	function showPage() 
	{
		$this->display($this->templatefile);
	}
	
	/**
	 * Add js files and scripts
	 */
	function addCommonJs() 
	{
		// call parent if need RunnerJS API 
		RunnerPage::addCommonJs();
		$this->addJsGroupsAndRights();		
	}
	
	/**
	 * Prepare JS arrays with groups and tables data
	 */
	function addJsGroupsAndRights() 
	{
		$this->jsSettings['tableSettings'][$this->tName]['warnOnLeaving'] = true;
		$this->jsSettings['tableSettings'][$this->tName]['usersList'] = $this->users;
		$this->jsSettings['tableSettings'][$this->tName]['fieldsList'] = $this->fields;
		$this->jsSettings['tableSettings'][$this->tName]['groupsList'] = array();
		foreach( $this->groups as $grArr ) {
			$this->jsSettings['tableSettings'][$this->tName]['groupsList'][$grArr[0]] = $grArr[1];
		}
		
		$this->jsSettings['tableSettings'][$this->tName]['providerLabels'] = $this->providerLabels;
	}
	
	function saveMembers( &$modifiedMembers )
	{
		foreach( $modifiedMembers as $userData ) 
		{
			$this->updateUserGroups( $userData["provider"], $userData["username"], $userData["groups"] );
		}	
		echo my_json_encode(array( 'success' => true ));
	}
	
	/**
	 * @param String user
	 * @param Array groups
	 */
	function updateUserGroups( $provider, $user, $groups )
	{
		$dataSource = Security::getUgMembersDatasource();
		$dbProvider = Security::dbProvider();
		
		// $user may contain username or security plugin user id
		foreach( $groups as $group => $state ) {
			if( $state == 1 ) {				
				$dcInsert = new DsCommand();
				// update
				$dcInsert->values = array( "" => $user, "" => $group );
				if( $provider != $dbProvider["code"] ) {
					$dcInsert->values[ "" ] = $provider;
				}
				$dataSource->insertSingle( $dcInsert );
			} else {
				// delete
				$dcDelete = new DsCommand();
				$conditions = array( 
					DataCondition::FieldEquals( "", $group ), 
					DataCondition::FieldEquals( "", $user, 0, Security::caseInsensitiveUsername() ? dsCASE_INSENSITIVE : dsCASE_STRICT ) 
				);
				if( $provider != $dbProvider["code"] ) {
					$conditions[] = DataCondition::FieldEquals( "", $provider );
				} else if( storageGet( "groups_provider_field" ) ) {
					$conditions[] = DataCondition::FieldIs( "", dsopEMPTY, "" );					
				}
				$dcDelete->filter = DataCondition::_And( $conditions );

				$dataSource->deleteSingle( $dcDelete, false );
			}
		}
	}
	
	function fillFields()
	{
		if( $this->showDisplayField() ) {
			$this->fields[] = array("name" => "DisplayName", "visible" => 1, "caption" => "Display name");
		}
		if( $this->showEmailField() ) {
			$this->fields[] = array("name" => "Email", "visible" => 1, "caption" => "E-mail");
		}
		foreach($this->groups as $idx => $g)
		{
			$this->fields[] = array("name" => $g[0], "visible" => 1, "caption" => $g[1]);
		}
	}
	
	function eventExists($name)
	{
		return false;
	}
	
	/**
	 * A stub
	 */
	function buildSearchPanel() {}
	public function assignSimpleSearch() {}	

	protected function setDataSource()
	{
		$this->dataSource = getLoginDataSource();
	}

	public function sourceSort( $a, $b ) {
		if( $a["label"] == $b["label"] )
			return 0;
		return $a["label"] > $b["label"] ? 1 : -1;
	}
	protected function fillSources() {
		if( count( $this->sources ) < 2 ) {
			return;
		}
		
		$this->xt->assign("source_column", true );
		$userSources = array();
		foreach( $this->sources as $code ) {
			$provider = Security::findProvider( $code );
			$source = array(
				"code" => $code,
				"label" => GetMLString( $provider["label"] )
			);
			$userSources[] = $source;
			
			$this->providerLabels[ $code ] = $source["label"];
		}
		usort( $userSources, array( $this, "sourceSort" ) );
		$this->xt->assign("user_sources", array( "data" => $userSources ) );

	}

	protected function showDisplayField() {
		$displayNameField = Security::fullnameField();
		$usernameField = Security::usernameField();
		return $displayNameField && $displayNameField != $usernameField;
	}

	protected function showEmailField() {
		$displayNameField = Security::fullnameField();
		$usernameField = Security::usernameField();
		$emailField = Security::emailField();
		return $emailField && $emailField != $usernameField && $emailField != $displayNameField;
	}

}
?>