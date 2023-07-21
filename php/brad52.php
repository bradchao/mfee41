<?php
    var_dump($_GET);
    echo '<hr />';

    // $account = $_GET['account'];
    // $passwd = $_GET['passwd'];
    // $gender = $_GET['gender'];
    $habbit = $_GET['habbit'];
    foreach($habbit as $v){
        echo "{$v}<br />";
    }

?>