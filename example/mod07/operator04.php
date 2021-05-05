<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>mod07/operator04.php</title>
  </head>
  <body>
  <div align='center'>
    <h2>operator04.php</h2>
    <hr>
    <?php            
	  $sum = 0;             // 存錢筒 = 0;
	  $y   = 20;            // 昨天有零錢 20元; 
	  $sum += $y;           // 放入存錢筒內;
	  $x   = 50;            // 今天有零錢 50元;
	  $sum +=  $x;          // 放入存錢筒內;
	  echo "存錢筒現有 $sum <br>"  ;
    ?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>