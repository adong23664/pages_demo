<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>mod11/listExample</title>
</head>
<body>
<?php
$info = array(5, "FLASH CS4 互動網頁設計", "黃鈺琦", 550, "學貫", "I477");
list($bookID, $title, $author, $price, $company, $bookNo) = $info;
echo "書籍流水號 = $bookID <br>";
echo "書名 =  $title <br>";
echo "作者 =  $author <br>";
echo "價格 =  $price <br>";
echo "出版社 =  $company <br>";
echo "書號 =  $bookNo <br>";

?>
</body>
</html>
