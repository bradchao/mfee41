<?php
    $fp = fopen('dir1/brad.txt','r');

    while ($c = fgetc($fp)){
        echo "{$c}";
    }

    fclose($fp);
?>