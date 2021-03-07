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
echo '<h1>Cart</h1>';
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
        echo '<td><a href="cart_delete.php?id=', $id, '">削除</a></td>';
        echo '</tr>';
    }
    echo '<tr><td>合計</td><td></td><td></td><td></td><td>', $total,
    '</td><td></td></tr>';
    echo '</table>';
} else {
    echo 'カートに商品がありません。<br><br>';
}
?>
	<a href="userinsert_output.php">購入する</a><br><br>
	<a href="userinsert_output.php">お買い物を続ける</a>
</div>
</body>
</html>