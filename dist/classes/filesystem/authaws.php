<?php

define( 'AWS4_SIGN_ALGO', "AWS4-HMAC-SHA256" );
define( 'AWS4_REQ_POSTFIX', "aws4_request" );

/**
 * https://docs.aws.amazon.com/AmazonS3/latest/API/sig-v4-header-based-auth.html
 */
class AuthorizationAWS4 {
	protected $httpMethod;
	protected $headersMap;
	protected $reqTimestamp;
	protected $bucket;
	protected $accessKey;
	protected $secretKey;
	protected $region;
	protected $awsService;
	protected $queryParameterMap;
	protected $resource;
	protected $payload;

	private $forUrl;

	public function __construct( $params = array() ) {
        $this->httpMethod = $params["httpMethod"];
        $this->headersMap = $params["headersMap"];
        $this->reqTimestamp = $params["reqTimestamp"];
        $this->bucket = $params["bucket"];
        $this->accessKey = $params["accessKey"];
        $this->secretKey = $params["secretKey"];
        $this->region = $params["region"];
        $this->awsService = $params["awsService"];
        $this->queryParameterMap = $params["queryParameterMap"];
        $this->resource = $params["resource"];
        $this->payload = $params["payload"];

		$this->forUrl = false;
	}

	public function setQueryParameterMap( $queryParameterMap ) {
		$this->queryParameterMap = $queryParameterMap;
	}

	public function setForUrl( $enabled ) {
		$this->forUrl = $enabled;
	}

	public static function pathEncode( $path ) {
		$encParts = array();
		foreach( explode( "/", $path ) as $part ) {
			$encParts[] = rawurlencode( $part );
		}
		return implode( "/", $encParts );
	}

	protected function getCanonicalURI() {
		return AuthorizationAWS4::pathEncode( "/".$this->resource );
	}

	protected function getCanonicalQueryString() {
		$queryParameterList = array_keys( $this->queryParameterMap );
		sort( $queryParameterList );
		$result = array();
		foreach( $queryParameterList as $key ) {
			$value = $this->queryParameterMap[ $key ];
			$elem =  rawurlencode( $key ) . "=" . rawurlencode( $value );
			$result[] = $elem;
		}

		return implode( "&", $result );
	}

	protected function getCanonicalHeaders() {
		$headersList = array_keys( $this->headersMap );
		sort( $headersList );
		$canonicalHeaders = array();
		foreach( $headersList as $key ) {
			$value = $this->headersMap[ $key ];
			$canonicalHeaders[] = strtolower( $key ) . ":" . trim( $value );
		}

		return implode( "\n", $canonicalHeaders ) . "\n";
	}

	public function getSignedHeaders() {
		$headersList = array();
		foreach( $this->headersMap as $key => $value ) {
			$headersList[] = strtolower( $key );
		}
		sort( $headersList );

		return implode( ";", $headersList );
	}

	protected function getHashedPayload() {
		if( $this->forUrl ) {
			return "UNSIGNED-PAYLOAD";
		}

		return hash_sha256( $this->payload );
	}

	protected function getCanonicalRequest() {
		$components = array( $this->httpMethod, 
			$this->getCanonicalURI(), 
			$this->getCanonicalQueryString(),
			$this->getCanonicalHeaders(),
			$this->getSignedHeaders(),
			$this->getHashedPayload() );

		return implode( "\n", $components );
	}

	protected function getDate( $intTimestamp ) {
		return substr( iso8601date_timestamp( $intTimestamp ), 0, 8 );
//		return gmdate( "Ymd", $intTimestamp ); 
	}

	protected function getHashedCanonicalRequest() {
		return hash_sha256( $this->getCanonicalRequest() );
	}

	protected function getScope() {
		$components = array( $this->getDate( $this->reqTimestamp ),
			$this->region,
			$this->awsService,
			AWS4_REQ_POSTFIX );

		return implode( "/", $components );
	}

	protected function getStringToSign() {
		$components = array( AWS4_SIGN_ALGO, 
			iso8601date_timestamp( $this->reqTimestamp ),
			$this->getScope(),
			$this->getHashedCanonicalRequest() );

		return implode( "\n", $components );	
	}

	protected function getSigningKey() {
		$dateKey = hash_hmac_sha256( $this->getDate( $this->reqTimestamp ), "AWS4".$this->secretKey, true );
		$dateRegionKey = hash_hmac_sha256( $this->region, $dateKey, true );
		$dateRegionServiceKey = hash_hmac_sha256( $this->awsService, $dateRegionKey, true );
		$signingKey = hash_hmac_sha256( AWS4_REQ_POSTFIX, $dateRegionServiceKey, true );

		return $signingKey;
	}

	public function signString( $str ) {
		return hash_hmac_sha256( $str, $this->getSigningKey(), false );
	}


	public function getSignature() {
		return $this->signString( $this->getStringToSign() );
	}

	public function getCredential() {
		return $this->accessKey . "/" . $this->getScope();
	}
}

?>