<?php

// Mysqli
// $hostname = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'php_practice_1';

// $connect = new mysqli($hostname, $username, $password, $dbname);

// if($connect->connect_error) {
//     echo "Lỗi kết nối: ".$connect->connect_error;
// }

// echo "Kết nối thành công";

// PDO
$queryDB1 = 'mysql:host=localhost;dbname=php_practice_1';
$username = 'root';
$password = '';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $connect = new PDO($queryDB1, $username, $password, $options);
    // sử dụng phương thức setAttribute để thiết lập chế độ xử lý lỗi
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Đã connect thành công";
} catch (PDOException $e) {
    $message = $e->getMessage();
    echo "Lỗi kết nối cơ sở dữ liệu: " . $message;
    exit();
}
