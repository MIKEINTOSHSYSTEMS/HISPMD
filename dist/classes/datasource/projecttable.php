<?php

class DataSourceProjectTable extends DataSourceTable {

	protected $query;
	protected $cipherer;
	function __construct( $name, $pSet, $connection ) {

		parent::__construct( $name, $connection );

		$this->query = $pSet->getSQLQuery();
		$this->pSet = $pSet;
		$this->cipherer = new RunnerCipherer( $this->_name );
	}

	protected function getAutoincField()
	{
		foreach ($this->getKeyFields() as $keyField) {
			if ($this->pSet->isAutoincField($keyField)) {
				return $keyField;
			}
		}
		return null;
	}

	protected function getKeyFields() {
		return $this->pSet->getTableKeys();
	}

	protected function getGroupByFieldList() {
		return $this->pSet->getListOfFieldsByExprType( true );
	}

	public function getFieldType( $field ) {
		return $this->pSet->getFieldType( $field );
	}

	protected function getSQLComponents() {
		return $this->query->getSqlComponents();
	}

	/**
	 * Whether the column is COUNT, SUM, MIN, MAX, AVG in the original SQL query
	 * @return Boolean
	 */
	protected function isAggregateField( $field ) {
		return $this->pSet->isAggregateField( $field );
	}

	/**
	 * @return Boolean
	 * field is encrypted with code-based cipher
	 */
	protected function valueNeedsEncrypted( $field ) {
		return $this->connection->isEncryptionByPHPEnabled() && $this->cipherer->isFieldEncrypted( $field );
	}

	/**
	 * Returns expression to use in SQL query
	 */
	protected function fieldExpression( $field, $modifier = 0 ) {
		$fieldExpr = RunnerPage::_getFieldSQL( $field, $this->connection, $this->pSet );
		if( $this->cipherer->isFieldEncrypted( $field ) && !$this->connection->isEncryptionByPHPEnabled() ) {
				$fieldExpr = $this->cipherer->GetEncryptedFieldName( $fieldExpr, $field );
		}
		return $this->applyFieldModifier( $fieldExpr, $this->getFieldType($field), $modifier );
	}

	protected function dbTableName() {
		return $this->pSet->getOriginalTableName();
	}

	/**
	 * Update single record
	 * @return Array or false
	 */
	public function insertSingle($dc)
	{
		$this->prepareInsertValues($dc);

		$table = $this->dbTableName();
		$fields = array();
		$values = array();

		foreach ($dc->_cache["sqlValues"] as $sf => $sv) {
			$fields[] = $sf;
			$values[] = $sv;
		}

		$sql = "INSERT INTO "
		. $this->connection->addTableWrappers($table)
			. "(" . implode(", ", $fields) . ")"
			. " VALUES "
			. "(" . implode(", ", $values) . ")";

		$autoincField = $this->getAutoincField();
		if ($dc->identiyInsertOff && $this->connection->dbType == nDATABASE_MSSQLServer) {
			// import mode
			$sqls = array();
			$sqls[] = "SET IDENTITY_INSERT " . $this->connection->addTableWrappers($table) . " ON";
			$sqls[] = $sql;
			$sqls[] = "SET IDENTITY_INSERT " . $this->connection->addTableWrappers($table) . " OFF";
			$execResult = $this->connection->execMultiple($sqls);
		} else {
			//	normal mode, add page etc
			$execResult = $this->connection->execSilentWithBlobProcessing($sql, $dc->_cache["blobs"], $dc->_cache["blobTypes"], $autoincField);
		}

		if ($execResult) {
			$data = $dc->values;
			if ($autoincField != null && !array_key_exists($autoincField, $data)) {
				$data[$autoincField] = $this->connection->getInsertedId($autoincField, $table);
			}
			return $data;
		}

		$this->setError($this->connection->lastError());
		return false;
	}



	public function updateMany( $keys, $values ) {

	}

	protected function getUpdateFieldSQL( $field )
	{
		$strField = $this->pSet->getStrField($field);

		if( $strField != "" )
			return $this->connection->addFieldWrappers( $strField );

		$fname = $this->pSet->getFullFieldName($field);
		if ( $fname == "" )
			return $this->connection->addFieldWrappers($field);

		if (!$this->pSet->isSQLExpression($field))
			return $this->connection->addTableWrappers( $this->pSet->getStrOriginalTableName() ).".".$this->connection->addFieldWrappers( $fname );
		return $fname;
	}



	/**
	 * Update single record
	 * @return Boolean - success or not
	 */
	public function updateSingle( $dc, $requireKeys = true ) {
		if( !count($dc->values) && !count($dc->advValues) || ( !count($dc->keys) && $requireKeys ) )
			return true;

		$this->prepareInsertValues( $dc );
		$table = $this->dbTableName();
		$where = $this->getWhereClause( $dc );

		$fieldList = array();
		foreach( $dc->_cache["sqlValues"] as $sf => $sv ) {
			$fieldList[] = $sf . '=' . $sv;
		}

		$sql = "UPDATE "
			. $this->connection->addTableWrappers( $table )
			. " SET "
			. implode( ",\n ", $fieldList )
			. " WHERE "
			. $where;

		if( $this->connection->execSilentWithBlobProcessing( $sql, $dc->_cache["blobs"], $dc->_cache["blobTypes"] ) ) {
			return true;
		}
		$this->setError( $this->connection->lastError() );
		return false;
	}

	/**
	 * Delete single record
	 * @return Boolean - success or not
	 */
	public function deleteSingle( $dc, $requireKeys = true ) {
		if( !count($dc->keys) && $requireKeys )
			return true;

		$table = $this->dbTableName();
		$where = $this->getWhereClause( $dc );


		$sql = " DELETE FROM "
			. $this->connection->addTableWrappers( $table )
			. " WHERE "
			. $where;

		if( $this->connection->exec( $sql )) {
			return true;
		}
		$this->setError( $this->connection->lastError() );
		return false;
	}


	public function lastAutoincValue( $field ) {
		$table = $this->dbTableName();
		if( $this->pSet->isAutoincField( $field ) ) {
			return $this->connection->getInsertedId( $field, $table );
		}
		return "";
	}

	protected function getColumnCount() {
		return $this->pSet->getFieldCount();
	}

	public function getColumnList() {
		return $this->pSet->getFieldsList();
	}

	protected function encryptField( $field, $value ) {
		return $this->cipherer->EncryptField( $field, $value );
	}

	public function & decryptRecord( &$data ) {
		return $this->cipherer->DecryptFetchedArray( $data );
	}

	protected function getOrderClause( $dc, $forceColumnNames = false ) {
		if( $dc->order ) {
			return parent::getOrderClause( $dc, $forceColumnNames );
		}
		//	use the original ORDER BY clause
		return $this->pSet->getStrOrderBy();
	}

	/**
	 * Returns true when empty string should be interpreted as NULL in insert/update operations
	 * @return Boolean
	 */
	protected function insertNull( $field )
	{
		return $this->pSet->insertNull( $field );
	}

	function prepareInsertSQLValue( $field, $value ) {
		return $this->cipherer->AddDBQuotes( $field, $value );

	}

}


?>