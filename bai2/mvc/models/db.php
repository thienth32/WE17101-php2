<?php
const DBNAME = "we17101-php2";
const DBUSER = "root";
const DBPASS = "12345678";
const DBCHARSET = "utf8";
const DBHOST = "127.0.0.1";

// tạo kết nối từ project php sang mysql
function getConnect(){
    $connect = new PDO("mysql:host=" . DBHOST 
                        . ";dbname=" . DBNAME 
                        . ";charset=" . DBCHARSET,
                        DBUSER,
                        DBPASS
            );
    return $connect;
}
?>