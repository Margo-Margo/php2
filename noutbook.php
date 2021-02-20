<?php
include "product.php";

class noutbook extends product {
    public $color;
    function __construct($title, $price, $content, $color)
    {
        parent::__construct($title, $price, $content);
        $this->color = $color;
    }
    function show(){
        echo $this->title." стоит ".$this->price."<br> Цвет: ".$this->color."<br> Технические характеристики: ".$this->content."<hr>";
}