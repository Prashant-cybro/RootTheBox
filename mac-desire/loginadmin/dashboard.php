<?php
	session_name("SessionID");
	session_start();
	if (!isset($_SESSION['user']) || $_SESSION['user']!='admin')
	{
		echo "<script> location.href='../loginadmin/'; </script>";
	}
	
	
	class example
	{
		public $data ;
		//public $exec;
		function __construct()
		{
			$this->data=NULL;
		}
		
		function __wakeup()
		{
			if(isset($this->data) && ($this->data != "replace me with payload"))
			{	
			
				eval($this->data);		//original working	
				//eval("echo $this->data ");          //testing purpose   remember giving ';'  in the command.
			}
		}
	}
	$obj = new example();
	$obj->data= "replace me with payload";
	
	
	if (!isset($_COOKIE['encodedPayload']))
	{
		//$cookie = "replaceme with payload";
		$ser_payload = serialize($obj);
		$encodedPayload = base64_encode($ser_payload);
		//echo $encodedPayload;
		setCookie("encodedPayload",$encodedPayload);
		//echo $_COOKIE['encodedPayload'];
	}
	else if (isset($_COOKIE['encodedPayload']))
	{
		$unser_obj = unserialize(base64_decode($_COOKIE['encodedPayload']));
	}
	



?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<!-- <link href="style.css" rel="stylesheet" type="text/css"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		
		<style>
		.navtop {
	background-color: #2f3947;
	height: 60px;
	width: 100%;
	border: 0;
}
.navtop div {
	display: flex;
	margin: 0 auto;
	width: 1000px;
	height: 100%;
}
.navtop div h1, .navtop div a {
	display: inline-flex;
	align-items: center;
}
.navtop div h1 {
	flex: 1;
	font-size: 24px;
	padding: 0;
	margin: 0;
	color: #eaebed;
	font-weight: normal;
}
.navtop div a {
	padding: 0 20px;
	text-decoration: none;
	color: #c1c4c8;
	font-weight: bold;
}
.navtop div a i {
	padding: 2px 8px 0 0;
}
.navtop div a:hover {
	color: #eaebed;
}
body.loggedin {
	background-color: #f3f4f7;
}
.content {
	width: 1000px;
	margin: 0 auto;
}
.content h2 {
	margin: 0;
	padding: 25px 0;
	font-size: 22px;
	border-bottom: 1px solid #e0e0e3;
	color: #4a536e;
}
.content > p, .content > div {
	box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1);
	margin: 25px 0;
	padding: 25px;
	background-color: #fff;
}
.content > p table td, .content > div table td {
	padding: 5px;
}
.content > p table td:first-child, .content > div table td:first-child {
	font-weight: bold;
	color: #4a536e;
	padding-right: 15px;
}
.content > div p {
	padding: 5px;
	margin: 0 0 10px 0;
}
		</style>
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Cybernetics</h1>
				<a href=""><i class="fas fa-user-circle"></i>Hello Admin</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Dashboard</h2>
			<p>Welcome back, <?php echo $_SESSION['user']; ?>!</p>
		</div>
		
		<footer style="position: absolute;top:90%;left:37%;"size="12px">
		<p> This Page uses PHP magic Functions !!</p>
		</footer>
	</body>
</html>
