<meta charset="utf-8" />
<?php
    $account = $_REQUEST['account'];
    $passwd = password_hash($_REQUEST['passwd'], PASSWORD_DEFAULT) ;
    $realname = $_REQUEST['realname'];

    $mysqli = new mysqli('localhost','root','root', 'iii', 3306);
    $mysqli->set_charset('utf8');

    $sql = 'INSERT INTO member (account,passwd,realname) ' .
            'VALUES (?,?,?)';
    
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $account, $passwd, $realname);
    if ($stmt->execute()){
        echo 'Register success';
    }else{
        echo 'Register failure';
    }



?>