<?php
include "product.class.php";

class Connector extends Product {

    private $price;
    private $weight;

    public function productTitle() {
        echo "Коннекторы RJ-45";
    }

    public function __construct($price, $weight)
    {
        self::setPrice($price);
        self::setWeight($weight);
    }

    public function setPrice($price=0)
    {
        $this->price = $price;
    }

    public function setWeight($weight=0)
    {
        $this->weight = $weight;
    }

    public function totalPrice()
    {
        return $this->price * $this->weight;
    }

    public function profitCalc()
    {
        return $this->price * $this->weight / 100 * parent::TAX;
    }

}

$obj_weight = new Connector(3, 300);
echo $obj_weight->profitCalc();