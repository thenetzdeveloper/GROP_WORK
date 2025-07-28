<?php
$host = 'localhost';
$db = 'data_db';
$user = 'root';
$pass = '';

$conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $full_name = $_POST['full_name'];
        $usage = (int)$_POST['usage_kwh'];

        if ($usage < 50) $rate = 350;
        elseif ($usage < 100) $rate = 400;
        elseif ($usage < 150) $rate = 500;
        elseif ($usage < 200) $rate = 600;
        else $rate = 700;

        $cost = $usage * $rate;

        $stmt = $conn->prepare("UPDATE electricity_bills SET full_name=?, usage_kwh=?, cost=? WHERE id=?");
        $stmt->execute([$full_name, $usage, $cost, $id]);
        header("Location: view.php");
        exit();
    }

    $stmt = $conn->prepare("SELECT * FROM electricity_bills WHERE id = ?");
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    die("ID not found.");
}
?>

<!DOCTYPE html>
<html>
<link rel="icon" type="image/x-icon" href="favicon.ico">
<link rel="stylesheet" href="../css/style.css">

<head>
    <title>កែប្រែ</title>
    <style>
        body {
            background-color: aliceblue;
            background-size: cover;
            background-repeat: no-repeat;
            ;
            font-family: "Noto Sans Khmer";
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
    </style>

</head>

<body>
    <div class="snowflake" style="left: 10%; animation-duration: 6s;">❄</div>
    <div class="snowflake" style="left: 30%; animation-duration: 8s;">❄</div>
    <div class="snowflake" style="left: 50%; animation-duration: 5s;">❄</div>
    <div class="snowflake" style="left: 70%; animation-duration: 9s;">❄</div>
    <div class="snowflake" style="left: 90%; animation-duration: 7s;">❄</div>

    <form method="post">
        <h2>កែប្រែទិន្នន័យ</h2>
        <label>ឈ្មោះ</label>
        <input type="text" name="full_name" value="<?= htmlspecialchars($row['full_name']) ?>" required>

        <label>បរិមាណ (kWh)</label>
        <input type="number" name="usage_kwh" value="<?= $row['usage_kwh'] ?>" required>

        <button type="submit">💾 រក្សាទុក</button>
    </form>
    <script src="../js/script.js"></script>
</body>

</html>