<?php

include 'assets/includes/config.php';
$query = sqlsrv_query($conn, "SELECT * FROM dbo.History");

while($row = sqlsrv_fetch_array($query))    {
    $mashamName = $row["MashamName"];
    $servers = $row["Servers"];
    $tasks = $row["Tasks"];
    $timestamp = $row["Time_Stamp"];
    echo "<tr class='my_tr'>
    <td class='my_td'>$mashamName</td>
    <td class='my_td'>$servers</td>
    <td class='my_td'>$tasks</td>
    <td class='my_td'>$timestamp</td>
    <td class='my_td'><button type='button' class='plus_fullview btn ripple-surface btn-circle btn-lg'>&plus;</button></td>
    </tr>";
}
?>