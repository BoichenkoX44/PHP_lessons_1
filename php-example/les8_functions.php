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
//functions with returning result
/*
    function info($word) {
        echo "$word <br>";
    }
    function math ($x, $y){
        return $x + $y;
    }
    $res_1 = math (4,6);
    $res_2 = math (5,6);
    $res_3 = math (6,6);

    info($res_1);
    info($res_2);
    info($res_3);
*/
// function for getting summary
/*    function summary($arr) {
        $summa = 0;
        foreach($arr as $value){
            $summa += $value;
        }
        return $summa;
    }

    $list = [4, 5, 6, 7, 8];
    echo summary($list). "<br>";
    echo summary([3, 5, 7, 9]). "<br>";
*/
// global and static functions;
/*    function info(){
        global $x;
        $x = 0.1;
    }

    function click(){
        static $count;
        $count++;
        echo $count . '<br>';
    }

    click();
    click();
    click();


    $x = 10;
    info();
    echo $x;
*/

?>


</body>
</html>
