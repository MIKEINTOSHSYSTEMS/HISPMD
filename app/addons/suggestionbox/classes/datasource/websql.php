<?php 

/**
 * Webreports & webcharts based on database table
 */
class DataSourceWebSQL extends DataSource {

	protected $report;
	protected $connection;
	function __construct( $connection, &$report ) {

		parent::__construct( "sql" );
		$this->connection = $connection;
		$this->report = &$report;
	}

	/**
	 * @param DsCommand dc
	 * @param Boolean addOrder
	 * @param String replaceFieldList - when not empty replace everything between SELECT and FROM
	 * @return String
	 */
	protected function buildSQL( $dc, $addOrder, $replaceFieldList = "" ) {
		
		if( !isset( $dc->_cache["sql"] ) ) {

			if(!IsStoredProcedure($this->report['sql']))
			{
				$sql_query = $this->report['sql'];
				
				if( $this->connection->dbType == nDATABASE_MSSQLServer )
				{
					$pos=strrpos(strtoupper($sql_query),"ORDER BY");
					if($pos)
						$sql_query=substr($sql_query,0,$pos);
				}
				
				$dc->_cache["sql"] = "select * from (".$sql_query.") ".$this->connection->addFieldWrappers( generateAlias() ) . $this->report['where'];
			}
			else
			{
				$dc->_cache["sql"] = $this->report['sql'];
			}



			$dc->_cache["sql"] = $this->report['sql'] . $this->report['where'] . $this->report['group_by'];
		}
		$sql = $dc->_cache["sql"];
		return $sql;

	}

	/**
	 * returns recordset or array
	 */
	public function getList( $dc ) {
		$sql = $this->buildSQL( $dc, true );
		return $this->connection->limitedQuery( $sql, $dc->startRecord, $dc->reccount, true );
	}

		
}
?>