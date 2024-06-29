<?php

/////////////////////////////////////////////////////////////////////////////
// PHPRunner connect proxy
//
define('RUNNER_VERSION', '5.1');
/////////////////////////////////////////////////////////////////////////////

// check if the mysqli extension is enabled
$use_mysqli_ext = function_exists('mysqli_connect');

ini_set("display_errors","1");
ini_set("display_startup_errors","1");

$host = @$_REQUEST["host"];
$login = @$_REQUEST["login"];
$pwd = @$_REQUEST["pwd"];
$ssl = @$_REQUEST["ssl"];
$port = @$_REQUEST["port"];
$db = @$_REQUEST["db"];
$todo = @$_REQUEST["todo"];


$mysqliFieldTypesMap = array(
0 => "decimal", //MYSQL_TYPE_DECIMAL,
1 => "tiny", //MYSQL_TYPE_TINY,
2 => "short", //MYSQL_TYPE_SHORT,
3 => "int", //MYSQL_TYPE_LONG,
4 => "float", //MYSQL_TYPE_FLOAT,
5 => "double", //MYSQL_TYPE_DOUBLE,
6 => "", //MYSQL_TYPE_NULL,
7 => "timestamp", //MYSQL_TYPE_TIMESTAMP,
8 => "int", //MYSQL_TYPE_LONGLONG,
9 => "int", //MYSQL_TYPE_INT24,
10 => "date", //MYSQL_TYPE_DATE,
11 => "time", //MYSQL_TYPE_TIME,
12 => "datetime", //MYSQL_TYPE_DATETIME,
13 => "int", //MYSQL_TYPE_YEAR,
14 => "date", //MYSQL_TYPE_NEWDATE,
15 => "varchar", //MYSQL_TYPE_VARCHAR,
16 => "tiny", //MYSQL_TYPE_BIT,
17 => "timestamp", //MYSQL_TYPE_TIMESTAMP2,
18 => "datetime", //MYSQL_TYPE_DATETIME2,
19 => "time", //MYSQL_TYPE_TIME2,
246 => "decimal", //MYSQL_TYPE_NEWDECIMAL=246,
247 => "varchar", //MYSQL_TYPE_ENUM=247,
248 => "varchar", //MYSQL_TYPE_SET=248,
249 => "blob", //MYSQL_TYPE_TINY_BLOB=249,
250 => "blob", //MYSQL_TYPE_MEDIUM_BLOB=250,
251 => "blob", //MYSQL_TYPE_LONG_BLOB=251,
252 => "blob", //MYSQL_TYPE_BLOB=252,
253 => "varchar", //MYSQL_TYPE_VAR_STRING=253,
254 => "varchar", //MYSQL_TYPE_STRING=254,
255 => "blob" //MYSQL_TYPE_GEOMETRY=255
);


if( $todo == "connect" || $todo == "schema" )
{
	$conn = db_connect($host, $login, $pwd, $port, $ssl);
	if( !$conn )
	{
		echo "<div><font color=red>".db_error($conn)."</font></div>";
		$todo = "";
	}
}

if( $todo == "schema" )
{
	if( !select_db($db, $conn) )
	{
		echo "<div><font color=red>".db_error($conn)."</font></div>";
		$todo = "connect";
	}
	else
	{
		show_schema();
		exit();
	}
}

if( !$todo || $todo == "connect" )
{
?>
<html><body>
<form method="get" name="mainform" action="phprunner.php">
<input type="Hidden" name="todo" value="connect">
<table cellspacing="2" cellpadding="2" border="0">
<tr>
  <td nowrap>Server address</td>
  <td><input type="Text" name="host" value="<?php if(!$host) echo "localhost"; else echo htmlspecialchars($host);?>"></td>
</tr>
<tr>
	<td colspan=2>&nbsp;&nbsp;&nbsp;<label><input type="Checkbox" name="ssl" <?php echo($ssl ? "checked" : ""); ?>>SSL connection</label></td>
</tr>
<tr>
  <td nowrap>Username</td>
  <td><input type="Text" name="login" value="<?php echo htmlspecialchars($login);?>"></td>
</tr>
<tr>
  <td nowrap>Password</td>
  <td><input type="Text" name="pwd" value="<?php echo htmlspecialchars($pwd);?>"></td>
</tr>
<tr>
  <td nowrap>Port (if not 3306)</td>
  <td><input type="Text" name="port" value="<?php echo htmlspecialchars($port);?>"></td>
</tr>
<tr>
  <td></td>
  <td><input type="button" value="Connect" onclick="mainform.submit();"></td>
</tr>
<?php
if( $todo == "connect" )
{
?>
<tr>
  <td nowrap>Database</td>
  <td>
<?php
	$dblist = get_dbs_list($conn);
	if( $dblist && $row = db_fetch_array($dblist) )
	{
?>
  <select name="db">
<?php
    	while(true)
		{
			echo "<option value=\"".htmlspecialchars( $row["Database"] )."\">".htmlspecialchars( $row["Database"] )."</option>";
			if( !($row = db_fetch_array($dblist)) )
				break;
		}
?>
  </select>
<?php
	}
	else
	{
?>
	<input type="Text" name="db" size=30 maxlength=100 value="<?php echo htmlspecialchars($db);?>">
<?php
	}
?>
</td>
</tr>
<?php

?>
<tr>
  <td></td>
  <td><input type="button" value="Show schema" onclick="if(this.form.db.tagName=='INPUT' && this.form.db.value=='') {alert('Enter your database name first.'); return false;} this.form.todo.value='schema'; this.form.submit();"></td>
</tr>
<?php
  }
?>
</table>
</form>
</body></html>
<?php
  return;
}

//	process PHPRunner 5.1 commands

if( $todo == 'version' )
{
	echo RUNNER_VERSION;
	return;
}

if( $todo == "exec5" )
{
	exec5();
	return;
}

if( $todo == "query5" )
{
	query5();
	return;
}

if( $todo == "testconnect5" )
{
	testconnect5();
	return;
}

//	process PHPRunner 5.0 commands
$conn = db_connect($host, $login, $pwd, $port, $ssl);
if(!$conn)
{
	echo htmlspecialchars( db_error($conn) );
	exit();
}

if( $todo == "testconnect" )
{
	echo "connected ok";
	return;
}

if( $todo == "exec" )
{
	if( $db && !select_db($db, $conn) )
	{
		echo htmlspecialchars( db_error($conn) );
		return;
	}
	$res = db_query( $_REQUEST["sql"], $conn );
	if( !$res )
		echo htmlspecialchars( db_error($conn) );
	else
		echo "1";
	return;
}

header("Content-type: text/xml");

if( $todo == "dbs" )
{
	$dblist = get_dbs_list($conn);
	echo '<?xml version="1.0" standalone="yes" ?>';
	echo "<databases>";
	while( $row = db_fetch_array($dblist) )
		echo "<database name=\"".htmlspecialchars( $row["Database"] )."\" />";
	echo "</databases>";
}
else if( $todo == "queryfields" )
{
	select_db($db, $conn) or showerror($conn);
	$sql = @$_REQUEST["sql"];
	if( !$sql )
		return;

	$sql.= " limit 0,0";
	$res = db_query($sql, $conn);

	echo '<?xml version="1.0" standalone="yes" ?>';
	echo "<fields>";
	ptintQueryFieldsInfo($res, $conn);
	echo "</fields>";
}
else if( $todo == "tables" )
{
	select_db($db, $conn) or showerror($conn);
	$tablist = get_tables_list($db, $conn);
	echo '<?xml version="1.0" standalone="yes" ?>';
	echo "<tables>";
	while( $row = db_fetch_numarray($tablist) )
	{
		echo "<table name=\"".htmlspecialchars( $row[0] )."\" />";
	}
	echo "</tables>";
}
else if( $todo == "tablefields" )
{
	$table = @$_REQUEST["table"];
	if( !$table )
		return;

	select_db($db, $conn) or showerror($conn);
	echo '<?xml version="1.0" standalone="yes" ?>';
	showtablefields($table);
}
else if( $todo == "queryvalues" )
{
	select_db($db, $conn) or showerror($conn);
	$sql = @$_REQUEST["sql"];
	if( !$sql )
		return;

	$sql.=" limit 0,200";
	$res = db_query($sql, $conn);
	if(!$res)
	{
		echo db_error($conn);
		return;
	}

	echo '<?xml version="1.0" standalone="yes" ?>';
	if( getFieldsNumberInLastQuery($res, $conn) == 1 )
	{
		echo "<values>";
		while( $row = db_fetch_numarray($res) )
		{
			echo "<value>".htmlspecialchars( $row[0] )."</value>";
		}
		echo "</values>";
	}
	else
	{
		echo "<rows>\r\n";
		while( $row = db_fetch_numarray($res) )
		{
			echo "<row>";
			for($i = 0; $i < count($row); $i++)
			{
				echo "<value>".htmlspecialchars( $row[$i] )."</value>";
			}
			echo "</row>\r\n";
		}
		echo "</rows>";
	}
}
else if( $todo == "queryvaluesraw" )
{
	select_db($db, $conn) or showerror($conn);
	$sql = @$_REQUEST["sql"];
	if( !$sql )
		return;

	$res = db_query($sql, $conn);
	if(!$res)
	{
		echo db_error($conn);
		return;
	}

	echo '<?xml version="1.0" standalone="yes" ?>';
	echo "<rows>\r\n";

	echo "<row>\r\n";
	printXMLFieldNames($res);
	echo "</row>\r\n";

	while( $row = db_fetch_numarray($res) )
	{
		echo "<row>\r\n";
		for($i = 0; $i < count($row); $i++)
		{
			echo "<value>".htmlspecialchars( $row[$i] )."</value>\r\n";
		}
		echo "</row>\r\n";
	}
	echo "</rows>\r\n";
}
else if( $todo == "queryvaluesstr" )
{
	select_db($db, $conn) or showerror($conn);
	$sql = @$_REQUEST["sql"];
	if( !$sql )
		return;
	$res = db_query($sql, $conn);
	if(!$res)
	{
		echo db_error($conn);
		return;
	}

	$binfields = array();
	$fieldNames = array();
	for($i = 0; $i < getFieldsNumberInLastQuery($res, $conn); $i++)
	{
		$finfo = getFieldInfo( $res, $i );

		$flags = strtolower( $finfo["flags"] );
		if( strpos($flags, "binary") !== false )
			$binfields[] = $i;

		$fieldNames[] = $finfo["name"];
	}

	echo '<?xml version="1.0" standalone="yes" ?>';
	echo "<rows>\r\n";
	echo "<row>\r\n";
	foreach($fieldNames as $fName)
	{
		echo "<value>".htmlspecialchars($fName)."</value>\r\n";
	}
	echo "</row>\r\n";

	while( $row = db_fetch_numarray($res) )
	{
		echo "<row>\r\n";
		for($i = 0; $i < count($row); $i++)
		{
			$ret = array_search($i, $binfields);
			if( $ret === FALSE || $ret === NULL )
				echo "<value>".htmlspecialchars( $row[$i] )."</value>\r\n";
			else
			{
				if ( strlen($row[$i]) == 0 )
					echo "<value>NULL</value>\r\n";
				else
					echo "<value>0x".bin2hex( $row[$i] )."</value>\r\n";
			}
		}
		echo "</row>\r\n";
	}
	echo "</rows>\r\n";
}


/**
 * Get query field data
 * @param object res		A result set identifier
 * @param number fieldnr	The field number
 * @return array
 */
function getFieldInfo($res, $fieldnr)
{
	global $use_mysqli_ext, $mysqliFieldTypesMap;

	if( $use_mysqli_ext )
	{
		$finfo = mysqli_fetch_field_direct($res, $fieldnr);
		$fieldType = @$mysqliFieldTypesMap[$finfo->type];
		$strFlags = "";
		if($finfo->flags & 512)
			$strFlags .= "auto_increment ";
		if($finfo->flags & 2)
			$strFlags .= "primary ";
		if($finfo->flags & 1)
			$strFlags .= "not_null ";
		if($finfo->flags & 128)
			$strFlags .= "binary ";
		return array( "name" => $finfo->name, "flags" => $strFlags, "type" => $fieldType, "length" => $finfo->length );
	}

	return array("name" => mysql_field_name($res, $fieldnr), "flags" => mysql_field_flags($res, $fieldnr), "type" => mysql_field_type($res, $fieldnr), "length" => mysql_field_len($res, $fieldnr));
}

/**
 * @param object $res	A result set identifier
 */
function printXMLFieldNames($res)
{
	global $use_mysqli_ext;

	if( !$use_mysqli_ext )
	{
		for($i = 0; $i < mysql_num_fields($res); $i++)
		{
			echo "<value>".htmlspecialchars( mysql_field_name($res, $i) )."</value>\r\n";
		}
		return;
	}

	while( $finfo = mysqli_fetch_fields($res) )
	{
		echo "<value>".htmlspecialchars( $finfo["name"] )."</value>\r\n";
	}
}

/**
 * @param object res	A result set identifier
 * @param mixed conn	A link identifier
 */
function ptintQueryFieldsInfo($res, $conn)
{
	for($i = 0; $i < getFieldsNumberInLastQuery($res, $conn); $i++)
	{
		$finfo = getFieldInfo( $res, $i );

		$flags = strtolower( $finfo['flags']);

		$type = $finfo['type'];
		if( $type == "blob" && strpos($flags, "binary") === false )
			$type = "text";

		echo "<field name=\"".htmlspecialchars( $finfo['name'] )."\" type=\"".htmlspecialchars($type)."\" size=\"".htmlspecialchars( $finfo['length'] )."\" ";

		if( !(strpos($flags, "auto_increment") === false) )
			echo "auto_increment=\"auto_increment\" ";
		if( !(strpos($flags, "primary_key") === false) )
			echo "key=\"PRI\" ";
		if( !(strpos($flags, "not_null") === false) )
			echo "null=\"\" ";
		else
			echo "null=\"YES\" ";
		echo " />";
	}
}


function showtablefields($table)
{
	global $conn;
	$fields = db_query("SHOW fields FROM `".$table."`", $conn);
	if( !$fields )
	{
		echo db_error($conn);
		exit();
	}
	echo "<fields>";
	while( $field = db_fetch_array($fields) )
	{
		$attr = array();
		$attr["name"] = $field["Field"];
		$type = $field["Type"];
		//  remove type modifiers
		if( substr($type, 0, 4) == "tiny" )
			$type = substr($type, 4);
		else if( substr($type, 0, 5) == "small" )
			$type = substr($type, 5);
		else if( substr($type, 0, 6) == "medium" )
			$type = substr($type, 6);
		else if( substr($type, 0, 3) == "big" )
			$type = substr($type, 3);
		else if(substr($type, 0, 4) == "long")
			$type = substr($type, 4);
		if( substr($type, 0, 4) == "enum")
        {
			$attr["values"] = substr($type, 5, strlen($type) - 6);
			$attr["type"] = "enum";
        }
        else if( substr($type, 0, 3) == "set" )
        {
			$attr["values"] = substr($type, 4, strlen($type) - 5);
			$attr["type"] = "set";
        }
        else
        {
			if( $pos = strpos($type, " ") )
				$type = substr($type, 0, $pos);
			// parse field sizes
			if( $pos = strpos($type, "(") )
			{
				if( $pos1 = strpos($type, ",", $pos) )
				{
					$attr["size"] = (integer)substr($type, $pos + 1, $pos1 - $pos - 1);
					$attr["scale"] = (integer)substr($type, $pos1 + 1, strlen($type) - $pos1 - 2);
				}
				else
				{
					$attr["size"] = (integer)substr($type, $pos + 1, strlen($type) - $pos - 2);
					$attr["scale"] = 0;
				}
				$type = substr($type, 0, $pos);
			}
			$attr["type"] = $type;
        }
        if( !(strpos($field["Extra"], "auto_increment") === false) )
			$attr["auto_increment"] = "auto_increment";
        $attr["key"] = $field["Key"];
        $attr["default"] = $field["Default"];
        $attr["null"] = $field["Null"];

        echo '<field ';
        foreach($attr as $key => $value)
		{
          echo $key.'="'.htmlspecialchars($value).'" ';
        }
		echo '/>';
	}
	echo "</fields>";
}

function showerror($conn)
{
	echo htmlspecialchars( db_error($conn) );
	exit();
}

function show_schema()
{
	global $conn;
	header("Content-type: text/xml");
	$phpversion = phpversion();
	// determine mysql version
	$mysqlversion = "unknown";
	$res = db_query("SHOW VARIABLES LIKE 'version'", $conn) or showerror($conn);
	if( $row = db_fetch_array($res) )
		$mysqlversion = $row["Value"];
	echo '<?xml version="1.0" standalone="yes" ?>';
?>
<phprunner phpversion="<?php echo htmlspecialchars($phpversion);?>" mysqlversion="<?php echo htmlspecialchars($mysqlversion);?>">
<tables>
<?php
	$tables = db_query("SHOW TABLES", $conn) or showerror($conn);
	if(!$tables)
	{
		echo db_error($conn);
		exit();
	}
	while( $table = db_fetch_numarray($tables) )
	{
?>
<table name="<?php echo htmlspecialchars( $table[0] );?>">
<?php
		showtablefields( $table[0] );
?>
</table>
    <?php
    }
?>
</tables>
</phprunner>
<?php
}


function connect5()
{
	$login = base64_decode( @$_REQUEST["login"] );
	$pwd = base64_decode( @$_REQUEST["pwd"] );
	$host = base64_decode( @$_REQUEST["host"] );
	
	$ssl = @$_REQUEST["ssl"];
	$port = @$_REQUEST["port"];
	$db = base64_decode( @$_REQUEST["db"] );
	
	$conn = db_connect($host, $login, $pwd, $port, $ssl);

	if( $conn && strlen($db) )
	{
		if( !select_db($db, $conn) )
		{
			db_close($conn);
			return false;
		}
		db_query("set names utf8", $conn);
	}
	return $conn;
}

function testconnect5()
{
	echo "start-script-output";
	if( $conn = connect5() )
	{
		echo "ok";
		db_close($conn);
	}
	else
		echo db_error($conn);
	echo "end-script-output";
	exit();
}

function exec5()
{
	$query = base64_decode( @$_REQUEST["query"] );
	echo "start-script-output";
	if( !($conn = connect5()) )
	{
		echo db_error($conn);
		echo "end-script-output";
		exit();
	}
	if( db_query($query, $conn) )
		echo "ok";
	else
		echo db_error($conn);
	echo "end-script-output";

	db_close($conn);
	exit();
}

function query5()
{
	$query = base64_decode( @$_REQUEST["query"] );
	$reccount = @$_REQUEST["reccount"] + 0;
	$skip = @$_REQUEST["skip"] + 0;
	$blobsaschars = $_REQUEST["blobsaschars"];

	echo "start-script-output";
	if( !($conn = connect5()) || !($rs = db_query($query, $conn)) )
	{
		echo db_error($conn);
		echo "end-script-output";
		exit();
	}

	$bfields = array();
	echo "<output>";

	//	display fields info
	echo "<fields>";
	for($i = 0; $i < getFieldsNumberInLastQuery($rs, $conn); $i++)
	{
		$finfo = getFieldInfo($rs, $i);
		$flags = strtolower( $finfo["flags"] );
		$type = $finfo["type"];
		$fieldName = $finfo["name"];

		if( $type == "blob" && ( strpos($flags, "binary") === false || $blobsaschars ) )
			$type = "text";

		echo "<field name=\"".xmlencode( $fieldName )."\" type=\"".xmlencode( $type )."\"";
		if( !$blobsaschars && strpos($flags, "binary") !== false && ( strpos($type, "char") !== false || strpos($type, "blob") !== false ) )
		{
			$bfields[] = true;
			echo ' binary="true"';
		}
		else
			$bfields[] = false;

		echo " />";
	}
	echo "</fields>";

	//	display query data
	echo "<data>";
	$recno = 0;
	while( $data = db_fetch_numarray($rs) )
	{
		$recno++;
		if( $recno <= $skip )
			continue;
		if( $reccount >= 0 && $recno + $skip > $reccount)
			break;
		echo "<row>";
		foreach($data as $i => $val)
		{
			if( is_null($val) )
				echo '<field null="true" />';
			else if( $bfields[$i] )
				echo '<field>0x'.bin2hex($val).'</field>';
			else
				echo '<field>'.xmlencode($val).'</field>';
		}
		echo "</row>";
	}
	echo "</data>";
	echo "</output>";
	echo "end-script-output";

	db_close($conn);
	exit();
}

function xmlencode($str)
{
	$str = str_replace("&", "&amp;", $str);
	$str = str_replace("<", "&lt;", $str);
	$str = str_replace(">", "&gt;", $str);
	$str = str_replace("\"", "&quot;", $str);
	return str_replace("'", "&apos;", $str);

	/*
	$out = "";
	$len = strlen($str);
	$ind = 0;
	for($i = 0; $i < $len; $i++)
	{
		if( ord($str[$i]) >= 128 )
		{
			if( $ind < $i )
				$out.= substr($str, $ind, $i - $ind);
			$out.= "&#".ord($str[$i]).";";
			$ind = $i + 1;
		}
	}
	if( $ind < $len )
		$out.= substr($str, $ind);

	return str_replace("'", "&apos;", $out);
	/**/
}


/**
 * Database connect wrapper
 * @param string host
 * @param string login
 * @param string password
 * @param string port
 * @return mixed			A link identifier
 */
function db_connect($host, $login, $password, $port, $ssl)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
	{
		if($ssl)
		{
			if( !$port )
				$port = '3306';
			$conn = @mysqli_init();
			@mysqli_real_connect($conn, $host, $login, $password, "", $port, "", MYSQLI_CLIENT_SSL);
			return $conn;
		}

		$port = (integer)$port;
		if( $port )
		{
			return @mysqli_connect($host, $login, $password, "", $port);
		}

		return @mysqli_connect($host, $login, $password);
	}

	if( $port )
		$host = $host.":".$port;

	return @mysql_connect($host, $login, $password);
}

/**
 * Database select wrapper
 * @param string dbName		A database name
 * @param mixed conn		A link identifier
 * @return boolean
 */
function select_db($dbName, $conn)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
		return mysqli_select_db($conn, $dbName);

	return mysql_select_db($dbName, $conn);
}

/**
 * Get a list of databases
 * @param mixed conn		A link identifier
 * @return mixed			A result set identifier
 */
function get_dbs_list($conn)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
		return db_query("SHOW DATABASES", $conn);

	return @mysql_list_dbs($conn);
}

/**
 * Get a tables list for the database with a particular name
 * @param string dbName		A database name
 * @param mixed conn	 	A link identifier
 * @return mixed		 	A result set identifier
 */
function get_tables_list($dbName, $conn)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
		return db_query("SHOW TABLES FROM ".$dbName, $conn);

	return mysql_list_tables($dbName, $conn);
}

/**
 * Database error wrapper
 * @param mixed conn		A link identifier
 * @return string
 */
function db_error($conn)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
	{
		if($conn)
			return mysqli_error($conn);
		return mysqli_connect_error();
	}

	return mysql_error();
}
/**
 * Database fetch array wrapper
 * @param qhandle	A result set identifier
 * @return array	An array has numeric indices
 */
function db_fetch_numarray($qhandle)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
		return @mysqli_fetch_array($qhandle, MYSQLI_NUM);

	return @mysql_fetch_array($qhandle, MYSQL_NUM);
}

/**
 * Database fetch array wrapper
 * @param qhandle	A result set identifier
 * @return array
 */
function db_fetch_array($qhandle)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
		return @mysqli_fetch_array($qhandle, MYSQLI_ASSOC);

	return @mysql_fetch_array($qhandle, MYSQL_ASSOC);
}

/**
 * Database close connection wrapper
 * @param mixed conn		A link identifier
 * @return boolean
 */
function db_close($conn)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
		return mysqli_close($conn);

	return mysql_close($conn);
}

/**
 * Database query wrapper
 * @param string qstring
 * @param mixed conn		A link identifier
 * @return mixed			A result set identifier
 */
function db_query($qstring, $conn)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
		$ret = mysqli_query($conn, $qstring);
	else
		$ret = mysql_query($qstring, $conn);

	if( !$ret )
		trigger_error( db_error($conn), E_USER_ERROR );

	return $ret;
}

/**
 * Get the number of fields fetched by the last db-query
 * @return res			A result set identifier
 * @param mixed conn	A link identifier
 * @return number
 */
function getFieldsNumberInLastQuery($res, $conn)
{
	global $use_mysqli_ext;

	if( $use_mysqli_ext )
		return mysqli_field_count($conn);

	return mysql_num_fields($res);
}
?>