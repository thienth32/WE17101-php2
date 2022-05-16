<?php
// YC1: nhận toàn bộ dữ liệu từ form 
$hoten = $_GET['hoten'];
$ngaysinh = $_GET['ngaysinh'];
$cccd = $_GET['cccd'];
$thoigiannhaphoc = $_GET['thoigiannhaphoc'];
// YC2: Hiển thị thông tin vừa nhập vào từ form
// YC3: tính ra tuổi của sinh viên (hiển thị luôn cùng với dòng ngày sinh)
// 1. lấy ra số năm từ ngày sinh
$namsinh = substr($ngaysinh, 0, 4);
// 2. lấy ra năm hiện tại
$namhientai = date("Y");
$tuoi = $namhientai - $namsinh;
// YC4: dựa vào thời gian nhập học (tháng & năm) cùng với thời điểm hiện tại 
// tính xem sinh viên còn cần học bao nhiêu tháng nữa thì tốt nghiệp
// biết rằng thời gian 1 sinh viên học hết chương trình là 28 tháng.

// $dateNhapHoc = date($thoigiannhaphoc, "+28 months");

// var_dump($dateNhapHoc);die;


?>
<p>Họ và tên: <?= $hoten ?> </p>
<p>Ngày sinh: <?= $ngaysinh ?> - <?= $tuoi ?> Tuổi </p>
<p>Căn cước công dân/chứng minh thư nhân dân: <?= $cccd ?> </p>
<p>Thời gian nhập học: <?= $thoigiannhaphoc ?> </p>