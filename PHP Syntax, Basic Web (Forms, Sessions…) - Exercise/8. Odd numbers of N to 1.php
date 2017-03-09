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
    $array[0] = $number;

    for ($i = $number - 1; $i > 0; $i--) {
        $array[$i] = $i;
    }
    for ($i = 0; $i < count($array); $i++){
        if ($array[$i] % 2 == 0){
            $array[$i] = null;
        }
    }
    $result = implode(" ", $array);
    echo $result;
}
?>
</body>
</html>