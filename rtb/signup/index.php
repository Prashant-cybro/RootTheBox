<?php 
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
	
	if($_REQUEST['signup'])
	{
		$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$uname = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
		$pass = filter_var($_POST['psw'], FILTER_SANITIZE_STRING);
		$conf_pass = filter_var($_POST['conf_psw'], FILTER_SANITIZE_STRING);
		
		$error;
		$success;
		$flag = 1;
		if(empty($email) || empty($uname) || empty($pass) || empty($conf_pass))
		{
			$error = "Input feilds cannot be empty";
			$flag = 0;
		}
		
		if($pass != $conf_pass && $flag == 1)
		{
			$error = "Passwords do not match !!";
			
			$flag = 0;
		}
		
		
		$sql = "SELECT user_name FROM user_table";
		$result1 = $conn->query($sql);

		if ($result1->num_rows > 0 && $flag == 1) 
		{
  			// output data of each row
  			while($row = $result1->fetch_assoc()) 
  			{
    				
    				if ($row['user_name']==$uname)
    				{
    					
    					$error = "Username Not available !!";
    					
    					
    					$flag = 0;
    					break;
    				}
  			}
		}
		
		if ($flag == 1)
		{
			$date_time=date("Y-m-d H:i:s");
			$stmt = $conn->prepare("INSERT INTO user_table(user_name,email_name,pass_name,create_datetime) VALUES (?,?,?,'$date_time')");
			$stmt->bind_param("sss", $uname, $email ,$pass);
	
		
			if($stmt->execute())
			{
				$success = "Successfully Registered !! Click Login Button !!";
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
    <title>Root The Box : SignUp-Page</title>
    <link rel="shortcut icon" sizes="194x194" href="../home/image/logo3-copy.png" type="image/png"/>
    <link rel="stylesheet" href="style.css">
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
          <li><a href="../login/">Login</a></li>
          <li class="active"><a href="">Sign Up</a></li>
        </ul>
      </div>
    </header>
    <form  method="POST" autocomplete="off">
<div class="login-box">
  <h1>Sign up</h1>
  
  <div class="textbox">
  <?php  if(isset($error)) {  ?>
  <p class="error"> <?php echo $error;  ?></p>
  <?php }  if(isset($success)) { ?>
  <p class="success"> <?php echo $success; ?></p>
  <?php }?>
  
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="uname" required>
  </div>

  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="email" placeholder="E-mail" name="email" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="psw" required>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Confirm Password" name="conf_psw" required>
  </div>

  <input type="submit" class="btn" value="Sign Up" name="signup">

</div>
</form>
  </body>
</html>

