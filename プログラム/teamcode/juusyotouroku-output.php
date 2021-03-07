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
<form action="jusyokanryo.php">
<div class="container-fluid bg-white text-dark text-center">
<h1>住所追加</h1>
<?php
echo '<form action="jusyokanryo.php" method="post">';
echo '姓：',$_POST['lastname'],'<br>';'<br>';
echo '名：',$_POST['name'],'<br>';
echo 'セイ：',$_POST['f_lastname'],'<br>';
echo 'メイ：',$_POST['f_name'],'<br>';
echo '郵便番号：',$_POST['yubin'],'<br>';
echo '都道府県：',$_POST['prefectures'],'<br>';
echo '市区町村：',$_POST['city'],'<br>';
echo '番地・ビル名：',$_POST['banchi_biru'],'<br>';
echo '<input type="submit" value="登録"><br><br>';
?>
<input type="button" onclick="location.href='./juusyotouroku-input.php'" value="戻る">
</form>
</div>

</body>
</html>