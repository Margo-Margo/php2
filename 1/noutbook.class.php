<?php
include "software.class.php";

class Noutbook extends Software {

    public function productTitle() {
        echo "Ноутбук HP";
    }

    public function productPrice() {
        return parent::PRICE * 2;
    }

    public function totalPrice() {
        return $this->productPrice() * parent::getCount();
    }

    public function profitCalc() {
        return $this->productPrice() * parent::getCountt() / 100 * parent::TAX;
    }

}

$obj_real = new Noutbook(3);
echo $obj_real->profitCalc();