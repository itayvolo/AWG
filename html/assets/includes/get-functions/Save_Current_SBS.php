<?php

include '../config.php';
$server = $_POST["server"];
$service = $_POST["service"];
if(strlen($server) == 0 || strlen($service) == 0)
    echo "Error, Cant continue with empty input..";
else    {
    sqlsrv_query($conn, "INSERT INTO self_build (Server, Service) VALUES ('$server','$service')");
}

?>
