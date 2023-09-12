<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Danh sách các lớp</h1>
    <?php
        include './libs/connect.php';
        $sql = "SELECT * FROM classes";
        $result = mysqli_query($conn, $sql);
        echo "<br><b>Danh sach cac lop (cach 1)</b></br>";
        while($row = mysqli_fetch_assoc($result)){
            $id = $row["id"];
            $className = $row["class_name"];
            echo '<a href="?id=' . $id . '">' . $className . '</a> </br>';
        }
        $result2 = mysqli_query($conn, $sql);
        echo "<br><b>Danh sach cac lop (cach 2)</b></br>";
        while($row = mysqli_fetch_assoc($result2)){
            $id = $row["id"];
            $className = $row["class_name"];
            echo '<a href="?id=' . $id . '">' . $className . '</a> </br>';
        }
        $result3 = mysqli_query($conn, $sql);
        echo "<br><b>Danh sach cac lop (cach 3)</b></br>";
        while($row = mysqli_fetch_assoc($result3)){
            $id = $row["id"];
            $className = $row["class_name"];
            echo '<a href="?id=' . $id . '">' . $className . '</a> </br>';
        }
        include './libs/closeConnect.php';
    ?>
</body>
</html>