<?php
    $poker = array();
    for ($i = 0; $i < 52; $i++){
        $temp = rand(0,51);

        // 檢查機制
        $isRepeat = false;
        for ($j = 0; $j < $i; $j++){
           if ($temp == $poker[$j]){
                // 重複了
                $isRepeat = true;
                break;
           } 
        }
        if (!$isRepeat){
            $poker[$i] = $temp;
        }else{
            $i--;
        }
    }

    foreach($poker as $card){
        echo "{$card}<br />";
    }
?>