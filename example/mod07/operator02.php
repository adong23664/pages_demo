<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>mod07/operator02.php</title>
  </head>
  <body>
  <div align='center'>
    <h2>operator02.php</h2>
    <hr>
<?php              
	  $x = true ; 
	  $y = true ;
      echo '($x && $y) --->' . ($x && $y) ;
      echo   "<br>" ;	  	  	  	  
	  $x = false ; 
	  $y = true ;
      echo '($x && $y) --->' . ($x && $y) ;	// 印出空白
      echo   "<br>" ;	  	  	  	  	  
      echo '($x || $y) --->' . ($x || $y) ;
      echo   "<br>" ;	
 ?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>