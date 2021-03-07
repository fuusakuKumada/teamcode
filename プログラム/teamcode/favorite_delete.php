<?php session_start(); ?>
<?php
if (isset($_SESSION['customer'])) {
    $pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=kaihatsusd2c_shoping;charset=utf8','kaihatsusd2c_abc','sd2cshopping');
	$sql=$pdo->prepare(
		'delete from favorite where customer_id=? and product_id=?');
	$sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
	echo 'お気に入りから商品を削除しました。';
	echo '<hr>';
} else {
	echo 'お気に入りから商品を削除するには、ログインしてください。';
}
require 'Favorite.php';
?>
