<?php
include("dataBase.php");

// Kiểm tra có truyền id hay không
if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    // Kiểm tra nhân viên có tồn tại
    $check = "SELECT * FROM nhanvien WHERE id = $id";
    $result = mysqli_query($conn, $check);

    if(mysqli_num_rows($result) > 0)
    {
        // Thực hiện xóa
        $sql = "DELETE FROM nhanvien WHERE id = $id";

        if(mysqli_query($conn, $sql))
        {
            echo "
            <script>
                alert('Xóa nhân viên thành công!');
                window.location='index.php';
            </script>
            ";
        }
        else
        {
            echo "
            <script>
                alert('Không thể xóa nhân viên!');
                window.location='index.php';
            </script>
            ";
        }
    }
    else
    {
        echo "
        <script>
            alert('Nhân viên không tồn tại!');
            window.location='index.php';
        </script>
        ";
    }
}
else
{
    echo "
    <script>
        alert('Không tìm thấy mã nhân viên!');
        window.location='index.php';
    </script>
    ";
}
?>