<?php
// tạo ra lớp laptop
// gồm các thuộc tính:
// tên, mã, giá, số lượng, ram, cpu, hdd
// gồm hành động: getInfo() - in ra cấu hình của máy tính đang cần xem
// - sell($soluong) - khi thực hiện sẽ giảm bớt số lượng của thuộc tính so 
// luong của loại máy tính đang thực hiện hành độg

// tạo 2 đối tượng laptop
// thực hiện cả 2 hành động trên với 2 đối tượng vừa tạo

// tạo ra class cửa hàng
// thuộc tính: tên cửa hàng, địa chỉ, số tiền
// mỗi lần bán 1 máy tính thì tiền của cửa hàng sẽ tăng lên bằng giá của sản phẩm vừa bán
// tạo hàm getInfo trong class cửa hàng để hiển thị thông tin của cửa hàng
class CuaHang{
    var $ten;
    var $diachi;
    var $tienvon;
    function getInfo(){
        return "Tên: $this->ten <br>
                địa chỉ cửa hàng: $this->diachi <br>
                Tiền vốn: $this->tienvon <br>
        ";
    }
}


class Laptop{
    var $ten;
    var $ma;
    var $gia;
    var $soluong;
    var $ram;
    var $cpu; 
    var $hdd;
    function getInfo(){
        return "Tên: $this->ten <br>
                Mã máy tính: $this->ma <br>
                Số lượng: $this->soluong <br>
        ";
    }

    function sell($sl){
        $this->soluong = $this->soluong - $sl;
        return $this->gia * $sl;
    }
}

$poly = new CuaHang();
$poly->ten = "Cửa hàng công nghệ FPT Polytechnic";
$poly->diachi = "Số 1 - Trịnh Văn Bô";
$poly->tienvon = 0;
echo $poly->getInfo();

$hp100 = new Laptop();
$hp100->ten = "HP Compaq 100";
$hp100->ma = "HPCQ100";
$hp100->soluong = 56;
$hp100->gia = 150;

echo $hp100->getInfo();
$price = $hp100->sell(3);
$poly->tienvon += $price;

echo $hp100->getInfo();
echo $poly->getInfo();

?>