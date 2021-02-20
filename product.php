<?php

class product {
    public $title;
    public $price;
    public $content;

    function __construct(){
        $this->title = $title;
        $this->price = $price;
        $this->content = $content;
    }
    function show(){
        echo $this->title." стоит ".$this->price."<br> Технические характеристики: ".$this->content."<hr>";
}

