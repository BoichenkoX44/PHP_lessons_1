<?php
    session_start();

    unset($_SESSION['username']);
    unset($_SESSION['phone']);
    unset($_SESSION['email']);
    unset($_SESSION['subject']);
    unset($_SESSION['message']);

    unset($_SESSION['error_username']);
    unset($_SESSION['error_phone']);
    unset($_SESSION['error_email']);
    unset($_SESSION['error_subject']);
    unset($_SESSION['error_message']);

    function redirect() {
        header('Location: Contact.php');
        exit;
    }

$title = "Contact Us";
$username = htmlspecialchars(trim($_POST['username']));
$phone = htmlspecialchars(trim($_POST['phone']));
$email = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));


    $_SESSION['username'] = $username;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;
    $_SESSION['subject'] = $email;
    $_SESSION['message'] = $message;

    if(strlen($username) <= 1) {
        $_SESSION['error_username'] = "Я не почув твого імені, козаче" . "<br>";
        redirect();
    }
    else if(strlen(trim($phone) == "")){
        $_SESSION['error_phone'] = "Введи спочатку плюсик, а потім цифри, собака" . "<br>";
        redirect();
    }
    else if(strlen(trim($email) == "") || !strpos($email, "@")){
        $_SESSION['error_email'] = "Дай правильний мейл, гніда" . "<br>";
        redirect();
    }
    else if(strlen(trim($subject) < 5)){
        $_SESSION['error_subject'] = "Напиши тему письма, бармалєй" . "<br>";
        redirect();
    }
    else if(strlen($message) < 15){
        $_SESSION['error_message'] = "І це те ради чого ти тут пишеш?" . "<br>";
        redirect();
    }
    else {
        $subject = "=?utf-8?B?" . base64_encode($subject). "?=";
        $headers = "From: $email\r\nReply-to: $email\r\nContent-type:text/plain; charset=utf-8\r\n";
    mail("joreall91189@gmail.com", $subject, $message, $headers, $phone);
    $_SESSION['success_mail'] = "Ура бля, нарешті ти це зробив";
    redirect();
}