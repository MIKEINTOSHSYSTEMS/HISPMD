<?php
include_once getabspath("classes/controls/ViewFileDownloadField.php");

class ViewDatabaseFileField extends ViewFileDownloadField
{
	protected $defaultFileName = "file.bin";
	
	public function getPdfValue(&$data, $keylink = "")
	{
		return my_json_encode( array(
			"text" => $this->getFileName($data)
		) );
	}

	public function getFileName( &$data)
	{
		$fileNameF = $this->container->pSet->getFilenameField($this->field);
		if($fileNameF) 
		{
			$fileName = $data[ $fileNameF ];
			if(!$fileName)
				$fileName = $this->defaultFileName;
		} 
		else 
			$fileName = $this->defaultFileName;
		
		return $fileName;
	}

	/**
	 * @param &Array data
	 * @return String	 
	 */
	public function getTextValue(&$data)
	{
		if( !strlen( $data[ $this->field ] ) )
			return "";

		$fileNameField = $this->container->pSet->getFilenameField( $this->field );	

		if( $fileNameField && $data[ $fileNameField ] ) 
			return $data[ $fileNameField ]; 
		
		return "<<File>>";
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

	/**
	 * @return Array of arrays (
	 * 		url => link to the file,
	 * 		imageUrl => link to te image, if any
	 * 		htmlLabel => (optional) custom filename to display.  HTML code can be here
	 * 		filename => filename 
	 * 		size => file size
	 * 		thumbnailMode => boolean
	 * 		newTab => boolean, open in new tab
	 * )
	 */
	protected function getFileURLs( &$data, $keylink )
	{
		$fileURLs = array();
		if( !$data[ $this->field ] ) {
			return array();
		}
		$pSet = $this->pSettings();
		
		$filename = $this->getFileName( $data );

		$params = array();
		$params["filename"] = $filename;
		$params["table"] = $pSet->table();
		$params["field"] = $this->field;
		$params["nodisp"] = 1;
		$params["hash"] = fileAttrHash( $keylink, strlen_bin( $data[ $this->field ] ) );
		$url = GetTableLink("file", "", prepareUrlQuery( $params ).$keylink );

		$ext = getFileExtension( $params["filename"] );
		$imageUrl = "images/icons/" . ViewFileDownloadField::getFileIconByType( $filename, "" );

		$newTab = false;
		if( $this->displayPDF() && strtolower( getFileExtension( $params["filename"] ) ) == "pdf" ) {
//			$url = "include/pdfjs/web/viewer.html?file=" . rawurlencode( "../../../" . $url );
			$url = "include/pdfjs/web/viewer.html?file=" . rawurlencode( projectPath() . $url );
			$newTab = true;
		}
		
		return array( array(
			"url" => $url,
			"filename" => $filename,
			"imageUrl" => $imageUrl,
			"size" => strlen_bin( $data[ $this->field ] ),
			"newTab" => $newTab
		));
	}

}
?>