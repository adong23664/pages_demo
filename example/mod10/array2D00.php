<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<meta charset='utf-8'>
<title>mod10/array2D00.php</title>
</head>
<body>
<div align='center'>
    <h2>array2D00.php</h2>
    <hr>
<?php
   $x = array(
           array(101, 99,  28, 66), // [0][0]  [0][1]  [0][2]       
           array( 45, 10,  25, 50),	// [1][0]  [1][1]  [1][2]     
           array( 60, 41, 27,  45)	// [2][0]  [2][1]  [2][2]     
        ) ; 

   echo "<h3>每列的元素個數相同</h3>";
   echo "<hr>";
   // 橫向相加   
   for($a = 0; $a < count ( $x ); $a ++) {
    	$sum = 0;
    	for($t = 0; $t < count ( $x [$a] ); $t ++) {
    		$sum += $x [$a] [$t];
   	    }
   	    echo "第" . ($a+1) . "橫列的和=$sum<br>";
   }
   echo "<hr>";
   // 縱向相加
   for($a = 0; $a < count($x[0]); $a ++) {
   $sum = 0;   
   for($t = 0; $t < count($x); $t ++) {
       if (isset($x [$t] [$a])){
   		   $sum += $x [$t] [$a];
   	   }
   	}   
   	echo "第" . ($a+1)   . "直行的和==$sum<br>";
   }
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>