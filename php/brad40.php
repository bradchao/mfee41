<?php
    $mysqli = new mysqli('localhost','root','root', 'iii', 3306);
    $mysqli->set_charset('utf8');
    $sql = 'SELECT * FROM food';
    
    $result = $mysqli->query($sql);
    while ( $row = $result->fetch_object() ){
        echo "{$row->id} : {$row->name} : {$row->tel}<br />";
    }

?>