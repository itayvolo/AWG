<!DOCTYPE html>
<html lang="en">
<head>
  <title>AWG</title>
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
  <link rel="stylesheet" href="css/byom.css">
  <link rel="stylesheet" href="css/bootstrap-4.0/bootstrap.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"/>
  <!--<script defer src="js/all.js"></script>-->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap-4.0/bootstrap.min.js"></script>
  <script src="assets/includes/post-functions.js"></script>
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
  <button id="arrow" class="btn ripple-surface" onclick="right_close();"><i class="fas fa-angle-double-right"></i></button>
  <h1 id="main-title" class="text-center align-middle" style="position: relative;top: 4%;left: 32.5%;display: inline-block;transition: left .5s;">Automatic War Games</h1>
</div>
<br>
<!-- Left Side Navigation -->
<div class="sidenav" id="LeftSidebar" onclick="event.stopPropagation();">
  <div class="topsidenav" id="topSidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="left_close()">&times;</a>
      <div>
          <h1 style="color:#eee;font-weight: bold;position: absolute;left: 35%;font-size: 55px;top: 20%;">Menu</h1>
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
  <a class="btn ripple-surface" style="text-align: left;" href='javascript:onclick=left_close();'>Build&nbsp;Your&nbsp;Own&nbsp;Masham</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href="#" >Masham&nbsp;List</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href="#" >History</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href="#" >About</a>
</div>
  
<!--Right Side Navigation-->

<div class="rightsidenav" id="RightSidebar">
  <div class="righttopsidenav" id="righttopSidebar">
    <div>
      <h1 style="color:#eee;font-weight: bold;position: absolute;/* left: 30%; */font-size: 36px;/* top: 25%; */padding: 36px 28px 31px 28px;">Script&nbsp;Options</h1>
    </div>
    <hr style="
      color: white;
      opacity: 0.25;
      position: relative;
      top: 85%;
      height: 5%;
      ">
  </div>
  <div style="position: absolute;width: 100%;top: 12.5%;">
    <!--Self-Build Tab-->
    <button id="dropdown1" class="btn ripple-surface dropdown-btn active"><nobr>Self&nbsp;-&nbsp;Build<i id="caret1" class="fa fa-caret-up" style="right:-20%;"></i></nobr></button>
    <div id="dd-container1" class="dropdown-container" style="display: block;">
      <div class="right_a">
        <nobr><button type="button" id="plus_sb1" class="plusim btn ripple-surface btn-circle btn-lg" onclick="open_modal('Service','Service Check','Save_SB1');">&plus;</button><span id="Service" class="script_title">Service Check</span><a id="info1" class="infos btn ripple-surface btn-circle btn-lg">&#9432;</a></nobr>
      </div>
      <hr>
      <div class="right_a">
        <nobr><button type="button" id="plus_sb2" class="plusim btn ripple-surface btn-circle btn-lg" onclick="open_modal('File Path','FS Explosion');">&plus;</button><span id="File Path" class="script_title">FS Explosion</span><a id="info2" class="infos btn ripple-surface btn-circle btn-lg">&#9432;</a></nobr>
      </div>
      <hr>
      <div class="right_a">
        <nobr><button type="button" id="plus_sb3" class="plusim btn ripple-surface btn-circle btn-lg" onclick="open_modal('Timeout (Seconds)','Reboot');">&plus;</button><span id="Timeout (Seconds)" class="script_title">Reboot</span><a id="info3" class="infos btn ripple-surface btn-circle btn-lg">&#9432;</a></nobr>
      </div>
    </div> 
    <!--Full Mashams Tab-->
      <button id="dropdown2" class="btn ripple-surface dropdown-btn"><nobr>Full&nbsp;Mashams<i id="caret2" class="fa fa-caret-down"></i></nobr></button>
    <div id="dd-container2" class="dropdown-container" style="display: none;">
      <div class="right_a">
        <nobr><button type="button" id="plus_fm1" class="plusim btn ripple-surface btn-circle btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="XRM">&plus;</button><span id="XRM" class="script_title">XRM</span><a id="info11" class="infos btn ripple-surface btn-circle btn-lg">&#9432;</a></nobr>
      </div>
      <hr>
      <div class="right_a">
        <nobr><button type="button" id="plus_fm2" class="plusim btn ripple-surface btn-circle btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="IDM">&plus;</button><span id="IDM" class="script_title">IDM</span><a id="info12" class="infos btn ripple-surface btn-circle btn-lg">&#9432;</a></nobr>
      </div>
      <hr>
      <div class="right_a">
        <nobr><button type="button" id="plus_fm3" class="plusim btn ripple-surface btn-circle btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="Exchange">&plus;</button><span id="Exchange" class="script_title">Exchange</span><a id="info13" class="infos btn ripple-surface btn-circle btn-lg">&#9432;</a></nobr>
      </div>
    </div>
  </div>
</div>
<!--Script-Box-->
<div id="scriptbox" class="script-box">
  <!--<div id="scriptgraybox" class="script-gray-box"></div>-->
  <h3 class="box_title">Script-Box</h3>
</div>
<!--Log-Box-->
<div id="logbox" class="log-box">
  <!--<div id="loggraybox" class="log-gray-box"></div>-->
  <h3 class="box_title">log-Box</h3>
</div>

<!--Box-Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #607d8b;">
        <h4 class="modal-title" id="exampleModalLabel">File Check:</h4>
        <button type="button" class="close" onclick="close_modal();" aria-label="Close">
          <span aria-hidden="true" style="color: #818181;">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-outline mb-4">
            <input type="email" id="server_v" class="form-control" />
            <label id="first-label" class="form-label">Server</label>
          </div>
          <div class="form-outline mb-4">
            <input type="text" id="main_v" class="form-control" />
            <label id="second-label" class="form-label">Script Main Variable</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="close_modal()" style="background-color:#818181;">Dismiss</button>
        <button id="run" type="button" class="btn btn-primary" style="background-color: #607D99;" onclick="add_sb(),close_modal()">Add Script</button><!--onclick="Save_SB1()"-->
      </div>
    </div>
  </div>
</div>

  <br>
  <br>

<!-- Footer -->
  <footer class="text-center text-lg-start my_footer">
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
function open_modal(main_variable,Name)
  {  
    //var get_Name = $("#" + Main_Variable).html();
    //var Name = $("#" + Main_Variable).text;
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $('#exampleModal');
    modal.find('.modal-title').text(Name);
    modal.find('.modal-body #second-label').text(main_variable);
    //modal.find('.modal-footer #run').onclick=function(){Save_SB1()};
    modal.modal('show');
  }

function close_modal()
  {
    var modal = $('#exampleModal');
    modal.modal('hide');
  }

//Add Self Build Script
function add_sb() {
  var variable1 = $('#first-label').val;
  var variable2 = (document.getElementById('second-label')).value;

  var input1 = (document.getElementById("server_v")).value;
  var input2 = (document.getElementById("main_v")).value;

  var base_top = 10;
  var sbs_count = $('#scriptbox').children('div').length;
  var sbs_latest = sbs_count + 1;
  var sbs_latest_id = "task_" + (sbs_latest);
  var parant_html = document.getElementById("scriptbox");
      parant_html.innerHTML += "<div class='sb_inside_box'></div>";

  task_html = $('#scriptbox').children('div')[sbs_count]
  task_html.setAttribute('id', sbs_latest_id);

  ($('#' + sbs_latest_id)).addClass('slide_animation')
  window.setTimeout(function()  {
    ($('#' + sbs_latest_id)).removeClass('slide_animation')   
  }, 1000);

  alert(variable1);

  //if (sbs_latest == 1) {
  //  task_html.style['top'] = base_top + '%';
  //}
  //
  //else  {
  //  var latest_top = ($('#scriptbox').children('div')[sbs_count -1]).style['top'];
  //  latest_top = latest_top.replace('%', ""); //DONT FORGET TO FIX THIS!
  //  task_html.style['top'] = (Number(latest_top) + 15) + '%';
  //}

}

  //LeftSideNav
  
function left_open() {
  event.stopPropagation();
  document.getElementById("LeftSidebar").style.width = "28%";
  //x.style.width = "35%";
  //x.style.fontSize = "40px";
  //x.style.paddingTop = "10%";
  //x.style.display = "block";
  }

function left_close() {
  document.getElementById("LeftSidebar").style.width = "0";
  }

  //RightSideNav
/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function right_open() {
  document.getElementById("arrow").setAttribute('onclick','right_close()')

  document.getElementById("RightSidebar").style.right = "0%";
  document.getElementById("main").style.width = "85%";
  document.getElementById("scriptbox").style.left = "7%";
  document.getElementById("logbox").style.left = "11%";
  document.getElementById("copyrights").style.left = "35.5%";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function right_close() {
  document.getElementById("arrow").setAttribute('onclick','right_open()')

  document.getElementById("RightSidebar").style.right = "-15%";
  document.getElementById("main").style.width = "100%";
  document.getElementById("scriptbox").style.left = "12%";
  document.getElementById("logbox").style.left = "16%";
  document.getElementById("copyrights").style.left = "40.5%";

}

$(document).ready(function(){
  $("#arrow").click(function(){
    $("#arrow .fa-angle-double-right").toggleClass("rtoate-180");
  });
});

//DropDown
//var dropdown = document.getElementsByClassName("dropdown-btn");
//var i;

//for (i = 0; i < dropdown.length; i++) {
//  dropdown[i].addEventListener("click", function() {
//    this.classList.toggle("active");
//    var dropdownContent = this.nextElementSibling;
//    if (dropdownContent.style.display === "block") {
//      dropdownContent.style.display = "none";
//    } else {
//      dropdownContent.style.display = "block";
//    }
//  });
//}

$(document).ready(function(){
  $("#dropdown1").click(function(){
    this.classList.toggle("active");
    $("#caret1").toggleClass("rtoate180");
    $("#dd-container1").stop().slideToggle(350);
  });
});

$(document).ready(function(){
  $("#dropdown2").click(function(){
    this.classList.toggle("active");
    $("#caret2").toggleClass("rtoate180");
    $("#dd-container2").stop().slideToggle(350);
  });
});

//Plus Rotation

$(document).ready(function(){
  $("#plus_sb1").click(function(){
    $("#plus_sb1").toggleClass("rtoate180");
  });
});

$(document).ready(function(){
  $("#plus_sb2").click(function(){
    $("#plus_sb2").toggleClass("rtoate180");
  });
});

$(document).ready(function(){
  $("#plus_sb3").click(function(){
    $("#plus_sb3").toggleClass("rtoate180");
  });
});

$(document).ready(function(){
  $("#plus_fm1").click(function(){
    $("#plus_fm1").toggleClass("rtoate180");
  });
});

//$(document).ready(function(){
//  $("#plus_fm2").click(function(){
//    $("#plus_fm2").toggleClass("rtoate180");
//  });
//});

$(document).ready(function(){
  $("#plus_fm3").click(function(){
    $("#plus_fm3").toggleClass("rtoate180");
  });
});

function rotation(){
  document.getElementById("plus_fm2").toggleClass = "rotate180";
}

</script>
</body>
</html>