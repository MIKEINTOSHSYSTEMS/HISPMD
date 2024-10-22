<?php

define('ntMESSAGE', 0 );
define('ntUSERDATA', 1 );

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

	protected function fetchMessages( $dc ) {
		$rs = $this->dataSource->getList( $dc );
		if( !$rs ) {
			return array();
		}
		$ret = array();
		while( $data = $rs->fetchAssoc() ) {
			$note = array();
			$keys = array( "message", "title", "url", "icon", "created", "expire", "id" );
			foreach( $keys as $k ) {
				$note[ $k ] = $data[ $k ];
			}
			$ret[]= $note;
		}
		return $ret;
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
		return $this->fetchMessages( $dc );

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
		return $this->fetchMessages( $dc );
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
		$dc = new DsCommand;
		$keys = array( "message", "user", "provider", "title", "url", "icon", "expire" );
		foreach( $keys as $k ) {
			if( array_key_exists( $k, $params ) ) {
				$dc->values[ $k ] = $params[ $k ];
			}
		}
		if( $params["expire"] && is_int( $params["expire"] ) ) {
			//	if integer, "expire" is life time in minutes
			$expire = dbFormatDateTime( addMinutes( db2time( now() ), $params["expire"] ) );
			$dc->values["expire"] = $expire;
		}
		$dc->values["created"] = now();
		$dc->values["type"] = ntMESSAGE;
		$ret = $this->dataSource->insertSingle( $dc );
		if( $ret ) {
			return $ret["id"];
		}
		return false;
	
	}

}

?>