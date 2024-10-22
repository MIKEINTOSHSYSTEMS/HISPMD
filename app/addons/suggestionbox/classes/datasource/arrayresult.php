<?php

require_once( getabspath("classes/datasource/dataresult.php") );
/**
 * A wrapper of the Connection class methods
 * basing on an SQL querty result hanle
 */
class ArrayResult extends DataResult
{
	/**
	 * array of associative arrays, data in JSON-like format:
	 * [
	 * 	{ field1: value, field2: value},
	 * 	{ field1: value, field2: value},
	 * ]
	 */
	public $source;

	protected $dummy = null;

	/**
	 * Current record index
	 */
	protected $recIdx = 0;
	
	function __construct( $source )
	{
		parent::__construct();
		$this->source =& $source;
		$this->fillColumnNames();
	}
	
	public function fetchAssoc()
	{
		$this->prepareRecord();
		++$this->recIdx;
		return $this->data;

	}
	
	protected function prepareRecord() 
	{
		if( $this->recIdx < count( $this->source ) ) {
			$this->data = &$this->source[ $this->recIdx ];
			return true;
		} else {
			$this->data = &$this->dummy;
			return false;
		}
	}
	
	public function fetchNumeric()
	{
		$this->prepareRecord();
		++$this->recIdx;
		return $this->assocToNumeric( $this->data );
	}

	public function numFields()
	{
		return count( $this->fieldNames );
	}
	
	public function fieldName( $offset )
	{
		return $this->fieldNames[ $offset ];
	}
	
	public function seekRecord( $n )
	{
		$this->recIdx = $n; ;
	}
	
	public function eof() 
	{
		$this->prepareRecord();
		return !$this->data;
	}
	
	
	protected function fillColumnNames()
	{
		if( $this->fieldNames )
			return;
		if( !$this->source )
			return;
		$names = array_keys( $this->source[0] );
		foreach( $names as $i => $fname )
		{
			$this->fieldNames[] = $fname;
			$this->fieldMap[ $fname ] = $i;
			$this->upperMap[ strtoupper( $fname ) ] = $i;
		}
	}

	public function next()
	{
		++$this->recIdx;
	}

	public function getData()
	{
		if( !$this->prepareRecord() )
			return null;
		return $this->data;
	}

	public function getNumData()
	{
		if( !$this->prepareRecord() )
			return null;
		return $this->assocToNumeric( $this->data );
	}

	public function count() {
		return count( $this->source );
	}

	public function reorder( $callback ) {
		usort( $this->source, $callback );
		$this->recIdx = 0;
		return $this;
	}

	//	import other result data, return new ArrayResult
	public static function createFromResult( $result ) {
		$newData = array();
		while( $data = $result->fetchAssoc() ) {
			$newData[] = $data;
		}
		return new ArrayResult( $newData );
	}
	
	function randomAccess() {
		return true;
	}


}
?>