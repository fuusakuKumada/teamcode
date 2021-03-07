<?php
function getUserData($params){
   
	
	//DBの接続情報

    
$url = 'mysql1.php.xdomain.ne.jp'; //mysqlサーバー名
$user = 'kaihatsusd2c_abc'; //ユーザーID
$password = 'sd2cshopping'; //パスワード
$dbname = 'kaihatsusd2c_shoping'; //データベース名

	
	$Mysqli = new mysqli($url, $user, $password, $dbname);
	if ($Mysqli->connect_error) {
			error_log($Mysqli->connect_error);
			exit;
	}

	$where = [];
	if(!empty($params['shohin_mei'])){
		$where[] = "shohin_mei like '%{$params['shohin_mei']}%'";

	}
	if(!empty($params['category'])){
		$where[] = "category = '{$params['category']}'";
	
	}
	if(!empty($params['kin'])){
		$where[] = 'kin <= ' . ((int)$params['kin'] + 999) . ' AND kin >= ' . (int)$params['kin'];
	}
	if($where){
		$whereSql = implode(' AND ', $where);
		$sql = 'select * from shohin where ' . $whereSql ;
	}else{
		$sql = 'select * from shohin ';
	}
	
	//SQL文を実行する
	$UserDataSet = $Mysqli->query($sql);
	//扱いやすい形に変える
	$result = [];
	while($row = $UserDataSet->fetch_assoc()){
		$result[] = $row;
	}
	return $result;
}