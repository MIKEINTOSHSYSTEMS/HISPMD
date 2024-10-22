<?php

class DataSourceDbTable extends DataSourceTable {

	protected $tableInfo;
	function __construct( $name, $connection, &$tableInfo ) {

		parent::__construct( $name, $connection );
		$this->tableInfo = &$tableInfo;
	}

	public function getFieldType( $field ) {
		$fieldInfo = getArrayElementNC( $this->tableInfo["fields"], $field );
		if( !$fieldInfo ) {
			return null;
		}
		return $fieldInfo["type"];
	}

	protected function getAutoincField() {
		return Connection::getAutoincField($this->tableInfo);
	}

	protected function getColumnCount() {
		return count( $this->tableInfo["fields"] );
	}

	public function getColumnList() {
		return array_keys( $this->tableInfo["fields"] );
	}

	protected function getSQLComponents() {
		return array(
			"head" => "SELECT * ",
			"from" => "FROM " . $this->connection->addTableWrappers( $this->tableInfo["fullName"] ) . " ",
			"where" => "",
			"groupby" => "",
			"having" => ""
		);
	}

	/**
	 * Delete single record
	 * @return Boolean - success or not
	 */
	public function deleteSingle( $dc, $requireKeys = true ) {
		if( !$dc->keys && $requireKeys ) {
			return true;
		}

		$sql = " DELETE FROM "
			. $this->connection->addTableWrappers( $this->tableInfo["fullName"] )
			. " WHERE "
			. $this->getWhereClause( $dc );

		if( $this->connection->exec( $sql ) ) {
			return true;
		}

		$this->setError( $this->connection->lastError() );
		return false;
	}

	/**
	 * Update single record
	 * @return Array or false
	 */
	public function insertSingle( $dc ) {
		$this->prepareInsertValues($dc);
		$fields = array();
		$values = array();
		foreach ($dc->_cache["sqlValues"] as $sf => $sv) {
			$fields[] = $sf;
			$values[] = $sv;
		}
		$sql = "INSERT INTO "
			. $this->connection->addTableWrappers( $this->tableInfo["fullName"] )
			. "(" .implode( ", ", $fields ). ")"
			. " VALUES "
			. "(" .implode( ", ", $values ). ")";

		$autoincField = $this->getAutoincField();
		$ret = $this->connection->execWithBlobProcessing( $sql, $dc->_cache["blobs"], $dc->_cache["blobTypes"], $autoincField);
		if( !$ret ) {
			$this->setError( $this->connection->lastError() );
			return false;
		}

		return $dc->values;
	}

	public function updateSingle( $dc, $requireKeys = true  ) {
		if( !count($dc->values) || ( !count($dc->keys) && $requireKeys ) )
			return true;

		$this->prepareInsertValues( $dc );
		$fieldList = array();
		foreach( $dc->_cache["sqlValues"] as $sf => $sv ) {
			$fieldList[] = $sf . '=' . $sv;
		}

		$sql = "UPDATE "
			. $this->connection->addTableWrappers( $this->tableInfo["fullName"] )
			. " SET "
			. implode( ",\n ", $fieldList )
			. " WHERE "
			. $this->getWhereClause( $dc );


		$ret = $this->connection->execWithBlobProcessing( $sql, $dc->_cache["blobs"], $dc->_cache["blobTypes"] );
		if( $ret ) {
			return true;
		}
		/*
		if( $this->connection->exec( $sql ) ) {
			return true;
		}
		*/

		$this->setError( $this->connection->lastError() );
		return false;
	}
}
?>