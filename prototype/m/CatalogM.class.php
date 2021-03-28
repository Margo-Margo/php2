<?php


class CatalogM
{

    public function __construct(){}

    // Вывод информации о продуктах каталога
   /* public function getCatalog()
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
    }*/

    public function getCatalog()
    {
        if(isset($_GET['limit'])){
        $limit = $_GET['limit'];
    } else {
        $limit = 6;
    }

        $query = "SELECT * FROM products limit $limit";
        $res = PdoM::Instance() -> SelectAll($query);
        return $res;
//        var_dump($query);

    }

   public function count() {
       $query = "SELECT COUNT(*) FROM products limit $limit";
       $res = PdoM::Instance() -> Select($query);
       return $res["COUNT(*)"];
   }
}