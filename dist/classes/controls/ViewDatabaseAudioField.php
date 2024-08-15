<?php
include_once getabspath("classes/controls/ViewAudioFileField.php");

class ViewDatabaseAudioField extends ViewAudioFileField
{
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		if( !strlen( $data[ $this->field ] ) ) 
			return "";	
			
		$titleField = $this->container->pSet->getAudioTitleField( $this->field );
		if( $titleField && $data[ $titleField ] )
			return $data[ $titleField ];			
			
		return "<<Audio>>";		
	}			
	
	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "", $html = false )
	{
		return "LONG BINARY DATA - CANNOT BE DISPLAYED";
	}

	protected function getFileURLs( &$data, $keylink )
	{
		$fileURLs = array();
		if( !$data[ $this->field ] ) {
			return array();
		}
		$pSet = $this->pSettings();
		
		$params = array();

		$fileNameField = $pSet->getFilenameField( $this->field );
		$params["filename"] = $fileNameField && $data[ $fileNameField ] 
			? $data[ $fileNameField ]
			: 'Track.mp3';
		$params["table"] = $pSet->table();
		$params["field"] = $this->field;
		$params["nodisp"] = 1;
		$params["hash"] = fileAttrHash( $keylink, strlen_bin( $data[ $this->field ] ) );
		$url = GetTableLink("file", "", prepareUrlQuery( $params ).$keylink );

		$title = "";
		$titleField = $pSet->getAudioTitleField( $this->field );
		if ( $titleField ) {
			$title = $data[ $titleField ];
		}

		return array( array(
			"url" => $url,
			"title" => $title,
			"altTitle" => $title,
		));
	}

}
?>