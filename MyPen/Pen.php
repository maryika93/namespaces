<?php

class Pen
{
    public $colorpen = 'blue';
    public $type = 'expensive';
    public function changeType($type)
    {
    }
    public function changeColor($colorpen)
    {
    }
}
$Parker = new Pen();
$Pilot = new Pen();
$Pilot->changeType('cheap');
$Pilot->changeColor('Black');


?>
