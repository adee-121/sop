
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>أناقتك المثالية</title>
    <style>
        body {
            font-family: "Cairo", sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #ffb6c1, #ff69b4);
            color: white;
            overflow-x: hidden;
        }

        header {
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(135deg, #ff69b4, #ff1493);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            color: white;
        }

        header h1 {
            font-size: 50px;
            font-weight: bold;
            margin: 0;
        }

        nav {
            background: #ff1493;
            display: flex;
            justify-content: center;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        nav a {
            text-decoration: none;
            margin: 0 20px;
            color: white;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.2s, color 0.3s;
        }

        nav a:hover {
            color: #ffb6c1;
            transform: scale(1.1);
        }

        section {
            padding: 40px 20px;
            margin: 30px auto;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: bold;
            color: #fff;
        }

        .product-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-card img {
            width: 120px;
            height: auto;
            border-radius: 10px;
        }

        .product-card .details {
            flex: 1;
            margin-left: 20px;
            color: #fff;
        }

        footer {
            background: #ff1493;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 30px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <h1>أناقتك المثالية</h1>
        <p>ملابس داخلية وخارجية - مستحضرات تجميل - جمال وأناقة المرأة</p>
    </header>

    <nav>
        <a href="#about">من نحن</a>
        <a href="#products">المنتجات</a>
        <a href="#contact">اتصل بنا</a>
    </nav>

    <section id="about">
        <h2 class="section-title">من نحن</h2>
        <p>نحن متجر "أناقتك المثالية"، متخصصون في تقديم أحدث الملابس الداخلية والخارجية، بالإضافة إلى مستحضرات التجميل التي تعزز من جمالك وأنوثتك. نعمل على تقديم أفضل المنتجات التي تناسب جميع الأذواق بأسعار تنافسية.</p>
        <p>هدفنا هو أن تكوني في أبهى إطلالاتك دائمًا.</p>
    </section>

    <section id="products">
        <h2 class="section-title">منتجاتنا</h2>
        <div class="product-card">
            <img src="https://drive.google.com/uc?export=view&id=1zPKLcxeIJehBkXJq4wTRJ0gjc9PaoOIO" alt="ملابس داخلية">
            <div class="details">
                <h3>ملابس داخلية</h3>
                <p>تشكيلات مريحة وأنيقة من أفضل الخامات.</p>
            </div>
        </div>
        <div class="product-card">
            <img src="https://drive.google.com/uc?export=view&id=1H7rIjLPBjTptZNqKdlnnSPfc-GU_kYLd" alt="فساتين سهرة">
            <div class="details">
                <h3>فساتين سهرة</h3>
                <p>إطلالات ساحرة تناسب كل المناسبات.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>© 2024 جميع الحقوق محفوظة - أناقتك المثالية</p>
    </footer>
</body>
</html>
