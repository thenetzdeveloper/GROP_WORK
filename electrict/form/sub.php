<?php
$host = 'localhost';
$db = 'data_db';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("CREATE DATABASE IF NOT EXISTS `$db` CHARACTER SET utf8 COLLATE utf8_general_ci");
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$full_name = $_POST['full_name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$location = $_POST['location'];
$date = $_POST['date'];
$usage = (int)$_POST['usage_kwh'];

if ($usage < 50) {
    $rate = 350;
} elseif ($usage < 100) {
    $rate = 400;
} elseif ($usage < 150) {
    $rate = 500;
} elseif ($usage < 200) {
    $rate = 600;
} else {
    $rate = 700;
}

$cost = $usage * $rate;

$sql = "INSERT INTO electricity_bills 
(full_name, gender, phone, address, location, date, usage_kwh, cost)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$full_name, $gender, $phone, $address, $location, $date, $usage, $cost]);

?>

<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8">
    <title>លទ្ធផល</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body {
            background-color: aliceblue;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: "Comic Sans MS", cursive;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="snowflake" style="left: 10%; animation-duration: 6s;">❄</div>
    <div class="snowflake" style="left: 30%; animation-duration: 8s;">❄</div>
    <div class="snowflake" style="left: 50%; animation-duration: 5s;">❄</div>
    <div class="snowflake" style="left: 70%; animation-duration: 9s;">❄</div>
    <div class="snowflake" style="left: 90%; animation-duration: 7s;">❄</div>
    <canvas id="effectCanvas"></canvas>

    <div class="cute-box">
        <h2>ការគណនាបានជោគជ័យ!</h2>
        <p>អ្នកបានប្រើ <?php echo $usage; ?> kWh</p>
        <p>តម្លៃសរុប: <?php echo number_format($cost); ?> ៛</p>
        <a href="form.php" class="back-button">ត្រឡប់ក្រោយ</a>
    </div>
    <script src="../js/script.js"></script>
</body>

</html>