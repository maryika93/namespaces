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
        }
        else{
            $this->countProduct[$product->title] = $product;
        }
    }

    public function deleteOneProduct($product){
        if(array_key_exists($product->title, $this->countProduct)){

            if($this->countProduct[$product->title]->numberProduct > 0){

                $this->countProduct[$product->title]->numberProduct--;
            }
        }
    }

    public function showAllProduct(){
        $resCountProduct = 0;

        foreach($this->countProduct as $key => $value){
                $_SESSION['key'] = $this->countProduct;
            $resCountProduct = $resCountProduct + $value->numberProduct;
        }
        $_SESSION['2'] = $resCountProduct;
    }
}

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
$myCart->showAllProduct();
$_SESSION['3'] = $myCart->sum();

Class Order extends Cart
{
    public function show()
    {
        echo "<h1> Чек </h1>";
        foreach ($_SESSION['key'] as $key) {
            echo 'Товар ' . $key->title . ', Количество: ' . $key->numberProduct. '</br>';
        }
        echo 'Общее количество товаров: ' . $_SESSION['2']. '</br>';
        echo 'К оплате: ' . $_SESSION['3'];
    }
}
$MyOrder = new Order();
$MyOrder->show();