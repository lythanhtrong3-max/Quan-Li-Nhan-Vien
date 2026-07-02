<?php
include("dataBase.php");

// Kiểm tra khi nhấn nút Thêm
if (isset($_POST["btnThem"])) {

    $maNV = trim($_POST["maNV"]);
    $hoTen = trim($_POST["hoTen"]);
    $gioiTinh = $_POST["gioiTinh"];
    $ngaySinh = $_POST["ngaySinh"];
    $diaChi = trim($_POST["diaChi"]);
    $sdt = trim($_POST["sdt"]);
    $email = trim($_POST["email"]);
    $chucVu = trim($_POST["chucVu"]);
    $luong = trim($_POST["luong"]);

    // Kiểm tra dữ liệu
    if (
        empty($maNV) ||
        empty($hoTen) ||
        empty($gioiTinh) ||
        empty($ngaySinh) ||
        empty($diaChi) ||
        empty($sdt) ||
        empty($email) ||
        empty($chucVu) ||
        empty($luong)
    ) {

        echo "<script>
                alert('Vui lòng nhập đầy đủ thông tin!');
              </script>";

    } else {

        $sql = "INSERT INTO nhanvien
                (maNV, hoTen, gioiTinh, ngaySinh, diaChi, sdt, email, chucVu, luong)
                VALUES
                (
                '$maNV',
                '$hoTen',
                '$gioiTinh',
                '$ngaySinh',
                '$diaChi',
                '$sdt',
                '$email',
                '$chucVu',
                '$luong'
                )";

        if (mysqli_query($conn, $sql)) {

            echo "<script>
                    alert('Thêm nhân viên thành công!');
                    window.location='index.php';
                  </script>";

        } else {

            echo "<script>
                    alert('Có lỗi xảy ra!');
                  </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>

<meta charset="UTF-8">

<title>Thêm Nhân Viên</title>

<link rel="stylesheet" href="../CSS/style.css">

</head>

<body>

<div class="container">

<h1 class="title">
THÊM NHÂN VIÊN
</h1>

<form method="POST">

<div class="form">

<label>Mã nhân viên</label>

<input
type="text"
name="maNV"
placeholder="Nhập mã nhân viên">

<label>Họ và tên</label>

<input
type="text"
name="hoTen"
placeholder="Nhập họ tên">

<label>Giới tính</label>

<select name="gioiTinh">

<option value="">--Chọn--</option>

<option value="Nam">Nam</option>

<option value="Nữ">Nữ</option>

</select>

<label>Ngày sinh</label>

<input
type="date"
name="ngaySinh">

<label>Địa chỉ</label>

<input
type="text"
name="diaChi"
placeholder="Nhập địa chỉ">

<label>Số điện thoại</label>

<input
type="text"
name="sdt"
placeholder="Nhập số điện thoại">

<label>Email</label>

<input
type="email"
name="email"
placeholder="Nhập email">

<label>Chức vụ</label>

<input
type="text"
name="chucVu"
placeholder="Ví dụ: Nhân viên">

<label>Lương</label>

<input
type="number"
name="luong"
placeholder="Nhập lương">

</div>

<div class="button-group">

<button
class="them"
type="submit"
name="btnThem">

Thêm nhân viên

</button>

<a href="index.php">

<button
class="refresh"
type="button">

Quay lại

</button>

</a>

</div>

</form>

</div>

</body>

</html>
<body>
    <h2>Quản lý nhân viên</h2>