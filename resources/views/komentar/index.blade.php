<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Komentar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white text-center">
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
    </div>
</body>
</html>
