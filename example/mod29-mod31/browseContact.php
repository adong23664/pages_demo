<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>通訊錄管理</title>
</head>
<body text="blue">
<div align='center'>
		<h2>通訊錄管理</h2>
		<hr>
<?php
session_start(); // 啟動交談期
// $records_per_page = 3; // 每一頁顯示的記錄筆數
                       // 取得URL參數的頁數
// if (isset($_GET["Pages"])){
//     $pages = $_GET["Pages"];
// } else {
//     $pages = 1;
// }
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
// 設定SQL查詢字串
if (isset($_SESSION["SQL"]))
    $sql = $_SESSION["SQL"];
else
    $sql = "SELECT * FROM contact ORDER BY id";
// 執行SQL查詢
$pdoStmt = $pdo->query ( $sql );
$total_records = $pdoStmt->fetchColumn(); ; // 取得記錄數
                                           // 計算總頁數
// $total_pages = ceil($total_records / $records_per_page);
// 計算這一頁第1筆記錄的位置
// $offset = ($pages - 1) * $records_per_page;
$Arr2d = $pdoStmt->fetchAll ( PDO::FETCH_ASSOC );
$total_records = count($Arr2d);

echo "記錄總數: $total_records 筆<br/>";
echo "<table border=1><tr bgcolor=#E1A309><th width='80'>編號</th>";
echo "<th  width='100'>姓名</th><th  width='180'>電話</th><th  width='120'>功能</th></tr>";

foreach ($Arr2d aS $row) {
    echo '<tr bgcolor=#FFC533>';
    echo '<td align=center>' . $row ['id'] . '</td>';
    echo '<td align=center>' . $row ['name'] . '</td>';
    echo '<td align=center>' . $row ['tel'] . '</td>';
    echo "<td><a href='edit.php?action=edit&id=";
    echo $row ['id'] . "'><b>編輯</b> | ";
    echo "<a href='edit.php?action=del&id=";
    echo $row ['id'] . "'><b>刪除</b></td>";
    echo '</tr>';
}

echo "</table><br>";
// if ($pages > 1) // 顯示上一頁
//     echo "<a href='contacts.php?Pages=" . ($pages - 1) . "'>上一頁</a>| ";
// for ($i = 1; $i <= $total_pages; $i ++)
//     if ($i != $pages)
//         echo "<a href=\"contacts.php?Pages=" . $i . "\">" . $i . "</a> ";
//     else
//         echo $i . " ";
// if ($pages < $total_pages) // 顯示下一頁
//     echo "|<a href='contacts.php?Pages=" . ($pages + 1) . "'>下一頁</a> ";
?>
<hr />
    <a href="add.php">新增聯絡人資料</a>
<hr>
	<a href='../index.php'>回首頁</a>
</div>
</body>
</html>