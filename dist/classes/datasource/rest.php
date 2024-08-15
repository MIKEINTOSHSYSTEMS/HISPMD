<?php

class DataSourceREST extends DataSource {
	protected $cipherer;

	function __construct( $name, $pSet, $connection ) {
		parent::__construct( $name );

		$this->pSet = $pSet;
		$this->connection = $connection;
		$this->opDescriptors = $this->pSet->getDataSourceOps();
	}
	/**
	 * returns recordset or array
	 */
	public function getList( $dc ) {
		$result = $this->getListData( $dc );
		if( !$result ) {
			return $result;
		}
		//	apply $dc->startRecord & totals
		$result->seekRecord( $dc->startRecord );
		return $result;
	}

	public function updateSingle( $dc, $requireKeys = true ) {
		$op = "update";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if( !count($dc->values) )
			return true;
		$ret = $this->runRequest( $op, $dc );
		return $ret !== false;
	}

	public function insertSingle( $dc ) {
		$op = "insert";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if( !count($dc->values) ) {
			$this->setError( "nothing to insert");
			return false;
		}
		$ret = $this->runRequest( $op, $dc );
		return $ret !== false
			? $dc->values
			: $ret;
	}

	public function deleteSingle( $dc, $requireKeys = true ) {
		$op = "delete";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( "deleteRecord", $dc );
		}
		if( !count($dc->keys) && $requireKeys ) {
			return true;
		}
		$ret = $this->runRequest( $op, $dc );
		return $ret !== false;
	}

	public function getSingle( $dc ) {
		$op = "selectOne";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		if( $this->opDescriptors[ $op ] ) {
			$result = $this->runRequest( $op, $dc );
			if( $result !== false )
				$result = $this->resultFromJson( $result, false );
			if( $result === false ) {
				trigger_error( $this->lastError(), E_USER_ERROR );
				return false;
			}
			$result = $this->filterResult( $result, $dc->filter );

		} else {
			$result = $this->getListData( $dc );
		}
		return $result;
	}

	protected function getListData( $dc, $listRequest = true ) {
		if( $dc->_cache["listData"] ) {
			$dc->_cache["listData"]->seekRecord(0);
			return $dc->_cache["listData"];
		}

		if( $this->falseCondition( $dc->filter) ) {
			$dc->_cache["listData"] = new ArrayResult( array() );
			return $dc->_cache["listData"];
		}

		$op = "selectList";
		if( $this->codeOp( $op ) ) {
			$res =  $this->callCodeOp( $op, $dc );
		} else {
			$res = $this->runRequest( "selectList", $dc );
			if( $res !== false )
				$res = $this->resultFromJson( $res, true );
		}
		if( $res === false ) {
			trigger_error( $this->lastError(), E_USER_ERROR );
			return false;
		}
		if( $this->codeOp( $op ) ) {
			$res = $this->addExtraColumns( $res, $dc );
		} else {
			$res = $this->addExtraColumns( $res, $dc );
			$res = $this->filterResult( $res, $dc->filter );
			$this->reorderResult( $dc, $res );
		}
		$dc->_cache["listData"] = $res;
		return $dc->_cache["listData"];
	}

	public function getCount( $dc ) {
		$op = "count";
		if( $this->codeOp( $op ) ) {
			return $this->callCodeOp( $op, $dc );
		}
		//	use List command
		$ret = $this->getListData( $dc );
		if( $ret ) {
				//	apply totals
			return $ret->count();
		}
		return 0;
	}

	/**
	 * @return Array
	 * "header"=> array( key => value )
	 * "form"=> array( key => value )
	 * "url"=> array( key => value )
	 */
	public function preparePayload( $payload ) {
		$payloadForm = array();
		$payloadUrl = array();
		$payloadHeaders = array();
		foreach( $payload as $p ) {
			$value = RunnerContext::PrepareRest( $p["value"], false );
			if( $p["skipEmpty"] && $value == "" )
				continue;
			if( $p["location"] == "url" ) {
				$payloadUrl[ $p["name"] ] = $value;
			} else if( $p["location"] == "header" ) {
				$payloadHeaders[ $p["name"] ] = $value;
			} else {
				$payloadForm[ $p["name"] ] = $value;
			}
		}
		return array(
			"url" => $payloadUrl,
			"form" => $payloadForm,
			"header" => $payloadHeaders
		);
	}

	/**
	 * @return parsed JSON or FALSE
	 */
	protected function runRequest( $op, $dc ) {
		RunnerContext::pushDataCommandContext( $dc );
		$urlRequest = RunnerContext::PrepareRest( $this->opDescriptors[ $op ]["request"] );
		$payload = $this->preparePayload( my_json_decode( $this->opDescriptors[ $op ]["payload"] ) );
		RunnerContext::pop();
		$method = $this->opDescriptors[ $op ]["method"];
		$res = &$this->connection->requestJson( $urlRequest, $method, $payload["form"], $payload["header"], $payload["url"] );
		if( $res === false ) {
			$this->setError( $this->connection->lastError() );
			return false;
		} else {
			return  $res;
		}
	}

	/**
	 * Convert JSON onject into recordset
	 * @param Array data - parsed JSON result
	 * @param Boolean - type of request- list or single
	 * @return ArrayResult
	 */
	public function resultFromJson( &$data, $listRequest ) {
		$flatten = new FlattenObject( $data, $this->getFieldPaths( $listRequest ) );
		$ret = $flatten->flatten();
		if( $ret === null ) {
			$this->setError( my_json_encode( $data ) );
			return false;
		}
		return new ArrayResult( $ret );
	}


	public function resultFromJson_old( &$data, $listRequest ) {
		if( $data === false )
			return $data;
		$fieldPaths = $this->getFieldPaths( $listRequest );
		$recNo = 0;
		$recCount = -1;
		$ret = array();
		$foundAny = false;
		while( true ) {
			$record = array();
			foreach( $fieldPaths as $field => $path ) {
				$foundValue = true;
				$pointer = &$data;
				foreach( $path as $pi ) {

					$p = $pi;	// .net stuff

					if( $p == '*') {
						if( $recCount == -1) {
							$recCount = count( $pointer );
						}
						$p = $recNo;
						$foundAny = true;
					}
					if( !isset( $pointer[$p] ) ) {
						$foundValue	= false;
						break;
					}
					$pointer = &$pointer[$p];
				}
				if( $foundValue ) {
					$foundAny = true;
					$record[ $field ] = $pointer;
				}
			}
			if( $record ) {
				$ret[] = $record;
			}
			++$recNo;
			if( $recNo >= $recCount ) {
				break;
			}
		}
		if( !$foundAny ) {
			$this->setError( my_json_encode( $data ) );
			return false;
		}
		return new ArrayResult( $ret );
	}

	/**
	 *  get all field paths as arrays
	 * 	@return Array
	 * 	"Make" => array( "data", "*", "Make" );
	 */
	protected function getFieldPaths( $listRequest ) {
		$ret = array();
		foreach( $this->pSet->getFieldsList() as $f ) {
			$source = $this->pSet->getFieldSource( $f, $listRequest );
			if( !$source ) {
				continue;
			}
			$ret[ $f ] = explode( '/', $source );
		}
		return $ret;
	}

	/**
	 * Check if additional authorization with the connection is obtained
	 * @return Boolean true = authorized
	 */

	public function checkAuthorization() {
		return $this->connection->checkAuthorization();
	}

	/**
	 * Returns information needed for authorization with the data connection
	 */
	public function getAuthorizationInfo() {
		return $this->connection->getAuthorizationRequest();
	}
}

/**
 * Transform arbitrary object ( associative array, parsed JSON ) into recordset-like structure, array of records:
 * [ records, record, record ] where each record is an associatve array of "field" => "value"
 */
class FlattenObject {

	protected $source;
	protected $fields;

	/**
	 *
	*/
	protected $starRoot;

	/**
	 * @param Array source - source object, parsed JSON
	 * @param Array fields - associative array of field descriptors. Each descriptor is
	 * array of strings specifying the path of field value in the source object
	 */
	function __construct( &$source, $fields ) {
		$this->source =& $source;
		$this->fields =& $fields;
		$this->starRoot = new StarNode();
		$this->createStarTree();
	}

	function & flatten() {
		$ret = array();
		$rootObject = array();
		$rootObject[] = &$this->source;
		while( true ) {
			$record = array();
			foreach( $this->fields as $field => $path ) {
				$record[ $field ] = $this->starRoot->getFieldValue( $path, $rootObject );
			}
			$ret[] = $record;
			if( !$this->starRoot->next() )
				break;
		}
		if( !$this->starRoot->foundAnyData() )
			return null;
		return $ret;
	}

	protected function createStarTree() {
		foreach( $this->fields as $field => $path ) {
			$starNode = $this->starRoot;
			$nodePath = array();
			foreach( $path as $p ) {
				if( $p == '*' ) {
					$starNode = $starNode->addStar( $nodePath );
					$nodePath = array();
				} else {
					$nodePath[] = $p;
				}
			}
		}
	}

}

class StarNode {
	/**
	 * @var Array
	 */
	protected $path;

	protected $source;
	protected $currentSource;

	protected $keys = array();
	protected $currentIndex = 0;

	protected $foundData = false;

	/**
	 * @var Array
	 * <subpath> => StarNode
	 */
	protected $children = array();

	function __construct( $path = array() ) {
		$this->path = $path;
	}
	/**
	 * return star object
	 */
	public function addStar( $path ) {
		$pathString = implode( '/', $path );
		if( !$this->children[ $pathString ] ) {
			$this->children[ $pathString ] = new StarNode( $path );
		}
		return $this->children[ $pathString ];
	}

	public function getFieldValue( $path, &$source ) {
		$this->updateSource( $source );
		$ptr = &$this->currentSource;
		$nodePath = array();
		foreach( $path as $idx => $p ) {
			if( $p == '*' ) {
				$child = $this->getChild( $nodePath );
				$this->foundData = true;
				return $child->getFieldValue( array_slice( $path, $idx + 1), $ptr );
			}
			$nodePath[] = $p;
			if( $ptr && isset( $ptr[ $p ] ) ) {
				$ptr = &$ptr[ $p ];
			} else {
				return null;
			}
		}
		$this->foundData = true;
		return $ptr;
	}

	public function foundAnyData() {
		return $this->foundData;
	}
	protected function resetCounter() {
		$this->currentIndex = 0;
		if( $this->source && is_array( $this->source ) ) {
			$this->currentSource = &$this->source[ $this->keys[0] ];
		} else {
			$nil = null;
			$this->currentSource = &$nil;
		}
	}

	protected function updateSource( &$source ) {
		/* .NET and ASP conversion isssues may appear */
		if( $this->source === $source ) {
			return;
		}
		$this->source = &$source;
		if( $this->source && is_array( $this->source ) ) {
			$this->keys = array_keys( $this->source );
		} else {
			$this->keys = array();
		}
		$this->resetCounter();
	}

	protected function getChild( &$path ) {
		return $this->children[ implode( '/', $path ) ];
	}

	/**
	 * Moves to the next record
	 * Returns false if there are no records left
	 * @return Boolean
	 */
	public function next() {
		$prevChildren = array();
		foreach( $this->children as $child ) {
			if( $child->next() ) {
				//	restart previous children
				foreach( $prevChildren as $ch ) {
					$ch->resetCounter();
				}
				return true;
			}
			else
			{
				$prevChildren[] = $child;
			}
		}
		++$this->currentIndex;
		if( !isset( $this->keys[ $this->currentIndex ] ) ) {
			return false;
		}
		$this->currentSource = &$this->source[ $this->keys[ $this->currentIndex ] ];
		return true;
	}


}

?>