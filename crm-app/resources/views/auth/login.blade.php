<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GBS CRM | Admin Login</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: #f4f5f7;
            font-family: Arial, sans-serif;
            color: #172033;
        }
        .card {
            width: min(420px, calc(100% - 32px));
            padding: 36px;
            background: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            box-shadow: 0 12px 40px #0000000d;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 26px;
        }
        .logo {
            display: grid;
            place-items: center;
            width: 68px;
            height: 68px;
            border-radius: 12px;
            background: #f00;
            color: #fff;
            font-size: 25px;
            font-weight: 800;
        }
        h1 { margin: 0 0 6px; font-size: 25px; }
        .muted { color: #667085; font-size: 14px; }
        label {
            display: block;
            margin: 18px 0 7px;
            font-size: 14px;
            font-weight: 600;
        }
        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #d0d5dd;
            border-radius: 8px;
            font-size: 15px;
        }
        button {
            width: 100%;
            margin-top: 24px;
            padding: 13px;
            border: 0;
            border-radius: 8px;
            background: #f00;
            color: white;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
        }
        .error { margin-top: 14px; color: #c00; font-size: 14px; }
    </style>
</head>
<body>
    <main class="card">
        <div class="brand">
            <div class="logo">GBS</div>
            <div>
                <h1>GBS CRM</h1>
                <div class="muted">Admin sign in</div>
            </div>
        </div>

        <p class="muted">Sign in to access your CRM dashboard.</p>

        <form method="POST" action="{{ url('/login') }}">
            @csrf

            <label for="email">Email address</label>
            <input id="email" name="email" type="email"
                   value="{{ old('email') }}" required autofocus
                   autocomplete="username">

            <label for="password">Password</label>
            <input id="password" name="password" type="password"
                   required autocomplete="current-password">

            @if ($errors->any())
                <div class="error">{{ $errors->first() }}</div>
            @endif

            <button type="submit">Sign In</button>
        </form>
    </main>
</body>
</html>
