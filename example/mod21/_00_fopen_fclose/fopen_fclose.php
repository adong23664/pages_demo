<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>Open and Close Files</title>
</head>
<body>
<div align='center'>
	<h2>讀取檔案</h2>
<!-- 	<hr> -->
<!--     Quoted from "http://www.tutorialspoint.com/php/php_files.htm" <p/> -->
<!-- 	The PHP fopen() function is used to open a file. -->
<!-- 	<br> It requires two arguments stating first the file name -->
<!-- 	and then mode in which to operate. -->
<!-- 	<p> -->
<!-- 		mode: r, r+, w, w+, a, a+<br> -->
<!-- <hr> -->
讀取檔案 /example/mod21/_00_fopen_fclose/News.txt 然後將內容送瀏覽器   
</div>
<hr>				
<?php
$filename = $_SERVER["DOCUMENT_ROOT"] . "/example/mod21/_00_fopen_fclose/News.txt";
$fp = fopen ($filename , "r");
if ($fp) {
	$filesize = filesize( $filename );
	$filetext = fread( $fp, $filesize );
	fclose( $fp );
	echo  "檔案大小 : $filesize 位元組<br>" ;
	echo  "<pre>". htmlspecialchars($filetext) . "</pre>" ;
} else {
	echo "讀取檔案失敗";
}
?>
<div align='center'>
<hr>
	<a href='../index.php'>回前頁</a>
</div>
</body>
</html>