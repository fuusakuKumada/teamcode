<?php session_start();?>
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
unset($_SESSION['member']);
$pdo = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=kaihatsusd2c_shoping;charset=utf8','kaihatsusd2c_abc','sd2cshopping');
$sql=$pdo->prepare('select * from member where mail=? and password=?');
$sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
foreach ($sql as $row){
    $_SESSION['member']=[
        'user_id'=>$row['user_id'], 'address_id'=>$row['address_id'],
        'credit_id'=>$row['credit_id'], 'lastname'=>$row['lastname'],
        'name'=>$row['name'],  'F_lastname'=>$row['F_lastname'],
        'F_name'=>$row['F_name'],  'password'=>$row['password'],
        'mail'=>$row['mail']];
}
if (isset($_SESSION['member'])) {
    echo 'ログインしました。';
}else{
    echo 'メールアドレスまたはパスワードが違います。';
}
?>
</div>
<div style="margin-top: 100px">
<p><a href="login-input.php">ログイン画面へ戻る</a></p>
<a href="Home.php">Home</a>
</div>
</div>
</body>
</html>