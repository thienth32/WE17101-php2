<?php

class Product{
    // static $columns = ["id", "name", "price"];
    const TABLE_NAME = "products";
    static function where(){
        // trong hàm static không có từ khóa $this
        $y = new static();
        return $y;
    }
    function get(){
        
    }
}

class User{

    const TABLE_NAME = "users";
}

// Product::$columns[] = "discount";
// echo User::TABLE_NAME;
// foreach (Product::$columns as $col) {
//     echo "$col<br>";
// }

Product::where()->get();

var_dump($z);die;
$x = new Product();
$x->get();


?>