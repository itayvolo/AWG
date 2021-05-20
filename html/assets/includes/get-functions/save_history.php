<?php

include '../config.php';
$servers = $_POST["servers"];
$mashamName = $_POST["mashamName"];
$l = $_POST["l"];
$table = "History";

//db_conn
if(strlen($servers) == 0 || strlen($mashamName) == 0)   {
    echo "Error, Cant continue with empty inputs..";
}
else    {
    //echo "trying to insert";
    sqlsrv_query($conn, "INSERT INTO $table (MashamName, Servers, Tasks) VALUES ('$mashamName', '$servers', '$l')");
}


?>