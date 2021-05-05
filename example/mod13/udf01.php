<!DOCTYPE html>
<?php
   function MySub($x) {
      echo $x*$x;
   }
   function YourSub($x, $y) {
      echo ($x * $y);
   }
?>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod13/udf01.php</title>
</head>
<body>
<div align='center'>
    <h2>udf01.php</h2>
    <hr>
<?php
   echo MySub(5) . "<br>";
   
   echo YourSub(10, 3);
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
