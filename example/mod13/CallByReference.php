<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod13/CallByReference.php</title>
</head>
<body>
<div align='center'>
    <h2>CallByReference.php</h2>
    <hr>
<?php
$var1 = 10;
$var2 = 20;

function callByValue_Swap(&$p1, &$p2){ 
    $temp = $p1;
    $p1 = $p2;
    $p2 = $temp;
    
}
print "呼叫方法前，var1: $var1, var2: $var2 <br>";
callByValue_Swap($var1, $var2);
print "呼叫方法後，var1: $var1, var2: $var2 <br>";

?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>