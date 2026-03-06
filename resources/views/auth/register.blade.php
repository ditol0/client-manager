<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css"/>
    <title>انشاء حساب</title>
    <style>
        :root {
            --bg-dark: #0f172a;
            --bg-accent: #1e293b;
            --card-bg: #ffffff;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border: #dbe3ee;
            --primary: #0ea5e9;
            --primary-hover: #0284c7;
            --success: #10b981;
            --radius-lg: 16px;
            --radius-md: 10px;
            --shadow-lg: 0 24px 50px rgba(2, 8, 23, 0.35);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 24px;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background:
                radial-gradient(circle at 15% 15%, rgba(14, 165, 233, 0.22), transparent 35%),
                radial-gradient(circle at 85% 85%, rgba(16, 185, 129, 0.2), transparent 40%),
                linear-gradient(135deg, var(--bg-dark), var(--bg-accent));
        }

        form {
            width: 100%;
            max-width: 430px;
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 28px;
            border: 1px solid rgba(148, 163, 184, 0.25);
            animation: riseIn 0.4s ease-out;
        }

        h2 {
            color: var(--text-main);
            font-size: 1.5rem;
            margin-bottom: 8px;
        }

        h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            border-radius: 100px;
            background: linear-gradient(90deg, var(--primary), var(--success));
            margin-top: 10px;
            margin-bottom: 20px;
        }

        input {
            display: block;
            width: 100%;
            margin-bottom: 12px;
            padding: 12px 14px;
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            background-color: #f8fafc;
            color: var(--text-main);
            font-size: 0.95rem;
            transition: border-color 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
        }

        input::placeholder {
            color: var(--text-muted);
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            background-color: #fff;
            box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.15);
        }

        .iti {
            width: 100%;
            margin-bottom: 12px;
        }

        .iti input {
            margin-bottom: 0;
            padding-left: 52px;
        }

        button {
            width: 100%;
            border: none;
            border-radius: var(--radius-md);
            padding: 12px 16px;
            margin-top: 4px;
            font-size: 0.95rem;
            font-weight: 600;
            color: #fff;
            background: linear-gradient(90deg, var(--primary), var(--primary-hover));
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.2s ease, filter 0.2s ease;
            box-shadow: 0 10px 20px rgba(2, 132, 199, 0.25);
        }

        button:hover {
            transform: translateY(-1px);
            filter: brightness(1.03);
        }

        button:active {
            transform: translateY(0);
        }

        @keyframes riseIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 480px) {
            body {
                padding: 14px;
            }

            form {
                padding: 20px;
                border-radius: 14px;
            }

            h2 {
                font-size: 1.3rem;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('admin.register.store')}}" method="post">
        @csrf
        <h2>انشاء حساب</h2>

        <input type="text" name="user" id="" placeholder="اسم المستخدم">

        <input type="email"name="email" id="" placeholder="البريد الاكتروني">

        <input id="phone" type="tel" name="phone" placeholder="رقم الهاتف">

        <input type="text" name="password" id="" placeholder="كلمة المرور ">
        

        <input type="text" name="password_confirmation" id="" placeholder="اعادة كلمة المرور ">

        <input type="checkbox" name="is_admin" value="1" id="">

        <button type="submit">انشاء</button>
    </form>
</body>




<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

<script>
    const input = document.querySelector("#phone");
    window.intlTelInput(input, {
        initialCountry: "sa", // الدولة الافتراضية
        preferredCountries: ["sa", "ae", "kw", "eg"],
        separateDialCode: true,
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
    });
</script>
</html>
