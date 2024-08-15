<?php
class ViewTimeField extends ViewControl
{
	public function showDBValue( &$data, $keylink, $html = true )
	{	
		$result = $this->getTextValue( $data );
		
		if( !$this->container->forExport || $this->container->forExport != "excel" && $this->container->forExport != "csv" )
			$result = runner_htmlspecialchars( $result );
		
		return $result;
	}
	
	/**
	 * @param &Array data
	 * @return String
	 */
	public function getTextValue( &$data ) {
		global $locale_info;
		
		$time = $this->getTimeArray( $data );
		if( !$time )
			return "";
		
		$h = $time[0];
		$m = $time[1];
		$s = $time[2];
		$formatData = $this->container->pSet->getViewAsTimeFormatData( $this->field );
		
		if( $formatData["timeFormat"] == TIME_FORMAT_DURATION ) {
			// show duration
			return ViewTimeField::getDuration( $h, $m, $s, 
				$formatData["showSeconds"], $formatData["showDaysInTotals"] );
		}
		
		// show time of a day
		return ViewTimeField::getDayTime( $h, $m, $s, $formatData["showSeconds"] );
	}

	
	/**
	 * @param &Array data
	 * @return Array
	 * an array with following elements: 0=> hours, 1=> minutes, 2=> second
	 */
	protected function getTimeArray( &$data ) {
		if( !$data[ $this->field ] ) {
			return array();
		}
		if( IsDateFieldType( $this->fieldType ) ) {
			$date = db2time( $data[ $this->field ] );
			return array( $date[3], $date[4], $date[5] );
		}
		
		$time = parsenumbers( $data[ $this->field ] );
		if( !$time )
			return array();
		
		while( count($time) < 3 ) {
			$time[] = 0;
		}
		
		if ( count( $time ) == 6 ) {
			// datetime
			return array( $time[3], $time[4], $time[5] );
		}

		return $time;
	}
	
	/**
	 * Get duration string
	 * @param Number h
	 * @param Number m
	 * @param Number s
	 * @param Boolean showSeconds
	 * @param Boolean showDays
	 * @retrun String
	 */	
	public static function getDuration( $h, $m, $s, $showSeconds, $showDays ) {
		$d = 0;
		if( $showDays ) {
			$d = ( $h - $h % 24 ) / 24;
			$h = $h % 24;
		}
		
		$timeFormat = $showSeconds ? "H:mm:ss" : "H:mm";
		return ($d != 0 ? $d.'d ' : '')
			.format_datetime_custom( array(0, 0, 0, $h, $m, $s), $timeFormat );
	}
	
	/**
	 * Get time of a day string
	 * @param Number h
	 * @param Number m
	 * @param Number s
	 * @param Boolean showSeconds
	 * @retrun String
	 */
	public static function getDayTime( $h, $m, $s, $showSeconds ) {
		global $locale_info;
		
		$timeFormat = $locale_info["LOCALE_STIMEFORMAT"];
		if( !$showSeconds )
			$timeFormat = str_replace(array(':ss', ':s'), array('', ''), $timeFormat);
		
		return format_datetime_custom( array( 0, 0, 0, $h, $m, $s ), $timeFormat);
	}

	
	/**
	 * @param String field
	 * @param Number value
	 * @param ProjectSettings pSet
	 * @param Boolean pdfMode
	 * @param Boolean forSumTotal  total is for 'SUM' or 'TOTAL'
	 * @return String
	 */
	public static function getFormattedTotals( $field, $value, $pSet, $pdfMode, $forSumTotal ) {
		global $locale_info;
		
		if( !$value ) 
			return $value;
		
		$s = $value % 60;
		$value = ( $value - $s ) / 60;
		
		$m = $value % 60;
		$value = ( $value - $m ) / 60;
		
		$h = $value;
		
		$formatData = $pSet->getViewAsTimeFormatData( $field );
		
		if( $forSumTotal ) {
			$res = ViewTimeField::getDuration( $h, $m, $s, $formatData["showSeconds"], $pSet->showDaysInTimeTotals( $field ) );
		} else {
			if( $formatData["timeFormat"] == TIME_FORMAT_DURATION ) {
				$res = ViewTimeField::getDuration( $h, $m, $s, $formatData["showSeconds"], false );
			} else {
				$res = ViewTimeField::getDayTime( $h, $m, $s, $formatData["showSeconds"] );
			}
		}
		
		return $pdfMode ? 
			"'" . jsreplace( $res ) . "'"
			: $res;
	}
}
?>