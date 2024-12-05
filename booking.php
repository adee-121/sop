<?php
// الاتصال بقاعدة البيانات
include('db.php');

// عند إرسال الطلب
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];

    $query = "INSERT INTO bookings (name, phone, date) VALUES ('$name', '$phone', '$date')";
    if (mysqli_query($conn, $query)) {
        echo "تم الحجز بنجاح!";
    } else {
        echo "خطأ: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حجز موعد</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>حجز موعد</h1>
    <form method="POST" action="booking.php">
        <input type="text" name="name" placeholder="الاسم" required>
        <input type="text" name="phone" placeholder="رقم الهاتف" required>
        <input type="date" name="date" required>
        <button type="submit" class="button">احجز الآن</button>
    </form>
</body>
</html>
