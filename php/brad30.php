<?php
    $fname = 'dir1/brad.txt';
    $fp = fopen($fname,'r');

    $content = fread($fp, filesize($fname));
    echo $content;

    fclose($fp);
?>