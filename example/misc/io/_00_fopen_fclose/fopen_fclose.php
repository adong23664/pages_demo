<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>Open and Close Files</title>
</head>
<body>
    Quoted from "http://www.tutorialspoint.com/php/php_files.htm" <p/>
	The PHP fopen() function is used to open a file.
	<br> It requires two arguments stating first the file name
	and then mode in which to operate.
	<p>
		mode: r, r+, w, w+, a, a+<br>
<hr>
讀取檔案 /example/mod21/_00_fopen_fclose/fopen_fclose.php 然後將它的內容送去給連覽器   
<hr>				
<?php
$filename = $_SERVER["DOCUMENT_ROOT"] . "/example/mod21/_00_fopen_fclose/fopen_fclose.php";
$fh = fopen ($filename , "r");
if ($fh) {
	$filesize = filesize( $filename );
	$filetext = fread( $fh, $filesize );
	fclose( $fh );
	echo  "檔案大小 : $filesize 位元組<br>" ;
	echo  "<pre>". htmlspecialchars($filetext) . "</pre>" ;
} else {
	echo "讀取檔案失敗";
}
?>
</p>
</body>
</html>