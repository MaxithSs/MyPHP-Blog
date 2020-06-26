<?php
session_start();
if (!$_SESSION['user'])
    header("Location: /");
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title><?= $_SESSION['user']['full_name'] . "'s profile"?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">GUESTBOOK</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="guestbook.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="profile.php"><?= $_SESSION['user']['full_name']?><span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a href="logout.php" class="btn btn-primary mr-sm-2">Logout</a>
        </form>
    </div>
</nav>

<!-- profile form -->
<form>
    <img src="<?= $_SESSION['user']['avatar']?>" width="200" alt="">
    <h2 style="margin: 10px 0"><?= $_SESSION['user']['full_name']?></h2>
    <a href="#"><?= $_SESSION['user']['email']?></a>
</form>

<form action="includes/search.php" method="GET">
    <input type="text" class="form-control" style="width: 400px" name="search_field">
    <button class="btn btn-success">Search</button>
</form>

</body>
</html>