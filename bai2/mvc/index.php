<?php
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
// var_dump($url);die;
switch ($url) {
    case '/':
        # điều hướng về controller danh sách sp
        require_once './controllers/sanphamController.php';
        echo danhsachSp();
        break;
    case 'add-product':
        # điều hướng về controller tạo sản phẩm
        require_once './controllers/sanphamController.php';
        echo taoSp();
        break;
    case 'edit-product':
        # điều hướng về controller sửa sản phẩm
        break;
    case 'remove-product':
        # diều hướng về controller xóa sản phẩm
        require_once './controllers/sanphamController.php';
        echo xoaSp();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}

?>