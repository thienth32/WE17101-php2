<?php
// tính đóng gói: tính chất để giới hạn khả năng
// truy cập (lấy/gán giá trị cho thuộc tính hoặc gọi phương thức) của 
// thuộc tính/phương thức được định nghĩa trong class

class Cha{
    private $money = 5000;
    protected $taisan = "cai gi do";
    public function getMoney(){
        return $this->money;
    }
}

class Con extends Cha{
    public function setTaiSan($ts){
        $this->taisan = $ts;
    }

    public function getTaiSan(){
        return $this->taisan;
    }
}

$long = new Con();
// echo $long->getMoney();
var_dump($long);
echo "<br>";
$long->setTaiSan(10000);
var_dump($long);
echo "<br>";
echo $long->taisan;

?>