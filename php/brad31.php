<?php
    $lines = file('dir1/covid19.csv');
    foreach($lines as $line){
        $field = explode(',', $line);
        echo "{$field[3]}:{$field[5]}<br />";
    }

?>