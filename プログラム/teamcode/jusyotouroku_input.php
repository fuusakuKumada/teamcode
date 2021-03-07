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
<?php
$lastname=$name=$f_lastname=$f_name=$yubin=$prefectures=$city=$banchi_biru='';
if (isset($_SESSION['member']['address'])){

    $lastname=$_SESSION['member']['lastname'];
    $name=$_SESSION['member']['name'];
    $f_lastname=$_SESSION['member']['f_lastname'];
    $f_name=$_SESSION['member']['f_name'];
    $yubin=$_SESSION['address']['yubin'];
    $prefectures=$_SESSION['address']['prefectures'];
    $city=$_SESSION['address']['city'];
    $banchi_biru=$_SESSION['address']['banchi_biru'];
}
echo '<form action="juusyotouroku-output.php" method="post">';
echo '住所追加<br>';
echo '姓<br>';
echo '<input type="text" name="lastname" value="', $lastname, '"><br>';
echo '名<br>';
echo '<input type="text" name="name" value="', $name, '"><br>';
echo 'セイ<br>';
echo '<input type="text" name="f_lastname"value="', $f_lastname, '"><br>';
echo 'メイ<br>';
echo '<input type="text" name="f_name"value="', $f_name, '"><br>';
echo '郵便番号<br>';
echo '<input type="text" name="yubin"value="', $yubin, '"><br>';
echo '都道府県<br>';
echo '<select style="width:185px;" name="prefectures" value="',$prefectures,'">';
echo '<option value='.北海.'>北海道</option>';
echo '<option value='.岩手県.'>岩手県</option>';
echo '<option value='.宮城県.'>宮城県</option>';
echo '<option value='.秋田県.'>秋田県</option>';
echo '<option value='.山形県.'>山形県</option>';
echo '<option value='.福島県.'>福島県</option>';
echo '<option value='.茨城県.'>茨城県</option>';
echo '<option value='.栃木県.'>栃木県</option>';
echo '<option value='.群馬県.'>群馬県</option>';
echo '<option value='.埼玉県.'>埼玉県</option>';
echo '<option value='.千葉県.'>千葉県</option>';
echo '<option value='.東京県.'>東京県</option>';
echo '<option value='.神奈川県.'>神奈川県</option>';
echo '<option value='.新潟県.'>新潟県</option>';
echo '<option value='.富山県.'>富山県</option>';
echo '<option value='.石川県.'>石川県</option>';
echo '<option value='.福井県.'>福井県</option>';
echo '<option value='.山梨県.'>山梨県</option>';
echo '<option value='.長野県.'>長野県</option>';
echo '<option value='.岐阜県.'>岐阜県</option>';
echo '<option value='.静岡県.'>静岡県</option>';
echo '<option value='.愛知県.'>愛知県</option>';
echo '<option value='.三重県.'>三重県</option>';
echo '<option value='.滋賀県.'>滋賀県</option>';
echo '<option value='.京都県.'>京都県</option>';
echo '<option value='.大阪県.'>大阪県</option>';
echo '<option value='.兵庫県.'>兵庫県</option>';
echo '<option value='.奈良県.'>奈良県</option>';
echo '<option value='.和歌山県.'>和歌山県</option>';
echo '<option value='.鳥取県.'>鳥取県</option>';
echo '<option value='.島根県.'>島根県</option>';
echo '<option value='.岡山県.'>岡山県</option>';
echo '<option value='.広島県.'>広島県</option>';
echo '<option value='.山口県.'>山口県</option>';
echo '<option value='.徳島県.'>徳島県</option>';
echo '<option value='.香川県.'>香川県</option>';
echo '<option value='.愛媛県.'>愛媛県</option>';
echo '<option value='.高知県.'>高知県</option>';
echo '<option value='.福岡県.'>福岡県</option>';
echo '<option value='.佐賀県.'>佐賀県</option>';
echo '<option value='.長崎県.'>長崎県</option>';
echo '<option value='.熊本県.'>熊本県</option>';
echo '<option value='.大分県.'>大分県</option>';
echo '<option value='.宮崎県.'>宮崎県</option>';
echo '<option value='.鹿児島県.'>鹿児島県</option>';
echo '<option value='.沖縄県.'>沖縄県</option>';
echo '</select><p>';
echo '市区町村<br>';
echo '<input type="text" name="city"value="', $city,'"><br>';
echo '番地・ビル名<br>';
echo '<input type="text" name="banchi_biru"value="', $banchi_biru, '"><br>';
echo '<input type="submit" value="登録"><br><br>';
?>
<input type="button" onclick="location.href='./MyPage.php'" value="戻る">
</form>
</div>

</body>
</html>