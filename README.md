
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أملك عقارك</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            scroll-behavior: smooth;
        }

        header {
            background-color: #0056b3;
            color: white;
            text-align: center;
            padding: 40px 20px;
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

        nav {
            background-color: #003f7f;
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
            animation: fadeIn 1.5s ease-in-out;
        }

        .highlight {
            color: #0056b3;
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
            animation: flash 2s infinite;
        }

        footer {
            background-color: #003f7f;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
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

        @keyframes flash {
            0%, 100% {
                background-color: #ffe6e6;
            }
            50% {
                background-color: #ffcccc;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>أملك عقارك</h1>
        <p>حلمك يبدأ معنا - وساطة عقارية في اليمن</p>
    </header>

    <nav>
        <a href="#about">من نحن</a>
        <a href="#services">الخدمات</a>
        <a href="#offers">العروض</a>
        <a href="#vision">رؤية اليمن</a>
        <a href="#contact">اتصل بنا</a>
    </nav>

    <section id="about">
        <h2 class="section-title">من نحن</h2>
        <p>أملك عقارك هي شركة رائدة في مجال الوساطة العقارية في اليمن. هدفنا هو تسهيل حصول العملاء على منازل أحلامهم سواء من خلال الشراء المباشر أو الأقساط المريحة.</p>
        <p>نعمل بكل شفافية واحترافية لضمان تجربة مميزة لكل عملائنا.</p>
    </section>

    <section id="services">
        <h2 class="section-title">الخدمات</h2>
        <ul>
            <li>بيع وشراء العقارات.</li>
            <li>تقديم استشارات مجانية في مجال العقارات.</li>
            <li>توفير برامج تمويل مريحة بالتقسيط.</li>
            <li>إدارة وتأجير العقارات.</li>
            <li>تقديم خدمات تقييم العقارات بأعلى المعايير.</li>
        </ul>
    </section>

    <section id="offers">
        <h2 class="section-title">العروض والتخفيضات</h2>
        <div class="offer">تخفيضات تصل إلى <span class="highlight">70%</span> على مجموعة مختارة من العقارات!</div>
        <p>العروض صالحة حتى نهاية الشهر الحالي. لا تفوت فرصة الحصول على عقارك بأفضل الأسعار.</p>
    </section>

    <section id="vision">
        <h2 class="section-title">رؤية اليمن</h2>
        <p>رؤيتنا هي دعم التطوير العمراني في اليمن وجعل العقارات متاحة للجميع. نؤمن بأن مستقبل اليمن يعتمد على تحقيق الاستقرار السكني لكل الأسر.</p>
        <p>انطلقت فكرة الشركة من الحاجة الملحة لتحسين جودة الحياة السكنية في اليمن وتوفير حلول مرنة تناسب الجميع.</p>
    </section>

    <section id="contact">
        <h2 class="section-title">اتصل بنا</h2>
        <p>رقم الجوال: 0559801972</p>
        <p>العنوان: اليمن - صنعاء</p>
        <p>يسعدنا تواصلكم معنا للحصول على استشارة مجانية أو أي استفسارات تتعلق بخدماتنا.</p>
    </section>

    <footer>
        <p>&copy; 2024 جميع الحقوق محفوظة لشركة أملك عقارك</p>
    </footer>
</body>
</html>
