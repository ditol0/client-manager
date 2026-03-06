<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 | الصفحة غير موجودة</title>
    <style>
        :root {
            --bg-dark: #0b1324;
            --bg-soft: #1b2a41;
            --card-bg: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --primary: #0ea5e9;
            --primary-hover: #0284c7;
            --radius-lg: 18px;
            --radius-md: 10px;
            --shadow-lg: 0 24px 60px rgba(2, 8, 23, 0.35);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background:
                radial-gradient(circle at 10% 20%, rgba(14, 165, 233, 0.24), transparent 34%),
                radial-gradient(circle at 90% 80%, rgba(2, 132, 199, 0.2), transparent 40%),
                linear-gradient(140deg, var(--bg-dark), var(--bg-soft));
        }

        .error-card {
            width: 100%;
            max-width: 760px;
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            border: 1px solid rgba(148, 163, 184, 0.3);
            overflow: hidden;
        }

        .error-content {
            padding: 28px;
            display: grid;
            grid-template-columns: 1fr 280px;
            gap: 22px;
            align-items: center;
        }

        .code {
            color: var(--primary);
            font-size: 0.95rem;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: 0.4px;
        }

        h1 {
            color: var(--text-main);
            font-size: 2rem;
            line-height: 1.3;
            margin-bottom: 12px;
        }

        p {
            color: var(--text-muted);
            font-size: 0.98rem;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .btn {
            border: none;
            border-radius: var(--radius-md);
            padding: 10px 16px;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.15s ease, filter 0.2s ease;
        }

        .btn-primary {
            background: linear-gradient(90deg, var(--primary), var(--primary-hover));
            color: #fff;
        }

        .btn-light {
            background: #f1f5f9;
            color: #0f172a;
        }

        .btn:hover {
            transform: translateY(-1px);
            filter: brightness(1.03);
        }

        .art {
            width: 100%;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            background: #f8fafc;
            padding: 10px;
        }

        .art img {
            display: block;
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        @media (max-width: 760px) {
            .error-content {
                grid-template-columns: 1fr;
                padding: 20px;
            }

            h1 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
    <section class="error-card">
        <div class="error-content">
            <div>
                <div class="code">ERROR 404</div>
                <h1>thes page you are looking for does not exist</h1>
                <p>
                    The link you followed may be broken, or the page may have been removed.
                </p>
                <div class="actions">
                    <a class="btn btn-primary" href="{{ route('home') }}">back to home</a>
                    <button class="btn btn-light" type="button" onclick="history.back()">back</button>
                </div>
            </div>
            <div class="art">
                <img src="https://comodosslstore.com/resources/wp-content/uploads/2025/05/website-page-found-error-robot-character-broken-chatbot-mascot-disabled-site-technical-work_502272-1888.jpg" alt="404 Illustration">
            </div>
        </div>
    </section>
</body>
</html>
