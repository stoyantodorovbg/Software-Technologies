<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>
<?php
if (isset($_GET['num'])) {
    $number = intval($_GET['num']);
    $array[0] = 1;
    $array[1] = 1;

    for ($i = 2; $i < $number; $i++){
    $array[$i] = $array[$i - 1] + $array[$i - 2];
    }

    $result = implode(" ", $array);
    echo $result;
}
?>
</body>
</html>