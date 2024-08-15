<?php
require_once getabspath('classes/controls/TextControl.php');
class TextAreaField extends TextControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		EditControl::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_TEXT_AREA;
	}

	function buildControl( $value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data ) {
		parent::buildControl( $value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data );

		if( $this->pageObject->pSetEdit->isUseRTE( $this->field ) ) {
			$value = $this->RTESafe( $value );
			
			switch( $this->pageObject->pSetEdit->getRTEType( $this->field ) ) {
				case "RTE":
					$this->buildTinyMCE( $value );
					break;
				case "RTECK_NEW":
				case "RTECK":
					$this->CreateCKeditor( $value );
					break;
				case "RTEINNOVA":
					$this->buildInnova( $value );
					break;
			}
		} else {
			$nHeight = $this->pageObject->pSetEdit->getNRows( $this->field );
			$attrs = $this->getPlaceholderAttr();
			echo '<textarea id="'.$this->cfield.'" alt="'.$this->strLabel.'" name="'.$this->cfield.'" style="height:'.$nHeight.'px;" '
				.$attrs.' class="form-control">'
					.runner_htmlspecialchars( $value )
				.'</textarea>';
		}

		$this->buildControlEnd($validate, $mode);
	}

	function getFirstElementId()
	{
		return $this->cfield;
	}
	
	/**
	 * returns safe code for preloading in the RTE
	 * @intellisense
	 * @param String text
	 * @return String
	 */
	protected function RTESafe($text)
	{
		$tmpString = trim($text);
		if(!$tmpString)
			return "";

		//	convert all types of single quotes
		$tmpString = str_replace("'", "&#39;", $tmpString);

		//	replace carriage returns & line feeds
		$tmpString = str_replace( chr(10), " ", $tmpString );
		$tmpString = str_replace( chr(13), " ", $tmpString );

		return $tmpString;
	}

	/**
	 * @intellisense
	 */
	protected function CreateCKeditor($value)
	{
		echo '<div id="disabledCKE_'.$this->cfield.'">'
			.'<textarea id="'.$this->cfield.'" name="'.$this->cfield.'" rows="8" cols="60">'
				.runner_htmlspecialchars($value)
			.'</textarea>'
			.'</div>';
	}
	
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles() {
		if ( $this->pageObject->pSetEdit->getRTEType( $this->field ) == "RTE" ) {
			$this->pageObject->AddJSFile("plugins/tinymce/tinymce.min.js");
		}
	}	

	/**
	 * Build a stub markup for Innova editor
	 * @param String value
	 */
	protected function buildInnova( $value ) {
		$nHeight = $this->pageObject->pSetEdit->getNRows( $this->field );
		if( $nHeight< 300 )
			$nHeight = 300;	

		$assetManagerUrl = projectURL() .'plugins/innovaeditor/assetmanager/'. GetTableLink("assetmanager");

		echo '<div id="disabledInnova_'.$this->cfield.'" style="width:100%; height:'. $nHeight .'px;" data-am="'.$assetManagerUrl.'">'
				.'<textarea alt="'.$this->strLabel.'" id="'.$this->cfield.'" name="'.$this->cfield.'">'
					.runner_htmlspecialchars( $value )
				.'</textarea>'
				.'<div id="'.$this->cfield.'innova" name="'.$this->cfield.'" style="width:100%; height:'. $nHeight .'px;">'
				.'</div>'
			.'</div>';
	}
	
	protected function buildTinyMCE( $value ) {
		$nHeight = $this->pageObject->pSetEdit->getNRows( $this->field ) + 100;
		
		echo '<div id="disabledTinyMCE_'.$this->cfield.'">'
				.'<textarea id="'.$this->cfield.'" name="'.$this->cfield.'" alt="'.$this->strLabel.'" style="width:100%; height:'. $nHeight .'px;">'
					.runner_htmlspecialchars( $value )
				.'</textarea>'
			.'</div>';
	}
}
?>