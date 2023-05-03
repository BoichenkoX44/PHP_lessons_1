<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<?php
    $x = 10;
    $y = 20;

    echo $x + $y . "<br>";
    echo $x - $y . "<br>";
    echo $x * $y . "<br>";
    echo $x / $y . "<br>";
    echo $x % $y . "<br>";

    $x += 10; //$x = $x + 10;
    $y -= 10; //$y = $y - 10;
    echo $x. "<br>";
    echo $y. "<br>";

    $x++; //$x += 1;
    $x--; //$x -= 1;
    echo $x. "<br>";

    echo M_PI . "<br>";
    echo M_E . "<br>";

    echo abs(-22.3) . "<br>"; //модуль
    echo ceil(-22.3) . "<br>"; //округлення до більшого
    echo floor(-22.3) . "<br>"; //округлення до меншого
    echo round(-22.32281337, 3) . "<br>"; //логічне округлення з вибором числа після крапки
    echo mt_rand(1,20) . "<br>"; //рандомне число в діапазоні
    echo min(1,2,5,6,7,8,10) . "<br>"; //мінімальне число зі списку
    echo max(1,2,5,6,7,8,10) . "<br>"; //максимальне число зі списку


?>
</body>
</html>
