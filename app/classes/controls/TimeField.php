<?php
require_once getabspath('classes/controls/DateTimeControl.php');
class TimeField extends DateTimeControl
{
	protected $timeAttrs;
	
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		
		$this->format = EDIT_FORMAT_TIME;
		$this->timeAttrs = $this->pageObject->pSetEdit->getFormatTimeAttrs( $this->field );
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		if( $this->container->pageType == PAGE_LIST )
			$value = prepare_for_db($this->field, $value, "time");

		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);
		
		echo '<input id="'.$this->ctype.'" '.$this->inputStyle.' type="hidden" name="'.$this->ctype.'" value="time">';
		

		if( count( $this->timeAttrs ) )
		{	
			$type = $this->pageObject->mobileTemplateMode() ? "time" : "text";

			$classString = 'class="form-control"';				
				
			$resultHtml = '<input '.$this->getPlaceholderAttr().' type="'.$type.'" '.$this->inputStyle.' name="'.$this->cfield.'" ' . $classString
					.(($mode==MODE_INLINE_EDIT || $mode==MODE_INLINE_ADD) && $this->is508 == true ? 'alt="'.$this->strLabel.'" ' : '')
					.'id="'.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field);
					
			if( $this->timeAttrs["useTimePicker"] && !$this->pageObject->mobileTemplateMode() )
			{
				$convention = $this->timeAttrs["hours"];
				$loc = getLacaleAmPmForTimePicker($convention, true);
				$tpVal = getValForTimePicker($this->type, $value, $loc['locale']);
				
				$resultHtml .= ' value="'.runner_htmlspecialchars($tpVal['val']).'">';
				
				$resultHtml .= '<span class="input-group-addon" id="trigger-test-' . $this->cfield
					.'"><span class="glyphicon glyphicon-time"></span></span>';
			}
			else
				$resultHtml .=' value="'.runner_htmlspecialchars( $this->getOutputValue( $value ) ).'">';


			if ( isRTL() )
				$resultHtml .= "<span></span>"; // for bootstrap calend icon anomaly
			
			$resultHtml = '<div class="input-group" '.$this->inputStyle.' >' . $resultHtml . '</div>';
			echo $resultHtml;
		}
		
		$this->buildControlEnd($validate, $mode);
	}

	/**
	 * @param Mixed fieldValue
	 * @return String
	 */
	protected function getOutputValue( $fieldValue )
	{
		if ( IsDateFieldType( $this->type ) )
			return str_format_time( db2time( $fieldValue ) );

		$numbers = parsenumbers( $fieldValue );
		if( !$numbers )
			return "";
		
		while( count( $numbers ) < 3 )
		{
			$numbers[] = 0;
		}
		
		if( count( $numbers ) == 6 )
			return str_format_time( array(0, 0, 0, $numbers[3], $numbers[4], $numbers[5]) );

		if( !$this->pageObject->mobileTemplateMode() )
			return str_format_time( array(0, 0, 0, $numbers[0], $numbers[1], $numbers[2]) );

		return format_datetime_custom( array(0, 0, 0, $numbers[0], $numbers[1], $numbers[2]), "HH:mm:ss" );
	}
	
	function getFirstElementId()
	{
		return $this->cfield;
	}

	function addCSSFiles() {
		$this->pageObject->AddCSSFile("include/bootstrap/css/bootstrap-datetimepicker.min.css");
	}
}
?>