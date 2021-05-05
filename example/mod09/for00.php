<!DOCTYPE html>
<html>
  <head>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <meta charset='utf-8'>
     <title>for00.php</title>
  </head>
  <body>
  <div align='center'>
	    <h2>for00.php</h2>
	    <hr>
	
<?php
  for ($x = 1 ; $x <= 6; $x++) {
  	echo rand (1, 49) ;
  	echo "<br>";
  }
  
?>
<hr>
	<a href=index.php>回前頁</a>
</div>
</body> 
</html>
