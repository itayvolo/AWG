<?php

include '../config.php';
$servers = $_POST["servers"];
$mashamName = $_POST["mashamName"];
$l = $_POST["l"];
$table = "History";

$servers = implode(',',array_unique(explode(',', $servers)));
date_default_timezone_set('Asia/Jerusalem');
$datetime = date("Y-m-d H:i:s");

//db_conn
if(strlen($servers) == 0 || strlen($mashamName) == 0)   {
    echo "Error, Cant continue with empty inputs..";
}
else    {
    //echo "trying to insert";
    sqlsrv_query($conn, "INSERT INTO $table (MashamName, Servers, Tasks, Time_Stamp) VALUES ('$mashamName', '$servers', '$l', '$datetime')");
}


?>