<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

$content = "";
$isError = false;

if(!file_exists("config.php")){
	$content = "File config.php do not exist";
}
else{
	include_once("config.php");
	if(!file_exists("sql/mysql.sql")){
		$content = "Table creation script missing<br><br>";
		$content.= "<div class='div_error_button'><a href='install.php' class='button button-large-error'>Try Again</a></div></div><br><br>";
		$isError = true;
	}
	if(!$content){
		$conn = mysqli_init();
		if(!$config_hostport)
			$config_hostport = 3306;
		if (!@mysqli_real_connect($conn, $config_hostname, $config_hostuser, $config_hostpass, "", $config_hostport, "", 0))
			$isError = true;
		if(!@mysqli_select_db($conn, $config_dbname))
			$isError = true;
	}
	
	
	
	if(@$_POST["password"] != ""){
		if($config_usernameField){
			$formuser = mysqli_real_escape_string($conn,@$_POST["user"]);
			if(!$formuser)
				$formuser = "admin";
		}
		$formemail = mysqli_real_escape_string($conn,@$_POST["email"]);
		$formpass = mysqli_real_escape_string($conn,@$_POST["password"]);
		$formpass = password_hash( $formpass, PASSWORD_BCRYPT );
		$filestr = file_get_contents('sql/mysql.sql', true);
		$conn = mysqli_init();
		if(!$config_hostport)
			$config_hostport = 3306;
		@mysqli_real_connect($conn, $config_hostname, $config_hostuser, $config_hostpass, "", $config_hostport, "", 0);
		@mysqli_select_db($conn, $config_dbname);
		$arrSql = explode(";\r\n",$filestr);
		foreach($arrSql as $str){
			if($str){
				@mysqli_query($conn, $str);
				if(mysqli_error($conn)){
					$content = mysqli_error($conn)."<br><b>SQL Error</b><br><br><b>SQL query:</b> ".$str."<br><br>";
					$content.= "<div class='div_error_button'><a href='install.php' class='button button-large-error'>Try Again</a></div></div><br><br>";
					$isError = true;
					break;
				}
			}
		}
		if(!$content){
			if($config_usernameField){
				$config_usernameField.= ",";
				$formuser = "'".$formuser."',";
			}
			else{
				$config_usernameField = "";
				$formuser = "";
			}
			if($config_usertypeField)
				$str = "INSERT INTO `".$config_loginTable."` (id, ".$config_usernameField.$config_emailField.", password, ".$config_usertypeField." ) VALUES (1,".$formuser." '".$formemail."', '".$formpass."', 'admin')";
			else
				$str = "INSERT INTO `".$config_loginTable."` (id, ".$config_usernameField.$config_emailField.", password) VALUES (1, ".$formuser." '".$formemail."', '".$formpass."')";
			@mysqli_query($conn, $str);
			if(mysqli_error($conn)){
				$content = mysqli_error($conn)."<br><b>SQL Error</b><br><br><b>SQL query:</b> ".$str."<br><br>";
				$content.= "<div class='div_error_button'><a href='install.php' class='button button-large-error'>Try Again</a></div></div><br><br>";
				$isError = true;
			}
			if(!$content){
				if(count($config_files)){
					foreach($config_files as $dir)
						@chmod($dir,0777);
				}
				if(!$content)
					header("Location:install.php?step=2");			
				else
					echo $content;
				exit();
			}
		}
	}
	$logo = "";
	if(!$isError){
		if(@$_GET["step"]!=2){
			$username = "";
			$styleusername = "";
			if(!$config_usertypeField){
				$username = "admin";
				$styleusername = "disabled";
			}
			$content = "<div class='popup' style='width:600px!important'><form action='install.php' method='post' name='form_create' id='form_create'>";
			$content.= "<div class='div_head'>Below you must enter the data to create an administrator account.</div>";
			if($config_usernameField)
				$content.= "<div class='div_row'><div>Username</div><div><input class='form-control input-contol' type='text' value='".$username."' id='user' name='user' ".$styleusername."></div><div class='admin_desc'>Your admin username</div></div>";
			$content.= "<div class='div_row'><div>Email</div><div><input class='form-control input-contol' type='text' value='' id='email' name='email'></div><div class='admin_desc'>Your admin email</div></div>";
			$content.= "<div class='div_row'><div>Password</div><div><input class='form-control input-contol' type='text' value='' id='password' name='password'></div><div class='admin_desc'>Your admin password</div></div>";		
			$content.= "<div class='div_row create_b'><a type='button' class='button button-large-error' id='create_b'>Submit</a></div>";
			$content.= "</form></div>";
		}
		else{
			$conn = mysqli_init();
			if(!$config_hostport)
				$config_hostport = 3306;
			@mysqli_real_connect($conn, $config_hostname, $config_hostuser, $config_hostpass, "", $config_hostport, "", 0);
			@mysqli_select_db($conn, $config_dbname);
			$str = "select * from `".$config_loginTable."`";
			$rs = @mysqli_query($conn, $str);
			$row = @mysqli_fetch_array($rs, MYSQLI_ASSOC);
			if($config_usernameField)
				$username = $row[$config_usernameField];
			$email = $row[$config_emailField];
			$content = "<div class='popup'><div class='head_succ'>Success!</div>";
			$content.= "<div class='div_row' style='padding-left:5px!important;'>".$config_templateName." has been installed. Thank you, and enjoy!</div>";
			if($config_usernameField)
				$content.= "<div class='div_row'><div class='succ_label'>Username</div><div class='desc_succ'>".$username."</div></div>";
			$content.= "<div class='div_row'><div class='succ_label'>Email</div><div class='desc_succ'>".$email."</div></div>";
			$content.= "<div class='div_row'><div class='succ_label'>Password</div><div class='desc_succ'><i>Your chosen password.</i></div></div>";
			$content.= "<div class='div_error_button' style='margin-top:20px;'><a href='login.php' class='button button-large-error'>Log in</a></div></div>";
		}
		if(file_exists("images/".strtolower($config_templateName).".png"))
			$logo = "<div class='div_logo'><img width=70px src='images/".strtolower($config_templateName).".png' /></div>";
		$logo.= "<div class='div_logo'>".$config_templateName."</div>";
	}
	else{
		if(!$content){
			$content = "<style>.content{margin-top:-100px;}</style><div class='popup'><div class='div_error head_error'>Error establishing a database connection</div>";
			$content.= "<div class='div_error'>This either means that the username and password information in your <b>config.php</b> file is incorrect or that contact with the database server at <b>".$config_hostname."</b> could not be established. This could mean your host’s database server is down.</div>";
			$content.= "<div class='div_ul_error'><ul><li>Are you sure you have the correct username and password?</li>";
			$content.= "<li>Are you sure you have typed the correct hostname?</li>";
			$content.= "<li>Are you sure the database server is running?</li></ul></div>";
			$content.= "<div class='div_error'>If you are unsure what these terms mean you should probably contact your host.</div>";
			$content.= "<div class='div_error_button'><a href='install.php' class='button button-large-error'>Try Again</a></div></div>";
		}
	}
}


?>

<html  lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Install</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="styles/bootstrap/cerulean/normal/style.css?39925&amp;164_1667467218" type="text/css">
</head>
	<body>
		<style>
			body{
				margin:0px;
				background-color:#f0f0f1;
				font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
				color: #3c434a;
				font-size: 14px;
				line-height: 1.5;
			}
			.logo{
				height:60px;
				padding-top:40px;
				display: flex;
				justify-content: center;
				flex-direction: row;
				align-items:center;
			}
			.div_logo{
				padding: 0px 10px;
				font-weight:600;
				font-size:24px;
				color:#444;
				
			}
			.body{
				display: flex;
				padding:10px;
				justify-content: center;
				padding-top:100px;
				//height: 80vh;
			}
			.content div{
				padding:5px;
			}
			.content{
				background-color: white;
				border:1px solid #c3c4c7;
				text-align:center;
				padding: 30px 60px 10px;
			}
			.div_row{
				display:flex;
				flex-direction: row;
				//justify-content: center;
				padding-left:0px!important;
			}
			.div_row>div:first-child{
				width:150px;
				text-align:left;
				padding-right:20px;
				padding-top:7px;
				font-weight:600;
			}
			.div_row>div:last-child{
				width:300px;
			}
			.input-contol{
				width:270px!important;
			}
			.create_b{
				padding-top:40px!important;
			}
			.popup{
				max-width:700px;
				text-align:left;
				padding: 1em 2em;
				color:#444;
			}
			.head_error{
				color: #666;
				font-size: 24px!important;
				font-weight:600;
				border-bottom: 1px solid #dadada;
			}
			.div_error{
				font-size: 14px;
				line-height: 1.5;
				margin: 25px 0 20px;
			}
			.div_error_button{
				font-size: 14px;
				line-height: 1.5;
			}
			li{
				margin: 10px 0 10px;
			}
			.button-large-error{
			    background: #f3f5f6;
				border: 1px solid #016087;
				color: #016087;
				display: inline-block;
				text-decoration: none!important;
				font-size: 13px;
				height: 28px;
				margin: 0;
				cursor: pointer;
				-webkit-border-radius: 3px;
				-webkit-appearance: none;
				border-radius: 3px;
				white-space: nowrap;
				-webkit-box-sizing: border-box;
				-moz-box-sizing: border-box;
				box-sizing: border-box;
				vertical-align: top;
				line-height: 2.30769231;
				min-height: 32px;
				padding: 0 12px;
			}
			.admin_desc{
				padding-left:20px!important;
			}
			.div_head{
				margin-bottom:10px;
			}
			.succ_label{
				font-weight: 600;
				width: 200px;
				padding-top:12px!important;
			}
			.head_succ{
				font-weight: 400;
				color: #646970;
				font-size: 24px;
				border-bottom: 1px solid #dadada;
				margin-bottom:15px;
			}
			.desc_succ{
				padding-top:12px!important;
			}
			.form-control{
				height: 28px;
			}
		</style>

		<div class='logo'>
			<?php echo $logo ?>
		</div>
		<div class='body'>
			<div class='content'>
				<?php echo $content ?>
			</div>
		</div>
	</body>
</html>	
<script>
	const button = document.getElementById('create_b');
	if(button){
		button.addEventListener('click', function () {
			if(document.getElementById("user") && document.getElementById("user").value ==''){
				alert("All form fields must be completed");
				return false;
			}
			if(document.getElementById("password").value ==''){
				alert("All form fields must be completed");
				return false;
			}
			if(document.getElementById("email").value ==''){
				alert("All form fields must be completed");
				return false;
			}
			if(!validateEmail(document.getElementById("email").value)){
				alert("Enter a valid email");
				return false;
			}
			document.getElementById("form_create").submit();
		})
	}
	function validateEmail(email) {
		var pattern  = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return pattern .test(String(email).toLowerCase());
	}
</script>
