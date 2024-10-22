<?php
/**
 * Abstract class, parent for QueryResult and ArrayResult
 */
class DataResult
{
	//	list of column names in the fetched query
	protected $fieldNames = array();
	protected $upperMap = array();
	protected $fieldMap = array();

	/**
	 * Field substitutions
	 * @var Array of "source field name" => "output field name"
	 *
	 */
	protected $fieldSubs = array();

	protected $data;
	function __construct() {}

/**	abstract methods  */
	public function getQueryHandle() { return null; }
	public function fetchAssoc() { return null; }
	public function fetchNumeric() { return null; }
	public function closeQuery() {}
	public function numFields() { return 0; }
	public function fieldName( $offset ) { return ""; }

	public function seekRecord( $n ) {}

	public function eof() { return true; }
	public function next() {}
	public function getData() {}
	public function getNumData() {}
	protected function prepareRecord() { return false; }
	protected function fillColumnNames() {}

/**	end abstract methods  */

/**	utility methods  */
	protected function numericToAssoc( $data ) {
		if( !$data ) {
			return $data;
		}
		$ret = array();
		$nFields = $this->numFields();
		for( $i = 0; $i < $nFields; ++$i ) {
			$ret[ $this->fieldNames[ $i ] ] = $data[ $i ];
		}
		if( $this->fieldSubs ) {
			return $this->substituteFields( $ret );
		}
		return $ret;
	}

	protected function assocToNumeric( $data ) {
		if( !$data ) {
			return $data;
		}
		$ret = array();
		$nFields = $this->numFields();
		for( $i = 0; $i < $nFields; ++$i )
			$ret[ $i ] = $data[ $this->fieldNames[ $i ] ];
		return $ret;
	}


	public function value( $field )
	{
		if( !$this->prepareRecord() )
			return null;
		if( is_int($field) )
			return $this->data[ $field ];
		if( isset( $this->fieldMap[ $field ] ) )
			return $this->data[ $this->fieldMap[ $field ] ];
		if( isset( $this->upperMap[ strtoupper( $field ) ] ) )
			return $this->data[ $this->upperMap[ strtoupper( $field ) ] ];
		return null;
	}

	public function seekPage( $pageSize, $page )
	{
		$this->seekRecord( $pageSize * ( $page - 1 ) );
	}

	/**
	 * @param Array
	 */
	function setFieldSubstitutions( $fieldSubs ) {
		$this->fieldSubs = $fieldSubs;
	}

	/**
	 * change field names according to subst
	 * @param Array
	 * @return Array
	 */
	function substituteFields( &$data ) {
		if( !$this->fieldSubs )
			return;
		$ret = array();
		foreach( $data as $field => $val ) {
			if( $this->fieldSubs[ $field ] ) {
				$ret[ $this->fieldSubs[ $field ] ] = $val;
			} else {
				$ret[ $field ] = $val;
			}
		}
		return $ret;
	}

	//	whether resordset is random-access or forward-only
	function randomAccess() {
		return false;
	}

	public function reorder( $callback ) {
		return $this;
	}

	public function fieldExists( $fieldName ) {
		$this->fillColumnNames();
		return array_key_exists( $fieldName, $this->fieldMap );
	}

}
?>