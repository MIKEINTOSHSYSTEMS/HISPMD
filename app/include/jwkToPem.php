<?php
define("ASN1_INTEGER_TAG", 2);
define("ASN1_SEQUENCE_TAG", 48);
define("ASN1_BITSTRING_TAG", 3);

function _convertToPem( $jwk ) {
	if( !isset( $jwk['n'] ) || !isset( $jwk['e'] ) ) {
		return false;
	}
	
	$n = base64_decode( strtr( $jwk['n'], '-_', '+/') );
	$e = base64_decode( strtr( $jwk['e'], '-_', '+/') );
	
	if ( extension_loaded('gmp') ) {		
		$modulus = getIntegerEncodedValueGmp( gmp_init( current( unpack('H*', $n ) ), 16 ) );
		$publicExponent = getIntegerEncodedValueGmp( gmp_init( current( unpack('H*', $e ) ), 16 ) );
	} else if ( extension_loaded('bcmath') ) {
		$modulus = getIntegerEncodedValueBC( $n );
		$publicExponent = getIntegerEncodedValueBC( $e );
	}

	if( !$modulus || !$publicExponent ) {
		echo "Missing required library.\nInstall 'gmp' or 'bcmath' PHP extension.";
		exit();
	}
	
	$encodedModulus = pack(
		'Ca*a*', 
		ASN1_INTEGER_TAG, 
		getEncodedLength( $modulus ), 
		$modulus
	);
	
	$encodedPublicExponent = pack(
		'Ca*a*', 
		ASN1_INTEGER_TAG, 
		getEncodedLength( $publicExponent ), 
		$publicExponent
	);

	// sequence of modulus and 
	$RSAPublicKeyEncoded = pack(
		'Ca*a*a*',
		ASN1_SEQUENCE_TAG,
		getEncodedLength( $encodedModulus . $encodedPublicExponent ),
		$encodedModulus,
		$encodedPublicExponent
	);	
	
    $numberOfUnusedBit = 0;
    $RSAPublicKeyBitString = chr( $numberOfUnusedBit ).$RSAPublicKeyEncoded;

    $RSAPublicKeyBitStringEncoded = chr( ASN1_BITSTRING_TAG ) 
		. getEncodedLength( $RSAPublicKeyBitString ) 
		. $RSAPublicKeyBitString;

	// AlgorithmIdentifier RSA encryption oid 1.2.840.113549.1.1.1	
	$OIDSequenceEncoded = pack('H*', '300d06092a864886f70d0101010500');
	
	// sequence of oidseq and rsabit string
	$RSAPublicKeyBinaryData = pack(
		'Ca*a*',
		ASN1_SEQUENCE_TAG,
		getEncodedLength( $OIDSequenceEncoded . $RSAPublicKeyBitStringEncoded ),
		$OIDSequenceEncoded.$RSAPublicKeyBitStringEncoded
	);
	
	$result = '-----BEGIN PUBLIC KEY-----'.PHP_EOL;
	$result .= chunk_split( base64_encode( $RSAPublicKeyBinaryData ), 64, PHP_EOL);		
	$result .= '-----END PUBLIC KEY-----'.PHP_EOL;
	
	return $result;
}


function getEncodedLength( $content ) {
	$length = strlen( $content );
	if( $length <= 127 ) {
		return chr( $length );
	}

	$contentLength = $length;
	$numberOfLengthOctets = 1;
	do {
		$numberOfLengthOctets++;
		$contentLength = $contentLength >> 8;
	} while( $contentLength > 0 );

	$contentLength = $length;
	// first octet encodes the number of octets in the contents octets 
	$lengthOctets = chr( 0x80 | ( $numberOfLengthOctets - 1 ) );
	for( $shiftLength = 8 * ($numberOfLengthOctets - 2); $shiftLength >= 0; $shiftLength -= 8 ) {
		$lengthOctets .= chr( $contentLength >> $shiftLength );
	}

	return $lengthOctets;	
}

function getIntegerEncodedValueBC( $number ) {
	$value = '0';

	if( !( empty($number) && $number !== '0' ) ) {
		$len = (strlen($number) + 3) & 0xFFFFFFFC;

		$number = str_pad($number, $len, chr(0), STR_PAD_LEFT);

		for ($i = 0; $i < $len; $i+= 4) {
			$value = bcmul($value, '4294967296', 0); // 4294967296 == 2**32
			$value = bcadd($value, 0x1000000 * ord($number[$i]) + ((ord($number[$i + 1]) << 16) | (ord($number[$i + 2]) << 8) | ord($number[$i + 3])), 0);
		}
	}

	$comparison = bccomp($value, '0', 0);
	if ( $comparison == 0 ) {
		return '';
	}
	
	$_value = '';
	$current = $value;
	while( bccomp($current, '0', 0) > 0 ) {
		$temp = bcmod($current, '16777216');
		$_value = chr($temp >> 16) . chr($temp >> 8) . chr($temp) . $_value;
		$current = bcdiv($current, '16777216', 0);
	}
	
	$bytes = ltrim( $_value, chr(0) );

	if( !strlen($bytes) ) {
		$bytes = chr(0);
	}

	if( (ord($bytes[0]) & 0x80) ) {
		$bytes = chr(0) . $bytes;
	}

	return $comparison < 0 ? ~$bytes : $bytes;
}

function getIntegerEncodedValueGmp( $number ) {
	$value = gmp_init( (string)$number, 10 );
	$negative = gmp_cmp( $value, gmp_init(0) ) < 0;
	if( $negative ) {
		 $value = gmp_abs( $value );
		 $limit = 0x80;
	} else {
		 $limit = 0x7f;
	}

	$mod = 0xff+1;
	$values = array();
	while( gmp_cmp( $value, gmp_init( $limit, 10 ) ) > 0 ) {
		$values[] = gmp_intval( gmp_mod( $value, $mod ) );
		$value = gmp_div( $value, gmp_pow(2, 8) );
	}

	$values[] = gmp_intval( gmp_mod( $value, $mod ) );
	$numValues = count( $values );

	if( $negative ) {
		for( $i = 0; $i < $numValues; $i++ ) {
			$values[$i] = 0xff - $values[$i];
		}
		
		for( $i = 0; $i < $numValues; $i++ ) {
			$values[$i] += 1;
			if( $values[$i] <= 0xff ) {
				break;
			}
			assert($i != $numValues - 1);
			$values[$i] = 0;
		}
		if( $values[$numValues - 1] == 0x7f ) {
			$values[] = 0xff;
		}
	}
	
	$values = array_reverse( $values );
	$r = "";
	foreach( $values as $v ) {
		$r.= chr( $v );
	}

	return $r;	
}
?>