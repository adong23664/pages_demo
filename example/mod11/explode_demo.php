<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod11/explode_demo</title>
</head>
<body>
<div align='center'>
    <h2>explode_demo.php</h2>
    <hr>
<?php
$str = 'Kitty Mickey Snoopy';
$str_sec = explode(" ",$str);
print_r($str_sec);  
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
