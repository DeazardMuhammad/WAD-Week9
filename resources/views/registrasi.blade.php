<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi - Komentar</title>
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
    .register-wrapper {
      display: flex;
      height: 85vh;
      width: 95%;
      max-width: 1000px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      border-radius: 14px;
      overflow: hidden;
    }
    .register-image {
      background: #eef1f6 url('/images/xiao.jpg') no-repeat center;
      background-size: cover;
      flex: 1;
    }
    .register-form {
      background: linear-gradient(135deg, #2EC4B6, #3EC1D3);
      color: white;
      flex: 1;
      padding: 60px 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .register-form .form-control {
      border-radius: 8px;
      font-size: 15px;
    }
    .register-form a {
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
  <div class="register-wrapper">
    <div class="register-image"></div>
    <div class="register-form">
      <div class="form-title">Registrasi Akun</div>
      <p class="mb-4">Silakan isi data berikut untuk membuat akun</p>

      <form action="{{ route('registrasi.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="mb-4">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <button type="submit" class="btn w-100 py-2">Registrasi</button>
      </form>

      <div class="text-center mt-3">
        <small>Sudah punya akun? <a href="{{ route('login.form') }}">Login di sini</a></small>
      </div>
    </div>
  </div>
</body>
</html>
