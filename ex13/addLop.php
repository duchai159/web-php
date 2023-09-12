<?php

// Kiểm tra xem có dữ liệu được gửi từ form hay không
if (isset($_POST['submit'])) {
    include 'connect.php';

    // Lấy dữ liệu từ form
    $malop = $_POST['malop'];
    $tenlop = $_POST['tenlop'];
    $khoahoc = $_POST['khoahoc'];
    $gvcn = $_POST['gvcn'];

    // Thêm mới bản ghi vào bảng LOP
    $sql = "INSERT INTO LOP (MALOP, TENLOP, KHOAHOC, GVCN) VALUES ('$malop', '$tenlop', '$khoahoc', '$gvcn')";
    if (mysqli_query($conn, $sql)) {
        echo "Thêm mới bản ghi thành công.";
    } else {
        echo "Lỗi: " . mysqli_error($conn);
    }
    // Đóng kết nối
    mysqli_close($conn);
}
