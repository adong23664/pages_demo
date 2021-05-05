<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>strtotime()函數</title>
  </head>
  <body>
  <div align='center'>
	<h2>strtotime函數</h2>
	<hr>
<?php
$start_date = "2017-12-13";
$end_date = "2020-5-18";
echo $start_date . "加10天: " . date("Y-m-d H:i:s", strtotime("$start_date +10 days")) . "<br>";
echo $end_date . "減3天: " . date("Y-m-d H:i:s", strtotime("$end_date -3 days")) . "<br>"; //for minus
?>
<hr>
	<a href='index.php'>回前頁</a>
</div> 
 </body>
 </html>