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
<h1>Thank You!!</h1>
</div>
<div class="container-fluid bg-white text-dark text-center"style="margin-top: 100px">
<h2>ご購入<br>ありがとうございます。</h2>
</div>
<div class="container-fluid bg-white text-dark text-center"style="margin-top: 100px">
<?php
if($_POST['shiharai'] == "コンビニ") {
    $a = 0;
    echo '<p>コンビニエンスストアで下記の数字をご提示してください。</p>';
        while($a < 16){
            $valRandFunc = mt_rand(0,9);
            echo $valRandFunc;
            $a++;
        }
}




?>
<p>
<a href="userinsert_output.php">Home</a>
</div>
</body>
</html>