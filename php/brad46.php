<meta charset="utf-8" />
<?php
    if (isset($_POST['account']) && isset($_POST['passwd'])){
        $account = $_POST['account']; $passwd = $_POST['passwd'];

        $mysqli = new mysqli('localhost','root','root', 'iii', 3306);
        $mysqli->set_charset('utf8');

        $sql = 'SELECT id,account,passwd,realname FROM member WHERE account = ?';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s', $account);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows() > 0){
            $stmt->bind_result($id,$account,$hasppasswd,$realname);
            $stmt->fetch();
            if (password_verify($passwd, $hasppasswd)){
                // OK
                header('Location: brad47.php');
            }else{
                // passwd error
                header('Location: brad45.html');
            }
        }else{
            // account NOT exist
            header('Location: brad45.html');
        }
    }else{
        // ill
        header('Location: brad45.html');
    }


?>