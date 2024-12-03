<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شركة Market Link</title>
    <style>
        /* إعدادات الصفحة العامة */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f8ff; /* لون أزرق فاتح */
            color: #333;
        }

        /* تصميم الرأس */
        header {
            background-color: #007bff; /* أزرق */
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
        }

        header p {
            font-size: 18px;
            margin: 10px 0 0;
        }

        /* تصميم القائمة */
        nav {
            background-color: #0056b3; /* أزرق داكن */
            padding: 15px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            margin: 0 15px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f0f8ff; /* أزرق فاتح */
        }

        /* الأقسام */
        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 900px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        section img {
            width: 100%;
            max-width: 300px;
            display: block;
            margin: 20px auto;
            border-radius: 10px;
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

        /* خدمات وأقسام متجاوبة */
        .services {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: space-between;
        }

        .services div {
            flex: 1 1 calc(45% - 10px);
            background-color: #e3f2fd; /* أزرق فاتح جدًا */
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .services div:hover {
            transform: scale(1.05);
        }

        /* الفوتر */
        footer {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
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
        <p>Market Link هي منصة مبتكرة تهدف إلى تقديم حلول ذكية لتصريف المنتجات الزائدة وتحقيق تجربة أفضل للموردين والعملاء.</p>
        <img src="https://via.placeholder.com/300" alt="شعار الشركة" class="animated-image">
    </section>

    <section id="services">
        <h2>الخدمات</h2>
        <div class="services">
            <div>
                <h3>تصريف المنتجات</h3>
                <p>نساعد الموردين في التخلص من المنتجات الزائدة بأساليب مبتكرة.</p>
            </div>
            <div>
                <h3>حلول الدفع</h3>
                <p>نوفر طرق دفع متعددة مثل تابي وتمارا والعملات الرقمية.</p>
            </div>
            <div>
                <h3>التسويق الإلكتروني</h3>
                <p>تقديم حملات تسويقية لزيادة الوصول وتحقيق أهداف البيع.</p>
            </div>
            <div>
                <h3>خدمة الأوتليت</h3>
                <p>تقديم عروض حصرية بأسعار تنافسية للعملاء.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>اتصل بنا</h2>
        <p>البريد الإلكتروني: info@marketlink.com</p>
        <p>الهاتف: 123-456-789</p>
        <p>رقم الجوال: 055555232</p>
        <p>العنوان: الرياض، المملكة العربية السعودية</p>
    </section>

    <footer>
        <p>&copy; 2024 جميع الحقوق محفوظة لشركة Market Link</p>
    </footer>
</body>
</html>
