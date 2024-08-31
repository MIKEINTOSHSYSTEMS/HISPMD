<?php 
class EditTelephone extends UserControl
{
	function initUserControl() {

		$this->addJSSetting("required", ($this->settings["required"]?$this->settings["required"]:false) );
                $this->required = $this->settings["required"];
		
                $this->addJSSetting("tooltip", ($this->settings["tooltip"]?$this->settings["tooltip"]:"Click here to enter telephone") );
                $this->addJSSetting("initialCountry", ($this->settings["initialCountry"]?$this->settings["initialCountry"]:"us") );
                $this->addJSSetting("preferredCountries", ($this->settings["preferredCountries"]?$this->settings["preferredCountries"]:"us") );
 
	}
        
	
	function buildUserControl($value, $mode, $fieldNum = 0, $validate, $additionalCtrlParams, $data) {    
            
		echo $this->getSetting("label")
                        .'<DIV class="phone"><input id="'.$this->cfield.'" '.$this->inputStyle.' class="form-control"  style="text-align:left;" type="tel" '
			.($mode == MODE_SEARCH ? 'autocomplete="off" ' : '')
			.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
			.' name="'.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field)
			.' title="' . $this->settings["tooltip"] . '" value="'.$value.'" >'
                        // .'<span class="input-group-addon" id="imgCal_'.$this->cfield.'" style="cursor:auto"><span class="glyphicon glyphicon-calendar"></span></span>'
                        .'</DIV>'
                        . ( $this->required == true ? '&nbsp;<font color="red">*</font>' : '' );
			
        }

	
	function getUserSearchOptions()	{ return array(EQUALS, STARTS_WITH, NOT_EMPTY, NOT_EQUALS); }


	function addJSFiles() { $this->pageObject->AddJSFile("plugins/controles/telephone/js/utils.js");
                                $this->pageObject->AddJSFile("plugins/controles/telephone/js/intlTelInput.min.js");}
                                
	function addCSSFiles() { $this->pageObject->AddCSSFile("plugins/controles/telephone/css/intlTelInput.min.css"); }
}
?>