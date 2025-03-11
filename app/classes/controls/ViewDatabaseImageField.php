<?php
include_once getabspath("classes/controls/ViewImageDownloadField.php");
class ViewDatabaseImageField extends ViewImageDownloadField
{

	/**
	 * It returns pdfmake image notation { image: ..., width: ..., height: ... }
	*/
	public function getPdfValue(&$data, $keylink = "")
	{
		if( !$data[ $this->field ] )
			return '""';

		$width = $this->container->pSet->getImageWidth( $this->field );

		if( !$width )
		{
			$width = 100;
			if ( $this->container->pageType === PAGE_VIEW )
				$width = 300;
		}

		$imageType = SupposeImageType( $data[ $this->field ] );
		if( $imageType == "image/jpeg" || $imageType == "image/png" )
		{
			return '{
				image: "' . jsreplace( 'data:'. $imageType . ';base64,' . base64_bin2str( $data[ $this->field ] ) ) . '",
				width: ' . $width . ',
				height: ' .$this->container->pSet->getImageHeight( $this->field ) . '
			}';
		} else {
			$urls = $this->getFileURLs( $data, $keylink );
			if( $urls ) {
				return '{
					image: "' . jsreplace( $urls[0]["image"] ) . '",
					width: ' . $width . ',
					height: ' .$this->container->pSet->getImageHeight( $this->field ) . '
				}';
			}
		}

		return '""';
	}

	protected function getFileURLs( &$data, $keylink )
	{
		$fileURLs = array();
		if( !$data[ $this->field ] ) {
			return array();
		}
		$pSet = $this->pSettings();
		
		$fileName = 'file.jpg';
		$fileNameF = $pSet->getFilenameField($this->field);
		if( $fileNameF && $data[$fileNameF] )
			$fileName = $data[$fileNameF];

		$params = array();
		$params["filename"] = $fileName;
		$params["table"] = $pSet->table();
		$params["field"] = $this->field;
		$params["hash"] = fileAttrHash( $keylink, strlen_bin( $data[ $this->field ] ) );

		$url = array(
			"image" => GetTableLink("file", "", prepareUrlQuery( $params ).$keylink ),
			"filename" => $fileName
		);
		$thumbField = $pSet->getStrThumbnail( $this->field );
		if( $thumbField && $this->showThumbnails ) {
			$params["thumbnail"] = 1;
			$params["hash"] = fileAttrHash( $keylink, strlen_bin( $data[ $thumbField ] ) );
			$url["thumbnail"] = GetTableLink("file", "", prepareUrlQuery( $params ).$keylink );
		}
		$fileURLs[] = $url;

		return $fileURLs;
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

		return "<<Image>>";
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
	 * Get the width and height setting for small thumbnails
	 * wrapping in a style attribute
	 * @param String imageSrc
	 * @param Boolean hasThumbnail
	 * @return String
	 */
	protected function getSmallThumbnailStyle( $imageSrc = false, $hasThumbnail = true )
	{
		$styles = array();

		if( $imageSrc )
		{
			//	this is required to avoid the corrupting of the tag by the html2xhtml function in html2ps library
			$imageSrc = str_replace( "=", "&#61;", $imageSrc );
			$styles[] = ' background-image: url('.$imageSrc.');';
			if( !$hasThumbnail )
				$styles[] = ' background-size: '. $this->thumbWidth.'px '.$this->thumbHeight.'px ;';
		}

		if( $this->thumbWidth )
			$styles[] = ' width: '.$this->thumbWidth.'px;';

		if( $this->thumbHeight )
			$styles[] = ' height: '.$this->thumbHeight.'px';

		return ' style="'. implode( '' , $styles ) .'"';
	}
}
?>