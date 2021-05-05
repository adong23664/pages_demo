<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>explode函數</title>
</head>
<body>
<div align='center'>
    <h2>explode函數</h2>
    <hr>
	<?php
        $str='Kitty|Mickey|Snoopy|Garfield';
        $arr1 = explode('|', $str) ; 
        print_r($arr1);  
    ?>
<hr>
<a href='index.php'>回前頁</a>
</div>
</body>
</html>
