<?php
include "product.class.php";

class Software extends Product {

    const PRICE = 100;
    private $count;

    public function productTitle() {
        echo "Настрока ПО";
    }

    public function __construct($count)
    {
        self::setCount($count);
    }

    public function productPrice() {
        return PRICE;
    }
    public function getCount() {
        return $this->count;
    }

    public function setCount($count=0)
    {
        $this->count = $count;
    }
    public function totalPrice()
    {
        return self::PRICE * $this->count;
    }
    public function profitCalc()
    {
        return  $this->totalPrice() / 100 * parent::TAX;
    }

}

$obj_digital = new Software(3);
echo $obj_digital->profitCalc();