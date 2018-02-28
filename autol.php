<?php

function __autoload($ClassName) {
    $ClassFilePath = './classes/' . $ClassName . '.php';
    if (file_exists($ClassFilePath)) {
        include "$ClassFilePath";
    } else{
        die ("Класса $ClassName не существует");
    }
}

$Car1 = new Car();
$Duck1 = new Duck();
$Pen1 = new Pen();
$TV1 = new TV();

echo ("все ок");
?>
