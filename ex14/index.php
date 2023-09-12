<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>CNWAT</title>
</head>
<body>
    <header>
    <img src="/images/header.png" alt="">
        <div class="button-container">
            <a href="index.php" class="button">Home</a>
        </div>
    </header>
    <main>
        <div class="left-sidebar">
            <?php
                include 'listClass.php';
            ?>
        </div>
        <div class="main-content">
            <?php
            $id = isset($_GET['id']) ? $_GET['id'] : null;
                include 'listStudent.php';
            ?>
        </div>
    </main>
</body>
</html>