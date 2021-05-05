<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>if04.php</title>
  </head>
  <body>
  <div align='center'>
	    <h2>if04.php</h2>
	    <hr>
  <?php
  $num = rand(1, 9) ;
  $mod = $num % 3 ;
  echo "數字num=$num  , 除以3, 餘數=$mod<br>" ;
  if( $mod == 0) {
  	echo "黃色<br>";
  } else if ($mod == 1 ) {
  	echo "綠色<br>";
  } else {
  	echo "紅色<br>";
  }
  ?>
<hr>
	<a href=index.php>回前頁</a>
</div>
</body> 
</html>