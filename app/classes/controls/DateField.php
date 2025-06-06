<?php
require_once getabspath('classes/controls/DateTimeControl.php');
class DateField extends DateTimeControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_DATE;
	}

	function addCSSFiles() {
		$this->pageObject->AddCSSFile("include/bootstrap/css/bootstrap-datetimepicker.min.css");
	}

	function getProjectSettings() 
	{
		if($this->pageObject->pageType == PAGE_LIST)
			return new ProjectSettings($this->pageObject->tName, PAGE_SEARCH);
		else 
			return $this->pageObject->pSetEdit;
	}
	
	function getDateEditType( $pSet = null )
	{
		if( !$pSet )
			$pSet = $this->getProjectSettings();

		$dateEditType = $pSet->getDateEditType($this->field);

		//	search panel control
		if( !$this->forSpreadsheetGrid 
			&& ( ( $this->pageObject->pageType == PAGE_LIST || $this->pageObject->pageType == PAGE_CHART || $this->pageObject->pageType == PAGE_REPORT) 
			|| $this->pageObject->pageType == PAGE_SEARCH && $this->pageObject->mode == SEARCH_LOAD_CONTROL) )
		{
			if( $dateEditType == EDIT_DATE_DD )
				return EDIT_DATE_SIMPLE;
			if( $dateEditType == EDIT_DATE_DD_DP )
				return EDIT_DATE_SIMPLE_DP;
			if( $dateEditType == EDIT_DATE_DD_INLINE )
				return EDIT_DATE_SIMPLE_INLINE;
		}
		
		return $dateEditType;
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		global $locale_info;
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);		

		if($fieldNum)
			$this->cfield = "value".$fieldNum."_".GoodFieldName($this->field).'_'.$this->id;

		$pSet = $this->getProjectSettings();

		$dateEditType = $this->getDateEditType( $pSet );
		
		//if( $this->pageObject->pageType == PAGE_LIST ) // 
		echo '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="date'
			.$dateEditType.'">';

		$tvalue = $value;

		$time = db2time($tvalue);
		if( !$time )
			$time = array(0, 0, 0, 0, 0, 0);

		$classString = ' form-control';

		$dp = 0;
		$hasImgCal = true;
		$showTime = $pSet->dateEditShowTime($this->field);
		switch( $dateEditType )
		{
			case EDIT_DATE_SIMPLE_INLINE:
				$hasImgCal = false;
			case EDIT_DATE_SIMPLE_DP:
				$ovalue = $value;

				if($locale_info["LOCALE_IDATE"] == 1)
					$fmt = "dd".$locale_info["LOCALE_SDATE"]."MM".$locale_info["LOCALE_SDATE"]."yyyy";
				else if($locale_info["LOCALE_IDATE"] == 0)
					$fmt = "MM".$locale_info["LOCALE_SDATE"]."dd".$locale_info["LOCALE_SDATE"]."yyyy";
				else
					$fmt = "yyyy".$locale_info["LOCALE_SDATE"]."MM".$locale_info["LOCALE_SDATE"]."dd";

				if($showTime || $time[3] || $time[4] || $time[5]){
					$timeAttrs = $this->pageObject->pSetEdit->getFormatTimeAttrs($this->field);
					$fmt.= " " . $locale_info["LOCALE_STIMEFORMAT"];
				}

				if($time[0])
					$ovalue = format_datetime_custom($time, $fmt);

				$ovalue1 = $time[2]."-".$time[1]."-".$time[0];
				if($showTime || $time[3] || $time[4] || $time[5])
					$ovalue1.= " ".$time[3].":".$time[4].":".$time[5];
				
				$ret= '<input '.$this->getPlaceholderAttr().' id="'.$this->cfield.'" '.$this->inputStyle.' class="'.$classString.'" type="Text" name="'.$this->cfield.'" value="'.$ovalue.'">';								
				$ret.= '<input id="ts'.$this->cfield.'" type="Hidden" name="ts'.$this->cfield.'" value="'.$ovalue1.'">';
				
				$ret .= '<span class="input-group-addon" id="imgCal_'.$this->cfield.'"><span class="glyphicon glyphicon-calendar"></span></span>';

				if ( isRTL() )
					$ret .= "<span></span>"; // for bootstrap calend icon anomaly
				
				$ret = '<div class="input-group date">' . $ret . '</div>';

				echo $ret;
			break;

			case EDIT_DATE_DD_INLINE:
			case EDIT_DATE_DD_DP:
				$dp=1;
			case EDIT_DATE_DD:
				$controlWidth = $pSet->getControlWidth($this->field);
				if($controlWidth > 0)
				{
					$controlWidth -= 10;
					$yearWidth = floor($controlWidth * 0.3);
					$yearStyle = 'style="min-width: '.$yearWidth.'px;margin-right:5px;" ';
					$dayWidth = floor($controlWidth * 0.2);
					$dayStyle = 'style="min-width: '.$dayWidth.'px; margin-right:5px;" ';
					$mothWidth = $controlWidth - $yearWidth - $dayWidth;
					$monthStyle = 'style="min-width: '.$mothWidth.'px; margin-right:5px;" ';
				}
				else
				{
					$dayStyle = '';
					$monthStyle = '';
					$yearStyle = '';
				}
				$alt = 'alt="'.$this->strLabel.'" ';

				// for init normal select width/ After load js, this options will clear
				$initMonthOpt = "<option>&nbsp;</option>";
				if ( $time[1] )
				{
					$months = getMountNames();
					$initMonthOpt = "<option>" . $months[$time[1]] . "</option>";
				}
				$initMonthOpt .= "<option>" . $this->maxLengthMonth() . "</option>";
				$initDayOpt = "<option>" . ($time[2] ? $time[2] : "&nbsp;") ." </option><option>22</option>";							
				$initYearOpt = "<option>" . ($time[0] ? $time[0] : "&nbsp;") . "</option><option>2000</option>";
				$retday='<select class="'. $classString.'" id="day'.$this->cfield.'" '.$dayStyle.$alt.'name="day'.$this->cfield.'" >'.$initDayOpt.'</select>';
				$retmonth='<select class="'. $classString.'" id="month'.$this->cfield.'" '.$monthStyle.$alt.'name="month'.$this->cfield.'" >'.$initMonthOpt.'</option></select>';
				$retyear='<select class="'. $classString.'" id="year'.$this->cfield.'" '.$yearStyle.$alt.'name="year'.$this->cfield.'" >'.$initYearOpt.'</select>';

				$space = ($controlWidth > 0 ? '' : "&nbsp;");

				if($locale_info["LOCALE_ILONGDATE"] == 1)
					$ret = $retday.$space.$retmonth.$space.$retyear;
				else if($locale_info["LOCALE_ILONGDATE"] == 0)
					$ret = $retmonth.$space.$retday.$space.$retyear;
				else
					$ret = $retyear.$space.$retmonth.$space.$retday;
				
				$setHiddenElem = 'class="'. $classString.' hiddenPickerElement"';
				
				if($time[0] && $time[1] && $time[2])
					$ret.="<input id=\"".$this->cfield."\" ".$setHiddenElem." name=\"".$this->cfield."\" value=\"".$time[0]."-".$time[1]."-".$time[2]."\">";
				else
					$ret.="<input id=\"".$this->cfield."\" ".$setHiddenElem." name=\"".$this->cfield."\" value=\"\">";

				// calendar handling for three DD
				if( $dp ) {					
					$ret .= '<button class="btn btn-default" id="imgCal_'.$this->cfield.'" aria-hidden=true><span class="glyphicon glyphicon-calendar"  ></span></button>';				
				}

				$ret = '<span class="bs-date-control form-inline">' . $ret . '</span>';
				echo $ret;
			break;

			default: //	case EDIT_DATE_SIMPLE:
				$ovalue = $value;
				if($time[0])
				{
					if($showTime || $time[3] || $time[4] || $time[5])
						$ovalue = str_format_datetime($time);
					else
						$ovalue = format_shortdate($time);
				}
				echo '<input '.$this->getPlaceholderAttr().' id="'.$this->cfield.'" type=text class="'.$classString.'" name="'.$this->cfield.'" '.$this->inputStyle.' value="'.runner_htmlspecialchars($ovalue).'">';
		}
		$this->buildControlEnd($validate, $mode);
	}

	function getFirstElementId()
	{
		global $locale_info;
		$dateEditType = $this->getDateEditType();

		if ( !$dateEditType )
		{
			return $this->cfield;
		}

		switch( $dateEditType )
		{
			case EDIT_DATE_DD:
			case EDIT_DATE_DD_INLINE:
			case EDIT_DATE_DD_DP:
				if($locale_info["LOCALE_ILONGDATE"] == 1)
					return "day".$this->cfield;
				else if($locale_info["LOCALE_ILONGDATE"] == 0)
					return "month".$this->cfield;
				else
					return "year".$this->cfield;
			break;

			default:
				return $this->cfield;
			break;
		}
	}

	function maxLengthMonth()
	{
		$maxLengthMonth = "";
		$mounts = getMountNames();		
		$maxLenght = 0;
		for ( $i =0; $i < count($mounts); $i++ )
		{
			$curMontn = $mounts[$i];
			$curMonthLen = runner_strlen($curMontn);
			if ( $maxLenght < $curMonthLen )
			{
				$maxLenght = $curMonthLen;				
				$maxLengthMonth = $curMontn;
			}			
		}

		return $maxLengthMonth;
	}

	/**
	 * 	Returns basic condition
	 */
	public function getBasicFieldCondition( $svalue, $strSearchOption, $svalue2 = "", $etype = "" ) {
		$searchFor = $this->processControlValue( $svalue, $etype );
		$searchFor2 = $this->processControlValue( $svalue2, $etype );
		$etype = "";
		$pSet = $this->getProjectSettings();
		if( !$pSet->dateEditShowTime($this->field) && IsDateTimeFieldType( $pSet->getFieldType($this->field) ) ) {
			//	search for date only in a datetime field
			
			if( $strSearchOption == EQUALS ) {
				//	 ( NOT field < date ) AND field < ( date + 1 day )
				$tm = db2time( $searchFor );
				if( !$tm[0] ) {
					return DataCondition::_False();
				}
				$nextDay = adddays( $tm, 1 );
				return DataCondition::_And( array( 
					DataCondition::_Not( 
						DataCondition::FieldIs( $this->field, dsopLESS, date2db( $tm ) )
					),
					DataCondition::FieldIs( $this->field, dsopLESS, date2db( $nextDay ) )
				));
			} else if( $strSearchOption == MORE_THAN ) {
				//	 NOT ( field < ( date + 1 day ) )
				$tm = db2time( $searchFor );
				if( !$tm[0] ) {
					return DataCondition::_False();
				}
				$nextDay = adddays( $tm, 1 );
				return DataCondition::_Not( 
					DataCondition::FieldIs( $this->field, dsopLESS, date2db( $nextDay ) )
				);

			} else if( $strSearchOption == BETWEEN && $searchFor != "" && $searchFor2 != "" ) {
				//	true between only
				//	NOT ( field < date ) AND field < (date2+1)
				$tm = db2time( $searchFor );
				$tm2 = db2time( $searchFor2 );
				if( !$tm[0] || !$tm2[0] ) {
					return DataCondition::_False();
				}
				$tm2 = adddays( $tm2, 1 );
				return DataCondition::_And( array( 
					DataCondition::_Not( 
						DataCondition::FieldIs( $this->field, dsopLESS, date2db( $tm ) )
					),
					DataCondition::FieldIs( $this->field, dsopLESS, date2db( $tm2 ) )
				));

			}

		}
		return parent::getBasicFieldCondition( $searchFor, $strSearchOption, $searchFor2, $etype );
	}
}
?>