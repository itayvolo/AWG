function Save_SB1()  {
    console.log("sex appeal");
    $.post("assets/includes/get-functions/Save_SB1.php",   {
        'server': $("#server_v").val(),
        'service': $("#main_v").val()
    },  function (data)  {
            if (data.length == 0) {
                $('#exampleModal').modal('hide');
                location.reload();
            }
            else {
                alert(data);
            }
        });
}   
