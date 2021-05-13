<?php

include '../config.php';
//$mashamName = $_POST["mashamName"];
$servers = $_POST["servers"];
$mvariable = $_POST["mvariable"];
$mvalue = $_POST["mvalue"];

if(str_contains($mvariable, 'Services'))    {
    $table = 'ServicesTasks';
    $columnVar = 'Services';
}
elseif(str_contains($mvariable, 'File'))    {
    $table = 'FileTasks';
    $columnVar = 'FilePath';
}
}
elseif(str_contains($mvariable, 'Reboot'))    {
    $table = 'RebootTasks';
    $columnVar = 'Timeout';
}

else{
    echo "Cant define 'table' Variable";
}

if(strlen($servers) == 0 || strlen($mvalue) == 0)   {
    echo "Error, Cant continue with empty input..";
}
else    {
    sqlsrv_query($conn, "INSERT INTO $table (MashamName, Servers, $columnVar) VALUES ($mashamName, $servers, $mvalue)");
}

?>
