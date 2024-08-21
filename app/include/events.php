<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterLogout"]=true;




//	onscreen events
		$this->events["MFR_Region_Report_map"] = true;
		$this->events["MFR_Region_map"] = true;
		$this->events["MFR_Woreda_map"] = true;
		$this->events["MFR_Zone_map"] = true;
		$this->events["MERQ_AI_Data_Assistant_snippet"] = true;
		$this->events["_ethcal_global__snippet"] = true;
		$this->events["_ethcalgc_global__snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
				// After Logout
function AfterLogout($username)
{

		

//**********  Redirect to another page  ************
header("Location: login.php");
exit();



// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterLogout

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_MERQ_AI_Data_Assistant_snippet(&$params)
	{
	echo '<IFRAME SRC="https://hispmd.merqconsultancy.org:8501" WIDTH=100% HEIGHT=700>

If you can see this, your browser does not

understand IFRAME. However, we willl still

<A HREF="../server.html">link</A>

you to the file.

</IFRAME>';
	;
}
	function event__ethcal_global__snippet(&$params)
	{
	require_once "../calendar/eth/ethcal.php";

// Use the following code to get the result below

$EC = new EthiopianCalendar(date("Y-m-d")); // set current GC date
//$EC = new EthiopianCalendar(date("YYYY-mm-dd")); // custom date format
//echo("Ethiopian Calendar");
echo("ዛሬ ቀኑ");
$EC->ECDrawCalendar(); // draw Ethiopian Calendar table
//echo("Gregorian Calendar");
//echo("Today's Date");
//$EC->GCDrawCalendar();
	;
}
	function event__ethcalgc_global__snippet(&$params)
	{
	require_once "../calendar/eth/ethcal.php";

// Use the following code to get the result below

$EC = new EthiopianCalendar(date("Y-m-d")); // set current GC date
//$EC = new EthiopianCalendar(date("YYYY-mm-dd")); // custom date format
//echo("Ethiopian Calendar");
//echo("ዛሬ ቀኑ");
//$EC->ECDrawCalendar(); // draw Ethiopian Calendar table
//echo("Gregorian Calendar");
echo("Today's Date");
$EC->GCDrawCalendar();
	;
}

	function event_MFR_Region_Report_map(&$params)
	{
		$mapSettings['id'] = "MFR_Region_Report_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "region";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "lat";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "lng";

//enable clustering for map using GoogleMaps
$mapSettings['clustering'] = true;

//enable heatmap for map using GoogleMaps
$mapSettings['heatMap'] = true;

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}
	function event_MFR_Region_map(&$params)
	{
		$mapSettings['id'] = "MFR_Region_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "Region";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Lat";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Lng";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}
	function event_MFR_Woreda_map(&$params)
	{
		$mapSettings['id'] = "MFR_Woreda_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "Address";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Lat";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Lng";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}
	function event_MFR_Zone_map(&$params)
	{
		$mapSettings['id'] = "MFR_Zone_map";
	// Longitude and latitude or address field should be specified
// name of field in table that used as address for map
$mapSettings["addressField"] = "Address";

// name of field in table that used as latitude for map
$mapSettings["latField"] = "Lat";

// name of field in table that used as longitude for map
$mapSettings["lngField"] = "Lng";

// You can specify a custom marker icon.
// Enter either a file name for all markers:
//  $mapSettings["markerIcon"] = "images/Smile.png";
// Or specify a field from your SQL query that contains marker name:
//  $mapSettings["markerField"] = "map_icon";
// The query field should contain a path tho the image file
// Leave both fields blank to use default marker.
$mapSettings["markerIcon"] = "";
$mapSettings["markerField"] = "";

// width of map in px
$mapSettings["width"] = 1200;
// height of map in px
$mapSettings["height"] = 450;
//$mapSettings['description'] = 'Description'; // a field that contains the marker description

// uncomment the next line if you need a fixed zoom for your map. Valid values are 1-20
//$mapSettings['zoom'] = 13;

// Google maps only.
// Make the markers join in clusters when zoom is wide.
// This feature works only with markers with coordinates specified.
//$mapSettings['clustering'] = true;


// Google maps only.
// Display markers in a form of a heat map.
// This feature works only with markers with coordinates specified.
//$mapSettings['heatMap'] = true;

// uncomment the next line to make map markers lead to Edit pages.
// By default clicks on markers open View pages.
// $mapSettings["markerAsEditLink"] = true;

// Display Center map link in the address field
// 1 - display center link near the address
// 2 - center map when clicking on the address itself
// $mapSettings['showCenterLink'] = 1;
// Center Link text
// $mapSettings['centerLinkText'] = 'Center';

// uncomment the next line if you want to show user's location on the map
// $mapSettings['showCurrentLocation'] = true;
// optional icon for current location marker
// $mapSettings['currentLocationIcon'] = "images/smile.png";


DisplayMap($mapSettings);
	;
}



}
?>