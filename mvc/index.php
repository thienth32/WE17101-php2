<?php

require_once './vendor/autoload.php';
require_once './commons/db.php';
// về nhà cài đặt phần mềm composer vào máy tính của mình
// https://getcomposer.org/download/
use App\Controllers\HomeController;
use App\Controllers\ProductController;
// $ctr = new HomeController();
// $ctr->index();
$url = !isset($_GET['url']) ? "/" : $_GET['url'];

switch ($url) {
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case "danh-sach-sp":
        $ctr = new HomeController();
        echo $ctr->listProduct();
        break;
    case "chi-tiet-sp":
        $ctr = new ProductController();
        echo $ctr->detail();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}


?>