<?php 

require_once( getabspath("classes/filesystem/authaws.php") );

define( 'S3_AWS_SERVICE', 's3' );
define( 'S3_URL_POSTFIX', '.s3.amazonaws.com' );
define( 'S3_EXPIRATION_TIME_SECONDS', 30 );

class S3FileSystem extends RunnerFileSystem {
	
	public $accessKey;
	public $secretKey;
	public $bucket;
	public $region;
	public $path;
	//protected $host;

	protected $_fileInfoCache = array();

	public function __construct( $params ) {
		$this->accessKey = $params['accessKey'];
		$this->secretKey = $params['secretKey'];
		$this->bucket = $params['bucket'];
		$this->region = $params['region'];
		$this->path = $this->prepareFilePath( $params["path"] );
	}


	protected function prepareFilePath( $path ) {
		return S3FileSystem::normalizePath($path);
	}

	protected function host() {
		return $this->bucket . S3_URL_POSTFIX;
	}

	protected function endpoint() {
		return 'https://' . $this->bucket . S3_URL_POSTFIX;
	}

	protected function setRequiredHeaders( $request, $reqTimestamp ) {
		$request->headers["host"] = $this->host();
		$request->headers["x-amz-date"] = iso8601date_timestamp( $reqTimestamp );
		$request->headers["x-amz-content-sha256"] = hash_sha256( $request->body );
		$request->headers["accept"] = "text/plain";
	}

	/**
	 * https://docs.aws.amazon.com/AmazonS3/latest/API/API_PutObject.html
	 * @return string | null
	 */
	protected function saveFile( $data, $resourceKey ) {
		$reqTimestamp = time();
		$url = $this->endpoint()  . "/" . AuthorizationAWS4::pathEncode( $resourceKey );
		$request = new HttpRequest( $url, "PUT" );
		$request->body = $data;

		$this->setRequiredHeaders( $request, $reqTimestamp );
		$request->headers["content-md5"] = base64_encode( md5( $request->body, true ) );
		$request->headers["content-length"] = strlen( $request->body );
		$this->addHeaderAuthentication( $request, $resourceKey, $reqTimestamp );

		$response = $request->run();
		if( $response["responseCode"] == 200 ) {
			return $resourceKey;
		}
		return null;
	}

	public function saveUploadedFile( $uploadFile, $userFilename ) {
		$uniqueFilename = $this->tryCreateUniqueFile( $userFilename, $this->path );
		if( !$uniqueFilename ) {
			$this->setLastError( "Unable to get unique file name for " . $userFilename . " at " . $this->path );
			return null;
		}

		$data = RunnerFileSystem::uploadedFileContent( $uploadFile );
		$resourceKey = $this->path . $userFilename;
		return $this->saveFile( $data, $resourceKey );
	}

	/**
	 * https://docs.aws.amazon.com/AmazonS3/latest/API/API_DeleteObject.html
	 */
	public function delete( $resourceKey ) {
		$reqTimestamp = time();
		$url = $this->endpoint() . "/" . AuthorizationAWS4::pathEncode( $resourceKey );
		$request = new HttpRequest( $url, "DELETE" );

		$this->setRequiredHeaders( $request, $reqTimestamp );
		$this->addHeaderAuthentication( $request, $resourceKey, $reqTimestamp );

		$request->run();
	}

	/**
	 * https://docs.aws.amazon.com/AmazonS3/latest/API/API_GetObject.html
	 */
	public function redirectToFile( $resourceKey, $thumbnail ) {
		$reqTimestamp = time();
		$url = $this->endpoint() . "/" . AuthorizationAWS4::pathEncode( $resourceKey );
		$request = new HttpRequest( $url, "GET" );
		
		$request->headers["host"] = $this->host();
		$request->urlParams["X-Amz-Date"] = iso8601date_timestamp( $reqTimestamp );
		$request->urlParams["X-Amz-Expires"] = S3_EXPIRATION_TIME_SECONDS;
		$this->addUrlAuthentication( $request, $resourceKey, $reqTimestamp );

		$downloadUrl = $this->endpoint() . "/"  . AuthorizationAWS4::pathEncode( $resourceKey ) . "?";
		$parts = array();
		foreach( $request->urlParams as $key => $value ) {
			$parts[] = ( $key . "=" . $value );
		}

		$downloadUrl .= implode( "&", $parts );

		header("Location:" . $downloadUrl);
		exit();
	}



	/**
	 * https://docs.aws.amazon.com/AmazonS3/latest/API/API_HeadObject.html
	 */
	public function getFileInfo( $resourceKey ) {
		if( $this->_fileInfoCache[ $resourceKey ] ) {
			return $this->_fileInfoCache[ $resourceKey ];
		}

		$reqTimestamp = time();
		$url = $this->endpoint() . "/" . AuthorizationAWS4::pathEncode( $resourceKey );
		$request = new HttpRequest( $url, "HEAD" );

		$this->setRequiredHeaders( $request, $reqTimestamp );
		$this->addHeaderAuthentication( $request, $resourceKey, $reqTimestamp );

		$response = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return null;
		}
		if( $response["responseCode"] != 200 ) {
			$this->setLastError( $result["errorMessage"] );
			return null;
		}

		$headers = HttpRequest::parseHeaders( $response );
		$ret = array(
			"fullPath" => $resourceKey,
			"size" => $headers[ "content-length" ],
			"raw" => $response,
			"returnContent" => false
		);

		$this->_fileInfoCache[ $resourceKey ] = $ret;

		return $ret;
	}

	public function moveFile( $file, $userFilename ) {
	}

	/**
	 * @param HttpRequest $request
	 * 
	 * Return object, that can perform operations described here:
	 * https://docs.aws.amazon.com/AmazonS3/latest/API/sig-v4-header-based-auth.html
	 */
	protected function getAuthObject( $request, $resource, $reqTimestamp ) {
		$params = array();
		$params["httpMethod"] = $request->method;
		$params["headersMap"] = $request->headers;
		$params["queryParameterMap"] = $request->urlParams;
		$params["accessKey"] = $this->accessKey;
		$params["secretKey"] = $this->secretKey;
		$params["awsService"] = S3_AWS_SERVICE;
		$params["region"] = $this->region;
		$params["payload"] = $request->body;
		$params["reqTimestamp"] = $reqTimestamp;
		$params["bucket"] = $this->bucket;
		$params["resource"] = $resource;

		return new AuthorizationAWS4( $params );
	}

	/**
	 * @param HttpRequest $request
	 */
	protected function addHeaderAuthentication( $request, $resource, $reqTimestamp ) {
		$auth = $this->getAuthObject( $request, $resource, $reqTimestamp );

		$components = array();
		$components[] = "Credential=".$auth->getCredential();
		$components[] = "SignedHeaders=".$auth->getSignedHeaders();
		$components[] = "Signature=". $auth->getSignature();

		$request->headers["Authorization"] = AWS4_SIGN_ALGO . " " . implode( ",", $components );
	}

	/**
	 * @param HttpRequest $request
	 */
	protected function addUrlAuthentication( $request, $resource, $reqTimestamp ) {
		$auth = $this->getAuthObject( $request, $resource, $reqTimestamp );
		$auth->setForUrl( true );

		// These url params should be signed too
		// Keys are case sensitive(?)
		$request->urlParams["X-Amz-Algorithm"] = AWS4_SIGN_ALGO;
		$request->urlParams["X-Amz-Credential"] = $auth->getCredential();
		$request->urlParams["X-Amz-SignedHeaders"] = $auth->getSignedHeaders();

		$auth->setQueryParameterMap( $request->urlParams );

		$request->urlParams["X-Amz-Signature"] = $auth->getSignature();
	}

	/**
	 * path must not start with '/'
	 * if path is not empty, then it must end with '/'
	 * Correct values
	 * ''
	 * 'aaa/'
	 * 'aaa/bbb/'
	 * 
	 * Incorrect:
	 * '/'
	 * '/aaa/'
	 * 'aaa'
	 */
	public static function normalizePath( $path ) {
		if( !$path ) {
			return '';
		}
		// path must end with /
		$lastSymbol = substr( $path, strlen( $path ) - 1, 1 );
		if( $lastSymbol != '/' ) {
			$path .= '/';
		}
		if( substr( $path, 0, 1 ) == '/' ) {
			$path =  substr( $path, 1 );
		}
		return $path;
	}

	/**
	 * @return Array {
	 * 	fileId: string,
	 *  uploadParams: array
	 * }
	 */
	public function initUpload( $userFilename ) {
		// https://docs.aws.amazon.com/AmazonS3/latest/API/sigv4-UsingHTTPPOST.html

		$uniqueFilename = $this->tryCreateUniqueFile( $userFilename, $this->path );
		if( !$uniqueFilename ) {
			$this->setLastError( "Unable to get unique file name for " . $userFilename . " at " . $this->path );
			return null;
		}
		$resourceKey = $this->path . $uniqueFilename;
		$reqTimestamp = time();
		$auth = $this->getAuthObject( new HttpRequest(""), "", $reqTimestamp );

		$postPolicy = array();
		$postPolicy["expiration"] = iso8601date( $reqTimestamp + S3_EXPIRATION_TIME_SECONDS );
		$postPolicy["conditions"] = array(
			array( "bucket" => $this->bucket ),
			array( "eq", "\$key", $resourceKey ),
			
//			array( "success_action_status" => "201" ),
			
			array( "x-amz-credential" => $auth->getCredential() ),
			array( "x-amz-algorithm" => "AWS4-HMAC-SHA256" ),
			array( "x-amz-date" => iso8601date_timestamp( $reqTimestamp ) )
			
		);
		$policy = base64_encode( runner_json_encode( $postPolicy ) );

		
		$uploadParams = array(
			"key" => $resourceKey,
			"X-Amz-Credential" => $auth->getCredential(),
			"X-Amz-Algorithm" => "AWS4-HMAC-SHA256",
			"X-Amz-Date" => iso8601date_timestamp( $reqTimestamp ),
			"Policy" => $policy,
			"X-Amz-Signature" => $auth->signString( $policy )
//			"success_action_status" => 201
		 );
		
		return array( 
			'uploadParams' => array( 
				"url" => $this->endpoint(),
				"data" => $uploadParams ),
			'fileId' => $resourceKey 
		);
	}
	public function directUpload() {
		return true;
	}

	/**
	 * Check if file exist, path already taken
	 * else create file to take path
	 */
	protected function tryCreateFile( $path ) {
		if( !$this->getFileInfo( $path ) ) {
			$this->saveFile( $this->stubFileData, $path );
			return true;
		}

		return false;
    }


}

?>