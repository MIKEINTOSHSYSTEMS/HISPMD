<?php
define( "oneDriveApiEndpoint", "https://graph.microsoft.com/v1.0" );
define( "oneDrive4MB_Bytes", 4194304 );
define( "oneDriveStubData", "stub_data" );

class OneDriveFileSystem extends OAuthFileSystem {

	public $path = null;
	public $driveId = null;

	protected $driveEndpoint = null;

	// chunk size multiple of 320kb is required
	// 5242880 = 327680 * 16 ~ 5mb
	private $chunkSize = 5242880;

	/**
	 * cache getFileInfo results
	 */
	protected $_fileInfoCache = array();

	public function __construct( $params ) {
        $this->sessionKey = "onedriveOauthTokenStatus";
        $this->privateStorageKey = "onedrive";
		$this->path = $params["path"];
		$this->driveId = $params["driveId"];

		$this->driveEndpoint = oneDriveApiEndpoint . "/drives/" . $this->driveId;
	}

	protected function _getConnection() {
		return getOneDriveConnection();
	}


	public function saveUploadedFile( $uploadFile, $userFilename ) {
		$fileData = RunnerFileSystem::uploadedFileContent( $uploadFile );
		
		if ( strlen_bin( $fileData ) <= oneDrive4MB_Bytes ) {
			$uploadData = $this->saveShortData( $fileData, $userFilename );
		} else {
			$uploadData = $this->saveLongData( $fileData, $userFilename );
		}

		return $uploadData["id"];
	}

	private function normalizedFilePath( $userFilename ) {
		$resourcePath = OneDriveFileSystem::normalizePath( $this->path ) . $userFilename;
		$encodedPath = OneDriveFileSystem::pathEncode( $resourcePath );
		return "/root:" . $encodedPath . ":";
	}
	
	/**
	 * https://docs.microsoft.com/ru-ru/onedrive/developer/rest-api/api/driveitem_put_content
	 */
	protected function saveShortData( $fileData, $userFilename ) {
		$url = $this->driveEndpoint . $this->normalizedFilePath( $userFilename ) . "/content";
		$request = $this->getAuthorizedRequest( $url, "PUT" );
		// file will be saved at the unique path (increment postfix if file exist)
		$request->urlParams["@microsoft.graph.conflictBehavior"] = "rename";
		$request->body = $fileData;

		$rest = OneDriveFileSystem::getConnection();
		$result = $request->run();
		$uploadData = runner_json_decode( $result["content"] );
		return $uploadData;

	}

	/**
	 * Used with saveLongData
	 */
	private function trySendByteRanges( $url, $data ) {
		$contentLength = strlen_bin( $data );
		$rangesCount = ceil( $contentLength / $this->chunkSize );

		$request = new HttpRequest( $url, "PUT" );
		$result = null;
		for ($part = 0; $part < $rangesCount; $part++ ) {
			$chunkStart = $this->chunkSize * $part;
			// shrink last chunk size if content length is not multiple of chunkSize
			$chunkEnd = $chunkStart + $this->chunkSize;
			$chunkEnd -= $chunkEnd % $contentLength % $this->chunkSize + 1;

			$chunkLength = $chunkEnd - $chunkStart + 1;
			$request->headers["content-length"] = $chunkLength;
			$request->headers["content-range"] = "bytes " . $chunkStart . "-" . $chunkEnd . "/" . $contentLength;
			$request->body = substr( $data, $chunkStart, $chunkLength );
			$result = $request->run();
			$responseCode = $result["responseCode"];
			if( $responseCode != 201 && $responseCode != 202 && $responseCode != 200 ) {
				return null;
			}
		}

		$uploadData = runner_json_decode( $result["content"] );

		return $uploadData;
	}

	public function directUpload() {
        return true;
    }

	/**
	 * Object path is an absolute path or url with item id reference
	 * /root:/text.txt
	 * /items/{$id}
	 */
	protected function initUploadSession( $objectPath, $replaceExisting = false ) {
		$url = $this->driveEndpoint . $objectPath . "/createUploadSession";
		$request = $this->getAuthorizedRequest( $url, "POST" );
		$uploadParams = array();
		$uploadParams["item"] = array();
		if( $replaceExisting ) {
			$uploadParams["item"]["@microsoft.graph.conflictBehavior"] = "replace";
		} else {
			$uploadParams["item"]["@microsoft.graph.conflictBehavior"] = "rename";
		}
		$request->headers["content-type"] = "application/json";
		$request->body = runner_json_encode( $uploadParams );

	
        $result = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return false;
		}
        $data = my_json_decode( $result[ "content" ] );
		if( !$data[ "uploadUrl" ] ) {
			$this->setLastError( $result[ "content" ] );
			return false;
		}
		return $data[ "uploadUrl" ];
	}

	/**
	 * https://docs.microsoft.com/ru-ru/onedrive/developer/rest-api/api/driveitem_createuploadsession
	 * Should be used for files > 4mb
	 */
	protected function saveLongData( $fileData, $userFilename ) {
		$objectPath = $this->normalizedFilePath( $userFilename );
		$uploadUrl = $this->initUploadSession( $objectPath );
		if( !$uploadUrl ) {
			return null;
		}
		
		return $this->trySendByteRanges( $uploadUrl, $fileData );
	}

	/**
	 * Redirects to downloadUrl, provided in driveitem metadata (getFileInfo)
	 * https://docs.microsoft.com/ru-ru/onedrive/developer/rest-api/resources/driveitem
	 * 
	 */
	public function redirectToFile( $fileId, $thumbnail ) {
		$fInfo = $this->getFileInfo( $fileId );
		if( !$fInfo ) {
			return false;
		}
		header("Location:" . $fInfo["raw"]["@microsoft.graph.downloadUrl"]);
		exit();
	}

	/**
	 * Save file with stub data, then replace content from client side
	 */
	public function initUpload( $userFilename ) {
		$uploadData = $this->saveShortData( oneDriveStubData, $userFilename );
		$fileId = $uploadData["id"];
		if( !$fileId ) {
			return null;
		}
		$objectPath = "/items/" . $fileId;
		$uploadUrl = $this->initUploadSession( $objectPath, true );

		return array( 
			'uploadParams' => array( "url" => $uploadUrl ),
			'fileId' => $fileId
		);
	}

	/**
	 * https://docs.microsoft.com/ru-ru/onedrive/developer/rest-api/api/driveitem_get
	 */
	public function getFileInfo( $fileId ) {
		if( $this->_fileInfoCache[ $fileId ] ) {
			return $this->_fileInfoCache[ $fileId ];
		}

		$url = $this->driveEndpoint . "/items/" . $fileId;
        $request = $this->getAuthorizedRequest( $url, "GET" );
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
	 * https://docs.microsoft.com/ru-ru/onedrive/developer/rest-api/api/driveitem_delete
	 */
	public function delete( $fileId ) {
		$url = $this->driveEndpoint . "/items/" . $fileId;
		$request = $this->getAuthorizedRequest( $url, "DELETE" );
		$request->run();
	}



	/**
	 * Oauth functions end
	 */

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

	/**
	 *
	 */
	public static function pathEncode( $path ) {
		$encParts = array();
		foreach( explode( "/", $path ) as $part ) {
			$encParts[] = rawurlencode( $part );
		}
		return implode( "/", $encParts );
	}
}

?>