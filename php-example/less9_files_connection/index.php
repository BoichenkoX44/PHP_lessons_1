<?php
    session_start();

    $title = "Homepage";
    require_once "Blocks/header.php";
?>
<div class="container mt-2">
    <h1>Home page</h1>

<?php



echo "<br>" . date('d-m-o H:i:s', strtotime("+3 Hour"));

    include "Blocks/footer.php";
?>
