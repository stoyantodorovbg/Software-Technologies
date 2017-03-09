<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    X: <input type="text" name="num1" />
    Y: <input type="text" name="num2" />
    Z: <input type="text" name="num3" />
    <input type="submit" />
</form>
<?php
if (isset($_GET['num1']) && ($_GET['num2'])&& ($_GET['num3'])) {
    $array[] = intval($_GET['num1']);
    $array[] = intval($_GET['num2']);
    $array[] = intval($_GET['num3']);
    $counter = 0;

    $isZero = false;
    for ($i = 0; $i < 3; $i++)
    {
        if ($array[$i] == 0){
            $isZero = true;
            break;
        }
        if ($array[$i] < 0) {
            $counter++;
        }
    }
    if ($isZero) {
        echo "Positive";
    }
    else{
        if ($counter % 2 == 0){
            echo "Positive";
        }
        else{
            echo "Negative";
        }
    }

}


?>
</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: Stoyan
 * Date: 7.3.2017 г.
 * Time: 20:27
 */