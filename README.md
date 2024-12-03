
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسوق المنتجات</title>
    <style>
        body {
            font-family: "Cairo", sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f7f7;
            color: #333;
        }

        header {
            background: #d42e5e;
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            font-size: 36px;
            margin: 0;
        }

        nav {
            background: #a6224e;
            padding: 10px 0;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-size: 18px;
            margin: 0 15px;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background 0.3s;
        }

        nav a:hover {
            background: #d42e5e;
        }

        .banner {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center / cover;
            height: 300px;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .banner h2 {
            font-size: 48px;
            font-weight: bold;
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 15px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: auto;
        }

        .product-card h3 {
            font-size: 20px;
            margin: 10px 0;
            color: #a6224e;
        }

        .product-card p {
            font-size: 16px;
            color: #666;
        }

        .product-card button {
            background: #d42e5e;
            color: white;
            border: none;
            padding: 10px 15px;
            margin: 15px 0;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .product-card button:hover {
            background: #a6224e;
        }

        footer {
            background: #a6224e;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>تسوق المنتجات</h1>
    </header>

    <nav>
        <a href="#products">المنتجات</a>
        <a href="#about">من نحن</a>
        <a href="#contact">اتصل بنا</a>
    </nav>

    <div class="banner">
        <h2>اكتشف عروضنا المميزة</h2>
    </div>

    <div class="container" id="products">
        <h2 style="text-align: center; color: #a6224e; margin-bottom: 20px;">منتجاتنا</h2>
        <div class="product-grid">
            <!-- منتج 1 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/300x300" alt="منتج 1">
                <h3>منتج رائع 1</h3>
                <p>وصف قصير عن المنتج</p>
                <button>أضف إلى السلة</button>
            </div>
            <!-- منتج 2 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/300x300" alt="منتج 2">
                <h3>منتج رائع 2</h3>
                <p>وصف قصير عن المنتج</p>
                <button>أضف إلى السلة</button>
            </div>
            <!-- منتج 3 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/300x300" alt="منتج 3">
                <h3>منتج رائع 3</h3>
                <p>وصف قصير عن المنتج</p>
                <button>أضف إلى السلة</button>
            </div>
            <!-- منتج 4 -->
            <div class="product-card">
                <img src="https://via.placeholder.com/300x300" alt="منتج 4">
                <h3>منتج رائع 4</h3>
                <p>وصف قصير عن المنتج</p>
                <button>أضف إلى السلة</button>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 جميع الحقوق محفوظة - تسوق المنتجات</p>
    </footer>
</body>
</html>
