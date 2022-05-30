<?php
// namespace là không gian tên được quy định 1 phạm vi
// tên hàm/hằng số trong các không gian tên khác nhau thì có thể
// đặt trùng nhau
// nếu muốn sử dụng 1 hàm/class/hằng số từ 1 namespace khác
// thì sử dụng cú pháp use tên nsp\tên class;
// thông thường chúng ta coi tên thư mục chứa file là tên namespace
// tên file = tên class 

namespace A1;
function x(){ echo "namespace A1 hàm x()" ;}

const NAME = "thienth dep trai";

class User{}


namespace A2;
use A1\User as User1;
function x(){ echo "namespace A2 hàm x()" ;}
const NAME = "NAMDT xấu trai";
class User{}

$a = new User();
$b = new User1();
var_dump($a, $b);



?>