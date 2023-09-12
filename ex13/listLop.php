<?php
// Truy vấn dữ liệu từ bảng LOP
include 'connect.php';
$sql = "SELECT * FROM LOP";
$result = mysqli_query($conn, $sql);

// Kiểm tra số bản ghi trả về
if (mysqli_num_rows($result) > 0) {
    // Hiển thị dữ liệu
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Mã lớp: " . $row["MALOP"] . "<br>";
        echo "Tên lớp: " . $row["TENLOP"] . "<br>";
        echo "Khóa học: " . $row["KHOAHOC"] . "<br>";
        echo "Giáo viên chủ nhiệm: " . $row["GVCN"] . "<br>";
        echo "<br>";
    }
} else {
    echo "Không có bản ghi nào trong bảng LOP.";
}

// Đóng kết nối
mysqli_close($conn);
?>