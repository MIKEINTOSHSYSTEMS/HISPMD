<?php
include_once getabspath("classes/controls/ViewFileField.php");

class ViewVideoFileField extends ViewFileField
{
	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	public function addJSFiles()
	{
		$this->AddJSFile("include/videojs/video.min.js");
		$this->getJSControl();
	}

	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */ 
	function addCSSFiles()
	{
		$this->AddCSSFile("include/videojs/video-js.min.css");
		$this->AddCSSFile("include/videojs/rnr-videojs-theme.css");
	}
	
	public function showDBValue( &$data, $keylink, $html = true )
	{
		$pageType = $this->container->pageType;
		//	 print or export
		if( !$html || $pageType == PAGE_EXPORT || $pageType == PAGE_PRINT || $this->container->forExport != '' ) {
			$ret = $this->getTextValue( $data );
			return $html 
				? runner_htmlspecialchars( $ret )
				: $ret;
		}

		$urls = $this->getFileURLs( $data, $keylink );
		$values = array();
		foreach( $urls as $u ) {
			$values[] = $this->makeVideoControl( $u );
		}
		return implode( "", $values );
	}

	/**
	 * @param Array urlData - element of array returned by getFileURLs
	 * @return String (HTML)
	 */
	protected function makeVideoControl( $urlData ) {
		$pSet = $this->pSettings();
		$vWidth = $pSet->getVideoWidth( $this->field );
		$vHeight = $pSet->getVideoHeight( $this->field );
		$vWidth = $vWidth ? $vWidth : 300;
		$vHeight = $vHeight ? $vHeight : 200;

		$srcURL = runner_htmlspecialchars( $urlData["url"] );
		
		// try to play some other types, if the found type is not supported
		$types = array( $urlData["type"], "video/mp4", "video/webm", "video/ogg" );
		$types = array_unique( $types );

		$sources = "";		
		foreach ( $types as $type ) {
			$sources .= '<source type="' . runner_htmlspecialchars( $type ) . '" src="' . $srcURL . '" />';
		}

		return (
			'<div style="width:'.$vWidth.'px; height:'.$vHeight.'px;">'.
				'<video class="video-js rnr-videojs-theme" width="'.$vWidth.'" height="'.$vHeight.'">'.
					$sources.
					'<p class="vjs-no-js">'.
						'To view this video please enable JavaScript, and consider upgrading to a web browser that supports HTML5 video.'.						
					'</p>'.					
				'</video>'.
			'</div>'
		);
	}

	public function getPdfValue(&$data, $keylink = "")
	{
		return "''";
	}

	/**
	 * @return Array of array(
	 * 		"url" => link to the file
	 * 		"type" => MIME type
	 * )
	 */
	protected function getFileURLs( &$data, $keylink )
	{
		$pSet = $this->pSettings();
		$fileData = $this->getFilesData( $data[ $this->field ] );
		$fieldIsUrl = $pSet->isVideoUrlField( $this->field );

		$ret = array();
		foreach( $fileData as $file ) {
			if( !$file["name"] ) {
				continue;
			}
			if( !$fieldIsUrl ) {
				if( !$this->fastFileExists( $file["name"] ) ) {
					continue;
				}
			}
			if( $fieldIsUrl ) {
				$url = $file["name"];
				$ext = getFileExtension( $url );
			} else {
				$addParams = array();
				//$addParams["nodisp"] = "1";
				if( !$pSet->isRewindEnabled( $this->field ) ) {
					$addParams["norange"] = "1";
				}
				$url = projectURL() . $this->getFileUrl( $file, $keylink, false, $addParams );
				$ext = getFileExtension( $file["usrName"] );
			}
			$type = $file["type"];
			if( !$type ) {
				$type = mimeTypeByExt( $ext );
			}
			if( $type == "application/octet-stream" )
				$type = "video/flv";
			if(strpos($type, 'video') !== 0)
				continue;

			$ret[] = array(
				"url" => $url,
				"type" => $type
			);
		}
		return $ret;
	}

	protected function isUrl() {
		return $this->pSettings()->isVideoUrlField( $this->field );
	}

}	

?>