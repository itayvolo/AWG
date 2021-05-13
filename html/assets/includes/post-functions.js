function Save_Current_SBS()  {
    var sbs_count = $('#scriptbox').children('div').length;
    if (sbs_count == 0) {
      console.log('There are 0 scripts in the list, Cant run an empty script..');
    }
  
    else  {
      var taskN;
      var main_variable = [];
      var main_values = [];
      var servers = [];
      var sb_object = {};
      var object_arr = [];
  
      for(taskN = 1; taskN <= sbs_count; taskN++)  {
        var current_task = $('#task_' + taskN);
        servers = current_task.children('p')[0].innerText.replaceAll(' ',',');
        main_variable = current_task.children('h5')[1].innerText;
  
        if (main_variable.includes('Services') == true) {
          main_values = current_task.children('p')[1].innerText.replaceAll(' ',',');
        }
        else {
          main_values = current_task.children('p')[1].innerText;
        }
  
        //sb_object = new Object;
  
        sb_object = {srvs: servers, mvar: main_variable, mval: main_values};
  
        object_arr.push(sb_object);
  
        console.log(object_arr[taskN-1]);
        $.post("assets/includes/get-functions/Save_Current_SBS.php",    {
            'servers': object_arr[taskN-1].srvs,
            'mvariable': object_arr[taskN-1].mvar,
            'mvalue': object_arr[taskN-1].mval},  
            function (data)  {
                if (data.length == 0)   {
                    $('#exampleModal').modal('hide');
                    //location.reload();
                }
                else {
                    alert(data);
                }
        }   );
      }
    }
    //console.log("sex appeal");
    //for(var i=0; i < object_arr.length; i++)  {
    //    console.log("test1");
    //    $.post("assets/includes/get-functions/Save_Current_SBS.php",    {
    //        'servers': object_arr[i].srvs,
    //        'mvariable': object_arr[i].mvar,
    //        'mvalue': object_arr[i].mval},  
    //        function (data)  {
    //            if (data.length == 0)   {
    //                $('#exampleModal').modal('hide');
    //                //location.reload();
    //            }
    //            else {
    //                alert(data);
    //            }
    //        }
    //    );
    //}   
}
