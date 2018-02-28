<?php

class Duck
{
    public $size = 'big';
    public $gend = 'drake';
    public function changeSize($size)
    {
    }
    public function changeGend($gend)
    {
    }
}
$Donald = new Duck();
$Daisy = new Duck();
$Daisy->changeGend('duck');
$Daisy->changeSize('small');

?>
