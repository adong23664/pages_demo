<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
          <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>mod05/variable00.php</title>
  </head>
  <body>
  <div align='center'>
		<h2>運用變數的範例一</h2>
		<hr>
<?php     // ch03/variable00.php
         $user = "mary"; 
         $age  = 18;
         echo "姓名為" . $user . " , 年齡為" . $age ." <br>";
         echo "姓名為$user , 年齡為$age <br>";
         //由上面兩行敘述可比較出雙引號字串的優點
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>  
</html>