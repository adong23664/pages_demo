<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod11</title>
</head>
<body>
<div align='center'>
    <h2>isset_demo.php</h2>
    <hr>
<?php
$_arr = array("Kitty", "Micky");
if (isset($_arr["user"])) {
    echo "元素=" . $_arr["user"] . "<br>";
} else {
    echo "元素不存在";
}  
echo "<hr>";
$_arr["user"] = "Snoopy";
if (isset($_arr["user"])) {
    echo "元素=" . $_arr["user"] . "<br>";
} else {
    echo "元素不存在";
}  
?> 
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
