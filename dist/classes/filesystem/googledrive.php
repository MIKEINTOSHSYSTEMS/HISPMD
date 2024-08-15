<?php 


class GoogleDriveFileSystem extends OAuthFileSystem {
	/**
	 * @var Boolean - when true, make all uploaded files public/unlisted (can be seen by everyone with the link )
	 * Private otherwise
	 */
	public $publicUnlisted = false;
	public $folder = false;

	/**
	 * cache getFileInfo results
	 */
	protected $_fileInfoCache = array();

	public function __construct( $params ) {
        $this->sessionKey = "googleDriveOauthTokenStatus";
        $this->privateStorageKey = "googledrive";
		$this->folder = $params["folder"];
	}

	protected function _getConnection() {
		return getGoogleDriveConnection();
	}


	public function saveUploadedFile( $uploadFile, $userFilename ) {
		$fileContents = RunnerFileSystem::uploadedFileContent( $uploadFile );
		return $this->saveData( $fileContents, $userFilename );
	}

	/**
	 * @param String path - should be ignored
	 */
	public function saveData( $fileContents, $userFilename ) {

		//	https://developers.google.com/drive/api/v3/reference/files/create
		//	https://developers.google.com/drive/api/v3/manage-uploads

		$rest = $this->getConnection();
		$request = new HttpRequest( "https://www.googleapis.com/upload/drive/v3/files", "POST" );
		$request->urlParams["uploadType"] = "resumable";
		$request->postPayload["name"] = $userFilename;
		if( $this->folder ) {
			$request->postPayload["parents"] = array( $this->folder );
		}
		$request->headers["Content-Type"] = "application/json; charset=UTF-8";
		$rest->requestAddAuth( $request );
		//	TODO auth error handling?
		$result = $request->run();
		if( !$result ) {
			//	TODO error handling
		}
		$headers = HttpRequest::parseHeaders( $result );
		$url = $headers["location"];
		if( $url ) {
			$uploadRequest = new HttpRequest( $url, "PUT" );
			$uploadRequest->headers["Range"] = "*/".strlen( $fileContents );
			$uploadRequest->headers["Content-Type"] = "application/octet-stream";
			$uploadRequest->body = $fileContents;
			$uploadResult = $uploadRequest->run();
			if( $uploadResult && !$uploadResult["error"] ) {
				$uploadData = runner_json_decode( $uploadResult["content"] );
				$this->setFilePermissions( $uploadData["id"] );
				return $uploadData["id"];
			}
		}
		return null;

	}

	/**
	 * Make file public
	 */
	protected function setFilePermissions( $fileId ) {
		$request = new HttpRequest( "https://www.googleapis.com/drive/v3/files/" . $fileId . "/permissions", "POST" );
		$request->postPayload["role"] = "reader";
		$request->postPayload["type"] = "anyone";
		$request->headers["Content-Type"] = "application/json; charset=UTF-8";
		$rest = $this->getConnection();
		$rest->requestAddAuth( $request );
		$request->run();
	}

	static protected function normalizePath( $path ) {
		if( !$path ) {
			return '/';
		}
		// path must start and end with /
		$lastSymbol = substr( $path, strlen( $path ) - 1, 1 );
		if( $lastSymbol != '/' ) {
			$path .= '/';
		}
		if( substr( $path, 0, 1 ) != '/' ) {
			$path = '/' . $path;
		}
		return $path;
	}

	public function redirectToFile( $fileId, $thumbnail ) {
		$fInfo = $this->getFileInfo( $fileId );
		if( !$fInfo ) {
			return false;
		}
		$url = $fInfo["raw"]["webContentLink"];
		if( $thumbnail && $fInfo["raw"]["thumbnailLink"] ) {
			$url = $fInfo["raw"]["thumbnailLink"];
		}
		header("Location:" . $url );
		exit();
	}

	/**
	 * Return unified file information
	 * Null if the file doesn't exist
	 * @return Array (
	 * 	 "fullPath" => $fileId. If the passed $fileId was incomplete, fix it and return in fullPath
	 * 	 "size" => file size
	 * 	 "returnContent" => boolean. When true the filesystem can return file contents. Otherwise only the link
	 * 
	 * 	 "raw" => file data returned by google drive
	 * )
	 */
	public function getFileInfo( $fileId ) {
		if( $this->_fileInfoCache[ $fileId ] ) {
			return $this->_fileInfoCache[ $fileId ];
		}
		$fields = array();
		$fields[] = "id";
		$fields[] = "name";
		$fields[] = "mimeType";
		$fields[] = "webContentLink";
		$fields[] = "iconLink";
		$fields[] = "thumbnailLink";
		$fields[] = "permissions";
		$fields[] = "size";

        $request = $this->getAuthorizedRequest( "https://www.googleapis.com/drive/v3/files/" . $fileId, "GET" );

		$request->urlParams["fields"] = implode(",", $fields );

        $result = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return null;
		}
		$data = my_json_decode( $result[ "content" ] );
		
		if( !$data[ "id" ] ) {
			//	service returned error
			$this->setLastError( $result[ "content" ] );
			return null;
		}
		$ret = array(
			"fullPath" => $data[ "id" ],
			"size" => $data[ "size" ],
			"raw" => $data,
			"returnContent" => false
		);
		$this->_fileInfoCache[ $fileId ] = $ret;
		return $ret;
	}

	/**
	 * Delete a file
	 */
	public function delete( $fileId ) {
		//	https://developers.google.com/drive/api/v3/reference/files/delete
		$request = new HttpRequest( "https://www.googleapis.com/drive/v3/files/" . $fileId, "DELETE" );
		$rest = $this->getConnection();
		$rest->requestAddAuth( $request );
		//	TODO auth error handling?
		$request->run();
	}

	/**
	 * @return Array {
	 * 	fileId: string,
	 *  uploadParams: any
	 * }
	 */
	public function initUpload( $userFilename ) {
		//	https://developers.google.com/drive/api/v3/reference/files/create
		//	https://developers.google.com/drive/api/v3/manage-uploads
		$rest = $this->getConnection();

		$fileInfo = $this->createFile( $userFilename );
		$fileId = $fileInfo["id"];

		$this->setFilePermissions( $fileId );

		//	initiate upload using the update command
		$request = new HttpRequest( "https://www.googleapis.com/upload/drive/v3/files/" . $fileId, "PATCH" );
		$request->urlParams["uploadType"] = "resumable";
		$request->headers["Origin"] = projectOrigin();
		$rest = $this->getConnection();
		$rest->requestAddAuth( $request );

		$result = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return false;
		}
		$headers = HttpRequest::parseHeaders( $result );
		if( !$headers["location"] ) {
			$this->setLastError( "Error initaiting upload.\r\n" . runner_json_encode( $result ) );
			return false;
		}
		return array( 
			'uploadParams' => array( "url" => $headers["location"] ),
			'fileId' => $fileId 
		);
	}

	/**
	 * Create empty file and return its data
	 * https://developers.google.com/drive/api/v3/reference/files#resource
	 */
	protected function createFile( $filename ) {
		$rest = $this->getConnection();

		//	create an empty file first
		$request = new HttpRequest( "https://www.googleapis.com/drive/v3/files", "POST" );
		$request->postPayload["name"] = $filename;
		if( $this->folder ) {
			$request->postPayload["parents"] = array( $this->folder );
		}
		$request->headers["Content-Type"] = "application/json; charset=UTF-8";
		$rest->requestAddAuth( $request );
		//	TODO auth error handling?
		$result = $request->run();
		if( !$result ) {
			return false;
		}

		$fileInfo = runner_json_decode( $result["content"] );
		return $fileInfo;
	}

	public function directUpload() {
		return true;
	}


}
?>