<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php for ($e = 0; $e < 9; $e++)
{
    for ($i = 0; $i < 5; $i++)
    {
        if ($e == 0 || $e == 8 || $e == 4)
        {
            echo "<button style='background-color: blue'>1</button>";
        }
        if ($e > 0 && $e < 4)
        {
            if ($i == 0)
            {
                echo "<button style='background-color: blue'>1</button>";
            }
            else
            {
                echo "<button>0</button>";
            }
        }
        if ($e > 4 && $e < 8)
        {
            if ($i == 4)
            {
                echo "<button style='background-color: blue'>1</button>";
            }
            else
            {
                echo "<button>0</button>";
            }
        }

    }
    echo "<br>";
}
?>
</body>
</html>