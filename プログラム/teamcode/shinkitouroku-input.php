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
<?php
$lastname=$name=$f_lastname=$f_name=$mail=$password=$card_namber=$yubin=$city=$banchi_biru=$year=$month='';
if (isset($_SESSION['mamber']['credit']['address'])){

    $lastname=$_SESSION['member']['lastname'];
    $name=$_SESSION['member']['name'];
    $f_lastname=$_SESSION['member']['f_lastname'];
    $f_name=$_SESSION['member']['f_name'];
    $mail=$_SESSION['member']['mail'];
    $password=$_SESSION['member']['city'];
    $card_namber=$_SESSION['credit']['card_namber'];
    $prefectures=$_SESSION['address']['prefectures'];
    $yubin=$_SESSION['address']['yubin'];
    $city=$_SESSION['address']['city'];
    $banchi_biru=$_SESSION['address']['banchi_biru'];
    $year=$_SESSION['credit']['year'];
    $month=$_SESSION['credit']['month'];
}
echo '<form action="shinnkitouroku-output.php" method="post">';
echo '姓<br>';
echo '<input type="text" name="lastname"value="', $lastname, '"><br>';
echo '名<br>';
echo '<input type="text" name="name"value="', $name, '"><br>';
echo 'セイ<br>';
echo '<input type="text" name="f_lastname"value="', $f_lastname, '"><br>';
echo 'メイ<br>';
echo '<input type="text" name="f_name"value="', $f_name, '"><br>';
echo 'メールアドレス<br>';
echo '<input type="text" name="mail"value="', $mail, '"><br>';
echo 'パスワード<br>';
echo '<input type="text" name="password"value="', $password, '"><br>';
echo 'パスワード（再入力）<br>';
echo '<input type="text" name="password"value="', $password, '"><br>';
echo 'クレジットカード<br>';
echo 'カード番号<input type="text" name="card_namber"value="', $card_namber, '"><br>';
echo '有効期限<br>' ;
echo '<select style="width:90px;" name="month" value="',$month,'"><br>';
echo '<option value='.０１月.'>01月</option>';
echo '<option value='.０２月.'>02月</option>';
echo '<option value='.０３月.'>03月</option>';
echo '<option value='.０４月.'>04月</option>';
echo '<option value='.０５月.'>05月</option>';
echo '<option value='.０６月.'>06月</option>';
echo '<option value='.０７月.'>07月</option>';
echo '<option value='.０８月.'>08月</option>';
echo '<option value='.０９月.'>09月</option>';
echo '<option value='.１０月.'>10月</option>';
echo '<option value='.１１月.'>11月</option>';
echo '<option value='.１２月.'>12月</option>';
echo '</select>';
echo '<select style="width:90px;" name="year" value="',$year,'">';
echo '<option value='.２０年.'>20年</option>';
echo '<option value='.２１年.'>21年</option>';
echo '<option value='.２２年.'>22年</option>';
echo '<option value='.２３年.'>23年</option>';
echo '<option value='.２４年.'>24年</option>';
echo '<option value='.２６年.'>26年</option>';
echo '<option value='.２７年.'>27年</option>';
echo '<option value='.２８年.'>28年</option>';
echo '<option value='.２９年.'>29年</option>';
echo '<option value='.３０年.'>30年</option>';
echo '</select><p>';

echo '住所<br>';
echo '郵便番号<br>';
echo '<input type="text" name="yubin" value="',$yubin,'"><br>';

echo '都道府県<br>';
echo '<select style="width:185px;" name="prefectures" value="',$prefectures,'">';
echo '<option value='.北海道.'>北海道</option>';
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
echo '<input type="text" name="city" value="',$city,'"><br>';
echo '番地・ビル名<br>';
echo '<input type="text" name="banchi_biru" value="',$banchi_biru,'"><br>';
echo '<input type="submit" value="Sign Up"><br><br>';
?>
<input type="button" onclick="location.href='./shinkitouroku-input.php'" value="戻る">

</form>
</div>

</body>
</html>