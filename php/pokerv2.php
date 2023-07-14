<?php
    $poker = range(0,51);
    shuffle($poker);
    foreach($poker as $card){
        echo "{$card}<br />";
    }
?>