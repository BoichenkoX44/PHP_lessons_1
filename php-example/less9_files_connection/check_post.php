<?php

    $title = "Sending the Form";
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $message = $_POST['message'];

//    echo $name ."<br>" . $phone . "<br>". $email;
//    echo $phone . "<br>";
//    echo $email . "<br>";
    if(trim($name) == "")
        echo "Enter your name, dolbaeb" . "<br>";
    else if(strlen(trim($name)) <= 1)
        echo "WTF, enter your real name";
    else if(trim($email) == "" || trim($phone) == "" || trim($password) == "" || trim($_POST['message'] == "")) {
        echo "enter correct data, daun";
    }
    else {
        $_POST['password'] = sha1($password);
//        echo "<h1>All Data</h1>";
//        foreach ($_POST as $key => $value)
//            echo "<p>$value</p>";

        header('Location: about.php');
        exit;

}
//   print_r($_POST);

