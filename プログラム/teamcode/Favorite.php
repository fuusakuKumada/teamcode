<?php session_start();?>
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
<?php
$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=kaihatsusd2c_shoping;charset=utf8','kaihatsusd2c_abc','sd2cshopping');
echo '<h1>Favorite</h1><br><br>';
$sql ='select photo1, kin, shohin_mei, shohin_id, details_id from shohin';
if (!empty($_SESSION['product'])) {
    echo '<img src="photo/',$row['photo1'],'.jpg" width="100">';
    echo '<table>';
    foreach ($_SESSION['product'] as $id=>$product) {
        echo '<tr>';
        echo '<td>', $id, '</td>';
        echo '<td>', $product['kin'], '</td>';
        echo '<td><a href="favorite_delete.php?id=', $id, '">削除</a></td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo 'お気に入りに商品がありません。<br><br>';
}
?>
	<a href = "javascript:history.back();">戻る</a><br><br>
	<a href="Home">HOME</a>
</div>
</body>
</html>