<?php
namespace com\myapp\util\pkg0;
require_once 'file1.php';
use com\myapp\util\pkg2\file1;
file1::hello();
echo "<hr>";
$fm = new file1();   
$fm->helloAgain();
echo "<hr>";
?>