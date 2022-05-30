<?php
require_once './controllers/HomeController.php';
require_once './models/User.php';
require_once './models/Product.php';
// về nhà cài đặt phần mềm composer vào máy tính của mình
// https://getcomposer.org/download/
use Controllers\HomeController;
$ctr = new HomeController();
$ctr->index();

?>