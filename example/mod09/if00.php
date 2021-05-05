<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>if00.php</title>
  </head>
  <body>
   <div align='center'>
	    <h2>if00.php</h2>
  <?php
    if ( date("H") >= 18 ) {   // date("H") 傳回現在的『小時』數
    	echo "明天請早!" ;
    }
    echo "<hr>";
    if ( date("H") >= 6 && date("H") <= 18 ) {
    	echo "現在是白天!" ;
    }
    echo "<hr>";
    $score = rand(1, 100) ;    
    echo "分數=" . $score ."<br>" ;
    if( $score >= 60  ){       // 如果 $score 大於 60  
    	echo "萬歲<br>";        // 顯示三次萬歲 
    	echo "萬歲<br>";
    	echo "萬歲<br>";
    }

   ?>
<hr>
	<a href=index.php>回前頁</a>
</div>
   </body> 
</html>