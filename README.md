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
            background-color: #ffe4e1;
            color: #333;
            scroll-behavior: smooth;
        }

        header {
            background-color: #ff69b4;
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
            background: #ff1493;
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
            background-color: #ff1493;
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
            color: #ffd1dc;
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
            color: #ff69b4;
        }

        .offer {
            background-color: #ffe4e1;
            border: 1px solid #ff69b4;
            padding: 10px;
            margin: 15px 0;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            color: #ff69b4;
        }

        footer {
            background-color: #ff69b4;
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
            💄 أحدث مستحضرات التجميل بألوان ساحرة وجذابة!
        </div>
        <div class="moving-text">
            👗 تشكيلات ملابس جديدة لكل المناسبات بأسعار تنافسية.
        </div>
        <div class="moving-text">
            ✨ ابدأ رحلتك نحو الأناقة مع أناقتك.
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
        <p>أناقتك هو متجر مميز متخصص في تقديم أحدث الملابس ومستحضرات التجميل، حيث نسعى لإبراز جمالك وأناقتك. نعمل مع أفضل الخبراء، مثل الأستاذة مي، لتقديم تجربة تسوق فريدة.</p>
        <p>هدفنا هو تلبية كافة احتياجاتك من الموضة والجمال بأفضل الأسعار وأعلى جودة.</p>
    </section>

    <section id="services">
        <h2 class="section-title">الخدمات</h2>
        <ul>
            <li>بيع تشكيلات متنوعة من الملابس النسائية والرجالية.</li>
            <li>تقديم مستحضرات التجميل الأصلية والعالمية.</li>
            <li>استشارات مجانية حول الموضة والجمال.</li>
            <li>خدمات شحن سريع إلى جميع أنحاء مصر.</li>
            <li>عروض حصرية على الملابس والميك أب للمناسبات الخاصة.</li>
        </ul>
    </section>

    <section id="offers">
        <h2 class="section-title">العروض والتخفيضات</h2>
        <div class="offer">💝 احصل على خصم يصل إلى <strong>50%</strong> على مستحضرات التجميل!</div>
        <div class="offer">🎁 اشترِ 3 قطع من الملابس واحصل على الرابعة مجانًا!</div>
        <p>لا تفوت هذه العروض المميزة، تسوق الآن واحصل على أفضل المنتجات بأسعار لا تقاوم.</p>
    </section>

    <section id="vision">
        <h2 class="section-title">رؤيتنا</h2>
        <p>نحن في "أناقتك" نسعى لأن نكون الوجهة الأولى لكل سيدة تبحث عن الجمال والأناقة. نؤمن بأن الأناقة ليست مجرد مظهر، بل أسلوب حياة.</p>
        <p>رؤيتنا هي تمكين كل امرأة من التعبير عن نفسها بثقة وجمال من خلال منتجاتنا عالية الجودة.</p>
    </section>

    <section id="contact">
        <h2 class="section-title">اتصل بنا</h2>
        <p>رقم الجوال: 0123456789</p>
        <p>العنوان: مصر - القاهرة</p>
        <p>يسعدنا تواصلكم معنا لأي استفسارات أو طلبات خاصة.</p>
    </section>

    <footer>
        <p>&copy; 2024 جميع الحقوق محفوظة لمتجر أناقتك</p>
    </footer>
</body>
</html>
