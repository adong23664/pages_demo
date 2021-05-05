<!DOCTYPE html>
<?php
   function MySub() {
      return "函數測試";
   }
   function sumNum($n) {
   	  $sum = 0 ;
   	  for ($x = 1; $x <= $n; $x++){
   	  	$sum += $x;
   	  }
      return $sum;
   }
?>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod13/udf00.php</title>
</head>
<body>
<div align='center'>
    <h2>udf00.php</h2>
    <hr>
<?php
   echo MySub() . "<br>";
   
   echo "1 + 2 + 3 +...+ 10=" . sumNum(10);
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
