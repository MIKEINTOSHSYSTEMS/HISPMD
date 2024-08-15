<?php
class ViewPercentField extends ViewControl {
	
	public function showDBValue( &$data, $keylink, $html = true ) {	
		$result = $this->getTextValue( $data );
			
		if( $this->searchHighlight )
			$result = $this->highlightSearchWord( $result, false, $data[ $this->field ] );
		
		return $result;
	}
	
	/**
	 * @param &Array data
	 * @return String
	 */
	public function getTextValue( &$data ) {
		if( $data[ $this->field ] != null && $data[ $this->field ] != "" ) {
			$decimalPlaces = $this->container->pSet->isDecimalDigits( $this->field );
			return str_format_number( $data[ $this->field ] * 100, $decimalPlaces )."%";
		}
		
		return "";
	}	
	
	/**
	 * @param String searchWord
	 * return String
	 */
	protected function formatSearchWord( $searchWord ) {
		$decimalPlaces = $this->container->pSet->isDecimalDigits( $this->field );
		return str_format_number( $searchWord * 100, $decimalPlaces );
	}
	
	public function getValueHighlighted( $value, $highlightData ) {
		return $this->getNumberValueHighlighted( $value, $highlightData );
	}
}
?>