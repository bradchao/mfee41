<?php
    $x = $y = $v = '';
    if (isset($_GET['x']) && isset($_GET['y'])){
        $x = $_GET['x'];
        $y = $_GET['y'];
        $v = $x + $y;
    }
?>
<form>
    <input name="x" value="<?= $x  ?>" />
    <select name="op">
        <option value='1'>+</option>
        <option value='2'>-</option>
        <option value='3'>*</option>
        <option value='4'>/</option>
    </select>
    <input name="y" value="<?= $y ?>" />
    <input type="submit" value="="/>
    <span><?= $v ?></span>
</form>