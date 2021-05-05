<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>抽象類別</title>

<?php

abstract class Shape {
    abstract function getArea();
}

class AbstractClass extends Shape {

    private $r;

    function __construct($r)
    {
        $this->r = $r;
    }

    function getArea()
    {
        return 3.14159 * $this->r * $this->r;
    }
}

class Rectangle extends Shape  {
    private $a;
    private $b;

    function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    function getArea() {
        return $this->a * $this->b;
    }
}

class Triangle extends Shape {

    private $side;
    private $height;

    function __construct($s, $h) {
        $this->side = $s;
        $this->height = $h;
    }

    function getArea()  {
        return $this->side * $this->height * 0.5;
    }
}

class Dog{
    
}
class Service {  
    private $totalArea = 0 ;
    function computeTotalArea($shape){
        if ($shape instanceof Shape) {
            $this->totalArea += $shape->getArea();
        } else {
            echo "型態錯誤 <br>";
        }
        
    }
    function getTotalArea(){
        return $this->totalArea;
    }
    
}

?>

</head>
<body>
<?php
$c = new AbstractClass(10); // 建立物件
$r = new Rectangle(10.0, 20.0);
$t = new Triangle(10.0, 20.0);
$d = new Dog();

echo "圓形面積 : " . $c->getArea() . "<br/>";
echo "矩形面積 : " . $r->getArea() . "<br/>";
echo "三角形面積 : " . $t->getArea() . "<br/>";
$service = new Service();
$service->computeTotalArea($c);
$service->computeTotalArea($r);
$service->computeTotalArea($t);
$service->computeTotalArea($d);

echo "面積 總和: " . $service->getTotalArea() . "<br/>";

?>
</body>
</html>
