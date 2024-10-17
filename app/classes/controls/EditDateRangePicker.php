<?php 
class EditDateRangePicker extends UserControl
{
	function initUserControl() {
		$this->required = false;
		if ($this->settings["required"]) $this->required = $this->settings["required"]; 
		$this->addJSSetting("required", $this->required);
		$this->addJSSetting("tooltip", ($this->settings["tooltip"]?$this->settings["tooltip"]:"Click here to enter date") );
		$this->addJSSetting("format", ($this->settings["format"]?$this->settings["format"]:"MM/DD/YYYY") );
		$this->addJSSetting("showWeekNumbers", ($this->settings["showWeekNumbers"]?$this->settings["showWeekNumbers"]:false) );
                $this->addJSSetting("directionat", ($this->settings["directionat"]?$this->settings["directionat"]:"ltr") );
                $this->addJSSetting("separator", ($this->settings["separator"]?$this->settings["separator"]:" - ") );
                $this->addJSSetting("applyLabel", ($this->settings["applyLabel"]?$this->settings["applyLabel"]:"Apply") );
                $this->addJSSetting("cancelLabel", ($this->settings["cancelLabel"]?$this->settings["cancelLabel"]:"Cancel") );
                $this->addJSSetting("fromLabel", ($this->settings["fromLabel"]?$this->settings["fromLabel"]:"From") );
                $this->addJSSetting("toLabel", ($this->settings["toLabel"]?$this->settings["toLabel"]:"to") );
                $this->addJSSetting("firstDay", ($this->settings["firstDay"]?$this->settings["firstDay"]:0) );
                $this->addJSSetting("startDate", ($this->settings["startDate"]?$this->settings["startDate"]:null) );
                $this->addJSSetting("opens", ($this->settings["opens"]?$this->settings["opens"]:"left") );
                
                $this->addJSSetting("daysOfWeek", ($this->settings["daysOfWeek"]?$this->settings["daysOfWeek"]:array("Su","Mo","Tu","We","Th","Fr","Sa")) );
                $this->addJSSetting("monthNames", ($this->settings["monthNames"]?$this->settings["monthNames"]:array( "January","February","March","April","May","June","July","August","September","October","November","December")) );
	}
	
	function buildUserControl($value, $mode, $fieldNum = 0, $validate, $additionalCtrlParams, $data) {    
            
		echo $this->getSetting("label")
                        .'<DIV class="input-group date"><input id="'.$this->cfield.'" '.$this->inputStyle.' class="form-control"  style="text-align:left;" type="text" '
			.($mode == MODE_SEARCH ? 'autocomplete="off" ' : '')
			.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
			.' name="'.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field)
			.' title="' . $this->settings["tooltip"] . '" value="'.$value.'" >'
                        .'<span class="input-group-addon" id="imgCal_'.$this->cfield.'" style="cursor:auto"><span class="glyphicon glyphicon-calendar"></span></span>'
                        .'</DIV>'
                        . ( $this->required == true ? '&nbsp;<font color="red">*</font>' : '' );
			
        }

	
	function getUserSearchOptions()	{ return array(EQUALS, STARTS_WITH, NOT_EMPTY, NOT_EQUALS); }


	function addJSFiles() { // $this->pageObject->AddJSFile("plugins/controles/daterangepicker/js/moment.min.js");
                                $this->pageObject->AddJSFile("plugins/controles/daterangepicker/js/daterangepicker.js");}
                                
	function addCSSFiles() { $this->pageObject->AddCSSFile("plugins/controles/daterangepicker/css/daterangepicker.css"); }
}
?>