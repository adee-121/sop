<?php
$conn = new mysqli('localhost', 'root', '', 'massage_booking');
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM bookings");
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>حجوزات العملاء</h1>
    <table border="1">
        <tr>
            <th>الاسم</th>
            <th>رقم الجوال</th>
            <th>الخدمة</th>
            <th>تاريخ الموعد</th>
            <th>تاريخ الحجز</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['name'] ?></td>
            <td><?= $row['phone'] ?></td>
            <td><?= $row['service'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
