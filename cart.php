<?php
abstract class Goods
{
    public $title;
    public $price;

    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }
}
class Cart{
    public $countProduct = [];


    public function sum(){

        $res = 0;
        foreach($this->countProduct as $key => $value){
            $res = $res + ($value->price * $value->numberProduct);
        }
        return $res;
    }

    public function addProduct($product){
        $product->numberProduct = 1;

        if(array_key_exists($product->title, $this->countProduct)){
            $this->countProduct[$product->title]->numberProduct++;

            echo 'Товар добавлен в корзину<br>';
        }
        else{
            $this->countProduct[$product->title] = $product;
        }
    }

    public function deleteOneProduct($product){
        if(array_key_exists($product->title, $this->countProduct)){

            if($this->countProduct[$product->title]->numberProduct > 0){

                $this->countProduct[$product->title]->numberProduct--;
                echo 'Товар ' . $this->countProduct[$product->title]->title. ' удалён из корзины<br>';
            }
        }
    }

    public function showAllProduct(){
        $resCountProduct = 0;

        foreach($this->countProduct as $key => $value){
            echo 'Товар ' . $key . ', Количество: ' . $value->numberProduct . '</br>';

            $resCountProduct = $resCountProduct + $value->numberProduct;
        }
        echo 'Общее количество товаров: ' . $resCountProduct;
    }

}

Class Order extends Cart {

}
$MyOrder = new Order();

class Car extends Goods
{
}
$mersedes = new Car('mersedes', 10000);
$lada = new Car('lada', 5000);

class TV extends Goods
{
}
$LG = new TV('LG', 100);
$Toshiba = new TV('Toshiba',200);

class Pen extends Goods
{
}
$Parker = new Pen('Parker', 500);
$Pilot = new Pen('Pilot', 100);

class Duck extends Goods
{
}
$Donald = new Duck('Donald', 300);
$Daisy = new Duck('Daisy', 200);

$myCart = new Cart();
$myCart->addProduct($Daisy);
$myCart->addProduct($Pilot);
$myCart->addProduct($Pilot);
$myCart->addProduct($Toshiba);
$myCart->addProduct($mersedes);

echo '</br>';

$myCart->showAllProduct();

echo '</br>';

echo 'На сумму: ' . $myCart->sum();