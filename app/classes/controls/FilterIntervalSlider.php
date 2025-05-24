<?php
class FilterIntervalSlider extends FilterControl
{
	protected $separator;	
	protected $knobsType;
	protected $stepValue;
	
	protected $minValue;
	protected $maxValue;
	protected $minKnobValue;	
	protected $maxKnobValue;
	
	protected $showCollapsed = false;
	
	public function __construct($fName, $pageObject, $id, $viewControls)
	{
		parent::__construct($fName, $pageObject, $id, $viewControls);
	
		$this->filterFormat = FF_INTERVAL_SLIDER;
	
		$this->useApllyBtn = $this->pSet->isFilterApplyBtnSet($fName);
		$this->knobsType = $this->pSet->getFilterKnobsType($fName);

		$this->stepValue = $this->pSet->getFilterStepValue($fName);

		$this->addJS_CSSfiles($pageObject);
		
		if( $this->filtered )
			$this->assignKnobsValues();

		$this->showCollapsed = $this->pSet->showCollapsed($fName);
		
		$this->separator = $this->getSeparator();
	}
	
	/**
	 * Assign the control's knobs properties
	 */		
	protected function assignKnobsValues() 
	{
		$filterData = $this->filteredFields[ $this->fName ];
		
		$filterValues = array();
		$filterValues[] = $filterData['values'][0];
		$filterValues[] = $filterData['sValues'][0];
		
		
		if($this->knobsType == FS_MIN_ONLY) 
		{
			$this->minKnobValue = $filterValues[0];
			return;	
		}
		
		if($this->knobsType == FS_MAX_ONLY) 
		{		
			$this->maxKnobValue = $filterValues[0];
			return;
		}
		
		$this->minKnobValue = $filterValues[0];
		$this->maxKnobValue = $filterValues[1];							
	}	
	
	/**
	 * Get the separator value
	 * @return String
	 */
	protected function getSeparator()
	{
		if( $this->knobsType == FS_MIN_ONLY )
			return '~moreequal~';
			
		if( $this->knobsType == FS_MAX_ONLY )
			return '~lessequal~';

		return '~slider~';
	}
	
	/**
	 * Form totals of the following type:
		SELECT MIN(field) AS sliderMin, MAX(field) AS sliderMax
		FROM ( ... ) WHERE <field is not null>
	 */
	protected function getDataCommand() {
		
		$dc = new DsCommand;
		$dc->filter = $this->pageObject->getDataSourceFilterCriteria( $this->fName );
			
		$dc->totals[] =	array(
			"field" => $this->fName,
			"alias" => "sliderMin",
			"skipEmpty" => true,
			"total" => "min"
		);		
		
		$dc->totals[] =	array(
			"field" => $this->fName,
			"alias" => "sliderMax",
			"total" => "max"
		);	

		return $dc;
	}
	
	/**
	 * Get the filter blocks data using the database query
	 * and add it the the existing blocks
	 * @param &Array
	 */
	protected function addFilterBlocksFromDB( &$filterCtrlBlocks )
	{
		//query to database		
		$qResult = $this->dataSource->getTotals( $this->getDataCommand() );
		$data = $qResult->fetchAssoc();
		
		$this->decryptDataRow( $data );
		
		if( $this->fieldHasNoRange( $data ) ) 
			return $filterCtrlBlocks;
			
		$filterControl = $this->buildControl( $data );
		$filterCtrlBlocks[] = $this->getFilterBlockStructure( $filterControl );
	}
	
	/**
	 * Check if there are database values for the filter's field
	 * that are differs from each other for more than a step value
	 * @param Array data
	 * @return Boolean
	 */	
	protected function fieldHasNoRange($data)
	{
		if( is_null( $data['sliderMin'] ) && is_null( $data['sliderMax'] ) || $data['sliderMax'] == $data['sliderMin'] ) 
			return true;
			
		return false;
	}
	
	/**
	 * Get the html markup representing the control on the page
	 * @param Array data
	 * @param Array parentFiltersData (optional)
	 * @return String
	 */
	protected function buildControl( $data, $parentFiltersData = array() )
	{
		if( !$this->viewControl )
			return "";
		$this->minValue = $data['sliderMin'];
		$this->maxValue = $data['sliderMax'];
		
		if( !$this->filtered )
		{
			$this->minKnobValue = $data['sliderMin'];
			$this->maxKnobValue = $data['sliderMax'];
		} 
		else 
		{
			if( $this->knobsType == FS_MAX_ONLY )
				$this->minKnobValue = $data['sliderMin'];	
				
			if( $this->knobsType == FS_MIN_ONLY )
				$this->maxKnobValue = $data['sliderMax'];	
		}

		return $this->getSliderHTML();
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
		
		$prefixSpan = '<span class="slider-caption-prefix"></span>';
		$postfixSpan = '<span class="slider-caption-postfix"></span>';
		
		$captionSpans = $prefixSpan . $captionSpans . $postfixSpan;
		
		return $captionSpans;
	}
	
	/**
	 * Get the html markup for the slider's control
	 * @return String
	 */		
	protected function getSliderHTML() 
	{
		$captionSpans = $this->getCaptionSpansHTML();
		
		$filterControl = '<div id="slider_values_'.$this->gfName.'" class="filter-slider-values">'.$captionSpans.'</div>';
		$filterControl.= '<div id="slider_'.$this->gfName.'" class="filter-slider"></div>';
		return $filterControl;
	}
	
	/**
	 * Get the caption fot the min slider's knob
	 * @return String
	 */		
	protected function getMinSpanValue() 
	{
		$minSpanValue = $this->minKnobValue;
		if( $minSpanValue < $this->minValue )
			$minSpanValue = $this->minValue;
		
		$viewFormat = $this->viewControl->viewFormat;
		if( $viewFormat == FORMAT_CURRENCY || $viewFormat == FORMAT_NUMBER )
		{
			$data = array($this->fName => $minSpanValue);
			$minSpanValue = $this->viewControl->showDBValue($data, "");			
		}
		return $minSpanValue;
	}

	/**
	 * Get the caption fot the max slider's knob
	 * @return String
	 */	
	protected function getMaxSpanValue() 
	{
		$maxSpanValue = $this->maxKnobValue;
		if( $maxSpanValue > $this->maxValue )
			$maxSpanValue = $this->maxValue;
		
		$viewFormat = $this->viewControl->viewFormat;
		if(  $viewFormat == FORMAT_CURRENCY || $viewFormat == FORMAT_NUMBER )
		{
			$data = array($this->fName => $maxSpanValue);
			$maxSpanValue = $this->viewControl->showDBValue($data, "");			
		}		
		return $maxSpanValue;		
	}
	
	/**
	 * Add filter control's data to the ControlsMap
	 * @param Object pageObj
	 */
	public function addFilterControlToControlsMap($pageObj)
	{
		if( !$this->viewControl )
			return;
		
		$ctrlsMap = $this->getBaseContolsMapParams();
		
		$ctrlsMap['minValue'] = $this->minValue;
		$ctrlsMap['maxValue'] = $this->maxValue;	
		$ctrlsMap['roundedMin'] = $this->round( $this->minValue, true);
		$ctrlsMap['roundedMax'] = $this->round( $this->maxValue, false );

		$ctrlsMap['roundedMinKnobValue'] = $this->round( $this->minKnobValue, true );
		$ctrlsMap['roundedMaxKnobValue'] = $this->round( $this->maxKnobValue, false );
		
		if( $this->filtered ) {
			$ctrlsMap['minKnobValue'] = $this->minKnobValue;
			$ctrlsMap['maxKnobValue'] = $this->maxKnobValue;
		}
		
		$viewFomat = $this->viewControl->viewFormat;
		$ctrlsMap['viewAsNumber'] = $viewFomat == FORMAT_NUMBER;
		$ctrlsMap['viewAsCurrency'] = $viewFomat == FORMAT_CURRENCY;
		$ctrlsMap['formatSettings'] = getFormatSettings( $viewFomat, $this->pSet, $this->fName );
	
		$pageObj->controlsMap["filters"]["controls"][] = $ctrlsMap;	
	}

	/**
	 * Get filter control's base ControlsMap array
	 * @return array
	 */	
	protected function getBaseContolsMapParams()
	{
		$ctrlsMap = array();
		$ctrlsMap['fieldName'] = $this->fName;
		$ctrlsMap['gfieldName'] = $this->gfName;
		$ctrlsMap['filterFormat'] = $this->filterFormat;
		$ctrlsMap['filtered'] = $this->filtered;
		$ctrlsMap['separator'] = $this->separator;
		$ctrlsMap['knobsType'] = $this->knobsType;
		$ctrlsMap['useApllyBtn'] = $this->useApllyBtn;
		$ctrlsMap['step'] = $this->getStepValue();
		$ctrlsMap['collapsed'] = $this->showCollapsed;
			
		return $ctrlsMap;	
	}
	
	/**
	 * Get the slider's step value
	 * @return number 
	 */
	protected function getStepValue() 
	{
		return $this->stepValue;
	}
	
	/**
	 * Get the rounded to the upper or lower limit value 
	 * basing on the step value
	 * @param number value
	 * @return number
	 */
	protected function round( $value, $min ) 
	{
		$step = $this->stepValue;
		
		if( $min )
			return floor( $value / $step ) * $step;
		
		return ceil( $value / $step ) * $step;
	}

	/**
	 * Add extra js and css files 
	 * @param object pageObject
	 */	
	protected function addJS_CSSfiles($pageObject)
	{
	}

	/**
	 * Get the Filter's control block data.
	 * @param Object pageObj
	 * @param Array $dFilterBlocks (optional)	 
	 * @return Array
	 */	
	public function buildFilterCtrlBlockArray( $pageObj, $dFilterBlocks = null )  
	{
		$filterCtrlBlocks = array(); 
		$this->addFilterBlocksFromDB( $filterCtrlBlocks );

		if( !$filterCtrlBlocks )
			$this->visible = false;
			
		if( $this->visible )
			$this->addFilterControlToControlsMap( $pageObj );
		
		return $filterCtrlBlocks;
	}
	
	/**
	 * secondValue is set up for knobsType FS_BOTH only
	 */
	public static function getFilterCondition( $fName, $value, $pSet, $secondValue ) {
		
		$knobsType = $pSet->getFilterKnobsType( $fName );

		if( $knobsType == FS_MAX_ONLY ) {
			return DataCondition::_Not(
				DataCondition::FieldIs( $fName, dsopMORE, $value )
			);
		}
		
		$conditionMore = DataCondition::_Not(
			DataCondition::FieldIs( $fName, dsopLESS, $value )
		);
		
		if( $knobsType == FS_MIN_ONLY )
			return $conditionMore;
		
		if( $pSet->getFilterStepType( $fName ) >= 3 && IsDateFieldType( $pSet->getFieldType( $fName ) ) ) {
			//	interval "up to 2010-10-10" should translate into "x < 2010-10-11" and not in "x <= 2010-10-10"
			$tm = db2time( $secondValue );
			if( !$tm[0] ) {
				$conditionLess = null;
			} else {
				$conditionLess = DataCondition::FieldIs( $fName, dsopLESS, date2db( adddays( $tm, 1 ) ) );
			}
		} else {
			$conditionLess = DataCondition::_Not(
				DataCondition::FieldIs( $fName, dsopMORE, $secondValue )
			);
		}
			
		return DataCondition::_And( array( 
			$conditionLess, 
			$conditionMore 
		));
	}
}
?>