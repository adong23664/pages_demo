<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<meta charset="utf-8" />
<title>Cat 類別</title>
</head>
<body>
	<div align='center'>
		<h2>Cat 類別</h2>
		<hr>
<?php
class  Cat {
    private $weight  ;			       // Cat類別的屬性
    private $iq  ;
    private $name;
    function __construct($name, $iq, $weight){     	
        $this->name = $name;
        $this->iq = $iq;
        $this->weight = $weight;
    }
    function  eat($foodWeight) {		 // 函數
        $this->weight = $this->weight + $foodWeight * 0.1   ;
    }
    function study($hours) {		      // 函數
        $this->iq = $this->iq  + hours * 0.1;
    }
    function info() {		      // 函數
        return $this->name . ", iq=$this->iq, weight= $this->weight<br>";
    }
}
$kitty = new Cat("凱蒂貓", 90, 3.5);
echo $kitty->info();
?>

<hr>
	<a href='index.php'>回前頁</a>
</div>