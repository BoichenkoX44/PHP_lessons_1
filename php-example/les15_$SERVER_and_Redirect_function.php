<?php
    $title = "Homepage";
    require_once "Blocks/header.php";
?>
<div class="container mt-2">
    <h1>Home page</h1>

<?php
    //phpinfo();

//    echo '<pre>';
//    print_r($_SERVER);
//    echo '</pre>';

//    echo $_SERVER['HTTPS'];
//    echo $_SERVER['HTTP_HOST']. " - ". $_SERVER['REQUEST_URI'];

//    echo $_SERVER['HTTP_USER_AGENT'];

// редірект на цю ж сторінку, але без ключа в посиланні
    if(isset($_GET['source']) != ""){
        $link = explode("?source=", $_SERVER["REQUEST_URI"]);
        $redirect = "http://". $_SERVER['HTTP_HOST']. $link[0];

        header('HTTP/1.1 301 Moved Permanently');
        header('Location: '. $redirect);
        exit();
    }


echo "<br>" . date('d-m-o H:i:s', strtotime("+3 Hour"));

    include "Blocks/footer.php";
?>
