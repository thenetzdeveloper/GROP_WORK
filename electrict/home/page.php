<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8">
    <title>គេហទំព័រដើម</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Khmer&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="snowflake" style="left: 10%; animation-duration: 6s;">❄</div>
    <div class="snowflake" style="left: 30%; animation-duration: 8s;">❄</div>
    <div class="snowflake" style="left: 50%; animation-duration: 5s;">❄</div>
    <div class="snowflake" style="left: 70%; animation-duration: 9s;">❄</div>
    <div class="snowflake" style="left: 90%; animation-duration: 7s;">❄</div>
    <canvas id="effectCanvas"></canvas>
    <nav>
        <img src="https://cdn-icons-png.flaticon.com/512/8068/8068292.png" alt="Group 6 Logo" class="logo-icon"> 
        <a href="../home/page.php">ទំព័រដើម</a>
        <a href="../form/view.php">មើលទិន្នន័យ</a>
        <a href="../form/form.php">បញ្ចូលទិន្នន័យ</a>
    </nav>
    <main>
        <h2>🎈សូមស្វាគមន៍មកកាន់គេហទំព័រ <br><i>GROUP 6</i></h2>
        <hr>
        <?php
        $slider1 = ["../imgs/image1.png", "../imgs/image2.png"];
        ?>
        <div class="slider-container">
            <img class="slider" id="slider1" src="<?php echo $slider1[0]; ?>" alt="Banner 1">
        </div>
        <div class="slider-container" style="position: relative;">
        </div>
        <hr>
        <h2>សូមអរគុណដែលបានមកទស្សនាក្រុមខ្ញុំ</h2>
    </main>
    <footer>
        &copy; <?php echo date('Y'); ?> - រចនាដោយក្រុម 6<br>
    </footer>
    <script>
        const slider1Images = <?php echo json_encode($slider1); ?>;
        let index1 = 0;
    </script>
    <script src="../js/script.js"></script>
</body>

</html>