<?php

/**
 * Abstract class, contains method common for both
 * DataSourceProjectTable and DataSourceDBTable classes
 */
class DataSourceTable extends DataSource {

	function __construct( $name, $connection ) {
		parent::__construct( $name );
		$this->connection = $connection;
	}

	public function prepareSQL( $dc ) {
		$this->buildWhereHaving( $dc );
		$order = $this->getOrderClause( $dc );
		$sql = $this->buildSQL( $dc, false );
		return array(
			"sql" => $sql,
			"where" => $dc->_cache["where"],
			"order" => $order
		);
	}

	public function overrideSQL( $dc, $sql ) {
		$dc->_cache["overriden"] = true;
		$dc->_cache["sql"] = $sql;
	}

	public function overrideWhere( $dc, $where, $having = "" ) {
		// unset "sql" to build a new value with a correct WHERE clause
		unset( $dc->_cache["sql"] );

		$dc->_cache["overriden"] = true;
		$dc->_cache["where"] = $where;
		if( $dc->_cache["having"] )
			$dc->_cache["having"] = $where;
	}

	public function overrideOrder( $dc, $orderby ) {
		$dc->_cache["order"] = $orderby;
	}

	protected function getKeyFields() {
		return array();
	}

	protected function getAutoincField() {
		return null;
	}

	protected function buildWhereHaving( $dc ) {
		if( isset( $dc->_cache["where"] ) ) {
			return;
		}
		$filter = $dc->filter;
		//	when there are $dc->keys, just add them to the WHERE expression
		if( $dc->keys ) {
			$filter = DataCondition::_And( array(
				$dc->filter,
				DataCondition::FieldsEqual( $this->getKeyFields(), $dc->keys )
			) );
		}
		$filters = $this->splitFilterWhereHaving( $dc, $filter );
		$context = new DsFilterBuildContext;
		$dc->_cache["where"] = $this->conditionToSQL( $filters["where"], $context );
		$dc->_cache["having"] = $this->conditionToSQL( $filters["having"], $context );
		$dc->_cache["context"] = $context;
	}

	protected function getWhereClause( $dc ) {
		$this->buildWhereHaving( $dc );
		return $dc->_cache["where"];
	}

	protected function getHavingClause( $dc ) {
		$this->buildWhereHaving( $dc );
		return $dc->_cache["having"];
	}

	/**
	 * @param Boolean $forceColumnNames - when true always use column or field names instead if indices
	 */
	protected function getOrderClause( $dc, $forceColumnNames = false ) {
		if( isset( $dc->_cache["order"] ) ) {
			return $dc->_cache["order"];
		}
		$columns = null;
		$orderby = array();
		foreach( $dc->order as $of ) {
			if( $of["index"] ) {
				if( !$forceColumnNames ) {
					$orderby[] = $of["index"] . " " . $of["dir"];
				} else {
					if( !$columns )
						$columns = $this->getColumnList();
					$column = $columns[ (int)$of["index"] - 1 ];
					if( $column ) {
						$orderby[] = $this->wrap( $column ) . " " . $of["dir"];
					}
				}
			} else if( $of["column"] ) {
				$extraColumn = $dc->findExtraColumn( $of["column"] );
				if( $extraColumn ) {
					if( $this->connection->dbType == nDATABASE_Access ) {
						//	Access can't handle field aliases in Order By
						$ecIdx = $dc->getExtraColumnIndex( $of["column"] );
						$columnCount = $this->getColumnCount();
						$orderby[] = ( $columnCount + $ecIdx + 1 ) . " " . $of["dir"];
					} else {
						$orderby[] = $this->connection->addFieldWrappers( $of["column"] ) . " " . $of["dir"];
					}
				} else {
					$orderby[] = $this->fieldExpression( $of["column"] ) . " " . $of["dir"];
				}
			} else if( $of["expr"] ) {
				$orderby[] = $of["expr"] . " " . $of["dir"];
			} else {
				continue;
			}
		}
		$orderString = $orderby ? "ORDER BY " . implode( ", ", $orderby ) : "";
		$dc->_cache["orderby"] = $orderString;
		return $dc->_cache["orderby"];
	}

	protected function getGroupByFieldList() {
		return array();
	}

	/**
	 * Split $filter into two conditions, one that will go into WHERE, another - into HAVING SQL clauses.
	 * select a, count(*) as b from c
	 * When search is specified, the query shoudl look like:
	 * select a, count(*) as b from c where a like 'a' having b like 'b'
	 */
	protected function splitFilterWhereHaving( $dc, $filter ) {
		$ret = array(
			"where" => DataCondition::_And( array() ),
			"having" => DataCondition::_And( array() )
		);
		$grouppedFields = $this->getGroupByFieldList();
		if( !$grouppedFields ) {
			$ret["where"] = $filter;
			return $ret;
		}

		$this->flattenANDs( $filter );
		if( $filter->operation !== dsopAND ) {
			$operands = array( 0 => new DsOperand( dsotCONDITION, $filter ) );
		} else {
			$operands = &$filter->operands;
		}

		foreach( $operands as $oper ) {
			if( $this->findField( $oper->value, $grouppedFields ) ) {
				$ret["having"]->operands[] = $oper;
			} else {
				$ret["where"]->operands[] = $oper;
			}
		}
		return $ret;
	}

	/**
	 * check if there is any field from the list in the condition
	 * @param DsCondition
	 * @param Array of strings
	 * @return Boolean
	 */
	protected function findField( $condition, $fields ) {
		if( !$condition ) {
			return false;
		}
		foreach( $condition->operands as $op ) {
			if( $op->type === dsotFIELD ) {
				if( array_search( $op->value, $fields ) !== false ) {
					return true;
				}
			} else if( $op->type === dsotCONDITION ) {
				if( $this->findField( $op->value, $fields ) ) {
					return true;
				}
			}
		}
		return false;
	}

	protected function conditionToSQL( $dCondition, $context ) {
		if( !$dCondition ) {
			return "";
		}
		$op = $dCondition->operation;
		if( $op == dsopAND || $op == dsopOR ) {
			$sqlConditions = array();
			foreach( $dCondition->operands as $o ) {
				$sql = trim( $this->conditionToSQL( $o->value, $context ) );
				if( $sql !== "" ) {
					$sqlConditions[] = "( " . $sql . " )";
				}
			}
			return implode( $op == dsopAND ? ' and ' : ' or ', $sqlConditions );
		}
		else if( $op == dsopSQL ) {
			return trim( $dCondition->operands[ 0 ]->value );
		}
		else if( $op == dsopNOT ) {
			$sql = trim( $this->conditionToSQL( $dCondition->operands[ 0 ]->value, $context ) );
			if( $sql ) {
				return "NOT ( " . $sql . " )";
			}
			return "";
		}
		else if( DataSource::basicFieldCondition( $op ) ) {
			return $this->basicFieldConditionSQL( $dCondition, $context );
		} else if( $op == dsopFALSE ) {
			return $this->sqlExpressionFalse();
		}
		return "";
	}

	/**
	 * This function must be overridden
	 */
	public function getFieldType( $field ) {
		trigger_error("Unsupported datasource", E_USER_ERROR );
		return 200;
	}

	/**
	 * @return Boolean
	 * field is encrypted with code-based cipher
	 */
	protected function valueNeedsEncrypted( $field ) {
		return false;
	}

		//	basic operations: < > = like isnull etc
	protected function basicFieldConditionSQL( $dCondition, $context )
	{
		//	take care of the field operand first
		$operandType = $dCondition->operands[0]->type;
		$field = $dCondition->operands[0]->value;
		$modifier = $dCondition->operands[0]->modifier;
		$fieldType = $this->getFieldType( $field );
		$caseInsensitive = $dCondition->caseInsensitive;

		if( IsTextType( $fieldType ) && $this->connection->dbType == nDATABASE_MSSQLServer ) {
			$caseInsensitive = dsCASE_DEFAULT;
		}

		//	encryption stuff
		//	either field must be decrypted or value operand encrypted
		$encryptValue = $this->valueNeedsEncrypted( $field );
		if( $operandType == dsotFIELD )
			$fieldExpr = $this->fieldExpression( $field, $modifier );
		else if( $operandType == dsotSQL ) {
			$fieldExpr = $field;
			$fieldType = 0;
		}

		if( $context->useSubquery ) {
			//	original query is wrapped in a subquery, use column names instead of underlying expressions
			$fieldExpr = $this->connection->addFieldWrappers( $field );
			$encryptValue = false;
		}

		//	process $field->joinData, apply criteria to a field from another table, like searching by Display field

		$joinData = $dCondition->operands[0]->joinData;
		if( $joinData ) {
			if( $joinData->dataSource->tableBased() ) {
				return $this->createJoinedSearchClause( $field, $fieldExpr, $dCondition );
			}
			return "";
		}


		// forced conversion to char
		if( ( $dCondition->operands[0]->tochar) && !IsCharType( $fieldType ) ) {
			$fieldExpr = $this->connection->field2char( $fieldExpr, $fieldType );
			$fieldType = 200;
		}
		if( IsDateFieldType( $fieldType ) && $modifier > 0 ) {
			$fieldType = 3;	// integer
		}

		if( $encryptValue ) {
			$values = array();
			//	only EMPTY and EQUALS operations can be done on PHP-encrypted fields
			for( $i = 1; $i < count( $dCondition->operands); ++$i ) {
				$values[] = $this->encryptField( $field, $dCondition->operands[$i]->value );
			}
			if( $dCondition->operation == dsopBETWEEN && count( $values ) == 2 ) {
				return $fieldExpr . ' = ' . $values[0] . " or " . $fieldExpr . ' = ' . $values[1];
			}
			if( $dCondition->operation == dsopEMPTY ) {
				$encryptedEmptyString = $this->encryptField( $field, $dCondition->operands[$i]->value );
				return $fieldExpr . " is null or "
					. $fieldExpr . " = '' or "
					. $fieldExpr . " = " . $this->connection->prepareString( $encryptedEmptyString );
			}
			//	all other operations turn into "="
			return $fieldExpr . " = " . $this->connection->prepareString( $values[0] );
		}
		$op = $dCondition->operation;
		if( !$this->checkBasicOpOperands( $op, $fieldType, $dCondition->operands ) )
			return $this->sqlExpressionFalse();
		if( $op == dsopEQUAL ) {
			return $this->sqlExpressionEquals( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value, $caseInsensitive );
		} else if( $op == dsopMORE || $op == dsopLESS ) {
			return $this->sqlExpressionMore( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value, $caseInsensitive, $op == dsopMORE );
		} else if( $op == dsopEMPTY ) {
			return $this->sqlExpressionEmpty( $fieldType, $fieldExpr );
		} else if( $op == dsopSTART || $op == dsopCONTAIN ) {
			return $this->sqlExpressionLike( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value,
			$caseInsensitive, $op == dsopSTART, $dCondition->operands[ 1 ]->likeWrapper );
		} else if( $op == dsopBETWEEN ) {
			return $this->sqlExpressionBetween( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value, $dCondition->operands[ 2 ]->value, $caseInsensitive );
		} else if( $op == dsopSOME_IN_LIST || $op == dsopALL_IN_LIST ) {
			return $this->sqlExpressionInList( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value, $op == dsopALL_IN_LIST );
		} else if( $op == dsopIN ) {
		return $this->sqlExpressionIn( $fieldType, $fieldExpr, $dCondition->operands[ 1 ]->value , $caseInsensitive  );
		}
		return "";
	}

	protected function checkBasicOpOperands( $op, $fieldType, $operands ) {
		$opCount = 1;
		if( $op == dsopBETWEEN ) {
			$opCount = 3;
		} elseif( $op != dsopEMPTY ) {
			$opCount = 2;
		}
		if( count( $operands ) < $opCount ) {
			return false;
		}
		if( $op == dsopSTART || $op == dsopCONTAIN ) {
			//	don't check operand type, all is converted to string
			return true;
		}
		if( $op == dsopIN || $op == dsopALL_IN_LIST || $op == dsopSOME_IN_LIST ) {
			return true;
		}

		//	probably for searching??
		for( $i = 1; $i < $opCount; ++$i ) {
			if( !$this->validateSQLValue($fieldType, $operands[$i]->value ) ) {
				return false;
			}
		}
		return true;
	}

	protected function sqlExpressionFalse() {
		return "1=0";
	}

	protected function sqlExpressionEmpty( $fieldType, $fieldExpr ) {
		$ret = $fieldExpr . ' is null';

		global $mysqlSupportDates0000;
		if( $mysqlSupportDates0000 && IsDateFieldType( $fieldType ) && $this->connection->dbType == nDATABASE_MySQL ) {
			// skip "zero" dates '0000-00-00', '0000-00-00 00:00:00'
			return $ret
				. " or " . $fieldExpr . " = '0000-00-00'"
				. " or " . $fieldExpr . " = '0000-00-00 00:00:00'";
		}

		if( !IsCharType( $fieldType ) || $this->connection->dbType == nDATABASE_Oracle ) {
			return $ret;
		}

		if( IsTextType( $fieldType ) && $this->connection->dbType == nDATABASE_MSSQLServer ) {
			return $ret . " or " . $fieldExpr . " like ''";
		} else {
			return $ret . " or " . $fieldExpr . " = ''";
		}
	}

	protected function sqlExpressionEquals( $fieldType, $fieldExpr, $value, $caseInsensitive ) {

		if( !IsCharType( $fieldType ) ) {
			return $fieldExpr . "=" . $this->prepareSQLValue( $fieldType, $value );
		}
		if( IsTextType( $fieldType ) && $this->connection->dbType != nDATABASE_MySQL ) {
			$likeWord = ( $this->connection->dbType == nDATABASE_PostgreSQL && $caseInsensitive === dsCASE_INSENSITIVE )
				? 'ilike'
				: 'like';
			return $fieldExpr . ' ' . $likeWord . ' ' . $this->prepareSQLValue( $fieldType, $value );
		}
		if( $caseInsensitive === dsCASE_DEFAULT ) {
			return $fieldExpr . "=" . $this->prepareSQLValue( $fieldType, $value );
		}
		return $this->connection->comparisonSQL(
			$fieldExpr,
			$this->prepareSQLValue( $fieldType, $value ),
			$caseInsensitive === dsCASE_INSENSITIVE
		);
	}

	protected function sqlExpressionInList( $fieldType, $fieldExpr, $values, $all ) {
		if( !IsCharType( $fieldType ) )
		$fieldExpr = $this->connection->field2char( $fieldExpr, $fieldType );

		$conditions = array();
		foreach( $values as $v ) {
			$valueConds = array();
			$valueConds[] = $fieldExpr . " = " . $this->connection->prepareString( $v );
			$vp = $this->connection->escapeLIKEpattern( $v );
			$strV = $this->connection->addSlashes( $vp );
			$valueConds[] = $fieldExpr . " LIKE '%," . $strV . "'";
			$valueConds[] = $fieldExpr . " LIKE '" . $strV . ",%'";
			$valueConds[] = $fieldExpr . " LIKE '%," . $strV . ",%'";
			$conditions[] = "( " . implode( ' OR ', $valueConds ) . " )";
		}
		return implode( $all ? ' AND ' : ' OR ', $conditions );
	}

	protected function sqlExpressionIn( $fieldType, $fieldExpr, $values, $caseInsensitive ) {

		$sqlValues = array();
		$uppercase = IsCharType( $fieldType ) && $caseInsensitive == dsCASE_INSENSITIVE;
		foreach( $values as $v ) {
			$sqlValues[] = $uppercase
				? $this->connection->upper( $this->prepareSQLValue( $fieldType, $v ) )
				: $this->prepareSQLValue( $fieldType, $v );
		}
		if( $uppercase )
			$fieldExpr = $this->connection->upper( $fieldExpr );
		return $fieldExpr . ' IN ( '. implode( ', ', $sqlValues ) . ' )';
	}


	protected function sqlExpressionMore( $fieldType, $fieldExpr, $value, $caseInsensitive, $more ) {
		$operation = $more ? ' > ' : ' < ';
		$valueExpression = $this->prepareSQLValue( $fieldType, $value );
		if( IsCharType( $fieldType ) && $caseInsensitive === dsCASE_INSENSITIVE ) {
			if( !IsTextType( $fieldType ) || $this->connection->dbType == nDATABASE_MySQL ) {
				$fieldExpr = $this->connection->upper( $fieldExpr );
				//	use database uppercase instead of PHP strtoupper because of character set issues
				$valueExpression = $this->connection->upper( $valueExpression );
			}
		}
		return $fieldExpr . $operation . $valueExpression;
	}

	protected function sqlExpressionLike( $fieldType, $fieldExpr, $value, $caseInsensitive, $starts, $likeWrapper ) {
		if( !IsCharType( $fieldType ) )
			$fieldExpr = $this->connection->field2char( $fieldExpr, $fieldType );

		$likeWord = ( $this->connection->dbType == nDATABASE_PostgreSQL && $caseInsensitive === dsCASE_INSENSITIVE )
			? 'ilike'
			: 'like';

		if( IsNumberType( $fieldType ) ) {
			$value = str_replace(",", ".", $value);
		}
		$pattern = $this->connection->escapeLIKEpattern( $value )."%";
		if( !$starts )
			$pattern = "%".$pattern;

		if( $likeWrapper ) {
			$before = $this->connection->escapeLIKEpattern( $likeWrapper['before'] );
			$after = $this->connection->escapeLIKEpattern( $likeWrapper['after'] );

			if( !$starts && $before )
				$before = "%".$before;

			if( $after )
				$after = $after."%";

			$pattern = $before. $pattern .$after;
		}

		// file search [{ -->_{
		if( $this->connection->dbType == nDATABASE_Access )
			$pattern = str_replace( "[", "_", $pattern );

		$valueExpression = $this->connection->prepareString( $pattern );

		if( $caseInsensitive === dsCASE_INSENSITIVE && $this->connection->dbType != nDATABASE_PostgreSQL ) {
			$fieldExpr = $this->connection->upper( $fieldExpr );
			//	use database uppercase instead of PHP strtoupper because of character set issues
			$valueExpression = $this->connection->upper( $valueExpression );
		}
		return $fieldExpr . ' ' . $likeWord . ' ' . $valueExpression;
	}

	protected function sqlExpressionBetween( $fieldType, $fieldExpr, $value1, $value2, $caseInsensitive ) {
		$valueExpression1 = $this->prepareSQLValue( $fieldType, $value1 );
		$valueExpression2 = $this->prepareSQLValue( $fieldType, $value2 );
		if( IsCharType( $fieldType ) && $caseInsensitive === dsCASE_INSENSITIVE ) {
			if( !IsTextType( $fieldType ) || $this->connection->dbType == nDATABASE_MySQL ) {
				$fieldExpr = $this->connection->upper( $fieldExpr );
				//	use database uppercase instead of PHP strtoupper because of character set issues
				$valueExpression1 = $this->connection->upper( $valueExpression1 );
				$valueExpression2 = $this->connection->upper( $valueExpression2 );
			}
		}
		return $fieldExpr . ' BETWEEN ' . $valueExpression1 . ' AND ' . $valueExpression2;
	}

	/**
	 * Returns false when input value can't be interpreted as number or date
	 */
	protected function validateSQLValue( $type, $value ) {
		if( IsNumberType( $type ) ) {
			return is_numeric( str_replace(",", ".", $value) );
		}
		if( IsDateFieldType( $type ) ) {
			//	copied from add_db_quotes
			global $locale_info;
			$y = "(\d\d\d\d)";
			$m = "(0?[1-9]|1[0-2])";
			$d = "(0?[1-9]|[1-2][0-9]|3[0-1])";
			$delim = "(-|".preg_quote($locale_info["LOCALE_SDATE"], "/").")";
			$reg = "/".$d.$delim.$m.$delim.$y."|".$m.$delim.$d.$delim.$y."|".$y.$delim.$m.$delim.$d."/";
			return preg_match($reg, $value, $matches);
		}
		if( IsGuid( $type ) ) {
			return IsGuidString( $value );
		}
		// check time field value in PostgreSQL
		if( IsTimeType( $type ) && $this->connection->dbType == nDATABASE_PostgreSQL ) {
			return validTimeValue( localtime2db( $value ) ) ;
		}
		return true;
	}

	/**
	 * add proper quotes, escape, convert to number etc
	 * always returns string
	 */
	protected function prepareSQLValue( $type, $value ) {
		if( !DataSourceTable::validateSQLValue( $type, $value ) ) {
			return 'NULL';
		}
		if( IsNumberType( $type ) ) {
			return DB::prepareNumberValue( $value );
		}
		if( IsDateFieldType( $type ) ) {
			return $this->connection->addDateQuotes( $value );
		}

		if( IsBinaryType($type) )
			return $this->connection->addSlashesBinary( $value );

		return $this->connection->prepareString( $value );
	}

	/**
	 * $lhs > $rhs => positive number,
	 * $lhs < $rhs => negative number,
	 * $lhs = $rhs => 0
	 * @return Number
	 */
	public function versionCompare( $lhs, $rhs ) {
		$leftList = explode( ".", $lhs );
		$rightList = explode( ".", $rhs );
		$len = min( count( $leftList ), count( $rightList ) );
		for( $i = 0; $i < $len; $i++) {
			$diff = intval( $leftList[$i] ) - intval( $rightList[$i] );
			if( $diff != 0 ) {
				return $diff;
			}
		}
		return 0;
	}

	/**
	 * Checks if db type is MySQL v8.0.0+
	 * @return Boolean
	 */
	public function dbMysqlV8Higher() {
		return ( $this->connection->dbType == nDATABASE_MySQL 
				&& $this->versionCompare($this->connection->getVersion(), "8.0.0" ) >= 0 );
	}

	/**
	 * // #16133 Where condition to fix MySQL v8.0.0 Select bug
	 * return record count
	 * @return DsCondition
	 */
	public function getMysqlV8Filter() {
		$keyFields = $this->getKeyFields();
		$filterList = array();
		foreach( $keyFields as $field ) {
			$fieldType = $this->getFieldType( $field );
			$cmpValue = null;
			if( IsNumberType( $fieldType ) ) {
				$cmpValue = 0;
			} else if( IsCharType( $fieldType ) ) {
				$cmpValue = '';
			} else if( IsDateFieldType( $fieldType ) ) {
				$cmpValue = '1970-01-01 00:00:00';
			}

			if( $cmpValue !== null ) {
				$filterList[] = DataCondition::FieldIs( $field, dsopEMPTY, null );
				$filterList[] = DataCondition::FieldIs( $field, dsopMORE, $cmpValue );
				$filterList[] = DataCondition::FieldIs( $field, dsopEQUAL, $cmpValue );
				$filterList[] = DataCondition::FieldIs( $field, dsopLESS, $cmpValue );
				break;
			}
		}

		return DataCondition::_Or( $filterList );
	}

	/**
	 * 
	 * @return void
	 */
	private function clearDsCommandCache( $dc ) {
		unset( $dc->_cache["overridden"] );
		unset( $dc->_cache["where"] );
		unset( $dc->_cache["sql"] );
	}

	/**
	 * return record count
	 * @return number
	 */
	public function getCount( $dc ) {
		// #16133 MySQL v8.0.0+ -> update select where condition
		//	don't modify WHERE of the user has already modified it in the event
		if( !$dc->_cache["overriden"] && $this->dbMysqlV8Higher() ) {
			$filterCopy = $dc->filter;
			$dc->filter = DataCondition::_And( array( $dc->filter, $this->getMysqlV8Filter() ) );
			$this->clearDsCommandCache( $dc );
			$sql = $this->buildSQL( $dc, false );
			$this->clearDsCommandCache( $dc );
			$dc->filter = $filterCopy;
		} else {
			$sql = $this->buildSQL( $dc, false );
		}
		
		return $this->connection->getFetchedRowsNumber( $sql );
	}

	/**
	 * returns recordset or array
	 */
	public function getList( $dc ) {
		$sql = $this->buildSQL( $dc, true );
		return $this->connection->limitedQuery( $sql, $dc->startRecord, $dc->reccount, true );
	}

	/**
	 * @return Array
	 * 		return array(
	 *		"head" => $this->HeadToSql( $oneRecordMode ),
	 *		"from" => $this->FromToSql(),
	 *		"where" => $this->WhereToSql(),
	 *		"groupby" => $this->GroupByToSql(),
	 *		"having" => $this->Having()->toSql($this)
	 *	);
	 *
	 */
	protected function getSQLComponents() {
		trigger_error("Unsupported datasource", E_USER_ERROR );
		return array();
	}

	/**
	 * @param DsCommand dc
	 * @param Boolean addOrder
	 * @param String replaceFieldList - when not empty replace everything between SELECT and FROM
	 * @return String
	 */
	protected function buildSQL( $dc, $addOrder, $replaceFieldList = "" ) {
		if( !isset( $dc->_cache["sql"] ) ) {

			$sqlParts = $this->getSQLComponents();

			$whereClause = $this->getWhereClause( $dc );
			$havingClause = $this->getHavingClause( $dc );

			//	add joins
			$context = $dc->_cache["context"];
			if( $context->joins ) {
				$sqlParts["from"] .= ' ' . implode( ' ', $context->joins );
			}
			if( $replaceFieldList ) {
				$sqlParts["head"] = "SELECT " . $replaceFieldList;
			}
			//	add extra columns
			if( $dc->extraColumns ) {
				$extras = array();
				foreach( $dc->extraColumns as $ec ) {
					$extras[] = $this->extraColumnExpression( $ec );
				}
				$sqlParts["head"] .= ', ' . implode( ', ', $extras );
			}
			//	extra columns from context
			if( $context->extraColumnSQL ) {
				$sqlParts["head"] .= ', ' . implode( ', ', $context->extraColumnSQL );
			}

			$dc->_cache["sql"] = SQLQuery::buildSQL(
				$sqlParts,
				array( $whereClause ),
				array( $havingClause )
			);
		}
		$sql = $dc->_cache["sql"];
		if( $addOrder ) {
			$sql .=  $this->getOrderClause( $dc );
		}
		return $sql;

	}

	/**
	 * SQL expression for extra column
	 * @param DsFieldData
	 * @return String
	 */
	protected function extraColumnExpression( $column ) {


		if( $column->sql )
		{
			$expression = $column->sql;
		}
		else
		{
			//	use $column->field
			$columnExpression = $this->fieldExpression( $column->field, $column->modifier );
			if( $column->joinData )
			{
				$expression = $this->getJoinedSubquery( $column->joinData, $columnExpression, $this->getFieldType( $column->field ), null, "", true );
			}
			if( $expression != '' ) {
				// brace the subquery
				$expression = "( " . $expression . " )";
			} else {
				//	no joinData specified or not supported
				$expression = $columnExpression;
			}
		}

		if( $column->alias ) {
			return $expression . ' AS ' . $this->connection->addFieldWrappers( $column->alias );
		} else {
			return $expression;
		}

	}

	/**
	 * Returns expression to use in SQL query
	 * It is overridden in DataSourceProjectTable to accomodate for encryption
	 */
	protected function fieldExpression( $field, $modifier = 0 ) {
		$fieldExpr = $this->connection->addFieldWrappers( $field );
		return $this->applyFieldModifier( $fieldExpr, $this->getFieldType($field), $modifier );
	}

	/**
	 * returns number of records in request with totals
	 * See DsCommand::totals description
	 * @return Integer
	 */
	public function getTotalCount( $dc ) {
		$sql = "SELECT COUNT(*) from ( " . $this->getTotalsSQL( $dc, true ) . " ) a";
		$result =  $this->connection->query( $sql );
		if( !$result ) {
			return 0;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return 0;
		}
		return $data[0];
	}

	/**
	 * @param DsCommand
	 * @param Boolean
	 */
	protected function getTotalsSQL( $dc, $addOrder ) {
		$baseSQL = $this->buildSQL( $dc, false );
		$selectList = array();
		$groupList = array();
		$whereList = array();
		$orderList = array();
		foreach( $dc->totals as $idx => $t ) {
			$f = $this->sqlTotalField( $dc, $t );

			if( $f === false ) {
				//	don't do the query
				return false;
			}
			$aliasClause = $t["alias"]
				? (' AS ' . $this->connection->addFieldWrappers( $t["alias"] ) )
				: "";

			$selectList[] = $f . $aliasClause;

			if( $t["direction"] ) {
				$orderList[] = ($idx + 1) . ( $t["direction"] == "ASC" ? " ASC" : " DESC" );
			}

			if( !$t["total"] ) {
				$groupList[] = $f;
			}

			if( $t["skipEmpty"] ) {
				$whereList[] = "( NOT ( " . $this->sqlExpressionEmpty(
					$this->getFieldType( $t["field"] ),
					$this->connection->addFieldWrappers( $t["field"] )
				) . " ) )";
			}
		}
		$groupbyClause = implode( ',', $groupList );
		if( count( $groupList ) ) {
			$groupbyClause = " GROUP BY " . $groupbyClause;
		}
		$whereClause = implode( ' AND ', $whereList );
		if( count( $whereList ) ) {
			$whereClause = " WHERE " . $whereClause;
		}
		$distinct = $this->totalDistinct( $dc )
			? "DISTINCT "
			: "";
		$sql = "SELECT " . $distinct . implode( ',', $selectList ) . ' FROM ( ' . $baseSQL . ' ) a ' . $whereClause . $groupbyClause;

		if( $addOrder ) {
			$order = implode( ", ", $orderList );
			if( $order ) {
				$sql .= " ORDER BY " . $order;
			}
		}
		return $sql;
	}
	/**
	 * returns result with group totals
	 * See DsCommand::totals description
	 */
	public function getTotals( $dc ) {
		$sql = $this->getTotalsSQL( $dc, true );
		if( !$sql ) {
			return new ArrayResult( array() );
		}
		return $this->connection->limitedQuery( $sql, $dc->startRecord, $dc->reccount, true );
	}

	/**
	 * Whether the column is COUNT, SUM, MIN, MAX, AVG in the original SQL query
	 * @return Boolean
	 */
	protected function isAggregateField( $field ) {
		return false;
	}

	/**
	 * Check if the total query should include DISTINCT
	 */
	protected function totalDistinct( $dc ) {
		foreach( $dc->totals as $total ) {
			//	all fields must be "distinct"
			if( $total["total"] != "distinct" )
				return false;

			//	some field types in some databases don't support DISTINCT
			$fType = $this->getFieldType( $total["field"] );
			if( IsTextType( $fType ) &&
				( 	$this->connection->dbType == nDATABASE_MSSQLServer
					|| $this->connection->dbType == nDATABASE_Access
					|| $this->connection->dbType == nDATABASE_Oracle )
				) {
				return false;
			}

			//	don't do search suggest for aggregated fields
			if( $dc->skipAggregated && $total["total"] == "distinct" && $this->isAggregateField( $total[ "field" ] ) ) {
				return false;
			}
		}
		return true;

	}

	protected function sqlTotalField( $dc, $total ) {

		if( $dc->skipAggregated && $total["total"] == "distinct" && $this->isAggregateField( $total[ "field" ] ) ) {
			//	don't do search suggest for aggregated fields
			return false;
		}

		if( $total["timeToSec"] ) {
			$expr = $this->connection->timeToSecWrapper( $total["field"] );
		} else {
			/**
			 *  $total["field"] comes from subquery. $his->fieldExpression is not needed here
			 */
			$expr = $this->connection->addFieldWrappers( $total["field"] );
		}


		if( $total["total"] == "distinct" ) {
			//	substitute original field with the joined display field
			//	it happens with search suggest
			$context = $dc->_cache["context"];
			if( $context ) {
				if( isset( $context->joinedAliases[ $total[ "field" ] ] ) ) {
					$expr = $this->connection->addFieldWrappers( $context->joinedAliases[ $total[ "field" ] ] );
				}
			}
			return $expr;
		}

		if( $total["total"] ) {
			if( $total["total"] == 'count' && !$total["field"] ) {
				$expr = '1';
			}

			if( $total["caseStatement"] ) {
				$expr = $this->getCaseStatement( $total["caseStatement"] );
			}

			return strtoupper( $total["total"] ) . "( " . $expr . " )";
		}

		$ftype = $this->getFieldType( $total["field"] );
		return $this->applyFieldModifier( $expr, $ftype, $total["modifier"] );
	}

	/**
	 * Build SQL for DsOperand used in totals
	 * @param DsOperand
	 * @return String
	 */
	protected function totalOperandSQL( $op ) {
		if( $op ) {
			if( $op->type == dsotFIELD )
				return $this->connection->addFieldWrappers( $op->value );
			else if( $op->type == dsotCONST )
				return $op->value;
		}
		return 'NULL';

	}

	/**
	 * Build SQL CASE expression.
	 * @param DsCaseExpression
	 * @return String
	 */
	protected function getCaseStatement( $caseExpr ) {

		$sqlCases = array();
		$tail = "";
		$context = new DsFilterBuildContext;
		//	use column names instead of original expressions
		$context->useSubquery = true;

		foreach( $caseExpr->conditions as $idx => $condition ) {
			$sqlCondition = $this->conditionToSQL( $condition, $context );
			$sqlValue = $this->totalOperandSQL( $caseExpr->values[ $idx ] );
			if( $this->connection->dbType == nDATABASE_Access ) {
				$sqlCases[] = "IIF( " . $sqlCondition . ", " . $sqlValue . ",";
				$tail .= ")";
			} else {
				$sqlCases[] = "WHEN " . $sqlCondition . " THEN " . $sqlValue;
			}
		}
		$sqlDefault = $this->totalOperandSQL( $caseExpr->defValue );
		if( $this->connection->dbType == nDATABASE_Access ) {
			return implode( ' ', $sqlCases ) . ' ' . $sqlDefault . $tail;
		} else {
			return "( CASE " . implode( ' ', $sqlCases ) . ' ELSE ' . $sqlDefault . ' END )';
		}
	}

	protected function applyFieldModifier( $expr, $ftype, $modifier ) {
		if( IsNumberType($ftype) ) {
			$expr = $this->connection->intervalExpressionNumber( $expr, $modifier );
		} else if( IsCharType( $ftype ) ) {
			$expr = $this->connection->intervalExpressionString( $expr, $modifier );
		} else if( IsDateFieldType( $ftype ) ) {
			$expr = $this->connection->intervalExpressionDate( $expr, $modifier );
		}
		return $expr;

	}


	public function delete( $keys ) {

	}

	public function getSingle( $dc ) {
		$sql = $this->buildSQL( $dc, true );
		return $this->connection->limitedQuery( $sql, 0, 1, true );
	}


	protected function dbTableName() {
		return $this->_name;
	}



	public function getNextPrevKeys($dc, &$data, $what = BOTH_RECORDS)
	{
		$nextPrevComponents = $this->getNextPrevComponents($dc, $data);
		if (!$nextPrevComponents)
			return array();

		$baseSQL = $this->buildSQL($dc, false);
		$keysFields = array();

		$next = array();
		$prev = array();

		foreach ($this->getKeyFields() as $i => $k) {
			$keysFields[] = $this->connection->addFieldWrappers($k);
		}

		$sql = "select " . implode(',', $keysFields) . " from ( " . $baseSQL . " ) a ";

		//	next record
		if ($what == BOTH_RECORDS || $what == NEXT_RECORD) {
			$strSQL = $sql;
			if (strlen($nextPrevComponents["nextWhere"]))
				$strSQL .= "where " . $nextPrevComponents["nextWhere"];
			if (strlen($nextPrevComponents["nextOrder"]))
				$strSQL .= "order by " . $nextPrevComponents["nextOrder"];
			$rs = $this->connection->limitedQuery($strSQL, 0, 1, true);
			if ($rs)
				$next = $rs->fetchNumeric();
		}
		//	prev record
		if ($what == BOTH_RECORDS || $what == PREV_RECORD) {
			$strSQL = $sql;
			if (strlen($nextPrevComponents["prevWhere"]))
				$strSQL .= "where " . $nextPrevComponents["prevWhere"];
			if (strlen($nextPrevComponents["prevOrder"]))
				$strSQL .= "order by " . $nextPrevComponents["prevOrder"];
			$rs = $this->connection->limitedQuery($strSQL, 0, 1, true);
			if ($rs)
				$prev = $rs->fetchNumeric();
		}
		return array("next" => $next, "prev" => $prev);
	}

	protected function getNextPrevComponents($dc, &$data)
	{
		if ( !$dc->order )
			return array();

		$nextWhere = null;
		$prevWhere = null;
		$nextOrder = array();
		$prevOrder = array();

		for ($i = count($dc->order) - 1; $i >= 0; --$i) {
			$of = $dc->order[$i];
			$column = $of["column"];
			$sqlColumn = $this->connection->addFieldWrappers($column);

			$nextOrder[] = $sqlColumn . ' ' . $of["dir"];
			$prevOrder[] = $sqlColumn . ' ' . ($of["dir"] == "ASC" ? "DESC" : "ASC");

			// Build this sort of exporessions:
			// field1 > x or field1 = x and ( field2 > y or field2=y and ( field3 ... ) )
			if ($i < count($dc->order) - 1) {
				$equal = DataCondition::FieldEquals($column, $data[$column]);
				$nextWhere = $nextWhere ? DataCondition::_And(array($equal, $nextWhere)) : $equal;
				$prevWhere = $prevWhere ? DataCondition::_And(array($equal, $prevWhere)) : $equal;
			}

			$next = DataCondition::FieldIs($column, $of["dir"] == "DESC" ? dsopLESS : dsopMORE, $data[$column]);
			$prev = DataCondition::FieldIs($column, $of["dir"] == "DESC" ? dsopMORE : dsopLESS, $data[$column]);

			$nextWhere = DataCondition::_Or(array($next, $nextWhere));
			$prevWhere = DataCondition::_Or(array($prev, $prevWhere));
		}

		$context = new DsFilterBuildContext;
		$context->useSubquery = true;
		return array(
			"nextWhere" => $this->conditionToSQL($nextWhere, $context),
			"prevWhere" => $this->conditionToSQL($prevWhere, $context),
			"nextOrder" => implode(", ", array_reverse($nextOrder)),
			"prevOrder" => implode(", ", array_reverse($prevOrder))
		);
	}

	/**
	 * probably deprecated
	 *
	 * @param String fieldExpression - original field expression
	 * @param DsOperand fieldOperand - parameter dsotFIELD type operand with non-empty joinData
	 * @param DsFilterBuildContext context
	 * @return String|Boolean - returns new field expression or false if nothing's changed
	 */
	protected function createJoinedExpression( $field, $fieldExpr, $fieldOperand, $context ) {
		$jd = $fieldOperand->joinData;
		if( !$this->acceptJoinData( $jd ) ) {
			return false;
		}
		$joinQuery = $jd->dataSource->getJoinedQuery( $fieldExpr, $fieldOperand, $this->getFieldType( $field ) );
		if( !$joinQuery ) {
			return false;
		}
		$context->joins[] = $joinQuery["join"];
		if( $jd->displayAlias ) {
			$context->extraColumnSQL[] = $joinQuery["column"] . " AS " . $this->connection->addFieldWrappers( $jd->displayAlias );
			$context->joinedAliases[ $field ] = $jd->displayAlias;
		}
		return $joinQuery["column"];
	}

	/**
	 * Returns false when the join data can not be processed in this datasource
	 * @param DsJoinData jd
	 * @return Boolean
	 */
	protected function acceptJoinData( $jd ) {
		if( !$jd->dataSource->tableBased() || $jd->dataSource->getConnectionId() !== $this->getConnectionId() ) {
			return false;
		}
		if( $this->connection->dbType == nDATABASE_Access ) {
			//	just leave it
			return false;
		}
		if ( $jd->longList && !$this->connection->checkIfJoinSubqueriesOptimized() ) {
			//	too slow
			return false;
		}
		return true;
	}


	/**
	 * returns subquery with isolated field names
	 * SELECT displayAlias FROM (
	 *   SELECT <link field> as linkAlias, <display field> as displayAlias from (original joined SQL query) b
	 * ) a WHERE linkAlias=<fieldExpression> AND $condition
	 *
	 * @param DsJoinData $jd
	 * @param String $mainFieldExpr - SQL expression for the main field the link field should be linked against.
	 * @param DsCondition $condition - additional filter condition, to be glued to link expression with AND
	 * @param String $tableAlias - second query alias. Autogenerated if not specified
	 * @param Boolean $oneRow - forces subquery to return exactly one row, so it can be used in the select list:
	 * 							SELECT (subquery) as alias
	 * @return string
	 */
	protected function getJoinedSubquery( $jd, $mainFieldExpr, $mainFieldType, $condition = null, $tableAlias = "", $oneRow = false ) {
		if( !$this->acceptJoinData( $jd ) ) {
			return "";
		}

		//	prepare inner tier, the original SQL with display field expression added if needed
		$innerDc = new DsCommand;
		if( $jd->displayExpression ) {
			$displayColumn = generateAlias();
			$innerDc->extraColumns[] = new DsFieldData( $jd->displayExpression, $displayColumn, "" );
		} else {
			$displayColumn = $jd->displayField;
		}
		$innerSQL = $jd->dataSource->buildSQL( $innerDc, false );

		//	prepare second tier, isolate inner field names from outer ones
		$linkAlias =  generateAlias();
		$secondSQL = "SELECT "
			. $this->wrap( $jd->linkField ) . " AS " . $this->wrap( $linkAlias ) . ", "
			. $this->wrap( $displayColumn ) . " AS " . $this->wrap( $jd->displayAlias )
			. " FROM ( ". $innerSQL . " ) a ";

		if( $linkFieldExpr == "" ) {
			$linkFieldExpr = $this->fieldExpression( $jd->linkField );
		}

		//	prepare tables link condition
		$linkFieldType = $jd->dataSource->getFieldType( $jd->linkField );
		$linkFieldExpr = $this->wrap( $linkAlias );
		//	convert both to char if different types
		if( IsCharType( $linkFieldType ) != IsCharType( $mainFieldType ) ) {
			if( IsCharType( $linkFieldType ) ) {
				$mainFieldExpr = $this->connection->field2char( $mainFieldExpr );
			} else {
				$linkFieldExpr = $this->connection->field2char( $linkFieldExpr );
			}
		}
		$fullCondition = DataCondition::_And( array(
			$condition,
			DataCondition::SQLCondition( $linkFieldExpr . " = " . $mainFieldExpr )
		));

		$sqlCondition = $jd->dataSource->conditionToSQL( $fullCondition, new DsFilterBuildContext );

		$tableAlias = $tableAlias == ""
			? generateAlias()
			: $tableAlias;

		$returnExpression = $this->wrap( $jd->displayAlias );
		if( $oneRow ) {
			$returnExpression = "MIN( " . $returnExpression . " )";
		}

		$thirdSQL = "SELECT " . $returnExpression . " FROM "
			. "( " . $secondSQL ." ) ". $this->wrap( $tableAlias )
			. " WHERE " . $sqlCondition;

		return $thirdSQL;
	}

	/**
	 * Creates SQL expression in the form
	 * EXISTS( SELECT displayAlias FROM (
	 *   SELECT <link field> as linkAlias, <display field> as displayAlias from (original joined SQL query) b
	 * ) a WHERE linkAlias=<fieldExpression> and displayAlias<filterExpression>)
	 * The second subquery tier is needed to isolate link and display field names from
	 * @param String fieldExpression - original field expression

	 * @return String - SQL logical expression to be included into search
	 */
	protected function createJoinedSearchClause( $field, $fieldExpr, $dCondition ) {
		$fieldOperand = $dCondition->operands[0];
		$valueOperand = $dCondition->operands[1];
		$jd = $fieldOperand->joinData;
		if( !$this->acceptJoinData( $jd ) ) {
			return "";
		}

		//	prepare  filtering condition
		$tableAlias = generateAlias();
		$displayOperand = new DsOperand(
			dsotSQL,
			$this->wrap( $tableAlias ) . '.' . $this->wrap( $jd->displayAlias ),
			0,
			null,
			null,
			true	//	tochar. Assume we won't get here unless the display field is searched as a char
		);
		$jCondition = new DsCondition(
			array( $displayOperand, $valueOperand ),
			$dCondition->operation,
			$dCondition->caseInsensitive );

		//	gnerate SQL query
		$subQuery = $this->getJoinedSubquery( $jd, $fieldExpr, $this->getFieldType( $field ), $jCondition, $tableAlias );
		return "EXISTS( " . $subQuery . " )";

	}

	public function tableBased() {
		return true;
	}

	/**
	 * probably deprecated
	 *
	 * @param String fieldExpression - original field expression
	 * @param DsOperand fieldOperand - parameter dsotFIELD type operand with non-empty joinData
	 * @param Integer fieldType - database type of $fieldExpr
	 * @return false | Array(
	 *		"join" => LEFT JOIN expression
	 *		"column" => expression to use in the WHERE clause
	 *	)
	 */
	protected function getJoinedQuery( $fieldExpr, $fieldOperand, $fieldType ) {

		$jd = $fieldOperand->joinData;
		$dc = new DsCommand;

		$tableAlias = generateAlias();
		$linkAlias =  generateAlias();
		$displayAlias =  generateAlias();

		$dc->totals[] = array(
			"alias" => $linkAlias,
			"field" => $jd->linkField,
			"caseInsensitive" => dsCASE_DEFAULT
		);

		$dispFieldTotal = array(
			"alias" => $displayAlias,
			"total" => "min"
		);
		if( $jd->displayExpression ) {
			$dispFieldTotal["field"] = generateAlias();
			$dc->extraColumns[] = new DsFieldData( $jd->displayExpression, $dispFieldTotal["field"], "" );
		} else {
			$dispFieldTotal["field"] = $jd->displayField;
		}
		$dc->totals[] = $dispFieldTotal;

		$sql = $this->getTotalsSQL( $dc, false );

		$column = $this->connection->addFieldWrappers( $tableAlias ) . "." . $this->connection->addFieldWrappers( $displayAlias );


		$joinLinkExpr = $this->connection->addFieldWrappers( $linkAlias );
		//	in MySQL 0 == 'xxx' is true. Avoid record multiplication
		if( IsCharType( $fieldType ) !== IsCharType( $this->getFieldType( $jd->linkField ) ) ) {
			if( IsCharType( $fieldType ) ) {
				$joinLinkExpr = $this->connection->field2char( $joinLinkExpr );
			} else {
				$fieldExpr = $this->connection->field2char( $fieldExpr );
			}
		}

		$join =  "LEFT JOIN (" . $sql . ") ". $this->connection->addFieldWrappers( $tableAlias )
			." ON " . $joinLinkExpr . " = ".$fieldExpr;
		return array(
			"join" => $join,
			"column" => $column
		);
	}
	public function lastError() {
		return $this->connection->lastError();
	}

	/**
	 * NOT USED! delete
	 * Get multiple field values,
	 * @param DsFieldData - field description
	 * @param DsCommand
	 * @return QueryResult
	 */
	public function getFieldValues( $field, $dc ) {
		$sql = $this->buildSQL( $dc, false, $this->extraColumnExpression( $field ) );
		return $this->connection->limitedQuery( $sql, $dc->startRecord, $dc->reccount, true );
	}

	protected function getColumnCount() {
		return 0;
	}

	protected function encryptField( $field, $value ) {
		return $value;
	}

	public function wrap( $str ) {
		return $this->connection->addFieldWrappers( $str );
	}

	public function updateRowNumberAvailable( $dc ) {
		return $this->connection->dbType == nDATABASE_MSSQLServer && $dc->order
			|| $this->connection->dbType == nDATABASE_MySQL
			|| $this->connection->dbType == nDATABASE_PostgreSQL
			|| $this->connection->dbType == nDATABASE_Oracle && $dc->order ;
	}

	public function updateRowNumber( $dc, $startNumber = 0 ) {
		$orderByClause = $this->getOrderClause( $dc, true );
		$queryAlias = $this->wrap( generateAlias() );
		$rownoAlias = $this->wrap( generateAlias() );

		$table = $this->connection->addTableWrappers( $this->dbTableName() );
		$keys = array_keys( $dc->advValues );
		$orderField = $this->wrap( $keys[0] );

		$orderWhere = $this->getWhereClause( $dc );
		$orderWhere = $orderWhere ? " WHERE ". $orderWhere : "";

		if( $this->connection->dbType == nDATABASE_MSSQLServer ) {
			$overClause = "OVER( ". $orderByClause . ")";

			$sql = "UPDATE " . $queryAlias . " SET " . $queryAlias . "." . $orderField . " = " . $queryAlias . "." . $rownoAlias ."+". $startNumber
				. " FROM ( SELECT " . $orderField . ", ROW_NUMBER() " . $overClause . " AS ". $rownoAlias
				. " FROM " . $table . $orderWhere ." ) " . $queryAlias;
			$this->connection->exec( $sql );

		} else if( $this->connection->dbType == nDATABASE_MySQL ) {
			$sqls[] = "SET @rowno:=". $startNumber .";";
			$sqls[] = "UPDATE " . $table . " SET " . $orderField . " = @rowno := @rowno + 1 " . $orderWhere . ' ' . $orderByClause . ";";
			$this->connection->execMultiple( $sqls );

		} else if( $this->connection->dbType == nDATABASE_Oracle ) {
			$overClause = "OVER( ". $orderByClause . ")";

			$keyFieldsWhere = array();
			foreach( $this->getKeyFields() as $i => $k ) {
				$keyName = $this->wrap( $k );
				$keysFields[] = $keyName;
				$keyFieldsWhere[] = $queryAlias.".".$keyName."=".$table.".".$keyName;
			}

			$sql = "UPDATE ".$table." SET ". $orderField."=( SELECT " . $rownoAlias ." + ". $startNumber." FROM ( select ".
				implode(', ', $keysFields).", ROW_NUMBER() ".$overClause." AS " . $rownoAlias ." FROM "
				. $table ." ". $orderWhere." ) ".$queryAlias." WHERE ". implode('AND ', $keyFieldsWhere).") ". $orderWhere;

			$this->connection->exec( $sql );
		} else if( $this->connection->dbType == nDATABASE_PostgreSQL ) {
			$overClause = $orderByClause
				? "OVER( ". $orderByClause . ")"
				: "OVER()";

			$keyFieldsWhere = array();
			foreach( $this->getKeyFields() as $i => $k ) {
				$keyName = $this->wrap( $k );
				$keysFields[] = $keyName;
				$keyFieldsWhere[] = $queryAlias.".".$keyName."=".$table.".".$keyName;
			}

			$sql = "UPDATE ".$table." SET ". $orderField ." = ". $queryAlias .".". $rownoAlias ."+". $startNumber
				. " FROM ( SELECT ". implode(', ', $keysFields).",". $orderField . ", ROW_NUMBER() " . $overClause . " AS ". $rownoAlias
				." FROM " . $table . $orderWhere. " ) " . $queryAlias." WHERE ". implode('AND ', $keyFieldsWhere);

			$this->connection->exec( $sql );
		}
	}

	/**
	 * save prepared SQL parts into
	 * $dc->_cache["sqlValues"]
	 * $dc->_cache["blobs"]
	 * $dc->_cache["blobTypes"]
	 */
	protected function prepareInsertValues( $dc ) {
		$values = $dc->values;
		$sqlValues = array();
		$blobs = array();
		$blobTypes = array();
		$this->makeAdvancedValues( $dc );
		foreach( $dc->advValues as $field => $valueOp)
		{
			$sqlField = $this->getUpdateFieldSQL( $field );
			if( $valueOp->type === dsotCONST ) {
				if ( is_null( $valueOp->value ) || $this->insertNull( $field ) && trim( $valueOp->value ) === "" )
				{
					$sqlValues[ $sqlField ] = "NULL";
				} else if( $sqlValue = $this->prepareBlob( $field, $valueOp->value, $blobs, $blobTypes ) ) {
					$sqlValues[ $sqlField ] = $sqlValue;
				} else
				{
					$sqlValues[ $sqlField ] = $this->prepareInsertSQLValue( $field, $valueOp->value );
				}
			} else if( $valueOp->type === dsotSQL ) {
				$sqlValues[ $sqlField ] = $valueOp->value;
			} else if( $valueOp->type === dsotFIELD ) {
				//	probably not the best way
				//	currently used for reorderRowsField only
				$sqlValues[ $sqlField ] = $this->getUpdateFieldSQL( $valueOp->value );
			}
		}

		$dc->_cache["sqlValues"] = &$sqlValues;
		$dc->_cache["blobs"] = &$blobs;
		$dc->_cache["blobTypes"] = &$blobTypes;
	}

	/**
	 * 	@return String
	 */
	protected function getUpdateFieldSQL( $field )
	{
		return $this->connection->addFieldWrappers($field);
	}

	/**
	 * Returns true when empty string should be interpreted as NULL in insert/update operations
	 * @return Boolean
	 */
	protected function insertNull( $field )
	{
		return false;
	}


	/**
	 * Returns SQL substitution if the field is BLOB and needs special processing.
	 * @return String or null
	 */
	protected function prepareBlob( $field, &$value, &$blobs, &$blobTypes ) {
		if( !IsBinaryType( $this->getFieldType( $field ) ) )
			return false;

		global $projectLanguage;

		if( $projectLanguage == "php" ) {
			if( $this->connection->dbType == nDATABASE_Oracle
				|| $this->connection->dbType == nDATABASE_DB2
				|| $this->connection->dbType == nDATABASE_Informix ) {

				$blobKey = $field;
				if( $this->connection->dbType == nDATABASE_Oracle ) {
					$blobKey = $this->getUpdateFieldSQL( $field );
				}
				$blobs[ $blobKey ] = $value;
				$blobTypes[ $blobKey ] = $this->getFieldType( $field );

				$blobExpression = $this->connection->dbType == nDATABASE_Oracle
					? "EMPTY_BLOB()"
					: "?";
				return $blobExpression;
			}
		} else if( $projectLanguage == "aspx" ) {
			if( $this->connection->dbType == nDATABASE_Oracle 
				|| $this->connection->dbType == nDATABASE_DB2 ) {

				$blobAlias = "bnd" . ( count( $blobs ) + 1 );
				$blobKey = $blobAlias;
				if( $this->connection->dbType == nDATABASE_Oracle ) {
					$blobKey = $this->getUpdateFieldSQL( $field );
				}
				$blobs[ $blobKey ] = $value;
				$blobTypes[ $blobKey ] = $this->getFieldType( $field );

				$blobExpression = $this->connection->dbType == nDATABASE_Oracle
					? ":" . $blobAlias
					: "?";
				return $blobExpression;
			}
		} else {
			//	nothing for ASP?
		}
		return null;
	}

	/**
	 * properly formats value for SQL.
	 * Differs from prepareSQLValue only when encryption is enabled.
	 * prepareInsertSQLValue encrypts values, while prepareSQLValue not.
	 * in a statment 
	 * UPDATE x=xvalue where y=yvalue
	 * xvalue should be prepared with prepareInsertSQLValue and yvalue - with prepareSQLValue.
	 */
	function prepareInsertSQLValue( $field, $value ) {
		
		$fieldType = $this->getFieldType( $field );
		return $this->prepareSQLValue( $fieldType, $value );

	}

	public function silentMode( $mode ) {
		$this->connection->setSilentMode( $mode );
	}



}

class DsFilterBuildContext {
	/**
	 * <join SQL clause>
	 * @var Array of strings
	 */
	public $joins = array();

	/**
	 * additional columns, to be added as is to SQL query
	 * @var Array
	 */
	public $extraColumnSQL = array();
	/**
	 * displayFieldAliases
	 * @var Array
	 * Associative array of display field aliases
	 * "<field>" => "<display field alias>"
	 */
	public $joinedAliases = array();

	/**
	 * @var Boolean
	 * The original query is inside a subquery, but this condition is outside.
	 * Ought to use column names instead of full field expressions when true
	 */
	public $useSubquery = false;
}

require_once( getabspath( 'classes/sql.php') );

?>