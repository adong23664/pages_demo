<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>Get Demo</title>
</head>
<body>
	<div align='center'>
		<h2>HTTP Get方法一</h2>
		<hr>
	<?php
    $a = $_GET['numA'];
    $b = $_GET['numB'];
    $c = $a + $b;
    echo "兩數的總和為 $c";
    ?>
	<hr>
		<a href='index.php'>回前頁</a>
	</div>
</body>
</html>
