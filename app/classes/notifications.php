<?php

define('ntMESSAGE', 0 );
define('ntUSERDATA', 1 );
define('ntPERMISSIONS', 2 );

// Permissions type
define('ntPermTypeUser', 0 );
define('ntPermTypeGroup', 1 );
define('ntPermTypePage', 2 );
define('ntPermTypeNone', 3 );

class RunnerNotifications {
	var $enabled;

	var $messageLimit = 30;
	
	/**
	 * @var Arrray (
	 * 	connId => string
	 *  table => string
	 * )
	 */
	var $table;

	var $dataSource;

	public function __construct( $params ) {
		$this->enabled = $params["enabled"];
		$this->table = $params["table"];
		$this->dataSource = getDbTableDataSource( $this->table["table"], $this->table["connId"] );
	}

	protected function fetchRecords( $dc, $keys ) {
		$rs = $this->dataSource->getList( $dc );
		if( !$rs ) {
			return array();
		}
		$ret = array();
		while( $data = $rs->fetchAssoc() ) {
			$note = array();
			foreach( $keys as $k ) {
				$note[ $k ] = $data[ $k ];
			}
			if( $data["type"] == 0 ) {
				//	decode message field if needed
				//	this function is used for both messages and permissions
				//	only decode messages
				if( substr( $note["message"], 0, 1) == '{' ) {
					$messageData = @runner_json_decode( $note["message"] );
					if( $messageData ) {
						$note["message"] = $messageData["message"];
						$note["newWindow"] = $messageData["newWindow"];
					}
				}
			}

			$ret[]= $note;
		}
		return $ret;
	}

	protected function fetchMessages( $dc ) {
		$keys = array( "message", "title", "url", "icon", "created", "expire", "id" );
		return $this->fetchRecords( $dc, $keys );
	}

	public function getUpdates( $lastId ) {
		if( !$this->enabled ) {
			return array();
		}
		$dc = new DsCommand;
		$dc->filter = DataCondition::_And( array(
			$this->userCondition(), 
			$this->timeCondition( ),
			$this->idCondition( $lastId ),
			$this->typeCondition( ntMESSAGE ),
		) );
		$dc->order[] = array( 
			"column" => "created",
			"dir" => "DESC"
		);
		$dc->reccount = $this->messageLimit;

		$messages = $this->fetchMessages( $dc );
		return $this->applyPermissionsFilter( $messages );

	}

	public function getMessages() {
		if( !$this->enabled ) {
			return array();
		}
		$dc = new DsCommand;
		$dc->filter = DataCondition::_And( array(
			$this->userCondition(), 
			$this->timeCondition(),
			$this->typeCondition( ntMESSAGE )
		) );
		$dc->order[] = array( 
			"column" => "created",
			"dir" => "DESC"
		);
		$dc->reccount = $this->messageLimit;

		$messages = $this->fetchMessages( $dc );
		return $this->applyPermissionsFilter( $messages );
	}

	/**
	 * @return String  - time of the last message the user read
	 */
	public function getUserData() {
		if( !$this->enabled ) {
			return false;
		}
		$ds = new DsCommand;
		$ds->filter = DataCondition::_And( array( $this->userCondition(), $this->typeCondition( ntUSERDATA ) ) );
		$rs = $this->dataSource->getSingle( $ds );
		if( $rs ) {
			$data = $rs->fetchAssoc();
			if( $data ) {
				return runner_json_decode( $data["message"] );
			}
		}
		return false;
	}

	/**
	 * @param Boolean $update - do update instead of insert
	 */
	public function saveUserData( $data, $update ) {
		if( !$this->enabled ) {
			return;
		}
		$dc = new DsCommand;
		$dc->values["message"] = runner_json_encode( $data );
		if( $update ) {
			$dc->filter = DataCondition::_And( array( $this->userCondition(), $this->typeCondition( ntUSERDATA ) ) );
			return !!$this->dataSource->updateSingle( $dc, false );
		} else {
			if( Security::loggedInAsUser() ) {
				$dc->values["user"] = Security::getUserName();
				$dc->values["provider"] = Security::currentProviderCode();
			} else {
				$dc->values["user"] = session_id();
			}
			$dc->values["type"] = ntUSERDATA;
			return !!$this->dataSource->insertSingle( $dc );
		}
	}


	public function getLastRead() {
		if( !$this->enabled ) {
			return false;
		}
		$userData = $this->getUserData();
		if( $userData ) {
			return $userData["lastRead"];
		}
		return 0;
	}

	/**
	 * Update user marker record
	 */
	public function updateLastRead( $newId ) {

		$update = true;
		$userData = $this->getUserData();
		if( $userData === false ) {
			$update = false;
		}
		if( !$userData ) {
			$userData = array();
		}
		$userData["lastRead"] = $newId;
		$this->saveUserData( $userData, $update );
	}


	/**
	 * @param Boolean strict. When strict exclude empty userid
	 * @return DsCondition
	 * Filter notifications intended for the current user
	 */
	protected function userCondition( $strict = false ) {
		if( Security::loggedInAsUser() ) {
			$provider = Security::currentProviderCode();
			$userId = Security::getUserName();
		} else {
			$provider = "";
			$userId = session_id();
		}
		$providerCondition = $provider 
			? DataCondition::FieldEquals( "provider", $provider )
			: DataCondition::FieldIs( "provider", dsopEMPTY, "" );

		$conditions = array(
			DataCondition::_And( array( 
				DataCondition::FieldEquals( "user", $userId ), 
				$providerCondition ) )
		);
		if( !$strict ) {
			$conditions[] = DataCondition::FieldIs( "user", dsopEMPTY, "" );
		}
		return DataCondition::_Or( $conditions );
	}

	/**
	 * @return DsCondition
	 */
	protected function timeCondition() {
		$conditions = array();
		$conditions[] = DataCondition::_Or( array( 
			DataCondition::FieldIs( "expire", dsopMORE, now() ),
			DataCondition::FieldIs( "expire", dsopEMPTY, "" ),
		) );
			;
		return DataCondition::_And( $conditions );
	}

	/**
	 * @return DsCondition
	 */
	protected function typeCondition( $type ) {
		return DataCondition::FieldEquals( "type", $type );
	}

	protected function idCondition( $lastId ) {
		return DataCondition::FieldIs( "id", dsopMORE, $lastId );
	}

	public function create( $params ) {
		$ret = $this->dataSource->insertSingle( $this->getAddMessageCommand( $params ) );

		if( !$ret ) {
			return false;
		}
		
		$messageId = $ret["id"];
		$permissions = $params["permissions"];
		$permissionsType = $this->permissionsType( $permissions );
		if( $permissionsType == ntPermTypeGroup || $permissionsType == ntPermTypePage ) {
			$permissionsRet = $this->dataSource->insertSingle( $this->getAddPermissionsCommand( $messageId, $permissions ) );
			if( !$permissionsRet ) {
				return false;
			}
		}

		return $messageId;
	}

	protected function getAddMessageCommand( $params ) {
		$dc = new DsCommand;
		
		$keys = array( "message", "title", "url", "icon", "expire" );

		foreach( $keys as $k ) {
			if( array_key_exists( $k, $params ) ) {
				$dc->values[ $k ] = $params[ $k ];
			}
		}

		$messageData = array( 
			"message" => @$params["message"],
			"newWindow" => @$params["newWindow"]
		);
		$dc->values[ "message" ] = runner_json_encode( $messageData );

		$permissions = $params["permissions"];
		$permissionsType = $this->permissionsType( $permissions );

		$userKeys = $permissionsType == ntPermTypeUser 
			? array( "user", "provider" )
			: array();

		foreach( $userKeys as $k ) {
			if( array_key_exists( $k, $permissions ) ) {
				$dc->values[ $k ] = $permissions[ $k ];
			}
		}
		if( $params["expire"] && is_int( $params["expire"] ) ) {
			//	if integer, "expire" is life time in minutes
			$expire = dbFormatDateTime( addMinutes( db2time( now() ), $params["expire"] ) );
			$dc->values["expire"] = $expire;
		}
		$dc->values["created"] = now();
		$dc->values["type"] = ntMESSAGE;

		return $dc;
	}

	/**
	 * Returns DsCommand for adding permissions row to Notifications datasource ( title references notification id )
	 */
	protected function getAddPermissionsCommand( $messageId, $permissions ) {
		$dc = new DsCommand;
		$dc->values["title"] = $messageId;
		$dc->values["type"] = ntPERMISSIONS;
		$dc->values["message"] = my_json_encode( $permissions );
		return $dc;
	}

	/**
	 * Fetch permissions records for all messages in $msgIdList
	 */
	protected function getPermissions( $msgIdList ) {
		$dc = new DsCommand;
		$inListCondition = count( $msgIdList ) > 0 ? DataCondition::FieldInList( "title", $msgIdList ) : DataCondition::_False();
		$dc->filter = DataCondition::_And( 
			array(
				$inListCondition,
				$this->typeCondition( ntPERMISSIONS )
			)
		);
		$keys = array( "message", "title" );
		return $this->fetchRecords( $dc, $keys );
	}

	/**
	 * Filters each message with permissions
	 */
	protected function applyPermissionsFilter( $messages ) {
		$msgIdList = array();
		// message id => message
		$msgMap = array();
		foreach( $messages as $msg ) {
			$msgId = $msg["id"];
			$msgIdList[] = $msgId;
			$msgMap[$msgId] = $msg;
		}

		$permissionsRecordsList = $this->getPermissions( $msgIdList );

		// message id => permissions
		$msgPermissionsMap = array();
		foreach( $permissionsRecordsList as $permissionsRecord ) {
			$messageId = $permissionsRecord["title"];
			$permissions = my_json_decode( $permissionsRecord["message"] );
			$msgPermissionsMap[$messageId] = $permissions;
		}

		$returnMessages = array();
		foreach( $msgMap as $messageId => $message ) {
			$permissions = $msgPermissionsMap[$messageId];
			if( $this->userFitsPermissions( $permissions ) ) {
				$returnMessages[] = $message;
			}
		}

		return $returnMessages;
	}

	protected function userFitsPermissions( $permissions ) {
		$permissionsType = $this->permissionsType( $permissions );

		if( $permissionsType == ntPermTypeNone ) {
			return true;
		}

		if( $permissionsType == ntPermTypePage ) {
			$table = $permissions["table"];
			$page = $permissions["page"];
			return Security::userCanSeePage( $table, $page );
		}

		if( $permissionsType == ntPermTypeGroup ) {
			$group = $permissions["group"];
			$userGroups = Security::getUserGroups();
			return $userGroups[$group];
		}

		if( $permissionsType == ntPermTypeUser ) {
			// handled in typeCondition 
			return true;
		}

		return false;
	}

	protected function permissionsType( $permissions ) {
		if( is_null( $permissions ) || !is_array( $permissions ) ) {
			return ntPermTypeNone;
		}

		if( $permissions["user"] ) {
			return ntPermTypeUser;
		}

		if( $permissions["group"] ) {
			return ntPermTypeGroup;
		}

		if( $permissions["table"] && $permissions["page"] ) {
			return ntPermTypePage;
		}

		return ntPermTypeNone;
	}
}

?>