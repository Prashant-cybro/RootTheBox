<?php

	session_name("SessionID");
	session_start();
	if (!isset($_SESSION['user']) || !isset($_SESSION['email']))
	{
		echo "<script> location.href='../../login/'; </script>";
	}
	



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../findash.css" />
    <link rel="shortcut icon" sizes="194x194" href="../image/logo3-copy.png" type="image/png"/>
    <title>Root The Box : Profile</title>
</head>

<style>
    
    .contbox {
      background-color: #333333;
      position: absolute;
      width: 900px;
      height: 400px;
      color: #ffffff;
    }

    .continfohead {
      /*position: relative;*/
      padding-left: 20px;
      padding-top: 10px;
      padding-bottom: 20px;
    }

    .continfotext {
      padding-left: 20px;
      padding-top: 10px;
    }

</style>


  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
         <div class="navbar__left">
          
        </div>
        <div class="navbar__right">
          <p style="color: #ffffff"> Hello <?php  echo $_SESSION['user']; ?>!!</p>
        </div>
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          
            <div class="contbox">
              <div class="continfohead">
                <h1>About</h1>
              </div>
              <div class="continfotext">
              <p>Username : <?php echo $_SESSION['user']; ?>   </p>
            </div>
            <div class="continfotext">
              <p>Email : <?php echo $_SESSION['email']; ?></p>
            </div>
            </div>


        </div>
        </main>

        <div id="sidebar">
          <div class="sidebar__title">
            <div class="sidebar__img">
              <img src="../image/logo3-copy.png" height="35"align="left"alt="logo" />
              <h3 style="color: #00FF00"> Root The Box</h3>

            </div>
            <i
              onclick="closeSidebar()"
              class="fa fa-times"
              id="sidebarIcon"
              aria-hidden="true"
            ></i>
          </div>

          <div class="sidebar__menu">
            <div class="sidebar__link">
              <i class="fa fa-home"></i>
              <a href="../">Dashboard</a>
            </div>
            
            <div class="sidebar__link">
              <i class="fa fa-user-secret" aria-hidden="true"></i>
              <a href="../machines/">Machines</a>
            </div>
            <div class="sidebar__link active_menu_link">
              <i class="fa fa-building-o"></i>
              <a href="#">Profile</a>
            </div>
            
            <div class="sidebar__logout">
              <i class="fa fa-power-off"></i>
              <a href="../../logout.php">Log out</a>
            </div>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
     <script src="../findash.js">

     </script>





</body>

</html>
