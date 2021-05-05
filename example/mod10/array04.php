<!DOCTYPE html>
<html>
  <head>
	 <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />  
     <meta charset='utf-8'>
     <title>mod10/array04.php</title>
  </head>
  <body>
  <div align='center'>
    <h2>array04.php</h2>
    <hr>
<?php
   $x['pinky'] = "com";
   $x['kitty'] = "gov";
   $x['lucky'] = "net";
   $x['micky'] = "tw";
   foreach ($x as $key => $value) {
      echo "$key, $value <br>";
   }
   echo "<hr>";
   $a = array('aaa'=>'value1', 'ddd'=>"value2", "000"=>987, "qqq"=>3.14);
   foreach ($a as $key => $value) {
      echo "$key, $value <br>";
   }
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>
