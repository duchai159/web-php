<?php
    include 'connect.php';
    // Lấy dữ liệu từ form
    $malop = $_POST['malop'];
    $tenlop = $_POST['tenlop'];
    $khoahoc = $_POST['khoahoc'];
    $gvcn = $_POST['gvcn'];

    // Cập nhật dữ liệu trong bảng LOP
    $sql = "UPDATE LOP SET TENLOP='$tenlop', KHOAHOC='$khoahoc', GVCN='$gvcn' WHERE MALOP='$malop'";
    if (mysqli_query($conn, $sql)) {
        echo "Cập nhật dữ liệu thành công.";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
?>