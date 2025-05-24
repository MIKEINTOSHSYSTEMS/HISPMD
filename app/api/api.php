<?php

class API {
	public static function sendError( $text, $responseCode = 500 ) {
		API::sendResponse( false, array(
			"error" => $text
		), $responseCode );
	}

	public static function sendResponse( $success, $data, $responseCode = 0 ) {
		if( !$responseCode ) {
			$responseCode = $success ? 200 : 500;
		}
		http_response_code( $responseCode );
		$data["success"] = $success;
		echo my_json_encode( $data );
		exit();
	}

	//	read one record from the result
	public static function readRecord( $result, $pSet ) {
		$data = $result->fetchAssoc();
		if( !$data ) {
			return null;
		}
		foreach( array_keys( $data ) as $f ) {
			if( IsBinaryType( $pSet->getFieldType( $f ) ) && GetGlobalData("restReturnEncodedBinary") ) {
				$data[ $f ] = base64_encode( $data[ $f ] );
			}
		}
		return $data;
	}

	//	read result into array of records
	public static function readResult( $result, $pSet, $recordLimit = 0 ) {
		$ret = array();
		while( ( !$recordLimit || count( $ret ) < $recordLimit  ) && ( $data = API::readRecord( $result, $pSet ) ) ) {
			$ret[] = $data;
		}
		return $ret;
	}

	public static function login() {
		if( !Security::hasLogin() ) {
			return true;
		}
		$authType = GetGlobalData("restAuth");
		if( $authType == REST_BASIC ) {
			//	Authorization: Basic <base64_encode(username:password)>
			$username = "";
			$password = "";
						$username = $_SERVER["PHP_AUTH_USER"];
			$password = $_SERVER["PHP_AUTH_PW"];
			if( !$username ) {
				$loginHeader = getHttpHeader('Authorization') . "";
				if( substr( $loginHeader, 0, 6 ) !== 'Basic ' ) {
					header( 'WWW-Authenticate: Basic realm="REST API"');
					return false;
				}
				$token = base64_decode( substr( $loginHeader, 6) );
				$colonPos = strpos( $token, ':' );
				if( $colonPos === false ) {
					return false;
				}
				$username = substr( $token, 0, $colonPos );
				$password = substr( $token, $colonPos + 1 );
			}
			return Security::login( $username, $password, false, true );
		}

		if ( $authType == REST_APIKEY ) {
			$APIkey = "";
			if( isset( $_SERVER["HTTP_X_AUTH_TOKEN"] ) )
				$APIkey = $_SERVER["HTTP_X_AUTH_TOKEN"];
			else
				$APIkey = postvalue("apikey");

			if( !strlen( $APIkey ) )
				return false;

			if( Security::hardcodedLogin() ) {
				if( GetGlobalData("APIkey", "") == $APIkey ) {
					Security::createHardcodedSession();
					return true;
				}
				return false;
			}

			$dataSource = getLoginDataSource();

			$dc = new DsCommand();
			$dc->filter = DataCondition::FieldEquals( GetGlobalData("APIkeyField"), $APIkey );
			$rs = $dataSource->getSingle( $dc );
			if( !$rs )
				return false;

			$loginSet = ProjectSettings::getForLogin();
			$cipherer = RunnerCipherer::getForLogin( $loginSet );
			$userData = $cipherer->DecryptFetchedArray( $rs->fetchAssoc() );

			return Security::login( $userData[ Security::usernameField() ], $userData[ Security::passwordField() ], true, true );
		}

		return false;
	}

	public static function keysFromRequest( $pSet ) {
		$keys = array();
		foreach( $pSet->getTableKeys() as $i => $k ) {
			$keys[ $k ] = postvalue( "editid" . ( $i + 1 ) );
		}
		return $keys;
	}

	public static function valuesFromRequest( $pSet ) {
		$values = array();
		foreach( $pSet->getFieldsList() as $f ) {
			if( postvalue( $f ) || GetUploadedFileName( $f ) ) {
				$values[ $f ] = API::processRequestValue( $f, postvalue( $f ), $pSet );
			}
		}
		
		return $values;
	}

	protected static function processRequestValue( $fieldName, $value, $pSet ) {
		if( IsBinaryType( $pSet->getFieldType( $fieldName ) ) ) {
			if( $value && GetGlobalData("restAcceptEncodedBinary") ) {
				$decodedValue = base64_decode_binary( $value );

				// invalid base64 value passed
				if( !$decodedValue ) {
					API::sendError( "Unable to decode " .  $fieldName . " value from base64" );
				}

				return $decodedValue;
			}

			// data passed as file
			if( GetUploadedFileName( $fieldName ) ) {
				return GetUploadedFileContents( $fieldName );
			}
		}

		return $value;
	}
}
?>