<?php
    $title = "Homepage";
    require_once "Blocks/header.php";
?>
<div class="container mt-2">
    <h1>Home page</h1>

<?php

    $message = "ti samiy luchiy";
    $to = "joreall91189@gmail.com";
    $from = "jordano@templatemonster.me";
    $subject = "Theme";

    $subject = "=?utf-8?B?" . base64_encode($subject). "?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

    mail($to, $subject, $message, $headers);

echo "<br>" . date('d-m-o H:i:s', strtotime("+3 Hour"));

    include "Blocks/footer.php";
?>
