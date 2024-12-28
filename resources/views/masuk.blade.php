<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: linear-gradient(to bottom, #87ceeb, #ffffff, #87ceeb);
        }
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            background: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        .form-box h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .form-box p {
            margin: 10px 0;
            color: #777;
        }
        .form-box input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-box button {
            width: 100%;
            padding: 12px;
            background: #00bcd4;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .form-box button:hover {
            background: #008c9e;
        }
        .form-box a {
            color: #00bcd4;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-box">
            <h1>Masuk ke Akun Anda</h1>
            <p>Belum punya akun?<a href="{{ route('daftar') }}"> Daftar</a></p>
            <form action="{{ route('masuk') }}" method="POST">
                @csrf
                <input type="text" name="nim" placeholder="NIM" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
