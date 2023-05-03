<div class="container mt-2">
    <h1>Home page</h1>

<?php
    $file = fopen("text.txt", "w");

    fwrite($file, "Penis v popke - eto vau! \nHochesh toje? \nDam eshe huem po rozhe! \n");

    fclose($file);

    $filename = "text.txt";
    $file = fopen($filename, "r");
    $content = fread($file,  filesize($filename));

    fclose($file);

    echo "<pre>" . $content. "</pre>";

    file_put_contents("a.txt", "Zvertaysya za nomerom: +3802920727\n");
    echo "<pre>" .file_get_contents("a.txt"). "</pre>";

    echo file_exists("a.txt"). "<br>";
//    rename("a.txt", "nomerok.txt"); // перейменувати файл
//    unlink("nomerok.txt"); // видалити файл
    chmod(__FILE__, 0777);
    echo fileperms(__FILE__). "<br>";


    echo "<br>" . date('d-m-o H:i:s', strtotime("+3 Hour"));

?>
