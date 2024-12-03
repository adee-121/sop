<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أناقتك</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            scroll-behavior: smooth;
        }

        header {
            background-color: #c0392b;
            color: white;
            text-align: center;
            padding: 40px 20px;
            overflow: hidden;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
            animation: fadeInDown 2s ease-out;
        }

        header p {
            font-size: 18px;
            margin: 10px 0 0;
            animation: fadeInUp 2s ease-out;
        }

        .moving-text {
            margin: 20px auto;
            font-size: 20px;
            font-weight: bold;
            color: #fff;
            text-align: center;
            background: #e74c3c;
            padding: 10px;
            animation: moveText 10s linear infinite;
        }

        @keyframes moveText {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        nav {
            background-color: #a93226;
            padding: 15px;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
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
            color: #ffcc00;
        }

        section {
            padding: 20px;
            margin: 20px auto;
            max-width: 900px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        .offer {
            background-color: #ffe6e6;
            border: 1px solid #ff4d4d;
            padding: 10px;
            margin: 15px 0;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #ff4d4d;
        }

        footer {
            background-color: #a93226;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>أناقتك</h1>
        <p>ملابس وميك أب - مصر، أم الدنيا، القاهرة</p>
        <div class="moving-text">
            💄 أحدث مستحضرات التجميل بأعلى جودة وأسعار تنافسية!
        </div>
        <div class="moving-text">
            👗 تشكيلات مميزة من الملابس تناسب جميع الأذواق.
        </div>
        <div class="moving-text">
            ✨ ارتقِ بأناقتك مع أرقى المنتجات في السوق.
        </div>
    </header>

    <nav>
        <a href="#about">من نحن</a>
        <a href="#services">الخدمات</a>
        <a href="#offers">العروض</a>
        <a href="#vision">رؤية</a>
        <a href="#contact">اتصل بنا</a>
    </nav>

    <section id="about">
        <h2 class="section-title">من نحن</h2>
        <p>أناقتك هو المتجر الأول في مصر المتخصص في تقديم أفضل الملابس ومستحضرات التجميل. نعمل بالشراكة مع الأستاذة مي لتقديم خدمات عالية الجودة تلبي جميع احتياجات العملاء.</p>
        <p>هدفنا هو أن نكون الوجهة الأولى لكل من يبحث عن الأناقة والجمال في القاهرة.</p>
    </section>

    <section id="services">
        <h2 class="section-title">الخدمات</h2>
        <ul>
            <li>توفير أحدث تشكيلات الملابس النسائية والرجالية.</li>
            <li>بيع مستحضرات التجميل الأصلية والعالمية.</li>
            <li>تقديم استشارات تجميلية مجانية.</li>
            <li>خدمات شحن وتوصيل إلى جميع أنحاء مصر.</li>
            <li>عروض خاصة على الملابس والميك أب للمناسبات الخاصة.</li>
        </ul>
    </section>

    <section id="offers">
        <h2 class="section-title">العروض والتخفيضات</h2>
        <div class="offer">تخفيضات تصل إلى <span class="highlight">50%</span> على مستحضرات التجميل!</div>
        <div class="offer">اشترِ 3 قطع ملابس واحصل على الرابعة مجانًا!</div>
        <p>لا تفوت الفرصة واحصل على أفضل المنتجات بأسعار تنافسية.</p>
    </section>

    <section id="vision">
        <h2 class="section-title">رؤية</h2>
        <p>رؤيتنا هي أن نكون الوجهة الأولى لكل ما يخص الأناقة والجمال في مصر. نعمل بجد لتوفير منتجات تناسب جميع الأذواق وتقديم خدمات تجعل تجربة التسوق فريدة من نوعها.</p>
        <p>نسعى لتقديم كل جديد ومواكبة أحدث صيحات الموضة ومستحضرات التجميل لتلبية احتياجات عملائنا.</p>
    </section>

    <section id="contact">
        <h2 class="section-title">اتصل بنا</h2>
        <p>رقم الجوال: 0123456789</p>
        <p>العنوان: مصر - القاهرة</p>
        <p>يسعدنا تواصلكم معنا للحصول على استشارة مجانية أو أي استفسارات تتعلق بخدماتنا.</p>
    </section>

    <footer>
        <p>&copy; 2024 جميع الحقوق محفوظة لمتجر أناقتك</p>
    </footer>
</body>
</html>
