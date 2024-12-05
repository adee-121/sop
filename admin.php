<?php
// الاتصال بقاعدة البيانات
include('db.php');

// جلب الحجوزات
$query = "SELECT * FROM bookings";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة الإدارة</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>لوحة الإدارة</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>الاسم</th>
            <th>رقم الهاتف</th>
            <th>التاريخ</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['date']; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
