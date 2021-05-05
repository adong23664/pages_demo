<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod13/globalVariable00.php</title>
</head>
<body>
<div align='center'>
    <h2>globalVariable00.php</h2>
    <hr>
<?php
$a = 100;
function myTest()
{
    global $a;
    echo "全域變數a=$a<br>";
    $a = 10;
}
myTest();
echo "結束myTest()，全域變數a的值=$a<br>";

?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
