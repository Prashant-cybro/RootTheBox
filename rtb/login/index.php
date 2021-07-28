<?php
	session_name("SessionID");
	session_start();
	$hostname = 'localhost';
	$username = 'cybro';
	$password = 'hackservos';
	$dbname = 'owasp_db';
	
	$conn = new mysqli($hostname, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	
	if($_REQUEST['login'])
	{
		if(isset($_REQUEST['uname']) && isset($_REQUEST['psw']))
		{
		$error;
		$uname = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
		$pass = filter_var($_POST['psw'], FILTER_SANITIZE_STRING);
		
		
		$stmt = $conn->prepare("SELECT * FROM user_table WHERE user_name=? AND pass_name=?");
		$stmt->bind_param("ss", $uname, $pass);
		
		$stmt->execute();
		$result = $stmt->get_result();
		
		if($result->num_rows==1)
		{
			$row=$result->fetch_assoc();
			$_SESSION['user']=$row['user_name'];
			$_SESSION['email']=$row['email_name'];
			header('location: ../home/');
		}
		else
		{
			$error="Username/Password Incorrect !!";
		}
		
		$stmt->close();
		}
	}
	
	$conn->close();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Root The Box : Login-Page</title>
    <link rel="shortcut icon" sizes="194x194" href="../home/image/logo3-copy.png" type="image/png"/>
    <link rel="stylesheet" type="text/css" href="../style.css">
  </head>
  <body>
    <header>
      <div class ="main">
      <div class="logo">
				<img style="width:150px;height:auto;float: left;"src="../home/image/logo3.png">
			</div>
        <ul>
          <li><a href="../">Home</a></li>
          <li class="active"><a href="">Login</a></li>
          <li><a href="../signup/">Sign Up</a></li>
        </ul>
      </div>
    </header>
    <form action method="POST" autocomplete="off">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
  <?php  if(isset($error)) {  ?>
  <p class="error"> <?php echo $error;  ?></p>
  <?php } ?>
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="uname" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="psw" required>
  </div>

  <input type="submit" class="btn" value="LOGIN" name="login">

</div>
</form>
  </body>
</html>

