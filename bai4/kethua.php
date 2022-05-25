<?php

// class A có thể kế thừa class B (extends)
// => các object đc tạo từ class A có thể sử dụng 
// các thuộc tính & phương thức đc tạo từ class B

// ***Lưu ý php là ngôn ngữ đơn kế thừa, nên 1 class chỉ có thể
// kế thừa 1 class hoặc 1 abstract class mà thôi

class DB{
    var $sqlQuery;
    function getConnect(){
        $conn = new PDO("mysql:host=127.0.0.1;dbname=we17101-php2;charset=utf8", 
                        "root", "12345678");
        return $conn;
    }

    static function where($tencot, $phepsosanh, $giatri){
        $model = new static();
        $model->sqlQuery = "select * from " . $model->table 
                            . " where $tencot $phepsosanh '$giatri' ";
        return $model;
    }


    function get(){
        $connect = $this->getConnect();
        $stmt = $connect->prepare($this->sqlQuery);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
        return $data;
    }

}

class Product extends DB{
    var $table = "products";
}

// echo "<pre>";
// $data = Product::where("price", ">", 30000000)->get();
// var_dump($data);


class Cha{
    var $name;
    var $age;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function getInfo(){
        return "Tôi tên là: $this->name, tôi năm nay $this->age tuổi <br>";
    }
}

class Contrai extends Cha{

}

class Congai extends Cha{

}

$son = new Contrai("Trần Văn Sơn", 29);
$linh = new Congai("Trần Thùy Linh", 25);

echo $son->getInfo();
echo $linh->getInfo();
?>