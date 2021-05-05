<?php
// ValidException類別
class ValidException extends Exception {
    protected $message  ;			       // Cat類別的屬性
    function __construct($message){
        $this->message = $message;
    }
    
    function getMyMessage() {
        print "檔案: " . $this->getFile()."<br/>";
        print "行號: " . $this->getLine()."<br/>";
        print "錯誤訊息: " . $this->getMessage()."<br/>";
    }
}
?>