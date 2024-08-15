<?php
class CheckboxField extends EditControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		parent::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_CHECKBOX;
	}
	
	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		if($mode == MODE_ADD || $mode == MODE_INLINE_ADD || $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT) 
		{
			$checked = "";
			
			if( $this->connection->dbType == nDATABASE_PostgreSQL 
				&& ($value === "t" || $value != "" && $value != 0 ) 
				|| $this->connection->dbType != nDATABASE_PostgreSQL && ($value != "" && $value != 0 )) {

				$checked=" checked";
			}

			if ( $this->connection->dbType == nDATABASE_PostgreSQL ) {
				$reservedBoolean = 'data-true="t" data-false="f"';
			}
						
			echo '<span class="checkbox r-checkbox-control"><label>';
			
			echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="checkbox">';
			echo '<input id="'.$this->cfield.'" type="Checkbox" '
				.(($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
				.'name="'.$this->cfield.'" '.$checked.' '.$reservedBoolean.'>';

			echo '</label></span>';
		}
		else
		{
			echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="checkbox">';
			echo '<select id="'.$this->cfield.'" '.(($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508==true ? 'alt="'
				.$this->strLabel.'" ' : '').'name="'.$this->cfield.'" class="form-control">';
				
			$val = array( "" => array(), "True" => array("on", "1"), "False" => array("off", "0") );		
			$optval = array("", "on", "off");
			$show = array("", "True", "False");
			
			foreach($show as $key => $shownValue)
			{	
				$sel = in_array( $value, $val[ $shownValue] ) ? " selected" : "";
				echo '<option value="'.$optval[$key].'"'.$sel.'>'.$shownValue.'</option>';
			}
			
			echo "</select>";
		}
		$this->buildControlEnd($validate, $mode);
	}

	function getFirstElementId()
	{
		return $this->cfield;
	}
	
	/**
	 * Get 'equal to on/off' condition
	 */
	public static function getFieldCondition( $field, $searchFor ) {
		if( $searchFor == "none" || $searchFor != "on" && $searchFor != "off" )
			return null;
		
		$offCondition = DataCondition::_Or( array(
			DataCondition::FieldIs( $field, dsopEQUAL, '0', false, 0, null, false ),
			DataCondition::FieldIs( $field, dsopEMPTY, '', false, 0, null, false )
		));
		
		if( $searchFor == "off" )
			return $offCondition;				
		
		return DataCondition::_Not( $offCondition );
	}
	
	/**
	 * 	Returns basic condition
	 */
	public function getBasicFieldCondition( $searchFor, $strSearchOption, $searchFor2 = "", $etype = "" ) {
		if( $strSearchOption != EQUALS )
			return null;

		return CheckboxField::getFieldCondition( $this->field, $searchFor );
	}	
}
?>