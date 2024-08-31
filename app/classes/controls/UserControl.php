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
	}
}
?>