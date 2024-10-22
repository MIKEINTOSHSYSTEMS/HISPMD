<?php
class RunnerContextItem
{
/**
 * define('CONTEXT_GLOBAL', 0);	//	global context
 * define('CONTEXT_PAGE', 1);		//	page where pageObject is available
 * define('CONTEXT_BUTTON', 2);	// 	button or other AJAX event
 * define('CONTEXT_LOOKUP', 3);	//	dependent lookup
 * define('CONTEXT_ROW', 4);		// 	processing grid row on multiple-records page (list)
 * define('CONTEXT_COMMAND', 5);	// 	DsCommand context
 * define('CONTEXT_SEARCH', 6);	// 	Search object context
 * define('CONTEXT_MASTER', 7);	// 	Search object context
 */
	public $type; 

	public $pageObj;
	public $data;
	public $oldData;
	public $newData;
	public $detailsKeys;
	public $dc;
	public $searchClause;
	public $masterData;

	function __construct( $type, $params )
	{
		RunnerApply($this, $params);
		$this->type = $type;
	}

	public function getType()
	{
		return $this->type;
	}

	/**
	 * @return Array
	 */
	public function getValues()
	{
		if( $this->data )
			return $this->data; 

		if( $this->dc ) {
			return $this->dc->values;
		}
	
		if( $this->pageObj )
			return $this->pageObj->getCurrentRecord();

		return array();
	}

	/**
	 * @param String field
	 * @return Mixed
	 */
	public function getFieldValue( $field )
	{
		$data = $this->getValues();
		return  getArrayElementNC( $data, $field );
	}

	public function getSearchValue( $field ) {
		return $this->searchClause->_getFieldValue( $field, null, false, true );
	}

	public function getAllSearchValue() {
		return $this->searchClause->getAllFieldsSearchValue();
	}

	/**
	 * @return Array
	 */
	public function getOldValues()
	{
		if( $this->oldData )
			return $this->oldData;

		if( $this->pageObj )
			return $this->pageObj->getOldRecordData();

		return array();
	}

	public function getKeyValue( $field ) {
		if( $this->dc ) {
			return $this->dc->keys[ $field ];
		}
		return null;
	}

	public function getFilterValue( $field ) {
		if( $this->dc ) {
			return $this->dc->findFieldFilterValue( $field );
		}
	}

	public function getLimitValue( $key ) {
		if( !$this->dc ) {
			return "";
		}
		if( $key == "record_from" ) {
			return $this->dc->startRecord + 1;
		}
		if( $key == "record_to" ) {
			return $this->dc->startRecord + $this->dc->reccount;
		}
		if( $key == "record_count" ) {
			return $this->dc->reccount;
		}
		if( $key == "record_offset" ) {
			return $this->dc->startRecord;
		}
	}


	/**
	 * @param String field
	 * @return Mixed
	 */
	public function getOldFieldValue( $field )
	{
		$oldData = $this->getOldValues();
		return getArrayElementNC( $oldData, $field );
	}

	/**
	 * @param String field
	 * @return Mixed
	 */
	public function getNewFieldValue( $field )
	{
		if ( $this->newData )
			return getArrayElementNC( $this->newData, $field );
		if( $this->dc ) {
			return getArrayElementNC( $this->dc->values, $field );
		}

		return $this->getFieldValue( $field );
	}

	

	/**
	 * @return Array
	 */
	public function getMasterValues()
	{
		if( $this->masterData )
			return $this->masterData;

		if( $this->pageObj )
			return $this->pageObj->getMasterRecord();

		return array();
	}

	/**
	 * @param String field
	 * @return Mixed
	 */
	public function getMasterFieldValue( $field )
	{
		$masterData = $this->getMasterValues();
		return getArrayElementNC( $masterData, $field );
		
	}

	/**
	 * @param String key
	 * @return String
	 */
	public function getUserValue( $key )
	{
		return getArrayElementNC( Security::currentUserData(), $key );
	}

	/**
	 * @param String key
	 * @return Mixed
	 */
	public function getSessionValue( $key )
	{
		return getSessionElementNC( $key );
	}

	public function getDetailsKeyValue( $key ) {
		return $this->detailsKeys[ $key ];
	}


	/**
	 * Returns true if context must serve this scope, and search must stop here. 
	 * For example, when page context is found, it must serve the 'master' and 'details' scopes even if no master-detail is in effect.
	 * @param String - scope like 'keys', 'master', 'details'
	 * @return Boolean
	 */
	public function hasScope( $scope ) {
		if( $scope == "master" )
			return $this->masterData || $this->type == CONTEXT_PAGE;

		if( $scope == "session" )
			return true;

		if( $scope == "user" )
			return true;

		if( $scope == "old" )
			return $this->oldData || $this->type == CONTEXT_PAGE;

		if( $scope == "keys" )
			return $this->type == CONTEXT_COMMAND;

		if( $scope == "new" )
			return $this->newData || $this->type == CONTEXT_PAGE || $this->type == CONTEXT_COMMAND;

		if ( $scope == "global" )
			return true;

		if( $scope == "details" )
			return $this->type == CONTEXT_PAGE || $this->type == CONTEXT_MASTER;

		if ( $scope == "values" )
			return !!$this->data || $this->type == CONTEXT_PAGE || $this->type == CONTEXT_COMMAND; 

		if( $scope == "search" )
			return $this->type == CONTEXT_SEARCH;

		if( $scope == "filter" )
			return $this->type == CONTEXT_COMMAND;

		if( $scope == "request" )
			return true;

		if( $scope == "limit" )
			return $this->type == CONTEXT_COMMAND;
		
		if( $scope == "all_field_search" )
			return $this->type == CONTEXT_SEARCH;
	}

	/**
	 * @param String key
	 * @return Mixed
	 */
	public function getContextValue( $scope, $key )
	{

		if( $scope == "master" )
			return $this->getMasterFieldValue( $key );

		if( $scope == "session" )
			return $this->getSessionValue( $key );

		if( $scope == "user" )
			return $this->getUserValue( $key );

		if( $scope == "old" )
			return $this->getOldFieldValue( $key );

		if( $scope == "keys" )
			return $this->getKeyValue( $key );

		if( $scope == "new" )
			return $this->getNewFieldValue( $key );

		if ( $scope == "global" && $key == "language" )
			return mlang_getcurrentlang();

		if( $scope == "details" ) {
			if( $this->type == CONTEXT_PAGE )
				return $this->pageObj->getDetailsKeyValue( $key );
			if( $this->type == CONTEXT_MASTER )
				return $this->getDetailsKeyValue( $key );
		}

		if( $scope == "values" )
			return $this->getFieldValue( $key );

		if( $scope == "search" )
			return $this->getSearchValue( $key );

		if( $scope == "filter" )
			return $this->getFilterValue( $key );

		if( $scope == "request" )
			return postvalue( $key );

		if( $scope == "limit" )
			return $this->getLimitValue( $key );
		
		if( $scope == "all_field_search" )
			return $this->getAllSearchValue();
			
		return false;
	}
}

/**
 *	Singletone. All public functions are static
 */
class RunnerContext
{
	protected $stack = array();

	public function __construct( )
	{
		$context = new RunnerContextItem( CONTEXT_GLOBAL, array() );
		$this->stack[ count($this->stack) ] = $context;
	}

	public static function push( $context )
	{
		global $contextStack;
		$contextStack->stack[ count($contextStack->stack) ] = $context;
	}

	public static function current( )
	{
		global $contextStack;
		return $contextStack->stack[ count($contextStack->stack) - 1 ];
	}

	public static function pop( )
	{
		global $contextStack;

		//	this sometimes happens during the error reporting
		if( !$contextStack->stack )
			return null;
		
		$context = $contextStack->stack[ count($contextStack->stack) - 1 ];
		unset( $contextStack->stack[ count($contextStack->stack) - 1 ] );

		return $context;
	}

	 // Utility functions
	/**
	 *  Shortcut for adding page-based context
	 */
	public static function pushPageContext( $pageObj ) {
		RunnerContext::push( new RunnerContextItem( CONTEXT_PAGE, array( "pageObj" => $pageObj ) ) );
	}
	/**
	 *  Shortcut for adding record-based context
	 */
	public static function pushRecordContext( $record, $pageObj ) {
		RunnerContext::push( new RunnerContextItem( CONTEXT_ROW, array( "pageObj" => $pageObj, "data" => $record ) ) ); //?
	}

	public static function pushDataCommandContext( $dc ) {
		RunnerContext::push( new RunnerContextItem( CONTEXT_COMMAND, array( "dc" => $dc ) ) ); 
	}

	public static function pushSearchContext( $searchClause ) {
		RunnerContext::push( new RunnerContextItem( CONTEXT_SEARCH, array( "searchClause" => $searchClause ) ) );
	}

	public static function pushMasterContext( $detailsKeys ) {
		RunnerContext::push( new RunnerContextItem( 
			CONTEXT_MASTER, 
			array( 
				"detailsKeys" => $detailsKeys, 
			) ) ); 
	}


	public static function getMasterValues() {
		$ctx = RunnerContext::current();
		return $ctx->getMasterValues();
	}

	public static function getValues() {
		$ctx = RunnerContext::current();
		return $ctx->getValues();
	}

	/**
	 * @return String
	 */
	public static function PrepareRest( $str, $urlenc = true ) {
		$context = RunnerContext::current();
		$tokens = DB::scanTokenString($str);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);
			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}
			if( $urlenc )
				$val = rawurlencode($val);
			$repl["insert"] = $val;

			$replacements[] = $repl;
		}
		//	do replacements
		return RunnerContext::doReplacements( $str, $replacements );
	}

	/**
	 * locate all <? - ?> snippets in a string
	 * @param String str
	 * @return Array of array(
	 * 	"offset" => integer - offset of the opening bracket in the original string
	 * 	"len" => integer - length includes opening and closing brackets: <? - ?>
	 * )
	 */
	protected static function getOptionalBlocks( $str ) {
		if( !is_string( $str ) )
			return array();		
		
		$snippetStack = array();
		$snippets = array();
		$pos = strpos( $str, '<?' );
		if( $pos === false )
			return array();
		
		while( true ) {
			$snippetStack[] = $pos;
			$newPos = strpos( $str, '<?', $pos + 1 );
			
			/*	locate all ?> before the next <? or end of string*/
			$tailLen = ( $newPos !== false ? $newPos : strlen( $str ) ) - $pos;
			$tail = substr( $str, $pos, $tailLen );
			$endPos = 0;
			while( ($endPos = strpos( $tail, '?>', $endPos+1 ) ) !== false && count( $snippetStack ) ) {
				$stackIdx = count( $snippetStack ) - 1;
				$snippets[] = array( "offset" => $snippetStack[ $stackIdx ], "len" => $endPos + $pos + 2 - $snippetStack[ $stackIdx ] );
				$snippetStack = array_slice( $snippetStack, 0, $stackIdx );
			}
			if( $newPos === false ) 
				break;
			$pos = $newPos;
		}
		return $snippets;
	}

	/**
	 * do actual replacements
	 * @param String $str - source string
	 * @param Array $replacements - Array of Array(
	 * 		"offset" => Integer, position in the source tring
	 * 		"len"	=> Integer, length of the source string portion to be replaced
	 * 		"insert" => String, value to insert instead of replaced
	 * )
	 */
	public static function doReplacements( $str, $replacements ) {
		if( !is_string( $str ) )
			return $str;
		
		$snippets = RunnerContext::getOptionalBlocks( $str );
		/* snippets with 0 non-empty requirements must be deleted from the string */
		/* mark empty snippets */
		for( $i=0; $i < count( $snippets ); ++$i ) {
			$s = &$snippets[$i];
			$s["empty"] = true;
			foreach ($replacements as $r) {
				/* replacement inside snippet  */
				if( $r["offset"] > $s["offset"] && $r["offset"] < $s["offset"] + $s["len"] ) {
					if( $r["insert"] != "" ) {
						$s["empty"] = false;
						break;
					}
				}
			}
		} 

		/* do replacements */
		$offsetShift = 0;
		foreach ($replacements as $r) {
			$str = substr_replace($str, $r["insert"], $r["offset"] + $offsetShift, $r["len"]);
			$offsetDelta = strlen($r["insert"]) - $r["len"];
			//	update all $snippets
			RunnerContext::updateOptionalBlockOffset( $snippets, $r["offset"], $offsetDelta );
			$offsetShift += $offsetDelta;
		}

		/* process optional blocks - delete or remove brackets */
		for( $i=0; $i < count( $snippets ); ++$i ) {
			$s = &$snippets[$i];
			if( $s["empty"]) {
				$str = substr_replace($str, "", $s["offset"], $s["len"] );
				$offsetDelta = -$s["len"];
			} else {
				$str = substr_replace($str, 
					substr( $str, $s["offset"] + 2, $s["len"] - 4 ), 
					$s["offset"], 
					$s["len"] 
				);
				$offsetDelta = -4;
			}
			RunnerContext::updateOptionalBlockOffset( $snippets, $s["offset"], $offsetDelta );
		}
		return $str;
	}

	protected static function updateOptionalBlockOffset( &$snippets, $offset, $delta ) {
		for( $i=0; $i < count( $snippets ); ++$i ) {
			$s = &$snippets[$i];
			if( $s["offset"] > $offset ) {
				$s["offset"] += $delta;
			} else {
				if( $s["offset"] + $s["len"] > $offset ) {
					$s["len"] += $delta;
				}
			}
		}
	}
	

	public static function getValue( $key ) {
		$prefix = "";
		$dotPos = strpos( $key, ".");
		if( $dotPos !== FALSE )
		{
			$scope = strtolower( substr( $key, 0, $dotPos ) );
			$key = substr( $key, $dotPos + 1 );
		} else {
			if( $key === "language" ) {
				$scope = "global";
			} else if( $key == "all_field_search") {
				$scope = $key;
			} else {
				$scope = "values";
			}

		}
		return RunnerContext::_getValue( $scope, $key );
	}


	/**
	 * Search got requested value in the stack of contexts
	 * @param String - scope like 'keys', 'master', 'details'
	 * @param String - key. 'details.teamId' is translated to context=details, key=teamId
	 * @return String or false if value is not found
	 */
	protected static function _getValue( $scope, $key ) 
	{
		global $contextStack;
		$idx = count( $contextStack->stack );
		while( $idx > 0 ) {
			$ctx = $contextStack->stack[ --$idx ];
			if( $ctx->hasScope( $scope ) ) {
				return $ctx->getContextValue( $scope, $key );
			}
		}
		return false;
	}

}

/**
 * 	Push context in constructor and pop in destructor
 */
class TempContext
{
	function __construct( $context ) {
		RunnerContext::push( $context );
	}

	function __destruct() {
		RunnerContext::pop();
	}
}

?>