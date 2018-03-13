<?php

class Goods
{
    public $price = '1000';
    public $discont = '10';
    public $pop = 'popular';
    public $tv = 'Toshiba';
    public function changePrice($price)
    {
    }
    public function changeDiskont($discont)
    {
    }
    public function changePop($pop)
    {
    }
    public function changeTv($tv)
    {
    }
}
$First = new Goods();
$Second = new Goods();
$Third = new Goods();
$First->changeDiskont('35');
$Second->changePop('unpopular');
$Second->changeTv('Tomas');
$Third->changePrice(5000);
$Third->changeDiskont('0');
$Third->changeTv('Sony');

?>
