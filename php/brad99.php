<table width="100%" border="1">
    <?php
        define('ROWS', 2);
        define('COLS', 4);
        define('START', 2);

        for($k=0; $k<ROWS; $k++){
            echo '<tr>';
            for ($j = START; $j <= (START+COLS-1); $j++){
                $newj = $j + $k * COLS;
                echo '<td bgcolor="pink">';
                for ($i = 1; $i <= 9; $i++){
                    $v = $newj * $i;
                    echo "{$newj} x {$i} = {$v}<br />";
                }
                echo '</td>';
            }
            echo '</tr>';
    
        } 
    ?>
</table>