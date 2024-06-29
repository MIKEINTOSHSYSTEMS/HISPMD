<?php
class ViewNumberField extends ViewControl {
	
	public function showDBValue( &$data, $keylink, $html = true ) {
		$result = $this->getTextValue( $data );
		
		if( $this->searchHighlight )
			$result = $this->highlightSearchWord( $result, false, $data[ $this->field ] );
		
		return $result;
	}
	
	/**
	 * Highlight the search word within the $value string
	 * @param String value		The field's content
	 * @param Boolean encoded	An indicator showing if the field's content is htmlspecialchars encoded
	 * @param String dbValue	The database field's value
	 * @return string
	 */
	public function highlightSearchWord( $value, $encoded, $dbValue = "" ) {
		return $this->highlightSearchWordForNumber( $value, $encoded, $dbValue );
	}	
	
	/**
	 * @param &Array data
	 * @return String
	 */
	public function getTextValue( &$data ){ 
		return str_format_number( $data[ $this->field ], $this->container->pSet->isDecimalDigits( $this->field ) );
	}
	
	/**
	 * @param String searchWord
	 * return String
	 */
	protected function formatSearchWord( $searchWord ) {
		$decimalPlaces = $this->container->pSet->isDecimalDigits( $this->field );
		return str_format_number( $searchWord, $decimalPlaces );
	}
	
	public function getValueHighlighted( $value, $highlightData ) {
		return $this->getNumberValueHighlighted( $value, $highlightData );
	}
}