<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css"/>
    <title>Create Account</title>
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
            --success-soft: #ecfdf5;
            --danger: #dc2626;
            --danger-soft: #fef2f2;
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
            font-family: "Trebuchet MS", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background:
                radial-gradient(circle at 15% 15%, rgba(14, 165, 233, 0.22), transparent 35%),
                radial-gradient(circle at 85% 85%, rgba(16, 185, 129, 0.2), transparent 40%),
                linear-gradient(135deg, var(--bg-dark), var(--bg-accent));
        }

        form {
            width: 100%;
            max-width: 470px;
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 30px;
            border: 1px solid rgba(148, 163, 184, 0.25);
            animation: riseIn 0.4s ease-out;
        }

        h2 {
            color: var(--text-main);
            font-size: 1.55rem;
            margin-bottom: 6px;
        }

        h2::after {
            content: "";
            display: block;
            width: 60px;
            height: 3px;
            border-radius: 100px;
            background: linear-gradient(90deg, var(--primary), var(--success));
            margin-top: 10px;
            margin-bottom: 14px;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.92rem;
            margin-bottom: 18px;
        }

        label {
            display: block;
            color: var(--text-main);
            font-size: 0.88rem;
            font-weight: 600;
            margin: 8px 2px 6px;
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

        .alert {
            border-radius: 10px;
            padding: 11px 12px;
            margin-bottom: 12px;
            font-size: 0.9rem;
            border: 1px solid transparent;
            border-left-width: 4px;
            box-shadow: 0 8px 18px rgba(15, 23, 42, 0.08);
            animation: riseIn 0.25s ease-out;
        }

        .alert-error {
            border-color: #fecaca;
            border-left-color: var(--danger);
            color: #991b1b;
            background: var(--danger-soft);
        }

        .alert-success {
            border-color: #a7f3d0;
            border-left-color: var(--success);
            color: #065f46;
            background: var(--success-soft);
        }

        .error-list {
            margin: 0;
            padding-left: 18px;
        }

        .iti {
            width: 100%;
            margin-bottom: 12px;
        }

        .iti input {
            margin-bottom: 0;
            padding-left: 52px;
        }

        .row-inline {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin: 4px 0 10px;
        }

        .check {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text-muted);
            font-size: 0.88rem;
        }

        .check input {
            width: auto;
            margin: 0;
            accent-color: var(--primary);
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

        .form-footer {
            margin-top: 14px;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.88rem;
        }

        .form-footer a {
            color: var(--primary-hover);
            text-decoration: none;
            font-weight: 600;
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

            .row-inline {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('admin.register.store')}}" method="post">
        @csrf
        <h2>Create Account</h2>
        <p class="subtitle">Set up your profile in less than a minute.</p>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-error">
                <ul class="error-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <label for="user">Username</label>
        <input type="text" name="user" id="user" value="{{ old('user') }}" placeholder="Enter your username">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="Enter your email address">

        <label for="phone">Phone Number</label>
        <input id="phone" type="tel" name="phone" value="{{ old('phone') }}" placeholder="Enter your phone number">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Create a secure password">

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-enter your password">

        <div class="row-inline">
            <label class="check" for="show">
                <input type="checkbox" name="show" id="show">
                Show passwords
            </label>
            <label class="check" for="is_admin">
                <input type="checkbox" name="is_admin" value="1" id="is_admin">
                Admin account
            </label>
        </div>

        <button type="submit">Create Account</button>
        <p class="form-footer">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
    </form>
</body>

<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#phone");

    if (input) {
        window.intlTelInput(input, {
            initialCountry: "sa",
            preferredCountries: ["sa", "ae", "kw", "eg"],
            separateDialCode: true,
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
        });
    }
</script>

<script>
    const password = document.getElementById("password");
    const passwordConfirmation = document.getElementById("password_confirmation");
    const show = document.getElementById("show");

    show.addEventListener("change", () => {
        if (show.checked) {
            password.type = "text";
            passwordConfirmation.type = "text";
        } else {
            password.type = "password";
            passwordConfirmation.type = "password";
        }
    });
</script>
</html>
