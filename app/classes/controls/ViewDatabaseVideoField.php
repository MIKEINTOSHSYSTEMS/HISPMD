<?php
include_once getabspath("classes/controls/ViewVideoFileField.php");
class ViewDatabaseVideoField extends ViewVideoFileField
{
	
	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		if( !strlen( $data[ $this->field ] ) ) 
			return "";		

		$fileNameField = $this->getContainer()->pSet->getFilenameField( $this->field );
		if( $fileNameField && $data[ $fileNameField ] ) 
			return $data[ $fileNameField ];	
			
		return "<<Video>>";
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
			: 'Track.flv';
		$params["table"] = $pSet->table();
		$params["field"] = $this->field;
		$params["nodisp"] = 1;
		$params["hash"] = fileAttrHash( $keylink, strlen_bin( $data[ $this->field ] ) );
		$url = projectURL() . GetTableLink("file", "", prepareUrlQuery( $params ).$keylink );

		$ext = getFileExtension( $params["filename"] );
		$type = mimeTypeByExt( $ext );
		if( $type == "application/octet-stream" )
			$type = "video/flv";
		if(strpos($type, 'video') !== 0)
			return array();


		return array( array(
			"url" => $url,
			"type" => $type
		));
	}

}
?>