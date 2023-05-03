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

    //одновимірні массиви
    $nums = array(4, 6, 7, 8, 10, 11, 5, 67, -43);
    $nums[1] = 21;
    echo $nums[1] . "<br>";

    $arr = array("shukha", "ochko", 228, 1337, 3.14, true);
    echo $arr[1] . "<br>";

    // асоціативні массиви
    $list = [2 => 22,"name" => "Alex", "hobby" => "Football"];
    $list ["name"] = "Volodymyr";
    echo $list["name"] . "<br>";
    echo $list[2]  . "<br>";

    // багатовимірні массиви
    $matrix = [
            [3, 2, 2.28],
            [1, 4, 8, 8.8],
            ["dva", "dva", "visim"]
    ];
    $matrix[2][2] = 8;
    echo $matrix[0][2] . "<br>";
    echo $matrix[2][2] . "<br>";

?>

</body>
</html>
