<?php
abstract class Product {
    const TAX = 20;
    private $title = "Карточка товара";

    function getTitle(){
        return $this->title;
    }

    abstract public function productTitle();

    abstract public function productPrice();

    abstract public function totalPrice();

    abstract public function profitCalc();

    public function addToBasket(){
       echo "<btn>Добавить в корзину</btn>";
    }

    function renderPage(){
        $this->productTitle();
        $this->productPrice();
        $this->totalPrice();
        $this->profitCalc();
        $this->addToBasket();

    }
}

//$productclass = new Product();
//echo $productclass->renderPage();