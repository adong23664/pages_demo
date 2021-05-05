<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
          <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>mod05/variable04.php</title>
  </head>
  <body>
  <div align='center'>
		<h2>運用變數的範例五</h2>
		<hr>
    <?php          // ch03/variable04.php
    	$x  ;      // 變數 $x 沒有初值，會有不正確的結果
    	$y = $x + 1 ; 
    	echo "$x=" .$x . "，  $y=" .$y . "<br>";
	?>
<hr>
	<a href='index.php'>回前頁</a>
</div>	
</body> 
</html>