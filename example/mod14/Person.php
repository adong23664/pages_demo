<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<link rel='stylesheet' href='/example/css/styles.css' type='text/css' />
<title>Lottery 類別</title>
</head>
<body>
<div align='center'>
	<h2>Person 類別</h2>
	<hr>
<?php
class Person{
    public $name;
    protected $age;
    private $salary;
    function __construct($name,$age,$salary){
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    }
    public function showinfo(){
        //這表示三個修飾符都可以在本類內部使用
        echo $this->name. "||" . $this->age. "||" .$this->salary;
    }
    public function setsalary($val){
        $this->salary=$val;
    } 
    public function getsalary(){
        return $this->salary; //擴充套件：這裡可以呼叫一些方法，如判斷使用者名稱等，正確才給訪問
    } 
}
$p1=new Person("張三", 20, 3000);
//這裡屬於類外部，那麼如果用下面的方法訪問age和salary都會報錯
// echo $p1->age; echo$p1->salary;
echo $p1->name . "<br>";
echo $p1->getsalary() . "<br>"; 
?>
<hr>
	<a href='index.php'>回前頁</a>
</div>
</body>
</html>