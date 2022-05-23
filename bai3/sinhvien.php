<?php

class SinhVien{
    // biến đưa vào class => thuộc tính
    var $name;
    var $gender;

    // hàm đưa vào class => phương thức
    function sayHello(){
        return "Tên tôi là " . $this->name . ", tôi là: " . $this->gender;
    }
}

$nam = new SinhVien();
$nam->name = "Đặng Trung Nam"; // gán giá trị cho thuộc tính của object
$nam->gender = "Nữ";

$diep = new SinhVien();
$diep->name = "Hà Thị Bích Diệp";
$diep->gender = "Nam";

// echo "<pre>";
// var_dump($nam, $diep);die;
?>

<h2><?= $nam->name ?></h2> <!-- lấy giá trị của thuộc tính ra -->
<p>Giới tính: <?= $nam->gender ?></p>
<p>
    <?= $nam->sayHello(); ?>
</p>
<p>
    <?= $diep->sayHello(); ?>
</p>