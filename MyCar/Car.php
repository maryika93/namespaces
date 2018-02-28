<?php

class Car
{
    public $color = 'Black';
    public $box = 'auto';
    public function changeColor($color)
    {
    }
    public function changeBox($box)
    {
    }
}
$mersedes = new Car();
$lada = new Car();
$lada->color;
$lada->changeBox('mehanic');
$mersedes->changeColor('green');
$mersedes->box;


?>
