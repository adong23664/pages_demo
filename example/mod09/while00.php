<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod09/while00.php</title>
</head>
<body>
<div align='center'>
	    <h2>while00.php</h2>
	    <hr>
<?php
$x = 1; $sum=0 ;
while ( $x <= 10 ) {
	$sum = $sum + $x ;
	$x++;
}
echo "1 加到 10 的總和=" . $sum . "<br>";
?>
<hr>
	<a href=index.php>回前頁</a>
</div>
</body>
</html>
