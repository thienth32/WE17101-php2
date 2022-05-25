<?php


/**
 * Tính đa hình: khi class Con kế thừa class Cha
 * thì trong class Con được phép viết lại (overwrite) 
 * nội dung các phương thức hoặc giá trị thuộc tính
 * đã được định nghĩa ở lớp Cha
 */
class Cha{
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

class Con1 extends Cha{
    function __construct($ten, $tuoi, $diachi)
    {
        $this->name = $ten;
        $this->age = $tuoi;
        $this->address = $diachi;
    }
}

class Con2 extends Cha{}

$long = new Con1("Nguyễn Hoàng Long", 32, "Sóc Sơn, Hà Nội");
var_dump($long);
$lien = new Con2("Lê Thị Liên", 29);
var_dump($lien);
?>