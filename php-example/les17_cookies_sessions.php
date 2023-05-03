<?php
    session_start();

    $title = "Homepage";
    require_once "Blocks/header.php";
?>
<div class="container mt-2">
    <h1>Home page</h1>

<?php

    $user_name = "Dolbaeb'";
//    setcookie("user_name", $user_name, time() + 6180); // додати кукі

//    setcookie("user_name", $user_name, time() - 170); // видалити кукі

//    print_r($_COOKIE["user_name"]);
//    echo $_COOKIE['user_name'];

   $_SESSION['user_name'] = $user_name;

//   unset($_SESSION['user_name']); //видалення юзеру з сессії
//    session_destroy(); // видалення усіх юзерів з сессії

    if($_SESSION['user_name'] == "Dolbaeb'")
        echo "vse ti zaskamlen, mamont";

echo "<br>" . date('d-m-o H:i:s', strtotime("+3 Hour"));

    include "Blocks/footer.php";
?>
