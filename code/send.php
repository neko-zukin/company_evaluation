<?php
header("Content-type: text/plain; charset=UTF-8");

try{
	// 接続
	$db = new PDO('mysql:host=localhost;dbname=company_evaluation', 'root', 'Cielj@p@n-2019');

	$sql = $_POST['sql'];
	$result = $db->query($sql);
    $arysql = $result -> fetchAll(PDO::FETCH_ASSOC);
    // echoすると返せる
    echo json_encode($arysql, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT); // json形式にして返す
 
	// 切断
	$db = null;
} catch(PDOException $e){
    echo "データベース接続失敗" . PHP_EOL;
	echo $e->getMessage();
	exit;
}
?>