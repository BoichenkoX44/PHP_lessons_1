<?php
session_start();
$title = "Contact Us";
require "Blocks/header.php";
?>
    <div class="container mt-5">
    <h1><?=$title?></h1>
    <div class="text-success"><?=(isset($_SESSION['success_mail'])) ? $_SESSION['success_mail'] : ''?></div>

            <form action="contact_post.php" method="post">
                <label>
                <a> Давай все ж таки почнемо з ім'я </a><br><br>
                <input type="text" name="username"  value="<?=(isset($_SESSION['username'])) ? $_SESSION['username'] : ''?>" placeholder="enter your name bolvan" class="form-control"><br>
                <div class="text-danger"><?=(isset($_SESSION['error_username'])) ? $_SESSION['error_username'] : ''?></div>
                <a> Ми твій рот їбали, але якщо хочеш нам подзвонити, то вставляй свій номер нижче і ми самі подзвонимо якщо захочемо </a><br><br>
                <input type="text" name="phone" value="<?=(isset($_SESSION['phone'])) ? $_SESSION['phone'] : ''?>" placeholder="enter your phone number golova" class="form-control"><br>
                <div class="text-danger"><?=(isset($_SESSION['error_phone'])) ? $_SESSION['error_phone'] : ''?></div><br>
                <a> Якщо твій номер телефону заблочили через шахрайство, то вставляй тут свою пошту, дурень, і ми відпишемо </a><br><br>
                <input type="email" name="email" value="<?=(isset($_SESSION['email'])) ? $_SESSION['email'] : ''?>" placeholder="enter your email, golova" class="form-control"><br>
                <div class="text-danger"><?=(isset($_SESSION['error_email'])) ? $_SESSION['error_email'] : ''?></div><br>
                <a> Ну і звісно давай тему письма, ти бля </a><br><br>
                <input type="text" name="subject" value="<?=(isset($_SESSION['subject'])) ? $_SESSION['subject'] : ''?>" placeholder="enter subject bomjara" class="form-control"><br>
                <div class="text-danger"><?=(isset($_SESSION['error_subject'])) ? $_SESSION['error_subject'] : ''?></div>
                <a> Якщо в тебе сходу є прєдьява, то накалякай її нижче</a><br><br>
                <textarea type="text" name="message" class="form-control" placeholder="enter your message, golova"><?=(isset($_SESSION['message'])) ? $_SESSION['message'] : ''?></textarea><br>
                <div class="text-danger"><?=(isset($_SESSION['error_message'])) ? $_SESSION['error_message'] : ''?></div><br>
                <button type="submit" class="btn btn-success">Send</button><br>
                </label>
            </form>
<?php
require "Blocks/footer.php";
?>