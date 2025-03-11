<?php
/**
 * There are two main classes handling file uploads
 * RunnerFileHandler - Image resizing, verifying file type, preparing file metadata to be saved in the database
 * RunnerFileSystem and children - saving and retrieving files from the filesystem, be it local disk, cloud or maybe database?
 */

class RunnerFileHandler {
	public $pSet;
	public $field;
	protected $_datasource;
	protected $_fs;
	protected $options = array();
	/**
	 * form identifer for multi-upload control
	 */
	public $formStamp;

	public function __construct( $field, $pSet, $formStamp = "" ) {
		$this->pSet = $pSet;
		$this->field = $field;
		$this->formStamp = $formStamp;
	}

	/**
	 * @param Array $uploadedFile - standardized uploaded file descriptor
	 * @return Array some other file descriptor
	 */
	protected function acceptUploadedFile( $uploadedFile ) {
		//	create and fill internal file descriptor
		$file = array();

		$errorMessage = "";
		if( $uploadedFile["error"] ) {
			$file["error"] = $this->codeToMessage( $uploadedFile["error"] );			
			return $file;
		}
		if( !$this->validateFile( $uploadedFile["name"], $uploadedFile["size"], $errorMessage ) ) {
			$file["error"] = $errorMessage;
			return $file;
		}
		$file["type"] = RunnerFileHandler::fileType( $uploadedFile );
		$file["size"] = $uploadedFile["size"];

		$file["usrName"] = $this->trimFilename( $uploadedFile["name"] );

		if( isImageType( $file["type"] ) ) {
			//	resize & thumbnail
            $img_size = $this->getImageDimensions( $uploadedFile );
			$img_width = $img_size[0];
			$img_height = $img_size[1];
			global $resizeImagesOnClient;

			if( !$resizeImagesOnClient && $img_width && $img_height && $this->pSet->getResizeOnUpload( $this->field ) ) {
				$resizedFileName = $this->resizeUploadedImage( $uploadedFile, $img_width, $img_height, $this->pSet->getNewImageSize( $this->field ) );
				if( $resizedFileName )
					$file["size"] = filesize( $resizedFileName );
            }
			if( $img_width && $img_height && $this->pSet->getCreateThumbnail( $this->field ) ) {
				$thumbnailFileName = $this->resizeUploadedImage( $uploadedFile, $img_width, $img_height, $this->pSet->getThumbnailSize( $this->field ) );
				if( $thumbnailFileName ) {
					$file["thumbnail_size"] = filesize( $thumbnailFileName );
					$file["thumbnail_type"] = $file["type"];
				}
			}
		}

		//	save the file
		$fs = $this->getFilesystem();
		if( !$resizedFileName ) {
			//	save the original file
			$fileId = $fs->saveUploadedFile( $uploadedFile, $file["usrName"] );
		} else {
			$fileId = $fs->moveFile( $resizedFileName, $file["usrName"] );
			unlink( $resizedFileName );
		}
		if( !$fileId ) {
			$file["error"] = $fs->lastError();
		} else {
			$file["name"] = $fileId;
		}

		//	save thumbnail
		if( $thumbnailFileName ) {
			$fileId = $fs->moveFile( $thumbnailFileName, "th" . $file["usrName"] );
			unlink( $thumbnailFileName );
			if( $fileId ) {
				$file["thumbnail"] = $fileId;
			}
		}

		return $file;
	}

	/**
	 * @return Boolean
	 */
	public function delete( $filename ) {
    	$fileData = $this->getFormData( $filename );
		if( !$fileData ) {
			return false;
		}
		if( !$fileData[ "fromDB" ] ) {
			//	newly uploaded file, delete immediately
			$sessionFile = $fileData["file"];
			$storageProvider = $this->getFilesystem();
			$storageProvider->delete( $sessionFile["name"] );
			if ( $sessionFile["thumbnail"] ) {
				$storageProvider->delete( $sessionFile["thumbnail"] );
			}
			$this->deleteFormData( $filename );
		} else {
			//	previously saved fie. Mark for deletion only.
			//	will be acrually deleted on form save
			$fileData["deleted"] = true;
			$this->setFormData( $filename, $fileData );
		}
		return true;
	}

	/**
	 * @param Array $uploadedFiles - array of standardized uploaded file descriptors
	 * @return nothing Sends result to output
	 */
	public function acceptUpload( $uploadedFiles ) {
        $result = array();
		foreach ($uploadedFiles as $index => $uploadedFile) {
            $file = $this->acceptUploadedFile( $uploadedFile );
			if( !isset( $file["error"] ) ) {
				$fileData = array();
				$fileData["file"] = $file;
				$fileData["deleted"] = false;
				$fileData["fromDB"] = false;
				$this->setFormData( $file['usrName'], $fileData );
			} 				
			$result[] = $this->returnFileDescriptor( $file );

        }
        header('Vary: Accept');
		header('Content-type: application/json');
		echo my_json_encode( $result );
	}

	/**
	 * Build return file descriptor, to be returned right after uploading
	 */
	protected function returnFileDescriptor( $file ) {
		$returnFile = array();
		if( isset( $file["error"] )) {
			$returnFile["error"] = $file["error"];
			return $returnFile;
		}
		$returnFile["isImg"] = true;
		$returnFile["name"] = $file["usrName"];
		$returnFile["type"] = $file["type"];
		$returnFile["size"] = $file["size"];

		$urlParams = array();
		$urlParams["file"] = $file["usrName"];
		$urlParams["table"] = $this->table();
		$urlParams["field"] = $this->field;
		$urlParams["fkey"] = $this->formStamp;
		$fs = $this->getFilesystem();
		$lastModified = time();
		if( $fs->fast() ) {
			$fsInfo = $fs->getFileInfo( $file["name"] );
			if( $fsInfo && $fsInfo["lastModified"] ) {
				$lastModified = $fsInfo["lastModified"];
			}
		}
		$urlParams["hash"] = fileAttrHash( $this->formStamp, $file["size"], $lastModified );
		$returnFile["url"] = GetTableLink( "file", "", prepareUrlQuery( $urlParams ) );

		//	prepare icon/thumbnail
		if( !CheckImageExtension( $file["usrName"] ) ) {
			$urlParams["icon"] = 1;
		} else {
			$urlParams["thumbnail"] = 1;
		}
		$returnFile["thumbnail_url"] = GetTableLink("file", "", prepareUrlQuery( $urlParams ) );

		return $returnFile;

	}

	protected function validateFile( $filename, $fileSize, &$errorMessage ) {
        if ( !$filename ) {
            $errorMessage = "File name was not provided";
            return false;
        }
        
		$acceptedTypes = $this->pSet->getAcceptFileTypes( $this->field );
		if( $acceptedTypes ) {
			$ext = strtoupper( getFileExtension( $filename ) );
			if( array_search( $ext, $acceptedTypes ) === false && array_search( ".".$ext, $acceptedTypes ) === false ) {
				$errorMessage = "File type is not acceptable";
				return false;
			}
		}

		$maxFileSize = $this->pSet->getMaxFileSize( $this->field );
		if ( $maxFileSize && $fileSize > $maxFileSize * 1024 ) {
            $errorMessage = mysprintf("File size exceeds limit of %s kbytes", array( $maxFileSize ) );
            return false;
        }

		$maxTotalFileSize = $this->pSet->getMaxTotalFilesSize( $this->field );
		if ( $maxTotalFileSize ) {
			if( $this->getUploadFilesSize() + $fileSize > $maxTotalFileSize * 1024 ) {
				$errorMessage = mysprintf( "Total files size exceeds limit of %s kbytes", array( $maxTotalFileSize ) );
				return false;
			}
		}

		$maxNumberOfFiles = $this->pSet->getMaxNumberOfFiles( $this->field );
		if ( $maxNumberOfFiles && $this->getUploadFilesCount() >= $maxNumberOfFiles ) {
			$errorMessage = mysprintf( "You can upload no more than %s files", array( $maxNumberOfFiles ) );
			return false;
		}
        return true;
	}

	/**
	 * Return total size of all uploaded files
	 */
	protected function getUploadFilesSize() {
		$sessKey = "mupload_".$this->formStamp;
		if( !$_SESSION[ $sessKey ] ) {
			return 0;
		}
		$result = 0;
		foreach($_SESSION[ $sessKey ] as $fileArray ) {
			if( !$fileArray["deleted"] )
				$result += $fileArray["file"]["size"];
		}
		return $result;
	}

	protected function getUploadFilesCount() {
		$sessKey = "mupload_".$this->formStamp;
		if( !$_SESSION[ $sessKey ] ) {
			return 0;
		}
		$result = 0;
		foreach($_SESSION[ $sessKey ] as $fileArray ) {
			if( !$fileArray["deleted"] )
				++$result;
		}
		return $result;
	}


	protected function getFormData( $filename ) {
		$formInfo =& $_SESSION["mupload_".$this->formStamp];
		if( !$formInfo ) {
			return array();
		}
		return $formInfo[ $filename ];
	}

	protected function setFormData( $filename, $data ) {
		$sessKey = "mupload_".$this->formStamp;
		if( !$_SESSION[ $sessKey ] ) {
			$_SESSION[ $sessKey ] = array();
		}
		$formInfo =& $_SESSION[ $sessKey ];
		if( !$data ) {
			unset( $formInfo[ $filename ] );
		} else {
			$formInfo[ $filename ] = $data;
		}
	}

	protected function deleteFormData( $filename ) {
		$this->setFormData( $filename, null );
	}

	/**
	 * Fetch record from the database
	 * @return Array
	 */
	protected function getTableRecord( $keys ) {
		$dc = new DsCommand();
		if( Security::fieldIsUserpic( $this->table(), $this->field ) && !$this->tableRightsAvailable() ) {
			//	if no view rights on the users table, show the userpic anyway
			$dc->filter = Security::currentUserCondition();
		} else {
			// show file/image if the user has access to either list/view or edit, or print page
			$dc->filter = $this->securityCondition();
			$dc->keys = $keys;
		}

		$dataSource = $this->getDataSource();
		$qResult = $dataSource->getSingle( $dc );
		if( !$qResult ) {
			return null;
		}
		$cipherer = new RunnerCipherer( $this->table(), $this->pSet );
		return $cipherer->DecryptFetchedArray( $qResult->fetchAssoc() );
	}

	/**
	 * return file info in unified format
	 * @return Array [
	 * 		"usrName" => user-provided filename
	 * 		"name" => file path if saved in filesystem
	 * 		"value" => file contents if saved in DB. If thumbnail is requested, thumbnail
	 * 		"type" => file type in HTTP-ready format.
	 * 		"size" => size in bytes
	 * 		"thumbnail" => thumbnail file path
	 * 		"thumbnail_size" => thumbnail size
	 * 		"thumbnail_type" => thumbnail file type in HTTP-ready format
	 * ]
	 */
	protected function getFileInfo( $filename, $thumbnail, $keys ) {
		if( $this->formStamp ) {
			//	newly uploaded file
			$data =  $this->getFormData( $filename );
			if( $data ) {
				return $data["file"];
			} else {
				//	when formstamp used, ignore all other parameters pointing to the file like $keys
				return null;
			}
		}
		if( !$keys ) {
			return null;
		}
		$data =& $this->getTableRecord( $keys );

		//	file in the database
		if( $this->databaseFile() ) {
			$fileData = array();
			$ds = $this->getDataSource();
			$connection = $ds->getConnection();
			if( $thumbnail ) {
				$thumbField = $this->pSet->getStrThumbnail( $this->field );
				if( $thumbField && $data[ $thumbField ] ) {
					$fileData["value"] = $connection->stripSlashesBinary( $data[ $thumbField ] );
				}
			}
			if( !$fileData["value"] )
				$fileData["value"] = $connection->stripSlashesBinary( $data[ $this->field ] );
			if( !$fileData["value"] ) {
				return null;
			}
			$filenameField = $this->pSet->getFilenameField( $this->field );
			if( $filenameField && $data[ $filenameField ] ) {
				$fileData["usrName"] = 	$data[ $filenameField ];
			} else {
				$fileData["usrName"] = "file.bin";
			}

			$fileData["size"] = strlen_bin( $fileData["value"] );
			$fileData["type"] = SupposeImageType( $fileData["value"] );
			return $fileData;
		}

		//	file in filesystem
		$fs = $this->getFilesystem();
		$filesArray = my_json_decode( $data[ $this->field ] );
		if( !is_array( $filesArray ) || count( $filesArray ) == 0 )
		{
			$filesArray = array();
			$dbFilename = $data[ $this->field ];
			$filePath = $this->pSet->getUploadFolder( $this->field ) . $dbFilename;

			$fsFile = $fs->getFileInfo( $filePath );
			if( !$fsFile ) {
				return null;
			}
			$fileDesc = array();
			$fileDesc["usrName"] = runner_basename( $dbFilename );
			$fileDesc["name"] = $fsFile["fullPath"];
			$fileDesc["type"] = mimeTypeByExt( getFileExtension( $dbFilename ) );
			$fileDesc["size"] = $fsFile["size"];
			if( $this->pSet->showThumbnail( $this->field ) ) {
				$thumbPath = $this->pSet->getUploadFolder( $this->field ) . $this->pSet->getStrThumbnail( $this->field ) . $dbFilename;
				$fsThumb = $fs->getFileInfo( $thumbPath );
				if( $fsThumb ) {
					$fileDesc["thumbnail"] = $fsThumb["fullPath"];
					$fileDesc["thumbnail_size"] = $fsThumb["size"];
					$fileDesc["thumbnail_type"] = $fileDesc["type"];
				}
			}
			$filesArray[] = $fileDesc;
		}
		foreach( $filesArray as $uploadedFile ) {
			if( $uploadedFile["usrName"] == $filename ) {
				return $uploadedFile;
			}
		}
		return null;
	}


	/**
	 * Sends the file to the output
	 * returns nothing
	 * @param String $filename
	 * @param Boolean $thumb - when thumbnail is requested
	 * @param Boolean $icon - show icon instead of a file.
	 * @param Array $keys - key field values to find the record in the database.
	 */
	public function showFile( $filename, $thumbnail, $icon, $outputAsAttachment, $useHttpRange, $keys ) {
		if($filename == "")
    		return;
		$fileData = $this->getFileInfo( $filename, $thumbnail, $keys );

		if( $fileData && !$this->databaseFile() ) {
			//	read file info from the filesystem
			$fs = $this->getFilesystem();
			$fsFile = $fs->getFileInfo( $fileData["name"] );
			if( !$fsFile && $fs->lastError() ) {
				showError( $fs->lastError() );
				return;
			}
		}
		
		//	non-existing image is requested
		if( !$fileData || !$this->databaseFile() && !$fsFile ) {
			if( $this->imageField() ) {
				$fileData = array();
				$fileData["usrName"] = $filename;
				$fileData["value"] = myfile_get_contents( getabspath( 'images/no_image.gif' ) );
				$fileData["type"] = "image/gif";
				$fileData["size"] = strlen_bin( $fileData["value"] );
			} else {
				return;
			}
		}

		if( $thumbnail && $fileData["thumbnail"] ) {
			$fileData["name"] = $fileData["thumbnail"];
			$fileData["size"] = $fileData["thumbnail_size"];
			$fileData["type"] = $fileData["thumbnail_type"];
		}

		if( $icon ) {
			$fileData["value"] = myfile_get_contents( getabspath( "images/icons/".getIconByFileType( $fileData["type"], $fileData["usrName"] ) ) );
			$fileData["size"] = strlen_bin( $fileData["value"] );
			$fileData["type"] = "image/png";
		}

		if( !$fileData["type"] ) {
			$fileData["type"] = "application/octet-stream";
		}
		
		if( !$fileData["size"] ) {
			if( $fileData["value"] ) {
				$fileData["size"] = strlen_bin( $fileData["value"] );
			} else {
				//	??? 	
				$fileData["size"] = $fsFile["size"];
			}
		}

		if( !$fileData["value"] && $fsFile && !$fsFile["returnContent"] ) {
			add_nocache_headers();
			$result = $fs->redirectToFile( $fileData["name"], $thumbnail );
			if( $result === false ) {
				showError( $fs->lastError() );
			}
			exit();
		}

		$eTag = RunnerFileHandler::calculateETag( $fileData, $fsFile );
		if( $eTag ) {
			header('ETag:' . $eTag );
			if( $_SERVER['HTTP_IF_NONE_MATCH'] === $eTag ) {
				http_response_code( 304 );
				exit();
			}
		}
		if( $useHttpRange && $_SERVER['HTTP_RANGE'] ) {
			$this->showPartialFile( $fileData, $outputAsAttachment );
		} else {
			header('Accept-Ranges: none');
			header("Cache-Control: private, max-age=604800, must-revalidate");
			header("Content-Type: ". $fileData["type"] );
			header('Access-Control-Allow-Methods: HEAD, GET, POST');
			if( $outputAsAttachment )
				header("Content-Disposition: attachment;Filename=\"". $fileData["usrName"] . "\"");
			sendContentLength( $fileData["size"] );
			if($_SERVER['REQUEST_METHOD'] == 'HEAD')
				exit();
			if( $fileData["value"] )
				echoBinary( $fileData["value"] );
			else {
				$fs->printPartial( $fileData["name"] );
			}
		}
	}

	protected function showPartialFile( $fileData, $outputAsAttachment ) {
		$httpRange = $_SERVER['HTTP_RANGE'];
		$size_unit = "";
		$range_orig = "";
		if(preg_match('/^bytes=((\d*-\d*,? ?)+)$/', $httpRange) )
		{
			$rangeParts = explode('=', $httpRange);
			$size_unit = $rangeParts[0];
			$range_orig = $rangeParts[1];
		}
		if ($size_unit == 'bytes')
		{
			//multiple ranges could be specified at the same time, but we accept only the first range
			if(strpos($range_orig, ',') !== false)
			{
				$rangeParts = explode(',', $range_orig);
				$range = $rangeParts[0];
				$extra_ranges = $rangeParts[1];
			}else
				$range = $range_orig;
		}
		else {
			$range = '-';
		}
		//figure out download piece from range (if set)
		$rangeParts = explode('-', $range);
		$seek_start = $rangeParts[0];
		$seek_end = $rangeParts[1];

		//set start and end based on range (if set), else set defaults
		//also check for invalid ranges.
		$seek_end = (strlen($seek_end) == 0) ? ($fileData["size"] - 1) : min(abs(intval($seek_end)),($fileData["size"] - 1));
		$seek_start = (strlen($seek_start) == 0 || $seek_end < abs(intval($seek_start))) ? 0 : max(abs(intval($seek_start)),0);

		//	print headers
		header('HTTP/1.1 206 Partial Content');
		header('Accept-Ranges: bytes');
		header('Content-Range: bytes '.$seek_start.'-'.$seek_end.'/'.$fileData["size"]);

		if( $outputAsAttachment ) {
			header("Content-Disposition: attachment;Filename=\"".$fileData["usrName"]."\"");
		}
		header( "Content-Length: ". ($seek_end - $seek_start + 1) );

		header("Cache-Control: cache, must-revalidate");
		header("Pragma: public");
		header("Content-Type: ".$fileData["type"] );
		if($_SERVER['REQUEST_METHOD'] == 'HEAD') {
			exit();
		}
		if( $fileData["value"] ) {
			echoBinaryPartial( $fileData["value"], $seek_start, $seek_end );
		} else {
			$fs = $this->getFilesystem();
			$fs->printPartial( $fileData["name"], $seek_start, $seek_end );
		}
	}

	protected function table() {
		return $this->pSet->table();
	}

	protected function pageType() {
		return $this->pSet->pageType();
	}

	/**
	 * Tells whether the file is saved in the database, not in filesystem
	 * @return Boolean
	 */
	protected function databaseFile() {
		$viewFormat = $this->pSet->getViewFormat( $this->field );
		return $viewFormat == FORMAT_DATABASE_IMAGE 
			|| $viewFormat == FORMAT_DATABASE_FILE
			|| $viewFormat == FORMAT_DATABASE_AUDIO
			|| $viewFormat == FORMAT_DATABASE_VIDEO;
	}

	/**
	 * @return Boolean - when View as type is Image
	 */
	protected function imageField() {
		$viewFormat = $this->pSet->getViewFormat( $this->field );
		return $viewFormat == FORMAT_DATABASE_IMAGE || $viewFormat == FORMAT_FILE_IMAGE;
	}

	protected function getDataSource() {
		if( !$this->_datasource ) {
			$this->_datasource = getDataSource( $this->table(), $this->pSet );
		}
		return $this->_datasource;
	}
	protected function getFilesystem() {
		if( !$this->_fs ) {
			$this->_fs = getStorageProvider( $this->pSet, $this->field );
		}
		return $this->_fs;
	}

	public static function fileType( $uploadedFile ) {
		if( $uploadedFile ["type"] ) {
			return $uploadedFile ["type"];
		}
		return mimeTypeByExt( getFileExtension( $uploadedFile["name"] ) );
	}

	/**
	 * Return unique user-friendly file name
	 */
	protected function trimFilename( $name ) {
		while( $this->getFormData( $name ) ) {
            $name = upcount_name( $name );
        }
		return $name;
	}

	/**
	 * save the image and return the full path to the new image
	 * null when there is no new file
	 */
	protected function resizeUploadedImage( $uploadedFile, $img_width, $img_height, $size ) {

		$scale = min(
			$size / $img_width,
			$size / $img_height
		);
		if ($scale >= 1) {
			return null;
		}
		$new_width = $img_width * $scale;
		$new_height = $img_height * $scale;
		$tempDir = $this->tempFileDir();
		$options = array();
		$newFilename = DiskFileSystem::uniqueFilename( "resize", $tempDir );

		$newPath = $tempDir.$newFilename;
			$success = imageCreateThumb(
			$new_width,
			$new_height,
			$img_width,
			$img_height,
			$uploadedFile["tmp_name"],
			$options,
			$newPath,
			$uploadedFile
		);

		if( !$success ){
			return null;
		}
		return $tempDir.$newFilename;
	}

	/**
	 * return String - temporary file directory. Always ends with '/' or '\'
	 */
	protected function tempFileDir() {
		$providerType = $this->pSet->fileStorageProvider( $field );
		if( $providerType == stpDISK) {
			return DiskFileSystem::normalizePath( $this->pSet->getUploadFolder( $this->field ) );
		}
		return getabspath( "templates_c" );
	}


	/**
	 * Returns image dimensions if needed
	 */
	function getImageDimensions( $uploadedFile ) {
		if( $this->pSet->getCreateThumbnail( $this->field ) || $this->pSet->getResizeOnUpload( $this->field ) ) {
			return runner_getimagesize( $uploadedFile["tmp_name"], $uploadedFile );
		}
		return array();
	}

    function codeToMessage($code)
    {
        switch ($code) {
            case 1 /*UPLOAD_ERR_INI_SIZE*/:
                $message = "UPLOAD_ERR_INI_SIZE: The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;
            case 2 /*UPLOAD_ERR_FORM_SIZE*/:
                $message = "UPLOAD_ERR_FORM_SIZE: The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;
            case 3 /*UPLOAD_ERR_PARTIAL*/:
                $message = "UPLOAD_ERR_PARTIAL: The uploaded file was only partially uploaded";
                break;
            case 4 /*UPLOAD_ERR_NO_FILE*/:
                $message = "UPLOAD_ERR_NO_FILE: No file was uploaded";
                break;
            case 6 /*UPLOAD_ERR_NO_TMP_DIR*/:
                $message = "UPLOAD_ERR_NO_TMP_DIR: Missing a temporary folder";
                break;
            case 7 /*UPLOAD_ERR_CANT_WRITE*/:
                $message = "UPLOAD_ERR_CANT_WRITE: Failed to write file to disk";
                break;
            case 8 /*UPLOAD_ERR_EXTENSION*/:
                $message = "UPLOAD_ERR_EXTENSION: File upload stopped by extension";
                break;

            default:
                $message = "Unknown upload error";
                break;
        }
        return $message;
    }
	/**
	 * @return Boolean - when true, browser uploads files directly to the filesystem skipping the PHP code.
	 */
	public function directUpload() {
		$fs = $this->getFilesystem();
		return $fs->directUpload();
	}

	/**
	 * @param Array $fileData - File interface from JS API
	 * https://developer.mozilla.org/en-US/docs/Web/API/File
	 * name: string
	 * size: number
	 * type: string
	 * ...
	 * 
	 * @return Nothing
	 * Sends JSON HTML response:
	 * {
	 * 		uploadParams: any data to be sent to browser,
	 *      file: 
	 * 		error?: string - when url is empty
	 * }
	 * 
	 */
	public function prepareDirectUpload( $fileData ) {

		$result = array();
		$file = array();
		if( !$this->validateFile( $fileData["name"], $fileData["size"], $errorMessage ) ) {
			$file["error"] = $errorMessage;
		} else {
			$fs = $this->getFilesystem();
			$uploadInfo = $fs->initUpload( $fileData["name"] );
			if( $uploadInfo ) {
				$file["usrName"] = $this->trimFilename( $fileData["name"] );
				$file["size"] = $fileData["size"];
				$file["type"] = $fileData["type"];
				$file["name"] = $uploadInfo['fileId'];
				
				$result["uploadParams"] = $uploadInfo['uploadParams'];
			} else {
				$file["error"] = $fs->lastError();
			}

		}
		if( !isset( $file["error"] ) ) {
			$fileData = array();
			$fileData["file"] = $file;
			$fileData["deleted"] = false;
			$fileData["fromDB"] = false;
			$this->setFormData( $file['usrName'], $fileData );
			
			$result["file"] = $this->returnFileDescriptor( $file );
		} else {
			$result["error"] = $file["error"];
		}
		header('Vary: Accept');
		header('Content-type: application/json');
		echo my_json_encode( $result );
		exit();
	}

	public static function calculateETag( &$fileData, &$fsFile ) {
		if( !$fileData["value"] && $fsFile ) {
			if( $fsFile["lastModified"] ) {
				return md5( $fileData["name"] . $fsFile["lastModified"] );
			}
		} else if( $fileData["value"] ) {
			$fileSize = strlen_bin( $fileData["value"] );
			$chunkSize = $fileSize > 2000 ? 2000 : $fileSize;
			return md5( $fileSize . substr( $fileData["value"], 0, $chunkSize ) );
		}
		return "";
	}

	/**
	 * Create session data corresponding to the file field
	 * @param - $filesArray - parsed file field contents
	 * @return Array to be returned to the JS code
	 */
	public function loadFiles( $filesArray ) {
		$userFilesArray = array();
		foreach ( $filesArray as $file ) {
			$sessionArray = array();
			$sessionArray["file"] = $file;
			$sessionArray["fromDB"] = true;
			$sessionArray["deleted"] = false;
			$this->setFormData( $file["usrName"], $sessionArray );
			$userFile = $this->returnFileDescriptor( $file );
			$userFilesArray[] = $userFile;
		}
		return $userFilesArray;
	}

	/**
	 * Parse and normalize field value from the database
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
	public static function getFileArray( $value, $field, $pSet ) {
		if( !$value || $value == "[]") {
			return array();
		}
		$files = runner_json_decode( $value );
		if( $files ) {
			return $files; 
		}
		$path = DiskFileSystem::normalizeRelativePath( $pSet->getUploadFolder( $field ) );
		$fileData = array();
		$fileData["usrName"] = runner_basename( $value );
		$fileData["name"] = $path . $value;
		if( $pSet->showThumbnail( $field ) ) {
			$thumbprefix = $pSet->getStrThumbnail( $field );
			$fileData["thumbnail"] = $path.$thumbprefix.$value;
		}
		return array( $fileData );
	}

	/**
	 * @return DSCondition or null
	 */
	protected function securityCondition() {
		$rights = array( "S", "P", "E" );
		$conditions = array();
		foreach( $rights as $r ) {
			$cond = Security::SelectCondition( $r, $this->pSet );
			//	SelectCondition returns NULL when no restrictions!
			if( !$cond ) {
				return null;
			}
			$conditions[] = $cond;
		}
		return DataCondition::_Or( $conditions );
	}

	/**
	 * return boolean
	 */
	protected function tableRightsAvailable() {
		$rights = array( "S", "P", "E" );
		$mask = GetUserPermissions( $this->table() );
		foreach( $rights as $r ) {
			if( strpos( $mask, $r ) !== false ) {
				return true;
			}
		}
		return false;
	}
	

}

?>