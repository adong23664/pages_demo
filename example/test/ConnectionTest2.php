<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body>
    
    <?php
    try {
        $pdo = new PDO('mysql:host=localhost; port=3307; dbname=proj; charset=utf8', 'root', 'root', array(
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT => true
        ));
        // $pdo->exec("set names utf8"); // PHP 5.3.6 以前charset=utf8是無效的，必須使欲用此敘述
        echo "成功建立連線(PDO)<br>";
        //$stmt = $pdo->prepare("INSERT INTO Coffees (cof_name, sup_id, price) VALUES ('嵐山咖啡', 10, 25.5)");
        $sql = "SELECT bookID, title, author, price, bookNo, companyID "
             . " FROM book WHERE price > 0";
        echo "<table class='tb' border='3' >";
        echo "<tr><th>書籍流水號</th><th>作者</th>" . "<th>書名</th><th>價格</th>"
            . "<th>書號</th><th>出版社</th>" . "</tr>";
            $pdoStmt = $pdo->query ( $sql );
            //  取出一筆記錄，將其轉換為關聯式陣列，然後傳回此陣列
            while ( $row = $pdoStmt->fetch ( PDO::FETCH_NUM ) ) {
                echo '<tr>';
                echo '<td>' . $row [0] . '</td>';
                echo '<td>' . $row [1] . '</td>';
                echo '<td>' . $row [2] . '</td>';
                echo '<td>' . $row [3] . '</td>';
                echo '<td>' . $row [4] . '</td>';
                echo '<td>' . $row [5] . '</td>';
                echo '</tr>';
            }
            echo "</table>";
    } catch ( PDOException $ex ) {
        echo "發生資料庫存取錯誤，訊息:" . $ex->getMessage () . "<br>";
   
    
        
        
        
    } catch (PDOException $ex) {
        echo "存取資料庫時發生錯誤，訊息:" . $ex->getMessage() . "<br>";
        echo "行號:" . $ex->getLine() . "<br>";
        echo "堆疊:" . $ex->getTraceAsString() . "<br>";
    }

    ?>
    </body>
</html>