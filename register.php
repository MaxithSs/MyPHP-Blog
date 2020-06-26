<?php
session_start();
if ($_SESSION['user'])
    header("Location: guestbook.php");
?>
<!doctype html>
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

<!-- registration form -->
<form action="includes/signup.php" method="post" enctype="multipart/form-data">
    <label>Full name</label>
    <input type="text" class="form-control" name="full_name" placeholder="Enter your full name">
    <label>Login</label>
    <input type="text" class="form-control"name="login" placeholder="Enter your login">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your email">
    <label>Profile picture</label>
    <input type="file" class="form-control" name="avatar">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your password">
    <label>Confirm Password</label>
    <input type="password" class="form-control" name="password_confirm" placeholder="Confirm your password">
    <button type="submit" class="btn btn-success">Register</button>
    <p>
        Already have an account ? <a href="/">Sign in!</a>
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