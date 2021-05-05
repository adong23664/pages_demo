<!DOCTYPE html>
<html>
  <head>
	 <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />  
     <meta charset='utf-8'>
     <title>mod10/array03.php</title>
  </head>
  <body>
  <div align='center'>
    <h2>array03.php</h2>
    <hr>
<?php
    $x[252] = "com";
    $x[20] = "gov";
    $x[100] = "net";
    $x["snoopy"] = "tw";
    print_r($x);
    echo "<hr>";
    foreach ($x as $value) {
       echo "$value <br>";
    }
    echo "<hr>";
    foreach ($x as $key => $value) {
       echo "$key,  $value <br>";
    }
    $y[] = 'snoopy';
    $y[] = 'micky';
    $y[] = 'kitty';
    echo "<hr>";
    foreach ($y as $key => $value) {
       echo "$key,  $value <br>";
    }
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body> 
</html>
