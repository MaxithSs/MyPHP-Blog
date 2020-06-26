<?php
session_start();
if (!$_SESSION['user'])
    header("Location: /");

require "includes/functions.php";

ob_start();
if (!empty($_POST))
{
    saveMessage();
    header("Refresh:0");
    exit();
}
ob_end_flush();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--    <link rel="stylesheet" href="assets/styles/profile.css">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>GUESTBOOK <?= $_SESSION['user']['full_name']?></title>
    <script data-ad-client="ca-pub-2565461352545104" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>
<!-- Profile -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">GUESTBOOK</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php"><?= $_SESSION['user']['full_name']?></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="logout.php" class="btn btn-primary mr-sm-2">Logout</a>
        </form>
    </div>
</nav>
<div class="container-fluid">
    <form action="" style="" method="post">
        <div class="form-group" style="padding: 20px; margin: 10px"
            <label><p>Write your message below</p></label>
            <textarea name="message" class="form-control" rows="3"></textarea>
            <button class="btn btn-success">Send message!</button>
        </div>
    </form>
</div>
<?php
$messages = getMessage();
?>
<hr>
<?php if (!empty($messages)): ?>
    <?php foreach ($messages as $message): ?>
        <div class="card" style="width: 20rem; margin: 20px">
            <div class="card-body">
                <h4 class="card-title"><?= $message['user']?></h4>
                <h6 class="card-subtitle mb-2 text-muted"><?= $message['pubdate']?></h6>
                <p class="card-text"><?=htmlentities($message['message'])?></p>
                <p class="card-text"><?=$_SERVER['HTTP_CLIENT_IP'] ? $_SERVER['HTTP_CLIENT_IP'] : ($_SERVER['HTTP_X_FORWARDED_FOR'] ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR']); ?></p>
            </div>
        </div>
    <?php endforeach;?>
<?php endif;?>
</body>
</html>