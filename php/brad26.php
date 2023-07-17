<?php
    $img = imagecreatefromjpeg('imgs/papple.jpg');

    $blue = imagecolorallocate($img, 0,0,255);
    imagettftext($img, 36, -30, 200, 400, $blue,
        'fonts/mingliu.ttc',
        'Hello, 資策會');

    // 3. 輸出(Browser/File)
    header('content-type: image/jpeg');
    imagejpeg($img);
    imagejpeg($img, 'imgs/newpapple.jpg');

    // 4. 清除
    imagedestroy($img);
?>