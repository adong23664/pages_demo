<!DOCTYPE html>
<html>
  <head>
  	 <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <meta charset='utf-8'>
     <title>mod10/array01.php</title>
  </head>
  <body>
  <div align='center'>
    <h2>array01.php</h2>
    <hr>
<?php
       $crr = array(123, 3.14, "你", "我", '他'); 
       print_r($crr);
       echo "<hr>";
       echo "第一個元素: $crr[0] <br>";
       echo "第二個元素: $crr[1] <br>";
       echo "第五個元素: $crr[4] <br>";
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>
