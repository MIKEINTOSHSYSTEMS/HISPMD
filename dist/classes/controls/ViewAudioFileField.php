<?php
include_once getabspath("classes/controls/ViewFileField.php");
class ViewAudioFileField extends ViewFileField
{
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

		$fileUrls = $this->getFileURLs( $data, $keylink );
		
		$controls = array();
		foreach( $fileUrls as $u ) {
			$controls[] = ViewAudioFileField::makeAudioControl( $u );
		}
		return implode( "", $controls );
	}

	/**
	 * @param Array urlData - element of array returned by getFileURLs
	 * @return String (HTML)
	 */
	public static function makeAudioControl( $urlData ) {

		$htmlTitle = runner_htmlspecialchars( $urlData["title"] );
		$htmlAltTitle = runner_htmlspecialchars( $urlData["altTitle"] );
		$htmlUrl = runner_htmlspecialchars( $urlData["url"] );

		return '<figure>'
			.'<figcaption>' . $htmlTitle . '<figcaption>'
			.'<audio controls preload="none" src="' . $htmlUrl . '">'
			.'<a title="' . $htmlAltTitle . '" href="' . $htmlUrl . '">' . $htmlAltTitle . '</a>'
			.'</audio></figure>';
	}

	
	/**
	 * @return Array of array(
	 * 		"url" => link to the file
	 * 		"title" => audio label
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
			} else {
				$url = projectURL() . $this->getFileUrl( $file, $keylink, false );
			}
			$titleField = $pSet->getAudioTitleField( $this->field );
			if ( $titleField ) {
				$title = $data[ $titleField ];
				$altTitle = $title;
			} else {
				$altTitle = $file["usrName"];
				$title = "";
			}
			$ret[] = array(
				"url" => $url,
				"title" => $title,
				"altTitle" => $altTitle
			);
		}
		return $ret;
	}

	protected function isUrl() {
		return $this->pSettings()->isVideoUrlField( $this->field );
	}

}
?>