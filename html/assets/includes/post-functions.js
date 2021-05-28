function Save_Run_Masham()  {
  var sbs_count = $('#scriptbox').children('div').length;
  var mname = document.getElementById('mashamName').value;
  if (sbs_count == 0) {
    toastr.error('There are no jobs in the Script-Box..');
  }
  else if (mname.length == 0)  {
    toastr.error("'MashamName' is null, Enter a name for your masham");
  }

  else  {
    //Tasks-Check
    for(var t=0;t<sbs_count;t++)  {
      var task_serv_val = $('#scriptbox').children('div')[t].children[3].innerText;
      var task_mvar = $('#scriptbox').children('div')[t].children[4].innerText;
      var task_mval = $('#scriptbox').children('div')[t].children[6].innerText;
      if (task_serv_val.length == 0 || task_mval.length == 0) {
        toastr.error("Cant Continue with empty inputs..");
        return;
      }
      else if (task_mvar.includes("Timeout") && isNaN(task_mval)==true)  {
        toastr.error("Timeout value must be a single Integer");
        return;
      }
    }
    //Tasks-Save
    var taskN;
    var mashamName = document.getElementById('mashamName').value;
    var main_variable = [];
    var main_values = [];
    var servers = [];
    var sb_object = {};
    var object_arr = [];

    for(taskN = 1; taskN <= sbs_count; taskN++)  {
      var current_task = $('#task_' + taskN);
      servers = current_task.children('p')[0].innerText.replaceAll(' ',', ');
      main_variable = current_task.children('h5')[1].innerText;

      if (main_variable.includes('Services') == true) {
        main_values = current_task.children('p')[1].innerText.replaceAll(' ',', ');
      }
      else {
        main_values = current_task.children('p')[1].innerText;
      }

      //sb_object = new Object;

      sb_object = {srvs: servers, mvar: main_variable, mval: main_values};
      object_arr.push(sb_object);
      console.log(object_arr[taskN-1]);

      $.post("assets/includes/get-functions/Save_Current_SBS.php",    {
        'mashamName': mashamName,
        'servers': object_arr[taskN-1].srvs,
        'mvariable': object_arr[taskN-1].mvar,
        'mvalue': object_arr[taskN-1].mval},  
        function(data)  {
          if (data.length == 0)   {
              console.log("Task:" + (taskN-1) + " Saved Successfuly");
              //location.reload();
          }
          else {
              toastr.error(data);
              return;
          }
        } 
      );
    }

    //Run Script

    for (var tsk=1; tsk<=sbs_count; tsk++)  {
      var current_task_servers = $('#task_' + tsk).children('p')[0].innerText;
      var current_task_mvar = $('#task_' + tsk).children('h5')[1].innerText;
      var current_task_mval = $('#task_' + tsk).children('p')[1].innerText;
      $.post("assets/includes/get-functions/run_masham.php",  {
        'current_task_servers': current_task_servers,
        'current_task_mvar': current_task_mvar,
        'current_task_mval': current_task_mval},
        function(data)  {
          //toastr.info(data);
          var l = $('#php-python-log').children('h4').length;
          var s = $('#php-python-log').children('h4');
          var tt = [];
          for(var q=0; q<l; q++)  {
            tt.push(s[q].innerText);
          }
          tt = tt.join();
          toastr.info(tt);
          if (tt == "") {
            document.getElementById("php-python-log").innerHTML += "<h4 style='text-align:center'> Task-1" + "</h4>";
            document.getElementById("php-python-log").innerHTML += "<p>" + data + "</p>";
            console.log("fuck1");
          }
          console.log(tt);
          console.log(tsk-2);
          if (tt.includes(tsk-2) == false) {
            document.getElementById("php-python-log").innerHTML += "<hr><h4 style='text-align:center'> Task-" + (tsk-1) + "</h4>";
            document.getElementById("php-python-log").innerHTML += "<p>" + data + "</p>";
            console.log("fuck2");
            console.log("trying -" + (tsk-2));
          }
        }
      );
    }
      



    
    ////History Save
    //var servers = [];
    //var l = object_arr.length;
    //for (var i=0; i<l; i++)  {
    //    console.log("starting-for-loop\n");
    //    servers.push(object_arr[i].srvs); //explode(":", $data);
    //}
    //servers= servers.join();
    //console.log(servers);
    //$.post("assets/includes/get-functions/save__masham_history.php",  {
    //  'mashamName': mashamName,
    //  'servers': servers,
    //  'l': l},
    //  function(data)  {
    //    if(data.length == 0)  {
    //      toastr.success("History-Save - Successful!!");
    //    }
    //    else  {
    //      console.log(data);
    //    }
    //  }
    //);
  }
}  