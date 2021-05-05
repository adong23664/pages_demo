<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>if01.php</title>
  </head>
  <body>
   <div align='center'>
	    <h2>if01.php</h2>
	    <hr>
    <?php
        $num = rand(1, 100) ;
        if ($num % 2 ==0){   // 除以 2，如果餘數為 0 
           echo  " $num 為偶數<br> ";
        } else {
           echo  " $num 為奇數<br> ";
        }
    
    ?>
<hr>
	<a href=index.php>回前頁</a>
</div>
</body> 
</html>