<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Màn hình chi tiết</title>
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
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
      gap: 30px;
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
      text-align: center;
    }
    .container-box h3 {
      margin-bottom: 25px;
      color: #333;
    }
    .container-box p {
      font-size: 16px;
      margin: 10px 0;
      color: #555;
    }
    /* Button chỉnh sửa */
    .btn-custom {
      background-color: #28a745;
      border-color: #28a745;
      color: #fff;
      font-weight: bold;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }
    .btn-custom:hover {
      background-color: #218838;
      border-color: #1e7e34;
    }
    /* Footer */
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

  <!-- Nội dung chính -->
  <div class="container-box">
    <h3>Màn Hình Chi Tiết</h3>
    <div class="mb-4">
      <p><strong>Username:</strong> {{ $user->username }}</p>
      <p><strong>Email:</strong> {{ $user->email }}</p>
    </div>
    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-custom">Chỉnh sửa</a>
  </div>

  <!-- Footer -->
  <div class="footer">
    <p>Lập trình web @01/2024</p>
  </div>

</body>
</html>
