<?php
    // https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx

    $json = file_get_contents('https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx
    ');
    //echo $json;

    $data = json_decode($json, false);
    //var_dump($data);

    $mysqli = new mysqli('localhost','root','root', 'iii', 3306);
    $mysqli->set_charset('utf8');
    foreach( $data as $k => $row){
        echo "{$k} : {$row->ID} : {$row->Name}<br />";
    }

?>