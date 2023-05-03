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
define('MY_DICK_SIZE', 14);
    echo "<br> Dovzhina mogo chlena: " . MY_DICK_SIZE;

    $num = 5; //int
    //$num = 45;
    $num1 = -0.55 . " pezda yakas'"; //float

    $str = "Zminna"; //string
    $bool = true; //boolean

    $a = 0.5;
    $b = "0.5";

    echo "<br>" . $a + floatval($b) . " ";

    echo $str . ': ' . $num . ". Zm 2: " . $num1;
    //echo $num1;

?>
</body>
</html>
