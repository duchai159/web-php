<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
        }

        table,
        table th,
        table td {
            border: solid 1px #000;
        }

        a {
            color: black;
            text-decoration: none;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <h1>Danh sách sinh viên trong lớp</h1>
    <table>
        <tr>
            <th>id</th>
            <th>student_name</th>
            <th>student_gender</th>
            <th>student_address</th>
            <th>student_image</th>
        </tr>
        <?php
        include './libs/connect.php';
        // $id = 2;
        // Truy vấn SQL với phân trang
        $sql = "SELECT * FROM students WHERE class_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["id"] . '</td>';
                echo '<td>' . $row["student_name"] . '</td>';
                echo '<td>' . $row["student_gender"] . '</td>';
                echo '<td>' . $row["student_address"] . '</td>';
                echo '<td>' . '<img src="$row["student_image"]" alt="Ảnh">' . '</td>';

                echo '<td> <a href="">Cập nhật</a> <a href="">Xóa</a> </td>';
                echo '</tr>';
            }
        }
        include './libs/closeConnect.php';
        ?>

    </table>

</body>

</html>