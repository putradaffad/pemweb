<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Data Pelanggan Rental Mobil')</title>

    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>

    {{-- HEADER langsung dari template --}}
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('front/images/icon-2.png') }}"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Pelanggan</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('rental_history.index') }}">Riwayat Rental</a></li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>

    {{-- ISI HALAMAN --}}
    <main class="container mt-4">
        @yield('content')
    </main>

    {{-- FOOTER langsung dari template --}}
    <footer class="footer_section layout_padding">
        <div class="container">
            <p class="text-center text-muted">© {{ date('Y') }} Pelanggan Rental Mobil - All rights reserved</p>
        </div>
    </footer>

    <!-- JS -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
</body>
</html>
