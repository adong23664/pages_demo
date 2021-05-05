<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod19_2.php</title>
<?php
require_once 'ValidException.php';
// 檢查使用者密碼, 產生例外物件
function validPassword($pass) {
   if ( trim($pass) == "" )  // 空字串
       throw new ValidException("密碼是空字串!");
   if ( strlen($pass) <= 4 ) // 密碼太短
       throw new ValidException("密碼太短!");
   if ( is_numeric($pass) )  // 全是數字 
       throw new ValidException("密碼全是數字!");
}
?>
</head>
<body>
<div align='center'>
	<h2>mod19_2.php 範例</h2>
	<hr>
<?php
// 例外處理程式敘述
try {
   validPassword("a1");         // 呼叫函數
} catch ( ValidException $e ) { // 處理例外物件
    echo $e->getMyMessage();    // 顯示錯誤訊息
    //exit();
}

?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>