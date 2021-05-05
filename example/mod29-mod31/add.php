<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>add.php</title>
</head>
<body text="blue">
<div align='center'>
<h2 style='color:blue; text-align: center'>新增聯絡人資料</h2>
<hr>
<?php
try {
    //
    $pdo = new PDO('mysql:host=localhost; port=8889; dbname=proj; charset=utf8', 'root', 'root',
    //    	$pdo = new PDO('mysql:host=localhost; port=3306; dbname=proj; charset=utf8', 'root', 'Do!ng123',
        array(PDO::ATTR_EMULATE_PREPARES=>false,
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true)
        );
}
catch(PDOException $ex){
    echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
    echo "行號:" . $ex->getLine() . "<br>";
    echo "堆疊:" . $ex->getTraceAsString() . "<br>";
}


// 取得欄位資料
if (isset($_POST["Name"]) && isset($_POST["Tel"]) ) {
   $name = $_POST["Name"];
   $tel = $_POST["Tel"];
   // 檢查是否有輸入欄位資料
   if ($name != "" && $tel != "") {
      // 建立SQL字串
      $sql = "INSERT INTO contact (name, tel) values(:name, :tel)";        
      $pdoStmt = $pdo->prepare($sql);
      $pdoStmt->bindValue(":name", $name);   // 因為此欄位為 AI
      $pdoStmt->bindValue(":tel", $tel, PDO::PARAM_STR);
      $pdoStmt->execute();
      $num = $pdoStmt->rowCount();
      echo "新增記錄的筆數=$num<br>";
   }
}
?>
<form action="add.php" method="post">
<table border="1" >
<tr bgcolor=#9ADEE5 >
	<th height="48" colspan='2'><font size="5">聯絡人資料</font></th>
</tr>
<tr bgcolor=#9ADEE5 >
	<td><font size="5">姓名: </font></td>
   	<td><input type="text" name="Name" size="20"/></td>
</tr>
<tr bgcolor=#9ADEE5  height="40" >
   <td><font size="5">電話: </font></td>
   <td><input type="text" name="Tel" size="20" /></td>
</tr>
<tr bgcolor=#9ADEE5  height="40" >
   <td colspan="2" align="center">
       <input type="submit" value="新增聯絡資料"/></td>
   </tr>
</table>
</form>
<hr>
<a href='browseContact.php'>回前頁</a>
</div>
</body>
</html>