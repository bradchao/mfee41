<?php
    $fp = fopen('dir1/brad2.txt', 'a');
    fwrite($fp, "\nabcdefg");
    fflush($fp);
    fclose($fp);
?>