<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>Session Test</title>
</head>
<body>
<div align='center'>
	<h2>Session Test</h2>
	<hr>
<form id="form1" name="form1" method="post" action="session_test.php">
  <label for="message">訊息：</label>
  <input type="text" name="message" id="message" />
  <br />
  <label for="button"></label>
  <input type="submit" name="button" id="button" value="Submit" />
  <br />
</form>

<a href='session_unset.php'>Session Unset</a><br>
<hr/>
<?php
    echo '$_SESSION 內的元素個數:' . count($_SESSION) . " sessionid=". session_id()  ."<br>";
    if (!isset($_SESSION['seqNo'])) { // 如果未設定Session變數 seqNo
		$_SESSION['seqNo'] = 0 ;      // 設定Session變數 seqNo 的值為 0 
	}
	// 如果 $_POST['message'] 的長度大於 0	
    if (isset($_POST['message']) && strlen($_POST['message']) > 0) {
    	$var = 'KEY_' . ++$_SESSION['seqNo']; 
    	$_SESSION["$var"] = $_POST['message'] ;  // 將 $_POST['message']的值存入 Session變數 $var內
	}

	echo "<hr>"; 
	echo "你輸入的資料有：<br>"; 	
	foreach ($_SESSION as $key => $value){
	   echo "識別字串:" . $key . "&nbsp;&nbsp;&nbsp;&nbsp;對應的訊息:" . $value . "<br>";
	}
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>
