<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Komentar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .komentar-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            transition: background 0.2s ease-in-out;
        }

        .komentar-item:hover {
            background-color: #f9fbff;
        }

        .avatar {
            background: linear-gradient(135deg, #2EC4B6, #3EC1D3);
            color: #fff;
            font-weight: bold;
            border-radius: 50%;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }

        .komentar-body {
            flex: 1;
        }

        .komentar-username {
            font-weight: 600;
            margin: 0;
            color: #333;
        }

        .komentar-pesan {
            margin: 3px 0 0 0;
            color: #555;
            font-size: 15px;
        }

        .card-header h3 {
            font-weight: 700;
        }

        .btn-logout {
            transition: 0.3s ease;
        }

        .btn-logout:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm border-0">
            <div class="card-header text-white text-center" style="background: linear-gradient(135deg, #2EC4B6, #3EC1D3)">
                <h3 class="mb-0">💬 Daftar Komentar</h3>
            </div>
            <div class="card-body bg-white">
                @if(count($dataKomentar) > 0)
                    @foreach ($dataKomentar as $komentar)
                        <div class="komentar-item">
                            <div class="avatar">
                                {{ strtoupper(substr($komentar->username, 0, 1)) }}
                            </div>
                            <div class="komentar-body">
                                <p class="komentar-username">{{ $komentar->username }}</p>
                                <p class="komentar-pesan">{{ $komentar->pesan }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-warning text-center">
                        Belum ada komentar.
                    </div>
                @endif
            </div>
        </div>

        <!-- Tombol logout -->
        <div class="mt-4 text-center">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-logout px-4">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
