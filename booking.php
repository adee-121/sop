<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $date = $_POST['date'];

    // الاتصال بقاعدة البيانات
    $conn = new mysqli('localhost', 'root', '', 'massage_booking');
    if ($conn->connect_error) {
        die("فشل الاتصال: " . $conn->connect_error);
    }

    $sql = "INSERT INTO bookings (name, phone, service, date) VALUES ('$name', '$phone', '$service', '$date')";
    if ($conn->query($sql) === TRUE) {
        echo "تم الحجز بنجاح!";
    } else {
        echo "خطأ: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>احجز موعد</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>احجز موعدك الآن</h1>
    <form method="POST">
        <label>الاسم:</label>
        <input type="text" name="name" required>
        <label>رقم الجوال:</label>
        <input type="tel" name="phone" required>
        <label>اختر الخدمة:</label>
        <select name="service">
            <option value="المساج السويدي">المساج السويدي</option>
            <option value="مساج الأحجار الساخنة">مساج الأحجار الساخنة</option>
            <option value="مساج الروائح العطرية">مساج الروائح العطرية</option>
        </select>
        <label>تاريخ الموعد:</label>
        <input type="date" name="date" required>
        <button type="submit">احجز الآن</button>
    </form>
</body>
</html>
