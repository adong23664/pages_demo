<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>mod07/operator03.php</title>
  </head>
  <body>
  <div align='center'>
    <h2>operator03.php</h2>
    <hr>
    <?php              
	  $subtotal = 100 ;            // 未稅金額
	  $tax = $subtotal * 0.05 ;    // 營業稅
	  $total = $tax + $subtotal ;  // 含稅金額
	  echo "總金額(含稅)= $total <br>"  ;
      
	  $sum = 0;             // 存錢筒 = 0;
	  $y   = 20;            // 昨天有零錢 20元; 
	  $sum = $sum + $y;     // 放入存錢筒內;
	  $x   = 50;            // 今天有零錢 50元;
	  $sum = $sum + $x;     // 放入存錢筒內;
	  echo "存錢筒現有 $sum <br>"  ;
	  
    ?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>