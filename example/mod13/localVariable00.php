<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod13/localVariable00.php</title>
</head>
<body>
<div align='center'>
    <h2>localVariable00.php</h2>
    <hr>
<?php
function myTest() {
    $a = 10;
    echo "區域變數a=$a<br>";
}
myTest();
echo "結束myTest()，區域變數a的值=$a<br>";
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
