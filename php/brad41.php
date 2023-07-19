<?php
    $mysqli = new mysqli('localhost','root','root', 'iii', 3306);
    $mysqli->set_charset('utf8');
    $sql = 'SELECT id,name,tel,city FROM food WHERE city LIKE ?';

    $key = "%臺中%";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $key);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $name, $tel, $city);

    while ($stmt->fetch()){
        echo "{$id} : {$name} : {$tel} : {$city}<br />";
    }

    $stmt->free_result();

?>