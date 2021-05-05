<?php 
    // ob_start() : 開啟輸出緩衝區，一旦開啟輸出緩衝區後，所有的輸入
    // 資料都將寫入Server端內部的記憶體。
    // ob_end_flush() : 將輸出緩衝區內的資料寫出至客戶端
    ob_start();
?>    
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>寫出 Cookies</title>
</head>
<body>
<div align='center'>
	<h2>寫出 Cookies</h2>
	<hr>
<?php 
    // ob_start() : 開啟輸出緩衝區，一旦開啟輸出緩衝區後，所有的輸入
    // 資料都將寫入Server端內部的記憶體。
    // ob_end_flush() : 將輸出緩衝區內的資料寫出至客戶端, 同時關閉輸出緩衝區
    ob_start();        
    echo "Cookies 已經寫出<br>";
    setcookie("UserName", "小丸子123", time() + 24 * 60 * 60);
    setcookie("UserAge", 20, time() + 24 * 60 * 60);
    setcookie("TT", 987555, time() + 24 * 60 * 60);
    setcookie("LastVisit", time(), time() + 24 * 60 * 60);
    ob_end_flush();       // 將輸出緩衝區內的資料寫出至客戶端, 同時關閉輸出緩衝區
?>
<hr>
	<a href='../index.php'>回前頁</a>
</div>
</body>
</html>

