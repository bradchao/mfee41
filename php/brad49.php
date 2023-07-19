<?php
if (isset($_GET['account'])){
    $account = $_GET['account'];

    $mysqli = new mysqli('localhost','root','root', 'iii', 3306);
    $mysqli->set_charset('utf8');

    $sql = 'SELECT account FROM member WHERE account = ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $account);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows() > 0){
        echo 'Account EXIST';
    }else{
        echo 'Account OK';
    }
}    
    
?>