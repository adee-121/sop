<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بروفايل شركة Market Link</title>
    <style>
        /* ألوان الصفحة */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; /* أزرق فاتح */
            color: #333;
        }

        /* تصميم الرأس */
        header {
            background-color: #007bff; /* أزرق مريح */
            color: white;
            padding: 20px;
            text-align: center;
        }

        /* تصميم القائمة */
        nav {
            background-color: #0056b3; /* أزرق أغمق */
            padding: 10px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            margin: 0 15px;
            color: white;
            font-weight: bold;
        }

        nav a:hover {
            color: #f0f8ff;
        }

        /* تصميم الأقسام */
        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 900px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* صور متحركة */
        .animated-image {
            width: 100%;
            max-width: 300px;
            margin: 20px auto;
            display: block;
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* تصميم القسم الخاص بالخدمات */
        .services {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .services div {
            flex: 1 1 calc(50% - 10px);
            margin: 10px;
            padding: 15px;
            background-color: #e3f2fd; /* خلفية خفيفة */
            border-radius: 5px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .services div:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* تصميم الفوتر */
        footer {
            text-align: center;
            padding: 10px;
            background-color: #0056b3;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>شركة Market Link</h1>
        <p>حلول ذكية لتصريف المنتجات الزائدة وتحسين تجربة العملاء</p>
    </header>
    <nav>
        <a href="#about">من نحن</a>
        <a href="#services">الخدمات</a>
        <a href="#contact">اتصل بنا</a>
    </nav>

    <section id="about">
        <h2>من نحن</h2>
        <p>Market Link هي منصة إلكترونية تهدف إلى دعم الموردين المحليين من خلال تقديم حلول ذكية لتصريف المنتجات الزائدة عبر خصومات وعروض حصرية.</p>
        <img src="https://via.placeholder.com/300" alt="من نحن" class="animated-image">
    </section>

    <section id="services">
        <h2>الخدمات</h2>
        <div class="services">
            <div>
                <h3>تصريف المنتجات الزائدة</h3>
                <p>نساعد الموردين في تقليل خسائرهم من خلال تصريف المنتجات الزائدة بطرق فعالة.</p>
            </div>
            <div>
                <h3>حلول الدفع المبتكرة</h3>
                <p>نوفر خيارات دفع مرنة مثل تابي وتمارا والعملات الرقمية.</p>
            </div>
            <div>
                <h3>تسويق العروض</h3>
                <p>إعلانات مخصصة لزيادة المبيعات وجذب العملاء.</p>
            </div>
            <div>
                <h3>خدمة الأوتليت</h3>
                <p>بيع الاستوكات بأسعار منافسة عبر منصة إلكترونية.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>اتصل بنا</h2>
        <p>البريد الإلكتروني: info@marketlink.com</p>
        <p>الهاتف: 123-456-789</p>
        <p>العنوان: الرياض، المملكة العربية السعودية</p>
    </section>

    <footer>
        <p>&copy; 2024 جميع الحقوق محفوظة لشركة Market Link</p>
    </footer>
</body>
</html>
