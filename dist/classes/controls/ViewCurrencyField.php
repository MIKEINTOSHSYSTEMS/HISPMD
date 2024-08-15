<?php
class ViewCurrencyField extends ViewControl
{
	public function showDBValue(&$data, $keylink, $html = true )
	{
		$result = str_format_currency( $data[ $this->field ] );
		
		if( !$this->container->forExport || $this->container->forExport != "excel" && $this->container->forExport != "csv" )
			$result = runner_htmlspecialchars( $result );
		
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
	public function highlightSearchWord($value, $encoded, $dbValue = "")
	{
		return $this->highlightSearchWordForNumber( $value, $encoded, $dbValue );
	}	
	
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		return str_format_currency( $data[ $this->field ] );
	}
	
	public function getValueHighlighted($value, $highlightData) 	
	{
		$searchWordArr = array();
		foreach($highlightData['searchWords'] as $searchWord)
		{
			$word = preg_replace('/[\.,]/', '' , $searchWord);
			$wordArr = str_split($word);
			$word = implode("[^\d]{0,2}", $wordArr); //add thousands and decimals separators to the pattern
			$word = runner_htmlspecialchars($word);
			if($searchOpt == 'Starts with')
				$word = "^".$word;
			$searchWordArr[] = $word;
		}
		$pattern =  '/('.implode('|', $searchWordArr).')/';
		$searchOpt = $highlightData['searchOpt'];
		
		switch($searchOpt)
		{
			case 'Equals':
				return $this->addHighlightingSpan($value);
	
			case 'Starts with':
				return preg_replace($pattern, $this->addHighlightingSpan('$1'), $value);
			
			case 'Contains':	
				return preg_replace($pattern, $this->addHighlightingSpan('$1'), $value);
			
			default:
				return $value;
		}			
	}	
}
?>