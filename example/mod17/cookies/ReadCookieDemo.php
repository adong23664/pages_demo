<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>讀入 Cookies</title>
</head>
<body>
<div align='center'>
	<h2>讀入 Cookies</h2>
	<hr>
<?php
    echo $_COOKIE['UserName']  . "<br>";
    echo $_COOKIE['UserAge']   . "<br>";
    echo $_COOKIE['TT']        . "<br>";
    echo $_COOKIE['LastVisit'] . "<br>";
    echo "<hr>";
    foreach($_COOKIE as $k => $v) {
    	echo "印出Cookies: " .$k ."=>" . $v . "<br>";
    }
    echo "<hr>";
    echo '您上次的拜訪時間為' . date("Y/m/d H:i:s", $_COOKIE['LastVisit'])  . "<br>";
?>
<hr>
	<a href='../index.php'>回前頁</a>
</div>
</body>
</html>
</body>
</html>

