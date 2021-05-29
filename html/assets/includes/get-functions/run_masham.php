<?php

$current_task_servers = $_POST["current_task_servers"];
$current_task_mvar = $_POST["current_task_mvar"];
$current_task_mval = $_POST["current_task_mval"];

//echo "$current_task_servers $current_task_mvar $current_task_mval";

if (strpos($current_task_mvar, 'Services') !== false)    {
    $command = "/usr/bin/python /var/www/html/assets/masham_scripts/service-check.py ['$current_task_servers'] ['$current_task_mval']";
    $output = exec($command, $out, $status);

    if ($status == 1)   {
        echo "Error! Failed to run python script"; //(count($out)-1)
    }
    else    {
        foreach($out as $o) {
            echo nl2br("$o\n");
        }
    }
}

else if(strpos($current_task_mvar, 'File') !== false)   {
    $command = "/usr/bin/python /var/www/html/assets/masham_scripts/fs-explode.py ['$current_task_servers'] ['$current_task_mval']";
    $output = exec($command, $out, $status);

    if ($status == 1)   {
        echo "Error! Failed to run python script";
    }
    else    {
        foreach($out as $o) {
            echo nl2br("$o\n");
        }
    }
}

else    {
    echo "that shit didnt work..";
}

?>