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
  <link rel="stylesheet" href="css/byom.css">
  <link rel="stylesheet" href="css/bootstrap-4.0/bootstrap.css">
  <link rel="stylesheet" href="css/mdb.min.css">
  <link rel="stylesheet" href="css/toastr.min.css">
  <link rel="stylesheet" href="css/loading.css">
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
    <button class="btn ripple-surface" style="border-radius:10px;font-size:40px;cursor:pointer;border: none;padding: 8px 16px;background-color: #607d8b;z-index: 0;top: 16%;" onclick="left_open()">☰</button>
</header>
<div id="main" style="width:85%; transition:0.5s;">
  <button style="border-radius:10px;" id="arrow" class="btn ripple-surface" onclick="right_close();"><i class="fas fa-angle-double-right"></i></button>
  <h1 id="main-title" class="text-center align-middle" style="position: relative;top: 4%;left: 33.5%;display: inline-block;transition: left .5s;">Automatic War Games</h1>
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
  <a class="btn ripple-surface" style="text-align: left;" href='javascript:onclick=left_close();'>Build&nbsp;Your&nbsp;Own&nbsp;Masham</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href="#" >Masham&nbsp;List</a>
    <br>
  <a class="btn ripple-surface" style="text-align: left;" href="history.php" >History</a>
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
        <nobr><button type="button" id="plus_sb1" class="plusim btn ripple-surface btn-circle btn-lg" onclick="open_modal('Services','Service Check');">&plus;</button><span id="Service" class="script_title">Service Check</span><a id="info1" class="infos btn ripple-surface btn-circle btn-lg">&#9432;</a></nobr>
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

<!-- Masham Name -->
<div class="ccontainer">  
  <form>
    
    <div id="group" class="group">      
      <input type="text" id="mashamName" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label style="left:30%;">Masham Name</label>
    </div>
    
  </form>
</div>

<!--Script-Box-->
<div id="scriptbox" class="script-box">
  <!--<div id="scriptgraybox" class="script-gray-box"></div>-->
  <h3 class="box_title" style="vertical-align:middle;padding:1% 0% 0% 0%">Script-Box</h3>
  <hr>
</div>
<!--Log-Box-->
<div id="logbox" class="log-box">
  <!--<div id="loggraybox" class="log-gray-box"></div>-->
  <h3 class="box_title" style="vertical-align:middle;padding:1% 0% 0% 0%">log-Box</h3>
  <hr>
  <div id="php-python-log"></div>
  <br>
</div>

<!--Box-Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #607d8b;">
        <h4 class="modal-title" id="exampleModalLabel">File Check:</h4>
        <button type="button" class="close" onclick="close_modal();" aria-label="Close">
          <span aria-hidden="true" style="color: #4f4f4f;">&times;</span>
        </button>
      </div>
      <div class="modal-body ccontainer">
        <form>
          <div id="group" class="group" style="left:1%;">      
            <input type="text" id="server_v" style="width:400px!important;" required>
            <span class="highlight"></span>
            <span class="bar" style="width:400px!important;"></span>
            <label id="first-label" style="left:2%;">Servers</label>
          </div>
          <br>
          <br>
          <div id="group" class="group" style="left:1%;">      
            <input type="text" id="main_v" style="width:400px!important;" required>
            <span class="highlight"></span>
            <span class="bar" style="width:400px!important;"></span>
            <label id="second-label" style="left:2%;">Script Main Variable</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="close_modal()" style="background-color:#818181;">Dismiss</button>
        <button id="run" type="button" class="btn btn-primary" style="background-color: #607D99;" onclick="add_sb(),close_modal(),reset_modal()">Add Script</button><!--onclick="Save_SB1()"-->
      </div>
    </div>
  </div>
</div>

<br>
<br>
<button id="runbutton" class="run_button btn ripple-surface" onclick="Save_Run_Masham()"><div style="left:0%;display:inline-block;position:relative;width:70%;vertical-align:65%;">Save & Run</div>
<div id="loading" class="loadingio-spinner-gear-fsfqfnlp58u"><div class="ldio-8v7o0z2h3mi">
<div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</div></div>
</button><!--onclick="Save_Current_SBS()"-->
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
function open_modal(main_variable,Name) {  
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

function close_modal()  {
  var modal = $('#exampleModal');
  modal.modal('hide');
}

function reset_modal()  {
  var input1 = $('#server_v')[0];
  var input2 = $('#main_v')[0];
  input1.value='';
  input2.value='';
}

//Add Self Build Script
function add_sb() {
  //var task_nums = []
  var variable1 = $('#first-label').text();
  var variable2 = $('#second-label').text();

  var input1 = (document.getElementById("server_v")).value;
  var input2 = (document.getElementById("main_v")).value;

  var base_top = 10;
  var sbs = $('#scriptbox').children('div').length;
  if (sbs == 0) {
    sbs_count = 1;
  }
  else  {
    for(var w=0; w<sbs; w++)  {
      ($('#scriptbox').children('div')[w]).setAttribute('id', "task_" + (w+1));
      t = document.getElementById('task_' + (w+1));
      t.children[1].setAttribute('id', (w+1));
      t.children[1].setAttribute('onclick', ("rotation(" + "'" + (w+1) + "a" + "')" + ',' + "remove_sb(" + "'" + (w+1) + "')"));
      ($('#' + (w+1))).removeClass('fade-in-removebtn');
      //($('#task_' + (w+1)).children('button')).setAttribute('id', (w+1));
      //var sbs_number = sbs_name.replace(/[^0-9]/g,'')
      //task_nums.push(sbs_number);
      //who_bigger = Math.max(...task_nums);
    }
    sbs_count = sbs + 1;
  }
  //var sbs_latest = sbs_count + 1;
  var sbs_latest_id = "task_" + (sbs_count);
  var parant_html = document.getElementById("scriptbox");
      parant_html.innerHTML += "<div class='sb_inside_box'></div>";

  task_html = $('#scriptbox').children('div')[sbs];
  task_html.setAttribute('id', sbs_latest_id);

  ($('#' + sbs_latest_id)).addClass('slide_animation');
  //($('#' + sbs_latest_id)).css('height','85px');
  window.setTimeout(function()  {
    ($('#' + sbs_latest_id)).removeClass('slide_animation');
    document.getElementById(sbs_latest_id).style['max-height'] = '200px';
    //document.getElementById(sbs_latest_id).style['height'] = 'Auto';
    ($('#' + sbs_latest_id)).css('overflow-x','auto');
    //document.getElementById(sbs_latest_id).className += ' ' + 'minHeight_animation';
    //document.getElementById(sbs_latest_id).style.removeProperty('height');
    //document.getElementById(sbs_latest_id).style['transition'] = 'min-height 1s ease';
  }, 1000);

  window.setTimeout(function()  {
    document.getElementById(sbs_latest_id).innerHTML = "<h5 class='fade-in-text' style='padding-top:1%;color:black;margin-left:1%;display:inline-block;'>" + variable1 + "</h5>" + 
    "<button type='button' id=" + sbs_count + ' ' + "class='fade-in-removebtn ixim btn ripple-surface btn-circle btn-lg' id='plus_sb2' onclick=" + 
    "rotation(" + "'" + sbs_count + "a" + "')" + ',' + "remove_sb(" + "'" + sbs_count + "')><p id=" + sbs_count + "a" + ' ' + "style='margin:0px 0px 0px 0px;transition:.5s;padding-bottom:5%;'>x</p></button>" + 
    ' ' + "<h6 class='fade-in-text' style='display:inline-block;color:black;'>" + '-->' + "</h6>" + "<p class='fade-in-text' style='margin-left:1%;'>" + ' ' + input1 + "</p>";

    //document.getElementById(sbs_latest_id).innerHTML += '<br>';
    document.getElementById(sbs_latest_id).innerHTML += "<h5 class='fade-in-text' style='color:black;margin-left:1%;display:inline-block;'>" + variable2  + "</h5>" + ' ' + "<h6 class='fade-in-text' style='display:inline-block;color:black;'>" + '-->' + "</h6>" + "<p class='fade-in-text' style='margin-left:1%;'>" + ' ' + input2 + "</p>";
  }, 500);
  
  window.setTimeout(function()  {
    var sb = document.getElementById(sbs_latest_id);
    sb.children[0].removeAttribute('class');
    sb.children[2].removeAttribute('class');
    sb.children[3].removeAttribute('class');
    sb.children[4].removeAttribute('class');
    sb.children[5].removeAttribute('class');
    sb.children[6].removeAttribute('class');
  }, 1500);

  var sbs_latest_count = $('#scriptbox').children('div').length;
  if (sbs_latest_count == sbs_count)  {
    toastr.success('Job added successfully!');
  }
  else  {
    toastr.warning('Failed to add job to list');
  }
}

//function save_sbs() {
//  var sbs_count = $('#scriptbox').children('div').length;
//  if (sbs_count == 0) {
//    console.log('There are 0 scripts in the list, Cant run an empty script..');
//  }
//
//  else  {
//    var taskN;
//    var main_variable;
//    var main_values;
//    var servers;
//    var sb_object = {};
//    var object_arr = [];
//
//    for(taskN = 1; taskN <= sbs_count; taskN++)  {
//      var current_task = $('#task_' + taskN);
//      servers = current_task.children('p')[0].innerText.replaceAll(' ',',');
//      main_variable = current_task.children('h5')[1].innerText;
//
//      if (main_variable.includes('Services') == true) {
//        main_values = current_task.children('p')[1].innerText.replaceAll(' ',',');
//      }
//      else {
//        main_values = current_task.children('p')[1].innerText;
//      }
//
//      //sb_object = new Object;
//
//      sb_object = {srvs: servers, mvar: main_variable, mval: main_values};
//
//      object_arr.push(sb_object);
//
//      console.log(object_arr[taskN-1]); 
//    }
//    return object_arr;
//  }
//}

function remove_sb(aa)  {
  ($('#task_' + aa)).remove();
  var sbs = $('#scriptbox').children('div').length;
  if (sbs >= 1) {
    for(var w=0; w<sbs; w++)  {
        ($('#scriptbox').children('div')[w]).setAttribute('id', "task_" + (w+1));
        t = document.getElementById('task_' + (w+1));
        t.children[1].setAttribute('id', (w+1));
        t.children[1].setAttribute('onclick', ("rotation(" + "'" + (w+1) + "a" + "')" + ',' + "remove_sb(" + "'" + (w+1) + "')"));
        //($('#task_' + (w+1)).children('button')).setAttribute('id', (w+1));
        //var sbs_number = sbs_name.replace(/[^0-9]/g,'');
        //task_nums.push(sbs_number);
        //who_bigger = Math.max(...task_nums);
    }
  }
}

  //LeftSideNav
  
function left_open() {
  event.stopPropagation();
  document.getElementById("LeftSidebar").style.width = "20%";
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
  document.getElementById("runbutton").style.left = "36.4%";
  document.getElementById("group").style.left = "35%";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function right_close() {
  document.getElementById("arrow").setAttribute('onclick','right_open()')

  document.getElementById("RightSidebar").style.right = "-15%";
  document.getElementById("main").style.width = "100%";
  document.getElementById("scriptbox").style.left = "12%";
  document.getElementById("logbox").style.left = "16%";
  document.getElementById("copyrights").style.left = "40.5%";
  document.getElementById("runbutton").style.left = "41.4%";
  document.getElementById("group").style.left = "40%";
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

//$(document).ready(function(){
//  $("#plus_sb1").click(function(){
//    $("#plus_sb1").toggleClass("rtoate180");
//  });
//});
//
//$(document).ready(function(){
//  $("#plus_sb2").click(function(){
//    $("#plus_sb2").toggleClass("rtoate180");
//  });
//});
//
//$(document).ready(function(){
//  $("#plus_sb3").click(function(){
//    $("#plus_sb3").toggleClass("rtoate180");
//  });
//});
//
//$(document).ready(function(){
//  $("#plus_fm1").click(function(){
//    $("#plus_fm1").toggleClass("rtoate180");
//  });
//});

//$(document).ready(function(){
//  $("#plus_fm2").click(function(){
//    $("#plus_fm2").toggleClass("rtoate180");
//  });
//});
//
//$(document).ready(function(){
//  $("#plus_fm3").click(function(){
//    $("#plus_fm3").toggleClass("rtoate180");
//  });
//});

function rotation(aa) {
  ($('#' + aa)).toggleClass("rtoate180");
}

window.onbeforeunload = function() {
  return "Data will be lost if you leave the page, are you sure?";
};

//TOASTR - ALERT MESSAGES

// Set the options that I want
toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": true,
  "onclick": null,
  "showDuration": "200",
  "hideDuration": "1000",
  "timeOut": "4000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "slideDown",
  "hideMethod": "fadeOut"
}

//TOASTR Functions


</script>
</body>
</html>