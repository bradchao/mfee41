<meta charset="utf-8" />
<?php
    $account = $_POST['account'];
    $passwd = $_POST['passwd'];
    $realname = $_POST['realname'];

    echo "{$account}:{$passwd}:{$realname}";

?>