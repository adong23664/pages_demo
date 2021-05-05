<?php
interface Fly {
    public function landing();
    public function takeOff();
}

class Bird implements Fly {
    private $name;
    function __construct($name){
        $this->name = $name;
    }
    public function landing() {
        echo $this->name . " landing";
    }
    public function takeOff() {
        echo $this->name . " takeOff";
    }
    
}

class Superman implements Fly {
    private $name;
    function __construct($name){
        $this->name = $name;
    }
    public function landing() {
        echo $this->name . " landing<br>";
    }
    public function takeOff() {
        echo $this->name . " takeOff<br>";
    }
}

$clark = new Superman("克拉克超人");
$bird = new Bird("鳥人");

$clark->takeOff();
$bird->takeOff();
?>