<?php
$host = 'localhost';
$db = 'data_db';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . htmlspecialchars($e->getMessage()));
}

$stmt = $conn->query("SELECT * FROM electricity_bills ORDER BY id DESC");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="km">

<head>
    <meta charset="UTF-8">
    <title>គេហទំព័រតារាងអគ្គិសនី</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: "Noto Sans Khmer", sans-serif;
            background: linear-gradient(135deg, #ffe6f2 0%, #e0f7fa 100%);
            padding: 20px;
            margin: 0;
        }

        .logo-icon {
            height: 40px;
            vertical-align: middle;
            margin-right: 10px;
        }

        nav a {
            text-decoration: none;
            color: #000000ff;
            font-weight: bold;
            padding: 6px 12px;
            border-radius: 6px;
            transition: background 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #14a308ff;
            color: #fff;
        }
    </style>
</head>

<body>
    <nav>
        <img src="https://cdn-icons-png.flaticon.com/512/8068/8068292.png" alt="Group 6 Logo" class="logo-icon">
        <a href="../home/page.php">ថយក្រោយ</a>
    </nav>
    <div class="snowflake" style="left: 10%; animation-duration: 6s;">❄</div>
    <div class="snowflake" style="left: 30%; animation-duration: 8s;">❄</div>
    <div class="snowflake" style="left: 50%; animation-duration: 5s;">❄</div>
    <div class="snowflake" style="left: 70%; animation-duration: 9s;">❄</div>
    <div class="snowflake" style="left: 90%; animation-duration: 7s;">❄</div>
    <canvas id="effectCanvas"></canvas>

    <table>
        <tr>
            <th>លេខ</th>
            <th>ឈ្មោះ</th>
            <th>ភេទ</th>
            <th>ទូរស័ព្ទ</th>
            <th>អាសយដ្ឋាន</th>
            <th>ទីតាំង</th>
            <th>កាលបរិច្ឆេទ</th>
            <th>បរិមាណ (kWh)</th>
            <th>តម្លៃ (៛)</th>
            <th>សកម្មភាព</th>
        </tr>
        <?php foreach ($results as $row): ?>
            <tr>
                <td><?= (int)$row['id'] ?></td>
                <td><?= htmlspecialchars($row['full_name']) ?></td>
                <td><?= htmlspecialchars($row['gender']) ?></td>
                <td><?= htmlspecialchars($row['phone']) ?></td>
                <td><?= htmlspecialchars($row['address']) ?></td>
                <td><?= htmlspecialchars($row['location']) ?></td>
                <td><?= htmlspecialchars($row['date']) ?></td>
                <td><?= htmlspecialchars($row['usage_kwh']) ?></td>
                <td><?= number_format($row['cost']) ?></td>
                <td>
                    <a class="btn-edit" href="edit.php?id=<?= (int)$row['id'] ?>">Edit</a>
                    <a class="btn-delete" href="delete.php?id=<?= (int)$row['id'] ?>" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script src="../js/script.js"></script>
</body>

</html>