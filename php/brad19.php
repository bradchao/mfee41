<?php
    $a = array();
    $a[0] = 12;
    $a[1] = array();
    var_dump($a);
    echo '<hr />';
    $a[1][0] = true;
    $a[1][1] = 34;
    $a[1][7] = 76;
    var_dump($a);
    echo '<hr />';
    foreach ($a as $k => $v){
        echo "{$k} :";
        // $v => normal / array
        if (gettype($v) == 'array'){
            echo '[array]<br />';
            foreach($v as $kk => $vv){
                echo "{$kk} => {$vv}<br />";
            }
        }else{
            echo "{$v}<br />";
        }
    }

?>