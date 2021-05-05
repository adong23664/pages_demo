<!DOCTYPE html>
<html>
  <head>
     <meta charset='utf-8'>
     <link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
     <title>if03.php</title>
  </head>
  <body>
  <div align='center'>
	    <h2>if03.php</h2>
	    <hr>
  <?php
  $score = rand(1, 120) ;
  echo "分數=" . $score ."<br>" ;
  if( $score >= 60  && $score <= 100) {
  	echo "萬歲<br>";
  	echo "萬歲<br>";
  	echo "萬歲<br>";
  } else if ($score >= 50 && $score <= 59 ) {
  	echo "活當<br>";
  } else if ( $score >= 0 && $score <= 49 ) {
  	echo "死當<br>";
  } else {
  	echo "分數錯誤<br>";
  }

  ?>
	<hr>
		<a href=index.php>回前頁</a>
	</div>
   </body> 
</html>