<!DOCTYPE html>
<html>
  <head>
  	 <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <meta charset='utf-8'>
     <title>mod10/array02.php</title>
  </head>
  <body>
  <div align='center'>
    <h2>array02.php</h2>
    <hr>
<?php
       $arr = array(100, 50, 30, "kitty");
       echo '$arr[0]=' . $arr[0] . "<br>";
       echo '$arr[1]=' . $arr[1] . "<br>";
       echo '$arr[2]=' . $arr[2] . "<br>";
       echo '$arr[3]=' . $arr[3] . "<br>";
       echo  "<hr>";
       for($n=0;  $n < count($arr);  $n++){
       	echo '$arr['  .  $n  .  ']='  .  $arr[$n]  . "<br>";
	  }	 
	 
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>
