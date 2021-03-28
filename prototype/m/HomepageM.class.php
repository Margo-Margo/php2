<?php


class HomepageM
{

    public function __construct(){}

    // Вывод информации о продуктах каталога
    public function getGoods()
    {
        $query = "SELECT * FROM products limit 5";
        $res = PdoM::Instance() -> SelectAll($query);
        return $res;
    }
}