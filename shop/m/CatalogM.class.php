<?php


class CatalogM
{

    public function __construct(){}

    // Вывод информации о продуктах каталога
    public function getCatalog()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $query = "SELECT * FROM products where category_id=$id";
        } else {
            $query = "SELECT * FROM products";
        }
//        var_dump($query);
        $res = PdoM::Instance() -> SelectAll($query);
//        var_dump($res);
        return $res;
    }
}