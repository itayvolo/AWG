<?php

include '../config.php';
$query = sqlsrv_query($conn, "SELECT * FROM self_build");
while($row=sqlsrv_fetch_array($query))  {
   $server = $row['Server'];
   echo "<div>$server</div>";
}

?>