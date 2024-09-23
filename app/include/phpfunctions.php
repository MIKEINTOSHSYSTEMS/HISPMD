<?php

class ErrorHandler
{
	var $errorstack = array();
	function handle_mail_error($errno, $errstr, $errfile, $errline)
	{
		if(strpos($errstr,"It is not safe to rely on the system's timezone settings."))
			return;
		$this->errorstack []= array('number' => $errno, 'description' => $errstr, 'file' => $errfile, 'line' => $errline);
	}
	function getErrorMessage()
	{
		$msg="";
		foreach($this->errorstack as $err)
		{
			if($msg)
				$msg.="\r\n";
			$msg.=$err['description'];
		}
		return $msg;
	}
}

function runner_post_request($url, $parameters, $headers = array(), $certPath = false )
{
	$data = array();
	foreach ($parameters as $key => $value)
    {
    	$key = (string)$key;
        if ( is_array($value) )
        {
            foreach ($value as $item)
            {
				$item = (string)$item;
                $data[] = rawurlencode($key) . '=' . rawurlencode($item);
            }
        }
        else
        {
        	$value = (string)$value;
            $data[] = rawurlencode($key) . '=' . rawurlencode($value);
        }
    }
    $body = implode('&', $data);

    $options = array(
        CURLOPT_URL => $url . '?' . $body,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_INFILESIZE => -1,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POST => true,
		CURLOPT_POSTFIELDS => $body,
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HEADER => 0
    );

    if ( count($headers) )
    {
    	$dataHeaders = array();
		foreach ($headers as $key => $value)
	        $dataHeaders[] = $key . ': ' . $value;

    	$options[CURLOPT_HTTPHEADER] = $dataHeaders;
    }

    if ( $certPath )
    	$options[CURLOPT_CAINFO] = $certPath;

    $result = array();
    $result["error"] = false;
    $result["content"] = null;

	try
	{
	    if (!$curl = curl_init())
	        throw new Exception('Unable to initialize cURL');

	    if (!curl_setopt_array($curl, $options))
	        throw new Exception(curl_error($curl));

	    if (!$result["content"] = curl_exec($curl))
	        throw new Exception(curl_error($curl));

	   	curl_close($curl);
    }
    catch ( Exception $e )
    {
 	   	$result["error"] = "CURL error: " . $e->getMessage();
	}

	return $result;
}

/**
 * Split headers string
 * Returns as array of <HTTP-Header, Value>
 */
function curl_headers_to_array($headersData) {
	$headers = array();
	$headersLines = explode("\r\n", $headersData);
	foreach($headersLines as $line) {
		$keyValue = explode(": ", $line);
		$key = strtolower( $keyValue[0] );
		$value = $keyValue[1];
		$headers[ $key ] = $value;
	}
	return $headers;
}

/**
 * Decode wrapper
 */
function try_decode_content($data, $contentEncodingValue) {
	$encList = explode(",", $contentEncodingValue);
	$result = $data;
	foreach($encList as $alg) {
		switch( trim($alg) ) {
			case "gzip":
			case "deflate":
			case "identity":
				$result = zlib_decode($result);
				break;
			case "compress":
			case "br":
			default:
				throw new Exception('Decode method not supported');
		}
	}

	return $result;
}

/**
 * Returns array
 * "content" => response body
 * "error" => error message if any
 */
function runner_http_request( $url, $body = "", $method = "GET", $headers = array(), $certPath = false )
{

	$options = array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_INFILESIZE => -1,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CUSTOMREQUEST => $method,
		CURLOPT_SSL_VERIFYHOST => false,
		CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_HEADER => true,

		//	Google Drive needs this flag to be false
		CURLOPT_FOLLOWLOCATION => false
	);

	if( $body != "" ) {
		$options[CURLOPT_POSTFIELDS] = $body;
	}
	if( $method === "POST" ) {
		$options[CURLOPT_POST] = true;
	} else if(  $method !== "GET" ) {
		$options[ CURLOPT_CUSTOMREQUEST ] = $method;
	}
	if( $method == "HEAD" ) {
		$options[CURLOPT_NOBODY] = true;
	}

    if ( count($headers) )
    {
    	$dataHeaders = array();
		foreach ($headers as $key => $value)
	        $dataHeaders[] = $key . ': ' . $value;

    	$options[ CURLOPT_HTTPHEADER ] = $dataHeaders;
    }

    if ( $certPath )
    	$options[CURLOPT_CAINFO] = $certPath;

    $result = array();
    $result["error"] = false;
    $result["content"] = null;

	try
	{
	    if (!$curl = curl_init())
	        throw new Exception('Unable to initialize cURL');

	    if (!curl_setopt_array($curl, $options))
	        throw new Exception(curl_error($curl));

		$response = curl_exec($curl);
		if(  $response === false ) {
			throw new Exception( curl_error($curl) );
		}

		$result["responseCode"] = curl_getinfo( $curl, CURLINFO_HTTP_CODE );
		$headerSize = curl_getinfo( $curl, CURLINFO_HEADER_SIZE );

		$result["header"] = substr( $response, 0, $headerSize );
		$result["content"] = substr( $response, $headerSize );

		$headersArray = curl_headers_to_array($result["header"]);

		if ($headersArray["content-encoding"]) {
			$result["content"] = try_decode_content($result["content"], $headersArray["content-encoding"]);
		}

		//	prevent PHP from returning false
		if( !$result["content"] )
			$result["content"] = "";

	   	curl_close($curl);
    }
    catch ( Exception $e )
    {
 	   	$result["error"] = "CURL error: " . $e->getMessage();
	}

	return $result;
}



/**
	PHPRunner wrapper for mail() function.
	$params array Input paramaters.
	The following parameters are supported:
	'from' Sender email address. If none specified an email address from the wizard will be used.
	'to' Receiver email address.
	'body' Plain text message body.
	'htmlbody' Html message body (do not use 'body' parameter in this case).
	'charset' Html message charset. If none specified the default website charset will be used.

	Returns array with data:
	"mailed" - indicates wheter mail sent or not
	"errors" - array of errors
		Each error is an array with the following keys:
		"number" - error number
		"description" - error description
		"file" - name of the php file in which error happened
		"line" - line number on which error happened

 * @param Array params
 * @return Array
 * @intellisense
 */
function runner_mail( $params )
{
	if( !GetGlobalData("useBuiltInMailer", false) )
	{
		include_once(getabspath('libs/phpmailer/class.phpmailer.php'));
		include_once(getabspath('libs/phpmailer/class.smtp.php'));
		return runner_mail_smtp($params);
	}

	$from = isset($params['from']) ? $params['from'] : "";
	if( !$from )
		$from = GetGlobalData("strFromEmail", "");

	$to = isset($params['to']) ? $params['to'] : "";
	$body = isset($params['body']) ? $params['body'] : "";
	$cc = isset($params['cc']) ? $params['cc'] : "";
	$bcc = isset($params['bcc']) ? $params['bcc'] : "";
	$replyTo = isset($params['replyTo']) ? $params['replyTo'] : "";
	$priority = isset($params['priority']) ? $params['priority'] : "";

	$charset = "";
	$isHtml = false;
	if( !$body )
	{
		$body = isset($params['htmlbody']) ? $params['htmlbody'] : "";
		$charset = isset($params['charset']) ? $params['charset'] : "";
		if( !$charset )
			$charset = "utf-8";
		$isHtml = true;
	}
	$subject = $params['subject'];

	//
	$header = "";
	if( $isHtml )
	{
		$header .= "MIME-Version: 1.0\r\n";
		$header .= 'Content-Type: text/html;' . ( $charset ? ' charset=' . $charset . ';' : '' ) . "\r\n";
	}

	if( $from )
	{
		if( strpos($from, '<') !== false )
			$header .= 'From: ' . $from . "\r\n";
		else
			$header .= 'From: <' . $from . ">\r\n";

		@ini_set("sendmail_from", $from);
	}

	if($cc)
		$header .= 'Cc: ' . $cc . "\r\n";

	if($bcc)
		$header .= 'Bcc: ' . $bcc . "\r\n";

	if ($priority)
		$header .= 'X-Priority: '.$priority."\r\n";

	if($replyTo)
	{
		if( strpos($replyTo, '<') !== false )
			$header .= 'Reply-to: '.$replyTo."\r\n";
		else
			$header .= 'Reply-to: <'.$replyTo.">\r\n";
	}

	$eh = new ErrorHandler();
	set_error_handler(array($eh, "handle_mail_error"));

	$res = false;
	if( !$header )
	{
		$res = mail($to, $subject, $body);
	}
	else
	{
		$res = mail($to, $subject, $body, $header);
	}

	restore_error_handler();
	return array( "success" => $res, "mailed" => $res, "errors" => $eh->errorstack, "message"=> $eh->getErrorMessage() );
}

/**
 * Gets absolute path
 *
 * @param string $path
 * @return string
 * @intellisense
 */
function getabspath($path)
{
	// get path to the root
	$pathToRoot = substr(dirname(__FILE__),0,strlen(dirname(__FILE__))-strlen("/include"));
	// cheks if there already we have absolute path
	if ($pathToRoot=="" || strpos($path, $pathToRoot) !== false)
		return $path;

	// add \ or / if needed
	if (substr($path, 0, 1) != "/" && substr($path, 0, 1) != "\\")
		$pathToRoot .= "/";

	$realPath = $pathToRoot.$path;
	return $realPath;
}


function httpDateString( $value ) {
	return gmdate( "D, d M Y H:i:s", $value ) . " GMT";
}


/**
 * Check if the path is absolute or not basing on data
 * obtained from the current file directory's path
 * @param String path
 * @return Boolean
 */
function isAbsolutePath($path)
{
	if( runner_substr($path, 0, 2) == "\\\\"  )
		return true;

	$pathToRoot = dirname(__FILE__);

	if( runner_substr($path, 0, 1) == "/" && runner_substr($pathToRoot, 0, 1) == "/")
		return true;

	if( windowsOS() && runner_substr($path, 1, 1) == ':' ) {
		return true;
	}

	return false;
}

/**
 * Gets absolute url
 *
 * @param string $uri
 * @return string
 * @intellisense
 */
function getabsurl($uri)
{
	$here = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$realUrl = preg_replace('~#.*$~s', '', $here);
	$realUrl = preg_replace('~\?.*$~s', '', $realUrl);
	$realUrl = preg_replace('~/[^/]*$~s', '/'.$uri, $realUrl);
	return $realUrl;
}

/**
 * @intellisense
 */
function myfile_exists( $filename )
{
	if( @is_dir( $filename ) ) {
		return false;
	}
	$file = @fopen($filename,"rb");
	if($file)
	{
		fclose($file);
		return true;
	}
	else
		return false;
}

/**
 * @intellisense
 */
function try_create_new_file($filename)
{
	$file = @fopen($filename,"x");
	if($file)
	{
		fclose($file);
		return true;
	}
	else
		return false;
}

function append_to_file( $filename, $str )
{
	$h = @fopen( $filename, "a" );
	if( !$h )
		return;
	fputs( $h, $str );
	fclose( $h );
}

//	read the whole file and return contents
/**
 * @intellisense
 * @param String filename
 * @param String mode?
 * @param Int length? 	Up to length number of bytes read
 */
function runner_file_get_contents( $filename, $mode = "rb", $length = 0 )
{
	if(!is_uploaded_file($filename) && !file_exists($filename))
		return false;
	$handle = fopen($filename, $mode);
	if(!$handle)
		return false;

	$fsize = $length;
	if( !$length ) {
		fseek($handle, 0 , SEEK_END);
		$fsize = ftell($handle);
		fseek($handle, 0 , SEEK_SET);
	}

	$contents = "";
	if( $fsize )
		$contents = fread( $handle, $fsize );

	fclose( $handle );
	return $contents;
}

/**
 * Legacy use only
 */
function myfile_get_contents( $filename, $mode = "rb", $length = 0 ) {
	return runner_file_get_contents( $filename, $mode, $length );
}


function myfile_get_contents_binary( $filename )
{
	return myfile_get_contents($filename, "rb");
}

function myurl_get_contents_binary( $url )
{
	return myurl_get_contents( $url );
}

function base64_encode_binary( $data )
{
	return base64_encode( $data );
}

function base64_decode_binary( $data )
{
	return base64_decode( $data );
}

function base64_bin2str( $data )
{
	return base64_encode( $data );
}

function base64_str2bin( $str )
{
	return base64_decode( $str );
}

/**
 * @intellisense
 */
function myurl_get_contents( $url )
{
	$refferer = @$_SERVER["HTTP_REFERER"] != "" ? @$_SERVER["HTTP_REFERER"] : "localhost";
	$opts = array(
		'http'=> array(
			'header'=> "User-Agent: PHPRunner 10\r\n" .
						"Referer: ".$refferer."\r\n"
		)
	);

	$context = stream_context_create( $opts );
	return file_get_contents( $url, false, $context );
}

/**
 * @intellisense
 */
function printfile($filename)
{
	$file = fopen($filename, "rb");
	$bufsize = 8*1024;
	while(!feof($file))
		echo fread($file, $bufsize);
	fclose($file);
}

/**
 * @intellisense
 */
function printfileByRange($filename, $startPos, $endPos)
{
	$fileSize = filesize($filename);
	$length = $endPos - $startPos + 1;
	$file = fopen($filename, "rb");
	if(fseek($file, $startPos) == 0)
	{
		$bufsize = 8*1024;
		if($length < $bufsize)
			$bufsize = $length;
		$totalRead = 0;
		while(!feof($file) && $totalRead < $length)
		{
			//reset time limit for big files
        	set_time_limit(0);
			print(fread($file, $bufsize));
			flush();
			if(ob_get_level())
        		ob_flush();
			$totalRead += $bufsize;
			if($totalRead + $bufsize > $length)
				$bufsize = $length - $totalRead;
		}
	}
	fclose($file);
}

/**
 * @intellisense
 */
function CreateThumbnail($value, $size, $ext)
{
	if(!function_exists("imagecreatefromstring"))
		return $value;

	$error_handler=set_error_handler("empty_error_handler");
	$image = imagecreatefromstring($value);
	if($error_handler)
		set_error_handler($error_handler);

	if(!$image)
		return $value;

	$width_old = imagesx($image);
	$height_old = imagesy($image);

	if($width_old>$size || $height_old>$size){
		if($width_old>=$height_old)
		{
			$final_height=(integer)($height_old*$size/$width_old);
			$final_width=$size;
		}
		else
		{
			$final_width=(integer)($width_old*$size/$height_old);
			$final_height=$size;
		}


	    $image_resized = imagecreatetruecolor( $final_width, $final_height );

	    if ($ext==".GIF" || $ext=="GIF" || $ext==".PNG" || $ext=="PNG") {
	      $trnprt_indx = imagecolortransparent($image);

	      // If we have a specific transparent color
	      if ($trnprt_indx >= 0) {

	     	// when index more than imagecolorstotal may occurs problems with gif
		    $totalColors = imagecolorstotal($image);
		    if ($trnprt_indx>=$totalColors && $totalColors>0){
		    	$trnprt_indx = imagecolorstotal($image)-1;
		    }

	        // Get the original image's transparent color's RGB values
	        $trnprt_color    = imagecolorsforindex($image, $trnprt_indx);

	        // Allocate the same color in the new image resource
	        $trnprt_indx    = imagecolorallocatealpha($image_resized, $trnprt_color['red'], $trnprt_color['green'], $trnprt_color['blue'],127);
	        $trnprt_indx    = imagecolorallocate($image_resized, 255,255,255);
	        // Completely fill the background of the new image with allocated color.
	        imagefill($image_resized, 0, 0, $trnprt_indx);

	        // Set the background color for new image to transparent
	        imagecolortransparent($image_resized, $trnprt_indx);

	      }
	      // Always make a transparent background color for PNGs that don't have one allocated already
	      elseif ($ext==".PNG" || $ext=="PNG") {

	        // Turn off transparency blending (temporarily)
	        imagealphablending($image_resized, false);

	        // Create a new transparent color for image
	        $color = imagecolorallocatealpha($image_resized, 0, 0, 0, 127);

	        // Completely fill the background of the new image with allocated color.
	        imagefill($image_resized, 0, 0, $color);

	        // Restore transparency blending
	        imagesavealpha($image_resized, true);
	      }
	    }

	 	imagecopyresampled($image_resized, $image, 0, 0, 0, 0, $final_width, $final_height, $width_old, $height_old);

	    ob_start();
		if($ext==".JPG" || $ext=="JPEG")
			imagejpeg($image_resized);
		elseif($ext==".PNG")
			imagepng($image_resized);
		else
			imagegif($image_resized);
		$ret=ob_get_contents();
		ob_end_clean();
		imagedestroy($image);
		imagedestroy($image_resized);
		return $ret;
	}
	imagedestroy($image);
	return $value;

}
/**
 * @intellisense
 */
function mysprintf($format, $params)
{
	$params2 = $params;
	array_unshift($params2, $format);
	return call_user_func_array('sprintf', $params2);
}

/**
 * @intellisense
 */
function now()
{
	return strftime("%Y-%m-%d %H:%M:%S");
}

/**
 * refine value passed by POST or GET method
 * @intellisense
 */
function refine($str)
{
	return $str;
}

/**
 * suggest image type by extension
 * @intellisense
 */
function SupposeImageType($file)
{
	if(strlen($file)>1 && $file[0]=='B' && $file[1]=='M')
		return "image/bmp";
	if(strlen($file)>2 &&  $file[0]=='G' && $file[1]=='I' && $file[2]=='F')
		return "image/gif";
	if(strlen($file)>3 &&  ord($file[0])==0xff && ord($file[1])==0xd8 && ord($file[2])==0xff)
		return "image/jpeg";
	if(strlen($file)>8 &&  ord($file[0])==0x89 && ord($file[1])==0x50 && ord($file[2])==0x4e && ord($file[3])==0x47
					   &&  ord($file[4])==0x0d && ord($file[5])==0x0a && ord($file[6])==0x1a && ord($file[7])==0x0a)
		return "image/png";
}

/**
 * @intellisense
 */
function prepare_file($value,$field,$controltype,$postfilename, $id)
{
	$filename="";
	$file=&$_FILES["value_".GoodFieldName($field)."_".$id];
	if($file["error"] && $file["error"]!=4)
		return false;
	if(trim($postfilename))
		$filename=refine(trim($postfilename));
	else
		$filename=$file['name'];
	if(substr($controltype,4,1)=="1")
	{
		$filename="";
		return array("filename" => "", "value" => "");
	}
	if(substr($controltype,4,1)=="0")
		return false;
	$ret=myfile_get_contents($file['tmp_name']);
	if(!$ret)
		return false;
	return array("filename" => $filename, "value" => $ret);
}

/**
 * @intellisense
 */
function prepare_upload($field, $controltype, $postfilename, $value, $table, $id, &$pageObject)
{
	$abs = $pageObject->pSet->isAbsolute($field);
	$file=&$_FILES["value_".GoodFieldName($field)."_".$id];
	$sbstr1 = substr($controltype,6,1);
	if($file["error"] || $value == "")
	{
		if($file["error"] != 4  && $sbstr1 != "1")
		return false;
	}
	if($sbstr1 == "1")
	{
		if(strlen($postfilename))
		{
			$pageObject->filesToDelete[]=new DeleteFile($postfilename, $pageObject->pSet->getUploadFolder($field), $abs);
			if($pageObject->pSet->getCreateThumbnail($field,$table))
				$pageObject->filesToDelete[]=new DeleteFile($pageObject->pSet->getStrThumbnail($field).$postfilename, $pageObject->pSet->getUploadFolder($field), $abs);
		}
		return "";
	}
	if(substr($controltype,6,1)=="0")
		return false;
	if(strlen($file['tmp_name']))
	{
		if(!$pageObject->pSet->getResizeOnUpload($field))
		{
			$pageObject->filesToMove[] = new MoveFile($file['tmp_name'],$value, $pageObject->pSet->getUploadFolder($field),$abs);
		}
		else
		{
			$contents = myfile_get_contents($file['tmp_name']);
			$ext = CheckImageExtension($file["name"]);
			$thumb = CreateThumbnail($contents, $pageObject->pSet->getNewImageSize($field), $ext);
			$pageObject->filesToSave[] = new SaveFile($thumb,$value, $pageObject->pSet->getUploadFolder($field),$abs);
		}
	}
	return $value;
}

/**
 * @intellisense
 */
function FieldSubmitted($field)
{
	return in_assoc_array("type_".GoodFieldName($field),$_POST) || in_assoc_array("value_".GoodFieldName($field),$_POST)
		|| in_assoc_array("value_".GoodFieldName($field),$_FILES);
}

/**
 * @intellisense
 */
function GetUploadedFileContents($name)
{
	return myfile_get_contents($_FILES[$name]['tmp_name']);
}

/**
 * @intellisense
 */
function GetUploadedFileName($name)
{
	return $_FILES[$name]["name"];
}

/**
 * @param &Array values
 * @param &Array blobfields
 * @param RunnerPage pageobject
 * @return Array
 * @intellisense
 */
function PrepareBlobs(&$values, &$blobfields, $pageObject)
{
	$blobs = array();

	if( $pageObject->connection->dbType == nDATABASE_Oracle || $pageObject->connection->dbType == nDATABASE_DB2 || $pageObject->connection->dbType == nDATABASE_Informix )
	{
		//	replace blobs with EMPTY_BLOB()
		foreach($blobfields as $bfield)
		{
			$blobs[ $pageObject->getTableField( $bfield ) ] = $values[ $bfield ];

			if( $pageObject->connection->dbType == nDATABASE_Oracle )
				$values[ $bfield ] = "EMPTY_BLOB()";
			else
				$values[ $bfield ] = "?";
		}
	}
	else
	{
		//	no special processing required
		$blobfields = array();
	}

	return $blobs;
}

/**
 * @intellisense
 * @param RunnerPage pageObj
 * @param String strSQL
 * @param &Array blobs
 */
function ExecuteUpdate( &$pageObj, $strSQL, &$blobs )
{
	$blobTypes = array();
	if( $pageObj->connection->dbType == nDATABASE_Informix )
	{
		foreach($blobs as $fieldname => $fieldvalue)
		{
			$blobTypes[ $fieldname ] = $pageObj->pSet->getFieldType( $fieldname );
		}
	}
	LogInfo($strSQL);
	if( !$pageObj->connection->execWithBlobProcessing( $strSQL, $blobs, $blobTypes ) )
	{
		$pageObj->setDatabaseError( $pageObj->connection->lastError() );
		return false;
	}
	return true;
}

/**
 * @intellisense
 */
function runner_move_uploaded_file($source, $dest)
{
	move_uploaded_file($source, $dest);
}

/**
 * @intellisense
 */
function runner_save_file($filename, $contents)
{
	if(file_exists($filename))
		@unlink($filename);
	$th = fopen($filename, "w");
	fwrite($th, $contents);
	fclose($th);
}

/**
 * @intellisense
 */
function runner_delete_file($file)
{
	if(myfile_exists($file))
		@unlink($file);
}

/**
 * @intellisense
 */
function runner_copy_file($source, $dest)
{
	copy($source, $dest);
}

/**
 * @intellisense
 */
function GetCurrentYear()
{
	$tm=localtime(time(),true);
	return $tm["tm_year"]+1900;
}

/**
 * @intellisense
 */
function sortMembers(&$arr)
{
	usort($arr, "sortfunc_members");
}

/**
 * @intellisense
 */
function sortfunc_members(&$a,&$b)
{
	global $sortgroup,$sortorder;
	$gcount=count($a["usergroup_boxes"]["data"]);
	for($i=0;$i<$gcount;$i++)
		if($a["usergroup_boxes"]["data"][$i]["usergroup_box"]["data"][0]["group"]==$sortgroup)
			break;
	if($i==$gcount || $a["usergroup_boxes"]["data"][$i]["usergroup_box"]["data"][0]["checked"]==$b["usergroup_boxes"]["data"][$i]["usergroup_box"]["data"][0]["checked"])
	{
//	compare by username
		if($a["user"]==$b["user"])
			return 0;
		if($a["user"]>$b["user"])
			return 1;
		return -1;
	}
	if($sortorder=="a" && $a["usergroup_boxes"]["data"][$i]["usergroup_box"]["data"][0]["checked"]=="")
		return 1;
	if($sortorder=="d" && $b["usergroup_boxes"]["data"][$i]["usergroup_box"]["data"][0]["checked"]=="")
		return 1;
	return -1;
}

/**
 * return refined POST or GET value - single value or array
 * @intellisense
 */
function postvalue($name)
{
	if(isset($_POST[$name]))
		$value=$_POST[$name];
	else if(isset($_GET[$name]))
		$value=$_GET[$name];
	else
		return "";
	if(!is_array($value))
		return refine($value);
	$ret=array();
	foreach($value as $key=>$val)
		$ret[$key]=refine($val);
	return $ret;
}

function getCustomMapIcon($field, $table, $data)
{
	global $strTableName;
	$icon = "";
	if(!$table)
		$table = $strTableName;


	return $icon;
}

function getDashMapCustomIcon( $dashName, $dashElementName, $data )
{
	$icon = "";
}

function getDashMapCustomLocationIcon( $dashName, $dashElementName, $data )
{
	$icon = "";
}

/**
 * return custom expression
 * @intellisense
 */
function CustomExpression($value, $data, $field, $ptype, $table="")
{
	global $strTableName;
	if(!$table)
		$table = $strTableName;
				if($table=="kbarticles" && $field=="ArticleID")
	{
		$value = "<a target='_blank' href='".GetTableLink("main","export")."?a=export&amp;selection[]=".$data["ArticleID"]."'>Export article</a>";;
		return $value;
	}
				if($table=="kbarticles" && $field=="ArticleID2")
	{
		$value = "<a target='_blank' href='".GetTableLink("main","print")."?selection[]=".$data["ArticleID"]."'>Printer-friendly version</a>";;
		return $value;
	}
				if($table=="kbarticles" && $field=="ArticleIDedit")
	{
		$value = "<a href='".GetTableLink("kbarticles","edit")."?editid1=".$value."'>Edit</a>";
;
		return $value;
	}
				if($table=="kbarticles" && $field=="Title" && $ptype=="view")
	{
		;
		return $value;
	}
				if($table=="kbarticles" && $field=="Title" && $ptype=="list")
	{
		$value = "<a href='".GetTableLink("main","view")."?editid1=".$data["ArticleID"]."'>".$value."</a>";;
		return $value;
	}
				if($table=="kbarticles" && $field=="Title" && $ptype=="export")
	{
		$value = "<a href='".GetTableLink("main","view")."?editid1=".$data["ArticleID"]."'>".$value."</a>";;
		return $value;
	}
				if($table=="kbarticles" && $field=="Title" && $ptype=="masterlist")
	{
		$value = "<a href='".GetTableLink("main","view")."?editid1=".$data["ArticleID"]."'>".$value."</a>";;
		return $value;
	}
				if($table=="kbarticles" && $field=="Title" && $ptype=="masterprint")
	{
		$value = "<a href='".GetTableLink("main","view")."?editid1=".$data["ArticleID"]."'>".$value."</a>";;
		return $value;
	}
				if($table=="kbcategories" && $field=="faicon")
	{
		$value = "<span class='fa ".$value."'></span>";
		return $value;
	}
				if($table=="main" && $field=="ArticleID")
	{
		$value = "<a target='_blank' href='".GetTableLink("main","export")."?a=export&amp;selection[]=".$data["ArticleID"]."'>Export article</a>";;
		return $value;
	}
				if($table=="main" && $field=="ArticleID2")
	{
		$value = "<a target='_blank' href='".GetTableLink("main","print")."?selection[]=".$data["ArticleID"]."'>Printer-friendly version</a>";;
		return $value;
	}
				if($table=="main" && $field=="ArticleIDedit")
	{
		$value = "<a href='".GetTableLink("kbarticles","edit")."?editid1=".$value."'>Edit</a>";
;
		return $value;
	}
				if($table=="main" && $field=="Category" && $ptype=="view")
	{
		$value="<a href='".GetTableLink("main","list")."?page=list1&q=(Category~equals~".$value.")'>".$value."</a>";;
		return $value;
	}
				if($table=="main" && $field=="Category" && $ptype=="list")
	{
		$value="<a href='".GetTableLink("main","list")."?page=category&q=(Category~equals~".$value.")'>".$value."</a>";;
		return $value;
	}
				if($table=="main" && $field=="Category" && $ptype=="print")
	{
		;
		return $value;
	}
				if($table=="main" && $field=="Category" && $ptype=="export")
	{
		;
		return $value;
	}
				if($table=="main" && $field=="Category" && $ptype=="masterlist")
	{
		$value="<a href='".GetTableLink("main","list")."?page=list1&q=(Category~equals~".$value.")'>".$value."</a>";;
		return $value;
	}
				if($table=="main" && $field=="Category" && $ptype=="masterprint")
	{
		$value="<a href='".GetTableLink("main","list")."?page=list1&q=(Category~equals~".$value.")'>".$value."</a>";;
		return $value;
	}
				if($table=="main" && $field=="Title" && $ptype=="view")
	{
		;
		return $value;
	}
				if($table=="main" && $field=="Title" && $ptype=="list")
	{
		//$value = "<a class='fa fa-angle-double-right' href='".GetTableLink("kbcomments","list")."?mastertable=main&masterkey1=".$data["ArticleID"]."'>".$value."</a>";

$value = "<a href='".GetTableLink("main","view")."?editid1=".$data["ArticleID"]."'><span class='fa fa-angle-double-right' style='margin-right:3px;'></span>".$value."</a>";;
		return $value;
	}
				if($table=="main" && $field=="Views" && $ptype=="view")
	{
		;
		return $value;
	}
				if($table=="main" && $field=="Views" && $ptype=="list")
	{
		$value = "(Views: ".$value.")";;
		return $value;
	}
				if($table=="main" && $field=="Views" && $ptype=="print")
	{
		$value = "(View: ".$value.")";;
		return $value;
	}
				if($table=="main" && $field=="Views" && $ptype=="export")
	{
		$value = "(View: ".$value.")";;
		return $value;
	}
				if($table=="main" && $field=="helpfullblock")
	{
		
$value = "<span class='helpfultext'>Was this article helpful?</span>";
$value.="<span class='buttons'>";
$value.="<span data-column='likecount' class='yes fa fa-thumbs-up'>Yes (<i>".$data["likecount"]."</i>)</span>";
$value.="<span data-column='dislikecount' class='no fa fa-thumbs-down'>No (<i>".$data["dislikecount"]."</i>)</span>";
$value.="<span class='feedback fa fa-comment'>Add Comment</span>";
$value.="</span>";
$value.="<span class='thankyou'>Thank you for your feedback!</span>";;
		return $value;
	}
				if($table=="faicons" && $field=="id")
	{
		$value = $data["icon"];;
		return $value;
	}
				if($table=="faicons" && $field=="icon")
	{
		$value = "<span class='fa ".$data["icon"]."'></span>";;
		return $value;
	}
	return $value;
}


/**
 * return custom expression for file
 * @intellisense
 */
function fileCustomExpression($file, $data, $field, $ptype, $table )
{
	$value = "";
	return $value;
}


/**
 * return Lookup Wizard Where expression
 * @intellisense
 */
function GetLWWhere($field, $ptype, $table = "")
{
	global $strTableName;
	if(!$table)
		$table = $strTableName;
	return "";
}

/**
 * @intellisense
 */
function GetDefaultValue($field, $ptype, $table="")
{
	global $strTableName;
	if(!$table)
		$table=$strTableName;
				if($table=="kbcomments" && $field=="moderated")
	{
		return 0;
	}
				if($table=="admin_comments" && $field=="moderated")
	{
		return 0;
	}
	return "";
}

/**
 * @intellisense
 */
function GetAutoUpdateValue($field, $ptype, $table="")
{
	global $strTableName;
	if(!$table)
		$table=$strTableName;
	return "";
}

/**
 * @intellisense
 */
function GetUploadFolderExpression($field, $file, $table )
{
	return "";
}

/**
 * @intellisense
 */
function mdeleteIndex($i)
{
	return $i-1;
}

/**
 * Call function stack info parser
 * Return array of function calls

 * @intellisense
 * @return array
 */
function parse_backtrace($errfFile, $errLine)
{
	// get backtrace array
	$backtrace = debug_backtrace();

	// delete calls to error handler functions
	$skipFunctions = array('parse_backtrace', 'error_handler', 'runner_error_handler', 'trigger_error', 'extract_error_info');
	foreach ($backtrace as $i => $call) {
		// cut error handlers calls etc.
		if (in_array($call['function'], $skipFunctions)) {
			array_shift($backtrace);
			continue;
		}
		break;
	}
	// if no data return empty array
	if (count($backtrace) == 0) {
		return array();
	}

	$backTraceLen = count($backtrace);
	$backtrace[$backTraceLen]['file'] = $backtrace[$backTraceLen - 1]['file'];
	$backtrace[$backTraceLen]['line'] = $backtrace[$backTraceLen - 1]['line'];
	$backtrace[$backTraceLen]['function'] =  'Global scope';

	// make shift of file: line, for better view. It will show not line where function were called, but line where in function error was happend
	for ($i = 0; $i < count($backtrace); $i++) {
		$errorLineBefore = $backtrace[$i]['line'];
		$errorFileBefore = $backtrace[$i]['file'];
		$backtrace[$i]['file'] = $errfFile;
		$backtrace[$i]['line'] = $errLine;
		$errLine = $errorLineBefore;
		$errfFile = $errorFileBefore;
	}

	// result array with data
	$funCallsArray = array();
	// parse array
	foreach ($backtrace as $i => $call) {
		$funcCall = array();
		// proccess the data that may not exist
		if (isset($call['file'])) {
			$pathToRoot = substr(dirname(__FILE__), 0, strlen(dirname(__FILE__)) - strlen("include"));
			$funcCall['file'] =	str_replace($pathToRoot, '', $call['file']);
		} else {
			$funcCall['file'] = '(null)';
		}

		$funcCall['line'] = !isset($call['line']) ? '0' : $call['line'];
		$funcCall['function'] = $call['function'];
		$funcCall['class'] = '';
		$funcCall['type'] = '';
		// if object method was called
		if (isset($call['class'])) {
			$funcCall['class'] = $call['class'];
			$funcCall['type'] = isset($call['type']) ? $call['type']: '::';
		}

		// proccess arguments
		$params = array();
		if (isset($call['args'])) {
			foreach ($call['args'] as $arg) {
				$strarg = '';
				if (is_array($arg)) {
					$strarg = runner_print_r_plain($arg, true);
					$strarg = runner_htmlspecialchars($strarg);
					$strarg = nl2br(str_replace(" ", '&nbsp;', $strarg));
				} elseif (is_object($arg)) {
					$strarg = get_class($arg);
				} else {
					$strarg = runner_htmlspecialchars((string)$arg);
				}
				$params[] = $strarg;
			}
		}
		$funcCall['params'] = $params;
		$funCallsArray[] = $funcCall;
	}

	// return array with call functions strings
	return $funCallsArray;
}

/**
 * display error message
 * @intellisense
 */
function runner_error_handler($errno, $errstr, $errfile, $errline)
{
	global $globalSettings;

	if ($errno==2048 || $errno == 8 || $errno == 2 || $errno == 8192)
		return 0;

	if(strpos($errstr,"It is not safe to rely on the system's timezone settings."))
		return 0;

	if(strpos($errstr,"fopen(")===0)
		return 0;

	if ( !$globalSettings["showDetailedError"] )
	{
		echo $globalSettings["customErrorMessage"];
		exit(0);
	}

	$errinfo = extract_error_info($errno, $errstr, $errfile, $errline);

	runner_show_error($errinfo);
}

/**
 * ectract current error description
 * @return Array
 * @sample return:
  array(
 	'errno' => 123,
 	'errstr' => 'something wrong',
 	'url' => localhost:88/list?aa=bb,
 	'errfile' => list.php,
 	'errline' => 345,
 	'sqlStr' => 'Select * from DUAL',
 	'debugRows' => arrray(
 		0 => array(
 			'file' => 'list.php',
 			'line' => '345',
 			'function' => 'showPage',
 			'class' => 'ListPage',
 			'type' => '->',
 			args => array(
 				0 => 'aaa',
 				1 => 'true'
 			)
		),
 		...
 	)
  )
 * @intellisense
 */
function extract_error_info($errno, $errstr, $errfile, $errline)
{
	global $strLastSQL;

	$errinfo = array();
	$errinfo['errno'] = $errno;
	$errinfo['errstr'] = $errstr;

	$url = $_SERVER["SERVER_NAME"] . $_SERVER["SCRIPT_NAME"];
	if (array_key_exists("QUERY_STRING", $_SERVER)) {
		$url .= "?" . $_SERVER["QUERY_STRING"];
	}

	$errinfo['url'] = $url;
	$errinfo['errfile'] = $errfile;
	$errinfo['errline'] = $errline;

	$errinfo['sqlStr'] = isset($strLastSQL) ? $strLastSQL : '';

	$errinfo['debugRows'] = parse_backtrace($errfile, $errline);
	return $errinfo;
}

/**
 * @intellisense
 */
function no_output_done()
{
	if(headers_sent())
		return false;
	if(ob_get_length())
		return false;
	return true;
}

/**
 * @intellisense
 */
function format_currency($val)
{
	return str_format_currency($val);
}

/**
 * @intellisense
 */
function format_number($val,$valDigits = false)
{
	return str_format_number($val,$valDigits);
}

function formatNumberForHTML5($value)
{
	return $value;
}

/**
 * @intellisense
 */
function format_datetime($time)
{
	return str_format_datetime($time);
}

/**
 * @intellisense
 */
function format_time($time)
{
	return str_format_time($time);
}

/**
 * @intellisense
 */
function secondsPassedFrom($datetime)
{
	$arrDateTime=db2time($datetime);
	return time()-mktime($arrDateTime[3],$arrDateTime[4],$arrDateTime[5],$arrDateTime[1],$arrDateTime[2],$arrDateTime[0]);
}

/**
 * @intellisense
 */
function xtempl_call_func($func,&$params)
{
	if(function_exists($func))
	{
		$func($params);
	}
}

/**
 * @intellisense
 */
function echoBinary($string, $bufferSize = 8192)
{
	for ($chars=strlen($string)-1,$start=0;$start <= $chars;$start += $bufferSize)
		echo substr($string,$start,$bufferSize);
}

/**
 * @intellisense
 */
function echoBinaryPartial($string, $startPos, $endPos, $bufferSize = 8192)
{
	$length = $endPos - $startPos + 1;
	if($length < $bufferSize)
		$bufferSize = $length;
	for ($start = $startPos; $start <= $endPos && $bufferSize > 0;)
	{
		echo substr($string, $start, $bufferSize);
		$start += $bufferSize;
		if($start + $bufferSize > $length)
			$bufferSize = $length - $start;
	}
}

/**
 * @intellisense
 */
function setObjectProperty(&$obj,$key,&$value)
{
	$obj->$key = &$value;
}

/**
 * @intellisense
 */
function returnError404()
{
	header("HTTP/1.0 404 Not Found");
}

/**
 * @intellisense
 */
function execute_events(&$params)
{
	if(function_exists(@$params["custom1"]))
		eval($params["custom1"].'($params);');
}

/**
 * @intellisense
 */
function GetMySQLLastInsertID( $connection )
{
//	select LAST_INSERT_ID() for ASP
	return $connection->getInsertedId();
}

/**
 * @intellisense
 */
function DoInsertRecord($table, &$avalues, &$blobfields, &$pageObject)
{
	return DoInsertRecordSQL($table, $avalues, $blobfields, $pageObject);
}


/**
 * @intellisense
 */
function xtempl_include_header($xt,$fname,$param)
{
	$xt->assign_function($fname,"xt_include",array("file"=>$param));
}

function xt_include($params)
{
	if(file_exists(getabspath($params["file"])))
		include(getabspath($params["file"]));
}

/**
 * @intellisense
 */
function binPrint(&$value, $size)
{
	//echobig($value,$size);
}

/**
 * construct "good" field name
 * @intellisense
 */
function GoodFieldName($field)
{
	global $cCharset;
	if ($cCharset == "utf-8"){
		$field = utf8_decode($field);
	}
	$field=(string)$field;
	$out="";
	for($i=0;$i<strlen($field);$i++)
	{
		$t=substr($field,$i,1);
		if((ord($t)<ord('a') || ord($t)>ord('z')) && (ord($t)<ord('A') || ord($t)>ord('Z')) && (ord($t)<ord('0') || ord($t)>ord('9')))
			$out.='_';
		else
			$out.=$t;
	}
	return $out;
}

/**
 * @intellisense
 */
function xt_getvar(&$xt,$name)
{
	global $testingLinks;
	for($i = count($xt->xt_stack)-1;$i>=0;$i--)
	{
		if(isset($xt->xt_stack[$i][$name]))
			return $xt->xt_stack[$i][$name];
	}
	if(!$xt->testingFlag)
		return false;

	if(isset($testingLinks[$name]))
		return "func=\"".$testingLinks[$name]."\"";
	else
		return false;
}



/**
 * @intellisense
 */
function parse_addr_list($to)
{
	$addr_arr = array();

	$to = preg_replace('/^[\s*,]+|[\s*,]+$/',"", $to);
	$to = preg_replace('/\s+,/',",", $to);
	//split $to by ',' not surrounded by quotes or round brackets
	$arr = preg_split('/(,(?=([^"]*("[^"]*")?)*$))(?![^\(]*(\),|\)$))/', $to);

  	$matches = array();
    foreach($arr as $item)
	{
		$item = trim($item);
		if($item != "")
		{
			//match an email not surrounded by quotes or round brackets
			preg_match_all('/(([A-Za-z\d_\-\.+]+@[A-Za-z\d_\-\.]+\.[A-Za-z\d_\-]+)(?=([^"]*("[^"]*")?)*$))(?![^\(]*(\),|\)$))/', $item, $matches);
			if(count($matches[0]) == 1)
			{
			    $name = preg_replace('/(([A-Za-z\d_\-\.+]+@[A-Za-z\d_\-\.]+\.[A-Za-z\d_\-]+)(?=([^"]*("[^"]*")?)*$))(?![^\(]*(\),|\)$))/',"", $item);
			    $name = preg_replace('/"|<>$/',"", $name);
				$addr_arr[] = array('addr' => $matches[0][0], 'name' => $name);
			}
		}
	}

	return $addr_arr;
}

/**
 * @param Array params
 * @return Array
 * @intellisense
 */
function runner_mail_smtp( $params )
{
	global $dDebug;
	$mail = new PHPMailer( true );
	$mail->IsSMTP(); // telling the class to use SMTP

	if( $dDebug ) {
		// debug logs will be printed using php 'echo' function
		$mail->SMTPDebug = SMTP::DEBUG_LOWLEVEL;
		$mail->Debugoutput = 'html';
	}

	$useCustomSMTP = GetGlobalData("useCustomSMTPSettings", false);
	$SMTPUser = GetGlobalData("strSMTPUser", "");

	if( $useCustomSMTP && $SMTPUser != "" || isset( $params['username'] ) )
	{
		$mail->SMTPAuth = true;  // enable SMTP authentication
		$mail->Username = isset( $params['username'] ) ? $params['username'] : $SMTPUser;  // SMTP username
		$mail->Password = isset( $params['password'] ) ? $params['password'] : GetGlobalData("strSMTPPassword", "");  // SMTP password
	}
	else
	{
		$mail->SMTPAuth = false;
	}

	$SMTPServer = GetGlobalData("strSMTPServer", "");
	if( $useCustomSMTP && $SMTPServer != "" || isset( $params['host'] ) )
	{
		$mail->Host = isset( $params['host'] ) ? $params['host'] : $SMTPServer;  // sets SMTP server
	}
	else if( ini_get('SMTP') != '' )
	{
		$mail->Host = ini_get('SMTP');
	}

	if( $mail->Host == "" ) {
		return array(
			"mailed" => false,
			"success" => false,
			"message" => "Email server connection is not specified. Setup the connection on the Miscellaneous - Email settings... dialog."
		);

	}


	$SMTPPort = GetGlobalData("strSMTPPort", "");
	if( $useCustomSMTP && $SMTPPort != "" || isset( $params['port'] ) )
	{
		$mail->Port = isset( $params['port'] ) ? $params['port'] + 0 : $SMTPPort + 0;  // set the SMTP port
	}
	else if( ini_get('smtp_port') != '' )
	{
		 $mail->Port = ini_get('smtp_port') + 0;
	}

	$mail->SMTPSecure = GetGlobalData("SMTPSecure", "");

	$mail->Subject = $params['subject'];

	$from = isset( $params['from'] ) ? $params['from'] : "";
	if( !$from )
		$from = GetGlobalData("strFromEmail", "");

	try
	{
		$mail->SetFrom( $from, isset( $params['fromName'] ) ? $params['fromName'] : "" );
	}
	catch( phpmailerException $e )
	{
		return array( "mailed" => false, "message"=>  $e->getMessage()  );
	}

	$to = isset( $params['to'] ) ? $params['to'] : "";
	if( $to != "" )
	{
		$arr_to = parse_addr_list( $to );
		foreach( $arr_to as $email )
		{
			$mail->AddAddress( $email['addr'], $email['name'] );
		}
	}

	// replyTo
	if ( isset( $params['replyTo'] ) )
		$mail->AddReplyTo( $params['replyTo'], "" );

	$body = isset( $params['body'] ) ? $params['body'] : "";

	// body, htmlbody
	if ( isset( $params['htmlbody'] ) )
	{
		$mail->AltBody = $body;
		$mail->MsgHTML( $params['htmlbody'] );
	}
	else
	{
		$mail->Body = $body;
	}

	// charset
	if ( isset( $params['charset'] ) )
		$mail->CharSet = $params['charset'];
	else
		$mail->CharSet = "utf-8";

	// priority
	if( isset( $params['priority'] ) )
		$mail->Priority = $params['priority'];

	// CC
	if( isset( $params['cc'] ) )
	{
		$arr_cc = parse_addr_list( $params['cc'] );
		foreach( $arr_cc as $cc )
		{
			$mail->AddCC( $cc['addr'], $cc['name'] );
		}
	}

	// BCC
	if( isset( $params['bcc'] ) )
	{
		$arr_bcc = parse_addr_list( $params['bcc'] );
		foreach( $arr_bcc as $bcc )
		{
			$mail->AddBCC( $bcc['addr'], $bcc['name'] );
		}
	}

	if( isset( $params['attachments'] ) && is_array( $params['attachments'] ) )
	{
		foreach ( $params['attachments'] as $attachment )
		{
			$mail->AddAttachment( $attachment['path'],
				isset( $attachment['name'] ) ? $attachment['name'] : '',
				isset( $attachment["encoding"] ) ? $attachment["encoding"] : 'base64',
				isset( $attachment["type"] ) ? $attachment["type"] : 'application/octet-stream' );
		}
	}

	try
	{
		$res = $mail->Send();
	}
	catch( phpmailerException $e )
	{
		return array( "success" => false, "mailed" => false, "message"=> $e->getMessage() );
	}

	return array( "success" => $res, "mailed" => $res, "message"=> $mail->ErrorInfo );
}

/**
 * @intellisense
 */
function getFileNameFromURL()
{
	$scriptname = $_SERVER["PHP_SELF"];
	$pos = strrpos($scriptname, "/");
	if($pos !== FALSE)
		$scriptname = substr($scriptname, $pos + 1);
	return $scriptname;
}

/**
 * @intellisense
 */
function strlen_bin(&$str)
{
	return strlen($str);
}

/**
 * The code of ODBCFunctions::stripSlashesBinary was
 * refactored as db_stripslashesbinaryAccess function
 * to convert in ASP correctly
 * @param String str
 * @return String
 * @intellisense
 */
function db_stripslashesbinaryAccess($str)
{
	if( is_array($str) )
		$str = implode('', $str);

	//	try to remove ole header for BMP pictures
	$pos = strpos($str, ".Picture");
	if( $pos === false || $pos > 300 )
		return $str;

	$pos1 = strpos($str, "BM", $pos);
	if( $pos1 === false || $pos1 > 300 )
		return $str;

	return substr($str, $pos1);
}

/**
 * @intellisense
 */
function SendContentLength($len)
{
	header("Content-Length: ".$len);
}

/**
 * @intellisense
 */
function DecodeUTF8($str)
{
	return $str;
}
/**
 * @intellisense
 */
function escapeEntities($str)
{
	return $str;
}

/**
 * @intellisense
 */
function empty_error_handler()
{
	return true;
}

/**
 * @intellisense
 */
function n_printDebug()
{
}

/**
 * @param Array arr
 */
function getArrayWithoutObjects( $arr, &$print_r_depth )
{
	$copyArr = $arr;
	++$print_r_depth;
	foreach( $arr as $idx => $val )
	{
		$type = gettype( $val );

		if( $type == "object" )
			$copyArr[ $idx ] = get_class( $val )." Object";

		if( $type == "array" )
		{
			if( $print_r_depth < 5 )
				$copyArr[ $idx ] = getArrayWithoutObjects( $val, $print_r_depth );
			else
				$copyArr[ $idx ] = "Array";
		}
	}
	--$print_r_depth;
	return $copyArr;
}

/**
 * @param Mixed value
 * @param Boolean return
 * @param Number n
 */
function runner_print_r( $value, $return = false )
{
	$print_r_depth = 0;
	$valueCopy = $value;
	$type = gettype( $value );

	if( $type == "object" )
		$valueCopy = get_class( $valueCopy )." Object";

	if( $type == "array" )
		$valueCopy = getArrayWithoutObjects( $valueCopy, $print_r_depth );

	return print_r( $valueCopy, $return );
}

/**
 * @param Mixed value
 * @param Boolean return
 * @param Number n
 */
function runner_print_r_plain($value, $return = false)
{
	// print only one level of array
	if (gettype($value) == "array") {
		$depth = 4;
		return runner_print_r(getArrayWithoutObjects($value, $depth), $return);
	}
	return runner_print_r($value, $return);
}

/**
 * @intellisense
 */
function in_arrayi($needle, $haystack)
{
	$found = false;
    foreach( $haystack as $value )
	{
        if( strtolower( $value ) == strtolower( $needle ) )
            $found = true;
    }
    return $found;
}

/**
 * @intellisense
 */
function f_printDebug()
{

	$f = fopen("_dataLog.txt", "a");
	$trace = debug_backtrace();
	fwrite($f, var_export($trace[0]['args'], true));
	fclose($f);

}

if(!function_exists("hex2bin"))
{
/**
 * Convert HEX string to BIN string
 * @param {string} HEX source string
 * @return {string} BIN string
 * @intellisense
 */
function hex2bin($source)
	 {
		if(!is_string($source) || strlen($source) == 0 || strlen($source) % 2 > 0)
			return '';
		$bin = "";
		$i = 0;
		do {
			$bin .= chr(hexdec($source[$i].$source[$i + 1]));
			$i += 2;
		} while ($i < strlen($source));
		return $bin;
	}
}

/**
 * @intellisense
 */
function toPHPTime($datevalue)
{
	$arr = db2time($datevalue);
	return mktime($arr[3],$arr[4],$arr[5],$arr[1],$arr[2],$arr[0]);
}

/**
 *
 * @param resource $image
 * @param string $file_path JPG/JPEG file, function reads* EXIF header
 * @return resource|null
 */
function exifRotateImage($image, $file_path) {
	/*
	define('ROTATE_0', 1);
	define('ROTATE_0_MIRROR', 2);
	define('ROTATE_180', 3);
	define('ROTATE_180_MIRROR', 4);
	define('ROTATE_90', 5);
	define('ROTATE_90_MIRROR', 6);
	define('ROTATE_270', 7);
	define('ROTATE_270_MIRROR', 8);
	*/

	$exif = exif_read_data($file_path);

	if (!$exif) {
		return false;
	}

	$orientation = $exif['Orientation'];

	$rotated = null;
	$success = true;
	//definition of values commented at the start of this function
	switch ($orientation) {
		case 0:
		case 1:
			$rotated = imagerotate($image, 0, 0);
			break;
		case 2:
			$success = imageflip($image, IMG_FLIP_HORIZONTAL);
			break;
		case 3:
			$rotated = imagerotate($image, 180, 0);
			break;
		case 4:
			$rotated = imageflip($image, IMG_FLIP_VERTICAL);
			break;
		case 5:
			$rotated = imagerotate($image, -90, 0);
			$success = imageflip($rotated, IMG_FLIP_HORIZONTAL);
			break;
		case 6:
			$rotated = imagerotate($image, -90, 0);
			break;
		case 7:
			$rotated = imagerotate($image, 90, 0);
			$success = imageflip($rotated, IMG_FLIP_HORIZONTAL);
			break;
		case 8:
			$rotated = imagerotate($image, 90, 0);
			break;
		default:
			return null;
	}

	if (!$success) {
		@imagedestroy($rotated);
		$rotated = null;
	}

	return $rotated;
}

/**
 * @intellisense
 */
function imageCreateThumb($new_width,$new_height,$img_width,$img_height,$file_path,$options,$new_file_path,$uploadedFile)
{
	$new_img = @imagecreatetruecolor($new_width, $new_height);
	switch ( $uploadedFile["type"]) {
		case "image/jpeg":
		case "image/pjpeg":
			$src_img = @imagecreatefromjpeg($file_path);
			$image_quality = isset($options['jpeg_quality']) ?
				$options['jpeg_quality'] : 75;
			$success = @imagecopyresampled(
					$new_img,
					$src_img,
					0, 0, 0, 0,
					$new_width,
					$new_height,
					$img_width,
					$img_height
			);

			if (!$success)
				break;

			if (function_exists("exif_read_data")) {
				$rotated_img = exifRotateImage($new_img, $file_path);
			}

			if ($rotated_img) {
				@imagedestroy($new_img);
				$new_img = $rotated_img;
			}

			$success = @imagejpeg($new_img, $new_file_path, $image_quality);


			break;
	case "image/gif":
			@imagecolortransparent($new_img, @imagecolorallocate($new_img, 0, 0, 0));
			$src_img = @imagecreatefromgif($file_path);
			$image_quality = null;
			$success = @imagecopyresampled(
					$new_img,
					$src_img,
					0, 0, 0, 0,
					$new_width,
					$new_height,
					$img_width,
					$img_height
				) && imagegif($new_img, $new_file_path, $image_quality);
			break;
	case "image/png":
	case "image/x-png":
			@imagecolortransparent($new_img, @imagecolorallocate($new_img, 0, 0, 0));
			@imagealphablending($new_img, false);
			@imagesavealpha($new_img, true);
			$src_img = @imagecreatefrompng($file_path);
			$image_quality = isset($options['png_quality']) ?
				$options['png_quality'] : 9;
			$success = @imagecopyresampled(
					$new_img,
					$src_img,
					0, 0, 0, 0,
					$new_width,
					$new_height,
					$img_width,
					$img_height
				) && imagepng($new_img, $new_file_path, $image_quality);
			break;
		default:
			$src_img = null;
			$success = false;
	}
	// Free up memory (imagedestroy does not delete files):
	@imagedestroy($src_img);
	@imagedestroy($new_img);
	return $success;
}
/**
 * Return standardized list of uploaded files
 * @param String paramName - HTTP POST parameter name
 */
function uploadFiles( $paramName )
{
	$result = null;
	if(isset($_FILES[$paramName])){
		$result = array();
		$upload = $_FILES[$paramName];
		if(is_array($upload['tmp_name'])) {
            foreach ($upload['tmp_name'] as $index => $value)
            {
            	$tempFile = array();
				$tempFile['tmp_name'] = $upload['tmp_name'][$index];
                $tempFile['name'] = $upload['name'][$index];
                $tempFile['size'] = $upload['size'][$index];
                $tempFile['type'] = $upload['type'][$index];
                $tempFile['error'] = $upload['error'][$index];
                $result[] = $tempFile;
            }
		}
		else
		{
			$result[] = $upload;
		}
	}
	return $result;
}
/**
 * @intellisense
 */
function upcount_name_callback($matches)
{
	$index = isset($matches[1]) ? intval($matches[1]) + 1 : 1;
	$ext = isset($matches[2]) ? $matches[2] : '';
	return ' ('.$index.')'.$ext;
}

/**
 * @intellisense
 */
function upcount_name($name)
{
	return preg_replace_callback(
		'/(?:(?: \(([\d]+)\))?(\.[^.]+))?$/',
		'upcount_name_callback',
		$name,
		1
	);
}

/**
 * @intellisense
 */
function trim_file_name($name, $type, $index, $obj)
{
        // Remove path information and dots around the filename, to prevent uploading
        // into different directories or replacing hidden system files.
        // Also remove control characters and spaces (\x00..\x20) around the filename:
        $file_name = trim(basename($name,""));
        // Add missing file extension for known image types:
        if (strpos($file_name, '.') === false &&
            preg_match('/^image\/(gif|jpe?g|png)/', $type, $matches)) {
            $file_name .= '.'.$matches[1];
        }
        while(isset($_SESSION["mupload_".$obj->formStamp][$file_name])) {
            $file_name = upcount_name($file_name);
        }
        return $file_name;
    }

/**
 * @intellisense
 */
function upload_File($uploadedFile, $destination)
{
	if ($uploadedFile && is_uploaded_file($uploadedFile["tmp_name"]))
	{
		move_uploaded_file($uploadedFile["tmp_name"], $destination);
		clearstatcache();
		clearstatcache();
	}
}

/**
 * GDExist
 * Fake function. Only matter something for ASP, because in PHP GD always exist (since 4.3.0)
 * @intellisense
 */
function GDExist()
{
	return true;
}

/**
 * @intellisense
 */
function makeSurePathExists($abspath)
{
	if(!file_exists($abspath))
	{
		return mkdir($abspath, 0777,  true);
	}
	if(is_dir($abspath))
		return true;
	return false;
}

function createEventClass( $table )
{
	$className = "eventclass_" . GetTableUrl( $table );
	return new $className();
}


/**
 * @intellisense
 */
function createControlClass($className, $field, $pageObject, $id, $connection)
{
	include_once(getabspath("classes/controls/".$className.".php"));
	return new $className($field, $pageObject, $id, $connection);
}

/**
 * @intellisense
 */
function createViewControlClass($className, $field, $container, $pageObject)
{
	include_once(getabspath("classes/controls/".$className.".php"));
	return new $className($field, $container, $pageObject);
}

/**
 * @intellisense
 */
function getQueryString()
{
	return getenv('QUERY_STRING') ? urldecode(getenv('QUERY_STRING')) : $_SERVER["QUERY_STRING"];
}

/**
 * GetTableLink
 * Form proper link for table. Really need for ASP.Net MVC
 * @param {string} Table name
 * @param {string} Page type
 * @param (string) GET query string
 */
function GetTableLink($table, $pageType = "", $getParams = "")
{
	$url = $table;
	if($pageType != "")
	{
		$url .= "_".$pageType;
	}
	$url .= ".php";
	if($getParams != "")
	{
		$url .= "?".$getParams;
	}

	return $url;
}

/**
 * GetLocalLink
 * Only needed in .NET
 *
 * @param {string} Table name
 * @param {string} Page type
 * @param (string) GET query string
 */
function GetLocalLink($table, $pageType = "", $getParams = "")
{
	//	used in ASP.NET only
	return GetTableLink( $table, $pageType, $getParams );
}


function GetTemplateName($table, $templateName)
{
	if( $templateName == "" )
		return ".global_" . $table . ".htm";

	if( $table == "" ) {
		return $templateName . ".htm";
	}
	return $table."_".$templateName . ".htm";
}

function HeaderRedirect($table, $pageType = "", $getParams = "")
{
	header("Location: ".GetTableLink($table, $pageType, $getParams));
}

function cross_sort_arr_y($a,$b)
{
	global $group_sort_y;
	if($group_sort_y[$a]>$group_sort_y[$b])
		return true;
	else
		return false;
}

function SortForCrossTable(&$sort_y)
{
	usort($sort_y, "cross_sort_arr_y");
}

function getYMDdate($unixTimeStamp)
{
	return date("Y-m-d", $unixTimeStamp);
}

function getHISdate($unixTimeStamp)
{
	return date("H:i:s", $unixTimeStamp);
}

function IsJSONAccepted()
{
	return isset($_SERVER['HTTP_ACCEPT']) && (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false);
}

function GetRootPathForResources($filePath)
{
	return $filePath;
}

/**
 * DEPRECATED
 * might been used in business templates
 */
function GetPageURLWithGetParams()
{
	$pagename = $_SERVER["REQUEST_URI"];
	if(!$pagename)
	{
		$pagename=basename(__file__);
		$params="";
		foreach($_GET as $k=>$v)
		{
			if(strlen($params))
				$params.="&";
			$params.=rawurlencode($k)."=".rawurlencode($v);
		}
		if(strlen($params))
			$pagename.="?".$params;
	}
	if(strpos($pagename,"?")===false)
	{
		$pagename.="?pdf=1";
	}
	else
	{
		$pagename.="&pdf=1";
	}

	return $pagename;
}

/*
 * Dummy for ASP.Net MVC
 */
function GetWebRootPath()
{
	return "";
}

function GetCaptchaPath()
{
	return "securitycode.php";
}

function GetCaptchaSwfPath()
{
	return "securitycode.swf";
}


/**
 * This function is used for my_json_encode() function.
 * It will emulate the JSON_UNESCAPED_UNICODE option for json_encode() function.
 */
function json_mb_encode_numericentity(&$item, $key)
{
	if (is_string($item))
		$item = runner_encode_numeric_entity($item, array(0x80, 0xffff, 0, 0xffff), 'UTF-8');
}

function makeFloat($value)
{
	$value = str_replace(",",".",$value);
	if(is_numeric($value))
		return (float)$value;
	else
		return "";
}

/**
 * Get the data array containing the flag indicating if
 * the string passed is HTML entity and the length of
 * the HTML entity that is set by the string
 * @param String encodedEntity
 * @return Array
 */
function getHTMLEntityData($encodedEntity)
{
	$entity = html_entity_decode( $encodedEntity );
	if( $encodedEntity == $entity )
		return array("isHTMLEntity"=> false, "entityLength"=> 0);

	return array("isHTMLEntity"=> true, "entityLength"=> runner_strlen( $entity ));
}

/**
 * PHP html entity decode
 */
function runner_html_entity_decode($str)
{
	// '&nbsp;' entity is not ASCII code 32 but ASCII code 160 (0xa0)
	return html_entity_decode(str_replace('&nbsp;', ' ', $str), ENT_COMPAT | ENT_HTML401, 'ISO-8859-1');
}

/**
 * PHP htmlspecialchars wrapper
 */
function runner_htmlspecialchars($str)
{
	global $useUTF8;

	if($useUTF8)
		return htmlspecialchars($str, ENT_HTML5 | ENT_IGNORE | ENT_COMPAT);

	return htmlspecialchars($str, ENT_IGNORE | ENT_COMPAT | ENT_HTML401, 'ISO-8859-1');
}

/**
 * PHP strlen wrapper
 */
function runner_strlen($str)
{
	global $useUTF8, $mbEnabled;

	if( !$useUTF8 )
		return strlen($str);

	if( $mbEnabled )
		return mb_strlen($str, 'UTF-8');

	//php.net not ISO-8859-1 characters are converted to '?' (one char).
	return strlen( utf8_decode($str) );
}

/**
 * PHP strpos wrapper
 */
function runner_strpos($haystack, $needle, $offset = 0)
{
	global $useUTF8, $mbEnabled;

	if( !$useUTF8 )
		return strpos($haystack, $needle);

	if( $mbEnabled )
		return mb_strpos($haystack, $needle,  $offset, 'UTF-8');

	if( $offset < 0 )
		return FALSE;

	if( $offset > 0 )
		$haystack = runner_substr($haystack, $offset, runner_strlen($haystack) - $offset);

	$pos = strpos($haystack, $needle);
	if( $pos === FALSE )
		return $pos;

	return $offset + runner_strlen( substr($haystack, 0, $pos) );
}

/**
 * PHP strrpos wrapper
 */
function runner_strrpos($haystack, $needle, $offset = 0)
{
	global $useUTF8, $mbEnabled;

	if( !$useUTF8 )
		return strrpos($haystack, $needle, $offset);

	if( $mbEnabled )
		return mb_strrpos($haystack, $needle, $offset, 'UTF-8');

	if( $offset < 0 )
		$offset = runner_strlen($haystack) + $offset;

	if( $offset > 0 )
		$haystack = runner_substr($haystack, $offset, runner_strlen($haystack) - $offset);

	$rpos = strrpos($haystack, $needle);
	if( $rpos === FALSE )
		return $rpos;

	return $offset + runner_strlen( substr($haystack, 0, $rpos) );
}

/**
 * PHP substr wrapper
 * @param String string
 * @param Number start (>= 0)
 * @param Number length (>= 0)
 * @return String
 */
function runner_substr($string, $start, $length = -1)
{
	if( $length < 0 ) {
		$length = runner_strlen( $string ) - $start;
	}
	if( !$length )
		return "";

	global $useUTF8, $mbEnabled;

	if( !$useUTF8 )
		return substr($string, $start, $length);

	if( $mbEnabled )
		return mb_substr($string, $start, $length, 'UTF-8');

	$end = $start + $length;
	//j is the real chars counter;
	$u8start = $u8end = $j = 0;
	for($i = 0; $i < strlen($string), $j < $end; $i++)
	{
		if($j == $start)
			$u8start = $i;

		$ordord = ord($string[$i]);
		switch(true)
		{
			case (0xFC == (0xFC & $ordord)):
				$i = $i + 5;
			break;
			case (0xF8 == (0xF8 & $ordord)):
				$i = $i + 4;
			break;
			case (0xF0 == (0xF0 & $ordord)):
				$i = $i + 3;
			break;
			case (0xE0 == (0xE0 & $ordord)):
				$i = $i + 2;
			break;
			case (0xC0 == (0xC0 & $ordord)) :
				$i = $i + 1;
		}
		$j++;
	}
	$u8end = $i;

	return substr($string, $u8start, $u8end - $u8start );
}

/**
 * PHP mb_convert_encoding wrapper
 * @return String	Initial or converted
 */
function runner_convert_encoding( $str, $to_encoding, $from_encoding ) {
	global $mbEnabled;

	if( $mbEnabled ) {
		$ret = mb_convert_encoding( $str, $to_encoding, $from_encoding );
		if( $ret !== false )
			return $ret;
	}
	return $str;
}

/**
 * PHP mb_encode_numericentity wrapper
 */
function runner_encode_numeric_entity($str, $convmap, $encoding)
{
	global $mbEnabled;

	if( $mbEnabled )
		return mb_encode_numericentity($str, $convmap, $encoding);

	return $str;
}

/**
 * PHP mb_decode_numericentity wrapper
 */
function runner_decode_numeric_entity($str, $convmap, $encoding)
{
	global $mbEnabled;

	if( $mbEnabled )
		return mb_decode_numericentity($str, $convmap, $encoding);

	return $str;
}

function hasNonAsciiSymbols($str)
{
	$str = "".$str;
	for($i=0; $i<strlen($str); $i++)
	{
		if(ord($str[$i])>127)
			return true;
	}
	return false;
}

function runner_serialize_array($arr)
{
	return serialize($arr);
}

function runner_unserialize_array($arr)
{
	return unserialize($arr);
}

function runner_getimagesize($file_name, $uploadedFile)
{
	return @getimagesize($file_name);
}

function array_merge_assoc($arr1, $arr2)
{
	return array_merge($arr1, $arr2);
}

function getIntervalLimitsExpressions($table, $field, $idx, $isLowerBound)
{
	return getIntervalLimitsExprs($table, $field, $idx, $isLowerBound);
}

/**
 * @return Boolean
 */
function useMySQLiLib()
{
	global $useOldMysqlLib;

	if( !$useOldMysqlLib )
		return extension_loaded("mysqli") === true;

	return extension_loaded("mysql") !== true;
}

/**
 * @return Boolean
 */
function isSqlsrvExtLoaded()
{
	return extension_loaded("sqlsrv") === true;
}

/**
 * @return Boolean
 */
function useMSSQLWinConnect()
{
	return strtoupper(substr(PHP_OS, 0, 3)) == "WIN" && substr(PHP_VERSION, 0, 1) > '4' && class_exists ('COM');
}

/**
 * @return Boolean
 */
function windowsOS() {
	return strtoupper(substr(PHP_OS, 0, 3)) == "WIN";
}

/**
 * @param String line
 * @param String bom? UTF-8 default
 * fix it!
 */
function cutBOM( $line, $bom = "\xEF\xBB\xBF" ) {
	if( substr( $line, 0, strlen( $bom ) ) == $bom )
		return substr( $line, strlen( $bom ) );

	return $line;
}

function printBOM()
{
	echo "\xEF\xBB\xBF";
}

function runner_save_textfile( $fileName, $txtData )
{
	runner_save_file( $fileName, $txtData );
}

function deleteTemporaryFilesFromDirTMP()
{
	return false;
}

function runner_date_format($param, $date="")
{
	if($date == "")
		return date($param);
	else
		return date($param, $date);
}

function runner_set_page_timeout( $seconds )
{
	if( !ini_get("safe_mode") )
		set_time_limit(300);
}

/**
 * password_hash wrapper
 */
function getPasswordHash( $pass )
{
	return password_hash( $pass, PASSWORD_BCRYPT );
}

/**
 * password_hash wrapper
 */
function passwordVerify( $pass, $hash )
{
	return password_verify( $pass, $hash ) ;
}


function callDashboardSnippet($dashName, $dashElem)
{
	$snippetData = array();
	ob_start();
	$header = "";
	$icon = $dashElem["item"]["icon"];
	$funcName = "event_" . GoodFieldName($dashElem['snippetId']);
	$eventObj = getEventObject($dashName);
	if ($eventObj !== null) {
		$eventObj->$funcName($header, $icon);
	}
	$snippetData["header"] = $header;
	$snippetData["icon"] = $icon;
	$snippetData["body"] = ob_get_contents();
	ob_end_clean();
	return $snippetData;
}

/**
 *	Wrapper for preg_match_all function with PREG_OFFSET_CAPTURE parameter
 *  Returns array of these elements:
 *  Array (
 *		"match" => <full match string>
 *		"offset" => <offset of the match in the original string>
 *		"submatches" => <array of submatch strings>
 *	)
 *
 */
function findMatches( $pattern, $str )
{
	$matches = array();
	$ret = array();
	preg_match_all( $pattern, $str, $matches, PREG_OFFSET_CAPTURE );
	$submatches = count( $matches ) - 1;
	foreach( $matches[0] as $i => $m )
	{
		$match["match"] = $m[0];
		$match["offset"] = $m[1];
		$match["submatches"] = array();
		for( $j = 0; $j < $submatches; ++$j )
		{
			$match["submatches"][] = $matches[ $j+1 ][ $i ][ 0 ];
		}
		$ret[] = $match;
	}

	return $ret;
}

function getPageStrings( $tableName ) {
	require_once( getabspath("include/".$tableName."_pages.php"  ));
	return $pageStrings;
}

function importTableSettings( $table )
{
	global $tables_data, $field_labels, $fieldToolTips, $placeHolders, $page_titles, $detailsTablesData, $masterTablesData, $bSubqueriesSupported;
	include_once(getabspath("include/".GetTableURL($table)."_settings.php"));
}

function importPageOptions( $table, $page )
{
	if( !$page )
		return;
	global $pd_pages, $page_options;
	if( !isset( $page_options[ $table ] ) ) {
		$page_options[ $table ] = array();
		$pd_pages[ $table ] = array();
	}
	if( isset( $page_options[ $table ][ $page ] ) )
		return;
	include_once(getabspath("include/pages/".GetTableURL($table)."_".$page.".php"));
	$page_options[ $table ][ $page ] = $optionsArray;
	$pd_pages[ $table ][ $page ] = $pageArray;
}

function loadMaps( $pSet ) {
	global $globalEvents;
	foreach($pSet->maps() as $m ) {
		$funcname = "event_" . GoodFieldName( $m );
		$param = array();
		$globalEvents->$funcname( $param );
	}

}

function importTableInfo( $varname ) {
	global $dal_info;
	include_once( getabspath( "include/dal/" . $varname . ".php" ) );
}

function cloneArray( $arr ) {
	//	workaround for some bug in PHP 5.5
	$newArr = array();
	foreach( array_keys( $arr ) as $k )
	{
		$newArr[$k] = $arr[$k];
	}
	return $newArr;
}


function simplify_file_name( $file_name )
{
	$newNameArr = array();

	for( $i = 0; $i < strlen( $file_name ); ++$i ) {
		$c = substr( $file_name, $i, 1 );
		if( ord( $c ) < 128 )
			$newNameArr[] = $c;
		else
			$newNameArr[] = "_";
	}
	return implode("", $newNameArr );
}

/**
 * Returns project path
 * Starts and ends with /
 */
function projectPath() {
	$uri = $_SERVER['REQUEST_URI'];
	//	cut off query parameters, since '/' sign can appear in parameters unescaped
	$questionPos = strpos( $uri, '?' );
	if( $questionPos !== false ) {
		$uri = substr( $uri, 0, $questionPos );
	}
	$dash = strrpos( $uri, '/' );
	if( $dash === false )
		return '/';
	return substr( $uri, 0, $dash + 1 );
}

function hash_hmac_sha256($data, $key, $raw_output = false) {
	return hash_hmac('sha256', $data, $key, $raw_output);
}

function hash_hmac_sha1($data, $key, $raw_output = false) {
	return hash_hmac('sha1', $data, $key, $raw_output);
}

function hash_sha256($data ) {
	return hash( 'sha256', $data );
}



function fbCreateObject( $appId, $appSecret ) {
	include_once getabspath('plugins/facebook/facebook.php');
	return new Facebook(array(
		'appId'  => $appId,
		'secret' => $appSecret
	));
}

function fbGetUserInfo( $fbObj, $srToken )
{
	$ret = array();
	$ret["error"] = false;
	$ret["info"] = array();

	if( !isset( $_REQUEST['signed_request'] ) && $srToken )
		$_REQUEST['signed_request'] = $srToken;

	try
	{
		$uid = $fbObj->getUser();
		$ret["info"] = $fbObj->api('/me?fields=email,name,picture');
	}
	catch( FacebookApiException $e )
	{
		//runner_print_r($e->getMessage());
		$ret["error"] = $e->getMessage();
	}

	return $ret;
}

// not used
function fbGetSignedRequest( $fbObj ) {
	return $fbObj->getSignedRequest();
}

function fbDestroySession( $fbObj ) {
	return $fbObj->destroySession();
}

/**
 * @param String $image - binary string
 * @return Array array( width => x, height => y ) or false
 */
function getImageDimensions( $image )
{
	if(!function_exists("imagecreatefromstring"))
		return false;

	$error_handler=set_error_handler("empty_error_handler");
	$img = imagecreatefromstring($image);
	if($error_handler)
		set_error_handler($error_handler);

	if(!$img)
		return false;

	return array(
		"width" => imagesx($img),
		"height" => imagesy($img)
	);
}

function getHttpHeader( $name ) {
	$envName = 'HTTP_' . strtoupper( $name );
	if( isset( $_SERVER[ $envName ]) )
		return $_SERVER[ $envName ];
	if( function_exists( 'getallheaders' )) {
		$headers = getallheaders();
		return $headers[ $name ];
	}
	return null;
}

/**
 * @param Array $time array(year,month,day,hour,minute,second)
 * @return Number Week number of the given year
 */
function weeknumber($time)
{
	$tt = mktime($time[3],$time[4],$time[5],$time[1],$time[2],$time[0]);
	return (int)strftime("%U", $tt );
}

function debugVar( $v, $text = "" ) {
	echo $text;
	echo "<pre>";
	var_dump( $v );
	echo "</pre>";
}

function showError( $message ) {
	trigger_error($message, E_USER_ERROR );
}

function parseQueryString( $str ) {
	$result = array();
	parse_str( $str, $result );
	return $result;
}

/**
 * append header without replacing
 */
function addHeader( $header ) {
	header( $header, false );
}

/**
 * @param String jwt
 * @param Array jwk
 * @return Array|false
 */
function verifyOpenIdToken( $jwt, $jwk ) {
	$parts = explode('.', $jwt);
	if( count( $parts) != 3 )
		return false;

	$signature = base64_decode_url_binary( $parts[2] );
	$dataToVerify = utf8_decode( $parts[0]. "." . $parts[1] );
	$pem = convertToPem( $jwk );

	$res = openssl_verify( $dataToVerify,  $signature , $pem, OPENSSL_ALGO_SHA256 );
	if ( $res === 1 )
		return Security::parseJWT( $jwt );

	return false;
}

/**
 * @param Array jwk
 * @return String
 */
function convertToPem( $jwk ) {
	require_once( getabspath("include/jwkToPem.php") );
	return _convertToPem( $jwk );
}

function runner_base32_encode( $str ) {
	require_once( getabspath('classes/base32.php') );
	return RunnerBase32::encode( $str );
}

function runner_base32_decode( $str ) {
	require_once( getabspath('classes/base32.php') );
	return RunnerBase32::decode( $str );
}

function calculateTotpCode( $secret ) {
/*
 * @author Michael Kliewe
 * @copyright 2012 Michael Kliewe
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 *
 * @link http://www.phpgangsta.de/
 */
	$codeLength = 6;
	$timeSlice = floor(time() / 30);
	$secretkey = runner_base32_decode($secret);

	// Pack time into binary string
	$time = chr(0).chr(0).chr(0).chr(0).pack('N*', $timeSlice);
	// Hash it with users secret key
	$hm = hash_hmac('SHA1', $time, $secretkey, true);
	// Use last nipple of result as index/offset
	$offset = ord(substr($hm, -1)) & 0x0F;
	// grab 4 bytes of the result
	$hashpart = substr($hm, $offset, 4);

	// Unpak binary value
	$value = unpack('N', $hashpart);
	$value = $value[1];
	// Only 32 bits
	$value = $value & 0x7FFFFFFF;

	$modulo = pow(10, $codeLength);

	return str_pad($value % $modulo, $codeLength, '0', STR_PAD_LEFT);
}


/**
 * PHP str_getcsv function wrapper
 * @param String line
 * @param String delimiter
 * @return Array
 */
function parseCSVLineNew( $line, $delimiter ){
	return str_getcsv( $line, $delimiter );
}

/**
 * Get the uploded file's data from superglobals
 * @param String fileName
 * @return Mixed
 */
function getImportFileData( $fileName ) {
	return $_FILES[ $fileName ];
}

/**
 * @param String fname
 * @return String
 */
function getImportFileExtension( $fname ) {
	return getFileExtension( $_FILES[ $fname ]['name'] );
}

/**
 * @param String fname
 * @return String
 */
function getTempImportFileName( $fname )
{
	return $_FILES[ $fname ]['tmp_name'];
}

/**
 * Delete am import temp file
 * @param String filePath
 */
function deleteImportTempFile( $filePath ) {
	$error_handler = set_error_handler("empty_error_handler");

	runner_delete_file( $filePath );

	if( $error_handler )
		set_error_handler($error_handler);
}

/**
 * Get the list of file names from a particular directory
 * @param String dirPath
 * @return Array
 */
function getFileNamesFromDir( $dirPath ) {
	$fileNames = array();

	$dirHandle = opendir( $dirPath );
	if( $dirHandle )
	{
		while( false !== ($fileName = readdir($dirHandle)) )
		{
			$fileNames[] = $fileName;
		}
		closedir( $dirHandle );
	}

	return $fileNames;
}


/**
 * @param String fileName,
 * @param Boolean preview
 * @param String fileEncoding
 * @return String
 */
	function CSVFileToText( $fileName, $preview = false , $fileEncoding = "" ) {
	global $cCharset;

	// read 100kb chunk for preview
	$content = myfile_get_contents( $fileName, "r", $preview ? 102400 : 0 );
	if( !$content )
		return "";

	$BOM = "";
	if( !$fileEncoding ) {
		$fileEncoding = "";

		$BOMForEncoding = array(
			"UTF-8" => "\xEF\xBB\xBF",
			"UTF-16BE" => "\xFE\xFF",
			"UTF-16LE" => "\xFF\xFE",
		);

		foreach( $BOMForEncoding as $en => $bomSeq ) {
			if( substr( $content, 0, strlen( $bomSeq ) ) == $bomSeq ) {
				$BOM = $bomSeq;
				$fileEncoding = $en;
				break;
			}
		}
	}

	if( !$fileEncoding )
		return $content;

	$charsetToEncoding = array(
		"utf-8" => "UTF-8"
	);

	// TODO: redo dictionary charsetToEncoding
	$projectEncoding = $charsetToEncoding[ $cCharset ];
	if( !$projectEncoding )
		$projectEncoding = $cCharset;

	$content = cutBom( $content, $BOM );
	if( $fileEncoding != $projectEncoding )
		$content = runner_convert_encoding( $content, $projectEncoding, $fileEncoding );

	return $content;
}

function regenerateSessionId() {
	global $regenerateSessionOnLogin;
	if( $regenerateSessionOnLogin && function_exists("session_regenerate_id") ) {
		//	session gets regenerated on login only, no need to handle poor connections
		//	delete old session immediately
		session_regenerate_id( true );
	}
}

function importSecuritySettings() {
	global $globalSettings;
	if( $globalSettings["security"] ) {
		return;
	}
	require_once( getabspath( "include/securitySettings.php" ) );
	$globalSettings["security"] = &$securitySettings_var;
}

function importFontSettings() {
	global $globalSettings;
	if( $globalSettings["fonts"] ) {
		return;
	}
	require_once( getabspath( "include/fontsettings.php" ) );
	$globalSettings["fonts"] = &$fontSettings_var;
}

/**
 * Verify saml auth response
 * @param String response
 * @param String publicKey
 * @param String privateKey
 * @return Array|false
 */
function verifySamlResponse( $rawResponse, $publicKey, $privateKey ) {
	require_once( getabspath("classes/security/saml.php") );

	$response = new SAMLResponse( $rawResponse );
	return $response->verify( $publicKey, $privateKey );
}

function iso8601date( $timestamp ) {
	return gmdate( "Y-m-d\TH:i:s\Z", $timestamp );
}

function iso8601date_timestamp( $timestamp ) {
	return gmdate( "Ymd\THis\Z", $timestamp );
}

function savePrivateData( $id, $data ) {
	$file_name = strtolower( $id );
	$file_path = getabspath( "templates_c/".$file_name.".php" );
	$text = "<?php \$privateData = runner_json_decode( \"".addslashes( runner_json_encode( $data ) )."\"); ?>";
	runner_save_file( $file_path, $text );
}

function loadPrivateData( $id ) {
	$file_name = strtolower( $id );
	$file_path = getabspath( "templates_c/".$file_name.".php" );
	$privateData = null;
	include_once( $file_path );
	return $privateData;
}

function setCookieDirectly( $name, $value ) {
	$_COOKIE[$name] = $value;
}

?>