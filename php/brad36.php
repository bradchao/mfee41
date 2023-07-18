<?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);

    $sql = 'INSERT INTO cust (cname,tel,birthday) VALUES' . 
            ' ("Brad","123","1999-01-02")';
    $mysqli->query($sql);

?>