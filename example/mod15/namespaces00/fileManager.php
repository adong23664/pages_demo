<?php
namespace com\myapp\util\pkg1;

class fileManager {
    static function hello() {
        print '大家好，由fileManager類別的靜態方法hello()送出';
    }
    function helloAgain() {
        print '大家好，由fileManager類別的非靜態方法helloAgain()送出';
    }
    
}

?>