<?php
// 150 mb
define( 'DROPBOX_UPLOAD_BYTES_LIMIT', 157286400 );
// expiration must be >= 60
define( 'DROPBOX_EXPIRATION_TIME_SECONDS', 60 );

class DropboxFileSystem extends OAuthFileSystem {

    protected $path;
    // 16mb
    protected $chunkSize = 16777216;

    function __construct(&$params) {
        $this->sessionKey = "dropboxOauthTokenStatus";
        $this->privateStorageKey = "dropbox";
		$this->path = $params[ "path" ];
	}

	protected function _getConnection() {
		return getDropboxConnection();
	}

    protected function getEndpoint( $entity ) {
        return "https://" . $entity . ".dropboxapi.com/2/files/";
    }

	public function saveUploadedFile( $uploadFile, $userFilename ) {
        $fileData = RunnerFileSystem::uploadedFileContent( $uploadFile );
        $path = DropboxFileSystem::normalizePath( $this->path ) . $userFilename;

		if( strlen_bin( $fileData ) <= DROPBOX_UPLOAD_BYTES_LIMIT ) {
			$uploadData = $this->saveShortData( $fileData, $path );
		} else {
			$uploadData = $this->saveLongData( $fileData, $path );
		}

		return $uploadData[ "path_lower" ];
	}

    /**
     * Default upload strategy:
     * generate new name on conflict, dont send notifications.
     * 
     * Check CommitInfo struct at api docs
     * @return Array
     */
    protected function getDefaultUploadStrategy() {
        $strategy = array(
            "mode" => "add",
            "autorename" => true,
            "mute" => true,
            "strict_conflict" => true,
        );
        
        return $strategy;
    } 

    /**
     * https://www.dropbox.com/developers/documentation/http/documentation#files-upload
     */
    public function saveShortData( $fileData, $path, $uploadStrategy = array() ) {
        $strategy = $uploadStrategy ? $uploadStrategy : $this->getDefaultUploadStrategy();
        $strategy[ "path" ] = $path;

        $url = $this->getEndpoint( "content" ) . "upload";
        $request = $this->getAuthorizedRequest( $url );
        $request->headers[ "content-type" ] = "application/octet-stream";
        $request->headers[ "dropbox-api-arg" ] = my_json_encode( $strategy );
        $request->body = $fileData;

        $result = $request->run();
        return my_json_decode( $result[ "content" ] );
    }

    /**
     * https://www.dropbox.com/developers/documentation/http/documentation#files-upload_session-start
     */
    protected function initUploadSession() {
        $url = $this->getEndpoint( "content" ) . "upload_session/start";
        $request = $this->getAuthorizedRequest( $url );
        $request->headers[ "content-type" ] = "application/octet-stream";
        $request->headers[ "dropbox-api-arg" ] = my_json_encode( array( "close" => false ) );

        $result = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return false;
		}
        $uploadData = my_json_decode( $result["content"] );
        if( !$uploadData[ "session_id" ] ) {
			$this->setLastError( $result["content"] );
			return false;
		}
		return $uploadData[ "session_id" ];
    }

    /**
     * https://www.dropbox.com/developers/documentation/http/documentation#files-upload_session-append
     */
    protected function trySendByteRanges( $data, $sessionId ) {
        $contentLength = strlen_bin( $data );
		$rangesCount = ceil( $contentLength / $this->chunkSize );

        $url = $this->getEndpoint( "content" ) . "upload_session/append_v2";
        $request = $this->getAuthorizedRequest( $url );
        $request->headers[ "content-type" ] = "application/octet-stream";
		$result = null;
        for( $part = 0; $part < $rangesCount; $part++ ) {
			$chunkStart = $this->chunkSize * $part;
			// shrink last chunk size if content length is not multiple of chunkSize
			$chunkEnd = $chunkStart + $this->chunkSize;
			$chunkEnd -= $chunkEnd % $contentLength % $this->chunkSize + 1;
            
            $chunkLength = $chunkEnd - $chunkStart + 1;

			$request->headers[ "dropbox-api-arg" ] = my_json_encode( 
                array( 
                    "cursor" => array(
                        "session_id" => $sessionId,
                        "offset" => $chunkStart
                    ),
                    "close" => false,
                )
            );

			$request->body = substr( $data, $chunkStart, $chunkLength );

			$result = $request->run();
			$data = my_json_decode( $result["content"] );
			// returns empty response on success
			if( $data ) {
				return false;
			}
		}

        return true;
    }

    /**
     * https://www.dropbox.com/developers/documentation/http/documentation#files-upload_session-start
     * https://www.dropbox.com/developers/documentation/http/documentation#files-upload_session-append
     * https://www.dropbox.com/developers/documentation/http/documentation#files-upload_session-finish
     */
    protected function saveLongData( $fileData, $path, $uploadStrategy = array() ) {
        $sessionId = $this->initUploadSession();
        
        if( !$this->trySendByteRanges( $fileData, $sessionId ) ) {
            return null;
        }

        $url = $this->getEndpoint( "content" ) . "upload_session/finish";
        $request = $this->getAuthorizedRequest( $url );
        $request->headers[ "content-type" ] = "application/octet-stream";

        $strategy = $uploadStrategy ? $uploadStrategy : $this->getDefaultUploadStrategy();
        $strategy[ "path" ] = $path;

        $params = array();
        $params[ "cursor" ] = array();
        $params[ "cursor" ][ "session_id" ] = $sessionId;
        $params[ "cursor" ][ "offset" ] = strlen_bin( $fileData );
        $params[ "commit" ] = $strategy;

        $request->headers[ "dropbox-api-arg" ] = my_json_encode( $params );

        $result = $request->run();
        return my_json_decode( $result[ "content" ] );
    }


    /**
     * https://api.dropboxapi.com/2/files/delete_v2
     */
	public function delete( $path ) {
        $url = $this->getEndpoint( "api" ) . "delete_v2";
        $request = $this->getAuthorizedRequest( $url );
        $request->headers[ "content-type" ] = "application/json";

        $request->body = my_json_encode( array( "path" => $path ) );
        $result = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return false;
		}

        return my_json_decode( $result[ "content" ] );
	}

    /**
     * https://www.dropbox.com/developers/documentation/http/documentation#files-get_temporary_upload_link
     */
    public function initUpload( $userFilename ) {
        $url = $this->getEndpoint( "api" ) . "get_temporary_upload_link";
        $request = $this->getAuthorizedRequest( $url );
        $request->headers[ "content-type" ] = "application/json";

        
        $normalizedPath = DropboxFileSystem::normalizePath( $this->path );
        $uniqueFilename = $this->tryCreateUniqueFile( $userFilename, $normalizedPath );
        if( !$uniqueFilename ) {
            $this->setLastError( "Unable to get unique file name for " . $userFilename . " at " . $normalizedPath );
            return false;
        }

        $strategy = array(
            "mode" => "overwrite",
            "autorename" => false,
            "mute" => true,
            "strict_conflict" => true,
        );

        $strategy[ "path" ] = $normalizedPath . $uniqueFilename;
        $params = array(
            "commit_info" => $strategy,
            "duration" => DROPBOX_EXPIRATION_TIME_SECONDS
        );

        $request->body = my_json_encode( $params );
        $result = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return false;
		}
        $data = my_json_decode( $result[ "content" ] );
		if( !$data[ "link" ] ) {
			$this->setLastError( $result[ "content" ] );
			return false;
		}

        return array( 
			'uploadParams' => array( 
				"url" => $data[ "link" ],
			),
			'fileId' => $strategy[ "path" ] 
        );
    }



    /**
     * https://www.dropbox.com/developers/documentation/http/documentation#files-get_temporary_link
     */
	public function redirectToFile( $path, $thumbnail ) {
        $url = $this->getEndpoint( "api" ) . "get_temporary_link";
        $request = $this->getAuthorizedRequest( $url );
        $request->headers[ "content-type" ] = "application/json";
        $params = array( "path" => $path );

        $request->body = my_json_encode( $params );

        $result = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return false;
		}
        $data =  my_json_decode( $result[ "content" ] );
		if( !$data["link"] ) {
			$this->setLastError( $result[ "content" ] );
			return false;
		}
        header( "Location:" . $data[ "link" ] );
		exit();
	}

	/**
	 *	https://www.dropbox.com/developers/documentation/http/documentation#files-get_metadata
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
	public function getFileInfo( $path ) {
        $url = $this->getEndpoint( "api" ) . "get_metadata";
        $request = $this->getAuthorizedRequest( $url );
        $request->headers[ "content-type" ] = "application/json";

        $params = array(
            "path" => $path,
            "include_media_info" => false,
            "include_deleted" => false,
            "include_has_explicit_shared_members" => false
        );

        $request->body = my_json_encode( $params );

        $result = $request->run();
		if( $result["error"] ) {
			$this->setLastError( $result["errorMessage"] );
			return null;
		}
		$data = my_json_decode( $result[ "content" ] );
		
		if( !$data["name"] ) {
			//	dropbox returned error
			$this->setLastError( $result[ "content" ] );
			return null;
		}
		$ret = array(
			"raw" => $data,
			"returnContent" => false
		);
		$ret["fullPath"] = $data["path_lower"];
		$ret["size"] = $data["size"];
		return $ret;
		
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

    public function directUpload() {
        return true;
    }

    protected function tryCreateFile( $path ) {
        $strategy = array(
            "mode" => "add",
            "autorename" => false,
            "mute" => true,
            "strict_conflict" => true,
        );

        // create file to take $path
        $uploadData = $this->saveShortData( $this->stubFileData, $path, $strategy );
        if( $uploadData["error"] ) {
            return false;
        }
        return true;
    }

	public function createAuthRequest( ) {
		$rest = $this->getConnection();
		return $rest->createUserAuthRequest( array("token_access_type" => "offline" ) );
	}

}

?>