<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<meta charset='utf-8'>
</head>
<body> 
<div align='center'>
	    <h2>double_q.php</h2>
	    <hr>
    <?php
    echo("Today is fine!<br>");
    echo("今天天氣很好！<br>");
    echo("Happy Birthday.\n<br>");
    echo("Happy Birthday.\\n<br>");
    echo("My name is \"Mary\".<br>");
    echo("My name is 'Mary'.<br>");
    //echo("My name is "Mary".<br>");  // 此行語法是錯誤的
    $str = "Mary";
    echo("There are many {$str}s in my school.<br>");
    echo("金錢符號是 \$_$ !<br>");
	?>
	<hr>
		<a href='index.php'>回前頁</a>
	</div>
  </body>
</html>