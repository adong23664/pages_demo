<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>date()函數</title>
  </head>
  <body>
  <div align='center'>
	<h2>date()函數</h2>
	<hr>
<?php 
 $b = time (); 
 echo '現在時間(1):' . date("Y-m-d G:i:s", $b)  . "<br>";
 echo "現在時間(2):" . date("Y/m/d G:i:s")      . "<br>";
 echo "現在時間(3):" . date("Y M d G:i:s")      . "<br>";
 echo "Expires:"   . date(" D, d M Y G:i:s")    . "<br>";
  
 ?> 
 <hr>
	<a href='index.php'>回前頁</a>
</div>
 </body>
 </html>