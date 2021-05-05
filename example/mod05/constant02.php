<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <title>mod05/constant02.php</title>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
  </head>
  <body>
  <div align='center'>
		<h2>運用常數的範例二</h2>
		<hr>
    <?php
		const PI =3.1415962;
		$r = 10 ;
		$area = PI * $r * $r ; // * 表示乘法運算子
		echo "Area=" . $area . "<br>";
    ?>
    <hr>
	<a href='index.php'>回前頁</a>
    </div>
</body> 
</html>