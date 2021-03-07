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
<h1>Login</h1>
</div>
<div class="container-fluid bg-white text-dark text-center" style="margin-top: 50px">
会員の方は、下のフォームに<br>
メールアドレス・パスワードを入力して<br>
「Login」ボタンを押してください。<br>
会員登録がお済みでない方は、<br>
「SingUp」ボタンをおして<br>
新規会員登録をしてください。
</div>
<div class="container-fluid bg-white text-dark text-center" style="margin-top: 50px">
<form action="login-output.php" method="post">
メールアドレス<br>
<p><input type="text" name="mail"></p>
パスワード<br>
<p><input type="password" name="password" ></p>
</div>
<div class="container-fluid bg-white text-dark text-center" style="margin-top: 50px">
<p><input type="submit" value="Login"></p>
</form>
<a href="shinkitouroku-input.php">SingUp</a>
</div>

</body>
</html>