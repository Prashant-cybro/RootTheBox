<?php

	session_name("SessionID");
	session_start();
	if (!isset($_SESSION['user']) || !isset($_SESSION['email']))
	{
		echo "<script> location.href='../login/'; </script>";
	}
	



?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="findash.css" />
    <link rel="shortcut icon" sizes="194x194" href="image/logo3-copy.png" type="image/png"/>
    <title>Root The Box : Dashboard</title>
  </head>
  <body id="body">
    <div class="container">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
         <div class="navbar__left">
          
        </div>
        <div class="navbar__right">
          <p style="color: #ffffff"> Hello <?php echo $_SESSION['user']; ?>!!</p>
          
        </div>
      </nav>

      <main>
        <div class="main__container">
          <!-- MAIN TITLE STARTS HERE -->

          <div class="main__title">
           
            <div class="main__greeting">
              
              <p>Welcome to your dashboard</p>
            </div>
          </div>

          <!-- MAIN TITLE ENDS HERE -->

          <!-- MAIN CARDS STARTS HERE -->
          <div class="main__cards">
            <div class="card">
              <i
                class="fa fa-user-o fa-2x text-lightblue"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Subscribers</p>
                <span class="font-bold text-title">578</span>
              </div>
            </div>

            <div class="card">
              <i class="fa fa-calendar fa-2x text-red" aria-hidden="true"></i>
              <div class="card_inner">
                <p class="text-primary-p">Times of Watching</p>
                <span class="font-bold text-title">2467</span>
              </div>
            </div>

            <div class="card">
              <i
                class="fa fa-video-camera fa-2x text-yellow"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Videos</p>
                <span class="font-bold text-title">340</span>
              </div>
            </div>

            <div class="card">
              <i
                class="fa fa-thumbs-up fa-2x text-green"
                aria-hidden="true"
              ></i>
              <div class="card_inner">
                <p class="text-primary-p">Number of Likes</p>
                <span class="font-bold text-title">645</span>
              </div>
            </div>
          </div>
          <!-- MAIN CARDS ENDS HERE -->

          
          <div style="padding-bottom: 20px;padding-top:15px">
        <h5 style="color: #ffffff">Any form of DOS is forbidden</h5>
        <small style="color: #949BA2">There is no reason to use any form of DoS on any machine inside or outside of RTB Network. If you accidentaly perform such an attack let us know asap.</small>
        </div>
        <div style="padding-bottom: 20px">
        <h5 style="color: #ffffff">Don't use your production PC to connect to RTB network</h5>
          <small style="color: #949BA2">We strongly recommend not to use your production PC to connect to the RTB Network. Build a VM or physical system just for this purpose. We do not hold any responsibility for any damage, theft or loss of personal data although in such event, we will cooperate fully with the authorities.</small>
        </div>
        <h5 style="color: #ffffff">Add Machine to your trusted hosts</h5>
          <small style="color: #949BA2">Add the Machine IP to you trusted hosts file of your operating system with </small><small style="color:#00ff00">Machine name</small><small style="color:#949BA2"> followed by </small><small style="color:#00ff00">.rtb</small>
          <small style="color: #949BA2">In Linux the hosts file is stored on location </small><small style="color:#00ff00">/etc/hosts</small>
          <img style="padding-top: 10px"src="image/etchosts.png" height="120">


        </div>
      </main>

      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="image/logo3-copy.png" height="35"align="left"alt="logo" />
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
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Dashboard</a>
          </div>
          <!-- <h2>MNG</h2> -->
          <div class="sidebar__link">
            <i class="fa fa-user-secret" aria-hidden="true"></i>
            <a href="machines/">Machines</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-building-o"></i>
            <a href="profile/">Profile</a>
          </div>
          
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="../logout.php">Log out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
   <script src="findash.js">

   </script>
  </body>
</html>
