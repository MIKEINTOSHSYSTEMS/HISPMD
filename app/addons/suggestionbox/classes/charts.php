<?php
class Chart
{
	protected $header;
	protected $footer;

	protected $y_axis_label;

	protected $strLabel;

	protected $arrDataLabels = array();
	protected $arrDataSeries = array();

	protected $chrt_array = array();
	public $webchart;
	protected $cname;

	protected $table_type;

	protected $cipherer = null;
	protected $pSet = null;
	protected $searchClauseObj = null;

	protected $sessionPrefix = "";

	protected $detailTablesData = array();

	protected $pageId;

	/**
	 * A flag helping to detect if to apply
	 * 'details' functionality to the chart
	 */
	protected $showDetails = true;

	/**
	 *	Flag if the chart in master or details preview mode
	 *	@type Boolean
	 */
	protected $chartPreview = false;

	/**
	 * It indicates if chart is shown on a dashboard
	 */
	protected $dashChart = false;

	/**
	 * It indicates if first point selected
	 */
	protected $dashChartFirstPointSelected = false;

	protected $detailMasterKeys = "";

	/**
	 * Dashboard table name
	 * It's set up if chart is shown on a dashboard only
	 */
	protected $dashTName = "";

	/**
	 * Dashboard element name
	 * It's set up if chart is shown on a dashboard only
	 */
	protected $dashElementName = "";

	/**
	 * @type Connection
	 */
	protected $connection;

	/**
	 *
	 */
	protected $_2d;

	/**
	 *
	 */
	protected $noRecordsFound = false;

	/**
	 *
	 */
	protected $singleSeries = false;

	protected $masterKeysReq;
	protected $masterTable;

	/**
	 * DataSource
	 */
	protected $dataSource = null;
	protected $tName = "";


	function __construct( &$ch_array, $param )
	{
		global $strTableName;

		$this->webchart = $param["webchart"];

		if( $this->webchart )
			$this->chrt_array = Convert_Old_Chart($ch_array);
		else
			$this->chrt_array = $ch_array;

		$this->tName = $this->chrt_array['tables'][0];

		// #10461, $this->setConnection(); needs to be called after value is assigned to $this->webchart
		$this->setConnection();

		$this->pSet = new ProjectSettings( $this->tName, PAGE_CHART );
		$this->showDetails = $param['showDetails'];
		if( $this->showDetails )
		{
			$this->detailTablesData = $this->pSet->getDetailTablesArr();
			for($i = 0; $i < count($this->detailTablesData); $i ++)
			{
				$strPerm = GetUserPermissions($this->detailTablesData[$i]['dDataSourceTable']);
				if ( strpos($strPerm, "S") === false )
					unset($this->detailTablesData[$i]);
			}
		}

		$this->table_type = $this->chrt_array["table_type"];
		if( !$this->table_type )
			$this->table_type = "project";

		if( $this->table_type == "project" ) {
			//	project table
			$this->dataSource = getDataSource( $this->tName, $this->pSet, $this->connection );
		} else {
			//	db-table-based webchart
			$this->dataSource = getWebDataSource( $this->chrt_array );
		}

		$this->pageId = $param["pageId"];
		$this->chrt_array["appearance"]["autoupdate"] = false;


		$this->cname = $param["cname"];

		$this->sessionPrefix = $this->chrt_array['tables'][0];

		$this->masterTable = $param["masterTable"];
		$this->masterKeysReq = $param["masterKeysReq"];

		// true if chart has master
		$this->chartPreview = $param["chartPreview"];
		$this->dashChart = $param["dashChart"];

		if( $this->dashChart )
		{
			$this->dashTName = $param["dashTName"];
			$this->dashElementName = $param["dashElementName"];
			$this->sessionPrefix = $this->dashTName."_".$this->sessionPrefix;
		}

		if( !$this->webchart && !$this->chartPreview && isset( $_SESSION[ $this->sessionPrefix.'_advsearch' ] ) )
			$this->searchClauseObj = SearchClause::UnserializeObject( $_SESSION[ $this->sessionPrefix.'_advsearch' ] );

		if( $this->searchClauseObj )
			RunnerContext::pushSearchContext( $this->searchClauseObj );

		if( $this->isProjectDB() ) {
			$this->cipherer = new RunnerCipherer( $this->tName );	
		}

		$this->setBasicChartProp();

		if( tableEventExists("UpdateChartSettings", $strTableName) )
		{
			$eventObj = getEventObject( $strTableName );
			$eventObj->UpdateChartSettings( $this );
		}
	}

	/**
	 * @param Array params
	 */
	protected function setSpecParams( $params )
	{
		if( $params['name'] == "" )
			return;

		if( $this->table_type != "db" )
			$this->arrDataSeries[] = $params['agr_func'] ? $params['label'] : $params['name'];
		else {
			$this->arrDataSeries[] = $params['table']."_".$params['name'];
//			$this->arrDataSeries[] = $params['name'];
		}
	}

	/**
	 * @param Array params
	 * @param String gTableName
	 */
	protected function setDataLabels( $params, $gTableName )
	{
		$chartType = $this->chrt_array["chart_type"]["type"];
		if( $this->table_type == "project" && !$this->webchart )
		{
			if( $chartType != "candlestick" && $chartType != "ohlc" )
				$this->arrDataLabels[] = GetFieldLabel( $gTableName, GoodFieldName($params['name']) );
			else
				$this->arrDataLabels[] = GetFieldLabel( $gTableName, GoodFieldName($params['ohlcOpen']) ) ;
		}
		else
		{
			if( !$params['label'] )
			{
				if( $chartType != "candlestick" && $chartType != "ohlc" )
					$this->arrDataLabels[] = $params['name'];
				else
					$this->arrDataLabels[] = $params['ohlcOpen'];
			}
			else
				$this->arrDataLabels[] = $params['label'];
		}
	}

	/**
	 *
	 */
	protected function setBasicChartProp()
	{
		$this->header = $this->chrt_array['appearance']['head'];
		$this->header = $this->header ? $this->header : '';

		$this->footer = $this->chrt_array['appearance']['foot'];
		$this->footer = $this->footer ? $this->footer : '';

		for ( $i = 0; $i<count($this->chrt_array['parameters']) - 1; $i++)
		{
			$this->setSpecParams( $this->chrt_array['parameters'][$i] );
			$this->setDataLabels( $this->chrt_array['parameters'][$i], GoodFieldName( $this->chrt_array['tables'][0] ) );
		}

		if( $this->chrt_array["chart_type"]["type"] != "gauge" )
		{
			$chartParams = $this->chrt_array['parameters'];
			$params = $chartParams[ count($chartParams) - 1 ];

			if( $this->table_type != "db" )
				$this->strLabel = $params['name'];
			else {
//				$this->strLabel = $params['name'];
				$this->strLabel = $params['agr_func'] ? $params['agr_func']."_".$params['table']."_".$params['name']: $params['table']."_".$params['name'];
			}
		}

		if( count( $this->arrDataLabels ) == 1 )
			$this->y_axis_label = $this->arrDataLabels[0];
		else
			$this->y_axis_label = $this->chrt_array['appearance']['y_axis_label'];
	}


	protected function getMasterCondition() {
		if( $this->dashChart )
			return null;

		$detailKeysByM = $this->pSet->getDetailKeysByMasterTable( $this->masterTable );
		if( !$detailKeysByM )
			return null;

		$conditions = array();
		for( $i = 0; $i < count( $detailKeysByM ); ++$i ) {
			$conditions[] = DataCondition::FieldEquals( $detailKeysByM[ $i ], $this->masterKeysReq[ $i + 1 ] );
		}

		return DataCondition::_And( $conditions );
	}

	/**
	 * Get datasource command
	 */
	public function getSubsetDataCommand( $ignoreFilterField = "" ) {
		$dc = new DsCommand();

		$dc->filter = DataCondition::_And( array(
				Security::SelectCondition( "S", $this->pSet ),
				$this->getMasterCondition()
			));

		if( !$this->chartPreview && $this->searchClauseObj ) {
			$search = $this->searchClauseObj->getSearchDataCondition();
			$filter = $this->searchClauseObj->getFilterCondition( $this->pSet );

			$dc->filter = DataCondition::_And( array( $dc->filter, $search, $filter ) );
		}

		// where tabs
		if( $_SESSION[ $this->sessionPrefix . "_chartTabWhere" ] ) {
			$dc->filter = DataCondition::_And( array(
				$dc->filter,
				DataCondition::SQLCondition( $_SESSION[ $this->sessionPrefix . "_chartTabWhere" ] )
			));
		}

		require_once( getabspath('classes/orderclause.php') );
		$orderObject = new OrderClause( $this->pSet, $this->cipherer, $this->sessionPrefix, $this->connection );
		$dc->order = $orderObject->getOrderFields();

		if( $this->pSet->getRecordsLimit() )
			$dc->reccount = $this->pSet->getRecordsLimit();

		if( $this->pSet->groupChart() )
			$dc->totals = $this->getGroupChartCommandTotals();

		return $dc;
	}

	/**
	 * Get ds command totals
	 * total fields appear in the same order
	   they do in an original orderby clause
	 * @return array
	 */
	protected function getGroupChartCommandTotals() {
		$totals = array();
		//	label field
		$totals[] = array(
			"alias" => $this->pSet->chartLabelField(),
			"field" => $this->pSet->chartLabelField(),
			"modifier" => $this->pSet->chartLabelInterval()
		);

		$series = $this->pSet->chartSeries();
		foreach( $series as $s ) {
			$totals[] = array(
				"alias" => $s["field"],
				"field" => $s["field"],
				"total" => strtolower( $s["total"] )
			);
		}

		$orderInfo = $this->pSet->getOrderIndexes();
		if( !$orderInfo )
			return $totals;

		$fields = array();
		foreach( $orderInfo as $o ) {
			$fields[] = $this->pSet->GetFieldByIndex( $o[0] );
		}

		foreach( $totals as $idx => $t ) {
			if( !in_array( $t["field"], $fields ) )
				$fields[] = $t["field"];

			foreach( $orderInfo as $o ) {
				$fieldIdx = $this->pSet->getFieldIndex( $t["field"] );
				if( $fieldIdx  == $o[0] ) {
					$totals[ $idx ]["direction"] = $o[1];
					break;
				}
			}
		}

		$_totals = array();
		foreach( $fields as $field ) {
			foreach( $totals as $t ) {
				if( $t["field"] == $field ) {
					$_totals[] = $t;
				}
			}
		}

		return $_totals;
	}

	/**
	 * Check for a web chart if it's based on the project table
	 * @return Boolean
	 */
	protected function isProjectDB()
	{
		if( !$this->webchart )
			return true;

		if("sgb_users" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_suggestions" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_status" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_categories" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_votes" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_comments" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_suggestions" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_comments" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_notify" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_suggestions" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_comments" == $this->chrt_array['tables'][0])
			return true;
		if("" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_suggestions" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_suggestions" == $this->chrt_array['tables'][0])
			return true;
		if("sgb_blockedip" == $this->chrt_array['tables'][0])
			return true;
		return false;
	}

	/**
	 * Set the 'connection' property #9875
	 */
	protected function setConnection()
	{
		global $cman;

		if($this->isProjectDB())
			$this->connection = $cman->byTable( $this->tName );
		else
			$this->connection = $cman->getDefault();
	}

	public function setFooter($name)
	{
		$this->footer = $name;
	}

	public function getFooter()
	{
		return $this->footer;
	}

	public function setHeader($name)
	{
		$this->header = $name;
	}

	public function getHeader()
	{
		return $this->header;
	}

	public function setLabelField($name)
	{
		$this->strLabel = $name;
	}

	public function getLabelField()
	{
		return $this->strLabel;
	}

	/**
	 * @return String
	 */
	protected function getDetailedTooltipMessage()
	{
		if( !$this->showDetails || !$this->detailTablesData )
			return "";

		$showClickHere = true;

		if( $this->dashChart )
		{
			$showClickHere = false;

			$pDSet = new ProjectSettings( $this->dashTName );
			$arrDElem = $pDSet->getDashboardElements();
			foreach($arrDElem as $elem)
			{
				if( $elem["table"] == $this->chrt_array['tables'][0] && !!$elem["details"] )
					$showClickHere = true;
			}
		}

		if( $showClickHere )
		{
			$tableCaption = GetTableCaption( $this->detailTablesData[0]['dDataSourceTable'] );
			$tableCaption = $tableCaption ? $tableCaption : $this->detailTablesData[0]['dDataSourceTable'];

			 return "\nClick here to see ".$tableCaption." details";
		}

		return "";
	}

	/**
	 * @return String
	 */
	protected function getNoDataMessage()
	{
		if( !$this->noRecordsFound )
			return "";

		if( !$this->searchClauseObj )
			return "No data yet.";

		if( $this->searchClauseObj->isSearchFunctionalityActivated() )
			return "No results found.";

		return "No data yet.";
	}

	/**
	 *
	 */
	public function write()
	{
		$data = array();
		$chart = array();

		$this->setTypeSpecChartSettings( $chart );
		if ( @$this->chrt_array["appearance"]["color71"] != "" || @$this->chrt_array["appearance"]["color91"] != "" )
			$chart["background"] = array();
		if ( @$this->chrt_array["appearance"]["color71"] != "" )
			$chart["background"]["fill"] = "#".$this->chrt_array["appearance"]["color71"];

		if ( @$this->chrt_array["appearance"]["color91"] != "" )
			$chart["background"]["stroke"] = "#".$this->chrt_array["appearance"]["color91"];

		if( $this->noRecordsFound )
		{
			$data["noDataMessage"] = $this->getNoDataMessage();
			echo my_json_encode( $data );
			return;
		}

		// animation
		if( $this->chrt_array["appearance"]["sanim"] == "true" && $this->chrt_array["appearance"]["autoupdate"] != "true" ) // update?
			$chart["animation"] = array("enabled" => "true", "duration" => 1000);

		// legend
		if( $this->chrt_array['appearance']['slegend'] == "true" && !$this->chartPreview )
			$chart["legend"] = array("enabled" => "true");
		else
			$chart["legend"] = array("enabled" => false);

		$chart["credits"] = false;
		// title/header
		$chart["title"]	= array("enabled" => "true", "text" => $this->header);
		if ( @$this->chrt_array["appearance"]["color101"] != "" )
			$chart["title"]["fontColor"] = "#".$this->chrt_array["appearance"]["color101"];

		// assign and display
		$data["chart"] = $chart;
		echo my_json_encode( $data );
	}

	/**
	 * A stub
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
	}

	/**
	 * @return Array
	 */
	protected function getGrids()
	{
		$grids = array();

		if($this->chrt_array["appearance"]["sgrid"] == "true")
		{
			$stroke = @$this->chrt_array["appearance"]["color121"] != "" ? "#" . $this->chrt_array["appearance"]["color121"] : "#ddd";

			$grid0 = array(
				"enabled" => true,
				"drawLastLine" => false,
				"stroke" => $stroke,
				"scale" => 0,
				"axis" => 0
			);

			if ( @$this->chrt_array["appearance"]["color81"] != "" )
			{
				$dataPlotBackgroundColor = "#" . $this->chrt_array["appearance"]["color81"];
				$grid0["oddFill"] = $dataPlotBackgroundColor;
				$grid0["evenFill"] = $dataPlotBackgroundColor;
			}

			$grids[] = $grid0;

			$grids[] = array(
				"enabled" => true,
				"drawLastLine" => false,
				"stroke" => $stroke,
				"axis" => 1
			);
		}

		return $grids;
	}

	/**
	 * @param String fieldName
	 * @param Array data
	 * @return String
	 */
	protected function labelFormat($fieldName, $data, $truncated = true)
	{
		if( !$fieldName )
			return "";
		
		if( $this->table_type == "db" && !!$this->chrt_array['customLabels'] )
			$fieldName = $this->chrt_array['customLabels'][ $fieldName ];

		include_once getabspath('classes/controls/ViewControlsContainer.php');
		$viewControls = new ViewControlsContainer( $this->pSet, PAGE_CHART );
		if( $this->pSet->groupChart() ) {
			$interval = $this->pSet->chartLabelInterval();
			if( $interval ) {
				$fType = $this->pSet->getFieldType( $fieldName );
				return RunnerPage::formatGroupValueStatic( $fieldName, $interval, $data[ $fieldName ], $this->pSet, $viewControls, false );
			}
		}
		$value = $viewControls->showDBValue( $fieldName, $data, "", "", false );

		if( $truncated && strlen($value) > 50 )
			$value = runner_substr($value, 0, 47)."...";

		return $value;
	}

	protected function beforeQueryEvent( &$dc ) {
		$eventsObject = getEventObject( $this->pSet->getTableName() );

		//	ASP conversion requires these checks be separate
		if( !$eventsObject )
			return;
		if( !$eventsObject->exists("BeforeQueryChart") ) {
			return;
		}

		$prep = $this->dataSource->prepareSQL( $dc );
		$where = $prep["where"];
		$sql = $prep["sql"];
		$order = $prep["order"];

		// call Before Query event
		$eventsObject->BeforeQueryChart( $sql, $where, $order );

		if( $sql != $prep["sql"] )
			$this->dataSource->overrideSQL( $dc, $sql );
		else {
			if( $where != $prep["where"] )
				$this->dataSource->overrideWhere( $dc, $where );
			if( $order != $prep["order"] )
				$this->dataSource->overrideOrder( $dc, $order );
		}
	}

	/**
	 * @return Array
	 */
	public function get_data()
	{
		$data = array();
		$clickdata = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ )
		{
			$data[$i] = array();
			$clickdata[$i] = array();
		}

		$dc = $this->getSubsetDataCommand();
		$this->beforeQueryEvent( $dc );

		if( $this->pSet->groupChart() ) {
			$rs = $this->dataSource->getTotals( $dc );
		} else {
			$rs = $this->dataSource->getList( $dc );
		}
		if( !$rs ) {
			showError( $this->dataSource->lastError() );
		}

		$row = $rs->fetchAssoc();
		if( $this->cipherer )
			$row = $this->cipherer->DecryptFetchedArray( $row );

		if( !$row )
			$this->noRecordsFound = true;

		while ($row)
		{
			for ( $i = 0; $i < count($this->arrDataSeries); $i++ )
			{
				$data[$i][] = $this->getPoint($i, $row);

				$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
				$clickdata[$i][] = $this->getActions( $row , $this->arrDataSeries[$i], $strLabelFormat );
			}

			$row = $rs->fetchAssoc();
			if( $this->cipherer )
				$row = $this->cipherer->DecryptFetchedArray( $row );
		}

		$series = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ )
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i, count($this->arrDataSeries) > 1 );
		}

		return $series;
	}

	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint( $seriesNumber, $row ) {
		$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
		
		include_once getabspath('classes/controls/ViewControlsContainer.php');
		$viewControls = new ViewControlsContainer( $this->pSet, PAGE_CHART );		
		
		if( $this->table_type != "db" || !$this->chrt_array['customLabels'] ) {
			$strDataSeries = $row[ $this->arrDataSeries[ $seriesNumber ] ];
			$fieldName = $this->arrDataSeries[ $seriesNumber ];
			$formattedValue = $viewControls->showDBValue( $fieldName, $row, "", "", false );
		} else {
			$strDataSeries = $row[ $this->chrt_array['customLabels'][ $this->arrDataSeries[ $seriesNumber ] ] ];
			$fieldName = $this->chrt_array['customLabels'][ $this->arrDataSeries[ $seriesNumber ] ];
			$formattedValue = $viewControls->showDBValue( $fieldName, $row, "", "", false );
		}
		
		return array( 
				"x" => $strLabelFormat, 
				"value" => (double)str_replace(",", ".", $strDataSeries),
				"viewAsValue" => $formattedValue
			);
	}

	/**
	 * @param String name
	 * @param Array pointsData
	 * @param Array clickData
	 * @param Number seriesNumber
	 * @param Boolean multiSeries (optional)
	 * @return Array
	 */
	protected function getSeriesData( $name, $pointsData, $clickData, $seriesNumber, $multiSeries = true )
	{
		$data = array(
			"name" => $name,
			"data" => $pointsData,
			"xScale" => "0",
			"yScale" => "1",
			"seriesType" => $this->getSeriesType($seriesNumber)
		);

		$data["labels"] = array( 
			"enabled" => $this->chrt_array["appearance"]["sval"] == "true", 
			"format" => "{%viewAsValue}"  
		);

		if ( @$this->chrt_array["appearance"]["color61"] != "" )
			$data["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color61"];

		if( $clickData && $this->detailTablesData )
			$data["clickData"] = $clickData;

		$data["tooltip"] = $this->getSeriesTooltip( $multiSeries );

		return $data;
	}

	/**
	 * @param Boolean $multiSeries
	 * @return Array
	 */
	protected function getSeriesTooltip( $multiSeries ) {		
		return array(
			"enabled" => true,
			"format" => "{%seriesName}: {%viewAsValue}".  $this->getDetailedTooltipMessage(),
		);
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		return "column";
	}

	/**
	 * @deprecated
	 * @param String str
	 * @return String
	 */
	protected function chart_xmlencode($str)
	{
		return str_replace(array("&","<",">","\""),array("&amp;","&lt;","&gt;","&quot;"),$str);
	}

	/**
	 * Get a 'point click' action data
	 * @param Array data
	 * @param Number seriesId
	 * @param Number pointId
	 * @return Array
	 */
	protected function getActions( $data, $seriesId, $pointId )
	{
		global $strTableName;

		if( !$this->detailTablesData )
			return null;

		if ( $this->dashChart )
		{
			$masterKeysArr = array();
			foreach ( $this->detailTablesData as $detailId => $detail )
			{
				foreach( $detail['masterKeys'] as $idx => $mk )
				{
					$masterKeysArr[ $detail['dDataSourceTable'] ] = array( 'masterkey'.($idx + 1) => $data[ $mk ] );
				}
			}

			if (!$this->dashChartFirstPointSelected)
			{
				$this->dashChartFirstPointSelected = true;
				$this->detailMasterKeys = my_json_encode( $masterKeysArr );
			}

			return array( "masterKeys" => $masterKeysArr, "seriesId" => $seriesId, "pointId" => $pointId );
		}

		// The one detail table is allowed for a chart page only
		$detailTableData = $this->detailTablesData[0];
		$masterquery = "mastertable=".rawurlencode( $strTableName );
		foreach( $detailTableData['masterKeys'] as $idx => $mk )
		{
			$masterquery.= "&masterkey".($idx + 1)."=".rawurlencode( $data[ $mk ] );
		}

		return array( "url" => GetTableLink( $detailTableData['dShortTable'], $detailTableData['dType'], $masterquery ) );
	}

	protected function getLogarithm()
	{
		if( $this->chrt_array["appearance"]["slog"] == "true" )
			return true;
		return false;
	}
}


class Chart_Bar extends Chart
{
	protected $stacked;
	protected $bar;

	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->stacked = $param["stacked"];
		$this->_2d = $param["2d"];
		$this->bar = $param["bar"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		if($this->bar)
			return "bar";
		else
			return "column";
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();

		$chart["scales"] = $this->getScales();
		$chart["logarithm"] = parent::getLogarithm();

		if( $this->bar )
			$chart["type"] = "bar";
		else
			$chart["type"] = "column";

		if( !$this->_2d )
			$chart["type"] .= "-3d";

		$chart["xScale"] = 0;
		$chart["yScale"] = 1;

		// grid
		$chart["grids"] = $this->getGrids();


		// Y-axis label
		$chart["yAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => $this->y_axis_label
			));

		// X-axis label
		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] == "true" )
			));

		if ( @$this->chrt_array["appearance"]["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color51"];

		if ( @$this->chrt_array["appearance"]["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->chrt_array["appearance"]["color111"];

		if ( @$this->chrt_array["appearance"]["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color131"];

		if ( @$this->chrt_array["appearance"]["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color141"];
	}

	/**
	 * "scales"
	 * @return Array
	 */
	protected function getScales()
	{
		if($this->stacked || $this->chrt_array["appearance"]["slog"] == "true")
		{
			$arr = array();
			if( $this->stacked )
				$arr["stackMode"] = "value";

			if( $this->chrt_array["appearance"]["slog"] == "true" )
			{
				$arr["logBase"] = 10;
				$arr["type"] = "log";
			};

			return array(
				array("names" => array()),
				$arr
			);
		}

		return array();
	}
}

class Chart_Line extends Chart
{
	protected $type_line;


	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->type_line = $param["type_line"];
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["type"] = "line";

		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		$chart["grids"] = $this->getGrids();
		$chart["logarithm"] = parent::getLogarithm();
		$chart["tooltip"] = array("displayMode" => "single");

		$chart["yAxes"]	= array(
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] == "true" )
			));

		if ( @$this->chrt_array["appearance"]["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color51"];

		if ( @$this->chrt_array["appearance"]["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->chrt_array["appearance"]["color111"];

		if ( @$this->chrt_array["appearance"]["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color131"];

		if ( @$this->chrt_array["appearance"]["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color141"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		switch( $this->type_line )
		{
			case "line":
				return "line";
			case "spline":
				return "spline";
			case "step_line":
				return "stepLine";
			default:
				return "line";
		}
	}
}

class Chart_Area extends Chart
{
	protected $stacked;


	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->stacked = $param["stacked"];
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();

		if( $this->stacked )
			$chart["scales"] = $this->getScales();
		$chart["type"] = "area";
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		$chart["logarithm"] = parent::getLogarithm();
		$chart["grids"] = $this->getGrids();

		$chart["tooltip"] = array("displayMode" => "single");

		$chart["yAxes"]	= array(
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] == "true" )
			));

		if ( @$this->chrt_array["appearance"]["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color51"];

		if ( @$this->chrt_array["appearance"]["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->chrt_array["appearance"]["color111"];

		if ( @$this->chrt_array["appearance"]["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color131"];

		if ( @$this->chrt_array["appearance"]["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color141"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		return "area";
	}

	/**
	 * "scales"
	 * @return Array
	 */
	protected function getScales()
	{
		if( $this->stacked )
		{
			$arr = array();
			$arr["stackMode"] = "value";

			if( $this->chrt_array["appearance"]["sstacked"] == "true" )
			{
				$arr["stackMode"] = "percent";
				$arr["maximumGap"] = "10";
				$arr["maximum"] = "100";
			};

			return array(
				array( "names"=> array() ),
				$arr
			);
		}

		return array();
	}
}

/**
 * A single series chart
 */
class Chart_Pie extends Chart
{
	protected $pie;


	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->pie = $param["pie"];
		$this->_2d = $param["2d"];
		$this->singleSeries = true;
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$series = $this->get_data();

		$chart["data"] = $series[0]["data"];
		$chart["clickData"] = $series[0]["clickData"];
		$chart["singleSeries"] = true;
		$chart["tooltip"] = $series[0]["tooltip"];
		$chart["logarithm"] = false;
		if( $this->_2d )
			$chart["type"] = "pie";
		else
			$chart["type"] = "pie-3d";

		if( !$this->pie )
			$chart["innerRadius"] = "30%";

		if( $this->chrt_array['appearance']['slegend'] == "true" && !$this->chartPreview )
		{
			$chart["legend"] = array("enabled" => "true");
		}

		$chart["labels"] = array( "enabled" => $this->chrt_array["appearance"]["sval"] == "true" || $this->chrt_array["appearance"]["sname"] == "true" );

		if ( @$this->chrt_array["appearance"]["color51"] != "" )
		{
			if ( $this->chrt_array["appearance"]["sval"] )
			{
				$chart["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color61"];
			}
			else if ( $this->chrt_array["appearance"]["sname"] )
			{
				$chart["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color51"];
			}
		}

	}
}

class Chart_Combined extends Chart
{
	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["type"] = "column";
		$chart["logarithm"] = parent::getLogarithm();
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;
		$chart["grids"] = $this->getGrids();
		$chart["yAxes"]	= array(
			array( "enabled" => "true", "title" => $this->y_axis_label )
		);

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] == "true" )
			));

		if ( @$this->chrt_array["appearance"]["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color51"];

		if ( @$this->chrt_array["appearance"]["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->chrt_array["appearance"]["color111"];

		if ( @$this->chrt_array["appearance"]["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color131"];

		if ( @$this->chrt_array["appearance"]["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color141"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		switch ($seriesNumber) {
			case 0:
				return "spline";
				break;
			case 1:
				return "splineArea";
				break;
			default:
				return "column";
		}
	}
	protected function getLogarithm()
	{
		if( $this->chrt_array["appearance"]["slog"] == "true" )
			return true;
		return false;
	}
}

/**
 * A single series chart
 */
class Chart_Funnel extends Chart
{
	protected $inver;


	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->inver = $param["funnel_inv"];
		$this->singleSeries = true;
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$series = $this->get_data();
		$chart["type"] = "pyramid";

		$chart["data"] = $series[0]["data"];
		$chart["clickData"] = $series[0]["clickData"];
		$chart["singleSeries"] = true;
		$chart["tooltip"] = $series[0]["tooltip"];
		$chart["logarithm"] = false;
		if( $this->inver )
			$chart["reversed"] = true;

		$chart["labels"] = array( "enabled" => $this->chrt_array["appearance"]["sname"] == "true" );

		if ( @$this->chrt_array["appearance"]["color51"] != "" )
			$chart["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color51"];
	}
}

class Chart_Bubble extends Chart
{
	protected $arrDataSize = array();


	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->_2d = $param["2d"];
	}

	/**
	 * @param Array params
	 */
	protected function setSpecParams( $params )
	{
		parent::setSpecParams( $params );

		if( $params['name'] != "" )
		{
			if( $this->table_type != "db" )
				$this->arrDataSize[] = $params['size'];
			else
				$this->arrDataSize[] = $params['table']."_".$params['size'];
		}
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		$chart["type"] = "cartesian";
		$chart["grids"] = $this->getGrids();
		$chart["logarithm"] = parent::getLogarithm();
		$chart["yAxes"]	= array(
			array(
				"enabled" => true,
				"title" => $this->y_axis_label,
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sval"] == "true" )
			));

		if ( @$this->chrt_array["appearance"]["color61"] != "" )
			$chart["yAxes"][0]["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color61"];

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array( "enabled" => $this->chrt_array["appearance"]["sname"] == "true" )
			));

		if ( @$this->chrt_array["appearance"]["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color51"];

		if ( @$this->chrt_array["appearance"]["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->chrt_array["appearance"]["color111"];

		if ( @$this->chrt_array["appearance"]["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color131"];

		if ( @$this->chrt_array["appearance"]["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color141"];
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		return "bubble";
	}

	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint( $seriesNumber, $row )
	{
		$pointData = parent::getPoint( $seriesNumber, $row );
		$pointData["size"] = (double)str_replace(",", ".", $row[ $this->arrDataSize[ $seriesNumber ] ]);

		return $pointData;
	}
}

class Chart_Gauge extends Chart
{
	protected $arrGaugeColor = array();
	protected $gaugeType = "";
	protected $layout = "";

	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->gaugeType = $param["gaugeType"];
		$this->layout = $param["layout"];
	}

	/**
	 * @param Array params
	 */
	protected function setSpecParams( $params )
	{
		parent::setSpecParams( $params );

		if ( $params['name'] != "" )
		{
			for ($k = 0; is_array( $params["gaugeColorZone"] ) && $k < count( $params["gaugeColorZone"] ); $k++ )
			{
				$beginColor = (float)@$params["gaugeColorZone"][ $k ]["gaugeBeginColor"];
				$endColor = (float)@$params["gaugeColorZone"][ $k ]["gaugeEndColor"];
				$gColor = "#".@$params["gaugeColorZone"][ $k ]["gaugeColor"];

				$this->arrGaugeColor[ count($this->arrDataSeries) - 1 ][] = array($beginColor, $endColor, $gColor);
			}
		}
	}

	/**
	 *
	 */
	public function write()
	{
		$data = array();

		for($i = 0; $i < count($this->arrDataSeries); $i++)
		{
			$chart = array();

			if( $this->chrt_array["appearance"]["sanim"] == "true" )
				$chart["animation"] = array("enabled" => "true", "duration" => 1000);

			$this->setGaugeSpecChartSettings( $chart, $i );

			if ( @$this->chrt_array["appearance"]["color71"] != "" || @$this->chrt_array["appearance"]["color91"] != "" )
				$chart["background"] = array();
			if ( @$this->chrt_array["appearance"]["color71"] != "" )
				$chart["background"]["fill"] = "#".$this->chrt_array["appearance"]["color71"];

			if ( @$this->chrt_array["appearance"]["color91"] != "" )
				$chart["background"]["stroke"] = "#".$this->chrt_array["appearance"]["color91"];

			if( $this->noRecordsFound )
			{
				$data["noDataMessage"] = $this->getNoDataMessage();
				echo my_json_encode( $data );
				return;
			}

			$data[] = array( "gauge" => $chart );
		}

		echo my_json_encode( array( "gauge" => $data, "header" => $this->header, "footer" => $this->footer ) );
	}

	/**
	 * @param &Array chart
	 * @param Number seriesNumber
	 */
	protected function setGaugeSpecChartSettings( &$chart, $seriesNumber )
	{
		$series = $this->get_data();
		$chart["data"] = $series[ $seriesNumber ]["data"];

		$chart["type"] = $this->gaugeType;
		$chart["layout"] = $this->layout;
		$chart["axes"] = array( $this->getAxesSettings( $seriesNumber ) );
		$chart["credits"] = false;
		$chart["chartLabels"] = $this->getCircularGaugeLabel( $seriesNumber, $chart["data"][0] );
		if( $this->gaugeType == "circular-gauge" )
		{
			$chart["needles"] = array( array("enabled" => true) );
			$chart["ranges"] = $this->getColorRanges( $seriesNumber );
		}
		else
		{
			$hasColorZones = count( $this->arrGaugeColor ) > 0 && array_key_exists($seriesNumber, $this->arrGaugeColor );

			$chart["pointers"] = array(
				array(
					"enabled" => true,
					"pointerType" => "marker",
					"type" => $this->layout == "horizontal" ? "triangleUp" : "triangleLeft",
					"name" => "",
					"offset" => $hasColorZones ? "20%" : "10%",
					"dataIndex" => 0,
				)
			);

			if( $hasColorZones )
			{
				foreach( $this->arrGaugeColor[ $seriesNumber ] as $ind => $val )
				{
					$chart["pointers"][] = array(
						"enabled" => true,
						"pointerType" => "rangeBar",
						"name" => "",
						"offset" => "10%",
						"dataIndex" => $ind + 1, // 0 is an index of the db point then range bars coords go
						"color" => $val[2]
					);
				}
			}

			$scalesData = $this->getGaugeScales( $seriesNumber );

			$chart["scale"] = 0;
			$chart["scales"] = array(
				array(
					"maximum" => $scalesData["max"],
					"minimum" => $scalesData["min"],
					"ticks" => array( "interval"=> $scalesData["interval"] ),
					"minorTicks" => array( "interval"=> $scalesData["interval"] / 2 )
				)
			);
		}
	}

	/**
	 * @param Number seriesNumber
	 * @param Array pointData
	 * @return Array
	 */
	protected function getCircularGaugeLabel( $seriesNumber, $pointData )
	{
		$label = array(
			"enabled" => true,
			"vAlign" => "center",
			"hAlign" => "center",
			"text" => $this->getChartLabelText( $seriesNumber, $pointData["value"] )
		);

		if( $this->gaugeType == "circular-gauge" )
		{
			$label["offsetY"] = -150; //fix it
			$label["anchor"] = "center";

			$label["background"] = array(
				"enabled" => true,
				"fill" => "#fff",
				"cornerType" => "round",
				"corner" => 0
			);

			$label["padding"] = array(
				"top" => 15,
				"right" => 20,
				"bottom" => 15,
				"left" => 20
			);
		}

		return array( $label );
	}

	/**
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getColorRanges( $seriesNumber )
	{
		$ranges = array();
		if( count( $this->arrGaugeColor ) > 0 && array_key_exists($seriesNumber, $this->arrGaugeColor ) )
		{
			foreach( $this->arrGaugeColor[ $seriesNumber ] as $ind => $val )
			{
				$ranges[] = array(
					"radius" => 70,
					"from" => $val[0],
					"to" => $val[1],
					"fill" => $val[2],
					"endSize" => "10%",
					"startSize" => "10%"
				);
			}
		}

		return $ranges;
	}

	/**
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getAxesSettings( $seriesNumber )
	{
		$axes = array();

		if( $this->gaugeType == "circular-gauge" )
		{
			$axes["startAngle"] = -150;
			$axes["sweepAngle"] = 300;

			$scalesData = $this->getGaugeScales( $seriesNumber );

			$axes["scale"] = array(
				"maximum" => $scalesData["max"],
				"minimum" => $scalesData["min"],
				"ticks" => array( "interval"=> $scalesData["interval"] ),
				"minorTicks" => array( "interval" => $scalesData["interval"] / 2 )
			);

			$axes["ticks"] = array(
				"type" => "trapezoid",
				"interval" => $scalesData["interval"]
			);

			$axes["minorTicks"] = array(
				"enabled" => true,
				"length" => 2
			);

			if ( @$this->chrt_array["appearance"]["color131"] != "" )
				$axes["fill"] = "#".$this->chrt_array["appearance"]["color131"];
		}

		$axes["enabled"] = true;
		$axes["labels"] = array( "enabled" => $this->chrt_array["appearance"]["sval"] == "true" );

		if ( @$this->chrt_array["appearance"]["color61"] != "" )
			$axes["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color61"];

		return $axes;
	}

	/**
	 * @param Number seriesNumber
	 * @return Array
	 */
	protected function getGaugeScales( $seriesNumber )
	{
		$min = $this->chrt_array["parameters"][ $seriesNumber ]["gaugeMinValue"];
		$max = $this->chrt_array["parameters"][ $seriesNumber ]["gaugeMaxValue"];

		if( !is_numeric( $min ) )
			$min = 0;

		if( !is_numeric( $max ) )
			$max = 100;

		$diff = $max - $min;
		$slog = floor( log10( $diff ) );
		$interval = pow(10, $slog - 2);
		$muls = array(1,2,3,5,10);

		while(true)
		{
			foreach($muls as $m)
			{
				if( $diff / ($interval * $m) <= 10 )
				{
					$interval*= $m;
					break;
				}
			}
			if( $diff / ($interval) <= 10 )
				break;

			$interval*= 10;
		}

		return array(
			"min" => $min,
			"max" => $max,
			"interval" => $interval
		);
	}


	public function getSubsetDataCommand( $ignoreFilterField = "" ) {
		$dc = parent::getSubsetDataCommand();

		if( $this->table_type == "project" ) {
			require_once( getabspath('classes/orderclause.php') );

			$orderObject = new OrderClause( $this->pSet, $this->cipherer, $this->sessionPrefix, $this->connection );
			$order = $orderObject->getOrderFields();
			$revertedOrder = array();

			foreach( $order as $o ) {
				$ro = $o;
				$ro['dir'] = $ro['dir'] == "ASC" ? "DESC" : "ASC";

				$revertedOrder[] = $ro;
			}

			$dc->order = $revertedOrder;
		}

		return $dc;
	}

	/**
	 *
	 */
	public function get_data()
	{
		$data = array();

		$dc = $this->getSubsetDataCommand();
		$this->beforeQueryEvent( $dc );

		$rs = $this->dataSource->getList( $dc );
		if( !$rs ) {
			showError( $this->dataSource->lastError() );
		}

		$row = $rs->fetchAssoc();
		if( $this->cipherer )
			$row = $this->cipherer->DecryptFetchedArray( $row );

		if( !$row )
			$this->noRecordsFound = true;

		for($i = 0; $i < count($this->arrDataSeries); $i++)
		{
			if( $row )
			{
				$data[$i] = array();
				$data[$i][] = $this->getPoint($i, $row);
			}
		}

		$series = array();
		for ( $i = 0; $i < count($this->arrDataSeries); $i++ )
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i, count($this->arrDataSeries) > 1 );
		}

		return $series;
	}

	/**
	 * @param String name
	 * @param Array pointsData
	 * @param Array clickData
	 * @param Number seriesNumber
	 * @param Boolean multiSeries (optional)
	 * @return Array
	 */
	protected function getSeriesData( $name, $pointsData, $clickData, $seriesNumber, $multiSeries = true )
	{
		if( $this->gaugeType == "linearGauge" && count( $this->arrGaugeColor ) > 0 && array_key_exists( $seriesNumber, $this->arrGaugeColor ) )
		{
			foreach( $this->arrGaugeColor[ $seriesNumber ] as $ind => $val )
			{
				$pointsData[] = array(
					"low" => $val[0],
					"high" => $val[1]
				);
			}
		}

		return array(
			"data" => $pointsData,
			"labelText" => $this->getChartLabelText( $seriesNumber, $pointsData[0]["value"] )
		);
	}

	/**
	 * @param Number seriesNumber
	 * @param String value
	 * @return String
	 */
	protected function getChartLabelText( $seriesNumber, $value )
	{
		if( $this->table_type == "project" && !$this->webchart )
		{
			$fieldName = $this->arrDataSeries[ $seriesNumber ];

			include_once getabspath('classes/controls/ViewControlsContainer.php');
			$viewControls = new ViewControlsContainer($this->pSet, PAGE_CHART);

			$data = array( $fieldName => $value );
			$viewValue = $viewControls->showDBValue( $fieldName, $data, "", "", false );

			return $this->arrDataLabels[ $seriesNumber ].": ". $viewValue;
		}

		return $this->arrDataLabels[ $seriesNumber ].": ". $value;
	}
}

class Chart_Ohlc extends Chart
{
	protected $ohcl_type;

	protected $arrOHLC_high = array();
	protected $arrOHLC_low = array();
	protected $arrOHLC_open = array();
	protected $arrOHLC_close = array();

	function __construct( &$ch_array, $param )
	{
		parent::__construct( $ch_array, $param );

		$this->ohcl_type = $param["ohcl_type"];
	}

	/**
	 * @param Array params
	 */
	protected function setSpecParams( $params )
	{
		if($this->table_type != "db")
		{
			$this->arrOHLC_open[] = $params['ohlcOpen'];
			$this->arrOHLC_high[] = $params['ohlcHigh'];
			$this->arrOHLC_low[] = $params['ohlcLow'];
			$this->arrOHLC_close[] = $params['ohlcClose'];
			return;
		}

		if( $params['agr_func'] )
		{
			$this->arrOHLC_open[] = $params['agr_func']."_".$params['table']."_".$params['ohlcOpen'];
			$this->arrOHLC_high[] = $params['agr_func']."_".$params['table']."_".$params['ohlcHigh'];
			$this->arrOHLC_low[] = $params['agr_func']."_".$params['table']."_".$params['ohlcLow'];
			$this->arrOHLC_close[] = $params['agr_func']."_".$params['table']."_".$params['ohlcClose'];
		}
		else
		{
			$this->arrOHLC_open[] = $params['table']."_".$params['ohlcOpen'];
			$this->arrOHLC_high[] = $params['table']."_".$params['ohlcHigh'];
			$this->arrOHLC_low[] = $params['table']."_".$params['ohlcLow'];
			$this->arrOHLC_close[] = $params['table']."_".$params['ohlcClose'];
		}
	}

	/**
	 *
	 */
	public function write()
	{
		$data = array();
		$chart = array();

		$this->setTypeSpecChartSettings( $chart );
		if ( @$this->chrt_array["appearance"]["color71"] != "" || @$this->chrt_array["appearance"]["color91"] != "" )
			$chart["background"] = array();
		if ( @$this->chrt_array["appearance"]["color71"] != "" )
			$chart["background"]["fill"] = "#".$this->chrt_array["appearance"]["color71"];

		if ( @$this->chrt_array["appearance"]["color91"] != "" )
			$chart["background"]["stroke"] = "#".$this->chrt_array["appearance"]["color91"];

		$chart["credits"] = false;
		$chart["title"]	= array("enabled" => "true", "text" => $this->header);
		if ( @$this->chrt_array["appearance"]["color101"] != "" )
			$chart["title"]["fontColor"] = "#".$this->chrt_array["appearance"]["color101"];

		if( $this->chrt_array['appearance']['slegend'] == "true" && !$this->chartPreview )
			$chart["legend"] = array("enabled" => "true");

		$data["chart"] = $chart;
		echo my_json_encode( $data );
	}

	/**
	 * @param &Array chart
	 */
	protected function setTypeSpecChartSettings( &$chart )
	{
		$chart["series"] = $this->get_data();
		foreach ($this->chrt_array["parameters"] as $seriesNum => $params) {
			if ( @$params["ohlcColor"] != "" )
			{
				$chart["series"][$seriesNum]["fallingStroke"] = "#".$params["ohlcColor"];
				$chart["series"][$seriesNum]["fallingFill"] = "#".$params["ohlcColor"];
				if ( $this->ohcl_type == "ohcl" )
				{
					$chart["series"][$seriesNum]["risingStroke"] = "#".$params["ohlcColor"];
					$chart["series"][$seriesNum]["risingFill"] = "#".$params["ohlcColor"];
				}
			}
			if ( @$params["ohlcCandleColor"] != "" && $this->ohcl_type != "ohcl" )
			{
				$chart["series"][$seriesNum]["risingStroke"] = "#".$params["ohlcCandleColor"];
				$chart["series"][$seriesNum]["risingFill"] = "#".$params["ohlcCandleColor"];
			}
		}

		$chart["grids"] = $this->getGrids();
		$chart["logarithm"] = parent::getLogarithm();
		$chart["type"] = "financial";
		$chart["xScale"] = 0;
		$chart["yScale"] = 1;

		$chart["yAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => $this->y_axis_label,
				"labels" => array("enabled" => $this->chrt_array["appearance"]["sval"] == "true")
			));

		if ( @$this->chrt_array["appearance"]["color61"] != "" )
			$chart["yAxes"][0]["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color61"];

		$chart["xAxes"]	= array(
			array(
				"enabled" => "true",
				"title" => array( 'text' => $this->footer ),
				"labels" => array("enabled" => $this->chrt_array["appearance"]["sname"] == "true" )
			));

		if ( @$this->chrt_array["appearance"]["color51"] != "" )
			$chart["xAxes"][0]["labels"]["fontColor"] = "#".$this->chrt_array["appearance"]["color51"];

		if ( @$this->chrt_array["appearance"]["color111"] != "" )
			$chart["xAxes"][0]["title"]["fontColor"] = "#".$this->chrt_array["appearance"]["color111"];

		if ( @$this->chrt_array["appearance"]["color131"] != "" )
			$chart["xAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color131"];

		if ( @$this->chrt_array["appearance"]["color141"] != "" )
			$chart["yAxes"][0]["stroke"] = "#".$this->chrt_array["appearance"]["color141"];

		if( $this->chrt_array["appearance"]["slog"] == "true" )
		{
			$chart["scales"] = array(
				array( "names" => array() ),
				array( "logBase" => 10, "type" => "log" )
			);
		}
	}

	/**
	 * @return Array
	 */
	public function get_data()
	{
		$data = array();
		$clickdata = array();

		for ( $i = 0; $i < count( $this->arrOHLC_open ); $i++ )
		{
			$data[$i] = array();
			$clickdata[$i] = array();
		}

		$dc = $this->getSubsetDataCommand();
		$this->beforeQueryEvent( $dc );

		$rs = $this->dataSource->getList( $dc );
		if( !$rs ) {
			showError( $this->dataSource->lastError() );
		}

		$row = $rs->fetchAssoc();
		if( $this->cipherer )
			$row = $this->cipherer->DecryptFetchedArray( $row );

		if( !$row )
			$this->noRecordsFound = true;

		while( $row )
		{
			for ( $i = 0; $i < count( $this->arrOHLC_open ); $i++ )
			{
				$data[$i][] = $this->getPoint( $i, $row );

				$strLabelFormat = $this->labelFormat( $this->strLabel, $row );
				$clickdata[$i][] = $this->getActions( $row , $this->arrDataSeries[$i], $strLabelFormat );
			}

			$row = $rs->fetchAssoc();
			if( $this->cipherer )
				$row = $this->cipherer->DecryptFetchedArray( $row );
		}

		$series = array();
		for ( $i = 0; $i < count( $this->arrOHLC_open ); $i++ )
		{
			$series[] = $this->getSeriesData( $this->arrDataLabels[$i], $data[$i], $clickdata[$i], $i );
		}

		return $series;
	}

	/**
	 * @return String
	 */
	protected function getSeriesType($seriesNumber)
	{
		if( $this->ohcl_type == "ohcl" )
			return "ohlc";

		return "candlestick";
	}

	/**
	 * @param Boolean $multiSeries 
	 * @return Array
	 */
	protected function getSeriesTooltip( $multiSeries ) {
		$tooltipSettings = array(
			"enabled" => true
		);

		return $tooltipSettings;
	}

	/**
	 * @param Number seriesNumber
	 * @param Array row
	 * @return Array
	 */
	protected function getPoint( $seriesNumber, $row )
	{
		if( $this->table_type!="db" || !$this->chrt_array['customLabels'] )
		{
			$high = $row[ $this->arrOHLC_high[ $seriesNumber ] ];
			$low = $row[ $this->arrOHLC_low[ $seriesNumber ] ];
			$open = $row[ $this->arrOHLC_open[ $seriesNumber ] ];
			$close = $row[ $this->arrOHLC_close[ $seriesNumber ] ];
		}
		else
		{
			$high = $row[ $this->chrt_array['customLabels'][ $this->arrOHLC_high[ $seriesNumber ] ] ];
			$low = $row[ $this->chrt_array['customLabels'][ $this->arrOHLC_low[ $seriesNumber ] ] ];
			$open = $row[ $this->chrt_array['customLabels'][ $this->arrOHLC_open[ $seriesNumber ] ] ];
			$close = $row[ $this->chrt_array['customLabels'][ $this->arrOHLC_close[ $seriesNumber ] ] ];
		}

		return array(
			"x" => $this->labelFormat( $this->strLabel, $row ),
			"open" => (double)$open,
			"high" => (double)$high,
			"low" => (double)$low,
			"close" => (double)str_replace(",", ".", $close)
		);
	}
}
?>