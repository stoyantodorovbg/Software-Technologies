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
    if($number >= 3)
    {
        $array[0] = 1;
        $array[1] = 1;
        $array[2] = 2;

        for ($i = 3; $i < $number; $i++){
            $array[$i] = $array[$i - 1] + $array[$i - 2] + $array[$i - 3];
        }

        $result = implode(" ", $array);
        echo $result;
    }
    else{
        for ($i = 0; $i < $number; $i++){
            $array[$i] = 1;
        }

        $result = implode(" ", $array);
        echo $result;
    }

}
?>

</body>
</html>