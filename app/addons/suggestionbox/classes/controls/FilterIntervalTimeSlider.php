<?php
class FilterIntervalTimeSlider extends FilterIntervalDateSlider
{
	/**
	 * The array reprsenting the 1st January of 1970 (00:00:00)
	 * @type Array
	 */
	protected $baseDateArray = array();
	
	public function __construct($fName, $pageObject, $id, $viewControls)
	{
		parent::__construct($fName, $pageObject, $id, $viewControls);
		$this->baseDateArray = array(1970, 1, 1, 0, 0, 0);
	}
	
	/**
	 * Get the date-time array representation
	 * @param String value
	 * @param Boolean forCaption
	 * @return Array
	 */	
	protected function getDateTimeArray($value, $forCaption = false)
	{
		if($forCaption)
		{
			$timeArray = parsenumbers($value);
			return array(0, 0, 0, $timeArray[0], $timeArray[1] ,$timeArray[2]);
		}	
		$timeInSeonds = $this->getValueInSeconds($value);	
		$baseDateArray = $this->baseDateArray;
		return addSeconds($baseDateArray, $timeInSeonds);
	}
	
	/**
	 * Get the value converted into seconds
	 * @param String value
	 * @return Number
	 */		
	protected function getValueInSeconds($value)
	{
		$timeArray = parsenumbers($value);
		return $timeArray[2] + $timeArray[1] * 60 + $timeArray[0] * 3600; 
	}
	
	/**
	 * Get the full caption value for the slider with the 'seconds' step type
	 * @param Array dateArray
	 * @return String
	 */	
	protected function getSecondsCaption($dateArray)
	{
		return str_format_time($dateArray);
	}
	
	/**
	 * Get the full caption value for the slider with the 'minutes' step type
	 * @param Array dateArray
	 * @return String
	 */	
	protected function getMinutesCaption($dateArray) 
	{
		global $locale_info;
		$dateArray[5] = 0;
		
		$timeFormatString = str_replace( $locale_info["LOCALE_STIME"]."ss", "", $locale_info["LOCALE_STIMEFORMAT"]);
		return format_datetime_custom($dateArray, $timeFormatString);
	}	
	
	/**
	 * Get the full caption value for the slider with the 'hours' step type
	 * @param Array dateArray
	 * @param Boolean isLower
	 * @return String
	 */
	protected function getHoursCaption($dateArray, $isLower)
	{
		global $locale_info;
		
		$hours = $this->getAdjustedHoursValue($dateArray[3], $dateArray[4], $isLower);
		$dateArray[3] = $dateArray[4] = $dateArray[5] = 0;
		$dateArray = addHours($dateArray, $hours);
		
		$timeFormatString = str_replace( $locale_info["LOCALE_STIME"]."ss", "", $locale_info["LOCALE_STIMEFORMAT"]);
		return format_datetime_custom($dateArray, $timeFormatString);
	}
	
	/**
	 * Check if there are database values for the filter's field
	 * that are differs from each other for more than a step value
	 * @param Array data
	 * @return Boolean
	 */
	protected function fieldHasNoRange($data)
	{
		if (is_null( $data['sliderMin'] ) && is_null( $data['sliderMax'] ) || $data['sliderMax'] == $data['sliderMin']) 
			return true;
		
		$step = $this->getStepValue();
		$minSec = $this->getValueInSeconds( $data['sliderMin'] );
		$maxSec = $this->getValueInSeconds( $data['sliderMax'] );
		
		if( ($maxSec - $minSec) < $step )
			return true;
		
		return false;
	}
	
	/**
	 * Get the html markup for the slider knobs' captions
	 * @return String
	 */	
	protected function getCaptionSpansHTML() 
	{
		$minSpan = '<span class="slider-min">'.$this->getMinSpanValue().'</span>';
		$maxSpan = '<span class="slider-max">'.$this->getMaxSpanValue().'</span>';
		$captionSpans = $minSpan."&nbsp;-&nbsp".$maxSpan;
		
		return $captionSpans;
	}	
	
	/**
	 * Add filter control's data to the ControlsMap
	 * @param Object pageObj
	 */
	public function addFilterControlToControlsMap($pageObj)
	{
		$ctrlsMap = $this->getBaseContolsMapParams();		
		$ctrlsMap['isFieldTimeType'] = true;
		
		$pageObj->controlsMap["filters"]["controls"][] = $ctrlsMap;	
	}
}
?>