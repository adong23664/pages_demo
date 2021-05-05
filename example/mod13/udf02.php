<!DOCTYPE html>
<?php
function MyTest($num) {
	$ans = 1;
	for($x = 1; $x <= $num; $x ++) {
		$ans = $ans * $x;
	}
	return $ans;
}

?>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod13/udf02.php</title>
</head>
<body>
<div align='center'>
    <h2>udf02.php</h2>
    <hr>
<?php
echo "10的階乘為" . MyTest ( 10 ) . "<br>";
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
