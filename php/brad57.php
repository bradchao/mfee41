<?php
    session_start();

    $rand = rand(1,49);
    $_SESSION['rand'] = $rand;
    echo $rand;
?>
<hr />
<a href='brad58.php'>brad58</a>