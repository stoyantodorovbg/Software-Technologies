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
    $number = intval($_GET['num']);{
        if ($number > 3) {
            $result[] = null;

            for ($i = $number - 1; $i > 2; $i--) {
                $isPrime = true;
                for ($e = 2; $e < $i; $e++) {
                    if ($i % $e == 0) {
                        $isPrime = false;
                    }
                }
                if ($isPrime) {
                    $result[$i] = $i;
                }
            }

            $result = implode(" ", $result);
            echo $result;
        } else if ($number == 3) {
            echo 3;
        }
    }
}

?>
</body>
</html>