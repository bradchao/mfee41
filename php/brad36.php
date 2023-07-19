<?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);

    // $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES' . 
    //         ' ("Brad","123","1999-01-02")';
    // if ($mysqli->query($sql)){
    //     // success
    // }else{
    //     // failure
    // }

    $cname = 'Brad'; $tel = '123'; $birthday = '1999-01-02';
    $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES' . 
            ' (?,?,?)';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $cname, $tel, $birthday);
    if ($stmt->execute()){
        echo 'success';
    }else{
        echo 'failure';
    }


?>