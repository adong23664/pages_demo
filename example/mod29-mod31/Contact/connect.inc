<!-- 程式範例：mycontacts_open.inc -->
<?php
try {
    //
    $pdo = new PDO('mysql:host=localhost; port=8889; dbname=proj; charset=utf8', 'root', 'root',
    //    	$pdo = new PDO('mysql:host=localhost; port=8889s; dbname=proj; charset=utf8', 'root', 'Do!ng123',
    array(PDO::ATTR_EMULATE_PREPARES=>false,
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => true)
    );
    // $pdo->exec("set names utf8");   // PHP 5.3.6 以前的版本 charset=utf8是無效的，必須使欲用此敘述
    echo "成功建立連線(PDO)<br>";
}
catch(PDOException $ex){
    echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
    echo "行號:" . $ex->getLine() . "<br>";
    echo "堆疊:" . $ex->getTraceAsString() . "<br>";
}
?>	