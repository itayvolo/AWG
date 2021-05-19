<?php

include '../config.php';
$mashamName = $_POST["mashamName"];  //$_POST["mashamName"];
$servers = $_POST["servers"];
$mvariable = $_POST["mvariable"];
$mvalue = $_POST["mvalue"];

if(strpos($mvariable, 'Services') !== false)    {
    $table = 'ServicesTasks';
    $columnVar = Services;
}
elseif(strpos($mvariable, 'File') !== false)    {
    $table = 'FileTasks';
    $columnVar = FilePath;
}
elseif(strpos($mvariable, 'Timeout') !== false)    {
    if (is_numeric($mvalue) !== false)  {
        $table = 'RebootTasks';
        $columnVar = Timeout;
    }
    else {
        exit("Reboot Timeout variable must be a number..");
    }
}
else{
    //echo $mvariable;
    echo "Cant define 'table' Variable";
}

//db_conn
if(strlen($servers) == 0 || strlen($mvalue) == 0 || strlen($mashamName) == 0)   {
    echo "Error, Cant continue with empty inputs..";
}
else    {
    //echo "trying to insert";
    sqlsrv_query($conn, "INSERT INTO $table (MashamName, Servers, $columnVar) VALUES ('$mashamName', '$servers', '$mvalue')");
}

?>
