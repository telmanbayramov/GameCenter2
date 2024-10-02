<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Proje Başlığı</title>
</head>
<body>
    <div class="navbar">
        <h1>Navbar Başlığı</h1>
        <a href="{{ route('branches.index') }}">Şubeler</a>
        <a href="{{ route('branches.create') }}">Yeni Şube Ekle</a>
        <a href="#">Çıkış</a>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
