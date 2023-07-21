<?php
    $upload = $_FILES['upload'];
    // var_dump($upload);
    foreach($upload['error'] as $k => $v){
        if ($v == 0){
            move_uploaded_file($upload['tmp_name'][$k],
                "upload/{$upload['name'][$k]}" );
        }
    }

?>