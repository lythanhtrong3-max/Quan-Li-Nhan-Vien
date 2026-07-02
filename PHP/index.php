<?php
include("dataBase.php");

// Tìm kiếm
$keyword = "";

if(isset($_GET['search']))
{
    $keyword = $_GET['search'];

    $sql = "SELECT * FROM nhanvien
            WHERE maNV LIKE '%$keyword%'
            OR hoTen LIKE '%$keyword%'
            OR sdt LIKE '%$keyword%'
            ORDER BY id DESC";
}
else
{
    $sql = "SELECT * FROM nhanvien ORDER BY id DESC";
}

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="vi">

<head>

<meta charset="UTF-8">

<title>Quản Lý Nhân Viên</title>

<link rel="stylesheet" href="../CSS/style.css">

</head>

<body>

<div class="container">

    <h1 class="title">
        HỆ THỐNG QUẢN LÝ NHÂN VIÊN
    </h1>

    <div class="button-group">

        <a href="them.php">
            <button class="them">
                Thêm nhân viên
            </button>
        </a>

    </div>

    <div class="search">

        <form method="GET">

            <input
                type="text"
                name="search"
                placeholder="Nhập mã, tên hoặc số điện thoại..."
                value="<?php echo $keyword; ?>"
            >

            <button type="submit">
                Tìm kiếm
            </button>

        </form>

    </div>

    <table>

        <tr>

            <th>ID</th>

            <th>Mã NV</th>

            <th>Họ tên</th>

            <th>Giới tính</th>

            <th>Ngày sinh</th>

            <th>Địa chỉ</th>

            <th>SĐT</th>

            <th>Email</th>

            <th>Chức vụ</th>

            <th>Lương</th>

            <th>Sửa</th>

            <th>Xóa</th>

        </tr>

<?php

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row["id"]; ?></td>

<td><?php echo $row["maNV"]; ?></td>

<td><?php echo $row["hoTen"]; ?></td>

<td><?php echo $row["gioiTinh"]; ?></td>

<td><?php echo $row["ngaySinh"]; ?></td>

<td><?php echo $row["diaChi"]; ?></td>

<td><?php echo $row["sdt"]; ?></td>

<td><?php echo $row["email"]; ?></td>

<td><?php echo $row["chucVu"]; ?></td>

<td><?php echo number_format($row["luong"]); ?> VNĐ</td>

<td>

<a href="sua.php?id=<?php echo $row["id"]; ?>">

<button class="sua">

Sửa

</button>

</a>

</td>

<td>

<a href="xoa.php?id=<?php echo $row["id"]; ?>"

onclick="return confirm('Bạn có chắc muốn xóa nhân viên này?')">

<button class="xoa">

Xóa

</button>

</a>

</td>

</tr>

<?php

}

}
else
{

?>

<tr>

<td colspan="12">

Không có dữ liệu nhân viên

</td>

</tr>

<?php

}

?>

    </table>

</div>

</body>

</html>