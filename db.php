<?php
$host = "localhost"; // اسم السيرفر
$user = "root"; // اسم المستخدم الافتراضي
$password = ""; // كلمة المرور الافتراضية
$dbname = "massage_booking"; // اسم قاعدة البيانات

// الاتصال بقاعدة البيانات
$conn = mysqli_connect($host, $user, $password, $dbname);

// التحقق من الاتصال
if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
}
?>
