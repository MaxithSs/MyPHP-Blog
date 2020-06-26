<?php
session_start();

if ($_SESSION['user'])
    header("Location: guestbook.php");
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/styles/main.css">
    <title>Authorization and Registration</title>
</head>
<body>

<!-- authorization form -->
<form action="includes/signin.php" method="post">
    <label for="login">Login</label>
    <input type="text" class="form-control" name="login" placeholder="Enter your login">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password">
    <button class="btn btn-success" type="submit">Log in</button>
    <p>
        Don't have account jet ? <a href="register.php">Register now!</a>
    </p>
    <?php
    if ($_SESSION['message'])
    {
        echo '<p class="message">' . $_SESSION['message'] . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>

</body>
</html>