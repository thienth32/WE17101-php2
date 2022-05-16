<?php
// mảng: tập hợp các giá trị (không cần phải cùng kiểu dữ liệu)
// mỗi giá trị trong mảng thì được gọi là 1 phần tử
// các phần tử được xác định dựa vào "Key" của phần tử đó
// => mảng = [key => value]
$arr = [
    'name' => "FPT Polytechnic",
    'age' => 13,
    'happy bee 12',
    "Đen Vâu",
    "Hoàng Thùy Linh"
];
$arr[1] = "Đen";
// echo "<pre>";
// var_dump($arr);die;
foreach ($arr as $value) {
    echo  $value;
    echo "<br>";
}


?>