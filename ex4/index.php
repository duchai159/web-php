<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style/style.css">
    <title>CNWAT</title>
</head>
<body>
    <header>
    <img src="/images/header.png" alt="">
        <div class="button-container">
            <a href="index.php?page=home" class="button">Home</a>
            <a href="index.php?page=contact" class="button">Contact</a>
            <a href="index.php?page=drawtable" class="button">DrawTable</a>
            <a href="index.php?page=loop" class="button">Loop</a>
        </div>
    </header>
    <main>
        <div class="left-sidebar">
            <img src="/images/left1.png" alt="">
            <img src="/images/left2.png" alt="">
        </div>
        <div class="main-content">
            <?php
                $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                switch ($page) {
                    case 'home':
                        include './pages/home.php' ;
                        break;
                    case 'contact':
                        include './pages/contact.php'; 
                        break;
                    case 'drawtable':
                        include './pages/drawtable.php'; 
                        break;
                    case 'loop':
                        include './pages/loop.php'; 
                        break;
                }
            ?>
        </div>
    </main>
</body>
</html>