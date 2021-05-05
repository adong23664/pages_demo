<?php
namespace com\myapp\model\pkg1;
require 'Manager.php';

$manager = new Manager("徐瑪莉", 68000, "02-22336500") ;
echo $manager->info();

?>