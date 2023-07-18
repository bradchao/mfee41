<?php
    $fname = $_GET['filename'];
    $data = $_GET['data'];

    $fp = fopen("dir1/{$fname}", 'w');
    fwrite($fp, $data);
    fflush($fp);
    fclose($fp);

    //header("Location: dir1/{$fname}");
    echo "<script>window.location.href='dir1/{$fname}';</script>";
?>