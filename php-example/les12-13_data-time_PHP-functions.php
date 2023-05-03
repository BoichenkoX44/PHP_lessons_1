
<div class="container mt-2">
    <h1>Home page</h1>

<?php
    $lis = [4, 5, 6.5, 2, 20, 7, 15, 29];
    //unset($lis[1]); // видалити з массиву
    $lis = array_values($lis); // призначити оновлення масиву після редагування
    rsort($lis); // зворотній порядок

    $array = array_slice($lis, 2, 2);
    print_r($array);
    echo "<br>";

    $array_1 = [1, 4, 8, 8];
    $array_2 = [3, 2, 2];
    $array_3 = array_merge($array_1, $array_2);
    print_r($array_3);
    echo "<br>";

//    if(in_array(4,$lis) == "")
//        echo "Nema takogo, debil . <br>";
//    else
//        echo "vitayu, Dodik, vot eto da . <br>";


    // shuffle($lis); в разброс
    print_r($lis);

    echo "<br>";

    $x = 10;
    echo gettype($x). "<br>";
    echo is_numeric($x). "<br>";
    echo is_double($x). "<br>";

    $str = "putin Hui";
    echo strpos($str, "ui");

    echo "<br>";

    $words = "zalupa, penis, her, davalka, hui, bledina";
    $array_words = explode(",", $words); // видалити з масиву
    print_r($array_words);
    echo '<br>' . implode(" | ", $array_words); // додати до масиву

//echo date("m-l H:i:s", time() + 10800). "<br>";
    echo "<br>" . date('d-m-o H:i:s', strtotime("+3 Hour"));

