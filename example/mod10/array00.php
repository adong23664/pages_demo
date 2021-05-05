<!DOCTYPE html>
<html>
  <head>
	<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
	<meta charset='utf-8'>
	<title>mod10/array00.php</title>
  </head>
  <body>
  <div align='center'>
    <h2>array00.php</h2>
    <hr>
<?php
   $arr = array(25 => "Kitty", 100 => "snoopy", 10 => 0.35); 
   $brr = array("識別字串1" => 3.14, "Key99"=>"花仙子", 10=>0.35); 
   print_r($arr);
   echo "<br>";
   print_r($brr);
   echo "<hr>";
   $crr = array(123,  3.14, "你", "我",  '他');
   print_r($crr);
  
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>
