<?php
// biến
$ten_bien;
// hằng số
const NAME = "Nguyễn Văn A";
define('AGE', 40);
// NAME = "FPT Poly";
// echo NAME . '-' . AGE;

// kiểu dữ liệu
// 1. dữ liệu dạng nguyên thủy
// số, chuỗi, mảng, boolean, null
// 2. dữ liệu tự tạo
// đối tượng

// echo "<pre>";
// var_dump([
//     'name' => "FPT Poly",
//     'age' => 13
// ]); die;

// định nghĩa hàm
// function tên_hàm(
        // tham số, 
        // tham số, 
        // tham số có giá trị mặc định = value
    // ){

//     [return ]
// }

function tiengCoiXe($tiengcoi = "tít tít"){

    return "Xe kêu: $tiengcoi";
}

echo tiengCoiXe("tò tí te");



?>