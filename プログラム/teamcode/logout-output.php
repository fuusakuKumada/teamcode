<?php session_start(); ?>
<?php require './header.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style></style>
</head>
<body>
<div class="container-fluid bg-white text-dark text-center">
<div style="margin-top: 100px">
<?php
if (isset($_SESSION['member'])) {
    unset($_SESSION['member']);
    echo 'ログアウトしました。';
}else{
    echo 'すでにログアウトしています。';
}
?>
</div>
<div style="margin-top: 100px">
<a href="Home.php">Home</a>
</div>
</div>
</body>
</html>