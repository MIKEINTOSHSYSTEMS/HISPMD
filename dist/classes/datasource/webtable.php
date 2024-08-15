<?php 

/**
 * Webreports & webcharts based on database table
 */
class DataSourceWebTable extends DataSourceDbTable {

	protected $tableInfo;
	protected $report;
	function __construct( $name, $connection, &$report, &$tableInfo ) {

		parent::__construct( $name, $connection, $tableInfo );
		$this->tableInfo = &$tableInfo;
		$this->report = &$report;
	}

	public function getFieldType( $field ) {
		$fieldInfo = getArrayElementNC( $this->tableInfo["fields"], $field );
		if( !$fieldInfo ) {
			return null;
		}
		return $fieldInfo["type"];
	}

	protected function getColumnCount() {
		return count( $this->tableInfo["fields"] );
	}

	public function getColumnList() {
		return array_keys( $this->tableInfo["fields"] );
	}

	/**
	 * @param DsCommand dc
	 * @param Boolean addOrder
	 * @param String replaceFieldList - when not empty replace everything between SELECT and FROM
	 * @return String
	 */
	protected function buildSQL( $dc, $addOrder, $replaceFieldList = "" ) {
		if( !isset( $dc->_cache["sql"] ) ) {

			$dc->_cache["sql"] = $this->report['sql'] . $this->report['where'] . $this->report['group_by'];
		}
		$sql = $dc->_cache["sql"];
		if( $addOrder ) {
			$sql .=  $this->getOrderClause( $dc );
		}
		return $sql;

	}
	protected function getOrderClause( $dc, $forceColumnNames = false ) {
		if( isset( $dc->_cache["order"] ) ) {
			return $dc->_cache["order"];
		}
		$dc->_cache["order"] = $this->report['order_by'];
		return $dc->_cache["order"];
	}

		
}
?>