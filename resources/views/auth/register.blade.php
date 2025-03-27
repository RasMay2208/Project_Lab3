<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }
        .register-container {
            width: 360px;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        .form-control {
            border-radius: 5px;
            font-size: 14px;
        }
        .btn-register {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            padding: 12px;
            width: 100%;
        }
        .btn-register:hover {
    background-color: #218838;
    color: white;
}
        .login-text {
            margin-top: 12px;
            font-size: 14px;
        }
        .login-link {
            color: #007bff;
            font-weight: bold;
            text-decoration: none;
        }
        .login-link:hover {
            text-decoration: underline;
        }
        
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Đăng ký</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Nhập lại mật khẩu" required>
            </div>
            <button type="submit" class="btn btn-register">Đăng ký</button>
        </form>
        <p class="login-text">
            Đã có tài khoản? <a href="{{ route('login') }}" class="login-link">Đăng nhập</a>
        </p>
    </div>
</body>
</html>
