<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        :root {
            --bg-dark: #0b1324;
            --bg-soft: #1b2a41;
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
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background:
                radial-gradient(circle at 10% 20%, rgba(14, 165, 233, 0.22), transparent 32%),
                radial-gradient(circle at 85% 85%, rgba(2, 132, 199, 0.25), transparent 40%),
                linear-gradient(140deg, var(--bg-dark), var(--bg-soft));
        }

        form {
            width: 100%;
            max-width: 430px;
            background: var(--card-bg);
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow-lg);
            padding: 28px;
            border: 1px solid rgba(148, 163, 184, 0.25);
            animation: riseIn 0.35s ease-out;
        }

        h1 {
            color: var(--text-main);
            font-size: 1.45rem;
            margin-bottom: 8px;
        }

        .subtitle {
            color: var(--text-muted);
            font-size: 0.92rem;
            margin-bottom: 18px;
        }

        input {
            width: 100%;
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            background-color: #f8fafc;
            color: var(--text-main);
            font-size: 0.95rem;
            padding: 12px 14px;
            margin-bottom: 12px;
            transition: border-color 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
        }

        input::placeholder {
            color: var(--text-muted);
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            background-color: #fff;
            box-shadow: 0 0 0 4px rgba(14, 165, 233, 0.16);
        }

        .input-error {
            border-color: #fca5a5;
            background: #fff5f5;
        }

        .field-error {
            color: var(--danger);
            font-size: 0.84rem;
            margin: -4px 2px 10px;
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
            transition: transform 0.15s ease, filter 0.2s ease;
        }

        button:hover {
            transform: translateY(-1px);
            filter: brightness(1.03);
        }

        button:active {
            transform: translateY(0);
        }

        .form-footer {
            margin-top: 12px;
            text-align: center;
            color: var(--text-muted);
            font-size: 0.88rem;
        }

        .form-footer a {
            color: var(--primary-hover);
            text-decoration: none;
            font-weight: 600;
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
            color: #991b1b;
            background: var(--danger-soft);
            border-color: #fecaca;
            border-left-color: var(--danger);
        }

        .alert-success {
            color: #065f46;
            background: var(--success-soft);
            border-color: #a7f3d0;
            border-left-color: var(--success);
        }

        .error-list {
            margin: 0;
            padding-left: 18px;
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

            h1 {
                font-size: 1.3rem;
            }
        }
    </style>
    
</head>
<body>
    <form action="{{route('login')}}" method="post">
        @csrf
        <h1>Login</h1>
        <p class="subtitle">Your data is safe with us</p>

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
        
        <input
            type="email"
            name="email"
            id="email"
            value="{{ old('email') }}"
            class="@error('email') input-error @enderror"
            placeholder="Email"
        >
        @error('email')
            <p class="field-error">{{ $message }}</p>
        @enderror

        <input
            type="password"
            name="password"
            id="password"
            class="@error('password') input-error @enderror"
            placeholder="Password"
        >
        @error('password')
            <p class="field-error">{{ $message }}</p>
        @enderror
       
        <button type="submit">Login</button>
        <p class="form-footer">You don't have an account <a href="{{ route('admin.register') }}"> Sign up</a></p>
    </form>

    
</body>
</html>
