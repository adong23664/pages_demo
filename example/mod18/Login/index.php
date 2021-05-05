<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>index.php</title>
</head>
<body> 
<div align='center'>
	<h2>系統首頁</h2>
	<hr>
<?php
// 檢查Session變數是否存在, 表示是否已成功登入
if ( $_SESSION["login_session"] != true ) {
   header("Location: login.php");
}
echo "<div align='center'>";
echo $_SESSION["user"]  . " 您好，歡迎進入網站!<br/>";
echo "</div>";
?>
<hr>
	<a href='../index.php'>回前頁</a>
</div>
</body>
</html>