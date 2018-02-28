<?php

abstract class Goods
{
    public $color = 'Black';
    public $size = 'small';
    public $price = '1000';
    public $discont = '10';
    public $pop = 'popular';
    abstract public function changeColor($color);
    abstract public function changeSize($size);
    abstract public function changePrice($price);
    abstract public function changeDiskont($discont);
    abstract public function changePop($pop);
}


class Car extends Goods
{
    public $box = 'auto';
    public function changeBox($box){
        $this->box->$box;
    }
    public function changeColor($color)
    {
        parent::changeColor($color);
    }
    public function changeSize($size)
    {
        parent::changeSize($size);
    }
    public function changePrice($price)
    {
        parent::changePrice($price);
    }
    public function changeDiskont($discont)
    {
        parent::changeDiskont($discont);
    }
    public function changePop($pop)
    {
        parent::changePop($pop);
    }
}
$mersedes = new Car();
$lada = new Car();
$lada->color;
$lada->changeBox('mehanic');
$mersedes->changeColor('green');
$mersedes->box;
$lada->changePrice('10000');
$lada->pop;
$mersedes->changeSize('big');
$mersedes->changeDiskont('20');

class TV extends Goods
{
    public function changeColor($color)
    {
        parent::changeColor($color);
    }
    public function changeSize($size)
    {
        parent::changeSize($size);
    }
    public function changePrice($price)
    {
        parent::changePrice($price);
    }
    public function changeDiskont($discont)
    {
        parent::changeDiskont($discont);
    }
    public function changePop($pop)
    {
        parent::changePop($pop);
    }
}
$LG = new TV();
$Toshiba = new TV();
$Toshiba->color;
$LG->size;
$Toshiba->changeSize('big');
$LG->changeDiskont('15');
$Toshiba->changePop('unpopular');
$LG->changePrice('200');
$Toshiba->changeColor('red');

class Pen extends Goods
{
    public function changeColor($color)
    {
        parent::changeColor($color);
    }
    public function changeSize($size)
    {
        parent::changeSize($size);
    }
    public function changePrice($price)
    {
        parent::changePrice($price);
    }
    public function changeDiskont($discont)
    {
        parent::changeDiskont($discont);
    }
    public function changePop($pop)
    {
        parent::changePop($pop);
    }
}
$Parker = new Pen();
$Pilot = new Pen();
$Parker->color;
$Pilot->color;
$Parker->changeSize('big');
$Pilot->changePrice('100');
$Pilot->pop;
$Parker->changeDiskont('5');

class Duck extends Goods
{
    public $gend = 'drake';
    public function changeGend($gend)
    {
        $this->gend->$gend;
    }
    public function changeColor($color)
    {
        parent::changeColor($color);
    }
    public function changeSize($size)
    {
        parent::changeSize($size);
    }
    public function changePrice($price)
    {
        parent::changePrice($price);
    }
    public function changeDiskont($discont)
    {
        parent::changeDiskont($discont);
    }
    public function changePop($pop)
    {
        parent::changePop($pop);
    }
}
$Donald = new Duck();
$Daisy = new Duck();
$Donald->gend;
$Daisy->changeGend('duck');
$Donald->size;
$Daisy->changeSize('big');
$Donald->changePrice('500');
$Donald->pop;
$Daisy->changeDiskont('15');
$Daisy->changeColor('colorfull');

?>
