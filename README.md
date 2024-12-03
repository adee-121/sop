
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        header {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            text-align: center;
            padding: 2rem 1rem;
        }
        header h1 {
            font-size: 3rem;
            margin: 0;
        }
        header p {
            font-size: 1.2rem;
            margin: 0.5rem 0;
        }
        section {
            padding: 2rem 1rem;
            max-width: 1200px;
            margin: auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #333;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #555;
        }
        input, textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        textarea {
            height: 150px;
            resize: none;
        }
        button {
            display: block;
            width: 100%;
            padding: 0.8rem;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }
        .contact-info {
            margin-top: 2rem;
            text-align: center;
            font-size: 1.2rem;
            color: #666;
        }
        .contact-info i {
            margin-right: 0.5rem;
            color: #6a11cb;
        }
    </style>
</head>
<body>

<header>
    <h1>اتصل بنا</h1>
    <p>نحن هنا لمساعدتك. تواصل معنا لأي استفسار أو طلب.</p>
</header>

<section>
    <h2>نموذج الاتصال</h2>
    <form>
        <div class="form-group">
            <label for="name">الاسم:</label>
            <input type="text" id="name" placeholder="أدخل اسمك">
        </div>
        <div class="form-group">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" placeholder="أدخل بريدك الإلكتروني">
        </div>
        <div class="form-group">
            <label for="message">الرسالة:</label>
            <textarea id="message" placeholder="اكتب رسالتك هنا"></textarea>
        </div>
        <button type="submit">إرسال</button>
    </form>
    <div class="contact-info">
        <p><i class="fa fa-phone"></i> الهاتف: 123-456-789</p>
        <p><i class="fa fa-envelope"></i> البريد الإلكتروني: info@example.com</p>
    </div>
</section>

</body>
</html>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحات متحركة</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <!-- صفحة البداية -->
    <section id="home" class="page animate__animated animate__fadeIn">
        <h1>مرحبًا بك في موقعنا</h1>
        <p>صفحات جذابة مع تأثيرات متحركة.</p>
        <a href="#about" class="btn">اكتشف المزيد</a>
    </section>

    <!-- صفحة "من نحن" -->
    <section id="about" class="page animate__animated animate__fadeInUp">
        <h2>من نحن</h2>
        <p>نحن نقدم أفضل الخدمات مع تصميمات جذابة تلبي احتياجاتك.</p>
        <a href="#services" class="btn">خدماتنا</a>
    </section>

    <!-- صفحة "الخدمات" -->
    <section id="services" class="page animate__animated animate__fadeInRight">
        <h2>خدماتنا</h2>
        <ul>
            <li>تصميم مواقع احترافية</li>
            <li>تطوير تطبيقات ويب</li>
            <li>تسويق رقمي</li>
        </ul>
        <a href="#contact" class="btn">اتصل بنا</a>
    </section>

    <!-- صفحة "اتصل بنا" -->
    <section id="contact" class="page animate__animated animate__fadeInLeft">
        <h2>اتصل بنا</h2>
        <p>نحن هنا لمساعدتك. تواصل معنا الآن.</p>
        <a href="#home" class="btn">العودة إلى البداية</a>
    </section>
</body>
</html>
/* التصميم العام */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    background: #f4f4f9;
    color: #333;
}

/* تصميم الصفحات */
.page {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 2rem;
    transition: all 0.3s ease-in-out;
}

/* ألوان الأقسام */
#home {
    background: linear-gradient(135deg, #6a11cb, #2575fc);
    color: white;
}

#about {
    background: #f9f9f9;
    color: #444;
}

#services {
    background: #2575fc;
    color: white;
}

#contact {
    background: #6a11cb;
    color: white;
}

/* الأزرار */
.btn {
    display: inline-block;
    margin-top: 1rem;
    padding: 0.8rem 2rem;
    background: #fff;
    color: #2575fc;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-size: 1rem;
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

.btn:hover {
    background: #2575fc;
    color: #fff;
    transform: scale(1.1);
}
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <section id="about" class="page" data-aos="fade-up">
        <h2>من نحن</h2>
        <p>نحن نقدم أفضل الخدمات مع تصميمات جذابة.</p>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
