<?php

/////////////////////////////////////////////////////////////////////////////
// PHPRunner connect proxy
//
define('RUNNER_VERSION', '5.1');
/////////////////////////////////////////////////////////////////////////////

$host = @$_REQUEST["host"];
$login = @$_REQUEST["login"];
$pwd = @$_REQUEST["pwd"];
$port = @$_REQUEST["port"];
$db = @$_REQUEST["db"];
$add = @$_REQUEST["add"];
$connstr = @$_REQUEST["connstr"];
$todo = @$_REQUEST["todo"];


if($todo=="connect" || $todo=="schema")
{
	$conn=@pg_connect($connstr);
	if(!$conn)
	{
		echo "<div><font color=red>Connect failed.<br>".@pg_last_error()."</font></div>";
		$todo="";
	}
}

if($todo=="schema")
{
	show_schema();
	exit();
}

if(!$todo || $todo=="connect")
{
?>
<html><body>
<form method="get" name="mainform" action="postgre.php">
<input type="Hidden" name="todo" value="connect">
<table cellspacing="2" cellpadding="2" border="0">
<tr>
	<td nowrap>Server address</td>
	<td><input type="Text" name="host" value="<?php if(!$host) echo "localhost"; else echo htmlspecialchars($host);?>" onchange="mk_connstr();"></td>
</tr>
<tr>
	<td nowrap>Username</td>
	<td><input type="Text" name="login" value="<?php echo htmlspecialchars($login);?>" onchange="mk_connstr();"></td>
</tr>
<tr>
	<td nowrap>Password</td>
	<td><input type="Text" name="pwd" value="<?php echo htmlspecialchars($pwd);?>" onchange="mk_connstr();"></td>
</tr>
<tr>
	<td nowrap>Additional parameters</td>
	<td><input type="Text" name="add" value="<?php echo htmlspecialchars($add);?>" onchange="mk_connstr();"></td>
</tr>
<tr>
	<td></td>
	<td><input type="button" value="Connect" onclick="document.forms.mainform.submit();"></td>
</tr>

<?php
	if($todo=="connect")
	{
?>
<tr>
	<td nowrap>Database</td>
	<td><select name="db" onchange="mk_connstr();">
<?php
		$dblist=pg_query($conn,"select * from pg_catalog.pg_database");
		while($row=pg_fetch_array($dblist))
			echo "<option value=\"".htmlspecialchars($row["datname"])."\">".htmlspecialchars($row["datname"])."</option>";
?>	
	</select>
</tr>
<tr>
	<td></td>
	<td><input type="button" value="Show schema" onclick="document.forms.mainform.todo.value='schema'; document.forms.mainform.submit();"></td>
</tr>
<?php
	}
	else
		echo "<input type=hidden name=db value=\"\">";
?>
<tr><td colspan=2>Connection string</td></tr>
<tr>
	<td colspan=2><textarea readonly cols=35 rows=5 id="connstr" name="connstr" ><?php echo htmlspecialchars($connstr);?></textarea></td>
</tr>
</table>
<script language="JavaScript">
function mk_connstr()
{
	document.forms.mainform.connstr.value='';
	if(document.forms.mainform.host.value.length>0)
	{
		t=document.forms.mainform.host.value.replace('\x5C','\\\\');
		t=t.replace('\x27','\\\'');
		document.forms.mainform.connstr.value=document.forms.mainform.connstr.value+' host=\''+t+'\'';
	}
	if(document.forms.mainform.login.value.length>0)
	{
		t=document.forms.mainform.login.value.replace('\x5C','\\\\');
		t=t.replace('\x27','\\\'');
		document.forms.mainform.connstr.value=document.forms.mainform.connstr.value+' user=\''+t+'\'';
	}
	if(document.forms.mainform.pwd.value.length>0)
	{
		t=document.forms.mainform.pwd.value.replace('\x5C','\\\\');
		t=t.replace('\x27','\\\'');
		document.forms.mainform.connstr.value=document.forms.mainform.connstr.value+' password=\''+t+'\'';
	}
	if(document.forms.mainform.db.value.length>0)
	{
		t=document.forms.mainform.db.value.replace('\x5C','\\\\');
		t=t.replace('\x27','\\\'');
		document.forms.mainform.connstr.value=document.forms.mainform.connstr.value+' dbname=\''+t+'\'';
	}
	else
		document.forms.mainform.connstr.value=document.forms.mainform.connstr.value+' dbname=\'template1\'';
	if(document.forms.mainform.add.value.length>0)
		document.forms.mainform.connstr.value=document.forms.mainform.connstr.value+' '+document.forms.mainform.add.value;
		
	if(document.forms.mainform.connstr.value.length>0)
		document.forms.mainform.connstr.value=document.forms.mainform.connstr.value.substring(1,document.forms.mainform.connstr.value.length);
}
mk_connstr();
</script>
</form>
<?php
	return;
}

//	process PHPRunner 5.1 commands

if($todo=='version')
{
	echo RUNNER_VERSION;
	return;
}
if($todo=="exec5")
{
	exec5();
	return;
}
if($todo=="query5")
{
	query5();
	return;
}
if($todo=="testconnect5")
{
	testconnect5();
	return;
}

//	process PHPRunner 5.0 commands

$conn=@pg_connect($connstr);
if(!$conn)
{
	echo "Connect failed.".@pg_last_error();
	exit();
}

if($todo=="testconnect")
{
  echo "connected ok";
  return;
}
if($todo=="exec")
{
  $res = pg_query( $conn, $_REQUEST["sql"] );
  if(!$res)
	echo @pg_last_error($conn);
  else
    echo "1";
  return;
}


if($todo=="dbs")
{
	echo "<databases>";
	$dblist=pg_query($conn,"select * from pg_catalog.pg_database");
	while($row=pg_fetch_array($dblist))
		echo "<database name=\"".htmlspecialchars($row["datname"])."\" />";
	echo "</databases>";
}

else if($todo=="queryfields")
{
	$sql = @$_REQUEST["sql"];
	if(!$sql)
		return;
	$res = pg_query($conn,$sql);
	echo "<fields>";
	for($i=0;$i<pg_num_fields($res);$i++)
	{
		$type=pg_field_type($res,$i);
		echo "<field name=\"".htmlspecialchars(pg_field_name($res,$i))."\" type=\"".htmlspecialchars($type)."\" ";
		echo " />";
	}
	echo "</fields>";
}
else if($todo=="tables")
{
	echo "<tables>";
		$tables=pg_query($conn,"select 1 as ord,'TABLE' as type,schemaname||'.'||tablename as name from pg_tables where schemaname not in ('pg_catalog','information_schema')
										union all 
										select 3,'SYSTEM TABLE' as type,schemaname||'.'||tablename as name from pg_tables where schemaname in ('pg_catalog','information_schema')
										union all 
										select 2,'VIEW' as type,schemaname||'.'||viewname as name from pg_views where schemaname not in ('pg_catalog','information_schema')
										union all 
										select 4,'SYSTEM VIEW' as type,schemaname||'.'||viewname as name from pg_views where schemaname in ('pg_catalog','information_schema')
										order by ord,name") or showerror();
		while($table=pg_fetch_array($tables))
		{
?>
<table name="<?php echo htmlspecialchars($table[2]);?>" type="<?php echo htmlspecialchars($table[1]);?>"/>
		<?php
		}
	echo "</tables>";
}
else if($todo=="tablefields")
{
	$table = @$_REQUEST["table"];
	if(!$table)
		return;
	showtablefields($table);
}
else if($todo=="tablekeys")
{
	$table = @$_REQUEST["table"];
	if(!$table)
		return;
	showtablekeys($table);
}
else if($todo=="queryvalues")
{
	$sql = @$_REQUEST["sql"];
	if(!$sql)
		return;
	$sql.=" limit 200";
	$res = pg_query($conn,$sql);
	if(pg_num_fields($res)==1)
	{
		echo "<values>";
		while($row=pg_fetch_array($res))
			echo "<value>".htmlspecialchars($row[0])."</value>";
		echo "</values>";
	}
	else
	{
		echo "<rows>\r\n";
		while($row=pg_fetch_array($res))
		{
			echo "<row>";
			for($i=0;$i<pg_num_fields($res);$i++)
				echo "<value>".htmlspecialchars($row[$i])."</value>";
			echo "</row>\r\n";
		}
		echo "</rows>\r\n";
	}
}
else if($todo=="queryvaluesraw")
{
  $sql = @$_REQUEST["sql"];
  if(!$sql)
    return;
  $res = pg_query($conn,$sql);
  if(!$res)
  {
    echo pg_last_error($conn);
    return;
  }

  echo "<rows>\r\n";

  echo "<row>\r\n";
  for($i=0;$i<pg_num_fields($res);$i++)
    echo "<value>".htmlspecialchars(pg_field_name($res,$i))."</value>\r\n";
  echo "</row>\r\n";

  while($row=pg_fetch_array($res))
  {
    echo "<row>\r\n";
    for($i=0;$i<pg_num_fields($res);$i++)
    {
      echo "<value>".htmlspecialchars($row[$i])."</value>\r\n";
    }
    echo "</row>\r\n";
  }
  echo "</rows>\r\n";
}
else if($todo=="queryvaluesstr")
{
  $sql = @$_REQUEST["sql"];
  if(!$sql)
    return;
  $res = pg_query($conn,$sql);
  if(!$res)
  {
    echo @pg_last_error($conn);
    return;
  }

  $binfields = array();
  for($i=0;$i<pg_num_fields($res);$i++)
  {
    $type=strtolower(pg_field_type($res,$i));
    if(type=="bytea")
      $binfields[]=$i;
  }

  echo "<rows>\r\n";

  echo "<row>\r\n";
  for($i=0;$i<pg_num_fields($res);$i++)
    echo "<value>".htmlspecialchars(pg_field_name($res,$i))."</value>\r\n";
  echo "</row>\r\n";

  while($row=pg_fetch_array($res))
  {
    echo "<row>\r\n";
    for($i=0;$i<pg_num_fields($res);$i++)
    {
		$ret=array_search($i,$binfields);
		if($ret===FALSE || $ret===NULL)
		{
			echo "<value>".htmlspecialchars($row[$i])."</value>\r\n";
		}
		else
		{
			if (strlen($row[$i]) == 0)					//if stored NULL value
				echo "<value>NULL</value>\r\n";
			else if (strpos($row[$i], '\\x') === false) //if used octal escape sequence
				echo "<value>0x".bin2hex(pg_unescape_bytea($row[$i]))."</value>\r\n";
			else										//if already used hex representation
				echo "<value>0x".substr($row[$i], 2)."</value>\r\n";
		}
    }
    echo "</row>\r\n";
  }
  echo "</rows>\r\n";
}



function showtablefields($table)
{
	global $conn;
			$arr=explode(".",$table);
			if(count($arr)<2)
			{
				$schema="public";
			}
			else
			{
				$table=$arr[1];
				$schema=$arr[0];
			}
			echo "<fields>";
			$sql=sprintf("select  pg_attribute.attname,typname from pg_attribute, pg_class, pg_namespace, pg_type 
					where pg_type.oid=atttypid and pg_class.oid=attrelid and pg_namespace.oid=relnamespace 
					and relname='%s' and nspname='%s' and attnum>0 
					order by attnum",$table,$schema);
			$fields=pg_query($conn,$sql);
			while($field=pg_fetch_array($fields))
			{
				$attr=array();
				$attr["name"]=$field[0];
				$attr["type"]=$field[1];

				echo '<field ';
				foreach($attr as $key=>$value)
					echo $key.'="'.htmlspecialchars($value).'" ';
				echo '/>';
			}
			echo "</fields>";
}

function showtablekeys($table)
{
	global $conn;
		$arr=explode(".",$table);
		if(count($arr)<2)
		{
			$schema="public";
		}
		else
		{
			$table=$arr[1];
			$schema=$arr[0];
		}
		echo "<keys>";
		$sql=sprintf("select  pg_attribute.attname
					from pg_constraint, pg_class, pg_namespace,pg_attribute
					where pg_class.oid=conrelid and pg_namespace.oid=connamespace  and attrelid=conrelid and attnum=conkey[1]
					and relname='%s' and nspname='%s' and contype='p'",$table,$schema);
		$fields=pg_query($conn,$sql);
		while($field=pg_fetch_array($fields))
		{
			$attr=array();
			$attr["name"]=$field[0];
			echo '<key ';
			foreach($attr as $key=>$value) {
				echo $key.'="'.htmlspecialchars($value).'" '; 
			}
			echo '/>';
		}
	echo "</keys>";
}

function showerror()
{
	echo @pg_last_error($conn);
	exit();
}

function show_schema()
{
	global $conn;
	header("Content-type: text/xml");
	echo '<?xml version="1.0" standalone="yes" ?>';
	//	determine php version
	$phpversion=phpversion();
	//	determine pg version
	$pgversion = "unknown";
	$res = pg_query($conn,"select version()");
	if($res && $row=pg_fetch_array($res))
		$pgversion = $row["version"];
?>
<phprunner phpversion="<?php echo htmlspecialchars($phpversion);?>" postgresqlversion="<?php echo htmlspecialchars($pgversion);?>">
<tables>
<?php
		$tables=pg_query($conn,"select 1 as ord,'TABLE' as type,schemaname||'.'||tablename as name from pg_tables where schemaname not in ('pg_catalog','information_schema')
										union all 
										select 3,'SYSTEM TABLE' as type,schemaname||'.'||tablename as name from pg_tables where schemaname in ('pg_catalog','information_schema')
										union all 
										select 2,'VIEW' as type,schemaname||'.'||viewname as name from pg_views where schemaname not in ('pg_catalog','information_schema')
										union all 
										select 4,'SYSTEM VIEW' as type,schemaname||'.'||viewname as name from pg_views where schemaname in ('pg_catalog','information_schema')
										order by ord,name") or showerror();
		while($table=pg_fetch_array($tables))
		{
?>
<table name="<?php echo htmlspecialchars($table[2]);?>" type="<?php echo htmlspecialchars($table[1]);?>">
<?php
			showtablefields($table[2]);
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
	$connstr = base64_decode( @$_REQUEST["connstr"] );
	$conn = @pg_connect( $connstr );
	return $conn;
}

function testconnect5()
{
	echo "start-script-output";
	if($conn=connect5())
	{
		echo "ok";
		pg_close($conn);
	}
	else
		echo "Connect failed.".@pg_last_error();
	echo "end-script-output";
	exit();
}

function exec5()
{
	$query = base64_decode( @$_REQUEST["query"] );
	echo "start-script-output";
	if(!($conn=connect5()))
	{
		echo "Connect failed.".@pg_last_error();
		echo "end-script-output";
		exit();
	}
	if(pg_query($conn,$query))
		echo "ok";
	else
		echo pg_last_error($conn);
	echo "end-script-output";
	pg_close($conn);
	exit();
}

function query5()
{
	$query = base64_decode( @$_REQUEST["query"] );
	$reccount = @$_REQUEST["reccount"] + 0;
	$skip = @$_REQUEST["skip"] + 0;
	echo "start-script-output";
	if(!($conn=connect5()) || !($rs=pg_query($conn,$query)))
	{
		echo pg_last_error($conn);
		echo "end-script-output";
		exit();
	}
	$bfields=array();
	echo "<output>";
//	display fields info
	echo "<fields>";
	for($i=0;$i<pg_num_fields($rs);$i++)
	{
		$type=pg_field_type($rs,$i);
		echo "<field name=\"".xmlencode(pg_field_name($rs,$i))."\" type=\"".xmlencode($type)."\"";
		if($type=="bytea")
		{
			$bfields[]=true;
			echo ' binary="true"';
		}
		else
			$bfields[]=false;
		echo " />";
	}
	echo "</fields>";
//	display query data
	echo "<data>";
	$recno=0;
	while($data=pg_fetch_row($rs))
	{
		$recno++;
		if($recno<=$skip)
			continue;
		if($reccount>=0 && $recno+$skip>$reccount)
			break;
		echo "<row>";
		foreach($data as $i=>$val)
		{
			if(is_null($val))
			{
				echo '<field null="true" />';
			}
			else if($bfields[$i])
			{
				if (strpos($val, '\\x') === false) //if used octal escape sequence
					echo '<field>0x'.bin2hex(pg_unescape_bytea($val)).'</field>';
				else										//if already used hex representation
					echo '<field>0x'.substr($val, 2).'</field>';				
			}
			else
			{
				echo '<field>'.xmlencode($val).'</field>';
			}
		}
		echo "</row>";
	}
	echo "</data>";
	echo "</output>";
	echo "end-script-output";
	pg_close($conn);
	exit();
}

function xmlencode($str)
{
	$str = str_replace("&","&amp;",$str);
	$str = str_replace("<","&lt;",$str);
	$str = str_replace(">","&gt;",$str);
	$str = str_replace("\"","&quot;",$str);
	return str_replace("'", "&apos;", $str);

	/*
	$out="";
	$len=strlen($str);
	$ind=0;
	for($i=0;$i<$len;$i++)
	{
		if(ord($str[$i])>=128)
		{
			if($ind<$i)
				$out.=substr($str,$ind,$i-$ind);
			$out.="&#".ord($str[$i]).";";
			$ind=$i+1;
		}
	}
	if($ind<$len)
		$out.=substr($str,$ind);
	return str_replace("'","&apos;",$out);
	/**/
}

?>