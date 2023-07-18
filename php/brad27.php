<?php
    $fp = @opendir("c:/") or die('Server Busy');

    while ($name = readdir($fp)){
        echo "{$name}<br />";
    }

    closedir($fp);
?>