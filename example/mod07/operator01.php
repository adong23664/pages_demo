<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>mod07/operator01.php</title>
  </head>
  <body> 
  <div align='center'>
    <h2>operator01.php</h2>
    <hr>
    <?php              
	  $x = 30 ; 
	  $y = 30 ;
      echo '($x == $y) --->' . ($x == $y) ;	// 印出 1
      echo   "<br>" ;	  	  	  	  
	  $x = 40 ; 
	  $y = 30 ;
      echo '($x > $y) --->' . ($x > $y) ;	// 印出 1
      echo   "<br>" ;	  	  	  	  	  
      echo '($x != $y) --->' . ($x != $y) ;	// 印出 1
      echo   "<br>" ;	
    ?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>