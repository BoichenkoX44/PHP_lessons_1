<?php

    $title = "About Us";
    require "Blocks/header.php";
?>
<div class="container mt-2">
<h1>About Us</h1>

    <form action="check_post.php" method="post">
        <input type="text" name="username" placeholder="enter your name, golova" class="form-control"><br>
        <input type="email" name="email" placeholder="enter your email, golova" class="form-control"><br>
        <input type="phone" name="phone" placeholder="enter your phone number golova" class="form-control"><br>
        <input type="password" name="password" placeholder="enter your password golova" class="form-control"><br>
        <textarea name="message", class="form-control" placeholder="enter your message, golova"></textarea>
        <input type="submit" value="send" class="btn btn-success">
    </form>

<?php
    require "Blocks/footer.php";
?>