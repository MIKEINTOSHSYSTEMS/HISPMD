<?php

define('gatNONE', 0 );
define('gatSAVED', 1 );
define('gatINVALID', 2 );

/**
 * 	Common methods and variables for OAUTH2.0 based storage providers
 */
class OAuthFileSystem extends RunnerFileSystem {
	protected $sessionKey;
	protected $privateStorageKey;

	/**
	 * Descendant classes must override this function
	 */
	protected function _getConnection() {
		throw 0;
	}

	protected function getConnection() {
		$rest = $this->_getConnection();
		if( !$rest->getOauthToken() ) {
			$this->applyOauthToken();
		}
		return $rest;
	}


	protected function getAuthorizedRequest( $url, $httpMethod = "POST" ) {
        $request = new HttpRequest( $url, $httpMethod );
        $rest = $this->getConnection();
		if( !$rest->requestAddAuth( $request ) ) {
			$this->setLastError( $rest->lastError() );
			storageSet( $this->sessionKey, gatINVALID );
		}
        return $request;
    }

	public function accessTokenOK() {
		return storageGet( $this->sessionKey ) == gatSAVED;
	}

	protected function applyOauthToken() {
		$dropboxAccessToken = loadPrivateData( $this->privateStorageKey );
		if( $dropboxAccessToken ) {
			$rest = $this->_getConnection();
			$rest->setOauthToken( $dropboxAccessToken );
			return true;
		}
		return false;
	}

	public function loadAccessToken() {
		//	token is available and saved, do nothing
		if( $this->accessTokenOK() ) {
			return;
		}

		$rest = $this->_getConnection();
		
		if( storageGet( $this->sessionKey ) != gatINVALID ) {
			//	token obtained, needs to be saved
			if( $rest->getOauthToken() ) {
				$this->saveOauthToken( $rest->getOauthToken() );
				storageSet( $this->sessionKey, gatSAVED );
				return;
			}

			//	no token, try loading it
			if( $this->applyOauthToken() ) {
				storageSet( $this->sessionKey, gatSAVED );
				return;
			}
		}

		//	No token or wrong token 
		//	Redirect to login
		Security::saveRedirectURL();
		//	request refresh_token
		$request = $rest->createUserAuthRequest( array("token_access_type" => "offline" ) );
		$rest->setAuthorizationRequest( $request );
		storageSet( $this->sessionKey, gatNONE );
		header( "Location: " . $request->getUrl() );
		exit();
	}

	public function saveOauthToken( $token ) {
		savePrivateData( $this->privateStorageKey, $token);
		return storageGet( $this->sessionKey ) == gatSAVED;
	}
}

?>