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
$sql = $pdo -> prepare('select shohin_id from shohin where shohin_id = ?');
$sql -> execute();
 echo '<h3>以下の情報でお間違いなければ<br>購入ボタンを押してください。</h3><br><br>';
 if (!empty($_SESSION['product'])) {
     echo '<table>';
     echo '<th>商品名</th><th>商品詳細</th>';
     echo '<th>価格</th>';
     $total=0;
     foreach ($_SESSION['product'] as $id=>$product) {
         echo '<tr>';
         echo '<td>', $id, '</td>';
         echo '<td><a href="detail.php?id=', $id, '">',
         $product['name'], '</a></td>';
         echo '<td>', $product['price'], '</td>';
         echo '<td>', $product['count'], '</td>';
         $subtotal=$product['price']*$product['count'];
         $total+=$subtotal;
         echo '<td>', $subtotal, '</td>';
         echo '</tr>';
     }
     echo '<tr><td>合計</td><td></td><td></td><td></td><td>', $total,
     '</td><td></td></tr>';
     echo '</table>';

}
?>
<form action = "kounyukanryo.php" method = "post" name = "form_1" id="form1">
	<p><input type="radio" name="shiharai" value="クレジット">クレジット<br></p>
	<p><input type="radio" name="shiharai" value="コンビニ">コンビニ<br></p>
    <a href = "javascript:form_1.submit()">購入する</a><br><br>
</form>
    <a href = "javascript:history.back();">戻る</a>
</div>
</body>
</html>