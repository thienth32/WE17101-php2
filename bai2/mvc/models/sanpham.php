<?php
require_once "./models/db.php";
function ds_sanpham(){
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    $sql = "select * from products where name like '%$keyword%' ";
    return getData($sql);
}
?>