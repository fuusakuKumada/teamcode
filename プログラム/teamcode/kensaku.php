<?php session_start(); ?>
<?php 

include_once('model1.php');

$userData = getUserData($_GET);

?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHPの検索機能</title>
<link rel="stylesheet" href="style.css">
<!-- Bootstrap読み込み（スタイリングのため） -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<h1 class="col-xs-6 col-xs-offset-3" style="text-align: center;">serch</h1>
<div class="col-xs-6 col-xs-offset-3 well">

	<?php //②検索フォーム ?>
	<form method="get">
	
		<div class="form-group">
			<label for="InputName">キーワード</label>
			<input name="shohin_mei" class="form-control" id="InputName" value="<?php echo isset($_GET['shohin_mei']) ? htmlspecialchars($_GET['shohin_mei']) : '' ?>">
		</div>

		
        <div class="form-group">
			<label for="Inputcategory">カテゴリー</label>
			<select name="category" class="form-control" id="Inputcategory">
				<option value="ボトムス" <?php echo isset($_GET['category']) ? 'selected' : '' ?>>ボトムス</option>
				<option value="トップス" <?php echo isset($_GET['category']) ? 'selected' : '' ?>>トップス</option>
				<option value="アウター" <?php echo isset($_GET['category']) ? 'selected' : '' ?>>アウター</option>
				<option value="0" <?php echo empty($_GET['category']) ? 'selected' : '' ?>>選択しない</option>
			
		
			</select>
		</div>
		
		<div class="form-group">
			<label for="InputKin">金額</label>
			<select name="kin" class="form-control" id="InputKin">
				<option value="1000" <?php echo isset($_GET['kin']) && $_GET['kin'] == '1000' ? 'selected' : '' ?>>1000</option>
				<option value="2000" <?php echo isset($_GET['kin']) && $_GET['kin'] == '2000' ? 'selected' : '' ?>>2000</option>
				<option value="3000" <?php echo isset($_GET['kin']) && $_GET['kin'] == '3000' ? 'selected' : '' ?>>3000</option>
				<option value="4000" <?php echo isset($_GET['kin']) && $_GET['kin'] == '4000' ? 'selected' : '' ?>>4000</option>
				<option value="0" <?php echo empty($_GET['kin']) ? 'selected' : '' ?>>選択しない</option>
			</select>
		</div>
		<button type="submit" class="btn btn-default" name="search">検索</button>
	</form>
	</div>
</div>
</div>
<div class="col-xs-6 col-xs-offset-3">
	<?php //③取得データを表示する ?>

	<form method="post">

	<?php if(isset($userData) && count($userData)): ?>
		<p class="alert alert-success"><?php echo count($userData) ?>件見つかりました。</p>

		<?php foreach($userData as $row): ?>
			
		<div class="card mb-3">
	
			<?php echo '<a href="syousai.php?shohin_id"'.$POST['sohin_id'].'">'; ?><div lass="bd-placeholder-img card-img-top" width="100%" height="180"  preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><?php echo '<img src="photo/', $row['photo1'], '.jpg">'?></div>	</a>
			<title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"/><text x="50%" y="50%" fill="#dee2e6" dy=".3em"><td><?php echo htmlspecialchars($row['category']) ?></td></text></svg>
				<div class="card-body">
					<h5 class="card-title"><h5 class="card-title"><?php echo htmlspecialchars($row['shohin_mei']) ?></h5>
					<p class="card-text"><tr>
						
						<td><?php echo htmlspecialchars($row['kin']) ."円"?></td>
					
						
					</tr>		
					
							</div>
				</div>
			
					
					
				<?php endforeach; ?>
		</p>
			
				</div>
			</div>
			
			
				

	<?php else: ?>
		<p class="alert alert-danger">検索対象は見つかりませんでした。</p>
	<?php endif; ?>
<form>
</div>
</body>
</html>