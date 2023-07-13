<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset ('style.css') }}">
</head>
<body>
    <header>
<!-- Tambahkan konten header di sini -->
    </header>

    <nav>
<!-- Tambahkan konten nav di sini -->
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Tambahkan konten footer di sini -->
    </footer>

    <!-- Tambahkan file JavaScript yang diperlukan di sini -->
</body>
</html>
