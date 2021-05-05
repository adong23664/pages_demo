<?php
namespace com\myapp\util\pkg1;
require 'fileManager.php';
fileManager::hello();
echo "<hr>";
$fm = new fileManager();
$fm->helloAgain();
echo "<hr>";
?>