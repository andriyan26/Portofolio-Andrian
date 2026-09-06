<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'portofolio-Andrian')</title>
    <meta name="description"
        content="@yield('meta_description', 'Portofolio Resmi Andrian — Full-stack Developer berfokus pada Laravel, PHP, MySQL, JavaScript, dan antarmuka web modern.')">
    <meta name="author" content="Andrian">

    <!-- OpenGraph & Social Cards -->
    <meta property="og:title" content="@yield('title', 'portofolio-Andrian')">
    <meta property="og:description"
        content="Portofolio resmi Andrian, Full-Stack Developer lulusan S1 Teknik Informatika Universitas Pamulang.">
    <meta property="og:image" content="{{ asset('images/Photo2.png') }}">
    <meta property="og:type" content="website">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon-32x32.png') }}?v={{ time() }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/favicon-192x192.png') }}?v={{ time() }}">
    <link rel="icon" type="image/png" href="{{ asset('images/Logo.png') }}?v={{ time() }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}?v={{ time() }}">
    <link rel="apple-touch-icon" href="{{ asset('images/Logo.png') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ time() }}">
    @stack('styles')
</head>

<body>
    <!-- Interactive Glowing Cursor & Aura Follower -->
    <div class="cursor-dot" id="cursor-dot" aria-hidden="true"></div>
    <div class="cursor-glow" id="cursor-glow" aria-hidden="true"></div>

    <!-- Top Navigation Bar -->
    <header class="site-header">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="brand-logo" aria-label="Beranda Andri Dev">
                <img src="{{ asset('images/Logo.png') }}" alt="Logo Andri" class="brand-logo-img">
                <span class="brand-text">Andri&nbsp;<span class="brand-highlight">Dev.</span></span>
            </a>

            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}#hero" class="nav-link">Beranda</a></li>
                    <li><a href="{{ route('home') }}#about" class="nav-link">Tentang</a></li>
                    <li><a href="{{ route('home') }}#timeline" class="nav-link">Riwayat</a></li>
                    <li><a href="{{ route('home') }}#projects" class="nav-link">Proyek</a></li>
                    <li><a href="{{ route('home') }}#contact" class="nav-link">Kontak</a></li>
                </ul>
            </nav>

            <div class="nav-actions">
                <a href="https://wa.me/628569052928?text={{ urlencode('Halo Mas Andrian, saya tertarik untuk berdiskusi mengenai proyek web.') }}"
                    target="_blank" class="btn btn-primary" style="padding: 0.55rem 1.25rem; font-size: 0.88rem;">
                    <span>Hubungi WA</span> ↗
                </a>
                <button class="mobile-toggle" aria-label="Toggle menu">☰</button>
            </div>
        </div>
    </header>

    <!-- Main Content Slot -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container footer-container">
            <div>
                <div class="footer-brand">ANDRIAN</div>
                <div class="footer-copy">© {{ date('Y') }} Designed & Built with Passion using Laravel. Depok, Jawa
                    Barat.</div>
            </div>
            <div>
                <a href="#hero" class="back-to-top">
                    <span>Kembali Ke Atas</span> ↑
                </a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}?v={{ time() }}"></script>
    @stack('scripts')
</body>

</html>