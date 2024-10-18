<?php
class UserControl extends EditControl
{
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		$this->buildControlEnd($validate, $mode);
	}
	
	public function buildUserControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
	}
	
	public function initUserControl()
	{		
	}
	
	function getUserSearchOptions()
	{
		return array();		
	}
	
	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value	
	 * @param Boolean not		It indicates if the search option negation is set 	
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */		
	function getSearchOptions($selOpt, $not, $both)
	{
		return $this->buildSearchOptions($this->getUserSearchOptions(), $selOpt, $not, $both);		
	}
	
	function init()
	{
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="public.hispmdusers" && $field=="phone_number")
	{
		$this->settings["required"] = true;                    // Wether is mandatory
$this->settings["tooltip"] = "please enter your phone number"; // Information tooltip
$this->settings["initialCountry"] = "et";               // Country default
$this->settings["preferredCountries"] = "et";           // Preferred Country;
		return;
	}	
	$tName = $this->pageObject->tName;
	$field = $this->field;
	if( $this->pageObject->pSet ) {
		if($this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->pSet->getTableType() == PAGE_DASHBOARD)
		{
			$dashFields = $this->pageObject->pSet->getDashboardSearchFields();
			$tName = $dashFields[$field][0]["table"];
			$field = $dashFields[$field][0]["field"];
		}
	}
				if($tName=="MOH_Indicators_data_Chart" && $field=="year")
	{
		$this->settings["required"] = false; // Wether is mandatory
$this->settings["tooltip"] = "Click here to enter date / time"; // Information tooltip
$this->settings["format"] = "MM/DD/YYYY"; // MomentJS Format. Check http://momentjs.com
$this->settings["showWeekNumbers"] = true; // If we want to show the week numbers
$this->settings["directionat"] = "ltr"; // Writing direction (from left to right)
$this->settings["separator"] = " - "; // String separation between dates
$this->settings["applyLabel"] = "Apply"; // Text for the "Apply" button
$this->settings["cancelLabel"] = "Clear"; // Change Function - Text for the "Clear" button
$this->settings["fromLabel"] = "From"; // Text for the date range definition (from XXXX to XXXXXX)
$this->settings["toLabel"] = "to"; // Text for the date range definition (from XXXX to XXXXXX)
$this->settings["firstDay"] = 0; // Beggining day of week (0,1)
$this->settings["startDate"] = null; // Initial date according to the date format
$this->settings["opens"] = "left"; // Calendar lookup orientation (right, center and left)
$this->settings["daysOfWeek"] = array("እሁድ","ሰኞ","ማክሰኞ","እሮብ","ሐሙስ","አርብ","ቅዳሜ"); // Weekdays
$this->settings["monthNames"] = array("ጥር","የካቲት","መጋቢት","ሚያዝያ","ግንቦት","ሰኔ","ሐምሌ","ነሐሴ","መስከረም","ጥቅምት","ህዳር","ታኅሣሥ"); // Months of the year;
		return;
	}	
	}
}
?>