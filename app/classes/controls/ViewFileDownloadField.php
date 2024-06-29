<?php
include_once getabspath("classes/controls/ViewFileField.php");
class ViewFileDownloadField extends ViewFileField
{
	public $sizeUnits = array();

	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function __construct($field, $container, $pageobject)
	{
		parent::__construct($field, $container, $pageobject);
		$this->sizeUnits = array("KB", "MB", "GB", "TB");
	}

	public function addJSFiles()
	{
		if($this->container->pSet->showThumbnail($this->field)){
			$this->getJSControl();
		}
	}

	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */
	function addCSSFiles()
	{
	}


	protected function getElementTextValue( $fileData, &$data ) {
		$pSet = $this->pSettings();
		$displayFileName = $fileData["usrName"];
		if( $pSet->showCustomExpr( $this->field ) ) {
			$displayFileName .= fileCustomExpression( $fileData, $data, $this->field, $this->container->pageType, $this->container->tName );
		}
		if( $pSet->showFileSize( $this->field ) ) {
			$displayFileName .= ' ' . $this->fileSizeString( $fileData["size"] );
		}
		return $displayFileName;
	}


	/**
	 * @param Array urlData - element of array returned by getFileUrls
	 * @return String (HTML) for a single file
	 */
	protected function makeFileElement( $urlData ) {

		$pSet = $this->pSettings();

		$target = $urlData["newTab"] ? 'target="_blank"' : '';

		$image = "";
		if( $urlData["thumbnailMode"] ) {
			$image = '<img  border="0"'
				. ' alt="' . runner_htmlspecialchars( $urlData["filename"] ) . '"'
		 		. ' src="' . runner_htmlspecialchars( $urlData["imageUrl"] ) . '" />';
		} else if( $urlData["imageUrl"] ) {
			//	non-thumbnail image, icon
			$image = '<img class="r-fileicon " src="'. runner_htmlspecialchars( $urlData["imageUrl"] ) .'" />';
		}
		if( $image ) {
			$image = '<a target="_blank" href="' . runner_htmlspecialchars( $urlData["url"] ) .'">' . $image . '</a>';
		}

		if( array_key_exists( "htmlLabel", $urlData ) ) {
			$displayFilename = $urlData["htmlLabel"];
		} else {
			$htmlLabel = runner_htmlspecialchars( $urlData["filename"] );
			if( $this->searchHighlight ) {
				$htmlLabel = $this->highlightSearchWord( $htmlLabel, true, "" );
			}
			$displayFilename = '<a ' . $target . ' dir="LTR" href="' . runner_htmlspecialchars( $urlData["url"] ).'">' . $htmlLabel . '</a>';
		}
		if( array_key_exists( "size", $urlData ) ) {
			$displayFilename .= " " . $this->fileSizeString( $urlData["size"] );
		}
		if( $urlData["thumbnailMode"] ) {
			return $image . "<br>" . $displayFilename;
		}
		return $image . $displayFilename;
	}

	/**
	 * @return String file size label
	 */
	protected function fileSizeString( $filesize ) {
		$fileSizeAndUnit = $this->getFileSizeAndUnits( $filesize );
		return  str_format_number( round( $fileSizeAndUnit["size"], 2 ) )
			. " "
			. $this->sizeUnits[ $fileSizeAndUnit["unitIndex"] ];
	}

	public function showDBValue( &$data, $keylink, $html = true )
	{
		$isExport = $this->container->pageType == PAGE_EXPORT || $this->container->forExport != '';
		if( !$html || $isExport ) {
			return $this->getTextValue( $data );
		}

		$urls = $this->getFileURLs( $data, $keylink );
		$controls = array();
		foreach( $urls as $u ) {
			$controls[] = $this->makeFileElement( $u );
		}
		return implode( "<br>", $controls );
	}

	public function getFileSizeAndUnits($size, $deepLevel = 0)
	{
		$shrinkedSize = $size / 1024;
		if($shrinkedSize > 1024 && $deepLevel < count($this->sizeUnits) - 1)
			return $this->getFileSizeAndUnits($shrinkedSize, $deepLevel + 1);
		return array("size" => $shrinkedSize, "unitIndex" => $deepLevel);
	}

	public static function getFileIconByType($file_name, $fileType)
	{
		if( !$fileType ) {
			$fileType = mimeTypeByExt( getFileExtension( $file_name ) );
		}
		return getIconByFileType( $fileType, $file_name );
	}

	/**
	 * @return Array of arrays (
	 * 		url => link to the file,
	 * 		imageUrl => link to te image, if any
	 * 		htmlLabel => (optional) custom filename to display.  HTML code can be here
	 * 		filename => filename
	 * 		size => file size
	 * 		thumbnailMode => boolean
	 * 		newTab => boolean, open file in new tab
	 * )
	 */
	protected function getFileURLs(&$data, $keylink)
	{
		$pSet = $this->pSettings();
		$showThumbnails = $pSet->showThumbnail( $this->field );

		$fileURLs = array();

		$fs = getStorageProvider( $pSet, $this->field );
		$files = $this->getFilesData( $data [$this->field ] );
		foreach( $files as $f ) {

			$finfo = $this->fastFileInfo( $f["name"] );
			if( !$finfo ) {
				//	file doesn't exist
				continue;
			}
			$url = $this->getFileUrl( $f, $keylink, false, array( "nodisp" => 1 ) );

			$thumbnailMode = false;
			if( $f["thumbnail"] && $pSet->showThumbnail( $this->field ) && CheckImageExtension( $f["usrName"] ) ) {
				if( $this->fastFileExists( $f["thumbnail"] ) ) {
					$thumbnailMode = true;
				}
			}
			if( $thumbnailMode ) {
				$imageUrl = $this->getFileUrl( $f, $keylink, true );
			} else if( $pSet->showIcon( $this->field ) ) {
				$imageUrl = "images/icons/" . ViewFileDownloadField::getFileIconByType( $f["usrName"], $f["type"] );
			}

			$urlData = array(
				"url" => $url,
				"imageUrl" => $imageUrl,
				"filename" => $f["usrName"],
				"thumbnailMode" => $thumbnailMode
			);

			if( $this->displayPDF() && strtolower( getFileExtension( $f["usrName"] ) ) == "pdf" ) {
				$urlData[ "newTab" ] = true;
			}

			if( $pSet->showCustomExpr( $this->field ) ) {
				$urlData["htmlLabel"] = fileCustomExpression( $f, $data, $this->field, $this->container->pageType, $this->container->tName );
			}

			if( $pSet->showFileSize( $this->field ) ) {
				if( isset( $finfo["size"] ) ) {
					$urlData["size"] = $finfo["size"];
				} else if( isset( $f["size"] ) ) {
					$urlData["size"] = $f["size"];
				}
			}

			$fileURLs[] = $urlData;
		}
		return $fileURLs;
	}


}
?>