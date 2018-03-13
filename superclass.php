<?php

abstract class Goods{
    abstract public function changeColor();
}


class Car extends Goods{
    public $box = 'auto';
    public function changeBox($box){
        $this->box = $box;
    }
    public function changeColor()
    {
        return "green";
    }
}
$mersedes = new Car();
$lada = new Car();
$lada->changeBox('mehanic');
$mersedes->changeColor();
$mersedes->box;

class TV extends Goods{
    public function changeColor()
    {
        return "blue";
    }
}
$Toshiba = new TV();
$Toshiba->changeColor();

class Pen extends Goods{
    public $color = 'Black';
    public function changeColor()
    {
        return "red";
    }
}
$Pilot = new Pen();
$Pilot->changeColor();

class Duck extends Goods{
    public $gend = 'drake';
    public function changeGend($gend){
        $this->gend = $gend;
    }
    public function changeColor()
    {
        return "brown";
    }
}
$Donald = new Duck();
$Daisy = new Duck();
$Donald->gend;
$Daisy->changeGend('duck');
$Daisy->changeColor();

?>
