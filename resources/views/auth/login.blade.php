<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    /* Định dạng toàn bộ trang */
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    /* Container chính */
    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 350px;
        text-align: center;
    }

    /* Tiêu đề */
    h2 {
        margin-bottom: 20px;
        font-size: 22px;
        font-weight: bold;
    }

    /* Ô input */
    input {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }

    /* Nút đăng nhập */
    button {
        width: 100%;
        padding: 12px;
        background-color: #28a745;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        font-weight: bold;
    }

    button:hover {
        background-color: #218838;
    }

    /* Dòng đăng ký */
    .register-text {
        margin-top: 15px;
        font-size: 14px;
    }

    /* Link đăng ký */
    .register-link {
        margin-left: 5px;
        color: #007bff;
        font-weight: bold;
        text-decoration: none;
    }

    .register-link:hover {
        text-decoration: underline;
    }

    </style>
</head>
<body>
    <div class="container">
        <h2>Đăng nhập</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <button type="submit">Đăng nhập</button>
        </form>
        <div>
        <p class="register-text"><a href="{{ route('password.request') }}" class="register-link">Quên mật khẩu?</a> <a href="{{ route('register') }}" class="register-link">Đăng ký</a></p>
        </div>
    </div>
</body>
</html>
