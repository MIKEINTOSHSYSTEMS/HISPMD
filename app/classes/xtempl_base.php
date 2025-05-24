<?php
// menuItem class
include_once(getabspath("include/menuitem.php"));
include(getabspath("include/testing.php"));

/**
  * Xlinesoft Template Engine
  */
class XTempl_Base
{
	var $xt_vars=array();
	var $xt_stack;
	var $xt_events=array();
	var $template;
	var $template_file;
	var $charsets=array();
	var $testingFlag=false;
	var $eventsObject;
	var $hiddenBricks = array();
	var $hiddenItems = array();
	/**
	 * array if arrays
	 */
	var $hiddenRecordItems = array();
	var $preparedContainers = array();
	var $layout;
	var $pageId = 1;
	var $pageObject = null;

	protected $messageParamStack = array();

	/**
	 * $cssFiles
	 * Array of css files for page styles and layouts
	 * @var {array}
	 * @intellisense
	 */
	var $cssFiles = array();

	var $jsonMode = false;

	/**
	  * Returns variable by name.
      * @intellisense
      */
	function getVar($name)
	{
		return xt_getvar($this,$name);
	}

	function recTesting(&$arr)
	{
		global $testingLinks;
		foreach($arr as $k=>$v)
			if(is_array($v))
				$this->recTesting($arr[$k]);
			else
				if(isset($testingLinks[$k]))
					$arr[$k].=" func=\"".$testingLinks[$k]."\"";
	}

	function Testing()
	{
		if(!$this->testingFlag)
			return;
		$this->recTesting($this->xt_vars);
	}

	function report_error($message)
	{
		echo $message;
		exit();
	}

	protected function assign_headers()
	{
		//check if headers are already assigned
		if( isset( $this->xt_vars['header'] ) )
			return;

		if ( !$this->mobileTemplateMode() )
		{
			$this->assign("header","header");
			$this->assign("footer","footer");
		}
		else
		{
			$this->assign("header","mheader");
			$this->assign("footer","mfooter");
		}
	}


	/**
	 * @param Boolean hideAddedCharts (optional) #9607 1.
	 */
	 function __construct( $hideAddedCharts = false )
	{
		global $mlang_charsets;

		$this->xt_vars=array();
		$this->xt_stack=array();
		$this->xt_stack[]=&$this->xt_vars;

		$this->assign_method("event",$this, "xt_event", array());
		$this->assign_function("label","xt_label",array());
		$this->assign_function("tooltip","xt_tooltip",array());
		$this->assign_function("tooltipAttr","xt_tooltipAttr",array());
		$this->assign_method("custom", $this, "customLabel",array());
		$this->assign_function("htmlcustom","xt_htmlcustom",array());
		$this->assign_function("cl_length","xt_cl_length",array());
		$this->assign_function("caption","xt_caption",array());
		$this->assign_function("pagetitlelabel", "xt_pagetitlelabel", array());
		$this->assign_function("logo","printProjectLogo",array());
		$this->assign_function("home_link","printHomeLink",array());
		$this->assign_function("file_url","getFileUrl",array());
		$this->assign_function("jscaption","xt_jscaption",array());
		$this->assign_function("jslabel","xt_jslabel",array());
		$this->assign_function("jspagetitlelabel","xt_jspagetitlelabel",array());

		$this->assign_function("pdf_image","getPdfImageObject",array());
		$this->assign_function("pdf_chart", "getPdfChartObject", array());

		$this->assign_method("map", $this, "xt_event_map", array());

		$this->assign( "projectPath", runner_htmlspecialchars( projectPath() ) );

		//	message parameters
		$this->assign_method("mlp_push", $this, "mlpPush", array());
		$this->assign_method("mlp_pop", $this, "mlpPop", array());
		$this->assign_method("mlparam", $this, "mlpParam", array());
		$this->assign_method("mltext", $this, "mlText", array());

		$this->assign_method("messagepart", $this, "messagePart", array());


		if( !$hideAddedCharts ) //#9607 1. Temporary fix
		{
			$this->assign_function("dhis2_analytics_chart_chart","xt_showchart",
			array(
				"chartName"=>"dhis2_analytics_chart",
				"table"=>"DHIS2_Analytics Chart",
				"ctype"=>"2DColumn"));
			$this->assign_function("dhis2_reporting_rate_chart1_chart","xt_showchart",
			array(
				"chartName"=>"dhis2_reporting_rate_chart1",
				"table"=>"DHIS2_Reporting_Rate_Chart",
				"ctype"=>"2DColumn"));
			$this->assign_function("dhis2_reporting_rates_chart_chart","xt_showchart",
			array(
				"chartName"=>"dhis2_reporting_rates_chart",
				"table"=>"DHIS2_Reporting_Rates_Chart",
				"ctype"=>"Area"));
			$this->assign_function("mfr_dashboard_reports_chart_chart","xt_showchart",
			array(
				"chartName"=>"mfr_dashboard_reports_chart",
				"table"=>"mfr_dashboard_reports_chart",
				"ctype"=>"2DColumn"));
			$this->assign_function("mfr_operational_status_chart_chart","xt_showchart",
			array(
				"chartName"=>"mfr_operational_status_chart",
				"table"=>"mfr_operational_status_chart",
				"ctype"=>"2DDoughnut"));
			$this->assign_function("mfr_region_chart_chart","xt_showchart",
			array(
				"chartName"=>"mfr_region_chart",
				"table"=>"mfr_region_chart",
				"ctype"=>"2DBar"));
			$this->assign_function("public_mfr_facilities_register_chart_chart","xt_showchart",
			array(
				"chartName"=>"public_mfr_facilities_register_chart",
				"table"=>"public.mfr_facilities_register_chart",
				"ctype"=>"2DColumn"));
			$this->assign_function("moh_indicators_data_chart_chart","xt_showchart",
			array(
				"chartName"=>"moh_indicators_data_chart",
				"table"=>"MOH_Indicators_data_Chart",
				"ctype"=>"Combined"));
			$this->assign_function("moh_indicators_data_values_chart1_chart","xt_showchart",
			array(
				"chartName"=>"moh_indicators_data_values_chart1",
				"table"=>"MoH_Indicators_Data_Values_Chart",
				"ctype"=>"Line"));
			$this->assign_function("dhis2_reporting_rate_details_chart_chart","xt_showchart",
			array(
				"chartName"=>"dhis2_reporting_rate_details_chart",
				"table"=>"DHIS2_Reporting_Rate_Details_Chart",
				"ctype"=>"Combined"));
			$this->assign_function("dhis2_reportingrate_chart_chart","xt_showchart",
			array(
				"chartName"=>"dhis2_reportingrate_chart",
				"table"=>"DHIS2_ReportingRate_Chart",
				"ctype"=>"2DColumn"));
			$this->assign_function("dhis_2_reporting_rates_chart_chart","xt_showchart",
			array(
				"chartName"=>"dhis_2_reporting_rates_chart",
				"table"=>"DHIS_2_Reporting_Rates_Chart",
				"ctype"=>"2DColumn"));
		}


		$mlang_charsets=array();
		
$mlang_charsets["English"]="Windows-1252";;
		$this->charsets = &$mlang_charsets;

		$html_attrs = '';
		if(isRTL())
		{
			$this->assign("RTL_block",true);
			$this->assign("rtlCSS",true);
			$html_attrs .= 'dir="RTL" ';
		}
		else
		{
			$this->assign("LTR_block",true);
		}
		if(mlang_getcurrentlang() == 'English')
				$html_attrs .= 'lang="en"';
		$this->assign("html_attrs",$html_attrs);
		$this->assign("menu_block",true);
	}


	/**
	  * Assign value to name.
	  * @intellisense
	  */
	function assign($name,$val)
	{
		$this->xt_vars[$name]=$val;
	}

	/**
	  * Assign value to name by reference.
	  * @intellisense
	  */
	function assignbyref($name,&$var)
	{
		$this->xt_vars[$name]=&$var;
	}

	function bulk_assign( $arr )
	{
		foreach($arr as $key => $value)
		{
			$this->xt_vars[$key] = $value;
		}
	}


	function enable_section($name)
	{
		if(!isset($this->xt_vars[$name]))
		{
			$this->xt_vars[$name] = true;
		}
		elseif($this->xt_vars[$name] == false)
		{
			$this->xt_vars[$name] = true;
		}
	}

	function assign_section($name,$begin,$end)
	{
		$arr = array();
		$arr["begin"]=$begin;
		$arr["end"]=$end;
		$this->xt_vars[$name]=&$arr;
	}

	function assign_loopsection($name,&$data)
	{
		$arr = array();
		$arr["data"]=&$data;
		$this->xt_vars[$name]=&$arr;
	}

	function assign_array($name,$innername,$_arr)
	{
		$arr = array();
		foreach($_arr as $a)
			$arr[] = array($innername => $a);
		$this->xt_vars[$name]=array("data" => $arr);
	}


	function assign_loopsection_byValue($name, $data)
	{
		$arr = array();
		$arr["data"] = $data;
		$this->xt_vars[$name] = &$arr;
	}

	function assign_function( $name, $func, $params )
	{
		$this->xt_vars[$name] = XTempl::create_function_assignment( $func,$params );
	}

	static function create_function_assignment($func,$params)
	{
		return array( "func" => $func, "params" => $params );
	}

	function assign_method($name,&$object,$method,$params = null)
	{
		$this->xt_vars[$name] = XTempl::create_method_assignment( $method, $object, $params );
	}

	static function create_method_assignment( $method, &$object, $params = null )
	{
		return array( "method"=>$method,
			"params"=>$params,
			"object" => $object
		);
	}

	/**
	 * Remove assigned element
	 * @param string - name of assigned element
	 * @intellisense
	 */
	function unassign($name){
		unset($this->xt_vars[$name]);
	}

	function assign_event($name,&$object,$method,$params)
	{
		 $this->xt_events[$name]=array("method"=>$method,"params"=>$params);
		 $this->xt_events[$name]["object"]=&$object;
	}

	function xt_event($params)
	{
		global $projectLanguage;
		if( $this->jsonMode ) {
			if( $projectLanguage !== "aspx" ) {
				ob_start();
				$this->xt_doevent( $params );
				$out = jsreplace( ob_get_contents() );
				ob_end_clean();
				echo $out;
				return;
			} else {
				return jsreplace( $this->xt_doevent( $params ) );
			}
		}
		return $this->xt_doevent( $params );
	}

	function customLabel($params)
	{
		$ret = GetCustomLabel($params["custom1"]);
		$ret = $this->processMessageParams( $ret );

		if ( $this->jsonMode )  {
			$ret = jsreplace( $ret );
		}

		echo $ret;
	}


	function xt_event_map( $params )
	{
		if( !$this->jsonMode )
			return $this->xt_doevent( $params );

		ob_start();
		$this->xt_doevent( $params );
		$out = ob_get_contents() ;
		ob_end_clean();

		echo $out;
	}

	function xt_doevent($params)
	{
	}

	function fetchVar($varName)
	{
		ob_start();
		$varParams = array();
		$this->processVar($this->getVar($varName), $varParams);
		$out=ob_get_contents();
		ob_end_clean();
		return $out;

	}

	function fetch_loadedJSON( $filtertag="" ) {
		$this->jsonMode = true;
		return $this->fetch_loaded( $filtertag );
	}

	function fetch_loaded($filtertag="")
	{
		ob_start();
		$this->display_loaded($filtertag);
		$out=ob_get_contents();
		ob_end_clean();
		return $out;
	}


	function call_func($var)
	{
	}

	function set_template($template)
	{
		$this->template_file = basename($template,".htm");
		$this->set_layout();


		//	read template file
		$templatesPath = "templates/";
		if ( $this->mobileTemplateMode() )
			$templatesPath = "mobile/";

		if( $this->jsonMode ) {
			$templatesPath = "pdf/";
			$template = $this->template_file . ".json";
		}

		if( !$this->jsonMode && isOldCustomFile( $this->template_file ) ) {
			$template = getOldTemplateFilename( $this->template_file ).".htm";
		}
		if(file_exists(getabspath($templatesPath.$template)))
			$this->template = myfile_get_contents(getabspath($templatesPath.$template));


		if ( $this->mobileTemplateMode() && $this->template=='' )
		{
			$templatesPath = "templates/";
			$this->template = myfile_get_contents(getabspath($templatesPath.$template));
		}
		$this->assign_headers();
	}

	function set_layout()
	{
		$this->layout = getLayoutByFilename( $this->template_file );
	}

	function prepare_template($template)
	{
		$this->prepareContainers();
	}

	function load_templateJSON($template) {
		$this->jsonMode = true;
		$this->load_template( $template );
	}

	function display_loaded($filtertag = "")
	{
		$str = $this->template;
		if($filtertag)
		{
			if( !isset($this->xt_vars[ $filtertag ]) || $this->xt_vars[ $filtertag ] === false )
				return;

			$pos1 = strpos($this->template, "{BEGIN ".$filtertag."}");
			$pos2 = strpos($this->template, "{END ".$filtertag."}");
			if($pos1 === false || $pos2 === false)
				return;

			$pos2 += strlen("{END ".$filtertag."}");
			$str = substr($this->template,$pos1,$pos2-$pos1);
		}
		$this->Testing();
		$this->process_template( $str );
	}

	function load_template($template)
	{
		$this->set_template($template);
		$this->prepareContainers();
	}

	function display($template)
	{
	}

	function displayJSON($template)
	{
		$this->jsonMode = true;
		$this->display( $template );
	}

	function displayPartial($template)
	{
		$savedTemplate = $this->template;
		$this->display( $template );
		$this->template = $savedTemplate;
	}

	function processVar(&$var, &$varparams)
	{
	}

	function displayItemsHidden($items, $recordId = "")
	{
		if( !$items )
			return;
		foreach($items as $name)
		{
			$this->displayItemHidden( $name, $recordId );
		}
	}

	function showHiddenItems($items)
	{
		if( !$items )
			return;
		foreach($items as $name)
		{
			unset( $this->hiddenItems[$name] );
		}
	}


	function displayItemHidden($name, $recordId = "")
	{
		if( !$recordId )
			$this->hiddenItems[$name] = true;
		else {
			if( !isset( $this->hiddenRecordItems[ $name ] ))
				$this->hiddenRecordItems[ $name ] = array();
			$this->hiddenRecordItems[ $name ][ $recordId ] = true;
		}

	}

	function showHiddenItem($name, $recordId = "")
	{
		if( !$recordId )
			unset( $this->hiddenItems[$name] );
		else {
			if( isset( $this->hiddenRecordItems[ $name ] ))
				unset( $this->hiddenRecordItems[ $name ][ $recordId ] );
		}

	}





	/**
	 * DEPRECATED
	 * Hide All bricks on the page
	 * @param {array} of excepted bricks
	 * @intellisense
	 */
	function hideAllBricksExcept($arrExceptBricks){
	}

	/**
	 * Show brick on the page
	 * @param {string} name of brick
	 * @intellisense
	 */
	function showBrick($name)
	{
		if($this->layout->version == PD_BS_LAYOUT)
			return;
		foreach($this->layout->containers as $cname=>$container)
		{
			foreach($container as $brick)
			{
				if ($brick["name"]==$name){
					$this->assign($brick["block"],true);
				}
			}
		}
	}

	private function setContainerDisplayed($cname, $show, $firstContainerSubstyle, $lastContainerSubstyle)
	{
		if( $this->layout->version == BOOTSTRAP_LAYOUT )
		{
			$this->assign( "container_".$cname, true );
			if( !$show )
				$this->assign( $cname . "_chiddenattr", "data-hidden" );
			return;
		}
		$this->prepareContainerAttrs( $cname );
		if( $show )
		{
			$styleString = $this->preparedContainers[ $cname ]["showString"];
			$this->unassign("wrapperclass_".$cname);
		}
		else
		{
			$styleString = $this->preparedContainers[ $cname ]["hideString"];
			$this->assign("wrapperclass_".$cname,"rnr-hiddencontainer");
		}
		$this->assign_section("container_".$cname,"<div ".$styleString.">","</div>");
		$this->assign("cheaderclass_".$cname,$firstContainerSubstyle);
		$this->assign("cfooterclass_".$cname,$lastContainerSubstyle);
	}

	private function getPageStyle()
	{
		if(postvalue("pdf"))
		{
			return  $this->layout->pdfStyle();
		}
		return $this->layout->style;
	}

	private function prepareContainerAttrs( $cname )
	{
		$pageStyle = $this->getPageStyle();
		if( isset($this->preparedContainers[ $cname ]) )
			return;
		$this->preparedContainers[ $cname ] = array();
		$hiddenStyleString = "";
		$styleString = "";
		if(isset($this->layout->skins[$cname]))
		{
			$skin = @$this->layout->skins[$cname];

			$buttonsType = $this->layout->skinsparams[$skin]["button"];
			$buttonsClass = $buttonsType == "button2" ? " aslinks" : " asbuttons";

		// printing properties
			$printMode = $this->layout->container_properties[$cname]["print"];
			$printClass = "";

			if($printMode == "repeat")
				$printClass = " rp-repeat";
			else if($printMode == "none")
				$printClass = " rp-noprint";

			if($this->layout->version == 1) {
				$styleString = " class=\"rnr-cw-".$cname." runner-s-".$skin." ".$pageStyle;
			} else {
				$styleString = " class=\"rnr-cw-".$cname." rnr-s-".$skin.$buttonsClass." ".$pageStyle.$printClass;
			}
			$hiddenStyleString = $styleString . " rnr-hiddencontainer";
			$styleString .= "\"";
			$hiddenStyleString .= "\"";
			$this->preparedContainers[ $cname ] = array("showString" => $styleString, "hideString" => $hiddenStyleString );
		}
	}
	/**
	 * Prepare containers for show on page
	 * @intellisense
	 */
	function prepareContainers()
	{
		if(!$this->layout)
			return;
		$this->layout->prepareForms( $this, $this->hiddenItems, $this->hiddenRecordItems, $this->pageObject );
	}

	function hideField($fieldName)
	{
		if($this->layout->version == 1)
			$this->assign("fielddispclass_".GoodFieldName($fieldName), "runner-hiddenfield");
		else
			$this->assign("fielddispclass_".GoodFieldName($fieldName), "rnr-hiddenfield");
	}

	function showField($fieldName)
	{
		$this->assign("fielddispclass_".GoodFieldName($fieldName), "");
	}


	function mobileTemplateMode() {
		if($this->layout)
			return mobileDeviceDetected() && $this->layout->version < BOOTSTRAP_LAYOUT;
		else
			return false;
	}

	function setPage( $page ) {
		$this->pageObject = $page;
	}

	function transformFuncParams( $varparams, &$params ) {
		$key=1;
		foreach($varparams as $val)
		{
			if( strlen($val) )
				$params["custom".($key++)] = $val;
		}
		return $params;
	}

	/**
	 * Create new frame in the message stack
	 */
	function mlpPush($params = null) {
		$this->messageParamStack[] = array();
	}

	function mlpPop($params = null) {
		array_pop( $this->messageParamStack );
	}

	function & mlpHead() {
		if( $this->messageParamStack ) {
			return $this->messageParamStack[ count( $this->messageParamStack ) - 1 ];
		}
		return array();
	}

	/**
	 * Substitute %xxx% macros in the string with values from mlpHead
	 * @return String
	 */
	function processMessageParams( $str ) {
		$stackFrame =& $this->mlpHead();
		if( !$stackFrame ) {
			return $str;
		}
		$pattern = '/\%(\w)+\%/';
		$matches = findMatches( $pattern, $str );
		$out = "";
		$offset = 0;
		foreach( $matches as $m ) {
			$out .= substr( $str, $offset, $m["offset"] - $offset );
			$paramName = substr( $m["match"], 1, strlen( $m["match"] ) - 2 );
			$offset = $m["offset"] + strlen( $paramName ) + 2;
			$out .= $stackFrame[ $paramName ];
		}
		$out .= substr( $str, $offset );
		return $out;
	}

	function mlpParam( $params ) {
		$stackFrame =& $this->mlpHead();
		$type = $params["custom2"];
		$name = $params["custom1"];
		$value = "";
		if( $type == "text" ) {
			//	todo: support for spaces and curly braces
			$text = $params["custom3"];
			$stackFrame[ $name ] = XTempl_Base::unmaskText( $text );
		}
		if( $type == "custom" ) {
			$labelName = $params["custom3"];
			$stackFrame[ $name ] = GetCustomLabel( $labelName );
		}
		else if( $type == "var" ) {
			$varName = $params["custom3"];
			$stackFrame[ $name ] = $this->getVar( $varName );
		}

	}

	static function unmaskText( $str ) {
		return str_replace(
			array(  "\\_", "\\[", "\\]", "\\\\" ),
			array(  " ", "{", "}", "\\" ),
			$str
		);
	}


	function mlText( $params ) {
		$text = $params["custom1"];
		echo $this->processMessageParams( XTempl_Base::unmaskText( $text ) );
	}

	/**
	 * Show n-th part of a message
	 * A part is a substring adjacent to a '%value%'-like substring
	 */
	function messagePart( $params ) {
		$tag = $params["custom1"];
		$partN = $params["custom2"];

		$fullMessage = mlang_message( $tag );
		$pattern = "/%[^%\W]+%/i";

		$partOffset = 0;
		$parts = array();
		$matches = findMatches( $pattern, $fullMessage );
		for( $i = 0; $i < count( $matches ); ++$i ) {
			$m = $matches[ $i ];
			if ( $m["offset"] > 0 ) {
				$parts[] = substr( $fullMessage, $partOffset, $m["offset"] - $partOffset );
			}
			$partOffset = $m["offset"] +  strlen( $m["match"] );
		}
		if( $partOffset < strlen( $fullMessage ) ) {
			$parts[] = substr( $fullMessage, $partOffset );
		}

		if( $partN <= count( $parts ) )
			echo $parts[ $partN - 1 ];

		echo "";
	}


	function process_template( $str )
	{
	//	parse template file tag by tag
		$varparams=array();
		$start=0;
		$literal=false;
		$len = strlen($str);
		while(true)
		{
			$pos = strpos($str,"{",$start);
			if($pos===false)
			{
				echo substr($str,$start,$len-$start);
				break;
			}
			$section=false;
			$var=false;
			$message=false;
			if(substr($str,$pos+1,6)=="BEGIN ")
				$section=true;
			elseif(substr($str,$pos+1,1)=='$')
				$var=true;
			elseif(substr($str,$pos+1,14)=='mlang_message ')
			{
				$message=true;
			}
			else
			{
	//	no tag, just '{' char
				echo substr($str,$start,$pos-$start+1);
				$start=$pos+1;
				continue;
			}
			echo substr($str,$start,$pos-$start);
			if($section)
			{
	//	section
				$endpos=strpos($str,"}",$pos);
				if($endpos===false)
				{
					$this->report_error("Page is broken");
					return;
				}
				$section_name=trim(substr($str,$pos+7,$endpos-$pos-7));
				$endtag="{END ".$section_name."}";
				$endpos1=strpos($str,$endtag,$endpos);
				if($endpos1===false)
				{
					echo "End tag not found:".runner_htmlspecialchars($endtag);
					$this->report_error("Page is broken");
					return;
				}
				$section=substr($str,$endpos+1,$endpos1-$endpos-1);
				$start=$endpos1+strlen($endtag);
				$sectionVar = xt_getvar( $this, $section_name );
				if($sectionVar===false)
				{
					continue;
				}
				$begin="";
				$end="";
				if(is_array($sectionVar))
				{
					$begin=@$sectionVar["begin"];
					$end=@$sectionVar["end"];

					$var=@$sectionVar["data"];
				}
				else
				{
					$var = $sectionVar;
				}
				if(!is_array($var))
				{
	//	if section
					echo $begin;
					if(is_array($sectionVar))
					$this->xt_stack[]=&$sectionVar;
					$this->process_template( $section );
					if(is_array($sectionVar))
						array_pop($this->xt_stack);
						$this->processVar($end, $varparams);
				}
				else
				{
	//	foreach section
					echo $begin;
					$keys=array_keys($var);
					foreach($keys as $i)
					{
						$this->xt_stack[]=&$var[$i];
						if(is_array($var[$i]) && isset($var[$i]["begin"]))
							echo $var[$i]["begin"];
						$this->process_template( $section );
						array_pop($this->xt_stack);
						if(is_array($var[$i]) && isset($var[$i]["end"]))
							echo $var[$i]["end"];
					}
					$this->processVar($end, $varparams);
				}
			}
			elseif($var)
			{
	//	display a variable or call a function
				$endpos=strpos($str,"}",$pos);
				if($endpos===false)
				{
					$this->report_error("Page is broken");
					return;
				}
				$varparams=array();
				$var_name = trim(substr($str,$pos+2,$endpos-$pos-2));
				if(strpos($var_name," ")!==FALSE)
				{
					$varparams = explode(" ",$var_name);
					$var_name = $varparams[0];
					unset($varparams[0]);
				}
				$start=$endpos+1;
				$var = xt_getvar( $this, $var_name );
				if($var===false)
				{
					continue;
				}
				$this->processVar($var, $varparams);
			}
			elseif($message)
			{
				$endpos=strpos($str,"}",$pos);
				if($endpos===false)
				{
					$this->report_error("Page is broken");
					return;
				}
				$tag = trim(substr($str,$pos+15,$endpos-$pos-15));
				$start=$endpos+1;
				echo runner_htmlspecialchars(
					$this->processMessageParams(
						mlang_message($tag)
					));
			}
		}
	}

}
?>