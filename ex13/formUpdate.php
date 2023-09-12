<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="editLop.php">
        <label for="malop">Mã lớp:</label>
        <input type="text" id="malop" name="malop" required>
        <label for="tenlop">Tên lớp:</label>
        <input type="text" id="tenlop" name="tenlop" required>
        <label for="khoahoc">Khóa học:</label>
        <input type="text" id="khoahoc" name="khoahoc" required>
        <label for="gvcn">GVCN:</label>
        <input type="text" id="gvcn" name="gvcn" required>
        <input type="submit" name="submit" value="Sửa lớp">
    </form>
</body>

</html>