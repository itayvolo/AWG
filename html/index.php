<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
  <title>Automatic War Games</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/w3.css">
  <link rel="stylesheet" href="css/w3-theme-blue-grey.css">
  <link rel="stylesheet" href="css/w3-theme-black.css">
  <link rel="stylesheet" href="css/w3-theme-teal.css">
  <link rel="stylesheet" href="css/navibars.css">
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/smallStyles.css">
  <link rel="stylesheet" href="css/index.css">
  <script defer src="js/all.js"></script>
  <!--<link rel="stylesheet" href="css/bootstrap.css">-->
  <!--<script src="js/bootstrap.js"></script>-->
</head>
<body onclick="w3_close()">

<!-- Side Navigation -->
<div class="sidenav" id="mySidebar" onclick="event.stopPropagation();">
  <div class="topsidenav" id="topSidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="w3_close()">&times;</a>
      <div class="w3-center b">
        <h1 style="color:#eee; font-weight: bold;position:absolute;top:5%;left:30%;" class="w3-xxxlarge">Menu</h1>
      </div>
    <hr>
  </div>
  <br> 
  <br>
  <br>
  <br>
  <a href='javascript:onclick=w3_close();'>Home</a>
  <br>
  <a href="byom.php" >Build&nbsp;Your&nbsp;Own&nbsp;Masham</a>
  <br>
  <a href="#" >Masham&nbsp;List</a>
  <br>
  <a href="history.php" >History</a>
  <br>
  <a href="#" >About</a>
</div>

<!-- Top Navigation -->

<div class= topNavbar id="topNavbar">
  <a href="#myHeader">Home</a>
  <a href="byom.php">Build Your Own Masham</a>
  <a href="#Mashamlist">Masham List</a>
  <a href="history.php">History</a>
  <a href="#about">About</a>
</div>


<!-- Header -->
<header class="w3-container w3-padding w3-theme-blue-grey" id="myHeader">
  <button class="w3-btn w3-hover-light-grey" style="border-radius:10px;font-size:40px;cursor:pointer;box-shadow:0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 10%);transition:.3s;" onclick="w3_open()">&#9776;</button> 
  <div class="w3-center">
  <h4 class="w3-animate-top" style="font-weight: bold;">Automatic War Games</h4>
  <h1 class="w3-xxxlarge w3-animate-top">Build Your Own Masham</h1>
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey w3-animate-opacity" onclick="document.getElementById('id01').style.display='block'"
      style="font-weight:900; box-shadow:0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 10%);transition: .5s;border-radius:30px;">BYOM</button>
    </div>
  </div>
</header>

<!-- Modal -->
<div id="id01" class="w3-modal" style="transition: display .5s;">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
      <header class="w3-container w3-theme-l1"> 
        <span onclick="document.getElementById('id01').style.display='none'"
        class="w3-button w3-display-topright" style="border-radius:11px;right:0.3%;top:1%;transition:0.4s;">×</span>
        <h4 style="font-weight:bolder;text-align:center">!ברוכים הבאים למש"מ האוטומטי</h4>
        <h5 style="font-weight:bolder;text-align:center;"><i class="fa fa-smile-o"></i> הערה חשובה <i class="fa fa-smile-o"></i></h5>
      </header>
      <div class="w3-padding" style="font-weight:bolder;text-align:center;font-size:115%;">
        <p>!שימו לב</p> 
        <p>!לפני שתתכננו מש"מ, הרצת הג'ובים יכולה לפגוע במערכת שלכם אם אינכם יודעים מה אתם עושים</p>
        <p>.תקראו את דפי המידע לגבי הג'ובים שהינכם מתכננים להריץ</p>
        <p>!תהנו במלחמה</p>
      </div>
      <footer class="w3-container w3-theme-l1" style="text-align:center;">
      <span class="w3-button index_modal_ready_button" onclick="window.location.href='/byom.php'"><div style="position:relative;top:10%;">מוכן למלחמה</div></span>
      <i class="fas fa-stroopwafel fa-spin" style="font-weight:bolder;display:inline-block;position:relative;margin:2%;font-size:250%;"></i>
      <span class="w3-button index_modal_coward_button" onclick="document.getElementById('id01').style.display='none'"><div style="position:relative;top:10%;">מפחד קצת</div></span>
      </footer>
    </div>
</div>

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Responsive</h3><br>
  <i class="fa fa-desktop w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Built-in responsiveness</p>
  <p>Mobile first fluid grid</p>
  <p>Fits any screen sizes</p>
  <p>PC Tablet and Mobile</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Standard CSS</h3><br>
  <i class="fab fa-angellist w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Standard CSS only</p>
  <p>Easy to learn</p>
  <p>No need for jQuery</p>
  <p>No JavaScript library</p>
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>Design</h3><br>
  <i class="fas fa-anchor w3-margin-bottom w3-text-theme" style="font-size:120px"></i>
  <p>Paper like design</p>
  <p>Bold colors and shadows</p>
  <p>Equal across platforms</p>
  <p>Equal across devices</p>
  </div>
</div>
</div>

<hr>


  <div class="w3-content w3-display-container" style="max-width:400px">
  <?php
    $fileList = glob('images/Puggies/*');
    foreach($fileList as $filename){
      echo "<img class='mySlides w3-animate-opacity' src='$filename'>";
    }
  ?>
    <!--<img class="mySlides w3-animate-opacity" src="images/Bae.jpg">-->
    <!--<img class="mySlides w3-animate-opacity" src="images/pug.jpg">-->
    <!--<img class="mySlides w3-animate-opacity" src="images/berko1.jpg">-->
    <!--<img class="mySlides w3-animate-opacity" src="images/berko2.jpg">-->
    <div class="w3-center w3-container w3-large w3-display-bottommiddle" style="width:247%;left:50%;top:89%;">
      <div style="color:#e91e63;font-size:200%;width:5%;background-color:transparent;border-radius:5px;"
      class="w3-left w3-hover-text-cyan" onclick="plusDivs(-1)">&#10094;</div>
      <div style="color:#e91e63;font-size:200%;width:5%;background-color:transparent;border-radius:5px;"
       class="w3-right w3-hover-text-cyan" onclick="plusDivs(1)">&#10095;</div>
          <!--<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>-->
          <!--<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>-->
          <!--<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>-->
          <!--<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>-->
    </div>
  </div>
<br>
<hr>
<br>

<!-- Footer -->

<footer class="w3-container" style="padding:0px;">
  <div class= "w3-theme-dark w3-padding-16" style="background-color:#333!important;padding:1px!important">
    <h3 style="margin-left:1%;">Automatic War Game</h3>
    <div style="position:relative;bottom:50px;margin-right:1%;" class="w3-tooltip w3-right">
      <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
      <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
      <i class="fa fa-chevron-circle-up"></i></span></a>
    </div>
    <p style="margin-left:1%;">Remember to check out our  <a href="#" class="w3-btn w3-hover-text-black w3-hover-light-gray"
    style="transition:.5s;color:cyan;background-color:#252525;border-radius:30px;box-shadow:0 4px 10px 0 rgb(0 0 0 / 20%), 0 4px 20px 0 rgb(0 0 0 / 10%);">Hafifa Area by Voodle</a></p>
  </div>
  <div class= "w3-container w3-padding-10" style="background-color: rgb(37, 37, 37);color: white;">
    <p style="text-align: center;">&copy; 2021 All Rights Reserved: <a href="#">Mercaz-Oref</a></p>
  </div>
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>
// Side navigation
function w3_open() {
  event.stopPropagation();
  document.getElementById("mySidebar").style.width = "22%";
  //x.style.width = "35%";
  //x.style.fontSize = "40px";
  //x.style.paddingTop = "10%";
  //x.style.display = "block";
}
function w3_close() {
  document.getElementById("mySidebar").style.width = "0";
}

//close nav on any click
//$(document).on('click', function(event) {
//    if (!$(event.target).closest('#theMenu').length) {
//      $('#theMenu').removeClass('menu-open');
//    }
//});

//Top Navigation Bar

// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("topNavbar").style.top = "0";
  } else {
    document.getElementById("topNavbar").style.top = "-60px";
  }
}


// Slideshows
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  //var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  //for (i = 0; i < dots.length; i++) {
  //  dots[i].className = dots[i].className.replace(" w3-white", "");
  //}
  x[slideIndex-1].style.display = "block";  
  //dots[slideIndex-1].className += " w3-white";
}

//Automatic Slides
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 10000); // Change image every 10 seconds
}

</script>

</body>
</html>
