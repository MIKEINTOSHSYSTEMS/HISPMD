<?php


function create_reportfield($name, $type, $interval, $alias, $table, $connection, $cipherer)
{
	if( !$type )
		return;

	if( $type == 'char' )
		return new ReportCharField( $name, $interval, $alias, $table, $connection, $cipherer );

	if( $type == 'date' )
		return new ReportDateField( $name, $interval, $alias, $table, $connection, $cipherer );

	if( $type == 'numeric' )
		return new ReportNumericField( $name, $interval, $alias, $table, $connection, $cipherer );

	die('Unsupported group field type: `'.$type.'`');
}

class ReportField
{
	var $_interval = 0;
	var $_tName = '';
	var $_name = '';
	var $_alias = '';
	var $_sqlname = '';
	var $_start = 0;
	var $_caseSensitive = false;
	var $_recordBasedRequest = false;
	var $_rowsInSummary = 0;
	var $_rowsInHeader = 0;
	var $_viewFormat = '';
	var $_oldAlgorithm = false;
	// Instance of ProjectSettings
	var $pSet = null;

	var $cipherer = null;

	/**
	 * @type Connection
	 */
	var $_connection;

	function __construct($name, $interval, $alias, $table, $connection, $cipherer)
	{
		$this->_name = $name;
		$this->_interval = $interval;
		$this->_alias = $alias;
		$this->_sqlname = $alias;
		$this->_tName = $table;
		$this->_connection = $connection;
		$this->cipherer = $cipherer;
		if($table != '')
			$this->pSet = new ProjectSettings($table);
	}


	
	function getFieldName($fieldValue, $data = null, $pageObject = null ) { die; }

	
	function getGroup($data)
	{
		return $data[$this->alias()];
	}

	
	function getKey($data)
	{
		return $data[$this->alias()];
	}

	
	function setStart($start)
	{
		$this->_start = $start;
		$this->_sqlname = $this->alias();
		return $start + 1;
	}

	
	function name()
	{
		return $this->_name;
	}

	
	function alias()
	{
		return $this->_alias . $this->_start;
	}

	
	function overrideFormat()
	{
		return false;
	}

	function setCaseSensitive($cs)
	{
		$this->_caseSensitive = $cs;
	}
}


class ReportNumericField extends ReportField
{
	function __construct($name, $interval, $alias, $table, $connection, $cipherer)
	{
		parent::__construct($name, $interval, $alias, $table, $connection, $cipherer);
	}

	function getFieldName( $fieldValue, $data = null, $pageObject = null )
	{
		$value = $data[$this->_recordBasedRequest ? $this->_name : $this->_sqlname];
		if($value === null)
			return 'NULL';
		if($this->_interval > 0) {
			$start = DataSource::groupValueNumber( $value, $this->_interval );
			return $start . ' - ' . ( $start + $this->_interval - 1 );
		}
		else
			return $value;
	}

	function getKey($data)
	{
		if($this->_recordBasedRequest)
		{
			if($this->_interval > 0)
				return DataSource::groupValueNumber( $data[$this->_name], $this->_interval );
			else
				return $data[$this->_name];
		}
		else
			return ReportField::getKey($data);
	}

}


class ReportCharField extends ReportField
{
	function __construct($name, $interval, $alias, $table, $connection, $cipherer)
	{
		parent::__construct($name, $interval, $alias, $table, $connection, $cipherer);
	}

	function getFieldName($fieldValue, $data = null, $pageObject = null )
	{
		$value = $data[$this->_recordBasedRequest ? $this->_name : $this->_sqlname];
		if($value === null)
			return 'NULL';
		if($this->_interval > 0)
	        return substr($value, 0, $this->_interval);
		else
			return $value;
	}

	function getKey($data)
	{
		if($this->_recordBasedRequest)
		{
			if($this->_interval > 0)
			{
				if($this->_caseSensitive)
					return substr($data[$this->_name], 0, $this->_interval);
				else
					return strtolower(substr($data[$this->_name], 0, $this->_interval));
			}
			else
			{
				if($this->_caseSensitive)
					return $data[$this->_name];
				else
					return strtolower($data[$this->_name]);
			}
		}
		else
		{
			if($this->_caseSensitive)
				return $data[$this->alias()];
			else
				return strtolower($data[$this->alias()]);
		}
	}

}


class ReportDateField extends ReportField
{
	function __construct($name, $interval, $alias, $table, $connection, $cipherer)
	{
		parent::__construct($name, $interval, $alias, $table, $connection, $cipherer);
	}

	function getFieldName($fieldValue, $data = null, $pageObject = null )
	{
		global $locale_info;

		$value = $data[ $this->_recordBasedRequest ? $this->_name : $this->_sqlname ];
		if($value == null || !$value || strcasecmp($value, 'null') == 0)
			return 'NULL';

		if($this->_interval == 0)
		{
			if($this->_viewFormat)
			{
				if( !$this->_recordBasedRequest )
					$data[ $this->_name ] = $value;

				return $pageObject->formatReportFieldValue($this->_name, $data);
			}
			else
			{
				$date = db2time($value);
				return str_format_datetime($date);
			}
		}
		return formatDateIntervalValue( $fieldValue, $this->_interval );

	}

	function getGroup($data)
	{
		if( $this->_interval == 0)
			return $data[$this->alias()];
		else
		{
			return DataSource::groupValueDate( $data[$this->alias()], $this->_interval );
		}
	}

	function getKey($data)
	{
		if(!$this->_recordBasedRequest)
		{
			return $data[$this->alias()];
		}
		else
		{
			return DataSource::groupValueDate( $data[ $this->_name ], $this->_interval );
		}
	}

	function overrideFormat()
	{
		return true;
	}


}

function getFormattedValue( $pageObject, $value, $fieldName, $strViewFormat, $total = '', $record = array() ) {
	if( $strViewFormat == FORMAT_TIME && is_numeric( $value ) ) {
		if( $total == 'AVG' )
			$value = round( $value, 0 );

		include_once getabspath('classes/controls/ViewTimeField.php');
		return ViewTimeField::getFormattedTotals(
			$fieldName,
			$value,
			$pageObject->pSet,
			$pageObject->pdfJsonMode(),
			$total == 'SUM'
		);
	}

	if( basicViewFormat( $strViewFormat ) ) {
		$arrValues = array( $fieldName => $value );
	} else {
		$arrValues = $record;
		$arrValues[ $fieldName ] = $value;
	}

	return $pageObject->formatReportFieldValue( $fieldName, $arrValues );
}

$cache_db2time = array();
function cached_db2time($strtime)
{
	global $cache_db2time;
	if(!isset($cache_db2time[$strtime]))
	{
		$res = db2time($strtime);
		$cache_db2time[$strtime] = $res;
		return $res;
	}
	else
		return $cache_db2time[$strtime];
}

$cache_getdayofweek = array();
function cached_getdayofweek($strtime)
{
	global $cache_getdayofweek;
	if(!isset($cache_getdayofweek[$strtime]))
	{
		$date = cached_db2time($strtime);
		$res = getdayofweek($date);
		$cache_getdayofweek[$strtime] = $res;
		return $res;
	}
	else
		return $cache_getdayofweek[$strtime];
}

$cache_getweekstart = array();
function cached_getweekstart($strtime)
{
	global $cache_getweekstart;
	if(!isset($cache_getweekstart[$strtime]))
	{
		$date = cached_db2time($strtime);
		$res = getweekstart($date);
		$cache_getweekstart[$strtime] = $res;
		return $res;
	}
	else
		return $cache_getweekstart[$strtime];
}

$cache_formatweekstart = array();
function cached_formatweekstart($strtime)
{
	global $cache_formatweekstart;
	if(!isset($cache_formatweekstart[$strtime]))
	{
		$start = cached_getweekstart($strtime);
		$end = adddays($start, 6);
		$res = format_shortdate($start)." - ".format_shortdate($end);
		$cache_formatweekstart[$strtime] = $res;
		return $res;
	}
	else
		return $cache_formatweekstart[$strtime];
}

///////////////////////////////////////////////////////////////////////////////////
class SQLStatement
{
	var $_fields = array();
	var $_hasDetails = true;
	var $_skipCount = 0;

	var $_reportGlobalSummary = true;

	var $_reportSummary = true;
	var $_details = true;
	var $_from = 0;

	/*
	 *	Total number elements (groups or records) to show
	 *  0 - show all
	 */
	var $_groupsTotal;


	var $_limitLevel = 0;
	var $_hasGroups = true;
	var $_recordBasedRequest = false;
	var $_oldAlgorithm = false;


	// report table info
	var $tName = '';
	var $shortTName = '';

	/*
	 * 	number of group fields
	 * 	@type int
	 */
	var $repGroupFieldsCount = 0;

	var $repPageSummary = 0;
	var $repGlobalSummary = 0;
	var $repLayout = 0;
	var $showGroupSummaryCount = 0;
	var $repShowDet = 0;
	// report field info
	var $repGroupFields = array();
	// current table key fields
	var $tKeyFields = array();
	// if any field used for totals
	var $isExistTotalFields = false;
	// table fields list
	var $fieldsArr = array();
	// Order by fields info
	var $orderIndexes;
	// Instance of ProjectSettings
	var $pSet = null;

	/**
	 * @type Connection
	 */
	var $_connection;

	var $_cipherer;
	var $pageObject;



	function __construct($sql, $order, $groupsTotal, $connection, &$params,  $cipherer, $pageObject )
	{
		// copy properties to object
		RunnerApply($this, $params);
		$this->_connection = $connection;
		$this->_cipherer = $cipherer;
		$this->pSet = new ProjectSettings($this->tName, PAGE_REPORT);
		$this->pageObject = $pageObject;
		if(!is_array($sql))
			die ('Invalid sql parameter');

		global $reportCaseSensitiveGroupFields;

		$start = 0;

		$fields = array();

        for($i=0; $i<count($this->repGroupFields); $i++)
        {
	        for($j=0; $j<count($this->fieldsArr); $j++)
	        {
		        if ($this->repGroupFields[$i]['strGroupField'] == $this->fieldsArr[$j]['name'])
		        {
					$add = array();
					$add['name'] = $this->fieldsArr[$j]['name'];
					if (IsNumberType($this->pSet->getFieldType($this->fieldsArr[$j]['name'])))
					{
						$add['type'] = 'numeric';
					}elseif (IsCharType($this->pSet->getFieldType($this->fieldsArr[$j]['name']))){
						$add['type'] = 'char';
						$add['case_sensitive'] = $reportCaseSensitiveGroupFields;
					}elseif (IsDateFieldType($this->pSet->getFieldType($this->fieldsArr[$j]['name']))){
						$add['type'] = 'date';
					}else{
						$add['type'] = 'char';
					}
					$add['interval'] = $this->repGroupFields[$i]['groupInterval'];
					$add['viewformat'] = $this->fieldsArr[$j]['viewFormat'];

					$add['rowsinsummary'] = 1;


					if ($this->fieldsArr[$j]['totalMax'] || $this->fieldsArr[$j]['totalMin'] || $this->fieldsArr[$j]['totalAvg'] || $this->fieldsArr[$j]['totalSum'])
					{
						$add['rowsinsummary'] ++;
					}


					if ($this->repLayout == REPORT_STEPPED)
					{
						$add['rowsinheader'] = 1;
					}elseif ($this->repLayout == REPORT_BLOCK){
						$add['rowsinheader'] = 0;
					}elseif ($this->repLayout == REPORT_OUTLINE || $this->repLayout == REPORT_ALIGN){
						if ($j == count($this->fieldsArr)-1)
						{
							$add['rowsinheader'] = 2;
						}else{
							$add['rowsinheader'] = 1;
						}
					}elseif ($this->repLayout == REPORT_TABULAR){
						$add['rowsinheader'] = 0;
					}

					$fields []= $add;
				}
			}
        }

		$this->_hasGroups = count($fields) > 0;

		foreach($fields as $field)
		{
			$f = create_reportfield($field['name'], $field['type'], $field['interval'], 'grp', $this->tName, $this->_connection, $this->_cipherer);
			$start = $f->setStart($start);
			if(isset($field['case_sensitive']))
				$f->setCaseSensitive($field['case_sensitive']);
			if(isset($field['rowsinsummary']))
				$f->_rowsInSummary = $field['rowsinsummary'];
			if(isset($field['rowsinheader']))
				$f->_rowsInHeader = $field['rowsinheader'];
			$f->_viewFormat = $field['viewformat'];
			$this->_fields []= $f;
		}


		$this->_reportSummary = $this->repPageSummary || $this->repGlobalSummary;
		$this->_groupsTotal = $groupsTotal;
	}

	function setRecordBasedRequest($recordBasedRequest)
	{
		$this->_recordBasedRequest = $recordBasedRequest;
		for($nCnt = 0; $nCnt < count($this->_fields); $nCnt++)
			$this->_fields[$nCnt]->_recordBasedRequest = $recordBasedRequest;
	}

	function getGroup($data)
	{
		return $this->_fields[0]->getGroup($data);
	}

	function field($num)
	{
		return $this->_fields[$num];
	}

	function setOldAlgorithm($useOldAlgorithm = true)
	{
		for($nCnt = 0; $nCnt < count($this->_fields); $nCnt ++)
		{
			$this->_fields[$nCnt]->_oldAlgorithm = $useOldAlgorithm;
		}

		$this->_oldAlgorithm = $useOldAlgorithm;
	}
}

////////////////////////////////////////////////////////////////////////////////////////
class Summarable
{
	/*  Array of all values used building report totals
	 * 	Elements:
	 * 		summary - array
				<field name> - array of values involved in totals calculating
					count
					MIN
					MAX
					AVG
					SUM
			_first - array of field values from the database
			_begin - row?
			_end   - row?
			values - array where keys are group keys
				<group key value> - another underlying summary

	 */
	var $_summary = array();

	// report table info
	var $tName = '';
	var $shortTName = '';

	/*
	 * 	number of group fields
	 * 	@type int
	 */
	var $repGroupFieldsCount = 0;
	var $repPageSummary = 0;
	var $repGlobalSummary = 0;
	var $repLayout = 0;
	var $showGroupSummaryCount = 0;
	var $repShowDet = 0;
	// report field info
	var $repGroupFields = array();
	// current table key fields
	var $tKeyFields = array();
	// if any field used for totals
	var $isExistTotalFields = false;
	// table fields list
	var $fieldsArr = array();

	var $cipherer = null;
	var $_from;


    function __construct(&$params)
    {
    	RunnerApply($this, $params);
		Summarable::init();
	}

	function init($from = 0)
	{
		$this->_from = $from;
		$this->cipherer = new RunnerCipherer($this->tName);
	}

	function writeGroup(&$begin, &$end, $gkey, $grp, $nField, $values ) {}

	/*
	 *	Update summary totals with the new fetched record data
	 *
	 *	$recordsMode - true if report is being built from raw SQL query and false if the query is grouped
	 *	$summary - a summary to update
	 *	$data - record fetched from the database
	 *	$nTotalRecords - global records counter
	 */
	function addSummary($recordsMode, &$summary, $data, &$nTotalRecords)
	{
		$countInGroup = isset($summary['count']) ? $summary['count'] : 0;
		if ($this->isExistTotalFields)
		{
			if(!is_array($summary['summary']))
				$summary['summary']=array();
			$s =& $summary['summary'];
		}
		if($recordsMode)
		{
			//	report is built from raw query results
			for($i=0; $i<count($this->fieldsArr); $i++)
			{
				$field = &$this->fieldsArr[$i];
				$fieldName = $field['name'];
		   		if (!$field['totalMax'] && !$field['totalMin'] && !$field['totalAvg'] && !$field['totalSum'])
		   		{
		   			//	no summary to calculate
					continue;
		   		}
				if($data[$fieldName] === null)
					continue;

				if(!is_array($s[$fieldName]))
					$s[$fieldName] = array();

				if(!isset($s[$fieldName]['count']))
					$s[$fieldName]['count'] = 0;

				if ($field['totalMax'])
				{
					if(!isset($s[$fieldName]['MAX']) || $s[$fieldName]['MAX'] < $data[$fieldName])
						$s[$fieldName]['MAX'] = $data[$fieldName];
				}
				if ($field['totalMin']){
					if(!isset($s[$fieldName]['MIN']) || $s[$fieldName]['MIN'] > $data[$fieldName])
						$s[$fieldName]['MIN'] = $data[$fieldName];
				}
				if ($field['totalAvg']){
					if ($field['viewFormat'] == "Time")
					{
						$avg_value = $this->value2time($data[$fieldName]);
					}else{
						$avg_value = $data[$fieldName];
					}
					$s[$fieldName]['AVG'] = $s[$fieldName]['AVG']*$s[$fieldName]['count'] + $avg_value;
					$s[$fieldName]['count'] ++;
					if($s[$fieldName]['count']!=0)
						$s[$fieldName]['AVG'] = $s[$fieldName]['AVG']/$s[$fieldName]['count'];
				}
				if ($field['totalSum']){
					if ($field['viewFormat'] == "Time")
					{
						$s[$fieldName]['SUM'] += $this->value2time($data[$fieldName]);
					}else{
						$s[$fieldName]['SUM'] += $data[$fieldName];
					}
				}
			}
		    $nTotalRecords ++;
			$countInGroup ++;
		}
		else
		{
			//	report is built from grouped query results
			for($i=0; $i<count($this->fieldsArr); $i++)
			{
				$field = &$this->fieldsArr[$i];
				if ( !$field['totalMax'] && !$field['totalMin'] && !$field['totalAvg'] && !$field['totalSum'] )
		   		{
		   			//	no summary to calculate
					continue;
		   		}
				$fieldName = $field['name'];
				if( !is_array( $s[$fieldName] ))
					$s[ $fieldName ] = array();
				$summaryField =& $s[$fieldName];


				if ($field['totalMax'])
				{
			        if($data[$fieldName."MAX"] !== null)
					{
						if(!isset($summaryField['MAX']) || $summaryField['MAX'] < $data[$fieldName."MAX"])
							$summaryField['MAX'] = $data[$fieldName."MAX"];
					}
		        }
		        if ($field['totalMin']){
			        if($data[$fieldName."MIN"] !== null)
					{
						if(!isset($summaryField['MIN']) || $summaryField['MIN'] > $data[$fieldName."MIN"])
							$summaryField['MIN'] = $data[$fieldName."MIN"];
					}
				}
				if ($field['totalAvg']){
					if($data[$fieldName."AVG"] !== null)
					{
						if ($field['viewFormat'] == "Time")
						{
							$avg_value = $this->value2time($data[$fieldName."AVG"]);
						}else{
							$avg_value = $data[$fieldName."AVG"];
						}
						$summaryField['AVG'] = $summaryField['AVG']*$summaryField['count'] + $avg_value*$data[$fieldName."NAVG"];
						$summaryField['count'] += $data[$fieldName."NAVG"];
						if($summaryField['count']!=0)
							$summaryField['AVG'] = $summaryField['AVG']/$summaryField['count'];
					}
				}
				if ($field['totalSum']){
			        if($data[$fieldName."SUM"] !== null)
					{
						if ($field['viewFormat'] == "Time")
						{
				       		$summaryField['SUM'] += $this->value2time($data[$fieldName."SUM"]);
			       		}else{
				        	$summaryField['SUM'] += $data[$fieldName."SUM"];
			       		}
					}
				}
			}
	        $nTotalRecords += $data['countField'];
			$countInGroup += $data['countField'];
		}
        $summary['count'] = $countInGroup;
	}

	function _makeSummary(&$summary, $deep)
	{
		if( !$summary['values'] )
			return;

		foreach($summary['values'] as $gkey => $group)
		{
			$grp =& $summary['values'][$gkey];
			if(isset($grp['values']))
				$this->_makeSummary($grp, $deep + 1);

			if(isset($grp['_begin']) && isset($grp['_end']))
				$this->writeGroup($grp['_begin'], $grp['_end'], $gkey, $grp, $deep, $grp['_first'] );

			if(!is_array($summary['summary']))
				$summary['summary']=array();
			for($i=0; $i<count($this->fieldsArr); $i++)
			{
				if(!is_array($summary['summary'][$this->fieldsArr[$i]['name']]))
					$summary['summary'][$this->fieldsArr[$i]['name']]=array();
				if(is_array($grp['summary']))
				{
					if(is_array($grp['summary'][$this->fieldsArr[$i]['name']]))
					{
						if ($this->fieldsArr[$i]['totalMax'])
						{
							if(isset($grp['summary'][$this->fieldsArr[$i]['name']]['MAX']))
							{
								if(!isset($summary['summary'][$this->fieldsArr[$i]['name']]['MAX']) || $summary['summary'][$this->fieldsArr[$i]['name']]['MAX'] < $grp['summary'][$this->fieldsArr[$i]['name']]['MAX'])
									$summary['summary'][$this->fieldsArr[$i]['name']]['MAX'] = $grp['summary'][$this->fieldsArr[$i]['name']]['MAX'];
							}
						}
						if ($this->fieldsArr[$i]['totalMin']){
							if(isset($grp['summary'][$this->fieldsArr[$i]['name']]['MIN']))
							{
								if(!isset($summary['summary'][$this->fieldsArr[$i]['name']]['MIN']) || $summary['summary'][$this->fieldsArr[$i]['name']]['MIN'] > $grp['summary'][$this->fieldsArr[$i]['name']]['MIN'])
									$summary['summary'][$this->fieldsArr[$i]['name']]['MIN'] = $grp['summary'][$this->fieldsArr[$i]['name']]['MIN'];
							}
						}
						if ($this->fieldsArr[$i]['totalAvg']){
							if(isset($grp['summary'][$this->fieldsArr[$i]['name']]['AVG']))
							{
								$summary['summary'][$this->fieldsArr[$i]['name']]['AVG'] =
									$summary['summary'][$this->fieldsArr[$i]['name']]['AVG']*$summary['summary'][$this->fieldsArr[$i]['name']]['count'] +
									$grp['summary'][$this->fieldsArr[$i]['name']]['AVG']*$grp['summary'][$this->fieldsArr[$i]['name']]['count'];
								$summary['summary'][$this->fieldsArr[$i]['name']]['count'] += $grp['summary'][$this->fieldsArr[$i]['name']]['count'];
								if($summary['summary'][$this->fieldsArr[$i]['name']]['count']!=0)
									$summary['summary'][$this->fieldsArr[$i]['name']]['AVG'] = $summary['summary'][$this->fieldsArr[$i]['name']]['AVG']/$summary['summary'][$this->fieldsArr[$i]['name']]['count'];
							}
						}if ($this->fieldsArr[$i]['totalSum']){
							if($grp['summary'][$this->fieldsArr[$i]['name']]['SUM'])
								$summary['summary'][$this->fieldsArr[$i]['name']]['SUM'] += $grp['summary'][$this->fieldsArr[$i]['name']]['SUM'];
						}
					}
				}
			}

			$summary['count'] += $grp['count'];
		}
	}

	function value2time($value)
	{
		$res = 0;
		$arr = parsenumbers($value);
		if(isset($arr[0]))
			$res += $arr[0] * 60 * 60;
		if(isset($arr[1]))
			$res += $arr[1] * 60;
		if(isset($arr[2]))
			$res += $arr[2];
		return $res;
	}

	function time2printable($time)
	{
		return array(intval($time / (60 * 60)), intval($time / 60), $time % 60);
	}
}

class ReportGroups extends Summarable
{
	var $_report;
	var $_global;
	var $_totalRecords;
	var $_maxpages;
	var $_nGroup;
	var	$_oldFirst;
	var $_sql;

	/*
	 *	Total number elements (groups or records) to show
	 *  0 - show all
	 *	@type int
	 */
	var $_groupsTotal;


	/**
	 * @type Connection
	 */
	var $_connection;
	var $_allGroupsUsed;
	var $_countGroups;

	// report table info
	var $tName = '';
	var $shortTName = '';

	/*
	 * 	number of group fields
	 * 	@type int
	 */
	var $repGroupFieldsCount = 0;

	var $repPageSummary = 0;
	var $repGlobalSummary = 0;
	var $repLayout = 0;
	var $showGroupSummaryCount = 0;
	var $repShowDet = 0;
	// report field info
	var $repGroupFields = array();
	// current table key fields
	var $tKeyFields = array();
	// if any field used for totals
	var $isExistTotalFields = false;
	// table fields list
	var $fieldsArr = array();

	function __construct(&$sql, $connection, $groupsTotal, &$params, $report )
	{
		// copy properties to object
		parent::__construct($params);
		$this->init();
		$this->_groupsTotal = $groupsTotal;
		$this->_sql =& $sql;
		$this->_connection = $connection;
		$this->_report = $report;
	}

	function init($from = 0)
	{
		Summarable::init($from);
		$this->_global = array();
		$this->_totalRecords = 0;
		$this->_maxpages = -1;
		$this->_from = $from;
		$this->_nGroup = -1;
		$this->_oldFirst = '';
		$this->_allGroupsUsed = false;
		$this->_countGroups = 0;
	}

	function setGlobalSummary($recordsMode, $data)
	{
		$this->addSummary($recordsMode, $this->_global, $data, $this->_totalRecords);
	}

	function setGroup($data)
	{
		$field = $this->_sql->field(0);
		$firstKey = $field->getKey($data);
		if($firstKey !== $this->_oldFirst)
		{
			$this->_nGroup ++;
			$this->_oldFirst = $firstKey;
		}
	}

	function isVisibleGroup()
	{
		return $this->_nGroup >= $this->_from && $this->_nGroup < $this->_from + $this->_groupsTotal;
	}

	function getDisplayGroups($from)
	{
		$this->init($from);

		if( !$this->_groupsTotal )
		{
			// request 'All Groups'
			return array();
		}
		else
		{
			$groups = array();
			$this->_allGroupsUsed = false;

			if ($this->repGroupFieldsCount)
			{

				$dc = $this->_report->pageObject->getSubsetDataCommand();
				$dc->totals = array(
					array(
						"alias" => "grp0",
						"field" => $this->repGroupFields[0]["strGroupField"],
						"modifier" => $this->repGroupFields[0]["groupInterval"],
						"direction" => $this->_report->groupOrderDirection( 0 )
					)
				);
				$dc->startRecord = $this->_from;
				$dc->reccount = $this->_groupsTotal;
				$qResult = $this->_report->pageObject->getDataSource()->getTotals( $dc );


		        while( ($data = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() )) && count($groups) < $this->_groupsTotal )
				{
					$groups[] = $data["grp0"];
				}
				if(count($groups) < $this->_groupsTotal)
					$this->_allGroupsUsed = true;
			}

			if($from > 0)
			{
				$this->_allGroupsUsed = false;
			}

			$this->_countGroups = count($groups);

			return $groups;
		}
	}

	function getCountGroups($fullRequest = false)
	{
		if ($this->repGroupFieldsCount)
		{
			if($this->_nGroup >= 0 && $fullRequest)
			{
				return $this->_nGroup + 1;
			}
			else
			{
				if($this->_allGroupsUsed)
				{
					return $this->_countGroups;
				}
				else
				{
					$dc = $this->_report->pageObject->getSubsetDataCommand();
					$dc->totals = array(
						array(
							"alias" => "grp0",
							"field" => $this->repGroupFields[0]["strGroupField"],
							"modifier" => $this->repGroupFields[0]["groupInterval"]
						)
					);
					return $this->_report->pageObject->getDataSource()->getTotalCount( $dc );
				}
			}
		}else{
			return 0;
		}
	}

	function getSummary()
	{
		return $this->_global;
	}

	function allGroupsUsed()
	{
		return $this->_allGroupsUsed;
	}
}

class ReportLogic extends Summarable
{
	var $_list;
	var $_totalRecords;
	var $_pages;
	/*
	 *	Total number elements (groups or records) to show
	 *  0 - show all
	 */
	var $_groupsTotal;

	/*
	 *	Number elements (groups or records) to be displayed per page.
	 *  0 - don't paginate
	 */
	var $_groupsPerPage;

	var $_groupCounter = 0;

	var $_from = 0;

	/**
	 * @type Connection
	 */
    var $_connection;
	var	$_sql;
	var $_groups;

	/*
	 *	An 0-based array containing a single element for each group field.
	 *	The element for each group is the group key - field value in simplest case.
	 *	The array is used when report is built from the raw data
	 */
	var $_groupKeys;

	var $_fullRequest = false;
	var $_recordBasedRequest = false;
	var $_doPaging = false;
	var $_lastPageNumber = 0;
	var $_pageSummary;
	var $_printRecordCount = 0;
	var $_listedRows = 0;
	var $_oldLevels;


	// report table info
	var $tName = '';
	var $shortTName = '';

	/*
	 * 	number of group fields
	 * 	@type int
	 */
	var $repGroupFieldsCount = 0;

	var $repPageSummary = 0;
	var $repGlobalSummary = 0;
	var $repLayout = 0;
	var $showGroupSummaryCount = 0;
	var $repShowDet = 0;
	// report field info
	var $repGroupFields = array();
	// current table key fields
	var $tKeyFields = array();
	// if any field used for totals
	var $isExistTotalFields = false;
	// table fields list
	var $fieldsArr = array();

	var $cipherer = null;

	/**
	 * Instance of RunnerPage or ViewControlsContainer
	 * @var {object}
	 */
	var $pageObject = null;
	var $pSet = null;

    function __construct( $order, $connection, $groupsTotal, $groupsPerPage, &$params, $pageObject = null )
    {
		parent::__construct($params);
        $this->_connection = $connection;
		$this->cipherer = new RunnerCipherer($this->tName);
		$this->_sql = new SQLStatement( array(), $order, $groupsTotal, $connection, $params, $this->cipherer, $pageObject );
		$this->_groups = new ReportGroups($this->_sql, $connection, $groupsTotal, $params, $this );
		$this->_groupsTotal = $groupsTotal;
		$this->_groupsPerPage = $groupsPerPage;
		$this->pSet = new ProjectSettings($this->tName, PAGE_REPORT);

		if(is_null($pageObject))
		{
			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$this->pageObject = new ViewControlsContainer($this->pSet, PAGE_REPORT);
		}
		else
			$this->pageObject = $pageObject;

		$this->init();
	}

	function init($from = 0)
	{
		Summarable::init($from);
		$this->_sql->_from = $from;
		$this->_list = array();
		$this->_totalRecords = 0;
		$this->_pages = array();
		$this->_groupKeys = array();
		$this->_lastPageNumber = 0;
		$this->_pageSummary = array();
//		$this->_printRecordCount = 0;
		$this->_listedRows = 0;
		$this->_oldLevels = array();

		$this->cipherer = new RunnerCipherer($this->tName);
	}

	function getPages()
	{
		return $this->_pages;
	}

	/// logic
	function getFormattedRow($value) {}
	function writeGroup(&$begin, &$end, $gkey, $grp, $nField, $values) {}
	function _writePage(&$page, $src, $count) {}
	function writeGlobalSummary($source) {}

	function writePageSummary()
	{
		if($this->_doPaging)
		{
			for($nCnt = 0; $nCnt < count($this->_list); $nCnt++)
			{
				if(!isset($this->_pages[$nCnt]))
					$this->_pages[$nCnt]=array();
				$result =& $this->_pages[$nCnt];
				if(isset($this->_pageSummary[$nCnt]))
				{
					$page = $this->_pageSummary[$nCnt];
					$this->_writePage($result,
							  isset($page['summary']) ? $page['summary'] : array(),
							  isset($page['count']) ? $page['count'] : 0);
				}
				else
					$this->_writePage($result, array(), 0);
			}
		}
		else
		{
			$result = array();
			$page = $this->_summary;
			$this->_writePage($result,
							  isset($page['summary']) ? $page['summary'] : array(),
							  isset($page['count']) ? $page['count'] : 0);
			$this->_summary = $result;
		}

		if(0 == count($this->_pages) && count($this->_list) > 0)
			$this->_pages []= $this->_summary;
	}

	function makeSummary()
	{
		$this->_makeSummary($this->_summary, 0);
	}

	/*
	 *	Update report with another record. Create a summary if needed.
	 *
	 *	$recordsMode - true if report is being built from raw SQL query and false if the query is grouped
	 *	$data - record fetched from the database
	 *	$rowToAppend - record with formatted values to append (show raw data option)
	 */
	function setSummary($recordsMode, $data, $rowToAppend = null)
	{
		$level =& $this->_summary;

		$setBegin = false;
		if ($this->repGroupFieldsCount)
		{
			// get array of keys for current record
			$recordkeys = array();
			for( $i = 0; $i < count( $this->repGroupFields ); $i++ )
      		{
				$groupIndex = $this->repGroupFields[ $i ][ 'groupOrder' ] - 1;
				$field = $this->_sql->field( $groupIndex );
				$recordkeys[ $groupIndex ] = $field->getKey( $data );
			}

			// add empty record for each closed group to hold its summary
			if( count($this->_groupKeys) > 0 )
			{
				$changed = false;
				$nKey = 0;
				for(; $nKey < count($recordkeys); $nKey ++)
				{
					if($recordkeys[$nKey] != $this->_groupKeys[$nKey])
					{
						$changed = true;
						break;
					}
				}
				if($changed)
				{
					// in reverse order
					for($nKey2 = count($recordkeys) - 1; $nKey2 >= $nKey; $nKey2 --)
					{
						$emptyRow =& $this->appendRow(array());
						$field = $this->_sql->field($nKey2);
						$this->_printRecordCount += $field->_rowsInSummary;
						$this->_listedRows ++;
						$this->_oldLevels[$nKey2]['_end'] =& $emptyRow;
					}
				}
				//	new top-level group
				if( $nKey == 0 )
					++$this->_groupCounter;
			}

			// store new record keys
			$this->_groupKeys = $recordkeys;

			// find current summary
			$levels = array();
			for($i=0;$i<count($this->repGroupFields); $i++)
      		{
				$groupIndex = $this->repGroupFields[$i]['groupOrder'] - 1;
				$groupKey = $recordkeys[ $groupIndex ];

				if(!isset($level['values'])) {
					$level['values'] = array();
				}

				if(!isset($level['values'][ $groupKey ]))
				{
					/* required for ASP conversion, $groupKey can be big int, 2.2E9 and more */
					$newArray = array();
					$level['values'][ $groupKey ] = $newArray;


					$level =& $level['values'][ $groupKey ];
					$field = $this->_sql->field( $groupIndex );
					$this->_printRecordCount +=  $field->_rowsInHeader;
					$setBegin = true;
					$level['_first'] = $data;
				}
				else
				{
					$level =& $level[ 'values' ][ $groupKey ];
				}
				$levels[] =& $level;
			}

			// and finally calculate summary
			$this->addSummary($recordsMode, $level, $data, $this->_totalRecords);
			$this->_oldLevels =& $levels;
		}else{
			$this->addSummary($recordsMode, $level, $data, $this->_totalRecords);
			++$this->_groupCounter;
		}

		if($rowToAppend)
		{
			$added =& $this->appendRow($rowToAppend);
			$this->_printRecordCount ++;
			$this->_listedRows ++;

			if($setBegin && $this->repGroupFieldsCount)
			{
				for($nCnt = 0; $nCnt < count($levels); $nCnt ++)
					if(!isset($levels[$nCnt]['_begin']))
						$levels[$nCnt]['_begin'] =& $added;
			}
		}

		if ($this->repPageSummary)
		{
			if($this->_doPaging && $rowToAppend)
			{
				$nPage = count($this->_list) - 1;
				if(!isset($this->_pageSummary[$nPage]))
					$this->_pageSummary[$nPage]["count"]=0;

				$summaryCount = $this->_pageSummary[$nPage]['count'];
				$this->addSummary($recordsMode, $this->_pageSummary[$nPage], $data, $summaryCount);
				$this->_pageSummary[$nPage]['count'] = $summaryCount;
			}
		}
	}

	function setFinish()
	{
		if(count($this->_groupKeys) > 0)
		{
			for($nKey = count($this->_groupKeys) - 1; $nKey >= 0; $nKey --)
			{
				$field = $this->_sql->field($nKey);
				$this->_printRecordCount += $field->_rowsInSummary;
				$emptyRow =& $this->appendRow(array());
				$this->_listedRows ++;
				$this->_oldLevels[$nKey]['_end'] =& $emptyRow;
			}
		}
	}

	function & appendRow($row)
	{
		if($this->_groupsPerPage)
		{
			if( !$this->repGroupFieldsCount )
				$page = intval( ( $this->_groupCounter - 1 )  / $this->_groupsPerPage);
			else
				$page = intval( $this->_groupCounter / $this->_groupsPerPage);

			// OBSOLETE check we have no gaps in page list
			if($page > 0 && !isset($this->_list[$page - 1]))
				die("Increase number of records per print page to display report properly");


			$this->_list[$page][] = $row;
			return $this->_list[$page][count($this->_list[$page]) - 1];
		}
		else
		{
			$this->_list[] = $row;
			return $this->_list[count($this->_list) - 1];
		}
	}

	function recordVisible($nRecord)
	{
		return
			$this->_sql->_limitLevel == 1 || // only visible records were selected due to group filtering
			$this->_groupsTotal == 0 || // 'show all' mode
			($this->_sql->_limitLevel == 2 && // DB specific record filter
				($nRecord - $this->_sql->_skipCount >= 0 && $nRecord - $this->_sql->_skipCount < $this->_groupsTotal)) ||
			($this->_sql->_limitLevel == 0 && // fullmode record filter
				($nRecord - $this->_from >= 0 && $nRecord - $this->_sql->_skipCount < $this->_from + $this->_groupsTotal))
			;
	}

	function getTotals()
	{
		if($this->_fullRequest)
		{
			return $this->_groups->getSummary();
		}
		else
		{
			if($this->_groups->allGroupsUsed())
			{
				return $this->_summary;
			}
			else
			{
				$totals = array();

				$dc = $this->getTotalCommand( false );
				$rs = $this->pageObject->getDataSource()->getTotals( $dc );
				$fetchedArray = $rs->fetchAssoc();
				$data = $this->cipherer->DecryptFetchedArray( $fetchedArray );

				$totalRecords = 0;
				$data["countField"] = $this->pageObject->limitRowCount( $data["countField"] );

				$this->addSummary(false, $totals, $data, $totalRecords);
				return $totals;
			}
		}
	}

	/**
	 * Data command that returns all records and group values
	 * @return DsCommand
	 */
	function getDataCommand( $from ) {
		$orderIndices = $this->pSet->getOrderIndexes();

		//	select all records, add group values to the field list
		$dc = $this->pageObject->getSubsetDataCommand();
		$orderFieldIndices = array();
		$dc->order = array();
		foreach( $this->repGroupFields as $idx => $grp ) {
			$gField = $grp["strGroupField"];
			if( !$grp["groupInterval"] ) {
				$orderFieldIndices[ $this->pSet->getFieldIndex( $gField ) ] = true;
			}
			$alias = "grp" . $idx;
			$dc->extraColumns[] = new DsFieldData( "", $alias, $gField , $grp["groupInterval"] );

			$dc->order[] = array( "column" => $alias, "dir" => $this->groupOrderDirection( $idx ) );
		}
		//	add the rest of orders
		foreach( $orderIndices as $o ) {
			if(  !$orderFieldIndices[ $o[0] ] )
				$dc->order[] = array( "index" => $o[0], "dir" => $o[1] );
		}

		//	add limits
		if( !count( $this->repGroupFields ) ) {
			$dc->startRecord = $from;
			$dc->reccount = $this->_groupsTotal ? $this->_groupsTotal : -1;
		}
		return $dc;
	}

	/**
	 * @param Boolean addGroups - group results
	 * @return DsCommand
	 */
	function getTotalCommand( $addGroups ) {
		//	Only group values are needed, make GROUP BY query.
		$dc = $this->pageObject->getSubsetDataCommand();

		if( $addGroups ) {
			foreach( $this->repGroupFields as $idx => $grp ) {
				$gField = $grp["strGroupField"];
				$alias = "grp" . $idx;
				$dc->totals[] = array(
					"alias" => $alias,
					"field" => $gField,
					"modifier" => $grp["groupInterval"],
					"direction" => $this->groupOrderDirection( $idx )
				);
			}
		}
		//	add count
		$dc->totals[] = array(
			"alias" => "countField",
			"total" => "count"
		);
		//	add totals
		foreach( $this->fieldsArr as $f)
		{
			$field = &$f["name"];
			if ($f['totalMax'])
			{
				$dc->totals[] = array(
					"alias" => $field."MAX",
					"field" => $field,
					"total" => "max"
				);
			}
			if( $f['totalMin'] ) {
				$dc->totals[] = array(
					"alias" => $field."MIN",
					"field" => $field,
					"total" => "min"
				);
			}
			if( $f['totalAvg'] && !IsDateFieldType($this->pSet->getFieldType( $field )) ) {
				$dc->totals[] = array(
					"alias" => $field."AVG",
					"field" => $field,
					"total" => "avg"
				);
				$dc->totals[] = array(
					"alias" => $field."NAVG",
					"field" => $field,
					"total" => "count"
				);
			}
			if( $f['totalSum'] && !IsDateFieldType($this->pSet->getFieldType( $field )) ) {
				$dc->totals[] = array(
					"alias" => $field."SUM",
					"field" => $field,
					"total" => "sum"
				);
			}
		}
		return $dc;
	}

	/**
	 * @param Array
	 * @return DsCondition
	 */
	function getGroupFilter( &$groups ) {
		$gField = $this->repGroupFields[0]["strGroupField"];
		$modifier = $this->repGroupFields[0]["groupInterval"];
		$firstGroup = $groups[0];
		$lastGroup = $groups[ count( $groups ) - 1 ];
		if( $this->groupOrderDirection( 0 ) == "DESC" ) {
			$t = $firstGroup;
			$firstGroup = $lastGroup;
			$lastGroup = $t;
		}
		$condition1 = DataCondition::_Not( DataCondition::FieldIs( $gField, dsopLESS, $firstGroup, dsCASE_DEFAULT, $modifier ) );
		$condition2 = DataCondition::_Not( DataCondition::FieldIs( $gField, dsopMORE, $lastGroup, dsCASE_DEFAULT, $modifier ) );
		return DataCondition::_And( array( $condition1, $condition2 ) );
	}

	function getReport($from = 0 )
	{
		$this->init($from);


		//	split to pages at server
		$this->_doPaging = ( $this->_groupsPerPage != 0 );
		if( $this->pageObject ) {
			if( $this->pageObject->pdfJsonMode() )
				$this->_doPaging = false;
		}

		$isExistTimeFormatField = false;
		for($i=0;$i<count($this->fieldsArr); $i++)
      	{
      		if ($this->fieldsArr[$i]['viewFormat'] == "Time")
      		{
      			$isExistTimeFormatField = true;
      			break;
      		}
      	}

		// retrieve ALL records from table
		$this->_fullRequest = ($this->repGlobalSummary && $isExistTimeFormatField);

		if( $this->_connection->dbType != nDATABASE_MySQL  && $this->_connection->dbType != nDATABASE_PostgreSQL
			&& $this->_connection->dbType != nDATABASE_MSSQLServer && $this->_connection->dbType != nDATABASE_Oracle
			&& $this->_connection->dbType != nDATABASE_Access )
		{
			$this->_fullRequest = true;
		}

		$entType = $this->pSet->getEntityType();
		if( $entType === titREST_REPORT || $entType === titSQL_REPORT ) {
			$this->_fullRequest = true;
		}

		// use non-optimized algorithm
		$this->_recordBasedRequest = $this->_fullRequest;

		// request records if there is no grouping
		if( !$this->repGroupFieldsCount )
			$this->_recordBasedRequest=true;

		//////////////////////////////// start building report
		$this->_sql->setRecordBasedRequest($this->_recordBasedRequest);
		if( $this->_fullRequest)
		{
			$this->_sql->_limitLevel = 0; // no limits
		}
		else
		{
			if(!$this->repGroupFieldsCount)
				$this->_sql->_limitLevel = 2; // limit records
			else
				$this->_sql->_limitLevel = 1; // limit groups
		}

		$page = -1;
		$nRow = 0;
		$nRowVisible = 0;

		if( !$this->_recordBasedRequest )
		{
			// get groups to show
			$groups = $this->_groups->getDisplayGroups($from);

			$dc = $this->repShowDet
				? $this->getDataCommand( $from )
				: $this->getTotalCommand( true );

			if( count( $groups ) ) {
				$dc->filter = DataCondition::_And( array(
					$dc->filter,
					$this->getGroupFilter( $groups )
				));
			}
			$qResult = $this->repShowDet
				? $this->pageObject->getDataSource()->getList( $dc )
				: $this->pageObject->getDataSource()->getTotals( $dc );
			if( !$qResult ) {
				showError( $this->pageObject->getDataSource()->lastError() );
			}
			while($data = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() ))
		    {
		    	$this->pageObject->recId = $nRow;
				$this->setSummary($this->repShowDet, $data,
					$this->recordVisible($nRow) ? $this->getFormattedRow($data) : null);
				$nRow ++;
		    }
		}
		else
		{
			//	run original request only

			$this->_groups->init($from);
			$dc = $this->getDataCommand( $from );

			$qResult = $this->pageObject->getDataSource()->getList( $dc );
			if( !$qResult ) {
				showError( $this->pageObject->getDataSource()->lastError() );
			}

	        while($data = $this->cipherer->DecryptFetchedArray( $qResult->fetchAssoc() ))
			{
				if ($this->repGroupFieldsCount)
				{
					// take a record group into account
					$this->_groups->setGroup($data);
				}

				if($this->_fullRequest)
					$this->_groups->setGlobalSummary(true, $data);

				if ($this->repGroupFieldsCount)
				{
					$visible = $this->_groups->isVisibleGroup() || $this->_groupsTotal == 0;
				} else {
					$visible = $this->recordVisible($nRow);
				}

				if($visible)
				{
					$nRowVisible ++;
					$this->pageObject->recId = $nRow;
					$this->setSummary(true, $data, $this->getFormattedRow($data));
				}
				else if(!$this->_fullRequest && count($this->_list) > 0)
				{
					// exit loop at the end of visible recordset
					break;
				}

				$nRow ++;
				// Check for exceeding the limit for simple report without groups fields
				if ( !$this->repGroupFieldsCount && $this->pSet->getRecordsLimit() && ($from + $nRowVisible) >= $this->pSet->getRecordsLimit() )
				{
					break;
				}
			}

			$this->_sql->setOldAlgorithm(false);
		}
		$this->setFinish();

		$this->makeSummary();
		$global_totals = $this->getTotals();

		$this->writePageSummary();
		$globals = $this->writeGlobalSummary($global_totals);
		if ($this->repGroupFieldsCount)
		{
			$countrows = $this->_groups->getCountGroups($this->_fullRequest);
			$countGroups = $countrows;
		}else{
			$countrows = $global_totals['count'];
			$countGroups = 1;
		}

		$maxpages=1;
		if($this->_groupsTotal>0)
			$maxpages=ceil($countrows/$this->_groupsTotal);
		$returnthis = array('list' => $this->_list, 'global' => $globals, 'page' => $this->_summary,
					'maxpages' => $maxpages, 'countRows'=>$countrows, 'countGroups'=>$countGroups);
		return $returnthis;
	}
}

//////////////////////////////////////////////////////////////////////////////
class Report extends ReportLogic
{
	var $forExport = false;
	// report table info
	var $tName = '';
	var $shortTName = '';
	var $repGroupFieldsCount = 0;
	var $repPageSummary = 0;
	var $repGlobalSummary = 0;
	var $repLayout = 0;
	var $showGroupSummaryCount = 0;
	var $repShowDet = 0;
	var $mode = MODE_LIST;
	// report field info
	var $repGroupFields = array();
	// current table key fields
	var $tKeyFields = array();
	// if any field used for totals
	var $isExistTotalFields = false;
	// table fields list
	var $fieldsArr = array();

    function __construct( $order, $connection, $groupsTotal, $groupsPerPage, &$params, $pageObject = null)
    {
		parent::__construct( $order, $connection, $groupsTotal, $groupsPerPage, $params, $pageObject);
	}

	/**
	 * @param Integer - grIdx - order number of the group field
	 * @return String "ASC" | "DESC"
	 */
	function groupOrderDirection( $grIdx ) {
		$orderIndices =& $this->pSet->getOrderIndexes();
		$gField = $this->repGroupFields[ $grIdx ]["strGroupField"];
		$grFieldIdx = $this->pSet->getFieldIndex( $gField );
		foreach( $orderIndices as $o ) {
			if( $o[0] == $grFieldIdx ) {
				return $o[1];
			}
		}
		return 'ASC';
	}

	function getFormattedRow($value)
	{
		global $strTableName;
		$row =  array('row_data' => true);

		$keylink = "";
		for($i=0; $i<count($this->tKeyFields); $i++)
		{
			$keylink .= "&key".($i+1)."=".runner_htmlspecialchars(rawurlencode(@$value[$this->tKeyFields[$i]]));
		}

		if($this->forExport)
			$this->pageObject->setForExportVar($this->forExport);


		if ($this->pageObject->pdfJsonMode()) {
			//	make sure all group fields in the row have values
			for ($j = 0; $j < count($this->repGroupFields); $j++) {
				$groupField = &$this->repGroupFields[$j];
				$row[GoodFieldName($groupField['strGroupField']) . "_grval"] = "''";
			}
		}


		if( $this->repShowDet ) {
			for( $i=0; $i<count($this->fieldsArr); $i++ )
			{
				$fieldData = &$this->fieldsArr[ $i ];

				//	field value is not shown on the page
				if( !$fieldData['repPage'] ) {
					continue;
				}

				$row[ $fieldData['goodName'] . "_value" ] = $this->pageObject->formatReportFieldValue( $fieldData['name'], $value, $keylink );
				$row[ $fieldData['goodName'] . "_dbvalue" ] = $value[ $fieldData['name'] ];
			}
		}

		if ($this->repLayout == REPORT_BLOCK)
		{
			$row[GoodFieldName('nonewgroup')] = true;
		}

		return $row;
	}

	function writeGroup(&$begin, &$end, $gkey, $grp, $nField, $values )
	{
		$field = $this->_sql->field($nField);
        $gname = $field->name();

        for($i=0;$i<count($this->repGroupFields); $i++)
        {
			if($gname == $this->repGroupFields[$i]['strGroupField'])
			{
				if ($this->repLayout == REPORT_BLOCK)
				{

					$bFound = false;
					for($nG = 0; $nG < $this->repGroupFieldsCount; $nG ++)
					{
						$field = $this->_sql->field($nG);
						$gname2 = $field->name();
						if($nG < $nField)
						{
							if(isset($begin[GoodFieldName($gname2.'_firstnewgroup')]))
								$bFound = true;
						}
						else
							unset($begin[GoodFieldName($gname2.'_firstnewgroup')]);
					}
					if(!$bFound)
						$begin[GoodFieldName($gname.'_firstnewgroup')] = true;
					unset($begin[GoodFieldName('nonewgroup')]);
				}
				$begin[GoodFieldName($gname.'_newgroup')] = true;
				$end[GoodFieldName($gname.'_endgroup')] = true;

				if ($this->repGroupFields[$i]['showGroupSummary'])
				{
					$end[GoodFieldName('group'.$gname.'_total_cnt')] = str_format_number($grp['count'],0);
				}

				for($j=0; $j<count($this->fieldsArr); $j++)
				{
					if(is_array($grp['summary']))
					{
						if(is_array($grp['summary'][$this->fieldsArr[$j]['name']]))
						{
							if ($this->fieldsArr[$j]['totalMax'])
							{
								$end["group".GoodFieldName($gname)."_total".$this->fieldsArr[$j]['goodName']."_max"] =
									getFormattedValue(
										$this->pageObject,
										$grp['summary'][$this->fieldsArr[$j]['name']]['MAX'],
										$this->fieldsArr[$j]['name'],
										$this->fieldsArr[$j]['viewFormat'],
										'MAX',
										$values
									);
							}
							if ($this->fieldsArr[$j]['totalMin']){
								$end["group".GoodFieldName($gname)."_total".$this->fieldsArr[$j]['goodName']."_min"] =
									getFormattedValue(
										$this->pageObject,
										$grp['summary'][$this->fieldsArr[$j]['name']]['MIN'],
										$this->fieldsArr[$j]['name'],
										$this->fieldsArr[$j]['viewFormat'],
										'MIN',
										$values
									);
							}
							if ($this->fieldsArr[$j]['totalAvg']){
								$end["group".GoodFieldName($gname)."_total".$this->fieldsArr[$j]['goodName']."_avg"] =
									getFormattedValue(
										$this->pageObject,
										$grp['summary'][$this->fieldsArr[$j]['name']]['AVG'],
										$this->fieldsArr[$j]['name'],
										$this->fieldsArr[$j]['viewFormat'],
										'AVG',
										$values
									);
							}
							if ($this->fieldsArr[$j]['totalSum']){
								$end["group".GoodFieldName($gname)."_total".$this->fieldsArr[$j]['goodName']."_sum"] =
									getFormattedValue(
										$this->pageObject,
										$grp['summary'][$this->fieldsArr[$j]['name']]['SUM'],
										$this->fieldsArr[$j]['name'],
										$this->fieldsArr[$j]['viewFormat'],
										'SUM',
										$values
									);
							}
						}
					}
					if ($this->fieldsArr[$j]['name'] == $this->repGroupFields[$i]['strGroupField'])
					{
						$field = $this->_sql->field($nField);
						$gvalue = $field->getFieldName($gkey, $grp['_first'], $this->pageObject );

						if( $field->overrideFormat() )
						{
							if( $this->pageObject->pageType == PAGE_RPRINT ) {
								if( $this->pageObject->pdfJsonMode() && IsDateFieldType( $this->pSet->getFieldType( $this->fieldsArr[$j]['name'] ) )
									&& ( $gvalue == 'NULL' || $field->_interval != 0 || !$field->_viewFormat ) ) {
										// wrapp group date field value in case RunnerPage showDBValue isn't applyed
										$gvalue = "'". jsreplace( $gvalue ) ."'";
								}
							}

							$begin[GoodFieldName(GoodFieldName($gname).'_grval')] = ($this->forExport == 'excel') ? runner_htmlspecialchars($gvalue) : $gvalue;
							if ($this->showGroupSummaryCount)
							{
								$end[GoodFieldName(GoodFieldName($gname).'_grval')] = ($this->forExport == 'excel') ? runner_htmlspecialchars($gvalue) : $gvalue;
							}
						}
						else
						{
							$formattedValue = getFormattedValue(
								$this->pageObject,
								$gvalue,
								$this->fieldsArr[$j]['name'],
								$this->fieldsArr[$j]['viewFormat'],
								'',
								$values
							);

							$begin[GoodFieldName($gname.'_grval')] = ($this->forExport == 'excel') ? runner_htmlspecialchars($formattedValue) : $formattedValue;
							if ($this->showGroupSummaryCount)
							{
								$end[GoodFieldName($gname.'_grval')] = ($this->forExport == 'excel') ? runner_htmlspecialchars($formattedValue) : $formattedValue;
							}
						}
					}
				}
			}
        }
	}

	function _writePage(&$page, $src, $count)
	{
		$page['page_summary'] = true;
		if ($this->repPageSummary)
		{
	        for($i=0; $i<count($this->fieldsArr); $i++)
	        {
				$field = & $this->fieldsArr[$i];
				$fieldName = $field['name'];
				$fGoodName = $field['goodName'];
				if(is_array($src[$fieldName]))
				{
					if( $field['totalSum'] ) {
						$page["page_total".$fGoodName."_sum"] = getFormattedValue(
							$this->pageObject,
							$src[$fieldName]['SUM'],
							$fieldName,
							$field['viewFormat'],
							'SUM'
						);
					}
					if( $field['totalAvg'] ) {
						$page["page_total".$fGoodName."_avg"] = getFormattedValue(
							$this->pageObject,
							$src[$fieldName]['AVG'],
							$fieldName,
							$field['viewFormat'],
							'AVG'
						);
					}

					if( $field['totalMin'] ) {
						$page["page_total".$fGoodName."_min"] = getFormattedValue(
							$this->pageObject,
							$src[$fieldName]['MIN'],
							$fieldName,
							$field['viewFormat'],
							'MIN'
						);
					}

					if( $field['totalMax'] ) {
						$page["page_total".$fGoodName."_max"] = getFormattedValue(
							$this->pageObject,
							$src[$fieldName]['MAX'],
							$fieldName,
							$field['viewFormat'],
							'MAX'
						);
					}
				}
			}
			$page['page_total_cnt'] = str_format_number($count,0);
		}
	}

	function writeGlobalSummary($source)
	{
		$result = array();

		if (!$this->repGlobalSummary)
			return $result;
		if(is_array($source["summary"]))
		{
			for($i=0; $i<count($this->fieldsArr); $i++)
			{
				$field = & $this->fieldsArr[$i];
				$fieldName = $field['name'];
				$fGoodName = $field['goodName'];
				if(is_array($source["summary"][$fieldName]))
				{
					if( $field['totalMax'] ) {
						$result["global_total".$fGoodName."_max"] = getFormattedValue(
							$this->pageObject,
							$source['summary'][$fieldName]['MAX'],
							$fieldName,
							$field['viewFormat'],
							'MAX'
						);
					}

					if( $field['totalMin'] ) {
						$result["global_total".$fGoodName."_min"] = getFormattedValue(
							$this->pageObject,
							$source['summary'][$fieldName]['MIN'],
							$fieldName,
							$field['viewFormat'],
							'MIN'
						);
					}

					if( $field['totalAvg'] ) {
						$result["global_total".$fGoodName."_avg"] = getFormattedValue(
							$this->pageObject,
							$source['summary'][$fieldName]['AVG'],
							$fieldName,
							$field['viewFormat'],
							'AVG'
						);
					}

					if( $field['totalSum'] ) {
						$result["global_total".$fGoodName."_sum"] = getFormattedValue(
							$this->pageObject,
							$source['summary'][$fieldName]['SUM'],
							$fieldName,
							$field['viewFormat'],
							'SUM'
						);
					}
				}
			}
		}
		$result["global_total_cnt"] = str_format_number($source['count'],0);

		return $result;
	}
}


?>