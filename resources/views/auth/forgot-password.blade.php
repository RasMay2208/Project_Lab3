<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quên mật khẩu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 450px;
      background-color: #fff;
      margin: 50px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    h2 {
      color: #333;
      margin-bottom: 25px;
      text-align: center;
    }
    .form-label {
      font-weight: bold;
    }
    .btn-custom {
      background-color: #28a745;
      border-color: #28a745;
      color: #fff;
      font-weight: bold;
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .btn-custom:hover {
      background-color: #218838;
      border-color: #28a745;
    }
    .btn-secondary-custom {
      background-color: #28a745;
      border-color: #28a745;
      color: #fff;
      font-weight: bold;
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      margin-top: 15px;
    }
    .btn-secondary-custom:hover {
      background-color: #28a745;
      border-color: #28a745;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2 class="text-center">Màn Hình Cập Nhật</h2>
    <form method="POST" action="{{ route('password.email') }}">
      @csrf
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Mật khẩu</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nhập lại mật khẩu</label>
        <input type="password" name="password_confirmation" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-custom">Gửi yêu cầu</button>
    </form>
    <a href="{{ route('login') }}" class="btn btn-secondary-custom">Quay Lại</a>
  </div>
</body>
</html>
