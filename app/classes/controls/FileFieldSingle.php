<?php
require_once getabspath('classes/filehandler.php');

class FileFieldSingle extends EditControl
{
	function __construct($field, $pageObject, $id, $connection)
	{
		parent::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_FILE;

	}


	/**
	 * addJSFiles
	 * Add control JS files to page object
	 */
	function addJSFiles()
	{
	}

	/**
	 * addCSSFiles
	 * Add control CSS files to page object
	 */
	function addCSSFiles()
	{
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);

		if( $mode == MODE_SEARCH  )
		{
			$this->format = "";
			
			$classString = "";
			if( $this->pageObject->isBootstrap() )
				$classString = " class=\"form-control\"";
			
			echo '<input id="'.$this->cfield.'" '.$classString.$this->inputStyle.' type="text" '
				.('autocomplete="off" ')
				.( $this->is508 == true ? 'alt="'.$this->strLabel.'" ' : '' )
				.'name="'.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field).' value="'
				.runner_htmlspecialchars($value).'">';

			$this->buildControlEnd($validate, $mode);
			return;
		}

		$keyParams = array();
		foreach( $this->pageObject->pSetEdit->getTableKeys() as $i => $kf ) {
			$keyParams[] = "key".($i + 1). "=".runner_htmlspecialchars(rawurlencode( @$data[ $kf ] ));
		}
		$keyLink = "&" . implode("&", $keyParams);


		$disp = "";
		$strfilename = "";

		$filename_size = $this->pageObject->pSetEdit->isUseTimestamp( $this->field )
			? 50
			: 30;

		if( $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT )
		{
			// show current file
			$filesArray = $this->getFileData( $value );
			$fileName = "";
			if( $filesArray ) {
				$fileData = $filesArray[0];
				$fileName = $fileData["usrName"];

				$viewFormat = $this->pageObject->pSetEdit->getViewFormat( $this->field );
				if( $viewFormat == FORMAT_FILE || $viewFormat == FORMAT_FILE_IMAGE )
					$disp = $this->getFileOrImageMarkup( $fileData, $keyLink ) . "<br />";
			}


			//	filename edit
			$strfilename = '<input type=hidden name="filenameHidden_'.$this->cfieldname.'" value="'.runner_htmlspecialchars( $fileName ).'"><br>'
				."Filename"
				.'&nbsp;&nbsp;<input type="text" style="background-color:gainsboro" disabled id="filename_'.$this->cfieldname
				.'" name="filename_'.$this->cfieldname.'" size="'.$filename_size.'" maxlength="100" value="'.runner_htmlspecialchars( $fileName ).'">';

			$strtype = '<br><input id="'.$this->ctype.'_keep" type="Radio" name="'.$this->ctype
					.'" value="upload0" checked class="rnr-uploadtype">'."Keep";

			if( (strlen($value) || $mode == MODE_INLINE_EDIT) && !$this->pageObject->pSetEdit->isRequired($this->field) )
			{
				$strtype .= '<input id="'.$this->ctype.'_delete" type="Radio" name="'.$this->ctype
					.'" value="upload1" class="rnr-uploadtype">'."Delete";
			}
			$strtype .= '<input id="'.$this->ctype.'_update" type="Radio" name="'.$this->ctype
				.'" value="upload2" class="rnr-uploadtype">'."Update";
		}
		else
		{
			//	if Adding record
			$strtype = '<input id="'.$this->ctype.'" type="hidden" name="'.$this->ctype.'" value="upload2">';

			$strfilename = '<br>'."Filename"
				.'&nbsp;&nbsp;<input type="text" id="filename_'.$this->cfieldname.'" name="filename_'.$this->cfieldname.'" size="'
				.$filename_size.'" maxlength="100">';
		}

		echo $disp.$strtype;

		if( $mode == MODE_EDIT || $mode == MODE_INLINE_EDIT )
			echo '<br>';

		echo '<input type="File" id="'.$this->cfield.'" '
			.'accept="'.$this->pageObject->pSetEdit->getAcceptFileTypesHtml($this->field).'" '
			.( ($mode == MODE_INLINE_EDIT || $mode == MODE_INLINE_ADD) && $this->is508 == true ? 'alt="'.$this->strLabel.'" ' : '')
			.' name="'.$this->cfield.'" >'.$strfilename;

		echo '<input type="Hidden" id="notempty_'.$this->cfieldname.'" value="'.(strlen($value)? 1 : 0).'">';

		$this->buildControlEnd($validate, $mode);
	}

	/**
	 * Get the image or file link markup
	 * @param String value
	 * @param String fileName
	 * @param Boolean newUploaderWasUsed
	 * @param Array fileData
	 * @return String
	 */
	function getFileOrImageMarkup( $fileData, $keylink )
	{
		$fileName = $fileData["usrName"];
		$urls = $this->getFileUrls( $fileData, $keylink );
		if( !$urls["url"] ) {
			return "";
		}


		if( !CheckImageExtension( $fileName ) )
		{
			return "<a target=\"_blank\" href=\"". runner_htmlspecialchars( $urls["url"] )."\">"
				.runner_htmlspecialchars( $fileName )."</a>";
		}

		if( !$urls["thumbnail"] ) {
			$urls["thumbnail"] = $urls["url"];
		}

		$altAttr = " alt=\"".runner_htmlspecialchars( $fileName )."\"" ;
		return "<a target=\"_blank\" href=\"". runner_htmlspecialchars( $urls["url"] ) . "\" >"
				."<img class=\"r-editfile-img\" ". $altAttr ." border=0 src=\"". runner_htmlspecialchars( $urls["thumbnail"] ) . "\"></a>";

	}

	/**
	 *
	 */
	function readWebValue(&$avalues, &$blobfields, $legacy1, $legacy2, &$filename_values)
	{
		$this->getPostValueAndType();

		if( FieldSubmitted( $this->goodFieldName."_".$this->id ) )
		{
			$fileNameForPrepareFunc = securityCheckFileName( postvalue("filename_".$this->goodFieldName."_".$this->id) );
			if( $this->pageObject->pageType != PAGE_EDIT )
			{
				$this->webValue = prepare_upload($this->field, "upload2", $fileNameForPrepareFunc, $fileNameForPrepareFunc, ""
					, $this->id, $this->pageObject);
			}
			else
			{
				if(substr($this->webType, 0, 4) == "file")
				{
					$prepearedFile = prepare_file($this->webValue, $this->field, $this->webType, $fileNameForPrepareFunc, $this->id);
					if($prepearedFile !== false)
					{
						$this->webValue = $prepearedFile["value"];
						$filename = $prepearedFile["filename"];
					}
					else
						$this->webValue = false;
				}
				else if(substr($this->webType, 0, 6) == "upload")
				{
					if($fileNameForPrepareFunc)
						$this->webValue = $fileNameForPrepareFunc;
					if($this->webType == "upload1")
					{
						// file deletion, read filename from the database
						$oldValues = $this->pageObject->getOldRecordData();
						$fileNameForPrepareFunc = $oldValues[$this->field];
					}
					$this->webValue = prepare_upload($this->field, $this->webType, $fileNameForPrepareFunc, $this->webValue, "", $this->id, $this->pageObject);
				}
			}
		}
		else
			$this->webValue = false;

		if(!($this->webValue === false))
		{
			if( $this->webValue && $this->pageObject->pSetEdit->getCreateThumbnail($this->field) )
			{
				$contents = GetUploadedFileContents("value_".$this->goodFieldName."_".$this->id);
				$ext = CheckImageExtension( GetUploadedFileName("value_".$this->goodFieldName."_".$this->id) );
				if( $ext ) {
					$thumb = CreateThumbnail($contents, $this->pageObject->pSetEdit->getThumbnailSize($this->field), $ext);
					$this->pageObject->filesToSave[] = new SaveFile($thumb, $this->pageObject->pSetEdit->GetStrThumbnail($this->field)
						.$this->webValue, $this->pageObject->pSetEdit->getUploadFolder($this->field), $this->pageObject->pSetEdit->isAbsolute($this->field));
				}
			}

			$avalues[ $this->field ] = $this->webValue;
		}
	}

	function makeWidthStyle($widthPx)
	{
		if(0 == $widthPx)
			return "";
		return "min-width: ".$widthPx."px";
	}

	protected function getFileData( $value ) {
		return RunnerFileHandler::getFileArray( $value, $this->field, $this->pageObject->pSet );
	}

	/**
	 * @return Array
	 * 	"url" => string
	 * 	"thumbnail" => string 
	 * Each element can be empty if no corresponding file exists
	 * 
	 */
	protected function getFileUrls( $fileData, $keylink ) {
		$pSet = $this->pageObject->pSet;
		$fs = getStorageProvider( $pSet, $this->field );
		$fsInfo = $fs->getFileInfo( $fileData["name"] );
		if( !$fsInfo ) {
			return array();
		}
		$lastModified = time();
		if( $fsInfo["lastModified"]) {
			$lastModified = $fsInfo["lastModified"];
		}

		$params = array();
		$params["file"] = $fileData["usrName"];
		$params["table"] = $pSet->table();
		$params["field"] = $this->field;
		$params["hash"] = fileAttrHash( $keylink, $file["size"], $lastModified );
		
		foreach( $additionalParams as $k => $val ) {
			$params[ $k ] = $val;
		}
		$ret = array();
		$ret["url"] = GetTableLink("file", "", prepareUrlQuery( $params ).$keylink );


		if( $fileData["thumbnail"] && $fs->getFileInfo( $fileData["thumbnail"] ) ) {
			$params["thumbnail"] = 1;
			$ret["thumbnail"] = GetTableLink("file", "", prepareUrlQuery( $params ).$keylink );
		}

		if( !$ret["thumbnail"] && $fsInfo["size"] > 512000 ) {
			$ret["thumbnail"] = "images/icons/jpg.png";
		}

		
		return $ret;
		

	}

}
?>