<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<meta charset="UTF-8">
<title>Html Doc</title>
</head>
<body>
	<div align='center'>
	    <h2>HTTP Get方法一</h2>
	    <hr>
	<?php
        $pUser = $_GET["user"];
        $pType = $_GET["type"];
        echo "user=$pUser<br>";
        echo "type=$pType<br>";
    ?>	
		  <hr>
          <a href='index.php'>回前頁</a>
	</div>
</body>      
</html>		