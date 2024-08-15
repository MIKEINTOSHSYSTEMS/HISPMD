<?php
class RunnerBase32 {
	public static function encode( $str ) {
		$ret = "";
		$n = 0;
		while( "" !== ( $symbol = self::encodeChunk( $str, $n++ ) ) ) {
			$ret .= $symbol;
		}
		return str_pad( $ret, strlen( $ret ) + strlen( $ret ) % 8 , '=' );
	}

	public static function decode( $str ) {
		$ret = "";
		$n = 0;
		while( $n < strlen( $str ) && self::decodeChunk( $str[ $n ], $ret, $n ) )  {
			++$n;
		}
		return $ret;
	}

	/**
	 * decode synbol and write n-th 5-bit block to the string
	 */
	protected static function decodeChunk( $encoded, &$str, $n ) {
		if( $encoded == '=' ) {
			//	reached the end, stop processing
			return false;
		}
		$fiveBits = array_search( $encoded, self::$table );
		if( $fiveBits < 0 ) {
			//	wrong symbol, stop procesing
			return false;
		}

		$charIdx = (int)floor( $n * 5 / 8 );
		$bitOffset = ($n * 5) % 8;
		if( $charIdx < strlen( $str ) ) {
			$byte = ord( $str[ $charIdx ] );
		} else {
			$byte = 0;
			$str .= ' ';
		}

		if( $bitOffset <= 3 ) {
			$byte += $fiveBits << ( 3 - $bitOffset );
			$str[ $charIdx ] = chr( $byte );
		} else {
			$byte += $fiveBits >> ( $bitOffset - 3 );
			$str[ $charIdx ] = chr( $byte );

			//	if lowest ( $bitOffset - 3 ) bits are not 0, write them to the next byte
			$mask = (1 << ( $bitOffset - 3 )) - 1;
			$nextByte = ( $fiveBits & $mask ) << ( 8 - ( $bitOffset - 3 ) );
			if( $nextByte !== 0 ) {
				if( $charIdx + 1 >= strlen( $str ) ) {
					$str .= chr( $nextByte );
				}
			}
		}

		return true;
	}

	/**
	 * read and encode n-th 5-bit block from the string
	 */
	protected static function encodeChunk( &$str, $n ) {
		$charIdx = (int)floor( $n * 5 / 8 );
		$bitOffset = ($n * 5) % 8;
		if( $charIdx >=  strlen( $str ) ) {
			return "";
		}
		$byte = ord( $str[ $charIdx ] );
		if( $bitOffset <= 3 ) {
			//	read highest ($bitOffset + 5) bits and puth them into $fiveBits
			$fiveBits = ( $byte >> ( 3 - $bitOffset ) ) & 31;
		} else {
			//	read 8 - $bitoffset bits from the first byte
			$mask = ( 1 << ( 8 - $bitOffset ) ) - 1;
			$fiveBits = ( $byte & $mask ) << ( $bitOffset - 3 );
			if( $charIdx < strlen( $str ) - 1 ) {
				// read next ($bitOffset - 3) bits and put them in the lowest bits of $fiveBits
				$nextByte = ord( $str[ $charIdx + 1 ] );
				$fiveBits += $nextByte >> ( 8 - ($bitOffset - 3) );
			}
		}
		$ret = self::$table[ $fiveBits ];
		return $ret;
	}
	protected static $table = array(
		'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H',
		'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P',
		'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
		'Y', 'Z', '2', '3', '4', '5', '6', '7',
		'='
	);
}
?>
