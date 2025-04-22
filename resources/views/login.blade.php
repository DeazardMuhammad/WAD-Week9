<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Komentar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      height: 100vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f4f6fc;
    }
    .login-wrapper {
      display: flex;
      height: 80vh;
      width: 95%;
      max-width: 1000px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      border-radius: 14px;
      overflow: hidden;
    }
    .login-image {
      background: #eef1f6 url('/images/xiao.jpg') no-repeat center;
      background-size: cover;
      flex: 1;
    }
    .login-form {
      background: linear-gradient(135deg, #2EC4B6, #3EC1D3);
      color: white;
      flex: 1;
      padding: 60px 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .login-form .form-control {
      border-radius: 8px;
      font-size: 15px;
    }
    .login-form a {
      color: #fff;
      text-decoration: underline;
    }
    .form-title {
      font-weight: bold;
      font-size: 28px;
      margin-bottom: 10px;
    }
    button[type="submit"] {
      background-color: white;
      color: #3EC1D3;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      transition: 0.3s ease;
    }
    button[type="submit"]:hover {
      background-color: #dbe1ff;
    }
  </style>
</head>
<body>
  <div class="login-wrapper">
    <div class="login-image"></div>
    <div class="login-form">
      <div class="form-title">Welcome Back!</div>
      <p>Belum punya akun? <a href="{{ route('registrasi.form') }}">Daftar sekarang</a></p>

      @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
      @endif

      <form action="{{ route('login.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="text" class="form-control" name="email" id="email" required>
        </div>

        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <button type="submit" class="btn w-100 py-2">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
