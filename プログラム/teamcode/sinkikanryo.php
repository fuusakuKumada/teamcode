<?php session_start();?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<style type="text/css"></style>
</head>
<body>
<div class="container-fluid bg-white text-dark text-center">
<h1>Sing Up</h1>
<br>
<br>
<br>
<h2>新規登録が完了しました</h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
if(isset($_POST['member']['credit']['address'])) {
$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=kaihatsusd2c_shoping;charset=utf8',
    'kaihatsusd2c_abc', 'sd2cshopping');

$sql=$pdo->prepare('insert into member values(null,null,null,?,?,?,?,?,?)');
$sql->execute([
    $_REQUEST['lastname'], $_REQUEST['name'],
    $_REQUEST['f_lastname'], $_REQUEST['f_name'],
    $_REQUEST['mail'], $_REQUEST['password']]);

$sql=$pdo->prepare('insert into credit values(null,?,?,?)');
$sql->execute([
    $_REQUEST['card_namber'], $_REQUEST['year'],
    $_REQUEST['month']]);

$sql=$pdo->prepare('insert into address values(null,?,?,?,?)');
$sql->execute([
    $_REQUEST['prefectures'], $_REQUEST['yubin'],
    $_REQUEST['city'], $_REQUEST['banchi_biru']]);
}
?>
<p><input type="button" onclick="location.href='./login-input.php'" value="Login"></p>
</form>
</div>

</body>
</html>