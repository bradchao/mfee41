<?php
    $passwd = '123456';
    $newpasswd = password_hash($passwd, PASSWORD_DEFAULT);
    echo $newpasswd . '<br />';

    if (password_verify('123457', $newpasswd)){
        echo 'OK';
    }else{
        echo 'XX';
    }

?>