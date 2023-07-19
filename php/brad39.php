<?php
    // https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx

    $json = file_get_contents('https://data.coa.gov.tw/Service/OpenData/ODwsv/ODwsvTravelFood.aspx');
    //echo $json;

    $data = json_decode($json, false);
    //var_dump($data);

    $mysqli = new mysqli('localhost','root','root', 'iii', 3306);
    $mysqli->set_charset('utf8');
    $sql = 'INSERT INTO food (name,tel,addr,hostwords,city,town,pic,lat,lng) '.
            'VALUES (?,?,?,?,?,?,?,?,?)';
    $stmt = $mysqli->prepare($sql);
    foreach( $data as $k => $row){
        echo "{$k} : {$row->City} : {$row->Name}<br />";
        $stmt->bind_param('sssssssdd',$row->Name,$row->Tel,$row->Address,
        $row->HostWords,$row->City,$row->Town,
        $row->PicURL,$row->Latitude,$row->Longitude);
        $stmt->execute();
    }

?>