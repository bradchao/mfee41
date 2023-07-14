<?php
    //$p1 = $p2 = $p3 = $p4 = $p5 = $p6 = 0;
    $p = array(1 => 0,0,0,0,0,0);

    for ($i = 0; $i < 100000; $i++){
        $point = rand(1,9); // 1 ~ 9
        $p[$point>6?$point-3:$point]++;
    }

    foreach($p as $point => $num){
        echo "{$point}點出現{$num}次<br />";

    }


?>