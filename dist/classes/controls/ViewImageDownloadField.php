<?php
include_once getabspath("classes/controls/ViewFileField.php");
class ViewImageDownloadField extends ViewFileField
{
	protected $isImageURL = false;
	protected $showThumbnails = false;

	protected $setOfThumbnails = false;

	protected $useAbsolutePath = false;

	protected $imageWidth;
	protected $imageHeight;

	protected $thumbWidth;
	protected $thumbHeight;


	function __construct($field, $container, $pageobject)
	{
		parent::__construct($field, $container, $pageobject);

		$this->showThumbnails = $container->pSet->showThumbnail( $this->field ) && !$this->isUrl();
		$this->setOfThumbnails = $container->pSet->showListOfThumbnails( $this->field );
		$this->useAbsolutePath = $container->pSet->isAbsolute( $this->field );

		$this->imageWidth = $container->pSet->getImageWidth( $this->field );
		$this->imageHeight = $container->pSet->getImageHeight( $this->field );

		if( $this->showThumbnails )
		{
			$this->thumbWidth = $container->pSet->getThumbnailWidth( $this->field );
			$this->thumbHeight = $container->pSet->getThumbnailHeight( $this->field );
		}
	}

	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	public function addJSFiles()
	{
		$this->getJSControl();
		$pSet = $this->pSettings();
		if( $pSet->isGalleryEnabled( $this->field ) ) {
			$this->addJSFile('include/photoswipe/photoswipe.min.js');
			$this->addJSFile('include/photoswipe/photoswipe-ui-default.min.js');
		}
	}

	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */
	function addCSSFiles()
	{
		$pSet = $this->pSettings();
		if( $pSet->isGalleryEnabled( $this->field ) ) {
			$this->AddCSSFile("include/photoswipe/photoswipe.css");
			$this->AddCSSFile("include/photoswipe/default-skin/default-skin.css");
		}
	}

	/**
	 * It returns pdfmake image notation { image: ..., width: ..., height: ... }
	 */
	public function getPdfValue(&$data, $keylink = "")
	{
		if( !$data[ $this->field ] )
			return '""';



		if ($this->isUrl()) {
			return '{
				image: "' . $data[$this->field] . '",
				width: ' . $this->imageWidth . ',
				height: ' . $this->imageHeight . '
			}';
		}

		$resultValues = array();
		$filesArray = $this->getFilesData( $data[ $this->field ] );

		$pSet = $this->pSettings();
		$maxImages = $pSet->getMaxImages( $this->field );
		$imgCount = 0;

		$fs = getStorageProvider( $pSet, $this->field );

		foreach( $filesArray as $imageFile )
		{
			if( $maxImages > 0 && $imgCount++ > $maxImages )
				break;

			if( !CheckImageExtension( $imageFile["name"] ) )
			{
				$resultValues[] = '""';
				continue;
			}

			$imagePath = $this->getImagePath( $imageFile["name"] ) ;
			if( !myfile_exists( $imagePath ) )
				continue;

			if( !$this->showThumbnails )
			{				
				$_image = $this->getImagePdfString( $imagePath, $data, $keylink );
				if( $_image ) {
					$resultValues[] = '{
						image: "' . jsreplace( $_image ) . '",
						width: ' . $this->imageWidth  . ',
						height: ' . $this->imageHeight . '
					}';
				}
				continue;
			}

			$thumbPath = $this->getImagePath( $imageFile["thumbnail"] );
			$_thumbPath = myfile_exists( $thumbPath ) ? $thumbPath : $imagePath;
			$_image = $this->getImagePdfString( $_thumbPath, $data, $keylink );	
			
			if( $_image ) {	
				$resultValues[] = '{
					image: "' . jsreplace( $_image ) . '",
					width: ' . $this->thumbWidth . ',
					height: ' . $this->thumbHeight . '
				}';
			}
		}

		if( count( $resultValues ) > 0 )
			return '[' . implode( ',', $resultValues ) . ']';

		return '""';
	}
	
	protected function getImagePdfString( $imgPath, &$data, $keylink ) 
	{
		$content = myfile_get_contents_binary( $imgPath );
		$imageType = SupposeImageType( $content );
		
		if( $imageType == "image/jpeg" || $imageType == "image/png" )
			return 'data:'. $imageType. ';base64,' . base64_bin2str( $content );

		$urls = $this->getFileURLs( $data, $keylink );
		if( $urls )
			return $urls[0]["image"];
		
		return '';
	}

	/**
	 * @return Array of arrays (
	 * 		image => fileId,
	 * 		filename => filename
	 * 		thumbnail (optional) => thumb fileid 
	 * )
	 */
	protected function getFileURLs(&$data, $keylink)
	{
		$pSet = $this->pSettings();
		$showThumbnails = $pSet->showThumbnail( $this->field );

		$fileURLs = array();

		if ( $this->isUrl() ) {
			$path = pathinfo( $data[$this->field] );
			$fileURLs = array( 0 => array(
				"image" => $data[$this->field],
				"filename" => $path['filename'],
			) );
		}
		else
		{
			$fs = getStorageProvider( $pSet, $this->field );
			$files = $this->getFilesData( $data [$this->field ] );
			foreach( $files as $f ) {
				
				if( !$this->fastFileExists( $f['name'], $fs ) ) {
					continue;
				}
				$url = array(
					"image" => $this->getFileUrl( $f, $keylink ),
					"filename" => $f["usrName"]
				);
				if( $showThumbnails && ( $f["thumbnail"] || $fs->autoThumbnails() ) ) {
					if( $fs->autoThumbnails() || $this->fastFileExists( $f['thumbnail'], $fs ) ) {
						$url["thumbnail"] = $url["image"] . "&thumbnail=1";
					}
				}
				$fileURLs[] = $url;
			}
		}
		return $fileURLs;
	}


	public function showDBValue( &$data, $keylink, $html = true )
	{
		if( !$data[$this->field] )
			return '';

		$pSet = $this->pSettings();
		$fileURLs = $this->getFileURLs($data, $keylink);

		$attrs = array();
		$attrs["images"] = my_json_encode( $fileURLs );

		$attrs["thumbnails"] = $pSet->showThumbnail( $this->field );
		$attrs["images"] = my_json_encode( $fileURLs );
		$attrs["multiple"] = $pSet->getMultipleImgMode( $this->field );
		$attrs["max-images"] = $pSet->getMaxImages( $this->field );
		$attrs["gallery"] = $pSet->isGalleryEnabled( $this->field );
		$attrs["gallery-mode"] = $pSet->getGalleryMode( $this->field );
		$attrs["caption-mode"] = $pSet->getCaptionMode( $this->field );
		if( $attrs["caption-mode"] == 3 )
			$attrs["caption"] = $data[ ''.$pSet->getCaptionField( $this->field ) ];
		$attrs['width'] = $pSet->getImageWidth( $this->field );
		$attrs['height'] = $pSet->getImageHeight( $this->field );
		if( $attrs["thumbnails"] ) {
			$attrs['th-width'] = $pSet->getThumbnailWidth( $this->field );
			$attrs['th-height'] = $pSet->getThumbnailHeight( $this->field );
		}
		if( $pSet->getImageBorder( $this->field ) )
			$attrs["border"] = "true";
		if( $pSet->getImageFullWidth( $this->field ) )
			$attrs["fullwidth"] = "true";

		$htmlAttrs = array();
		foreach( $attrs as $name => $value ) {
			$htmlAttrs[] = 'data-' . $name . '="' . runner_htmlspecialchars($value) . '"';
		}

		return '<div class="r-images" '. join( ' ', $htmlAttrs ) . '></div>';

	}

	/**
	 * @param &Array data
	 * @return String
	 */
	public function getTextValue(&$data)
	{
		$filesData = $this->getFilesData( $data[ $this->field ] );
		$fileNames = array();
		foreach( $filesData as $f ) {
			$fileNames[] = $f["usrName"] ;
		}
		return implode(", ", $fileNames);
	}

	/**
	 * Get the path to the image file
	 * @param String imageFile
	 * @return String
	 */
	protected function getImagePath( $imageFile )
	{
		if( $this->useAbsolutePath || isAbsolutePath($imageFile) )
			return $imageFile;

		return getabspath($imageFile);
	}

	/**
	 * Get the width and height setting for small thumbnails
	 * wrapping in a style attribute
	 * @param String imageSrc (optional)
	 * @param Boolean hasThumbnail (optional)
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
		}

		if( $this->thumbWidth )
			$styles[] = ' width: '.$this->thumbWidth.'px;';

		if( $this->thumbHeight )
			$styles[] = ' height: '.$this->thumbHeight.'px';

		return ' style="'. implode( '' , $styles ) .'"';
	}

	/**
	 * Get the width and height styles set for big thumbnails
	 * (the 'Sets of thumbnails with preview' option)
	 * @param Boolean widthAutoSet	(optional)
	 * @return String
	 */
	protected function getBigThumbnailSizeStyles( $widthAutoSet = false )
	{
		$bigThumbnailSizeStyle = "";
		$bigThumbnailHeight = $this->imageHeight;
		$bigThumbnailWidth = $this->imageWidth;

		if( $bigThumbnailWidth )
			$bigThumbnailSizeStyle.= ' width: '.$bigThumbnailWidth.'px;';

		if($bigThumbnailHeight)
			$bigThumbnailSizeStyle.= ' height: '.$bigThumbnailHeight.'px;';

		if( !$bigThumbnailWidth && $bigThumbnailHeight && $widthAutoSet )
			$bigThumbnailSizeStyle.= ' width: '. floor( 4 * $bigThumbnailHeight / 3 ).'px;';

		return $bigThumbnailSizeStyle;
	}

	/**
	 * Check for need to load the javascript files
	 * @return boolean
	 */
	public function neededLoadJSFiles()
	{
		return true;
	}

	protected function isUrl() {
		return $this->pSettings()->isImageURL( $this->field );
	}

}
?>