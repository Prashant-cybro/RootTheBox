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
    <title>Root The Box : Machines</title>
</head>

<style>
    

    table {
        position: absolute;
        left: 60.2%;
        top: 20%;
        transform: translate(-50%, -50%);
        border-collapse: collapse;
        width: 950px;
        height: 100px;
        border: 1px solid #bdc3c7;
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    tr {
        color:#00FF00;
        transition: all .2s ease-in;
        cursor: pointer;
        background-color: #282828;
    }

    th,
    td {
        padding: 12px;
        text-align: left;
      
    }

    #header {
        background-color: #020509;
        color: #fff;
    }


    tr:hover {
        background-color: black;
        transform: scale(1.02);
        box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2), -1px -1px 8px rgba(0, 0, 0, 0.2);
    }

    @media only screen and (max-width: 768px) {
        table {
            width: 90%;
        }
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
          <p style="color: #ffffff"> Hello <?php echo $_SESSION['user']; ?>!!</p>
        </div>
      </nav>

      <main>
        <div class="main__container">
          

          <table>
              <tr id="header">
                  <th>Name</th>
                  <th>OS</th>
                  <th>Difficulty</th>
                  <th>Release Date</th>
                  <th>Maker</th>
              </tr>

              <tr>

                  <td><img align="left" src="../image/newmacico.png" height="20" ><a href="cybernetics/" style="color:#00FF00;padding-left:5px" 
                    data-toggle="tooltip">Cybernetics </a></td>
                  <td><img src="../image/linux.png" height="15">Linux </td>
                  <td><img src="../image/diffrat2.png" height="25" </td>
                  <td>18 April 2021 </td>
                  <td>CYBRO </td>

              </tr>


          </table>

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
            
            <div class="sidebar__link active_menu_link">
              <i class="fa fa-user-secret" aria-hidden="true"></i>
              <a href="#">Machines</a>
            </div>
            <div class="sidebar__link">
              <i class="fa fa-building-o"></i>
              <a href="../profile/">Profile</a>
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
