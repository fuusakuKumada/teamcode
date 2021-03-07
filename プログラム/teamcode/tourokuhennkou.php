<?php session_start(); ?>
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
<?php
$pdo=new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=kaihatsusd2c_shoping;charset=utf8',
    'kaihatsusd2c_abc', 'sd2cshopping');

if (isset($_SESSION['member']['credit']['address'])){
    $id=$_SESSION['member']['user_id'];
    $sql=$pdo->prepare('select * from member where id!=? and mail=?');
    $sql->execute([$id, $_REQUEST['mail']]);
    echo '1';
}

if (empty($sql->fetchAll())){
    if (isset($_SESSION['member']['credit']['address'])){
        $sql=$pdo->prepare('update member set lastname=? ,name=?, f_lastname=?, f_name=?, mail=?, password=? where id=?');
        $sql->execute([
            $_REQUEST['lastname'], $_REQUEST['name'],
            $_REQUEST['f_lastname'], $_REQUEST['f_name'],
            $_REQUEST['mail'],$_REQUEST['password'],$id]);

        $sql=$pdo->prepare('update credit set card_namber=?, month=?, year=?, security_key=? where id=?');
        $sql->execute([
            $_REQUEST['card_number'],$_REQUEST['month'],
            $_REQUEST['year'],$id]);

        $sql=$pdo->prepare('update address set yubin=?, prefectures=?, city=?, banchi_biru=? where id=?');
        $sql->execute([
            $_REQUEST['yubin'],$_REQUEST['prefectures'],
            $_REQUEST['city'],$_REQUEST['banchi_biru'],$id]);

        $_SESSION['member']=[
            'id'=>$id, 'lastname'=>$_REQUEST['lastname'],'name'=>$_REQUEST['name'],
            'f_lastname'=>$_REQUEST['f_lastname'], 'f_name'=>$_REQUEST['f_name'],
            'mail'=>$_REQUEST['mail'],'password'=>$_REQUEST['password']];

        $_SESSION['credit']=[
            'card_number'=>$_REQUEST['card_number'],'month'=>$_REQUEST['month'],
            'year'=>$_REQUEST['year']];

        $_SESSION['address']=[
            'yubin'=>$_REQUEST['yubin'],'prefectures'=>$_REQUEST['prefectures'],
            'city'=>$_REQUEST['city'], 'banchi_biru'=>$_REQUEST['banchi_biru']];
        echo '<h1>お客様情報を更新しました。<h1><br><br><br>';

    }
}
?>
<input type="button" onclick="location.href='./MyPage.php'" value="戻る">
</form>
</div>

</body>
</html>