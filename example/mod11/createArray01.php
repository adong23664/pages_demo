<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod11/explode</title>
</head>
<body>
<div align='center'>
    <h2>createArray01.php</h2>
    <hr>
<?php
$arr = array(123,  3.14, "你", "我",  '他');
$brr = array(25 => "Kitty", 100 => "snoopy", 10 => 0.35);
$crr = array("識別字串1" => 3.14, "Key99"=>"花仙子", 10=>0.35);
print_r($arr);
echo "<hr>";
print_r($brr);
echo "<hr>";
print_r($crr);

?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>