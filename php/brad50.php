<?php
    //if (!isset($_POST['page'])) return;
    $page = isset($_POST['page']) ? $_POST['page'] : 1;

    $rpp = 10;
    //$page = $_GET['page'];
    $start = ($page - 1) * $rpp;

    $mysqli = new mysqli('localhost', 'root', 'root', 'iii', 3306);
    $mysqli->set_charset('utf8');

    $sql = 'SELECT * FROM food ORDER BY id LIMIT ?, ?';
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('ii', $start, $rpp);
    $stmt->execute();
    $result = $stmt->get_result();

    $root = [];
    while ($row = $result->fetch_object()){
        //echo "{$row->id} : {$row->name}<br />";
        $root[] = $row;
    }

    $json = json_encode($root);
    echo $json;



?>