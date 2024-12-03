<!DOCTYPE html>
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
        }

        section {
            padding: 20px;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            max-width: 800px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .dom-properties {
            background: #fff;
            color: #000;
            padding: 15px;
            margin-top: 20px;
            border-radius: 10px;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <header>
        <h1>أناقتك المثالية</h1>
        <p>اكتشفي التفاصيل التقنية لعناصر DOM</p>
    </header>

    <section>
        <h2 class="section-title">عرض خصائص DOM</h2>
        <div class="dom-properties" id="domOutput">
            <!-- سيتم عرض خصائص DOM هنا -->
        </div>
    </section>

    <script>
        // استخراج خصائص DOM لعناصر معينة
        const domOutput = document.getElementById('domOutput');
        const headElement = document.head;

        const properties = `
            nodeType: ${headElement.nodeType}
            tagName: ${headElement.tagName}
            title: ${document.title}
            outerHTML: ${headElement.outerHTML.slice(0, 50)}...
        `;

        domOutput.textContent = properties;
    </script>
</body>
</html>
