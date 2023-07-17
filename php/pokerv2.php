<?php
    $poker = range(0,51);
    shuffle($poker);
    // foreach($poker as $card){
    //     echo "{$card}<br />";
    // }

    $players = [[],[],[],[]];
    foreach($poker as $i => $card){
        $players[$i%4][(int)($i/4)] = $card;
    }
    //echo '<hr />';

?>
<hr />
<table border="1" width="100%">
    <?php
        $shapes = ['&spades;', '<font color=red>&hearts;</font>', 
                '<font color=red>&diams;</font>', '&clubs;'];
        $values = ['A',2,3,4,5,6,7,8,9,10,
                    'J','Q','K'];
        foreach($players as $player){
            sort($player);
            echo '<tr>';
            foreach($player as $card){
                $s = $shapes[(int)$card/13];
                $v = $values[$card%13];
                echo "<td>{$s}{$v}</td>";
            }
            echo '</tr>';    
        }
    ?>
</table>




