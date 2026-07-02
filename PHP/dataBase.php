<?php
/*=========================================
    KẾT NỐI CƠ SỞ DỮ LIỆU MYSQL
=========================================*/

// Địa chỉ máy chủ
$host = "localhost";

// Tên đăng nhập MySQL
$username = "root";

// Mật khẩu MySQL
$password = "";

// Tên cơ sở dữ liệu
$database = "nhanvien";

// Tạo kết nối
$conn = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {

    die("Kết nối thất bại: " . mysqli_connect_error());

}

// Thiết lập bảng mã UTF8 để không bị lỗi tiếng Việt
mysqli_set_charset($conn, "utf8");

?>