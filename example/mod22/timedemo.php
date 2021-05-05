<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>date()與time()函數</title>
  </head>
  <body>
  <div align='center'>
	<h2>date()與time()函數</h2>
	<hr>
<?php 
 $t=time();
 echo($t . "<br>");
 echo(date("Y-m-d",$t));
 echo("<br>");
 echo(date("Y-m-d H:i:s",$t));
?> 
<hr>
	<a href='index.php'>回前頁</a>
</div>
 </body>
 </html>