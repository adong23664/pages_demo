<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>mod05/constant01.php</title>
  </head>
  <body>
  	<div align='center'>
		<h2>運用常數的範例一</h2>
		<hr>
    <?php
		define("PI", 3.1415962);
		$r = 10 ;
		$area = PI * $r * $r ; 
		echo "Area=" . $area . "<br>";
    ?>
    <hr>
	<a href='index.php'>回前頁</a>
    </div>
</body> 
</html>