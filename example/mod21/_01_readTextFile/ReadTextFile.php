<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>Reading text file line by line</title>
</head>
<body>
<div align='center'>
	<h2>讀取檔案</h2>
	<hr>
	由 example/mod21/_01_readTextFile/Source.txt 逐列讀入文字，然後寫到
	example/mod21/_01_readTextFile/Source.out.
	<hr>				
<?php
$in = $_SERVER ["DOCUMENT_ROOT"] . "/example/mod21/_01_readTextFile/Source.txt";
$out = $_SERVER ["DOCUMENT_ROOT"] . "/example/mod21/_01_readTextFile/Source.out";
$fin  = fopen ( $in, "r" );
$fout = fopen ( $out, "w" );
if ($fin) {
	while ($line = fgets($fin)) {
	    fwrite($fout, $line);
	}
	echo "檔案:$in 已成功寫出<br>";
} else {
	echo "檔案:$in 不存在<br>";
}
fclose($fin);
fclose($fout);
?>
<hr>
	<a href='../index.php'>回前頁</a>
</div>
</body>
</html>