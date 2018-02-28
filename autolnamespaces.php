<?php

function autoloadCar($ClassName)
{
    $ClassFilePath = './MyCar/' . $ClassName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
function autoloadDuck($ClassName)
{
    $ClassFilePath = './MyDuck/' . $ClassName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
function autoloadGoods($ClassName)
{
    $ClassFilePath = './MyGoods/' . $ClassName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
function autoloadPen($ClassName)
{
    $ClassFilePath = './MyPen/' . $ClassName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
function autoloadTV($ClassName)
{
    $ClassFilePath = './MyTV/' . $ClassName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}

function autoloadCarInterface($InterfaceName)
{
    $ClassFilePath = './MyCar/' . $InterfaceName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
function autoloadDuckInterface($InterfaceName)
{
    $ClassFilePath = './MyDuck/' . $InterfaceName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
function autoloadGoodsInterface($InterfaceName)
{
    $ClassFilePath = './MyGoods/' . $InterfaceName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
function autoloadPenInterface($InterfaceName)
{
    $ClassFilePath = './MyPen/' . $InterfaceName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
function autoloadTVInterface($InterfaceName)
{
    $ClassFilePath = './MyTV/' . $InterfaceName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    }
}
spl_autoload_register('autoloadCar');
spl_autoload_register('autoloadDuck');
spl_autoload_register('autoloadGoods');
spl_autoload_register('autoloadPen');
spl_autoload_register('autoloadTV');
spl_autoload_register('autoloadCarInterface');
spl_autoload_register('autoloadDuckInterface');
spl_autoload_register('autoloadGoodsInterface');
spl_autoload_register('autoloadPenInterface');
spl_autoload_register('autoloadTVInterface');

$Car1 = new Car();
$Duck1 = new Duck();
$Pen1 = new Pen();
$TV1 = new TV();



echo ("все ок");
?>