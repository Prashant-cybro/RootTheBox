<?php
	
	session_name("SessionID");
	session_start();
	$hostname = 'localhost';
	$username = 'cybro';
	$password = 'hackservos';
	$dbname = 'owasp_db';
	
	$conn = mysqli_connect($hostname,$username,$password,$dbname);
	
	if(!$conn)
	{
		die("unable to connect !!");
	}
	
	if(!isset($_COOKIE['Privileges']))
	{
		setcookie("Privileges","user");
	}
	
	if(isset($_COOKIE['Privileges'])) 
	{
		if( $_COOKIE['Privileges']=='admin')
		{
			$error;
	
	
			if($_REQUEST['login'])
			{
				if(isset($_REQUEST['uname']) && isset($_REQUEST['psw']))
				{
			
					$uname = $_POST["uname"];
					$pass = filter_var($_POST['psw'], FILTER_SANITIZE_STRING);
					$sql = "SELECT * FROM user_dns WHERE user='$uname' AND pass='$pass'";
					$result = mysqli_query($conn,$sql);
		
					if(mysqli_num_rows($result)==1)
					{
						$_SESSION['user']='admin';
						echo "<script> location.href='dashboard.php'; </script>";
					}
			
					else
					{
						$error="Incorrect Username/Password !!";
					}
		
				}
		
			}

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<style>
* {
  	box-sizing: border-box;
  	font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
  	font-size: 16px;
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
}
body {
  	background-color: #435165;
}
.login {
  	width: 400px;
  	background-color: #ffffff;
  	box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
  	margin: 100px auto;
}
.login h1 {
  	text-align: center;
  	color: #5b6574;
  	font-size: 24px;
  	padding: 20px 0 20px 0;
  	border-bottom: 1px solid #dee0e4;
}
.login form {
  	display: flex;
  	flex-wrap: wrap;
  	justify-content: center;
  	padding-top: 20px;
}
.login form label {
  	display: flex;
  	justify-content: center;
  	align-items: center;
  	width: 50px;
  	height: 50px;
  	background-color: #3274d6;
  	color: #ffffff;
}
.login form input[type="password"], .login form input[type="text"] {
  	width: 310px;
  	height: 50px;
  	border: 1px solid #dee0e4;
  	margin-bottom: 20px;
  	padding: 0 15px;
}
.login form input[type="submit"] {
  	width: 100%;
  	padding: 15px;
 	margin-top: 20px;
  	background-color: #3274d6;
  	border: 0;
  	cursor: pointer;
  	font-weight: bold;
  	color: #ffffff;
  	transition: background-color 0.2s;
}
.error {
	background :#F2DEDE;
	color: #A94442;
	padding: 10px;
	width: 95%;
	border-radius: 5px;
	margin: 20px auto;
}
.login form input[type="submit"]:hover {
	background-color: #2868c7;
  	transition: background-color 0.2s;
}

/* Change styles for span and cancel button on extra small screens */

</style>
</head>
<body>

<div class="login">
			<h1>Login</h1>
			<?php  if(isset($error)) {  ?>
  			<p class="error" style="text-align:center;"> <?php echo $error;  ?></p>
  			<?php } ?>
			<form action method="post" autocomplete="off">
			
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="uname" placeholder="Username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="psw" placeholder="Password" required>
				<input type="submit" value="Login" name="login">
			</form>
		</div>

</body>
</html>


<?php

}
	else
	{
		echo "<h1> NOT AUTHORIZED !!</h1>";
		echo "<p> You are not authorized to view the contents !!</p>";
		echo "<p> Privileges = '".$_COOKIE['Privileges']."'    NOT    'admin' !!</p>";
	}
	
	}
	
	else
	{
		echo "<h1> NOT AUTHORIZED !!</h1>";
		echo "<p> You are not authorized to view the contents !!</p>";
		echo "<p> Privileges NOT set !!</p>";
		echo "<p> Please refresh this Page to view your Privileges !!</p>";
		
	}

?>






















