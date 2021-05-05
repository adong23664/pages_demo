<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<meta charset='utf-8'>
</head>
<body>
<div align='center'>
	    <h2>stringLength.php</h2>
	    <hr>
<?php
    $str1 = "鈞雅123";
	echo "字串str1使用位元組的個數: " . strlen($str1) . "<br>";
	echo "str1的字元個數: " . mb_strlen($str1, "UTF-8") . "<br>";
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
