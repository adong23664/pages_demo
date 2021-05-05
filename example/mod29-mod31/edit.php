<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>edit.php</title>
</head>
<body text="blue">
<h2 style='color:blue; text-align: center'>編輯聯絡人資料</h2>
<hr>
<?php

try {
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



$id = $_GET["id"]; // 取得URL參數的編號
$action = $_GET["action"]; // 取得操作種類
// 執行操作
echo "name=, id=$id, action=$action<br>";
switch ($action) {
    case "update": // 更新操作
        $name = $_POST["Name"]; // 取得欄位資料
        $tel = $_POST["Tel"];
        $sql = "UPDATE contact SET name=:name, tel=:tel WHERE id=:id ";
        $pdoStmt = $pdo->prepare($sql);
        echo "name=$name, tel=$tel, id=$id<br>";
        $pdoStmt->bindValue(":name", $name, PDO::PARAM_STR);   
        $pdoStmt->bindValue(":tel", $tel, PDO::PARAM_STR);
        $pdoStmt->bindValue(":id", $id, PDO::PARAM_STR);
        $pdoStmt->execute();
        //header("Location: browseContact.php");
        break;
    case "del": // 刪除操作
        $sql = "DELETE FROM contact WHERE id=:id ";
        $pdoStmt = $pdo->prepare($sql);
        $pdoStmt->bindValue(":id", $id, PDO::PARAM_STR);
        $pdoStmt->execute();
        header("Location: browseContact.php"); // 轉址
        break;
    case "edit": // 編輯操作
        $sql = "SELECT * FROM contact WHERE id=:id ";
        $pdoStmt = $pdo->prepare($sql);
        $pdoStmt->bindValue(":id", $id, PDO::PARAM_STR);
        $pdoStmt->execute();
        $row = $pdoStmt->fetch(PDO::FETCH_ASSOC); // 取回記錄
        $name = $row['name']; // 取得欄位name
        $tel = $row['tel']; // 取得欄位tel
}
?>
<div align='center'>
<form action="edit.php?action=update&id=<?php echo $id ?>" method="post">
	<table border="1">
		<tr>
			<td><font size="2">姓名: </font></td>
			<td><input type="text" name="Name" size="20" maxlength="10"
				value="<?php echo $name ?>" /></td>
		</tr>
		<tr>
			<td><font size="2">電話 : </font></td>
			<td><input type="text" name="Tel" size="20" maxlength="20"
				value="<?php echo $tel ?>" /></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="更新連絡資料" /></td>
		</tr>
	</table>
</form>
<hr>
<a href='browseContact.php'>回前頁</a>
</div>
</body>
</html>