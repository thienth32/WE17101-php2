<?php
require_once "./models/db.php";
function ds_sanpham(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "select * from products where name like '%$keyword%' ";
    return getData($sql);
}

function xoa_sanpham(){
    $id = $_GET['id'];
    $sql = "delete from products where id = $id";
    getData($sql, false);
}
?>