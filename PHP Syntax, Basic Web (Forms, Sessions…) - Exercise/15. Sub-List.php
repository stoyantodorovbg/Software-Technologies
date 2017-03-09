<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num1" />
    M: <input type="text" name="num2" />
    <input type="submit" />
</form>
<ul>
    <?php
    if (isset($_GET['num1']) && ($_GET['num2'])){
        $n1 = intval($_GET['num1']);
        $n2 = intval($_GET['num2']);
        ?>
<ul>
        <?php for ($i = 1; $i <= $n1; $i++) { ?>
    <li>List <?= $i ?>
            <ul>
                <?php for ($e = 1; $e <= $n2; $e++){?>
            <li>Element <?=$i?>.<?=$e?></li>

<?php }?>
            </ul>
    </li>
        <?php }?>

</ul>
    <?php }?>

</ul>
</body>
</html>