<?php
require_once './models/sanpham.php';
function danhsachSp(){
    // lấy danh sách sản phẩm từ csdl
    $products = ds_sanpham();
    // echo "<pre>";
    // var_dump($products);die;
    // $name = "Thienth dep trai";
    include_once './views/trang-chu.php';
}

function taoSp(){
    return "Form tạo sản phẩm";
}


?>