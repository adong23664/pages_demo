<!DOCTYPE html>
<html>
  <head>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <meta charset='utf-8'>
     <title>for03.php</title>
  </head>
  <body>
  <div align='center'>
	    <h2>for03.php</h2>
	    <hr>
  <?php               // ch04/for03.php
  for ( $x = 1; $x <= 9;  $x++ ) {
     echo "x=$x<br>";
  }
  ?>
  <hr>
  <?php               
  for ( $x = 0; $x < 9;  $x++ ) {
     echo "x=$x<br>";
  }
  ?>
<hr>
	<a href=index.php>回前頁</a>
</div>
</body> 
</html>