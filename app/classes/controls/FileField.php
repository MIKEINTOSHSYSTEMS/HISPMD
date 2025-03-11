<?php
require_once getabspath('classes/filehandler.php');

class FileField extends EditControl
{
	/**
	 * Instanse of UploadHandler class
	 * @var {object}
	 */
//	var $upload_handler = null;

	/**
	 * Field random identifier for sessions values
	 * @var {string}
	 */
	var $formStamp = "";

	function __construct($field, $pageObject, $id, $connection)
	{
		parent::__construct($field, $pageObject, $id, $connection);
		$this->format = EDIT_FORMAT_FILE;
	}

	function addJSFiles() {
		if ( $this->format = EDIT_FORMAT_FILE ) {
			$this->pageObject->AddJSFile("include/mupload.js");
		}
	}

	function buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data)
	{
		parent::buildControl($value, $mode, $fieldNum, $validate, $additionalCtrlParams, $data);

		if( $mode == MODE_SEARCH ) {
			$this->format = "";
			
			$classString = "";
			if( $this->pageObject->isBootstrap() )
				$classString = " class=\"form-control\"";
			
			echo '<input id="'.$this->cfield.'" '.$classString.$this->inputStyle.' type="text" '
				.('autocomplete="off" ')
				.( $this->is508==true ? 'alt="'.$this->strLabel.'" ' : '')
				.'name="'.$this->cfield.'" '.$this->pageObject->pSetEdit->getEditParams($this->field).' value="'
				.runner_htmlspecialchars($value).'">';
			
			$this->buildControlEnd($validate, $mode);
			return;
		}

		$this->formStamp = generatePassword(15);

		$filesArray = $this->getFileData( $value );

		$keylink = "";
		if($this->pageObject->pageType == PAGE_EDIT) {
			if(count($this->pageObject->keys) > 0)
			{
				$i = 1;
				foreach($this->pageObject->keys as $keyName => $keyValue)
				{
					$keylink .= "&key".$i."=".rawurlencode( $keyValue );
					$i++;
				}
			}
		}
		$fh = new RunnerFileHandler( $this->field, $this->pageObject->pSet, $this->formStamp );
		$userFilesArray = $fh->loadFiles( $filesArray );
		
		$jsonValue = my_json_encode($userFilesArray);
		$multiple = "";
		if( $this->pageObject->pSetEdit->getMaxNumberOfFiles($this->field) != 1 )
			$multiple = "multiple ";
		echo '
 <!-- The file upload form used as target for the file upload widget -->
    <form id="fileupload_'.$this->cfieldname.'" action="'.GetTableLink("mfhandler").'" method="POST" enctype="multipart/form-data">

    <input type="hidden" name="formStamp_'.$this->cfieldname.'" id="formStamp_'.$this->cfieldname.'" value="'.$this->formStamp.'" />
    <input type="hidden" name="_action" value="POST" />
    <input type="hidden" id="value_'.$this->cfieldname.'" name="value_'.$this->cfieldname.'" value="'.runner_htmlspecialchars($jsonValue).'" />

    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="fileupload-buttonbar">
            <div class="span7">
                <!-- The fileinput-button span is used to style the file input field as button -->
 				<SPAN class="btn btn-primary btn-sm fileinput-button filesUpload">
					<!--<A class="rnr-button filesUpload button" href="#" >-->
					<input class="fileinput-button-input" type="file" accept="'.$this->pageObject->pSetEdit->getAcceptFileTypesHtml($this->field).'" name="files[]" value="'
				."Add files"
				.'" '. $multiple .' />'
				."Add files"
				.'<!--</A>-->
				</SPAN>'
		.'

            </div>
            <!-- The global progress information -->
            <div class="fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress" role="progressbar" aria-valuemin="0" aria-valuenow="0" aria-valuemax="100">
                    <div style="width:0;" class="bar progress-bar progress-bar-info progress-bar-striped active"  ></div>
                </div>
                <!-- The extended global progress information -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The loading indicator is shown during file processing -->
        <div class="fileupload-loading"></div>
        <!-- The table listing the files available for upload/download -->
        <table class="mupload-files"><tbody class="files"></tbody></table>
    </form>
    ';
		if(!isset($this->container->globalVals["muploadTemplateIncluded"]))
		{
			echo '<script type="text/x-tmpl" id="template-download">{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        {% if (file.error) { %}
            <td></td>
            <td class="name"><span class="text-muted">{%=file.name%}</span></td>
            <td class="size"><span class="text-muted" dir="LTR">{%=o.formatFileSize(file.size)%}</span></td>
            <td colspan=2 class="error"><span class="text-danger rnr-error">'
			.""
			.' {%=locale.fileupload.errors[file.error] || file.error%}</span></td>
        {% } else { %}
            <td class="preview">{% if (file.thumbnail_url) { %}
                <a href="{%=file.url%}" title="{%=file.name%}" rel="gallery" download="{%=file.name%}"
                	{% if (!file.isIco) { %} {% } %}
                	><img class="mupload-preview-img" src="{%=file.thumbnail_url%}&src=1"></a>
            {% } else { %}
            	{% if (file.isImg) { %}
            		<a href="{%=file.url%}&nodisp=1" title="{%=file.name%}" rel="gallery" download="{%=file.name%}" ><img class="mupload-preview-img" src="{%=file.url%}&src=1"></a>
            	{% } %}
            {% } %}</td>
            <td class="name">
                <a href="{%=file.url%}" title="{%=file.name%}" rel="{%=file.thumbnail_url&&\'gallery\'%}" download="{%=file.name%}">{%=file.name%}</a>
            </td>
            <td class="size"><span dir="LTR">{%=o.formatFileSize(file.size)%}</span></td>
			<td></td>
			<td class="delete">
				{% if (!file.error) { %}
				<SPAN class="btn btn-xs btn-default delete" data-type="{%=file.delete_type%}" data-url="{%=file.delete_url%}" data-name="{%=file.name%}">
				<!--<A href="#" >-->'
				."Delete"
				.'<!--</A>-->
					</SPAN>
				{% } %}
			</td>
        {% } %}
    </tr>
{% } %}
</script>
<script type="text/x-tmpl" id="template-upload">{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td class="preview"><span class="fade"></span></td>
        {% if (file.error) { %}
			<td class="name"><span class="text-muted">{%=file.name%}</span></td>
			<td class="size"><span class="text-muted">{%=o.formatFileSize(file.size)%}</span></td>
            <td class="error" colspan="2"><span class="text-danger rnr-error">'
			.""
			.' {%=locale.fileupload.errors[file.error] || file.error%}</span></td>
        {% } else if (o.files.valid && !i) { %}
			<td class="name"><span>{%=file.name%}</span></td>
			<td class="size"><span>{%=o.formatFileSize(file.size)%}</span></td>
            <td>
                <div class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0"
                	aria-valuemax="100" aria-valuenow="0"><div class="progress-bar bar" style="width:0;"></div></div>
            </td>
        {% } else { %}
            <td></td>
        {% } %}
        <td class="cancel">{% if (!i) { %}
        	{% if (!file.error) { %}
        	<SPAN class="btn btn-default btn-xs">
			<!--<A href="#" >-->'
			."Cancel"
			.'<!--</A>-->
				</SPAN>
			{% } %}
        {% } %}</td>
    </tr>
{% } %}</script>';
			$this->container->globalVals["muploadTemplateIncluded"] = true;
		}
		$this->buildControlEnd($validate, $mode);
	}

	/**
	* Create CSS code for specifying control's width
	*/
	function makeWidthStyle($widthPx)
	{
		if(0 == $widthPx)
			return "";
		return "min-width: ".$widthPx."px";
	}

	public function readWebValue(&$avalues, &$blobfields, $legacy1, $legacy2, &$filename_values)
	{
		$this->getPostValueAndType();
		$this->formStamp = postvalue("formStamp_".$this->goodFieldName."_".$this->id);
		if (FieldSubmitted($this->goodFieldName."_".$this->id) && $this->formStamp != "")
		{
			$filesArray = my_json_decode($this->webValue);
			if(!is_array($filesArray) || count($filesArray) == 0)
				$this->webValue = "";
			else
			{
				if(count($_SESSION["mupload_".$this->formStamp]) > 0)
				{
					foreach($_SESSION["mupload_".$this->formStamp] as $fileArray)
						$fileArray["deleted"] = true;
				}
				$result = array();
				$uploadDir = $this->pageObject->pSetEdit->getLinkPrefix($this->field);
				$searchStr = "";
				foreach ($filesArray as $file)
				{
					if(isset($_SESSION["mupload_".$this->formStamp][$file["name"]]))
					{
						$sessionFile = $_SESSION["mupload_".$this->formStamp][$file["name"]]["file"];
						$searchStr .= $file["name"].",!";
						$result[] = array("name" => $sessionFile["name"],
							"usrName" => $file["name"], "size" => $sessionFile["size"], "type" => $sessionFile["type"]
						);
						if($this->pageObject->pSetEdit->getCreateThumbnail($this->field)
							&& $sessionFile["thumbnail"] != "")
						{
							$lastIndex = count($result) - 1;
							$result[$lastIndex]["thumbnail"] = $sessionFile["thumbnail"];
							$result[$lastIndex]["thumbnail_type"] = $sessionFile["thumbnail_type"];
							$result[$lastIndex]["thumbnail_size"] = $sessionFile["thumbnail_size"];
						}
						$_SESSION["mupload_".$this->formStamp][$file["name"]]["deleted"] = false;
					}
				}
				if(count($result) > 0)
				{
					$result[0]["searchStr"] = $searchStr.":sStrEnd";
					$this->webValue = my_json_encode_unescaped_unicode($result);
				}
				else
					$this->webValue = "";
			}
		}
		else
			$this->webValue = false;

		if(!($this->webValue===false))
		{
			if( $this->connection->dbType == nDATABASE_Informix )
			{
				if(IsTextType($this->pageObject->pSetEdit->getFieldType($this->field)))
					$blobfields[] = $this->field;
			}
			$avalues[$this->field] = $this->webValue;
		}
	}

	/**
	 * Form the control specified search options array and built the control's search options markup
	 * @param String selOpt		The search option value
	 * @param Boolean not		It indicates if the search option negation is set
	 * @param Boolean both		It indicates if the control needs 'NOT'-options
	 * @return String			A string containing options markup
	 */
	public function getSearchOptions($selOpt, $not, $both)
	{
		$optionsArray = array();
		$isPHPEncripted = $this->pageObject->cipherer->isFieldPHPEncrypted($this->field);
		if(!$isPHPEncripted){
			$optionsArray[] = CONTAINS;
			$optionsArray[] = EQUALS;
		}
		$optionsArray[] = EMPTY_SEARCH;
		if($both)
		{
			if(!$isPHPEncripted){
				$optionsArray[] = NOT_CONTAINS;
				$optionsArray[] = NOT_EQUALS;
			}
			$optionsArray[] = NOT_EMPTY;
		}
		return $this->buildSearchOptions($optionsArray, $selOpt, $not, $both);
	}

	/**
	 * Fill the response array with the suggest values
	 *
	 * @param String value
	 *		Note: the real value is preceeded with "_" so It's necessary to remove
	 *		the first character before json decoding . Also It's important to add "_"
	 *		to the beggining of the response suggest value because Searchsuggest
	 *		expects that it starts with this character.
	 * @param String searchFor
	 * @param &Array response
	 * @param &Array row
	 */
	public function suggestValue($value, $searchFor, &$response, &$row)
	{
		if(!$value)
			return;

		//value is preceeded with "_"
		$value = substr($value, 1);

		$filesArray = my_json_decode($value);

		if(!is_array($filesArray) || count($filesArray) == 0)
			$response[ "_".$value ] = "_".$value;
		else
		{
			for($i = 0; $i < count($filesArray) && count($response) < 10; $i++)
			{
				if($this->pageObject->pSetEdit->getNCSearch())
					$pos = stripos($filesArray[$i]["usrName"], $searchFor);
				else
					$pos = strpos($filesArray[$i]["usrName"], $searchFor);

				if($pos !== false)
					$response[ "_".$filesArray[$i]["usrName"] ] = "_".$filesArray[$i]["usrName"];
			}
		}
	}

	public function afterSuccessfulSave()
	{
		if( !$_SESSION["mupload_".$this->formStamp] ) {
			return;
		}
		$fs = getStorageProvider( $this->pageObject->pSet, $this->field );			
		foreach( $_SESSION["mupload_".$this->formStamp] as $fileArray ) {
			if( !$fileArray["deleted"] ) {
				continue;
			}
			$fs->delete( $fileArray["file"]["name"] );
			if( $fileArray["file"]["thumbnail"] ) {
				$fs->delete( $fileArray["file"]["thumbnail"] );
			}
		}
		unset($_SESSION["mupload_".$this->formStamp]);
	}

	/**
	 * @param String fieldValue
	 * @return String
	 */
	public function getFieldValueCopy( $fieldValue )
	{
		$fs = getStorageProvider( $this->pageObject->pSet, $this->field );
		if( !$fs->fast() ) {
			return "[]";
		}
		$uploadFolder = $this->pageObject->pSetEdit->getUploadFolder( $this->field );

		$filesData = $this->getFileData( $fieldValue );
		foreach( array_keys( $filesData ) as $idx ) {
			$file =& $filesData[ $idx ];
			$newName = $fs->copyFile( $file["name"], $file["usrName"] );
			if( !$newName ) {
				continue;
			}
			$file["name"] = $newName;
			
			if( $this->pageObject->pSetEdit->getCreateThumbnail( $this->field ) && $file["thumbnail"] ) {
				$thumbnailPrefix = $this->pageObject->pSetEdit->getStrThumbnail( $this->field );
				$newThumbnail = $fs->copyFile( $file["thumbnail"], $thumbnailPrefix.$file["usrName"] );
				if( $newThumbnail ) {
					$file["thumbnail"] = $newThumbnail;
				} else {
					unset( $file["thumbnail"] );
				}
			}
		}

		return my_json_encode( $filesData );
	}
	
	/**
	 * 	Returns basic condition
	 */
	public function getBasicFieldCondition( $searchFor, $strSearchOption, $searchFor2 = "", $etype = "" ) {
		if( $strSearchOption == EQUALS ) {			
			return $this->getFilenameCondition( dsopEQUAL, $searchFor );
		} else if( $strSearchOption == STARTS_WITH ) {
			return $this->getFilenameCondition( dsopSTART, $searchFor );
		} else if( $strSearchOption == CONTAINS ) {
			return $this->getFilenameCondition( dsopCONTAIN, $searchFor );
		} else if( $strSearchOption == EMPTY_SEARCH ) {
			return DataCondition::FieldIs( $this->field, dsopEMPTY, $searchFor );
		}
		return null;
	}
	
	/**
	 * Get file field search condition
	 * @param operation dsopEQUAL | dsopSTART | dsopCONTAIN
	 * @param String searchFor
	 * @return DsCondition
	 */	
	protected function getFilenameCondition( $operation, $searchFor ) {
		$caseInsensitive = $this->pageObject->pSetEdit->getNCSearch() ? dsCASE_INSENSITIVE : dsCASE_DEFAULT;
				
		$startCondition = DataCondition::FieldIs( $this->field, dsopSTART, "[{", $caseInsensitive );
					
		// To extend like condition pattern
		$likeWrapper = null;
		$before = 'searchStr":"';
		$after = ':sStrEnd"';
		
		// set up suitable value and like wrapper parts
		// to get proper like pattern for Condition with dsopCONTAIN op 
		// b $before, a $after, v $searchFor
		if( $operation == dsopEQUAL ) {
			// %bva%   		eg '%searchStr":"test.gif,!:sStrEnd"%'
			// ',!' is added to the downloaded file name (ex. "test.gif,!")
			$fileSearchFor = $before. $searchFor.',!' .$after;
		} else if( $operation == dsopSTART ) {
			// %bv%a% 		eg '%searchStr":"test.gif%:sStrEnd"%'
			$fileSearchFor = $before.$searchFor;
			$likeWrapper = array( 'after' => $after );
		} else /* dsopCONTAIN */ {
			// %b%v%a%		eg '%searchStr":"%test.gif%:sStrEnd"%'
			$fileSearchFor = $searchFor;
			$likeWrapper = array( 'before' => $before, 'after' => $after );
		}
						
		return new DsCondition(
			array(
				new DsOperand( dsotCONDITION, DataCondition::_And( array( 
					$startCondition,				
					DataCondition::FieldIs( $this->field, dsopCONTAIN, $fileSearchFor, $caseInsensitive, 0, $likeWrapper )	
				))),
				new DsOperand( dsotCONDITION, DataCondition::_And( array( 
					DataCondition::_Not( $startCondition ), 
					DataCondition::FieldIs( $this->field, $operation, $searchFor, $caseInsensitive )
				)))
			),
			dsopOR,
			$caseInsensitive
		);		
	}	
	/**
	 * return parsed  file info in unified format
	 * @return Array of arrays [
	 * 		"usrName" => user-provided filename
	 * 		"name" => file path if saved in filesystem
	 * 		"type" => (optional) file type in HTTP-ready format.
	 * 		"size" => (optional)size in bytes
	 * 		"thumbnail" => (optional)thumbnail file path
	 * 		"thumbnail_size" => (optional)thumbnail size
	 * 		"thumbnail_type" => (optional)thumbnail file type in HTTP-ready format
	 * ]
	 */
	protected function getFileData( $value ) {
		return RunnerFileHandler::getFileArray( $value, $this->field, $this->pageObject->pSet );
	}



}
?>