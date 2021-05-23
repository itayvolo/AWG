<!DOCTYPE html>
<html lang="en">
<head>
  <title>Automatic War Games</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<meta http-equiv="x-ua-compatible" content="ie=edge"/>-->
  <!--<link rel="stylesheet" href="css/w3.css">-->
  <link rel="stylesheet" href="css/w3-theme-blue-grey.css">
  <!--<link rel="stylesheet" href="css/w3-theme-black.css">-->
  <!--<link rel="stylesheet" href="css/w3-theme-teal.css">-->
  <link rel="stylesheet" href="css/navibars.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/smallStyles.css">
  <link rel="stylesheet" href="css/history.css">
  <link rel="stylesheet" href="css/bootstrap-4.0/bootstrap.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/toastr.min.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
  <!--<script defer src="js/all.js"></script>-->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap-4.0/bootstrap.min.js"></script>
  <script src="assets/includes/post-functions.js"></script>
  <script src="js/toastr.min.js"></script>
</head>
<body class="body" onclick="left_close()">
  <video autoplay muted loop id="myVideo">
    <source src="images/whitebg.mp4" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>
<!-- Header -->
<header class="container-xxl w3-theme-blue-grey" id="myHeader" style="position: absolute;height: 12%!important;">
    <button class="btn ripple-surface" style="font-size:40px;cursor:pointer;border: none;padding: 8px 16px;background-color: #607d8b;z-index: 0;top: 16%;" onclick="left_open()">☰</button>
</header>
<div id="main" style="width:85%; transition:0.5s;">
  <h1 id="main-title" class="text-center align-middle" style="position: relative;top: 15px;left: 49%;display: inline-block;transition: left .5s;">Masham History</h1>
</div>
<br>
<!-- Left Side Navigation -->
<div class="sidenav" id="LeftSidebar" onclick="event.stopPropagation();">
  <div class="topsidenav" id="topSidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="left_close()">&times;</a>
      <div>
          <h1 style="color:#eee;font-weight: bold;position: absolute;left: 30%;font-size: 55px;top: 20%;">Menu</h1>
      </div>
    <hr style="
      color: white;
      opacity: 0.25;
      position: absolute;
      top: 85%;
      height: 4%;
      ">
  </div>
    <br> 
    <br>
    <br>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href="/">Home</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href='byom.php'>Build&nbsp;Your&nbsp;Own&nbsp;Masham</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href="#" >Masham&nbsp;List</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href='javascript:onclick=left_close();'>History</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href="#">About</a>
</div>

<button id="refresh" class="btn ripple-surface refresh_button" onclick="window.location.reload()">Reload </button>
<button id="clear" class="btn ripple-surface clear_button">cleany_pugs</button>
<br>
<br>
<!--Table-->
<table class="my_table">
  <tbody>
    <tr class="my_th">
      <th>Masham Name</th>
      <th>Servers</th> 
      <th>Tasks</th>
      <th>Timestamp</th>
      <th>Full View</th>
    </tr>
  <?php include './assets/includes/get-functions/get_masham_history.php';?>
  </tbody>
</table>


<!-- Footer -->
<footer class="text-center text-lg-start my_footer" style="top:597.1px;">
    <div id="UpperFoot" class="p-2" style="position: relative;">
      <h3>Oref Couture</h3>
      <p> Remember to check out our <a href="#" class="btn ripple-surface" style="color: teal;font-size: medium;position: relative;padding: 7px;top: 6px;left: 0.2%;"> Hafifa Area by Voodle </a></p>
    </div>
    <!-- Copyright -->
      <div class="p-3" style="background-color: rgb(36, 35, 35);">
        <span id="copyrights" class="copyrights">
          © 2021 All Rights Reserved:
          <a href="#" style="color: white;">Mercaz-Oref</a>
        </span>
      </div>
    <!-- Copyright -->
  </footer>
<!-- Footer -->

<script>
    function left_open() {
      event.stopPropagation();
      document.getElementById("LeftSidebar").style.width = "23%";
      //x.style.width = "35%";
      //x.style.fontSize = "40px";
      //x.style.paddingTop = "10%";
      //x.style.display = "block";
    }
    
    function left_close() {
      document.getElementById("LeftSidebar").style.width = "0";
    }
</script>