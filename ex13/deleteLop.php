<?php
    if (isset($_POST['submit'])) {
    include 'connect.php';

    // Lấy mã lớp từ form
    $malop = $_POST['malop'];

    // Xóa bản ghi trong bảng LOP
    $sql = "DELETE FROM LOP WHERE MALOP='$malop'";
    if (mysqli_query($conn, $sql)) {
        echo "Xóa bản ghi thành công.";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
    }
?>