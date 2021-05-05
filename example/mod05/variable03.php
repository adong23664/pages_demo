<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
          <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>mod05/variable03.php</title>
  </head>
  <body>
<div align='center'>
		<h2>運用變數的範例四</h2>
		<hr>
<?php             // ch03/variable03.php
    $x = 100 ;    // $x 表示某個變數， 其值目前為 100
    $y = $x + 1 ; 
    $y = $y + 1 ;      
    echo "$x=" .$x . "，  $y=" .$y . "<br>";
 	echo '$x=' .$x . '，  $y=' .$y . "<br>"; ;
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>