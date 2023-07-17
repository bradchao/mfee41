<?php
    $rate = $_GET['rate']; // 50%
    // 1. 畫布
    $img = imagecreate(400, 20);
    // 2. 作畫
    $yellow = imagecolorallocate($img,255,255,0);
    imagefilledrectangle($img, 0,0,400,20, $yellow);

    $red = imagecolorallocate($img,255,0,0);
    imagefilledrectangle($img, 0,0,400*$rate/100,20, $red);
    
    // 3. 輸出(Browser/File)
    header('content-type: image/jpeg');
    imagejpeg($img);

    // 4. 清除
    imagedestroy($img);

?>