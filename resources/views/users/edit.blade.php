<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chỉnh sửa người dùng</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
    .header {
      background-color: #fff;
      border-bottom: 1px solid #ddd;
      padding: 15px 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 30px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    .header a {
      text-decoration: none;
      font-weight: bold;
      color: #28a745;
    }
    .container-box {
      background-color: #fff;
      max-width: 450px;
      margin: 50px auto;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }
    .container-box h3 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-label {
      font-weight: bold;
      margin-bottom: 5px;
    }
    .btn-custom {
      background-color: #28a745;
      border-color: #28a745;
      color: #fff;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      width: 100%;
    }
    .btn-custom:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }
    .footer {
      text-align: center;
      margin-top: 30px;
      color: #888;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <div class="header">
    <a href="{{ route('users.index') }}">Home</a>
    <a href="{{ route('logout') }}">Đăng xuất</a>
  </div>

  <!-- Form chỉnh sửa -->
  <div class="container-box">
    <h3>Chỉnh sửa thông tin người dùng</h3>
    @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
    @endif
    <form method="POST" action="{{ route('users.update', $user->id) }}">
      @csrf
      <div class="form-group">
        <label class="form-label" for="username">Username</label>
        <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
      </div>
      <button type="submit" class="btn btn-custom mt-3">Cập nhật</button>
    </form>
  </div>

  <!-- Footer -->
  <div class="footer">
    <p>Lập trình web @01/2024</p>
  </div>

</body>
</html>
