<?php
    $ary = array(1,2,3,4,5,6,7);
    var_dump($ary);
    echo '<hr />';
    for ($i = 0; $i < count($ary); $i++){
        echo "{$ary[$i]}<br />";        
    }

    echo '<hr />';
    echo $ary[3];
    echo '<hr />';
    $ary[2] = 'III';

    for ($i = 0; $i < count($ary); $i++){
        echo "{$ary[$i]}<br />";        
    }

    var_dump($ary);
    echo '<hr />';
    eCHo count($ary);
    $ary[137] = 'OK';
    echo '<hr />';
    eCHo count($ary);
    var_dump($ary);
    echo '<hr />';

    foreach( $ary as  $key => $value){
        echo "[{$key}] = {$value}<br />";
    }

?>