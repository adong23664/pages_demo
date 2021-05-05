<!DOCTYPE html>
<html>
  <head>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <meta charset='utf-8'>
     <title>for02.php</title>
  </head>
  <body>
  <div align='center'>
	    <h2>for02.php</h2>
	    <hr>
  <?php               // ch04/for02.php
  $x = 0; $sum=0 ;
  for ( $x = 1; $x <= 10;  $x++ ) {
  	$sum = $sum + $x ;
  }
  echo "1 加到 10 的總和=" . $sum . "<br>";
  ?>
<hr>
	<a href=index.php>回前頁</a>
</div>
</body> 
</html>