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
    $a = 5;
    $str = "Hui?";
    $isWeatherGood = false;

    if($str != "Hui?" && !$isWeatherGood)
        echo "hui v rot";
    else if($a == 5) {
        $res = "hui v pizdu";
        echo $res;

        if ($str == "Hui?") {
            echo "<br> bez gandona";
        }
    }
    else if ($a > 50)
        echo '$a > 50';
    else if ($a < 45)
        echo '$a < 45';
    else if ($a <= 45)
        echo 'idi ti nakhui';
    else
        echo "hui v ochko";
?>

</body>
</html>
