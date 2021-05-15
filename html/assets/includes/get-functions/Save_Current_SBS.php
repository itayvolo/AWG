<?php

include '../config.php';
$mashamName = "test1";  //$_POST["mashamName"];
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
elseif(strpos($mvariable, 'Reboot') !== false)    {
    $table = 'RebootTasks';
    $columnVar = Timeout;
}
else{
    //echo $mvariable;
    echo "Cant define 'table' Variable";
}

//db_conn
if(strlen($servers) == 0 || strlen($mvalue) == 0)   {
    echo "Error, Cant continue with empty input..";
}
else    {
    //echo "trying to insert";
    sqlsrv_query($conn, "INSERT INTO $table (MashamName, Servers, $columnVar) VALUES ('$mashamName', '$servers', '$mvalue')");
}

?>
