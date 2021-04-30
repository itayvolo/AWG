<?php
#$server = "awgdb1\AWGSQL";
#$dbport = 62446;
#$dbname = "awg";
#$dbuser = "p9540awg";
#$pass = "Aa123456";
#ini_set('mssql.charset', 'UTF-8');
#$conn   = mssql_connect($server, $dbuser, $pass);
#    if(!$conn)
#        die("Database connection error");
#mssql_select_db($dbname) or die("Database connection error");


$serverName = "awgdb1\\AWGSQL, 62446";
$connectionInfo = array("Database"=>"awg", "UID"=>"p9540awg", "PWD"=>"Aa123456");
$conn = sqlsrv_connect($serverName, $connectionInfo);

?>
