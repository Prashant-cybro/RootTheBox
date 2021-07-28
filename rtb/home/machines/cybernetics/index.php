<?php

	session_name("SessionID");
	session_start();
	if (!isset($_SESSION['user']) || !isset($_SESSION['email']))
	{
		echo "<script> location.href='../../../login/'; </script>";
	}
	
	if($_REQUEST['usrsave']&& isset($_REQUEST['usrhash']))
	{
		$hash=filter_var($_POST['usrhash'], FILTER_SANITIZE_STRING);
		if($hash=='4b0b93beb0badaed57dd5ed1f7b89edbc4093740e6458f13a2c1cd642556293b')
		{
			echo "<script>alert('Congratulations Got User!!')</script>";
		}
		else
		{
			echo "<script>alert('Incorrect User Hash !!')</script>";
		}
	}
	
	if($_REQUEST['rootsave']&& isset($_REQUEST['roothash']))
	{
		$hash=filter_var($_POST['roothash'], FILTER_SANITIZE_STRING);
		if($hash=='4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2')
		{
			echo "<script>alert('Congratulations got Root!!')</script>";
		}
		else
		{
			echo "<script>alert('Incorrect Root Hash !!')</script>";
		}
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
    <link rel="shortcut icon" sizes="194x194" href="../../image/logo3-copy.png" type="image/png"/>

    <link rel="stylesheet" href="../../findash.css" />
    <title>Root The Box : Cybernetics</title>
</head>

<style>
    
    .progress-small .progress-bar {
    height: 10px;
}
.progress-bar-warning {
    border-right: 4px solid #f6a526;
}
.progress-bar {
    background-color: #1e2125;
    text-align: right;
    padding-right: 10px;
    color: #949ba2;
}
.progress-bar-warning {
    background-color: #f0ad4e;
}
.progress-bar {
    float: left;
    width: 0;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    background-color: #337ab7;
    -webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
    -webkit-transition: width .6s ease;
    -o-transition: width .6s ease;
    transition: width .6s ease;
}
    .full .progress-bar {
    color: #fff;
}
.full .progress-bar-warning {
    background-color: #00ff00;
    border-right: 4px solid #383838;
}
    .macheader {
      padding-left: 80px;
      color: #ffffff;
      padding-bottom: 40px;
      border-bottom: 1px solid #ffffff;
      /*width: 1%;*/
    }
    .btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1.5px solid transparent;
    border-radius: 6px;

}

    .btn-default {
      color: #949ba2;
      background-color: transparent;
      border-color: #505863;

    }
    .btn-xs {
      padding: 1px 5px;
      font-size: 12px;
      line-height: 1.5;
      border-radius: 5px;
      margin-right: 10px;

    }
    .imgstatchart {
      padding-top:10px;
      padding-bottom: 15px;

    }
    .imgstats {
      padding-right:20px;
      height: 150px;
    }
    .imgchart {
      height: 150px;
      width: 710px;
    }
    .rowspace{
      padding-top: 10px;
      padding-right: 20px;
    }

    .ipblock{
      background-color: #333333;
      position: absolute;
      width: 250px;
      height: 100px;
      color: #ffffff;
    }
    .macblock {
      position: absolute;
      left: 45%;
      background-color: #333333;
      width: 250px;
      height: 100px;
      color: #ffffff;
    }
    .diffchart {
      position: absolute;
      left:70%;
      height:150px;
      width: 343px;
    }
    
    .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #000;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 400px;
  height:300px;
}

/* The Close Button */
.close {
  color: #585858;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.hash {
  text-align:center;
  padding-top: 30px;
}
.btn:hover,.btn:focus{
  text-decoration:none;
  background-color:#303030;
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
          

          <img align="left" src="../../image/newmacico.png" height
          ="64">

          <div class="macheader">
            <p style="position: absolute; left:93%;color:#484848">Root</p>
          <h3 style="color: #ffffff">Cybernetics</h3>
<p style="position: absolute; left:93.5%;color:#484848">the</p>
          <img src="../../image/linux.png" height="15">
          Linux
          <div class="progress m-t-xs full progress-dark progress-small" style="width: 160px;" data-toggle="tooltip" title="Difficulty: 4.1/10">
                                           <div style="width: 41%" class=" progress-bar progress-bar-warning">
                                               <span class="sr-only">41%</span>
                                           </div>
                                       </div>
<p style="position: absolute; left:93.5%;color:#484848">box</p>
          </div>

          <div class="rowspace">
          <button type="button" class="btn btn-default btn-xs" id="myBtn">Own User</button>
          <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <h3 style="color : #fff;text-align:center; padding-top:30px;"> Own User </h3>
        <p style="color : #949BA2;text-align:center; padding-top:30px;">Type below the hash that is inside the user.txt file in the machine. The file can be found under /home/{username} on Linux machines.</p>
        <form method="POST"autocomplete="off">
        <div class="hash">
        <input type="text" name="usrhash" placeholder="Enter the User hash !!" style="width: 90%;height : 30px;border-radius:3px;background-color:#383838; border:none;text-align:center;color:#fff;" required>
</div>
<div style="padding-top: 40px; padding-right: 9px;">
<input class="btn btn-default btn-xs" name="usrsave" type="submit" style="float: right;" value="Save">

</div>
</form>
      </div>

    </div>


          <button  type="button" class="btn btn-default btn-xs" id="myBtnr">Own Root</button>
          <div id="myModalr" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
          <span class="close">&times;</span>
          <h3 style="color : #fff;text-align:center; padding-top:30px;"> Own Root </h3>
          <p style="color : #949BA2;text-align:center; padding-top:30px;">Type below the hash that is inside the root.txt file in the machine. The file can be found under /root on Linux machines.</p>
          <form method = "POST" autocomplete="off">
          <div class="hash">
          <input type="text" name="roothash" placeholder="Enter the Root hash !!" style="width:90%;height : 30px;border-radius:3px;background-color:#383838; border:none;text-align:center;color:#fff;" required>
          </div>
          <div style="padding-top: 40px; padding-right: 9px;">
          <input class="btn btn-default btn-xs" name="rootsave" type="submit" style="float: right;" value="Save">

          </div>
          </form>
          </div>

          </div>

        </div>
        <div class="imgstatchart">
        <img class="imgstats" src="../../image/stats.png">
        <img class="imgchart" src="../../image/chart.png">
      </div>


      <div class="ipblock">
        <h2 style="padding-top:30px" align="center">10 . 0 . 2 . 10</h2>
        <p align="center">Machine IP</p>
      </div>

      <div class="macblock">
        <h2 style="padding-top:30px;color:#00FF00" align="center">CYBRO</h2>
        <p align="center">Machine Maker</p>
      </div>

      <img class="diffchart" src="../../image/diffchart.png">



        </div>
        </main>

        <div id="sidebar">
          <div class="sidebar__title">
            <div class="sidebar__img">
              <img src="../../image/logo3-copy.png" height="35"align="left"alt="logo" />
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
              <a href="../../">Dashboard</a>
            </div>
            <!-- <h2>MNG</h2> -->
            <div class="sidebar__link active_menu_link">
              <i class="fa fa-user-secret" aria-hidden="true"></i>
              <a href="../">Machines</a>
            </div>
            <div class="sidebar__link">
              <i class="fa fa-building-o"></i>
              <a href="../../profile/">Profile</a>
            </div>
            
            <div class="sidebar__logout">
              <i class="fa fa-power-off"></i>
              <a href="../../../logout.php">Log out</a>
            </div>
          </div>
        </div>
      </div>
      <script>
// Get the modal
var modal = document.getElementById("myModal");
var modalr = document.getElementById("myModalr");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btnr = document.getElementById("myBtnr");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var spanr = document.getElementsByClassName("close")[1];
// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}
btnr.onclick = function() {
  modalr.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
spanr.onclick = function() {
  modalr.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }

  if (event.target == modalr) {
    modalr.style.display = "none";
  }
}

</script>
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

     <script src="../../findash.js">

     </script>





</body>

</html>
