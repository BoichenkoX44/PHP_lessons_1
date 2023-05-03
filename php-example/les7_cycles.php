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
// "цикл for
/*    for($i = 110; $i >= 20; $i-=5){
        echo $i . "<br>";
    }
*/
 //цикл while
/*   $i = 1;
        while($i){
        echo $i . "<br>";
        $i++;
    }
*/
//цикл Do While
/*    $i = 100;
    do {
        echo $i;
    } while($i < 10);
*/
// Оператори у циклах
/*    for($el = 100; $el > 10; $el /= 2) {
        if($el < 25)
        break;

        if($el % 2 == 0)
            continue;

        echo $el . "<br>";
    }
*/
// оператор count
/*    $list = [5, 6, 7, 10, "zalupa", 2.28];

    for($i = 0; $i < count($list); $i++)
        echo "Element $i: $list[$i] <br>";
*/
// оператор foreach
/*    $list = ["age" => 22, "name" => "Vovik", "hobby" => "Drochka"];
    $arr = [1,4,6,7,8,9,19];
    foreach ($list as $item => $value){
      echo "Key: $item . Value: $value . <br>";
}
    foreach($arr as $i => $value)
        echo "$i. Value: $value. <br>";
*/
?>

</body>
</html>
