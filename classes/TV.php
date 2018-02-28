<?php

class TV
{
    public $type = 'type';
    public $size = 'small';
    public function changeType($type){
    }
    public function changeSize($size){
    }
}
$LG = new TV();
$Toshiba = new TV();
$LG->changeType('black&white');
$Toshiba->changeSize('big');
?>
