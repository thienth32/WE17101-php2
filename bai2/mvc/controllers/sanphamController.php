<?php
require_once './models/sanpham.php';
function danhsachSp(){
    // lấy danh sách sản phẩm từ csdl
    $products = ds_sanpham();
    include_once './views/trang-chu.php';
}

function taoSp(){
    return "Form tạo sản phẩm";
}
function xoaSp(){
    xoa_sanpham();
    header("location: ?url=/");
    die;
}


?>