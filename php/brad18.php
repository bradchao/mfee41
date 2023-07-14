<?php
    $a[] = 1;
    $a[] = 12.3;
    $a[] = 'Brad';
    var_dump($a);
    echo '<hr />';
    $a['name'] = 'Brad';
    $a['gender'] = true;
    $a['weight'] = 82;
    $a['age'] = 18;
    echo $a['name'];
    echo '<hr />';
    var_dump($a);


?>