
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
