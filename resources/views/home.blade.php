@extends('layouts.app')

@section('title', 'portofolio-Andrian')

@section('content')

    <!-- =========================================================================
                                                 1. HERO SECTION
                                                 ========================================================================= -->
    <section id="hero" class="hero-section">
        <div class="container">
            <div class="hero-grid">
                <!-- Hero Left: Typography & Actions -->
                <div class="hero-text-col">
                    <div class="hero-badge reveal-on-scroll">
                        <span class="dot"></span>
                        <span>Halo, Saya</span>
                    </div>

                    <h1 class="hero-title reveal-on-scroll delay-1">ANDRIAN</h1>

                    <div class="hero-role reveal-on-scroll delay-2">
                        <span>Seorang <span class="accent">Full-stack Developer</span></span>
                        <span style="color: var(--text-secondary); font-size: 1.25rem;">PHP • Laravel • MySQL •
                            JavaScript</span>
                    </div>

                    <p class="hero-desc reveal-on-scroll delay-3">
                        Saya membangun aplikasi web yang fungsional, terstruktur, dan mudah digunakan. Berfokus pada
                        pengembangan dengan PHP, Laravel, MySQL, dan JavaScript, serta terus berkembang melalui pengalaman,
                        proyek, dan pembelajaran.
                    </p>

                    <div class="hero-cta reveal-on-scroll delay-4">
                        <a href="#projects" class="btn btn-primary">
                            <span>Lihat Proyek</span>
                            <span>→</span>
                        </a>
                        <a href="#contact" class="btn btn-secondary">
                            <span>Kontak Saya</span>
                        </a>
                    </div>

                    <!-- Social Channels -->
                    <div class="social-links reveal-on-scroll delay-5">
                        <a href="https://wa.me/628569052928" target="_blank" class="social-icon"
                            title="WhatsApp: 08569052928">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.77.813 2.796.814 3.179 0 5.767-2.587 5.768-5.766.001-3.181-2.587-5.767-5.768-5.767zm9.969 5.766c-.002 5.517-4.484 9.998-10 9.998-1.758 0-3.411-.462-4.851-1.267l-5.149 1.351 1.375-5.019c-.896-1.503-1.375-3.23-1.375-5.063 0-5.517 4.482-9.998 10-9.998 5.518 0 10 4.481 10 9.998z" />
                            </svg>
                        </a>
                        <a href="andriandowehz123@gmail.com" class="social-icon" title="Email: andriandowehz123@gmail.com">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                </path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </a>
                        <a href="https://github.com/andriyan26?tab=repositories" target="_blank" class="social-icon"
                            title="GitHub">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/andrian-andrian-23155041b?utm_source=share_via&utm_content=profile&utm_medium=member_ios"
                            target="_blank" class="social-icon" title="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Hero Right: Photo with Glowing Arch & 4 Elegant Floating Badges -->
                <div class="hero-visual reveal-on-scroll reveal-right delay-2">
                    <div class="hero-image-wrap">
                        <!-- 1. KIRI ATAS: Live Status & Availability with Rotating Text -->
                        <div class="hero-pill-badge pill-top-left reveal-on-scroll reveal-left delay-3">
                            <span class="pulse-beacon"></span>
                            <div class="pill-content">
                                <span class="pill-label">STATUS</span>
                                <span class="pill-value dynamic-status-text">AVAILABLE FOR WORK</span>
                            </div>
                        </div>

                        <!-- 2. KANAN ATAS: Core Tech Stack -->
                        <div class="hero-pill-badge pill-top-right reveal-on-scroll reveal-right delay-4">
                            <span class="pill-icon-glow">⚡</span>
                            <div class="pill-content">
                                <span class="pill-label">SPECIALTY</span>
                                <span class="pill-value gradient-glow-text">Full-Stack Dev</span>
                            </div>
                        </div>

                        <!-- Center Photo: Large, Majestic & Crisp -->
                        <img src="{{ asset('images/Photo.jpg') }}" alt="Andrian" class="hero-image">

                        <!-- 3. KIRI BAWAH: Artisan Code Snippet -->
                        <div class="hero-pill-badge pill-bottom-left reveal-on-scroll reveal-left delay-5">
                            <div class="pill-terminal-header">
                                <span class="tdot dot-red"></span>
                                <span class="tdot dot-yellow"></span>
                                <span class="tdot dot-green"></span>
                                <span class="terminal-file-name">artisan.php</span>
                            </div>
                            <div class="pill-code-body">
                                <span class="code-hl-var">Ideas</span>-&gt;<span
                                    class="code-hl-fn">intoReality</span>()<span class="code-blink-cursor">|</span>
                            </div>
                        </div>

                        <!-- 4. KANAN BAWAH: Education / Credential -->
                        <div class="hero-pill-badge pill-bottom-right reveal-on-scroll reveal-right delay-6">
                            <span class="pill-icon-glow">🎓</span>
                            <div class="pill-content">
                                <span class="pill-label">EDUCATION</span>
                                <span class="pill-value text-emerald">S1 Teknik Informatika</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
                                                 2. ABOUT SECTION
                                                 ========================================================================= -->
    <section id="about" class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3.5rem;">
                <div class="section-tag reveal-on-scroll">+ TENTANG SAYA</div>
                <h2 class="section-title reveal-on-scroll delay-1">Solusi Digital Cepat, Terukur &amp; Teruji</h2>
                <p class="section-subtitle reveal-on-scroll delay-2" style="margin: 0 auto;">
                    Fokus pada ekosistem web modern untuk menciptakan produk digital yang fungsional dan efisien.
                </p>
            </div>

            <div class="about-grid">
                <!-- Left: Executive Formal Portrait Showcase Card -->
                <div class="about-portrait-card reveal-on-scroll reveal-left">
                    <!-- Ambient Studio Glow Backdrop -->
                    <div class="portrait-glow-backdrop" aria-hidden="true"></div>

                    <!-- Top Floating Tag -->
                    <div class="portrait-tag-badge">
                        <span class="status-indicator-dot"></span>
                        <span>PROFIL RESMI</span>
                    </div>

                    <!-- Certification Corner Badge -->
                    <div class="portrait-badge-corner">
                        <span class="corner-icon">🛡️</span>
                        <div class="corner-text">
                            <span class="c-sub">TERSERTIFIKASI</span>
                            <span class="c-title">LSP / BNSP</span>
                        </div>
                    </div>

                    <!-- Main Formal Photo (Photo2.png) -->
                    <div class="portrait-frame">
                        <img src="{{ asset('images/Photo2.png') }}" alt="Andrian — Formal Portrait" class="formal-photo">
                    </div>

                    <!-- Executive Glass Nameplate Overlay at Bottom -->
                    <div class="portrait-nameplate">
                        <div class="nameplate-header">
                            <div>
                                <h4 class="nameplate-name">{{ $profile['name'] }}</h4>
                                <p class="nameplate-role">{{ $profile['role'] }} &amp; Software Engineer</p>
                            </div>
                            <span class="verified-check" title="Profil Terverifikasi">✓</span>
                        </div>

                        <div class="nameplate-stats">
                            <div class="np-stat">
                                <span class="stat-num">S1</span>
                                <span class="stat-desc">Teknik Informatika</span>
                            </div>
                            <div class="np-divider"></div>
                            <div class="np-stat">
                                <span class="stat-num">{{ $profile['gpa'] }}</span>
                                <span class="stat-desc">IPK Kelulusan</span>
                            </div>
                            <div class="np-divider"></div>
                            <div class="np-stat">
                                <span class="stat-num">UNPAM</span>
                                <span class="stat-desc">Universitas</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Visual Bio & Highlights (To The Point) -->
                <div class="about-content reveal-on-scroll reveal-right">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.8rem;">
                        <span style="font-size: 1.5rem;">👋</span>
                        <h3 style="margin-bottom: 0; font-size: 1.85rem;">Halo! Saya {{ $profile['name'] }}</h3>
                    </div>

                    <p class="about-lead">
                        Full-Stack Web Developer yang fokus membangun aplikasi terstruktur, cepat, dan siap pakai bisnis. Menghubungkan logika backend yang kokoh dengan antarmuka yang modern, responsif, dan mudah digunakan.
                    </p>

                    <!-- 4 Visual Highlights Cards (Quick Facts, No Wall of Text) -->
                    <div class="about-highlights-grid">
                        <div class="highlight-box reveal-on-scroll delay-1">
                            <div class="hl-icon">🎓</div>
                            <div class="hl-content">
                                <span class="hl-title">Pendidikan Formal</span>
                                <span class="hl-desc">S1 Teknik Informatika UNPAM • IPK 3.73</span>
                            </div>
                        </div>

                        <div class="highlight-box reveal-on-scroll delay-2">
                            <div class="hl-icon">💼</div>
                            <div class="hl-content">
                                <span class="hl-title">Pengalaman Lapangan</span>
                                <span class="hl-desc">IT Pusdiklat BPS &amp; Ketua Tim PKM</span>
                            </div>
                        </div>

                        <div class="highlight-box reveal-on-scroll delay-3">
                            <div class="hl-icon">🛡️</div>
                            <div class="hl-content">
                                <span class="hl-title">Sertifikasi Profesi</span>
                                <span class="hl-desc">BNSP / LSP UNPAM — Skor 85 (Kompeten)</span>
                            </div>
                        </div>

                        <div class="highlight-box reveal-on-scroll delay-4">
                            <div class="hl-icon">📍</div>
                            <div class="hl-content">
                                <span class="hl-title">Domisili Kerja</span>
                                <span class="hl-desc">Sawangan, Depok • On-Site &amp; Remote</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Biodata Pills (Ringkas & Rapi) -->
                    <div class="about-quick-biodata reveal-on-scroll delay-3">
                        <div class="bio-pill">
                            <span>📞</span> <span><strong>WA:</strong> {{ $profile['phone'] }}</span>
                        </div>
                        <div class="bio-pill">
                            <span>✉️</span> <span><strong>Email:</strong> {{ $profile['email'] }}</span>
                        </div>
                        <div class="bio-pill">
                            <span>🎂</span> <span><strong>Lahir:</strong> Depok, 26 Mar 2000</span>
                        </div>
                        <div class="bio-pill">
                            <span>🟢</span> <span><strong>Status:</strong> Siap Proyek Baru</span>
                        </div>
                    </div>

                    <!-- Quick Action CTA -->
                    <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;" class="reveal-on-scroll delay-4">
                        <a href="#contact" class="btn btn-primary">
                            <span>Hubungi Saya Langsung</span>
                        </a>
                        <a href="https://wa.me/628569052928?text={{ urlencode('Halo Mas Andrian, saya tertarik ingin berdiskusi dan melihat berkas CV Anda.') }}"
                            target="_blank" class="btn btn-secondary">
                            <span>Minta Berkas CV</span> ↗
                        </a>
                    </div>
                </div>
            </div>

            <!-- Verified Certificates Row (SoloLearn) -->
            <div class="cert-section-header reveal-on-scroll delay-1">
                <div class="cert-header-left">
                    <div class="section-tag" style="margin-bottom: 0.35rem;">+ SERTIFIKASI RESMI TERVALIDASI</div>
                    <h3 class="cert-section-title">Sertifikasi Keahlian SoloLearn</h3>
                </div>
                <div class="cert-header-right">
                    <span class="cert-pulse-dot"></span>
                    <span>4 Kredensial Terverifikasi Online</span>
                </div>
            </div>

            <!-- Certificates Grid (Pengganti Stats Grid) -->
            <div class="stats-grid certs-grid">
                <!-- 1. HTML Certificate -->
                <div class="cert-card stat-card reveal-on-scroll delay-1">
                    <div class="cert-thumb-box" onclick="openCertModal('{{ asset('images/HTML.jpeg') }}', 'SoloLearn HTML Certificate', 'CC-4QAZO7VP', 'https://www.sololearn.com/certificates/CC-4QAZO7VP')" title="Klik untuk memperbesar sertifikat">
                        <img src="{{ asset('images/HTML.jpeg') }}" alt="Sertifikat HTML SoloLearn" class="cert-thumb-img" loading="lazy">
                        <div class="cert-thumb-overlay">
                            <span>🔍 Perbesar</span>
                        </div>
                        <div class="cert-thumb-badge">
                            <span class="cert-badge-dot"></span>
                            <span>SoloLearn</span>
                        </div>
                    </div>
                    <div class="cert-info">
                        <div class="cert-issuer">
                            <span class="cert-platform">HTML</span>
                            <span class="cert-code">CC-4QAZO7VP</span>
                        </div>
                        <h4 class="cert-title">HTML Course</h4>
                        <p class="cert-desc">Struktur semantik web modern, form interaktif, dan standar dokumen web W3C.</p>
                        <a href="https://www.sololearn.com/certificates/CC-4QAZO7VP" target="_blank" rel="noopener noreferrer" class="cert-btn">
                            <span>Verifikasi Resmi</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                    </div>
                </div>

                <!-- 2. CSS Certificate -->
                <div class="cert-card stat-card reveal-on-scroll delay-2">
                    <div class="cert-thumb-box" onclick="openCertModal('{{ asset('images/CSS.jpeg') }}', 'SoloLearn CSS Certificate', 'CC-T7GAIGRZ', 'https://www.sololearn.com/certificates/CC-T7GAIGRZ')" title="Klik untuk memperbesar sertifikat">
                        <img src="{{ asset('images/CSS.jpeg') }}" alt="Sertifikat CSS SoloLearn" class="cert-thumb-img" loading="lazy">
                        <div class="cert-thumb-overlay">
                            <span>🔍 Perbesar</span>
                        </div>
                        <div class="cert-thumb-badge">
                            <span class="cert-badge-dot"></span>
                            <span>SoloLearn</span>
                        </div>
                    </div>
                    <div class="cert-info">
                        <div class="cert-issuer">
                            <span class="cert-platform">CSS</span>
                            <span class="cert-code">CC-T7GAIGRZ</span>
                        </div>
                        <h4 class="cert-title">CSS Course</h4>
                        <p class="cert-desc">Styling modern responsif, CSS Flexbox &amp; Grid layout, estetika visual, dan efek transisi.</p>
                        <a href="https://www.sololearn.com/certificates/CC-T7GAIGRZ" target="_blank" rel="noopener noreferrer" class="cert-btn">
                            <span>Verifikasi Resmi</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                    </div>
                </div>

                <!-- 3. JavaScript Certificate -->
                <div class="cert-card stat-card reveal-on-scroll delay-3">
                    <div class="cert-thumb-box" onclick="openCertModal('{{ asset('images/JAVASCRIPT.jpeg') }}', 'SoloLearn JavaScript Certificate', 'CC-G7CPXGBP', 'https://www.sololearn.com/certificates/CC-G7CPXGBP')" title="Klik untuk memperbesar sertifikat">
                        <img src="{{ asset('images/JAVASCRIPT.jpeg') }}" alt="Sertifikat JavaScript SoloLearn" class="cert-thumb-img" loading="lazy">
                        <div class="cert-thumb-overlay">
                            <span>🔍 Perbesar</span>
                        </div>
                        <div class="cert-thumb-badge">
                            <span class="cert-badge-dot"></span>
                            <span>SoloLearn</span>
                        </div>
                    </div>
                    <div class="cert-info">
                        <div class="cert-issuer">
                            <span class="cert-platform">JAVASCRIPT</span>
                            <span class="cert-code">CC-G7CPXGBP</span>
                        </div>
                        <h4 class="cert-title">JavaScript Course</h4>
                        <p class="cert-desc">Logika inti pemrograman, manipulasi interaktif DOM, event handling, dan algoritma interaktif.</p>
                        <a href="https://www.sololearn.com/certificates/CC-G7CPXGBP" target="_blank" rel="noopener noreferrer" class="cert-btn">
                            <span>Verifikasi Resmi</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                    </div>
                </div>

                <!-- 4. JavaScript Intermediate Certificate -->
                <div class="cert-card stat-card reveal-on-scroll delay-4">
                    <div class="cert-thumb-box" onclick="openCertModal('{{ asset('images/JAVASCRIPT INTERMEDIATE.jpeg') }}', 'SoloLearn JavaScript Intermediate Certificate', 'CC-FOGV1OIK', 'https://www.sololearn.com/certificates/CC-FOGV1OIK')" title="Klik untuk memperbesar sertifikat">
                        <img src="{{ asset('images/JAVASCRIPT INTERMEDIATE.jpeg') }}" alt="Sertifikat JavaScript Intermediate SoloLearn" class="cert-thumb-img" loading="lazy">
                        <div class="cert-thumb-overlay">
                            <span>🔍 Perbesar</span>
                        </div>
                        <div class="cert-thumb-badge">
                            <span class="cert-badge-dot"></span>
                            <span>SoloLearn</span>
                        </div>
                    </div>
                    <div class="cert-info">
                        <div class="cert-issuer">
                            <span class="cert-platform">JS INTERMEDIATE</span>
                            <span class="cert-code">CC-FOGV1OIK</span>
                        </div>
                        <h4 class="cert-title">JS Intermediate</h4>
                        <p class="cert-desc">Fitur modern ES6+, OOP, asynchronous JavaScript (Promises &amp; Fetch), serta arsitektur kode.</p>
                        <a href="https://www.sololearn.com/certificates/CC-FOGV1OIK" target="_blank" rel="noopener noreferrer" class="cert-btn">
                            <span>Verifikasi Resmi</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
                                                 3. TIMELINE & EXPERIENCES (Pendidikan, Pekerjaan, Pelatihan, Sertifikasi)
                                                 ========================================================================= -->
    <section id="timeline" class="section" style="background: rgba(0, 0, 0, 0.2);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <div class="section-tag reveal-on-scroll">+ RIWAYAT &amp; JEJAK LANGKAH</div>
                <h2 class="section-title reveal-on-scroll delay-1">Pendidikan, Pengalaman &amp; Sertifikasi</h2>
                <p class="section-subtitle reveal-on-scroll delay-2" style="margin: 0 auto;">
                    Rekam jejak formal akademis, pengalaman lapangan praktis, serta sertifikasi keahlian terstandarisasi.
                </p>
            </div>

            <!-- Tabs Navigation -->
            <div class="experience-tabs reveal-on-scroll delay-2">
                <button class="tab-btn active" data-tab="education">
                    <span>🎓 Pendidikan</span>
                </button>
                <button class="tab-btn" data-tab="work">
                    <span>💼 Pengalaman Kerja</span>
                </button>
                <button class="tab-btn" data-tab="training">
                    <span>💡 Pelatihan &amp; PKM</span>
                </button>
                <button class="tab-btn" data-tab="certification">
                    <span>📜 Sertifikasi Profesi</span>
                </button>
            </div>

            <!-- Tab Panels -->
            <div class="timeline-container">
                <!-- 1. Pendidikan -->
                <div class="tab-content-panel active" id="tab-education">
                    <div class="timeline-list">
                        @if(isset($experiences['education']))
                            @foreach($experiences['education'] as $idx => $edu)
                                <div class="timeline-card reveal-on-scroll delay-{{ ($idx % 3) + 1 }}">
                                    <div class="timeline-card-wrapper">
                                        <!-- Visual Badge / Logo Placeholder -->
                                        <div class="timeline-icon-box" title="Institusi Pendidikan">
                                            <span>🎓</span>
                                        </div>
                                        <div style="flex: 1; min-width: 0;">
                                            <div class="timeline-header">
                                                <div>
                                                    <h3 class="timeline-title">{{ $edu->title }}</h3>
                                                    <div class="timeline-institution">{{ $edu->institution }}</div>
                                                </div>
                                                @if($edu->badge)
                                                    <span class="timeline-badge">{{ $edu->badge }}</span>
                                                @endif
                                            </div>
                                            <div class="timeline-meta">
                                                <span>📅 {{ $edu->period }}</span>
                                                @if($edu->location)<span>📍 {{ $edu->location }}</span>@endif
                                                @if($edu->score)<span>⭐ <strong>{{ $edu->score }}</strong></span>@endif
                                            </div>
                                            <p class="timeline-desc">{{ $edu->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- 2. Pengalaman Kerja -->
                <div class="tab-content-panel" id="tab-work">
                    <div class="timeline-list">
                        @if(isset($experiences['work']))
                            @foreach($experiences['work'] as $idx => $work)
                                <div class="timeline-card reveal-on-scroll delay-{{ ($idx % 3) + 1 }}">
                                    <div class="timeline-card-wrapper">
                                        <!-- Visual Badge / Logo Placeholder -->
                                        <div class="timeline-icon-box" style="border-color: rgba(6, 182, 212, 0.4); background: rgba(6, 182, 212, 0.12);" title="Tempat Pengalaman">
                                            <span>💼</span>
                                        </div>
                                        <div style="flex: 1; min-width: 0;">
                                            <div class="timeline-header">
                                                <div>
                                                    <h3 class="timeline-title">{{ $work->title }}</h3>
                                                    <div class="timeline-institution">{{ $work->institution }}</div>
                                                </div>
                                                @if($work->badge)
                                                    <span class="timeline-badge">{{ $work->badge }}</span>
                                                @endif
                                            </div>
                                            <div class="timeline-meta">
                                                <span>📅 {{ $work->period }}</span>
                                                @if($work->location)<span>📍 {{ $work->location }}</span>@endif
                                                @if($work->score)<span>⭐ {{ $work->score }}</span>@endif
                                            </div>
                                            <p class="timeline-desc">{{ $work->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- 3. Pelatihan & PKM -->
                <div class="tab-content-panel" id="tab-training">
                    <div class="timeline-list">
                        @if(isset($experiences['training']))
                            @foreach($experiences['training'] as $idx => $trn)
                                <div class="timeline-card reveal-on-scroll delay-{{ ($idx % 3) + 1 }}">
                                    <div class="timeline-card-wrapper">
                                        <!-- Visual Badge / Logo Placeholder -->
                                        <div class="timeline-icon-box" style="border-color: rgba(245, 158, 11, 0.4); background: rgba(245, 158, 11, 0.12);" title="Pelatihan & PKM">
                                            <span>💡</span>
                                        </div>
                                        <div style="flex: 1; min-width: 0;">
                                            <div class="timeline-header">
                                                <div>
                                                    <h3 class="timeline-title">{{ $trn->title }}</h3>
                                                    <div class="timeline-institution">{{ $trn->institution }}</div>
                                                </div>
                                                @if($trn->badge)
                                                    <span class="timeline-badge">{{ $trn->badge }}</span>
                                                @endif
                                            </div>
                                            <div class="timeline-meta">
                                                <span>📅 {{ $trn->period }}</span>
                                                @if($trn->location)<span>📍 {{ $trn->location }}</span>@endif
                                                @if($trn->score)<span>🏷️ {{ $trn->score }}</span>@endif
                                            </div>
                                            <p class="timeline-desc">{{ $trn->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- 4. Sertifikasi -->
                <div class="tab-content-panel" id="tab-certification">
                    <div class="timeline-list">
                        @if(isset($experiences['certification']))
                            @foreach($experiences['certification'] as $idx => $cert)
                                <div class="timeline-card reveal-on-scroll delay-{{ ($idx % 3) + 1 }}" style="border-left: 3px solid var(--accent-emerald);">
                                    <div class="timeline-card-wrapper">
                                        <!-- Visual Badge / Logo Placeholder -->
                                        <div class="timeline-icon-box" style="border-color: rgba(16, 185, 129, 0.5); background: rgba(16, 185, 129, 0.18);" title="Sertifikasi Resmi">
                                            <span>🛡️</span>
                                        </div>
                                        <div style="flex: 1; min-width: 0;">
                                            <div class="timeline-header">
                                                <div>
                                                    <h3 class="timeline-title">{{ $cert->title }}</h3>
                                                    <div class="timeline-institution">{{ $cert->institution }}</div>
                                                </div>
                                                @if($cert->badge)
                                                    <span class="timeline-badge" style="background: rgba(16, 185, 129, 0.2);">{{ $cert->badge }}</span>
                                                @endif
                                            </div>
                                            <div class="timeline-meta">
                                                <span>📅 {{ $cert->period }}</span>
                                                @if($cert->location)<span>📍 {{ $cert->location }}</span>@endif
                                                @if($cert->score)<span>🏆 <strong>{{ $cert->score }}</strong></span>@endif
                                            </div>
                                            <p class="timeline-desc">{{ $cert->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
                                                 4. SKILLS & TECHNOLOGIES
                                                 ========================================================================= -->
    <section id="skills" class="section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3.5rem;">
                <div class="section-tag reveal-on-scroll">+ STACK &amp; KEAHLIAN</div>
                <h2 class="section-title reveal-on-scroll delay-1">Skills &amp; Technologies</h2>
                <p class="section-subtitle reveal-on-scroll delay-2" style="margin: 0 auto;">Peralatan, bahasa pemrograman, framework, dan teknologi
                    yang saya gunakan sehari-hari untuk mewujudkan aplikasi web tangguh.</p>
            </div>

            @foreach($skills as $category => $categorySkills)
                <div class="skills-category-group reveal-on-scroll">
                    <div class="skills-category-title">
                        <span>
                            @if($category === 'backend') ⚙️ Backend Engineering
                            @elseif($category === 'frontend') 🎨 Frontend Development
                            @elseif($category === 'database') 🗄️ Database Architecture
                            @else 🛠️ Tools, Server &amp; Environment
                            @endif
                        </span>
                    </div>

                    <div class="skills-grid">
                        @foreach($categorySkills as $skill)
                            <div class="skill-card reveal-on-scroll delay-{{ ($loop->index % 4) + 1 }}">
                                <div class="skill-icon-wrap">
                                    @if(str_contains(strtolower($skill->name), 'laravel'))
                                        <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M22.5 5.5l-9.5-5.5-9.5 5.5v11l9.5 5.5 9.5-5.5v-11zm-9.5 14.5l-7.5-4.3v-8.4l7.5 4.3v8.4zm1-8.4l7.5-4.3v8.4l-7.5 4.3v-8.4zm-1-1.7l-7.2-4.1 7.2-4.2 7.2 4.2-7.2 4.1z" />
                                        </svg>
                                    @elseif(str_contains(strtolower($skill->name), 'php'))
                                        <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M12 2c-5.52 0-10 4.48-10 10s4.48 10 10 10 10-4.48 10-10-4.48-10-10-10zm-3 13.5h-1.5l1.5-7h2.5c1.66 0 3 1.34 3 3 0 1.2-.7 2.22-1.72 2.7l.72 1.3h-1.6l-.6-1.5h-.8l-.5 1.5zm6.5-4.5c0 1.66-1.34 3-3 3h-1.5l1.5-7h2.5c1.66 0 3 1.34 3 3zm-6-1.5h1c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5h-1.5l-.5 3z" />
                                        </svg>
                                    @elseif(str_contains(strtolower($skill->name), 'mysql'))
                                        <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M12 3c-4.97 0-9 1.79-9 4v10c0 2.21 4.03 4 9 4s9-1.79 9-4v-10c0-2.21-4.03-4-9-4zm0 2c4.41 0 7 1.5 7 2s-2.59 2-7 2-7-1.5-7-2 2.59-2 7-2zm0 6c-4.41 0-7-1.5-7-2v3c0 .5 2.59 2 7 2s7-1.5 7-2v-3c0 .5-2.59 2-7 2zm0 6c-4.41 0-7-1.5-7-2v3c0 .5 2.59 2 7 2s7-1.5 7-2v-3c0 .5-2.59 2-7 2z" />
                                        </svg>
                                    @elseif(str_contains(strtolower($skill->name), 'javascript'))
                                        <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M3 3h18v18h-18v-18zm14.5 13.5c-.8 0-1.4-.4-1.7-.9l1.1-.7c.2.3.4.5.6.5.4 0 .6-.2.6-.6v-4.8h1.4v4.8c0 1.1-.9 1.7-2 1.7zm-5 0c-1.3 0-2.2-.9-2.2-2.3 0-1.4.9-2.3 2.2-2.3.8 0 1.4.3 1.7.8l-1.1.7c-.2-.3-.4-.4-.6-.4-.5 0-.8.4-.8 1.2s.3 1.2.8 1.2c.3 0 .5-.1.7-.4l1.1.7c-.4.5-1 0.8-1.8.8z" />
                                        </svg>
                                    @elseif(str_contains(strtolower($skill->name), 'html'))
                                        <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M12 2l-9.5 3 1.5 13.5 8 3.5 8-3.5 1.5-13.5-9.5-3zm5.8 5.7l-.3 3.5h-5.5v2.8h4.2l-.4 3.7-3.8 1.1-3.8-1.1-.3-2.7h1.9l.1 1.2 2.1.6 2.1-.6.2-1.9h-4.4l-.5-6.6h8.4z" />
                                        </svg>
                                    @elseif(str_contains(strtolower($skill->name), 'git'))
                                        <svg width="26" height="26" viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M2.6 10.59l8.81-8.81c.78-.78 2.05-.78 2.83 0l8.81 8.81c.78.78.78 2.05 0 2.83l-8.81 8.81c-.78.78-2.05.78-2.83 0l-8.81-8.81c-.78-.78-.78-2.05 0-2.83zm13.03 2.54c-.39-.14-.81-.22-1.25-.22-.92 0-1.75.37-2.35.98l-2.45-2.45c.22-.44.35-.94.35-1.47 0-.44-.09-.85-.25-1.22l2.36-2.36c.45.28.98.45 1.56.45 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .54.15 1.05.41 1.48l-2.37 2.37c-.44-.22-.94-.35-1.47-.35-1.66 0-3 1.34-3 3 0 .78.3 1.49.79 2.02l-2.49 2.49c-.43-.2-.91-.32-1.42-.32-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3c0-.75-.28-1.44-.74-1.97l2.45-2.45c.42.17.88.27 1.37.27.44 0 .86-.09 1.24-.26l2.49 2.49c-.21.43-.34.92-.34 1.44 0 1.66 1.34 3 3 3s3-1.34 3-3-1.34-3-3-3z" />
                                        </svg>
                                    @else
                                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2">
                                            <path
                                                d="M16.5 9.4 7.55 4.24a1.78 1.78 0 0 0-2.5 1.55v12.42a1.78 1.78 0 0 0 2.5 1.55L16.5 14.6a1.78 1.78 0 0 0 0-3.2z" />
                                        </svg>
                                    @endif
                                </div>
                                <div class="skill-info">
                                    <div class="skill-name">{{ $skill->name }}</div>
                                    <div class="skill-desc">{{ $skill->description }}</div>
                                    <span class="skill-level-badge">{{ $skill->level }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- =========================================================================
                                                 5. SELECTED PROJECTS
                                                 ========================================================================= -->
    <section id="projects" class="section" style="background: rgba(0, 0, 0, 0.3);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 3rem;">
                <div class="section-tag reveal-on-scroll">+ PORTFOLIO</div>
                <h2 class="section-title reveal-on-scroll delay-1">Proyek Terpilih</h2>
                <p class="section-subtitle reveal-on-scroll delay-2" style="margin: 0 auto;">Beberapa karya yang menyoroti keahlian rekayasa aplikasi
                    full-stack saya.</p>
            </div>

            <!-- Category Filter Buttons -->
            <div class="projects-filter reveal-on-scroll delay-2">
                <button class="tab-btn filter-btn active" data-filter="all">Semua Proyek</button>
                <button class="tab-btn filter-btn" data-filter="Full-Stack Web App">Full-Stack Web App</button>
                <button class="tab-btn filter-btn" data-filter="Enterprise System">Enterprise System</button>
                <button class="tab-btn filter-btn" data-filter="API & Automation">API & Automation</button>
            </div>

            <!-- Projects Grid -->
            <div class="projects-grid">
                @foreach($projects as $index => $project)
                    <div class="project-card reveal-on-scroll delay-{{ ($index % 3) + 1 }}" data-category="{{ $project->category }}">
                        <div class="project-thumb-wrap">
                            <span class="project-num-badge">#0{{ $index + 1 }}</span>
                            <img src="{{ asset($project->thumbnail) }}" alt="{{ $project->title }}" class="project-thumb">
                        </div>

                        <div class="project-content">
                            <div class="project-tags">
                                @if(is_array($project->technologies))
                                    @foreach($project->technologies as $tech)
                                        <span class="project-tag">{{ $tech }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <h3 class="project-title">{{ $project->title }}</h3>
                            <p class="project-summary">{{ $project->summary }}</p>

                            <div class="project-footer">
                                <span style="font-size: 0.8rem; color: var(--text-muted);">{{ $project->category }}</span>
                                <a href="https://wa.me/628569052928?text={{ urlencode('Halo Mas Andrian, saya tertarik ingin bertanya tentang proyek: ' . $project->title) }}"
                                    target="_blank" class="project-action-link">
                                    <span>Tanya Tentang Proyek</span> →
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- =========================================================================
                                                 6. CONTACT SECTION (MARI TERHUBUNG)
                                                 ========================================================================= -->
    <section id="contact" class="section">
        <div class="container">
            <div class="contact-grid">
                <!-- Left: Direct Info Cards -->
                <div class="contact-info-card reveal-on-scroll reveal-left">
                    <div class="section-tag">+ MARI TERHUBUNG</div>
                    <h2 class="contact-info-title">Kontak Saya. Mari Terhubung.</h2>
                    <p class="contact-info-subtitle">
                        Hubungi saya melalui salah satu kontak berikut. Saya siap berdiskusi tentang proyek, kolaborasi,
                        atau peluang baru di bidang teknologi dan software engineering.
                    </p>

                    <div class="contact-items-list">
                        <!-- Direct Email -->
                        <a href="mailto:{{ $profile['email'] }}" class="contact-item-card">
                            <div class="contact-icon-box">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <div class="contact-item-details">
                                <div class="label">Alamat Email</div>
                                <div class="val">{{ $profile['email'] }}</div>
                            </div>
                        </a>

                        <!-- Direct WhatsApp Phone -->
                        <a href="https://wa.me/628569052928" target="_blank" class="contact-item-card">
                            <div class="contact-icon-box">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.711 2.598 2.664-.699c.971.53 1.77.813 2.796.814 3.179 0 5.767-2.587 5.768-5.766.001-3.181-2.587-5.767-5.768-5.767zm9.969 5.766c-.002 5.517-4.484 9.998-10 9.998-1.758 0-3.411-.462-4.851-1.267l-5.149 1.351 1.375-5.019c-.896-1.503-1.375-3.23-1.375-5.063 0-5.517 4.482-9.998 10-9.998 5.518 0 10 4.481 10 9.998z" />
                                </svg>
                            </div>
                            <div class="contact-item-details">
                                <div class="label">Telepon &amp; WhatsApp</div>
                                <div class="val">{{ $profile['phone'] }}</div>
                            </div>
                        </a>

                        <!-- Domicile Location -->
                        <div class="contact-item-card">
                            <div class="contact-icon-box">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </div>
                            <div class="contact-item-details">
                                <div class="label">Lokasi Domisili</div>
                                <div class="val">{{ $profile['domicile'] }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="availability-alert">
                        <span>🟢</span>
                        <div><strong>Tersedia untuk proyek baru</strong> — respons cepat dalam 1x24 jam</div>
                    </div>
                </div>

                <!-- Right: Contact Message Form -->
                <div class="contact-form-card comment-form-card reveal-on-scroll reveal-right">
                    <h3 class="form-card-title">Kirim Pesan Langsung</h3>
                    <p class="form-card-subtitle">Ceritakan proyek atau ide Anda. Pesan akan tersimpan langsung di database
                        dan Anda dapat lanjut chat di WhatsApp.</p>

                    <form id="contact-form">
                        @csrf
                        <div class="form-group">
                            <label for="c_name" class="form-label">Nama Pengirim *</label>
                            <input type="text" name="name" id="c_name" class="form-control" placeholder="Nama lengkap Anda"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="c_email" class="form-label">Alamat Email *</label>
                            <input type="email" name="email" id="c_email" class="form-control" placeholder="nama@email.com"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="c_subject" class="form-label">Subjek / Topik</label>
                            <input type="text" name="subject" id="c_subject" class="form-control"
                                placeholder="Contoh: Diskusi Proyek Website">
                        </div>

                        <div class="form-group">
                            <label for="c_message" class="form-label">Pesan Anda *</label>
                            <textarea name="message" id="c_message" class="form-control"
                                placeholder="Tuliskan detail ide atau kebutuhan Anda..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            <span>KIRIM PESAN</span> 📨
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Certificate Lightbox Modal -->
    <div id="certLightboxModal" class="cert-modal" aria-hidden="true" role="dialog" aria-modal="true">
        <div class="cert-modal-backdrop" onclick="closeCertModal()"></div>
        <div class="cert-modal-dialog">
            <button type="button" class="cert-modal-close" onclick="closeCertModal()" aria-label="Tutup Preview">&times;</button>
            <div class="cert-modal-body">
                <img id="certModalImg" src="" alt="Preview Sertifikat" class="cert-modal-img">
                <div class="cert-modal-footer">
                    <div class="cert-modal-info">
                        <h4 id="certModalTitle" class="cert-modal-title">SoloLearn Certificate</h4>
                        <span id="certModalCode" class="cert-modal-code">ID: -</span>
                    </div>
                    <a id="certModalLink" href="#" target="_blank" rel="noopener noreferrer" class="btn btn-primary" style="padding: 0.6rem 1.25rem; font-size: 0.85rem;">
                        <span>Buka Verifikasi di SoloLearn</span> ↗
                    </a>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        /* ==========================================================================
           Hero Visual & 4 Floating Glassmorphic Badges (Guaranteed Scoped Styles)
           ========================================================================== */
        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 480px;
        }

        .hero-image-wrap {
            position: relative;
            width: 330px;
            height: 430px;
            border-radius: 165px 165px 36px 36px;
            padding: 10px;
            background: linear-gradient(145deg, rgba(16, 185, 129, 0.45), rgba(6, 182, 212, 0.2), rgba(16, 185, 129, 0.05));
            box-shadow: 0 20px 50px -10px rgba(0, 0, 0, 0.85), 0 0 50px rgba(16, 185, 129, 0.25);
            border: 2px solid rgba(16, 185, 129, 0.4);
            flex-shrink: 0;
            margin: 0 auto;
        }

        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center 15%;
            border-radius: 155px 155px 28px 28px;
            display: block;
        }

        /* Floating Pills / Badges */
        .hero-pill-badge {
            position: absolute;
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            padding: 0.6rem 0.95rem;
            background: rgba(11, 18, 33, 0.94);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 14px;
            box-shadow: 0 14px 35px -5px rgba(0, 0, 0, 0.8), 0 0 25px rgba(16, 185, 129, 0.15);
            z-index: 10;
            white-space: nowrap;
            user-select: none;
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease, border-color 0.3s ease;
        }

        .hero-pill-badge:hover {
            transform: translateY(-4px) scale(1.05) !important;
            border-color: rgba(16, 185, 129, 0.5);
            box-shadow: 0 18px 40px -4px rgba(0, 0, 0, 0.9), 0 0 30px rgba(16, 185, 129, 0.3);
        }

        /* 1. Kiri Atas: Status & Availability */
        .pill-top-left {
            top: 25px;
            left: -40px;
            border-left: 3.5px solid #10b981;
            animation: float-pill-1 4.8s ease-in-out infinite;
        }

        /* 2. Kanan Atas: Core Specialty */
        .pill-top-right {
            top: 35px;
            right: -40px;
            border-top: 2.5px solid #06b6d4;
            animation: float-pill-2 5.4s ease-in-out infinite 0.7s;
        }

        /* 3. Kiri Bawah: Code Terminal */
        .pill-bottom-left {
            bottom: 25px;
            left: -45px;
            border-bottom: 2.5px solid #10b981;
            animation: float-pill-3 5.1s ease-in-out infinite 1.4s;
            flex-direction: column;
            align-items: flex-start;
            gap: 0.35rem;
            min-width: 170px;
        }

        /* 4. Kanan Bawah: Education */
        .pill-bottom-right {
            bottom: 20px;
            right: -40px;
            border-right: 3.5px solid #06b6d4;
            animation: float-pill-4 5.7s ease-in-out infinite 2.1s;
        }

        /* Floating Physics */
        @keyframes float-pill-1 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-7px);
            }
        }

        @keyframes float-pill-2 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-9px);
            }
        }

        @keyframes float-pill-3 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        @keyframes float-pill-4 {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-8px);
            }
        }

        /* Typography & Internal Elements */
        .pill-content {
            display: flex;
            flex-direction: column;
            line-height: 1.25;
        }

        .pill-label {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.62rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            color: #94a3b8;
            text-transform: uppercase;
            margin-bottom: 2px;
        }

        .pill-value {
            font-size: 0.84rem;
            font-weight: 800;
            color: #f8fafc;
            letter-spacing: 0.02em;
        }

        .pill-icon-glow {
            font-size: 1.1rem;
            filter: drop-shadow(0 0 8px rgba(16, 185, 129, 0.6));
        }

        .gradient-glow-text {
            background: linear-gradient(90deg, #34d399, #38bdf8, #a7f3d0);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: grad-shift 3s ease infinite;
        }

        @keyframes grad-shift {

            0%,
            100% {
                background-position: 0% center;
            }

            50% {
                background-position: 100% center;
            }
        }

        .text-emerald {
            color: #34d399;
        }

        /* Radar Beacon */
        .pulse-beacon {
            position: relative;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #10b981;
            box-shadow: 0 0 12px #10b981;
            flex-shrink: 0;
        }

        .pulse-beacon::after {
            content: '';
            position: absolute;
            top: -4px;
            left: -4px;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 1.5px solid #10b981;
            animation: beacon-ripple 2s infinite ease-out;
        }

        @keyframes beacon-ripple {
            0% {
                transform: scale(0.6);
                opacity: 1;
            }

            100% {
                transform: scale(1.8);
                opacity: 0;
            }
        }

        /* Terminal Pill */
        .pill-terminal-header {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 0.62rem;
            font-family: 'JetBrains Mono', monospace;
            color: #64748b;
        }

        .tdot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            display: inline-block;
        }

        .dot-red {
            background: #ef4444;
        }

        .dot-yellow {
            background: #f59e0b;
        }

        .dot-green {
            background: #10b981;
        }

        .terminal-file-name {
            margin-left: 4px;
            color: #94a3b8;
        }

        .pill-code-body {
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.74rem;
            color: #cbd5e1;
        }

        .code-hl-var {
            color: #38bdf8;
            font-weight: 600;
        }

        .code-hl-fn {
            color: #34d399;
        }

        .code-blink-cursor {
            color: #10b981;
            font-weight: bold;
            animation: blink-cursor 0.9s infinite;
        }

        @keyframes blink-cursor {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }
        }

        .dynamic-status-text {
            display: inline-block;
            transition: opacity 0.25s ease, transform 0.25s ease;
        }

        /* Responsive adjustments */
        @media (max-width: 1200px) {
            .pill-top-left {
                left: -25px;
            }

            .pill-top-right {
                right: -25px;
            }

            .pill-bottom-left {
                left: -30px;
            }

            .pill-bottom-right {
                right: -25px;
            }
        }

        @media (max-width: 768px) {
            .hero-image-wrap {
                width: 280px;
                height: 360px;
                border-radius: 140px 140px 28px 28px;
            }

            .pill-top-left {
                left: -10px;
                top: 15px;
            }

            .pill-top-right {
                right: -10px;
                top: 25px;
            }

            .pill-bottom-left {
                left: -10px;
                bottom: 15px;
            }

            .pill-bottom-right {
                right: -10px;
                bottom: 20px;
            }

            .hero-pill-badge {
                padding: 0.5rem 0.75rem;
            }

            .pill-value {
                font-size: 0.76rem;
            }
        }

        /* ==========================================================================
           About Section: Executive Formal Portrait Card (Photo2.png)
           ========================================================================== */
        .about-portrait-card {
            position: relative;
            background: linear-gradient(175deg, rgba(16, 24, 40, 0.95) 0%, rgba(9, 14, 26, 0.98) 100%);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 24px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.8), 0 0 40px rgba(16, 185, 129, 0.12);
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s ease, border-color 0.4s ease;
            user-select: none;
        }

        .about-portrait-card:hover {
            transform: translateY(-6px);
            border-color: rgba(16, 185, 129, 0.45);
            box-shadow: 0 32px 65px -10px rgba(0, 0, 0, 0.9), 0 0 50px rgba(16, 185, 129, 0.25);
        }

        /* Studio Ambient Glow */
        .portrait-glow-backdrop {
            position: absolute;
            top: 15%;
            left: 50%;
            transform: translateX(-50%);
            width: 280px;
            height: 280px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.28) 0%, rgba(6, 182, 212, 0.16) 45%, transparent 70%);
            filter: blur(45px);
            z-index: 1;
            pointer-events: none;
        }

        /* Top Floating Tag */
        .portrait-tag-badge {
            position: absolute;
            top: 16px;
            left: 18px;
            z-index: 5;
            background: rgba(11, 18, 33, 0.88);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(16, 185, 129, 0.4);
            border-radius: 50px;
            padding: 0.35rem 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.45rem;
            font-family: 'JetBrains Mono', monospace;
            font-size: 0.68rem;
            font-weight: 700;
            color: #a7f3d0;
            letter-spacing: 0.06em;
        }

        .status-indicator-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: #10b981;
            box-shadow: 0 0 8px #10b981;
        }

        /* Corner Certification Badge */
        .portrait-badge-corner {
            position: absolute;
            top: 16px;
            right: 18px;
            z-index: 5;
            background: rgba(11, 18, 33, 0.88);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            padding: 0.35rem 0.75rem;
            display: flex;
            align-items: center;
            gap: 0.45rem;
        }

        .corner-icon {
            font-size: 1rem;
        }

        .corner-text .c-sub {
            font-size: 0.58rem;
            color: #94a3b8;
            font-weight: 700;
            display: block;
            font-family: 'JetBrains Mono', monospace;
            line-height: 1.1;
        }

        .corner-text .c-title {
            font-size: 0.76rem;
            color: #34d399;
            font-weight: 800;
            display: block;
            line-height: 1.1;
        }

        /* Main Photo Frame */
        .portrait-frame {
            position: relative;
            z-index: 2;
            width: 100%;
            display: flex;
            justify-content: center;
            padding-top: 3.2rem;
            padding-bottom: 1.5rem;
        }

        .formal-photo {
            width: 80%;
            max-width: 320px;
            height: auto;
            object-fit: contain;
            display: block;
            filter: drop-shadow(0 15px 25px rgba(0, 0, 0, 0.65));
            transition: transform 0.4s ease;
        }

        .about-portrait-card:hover .formal-photo {
            transform: scale(1.03);
        }

        /* Executive Glass Nameplate */
        .portrait-nameplate {
            position: relative;
            z-index: 4;
            width: calc(100% - 28px);
            margin: -35px 14px 14px 14px;
            background: rgba(11, 18, 33, 0.94);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 1rem 1.2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        }

        .nameplate-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.75rem;
        }

        .nameplate-name {
            font-size: 1.12rem;
            font-weight: 800;
            color: #ffffff;
            letter-spacing: -0.01em;
            margin: 0 0 0.15rem 0;
        }

        .nameplate-role {
            font-size: 0.76rem;
            color: #34d399;
            font-weight: 600;
            margin: 0;
        }

        .verified-check {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #10b981;
            color: #070a12;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 900;
            box-shadow: 0 0 12px rgba(16, 185, 129, 0.6);
            flex-shrink: 0;
        }

        .nameplate-stats {
            display: grid;
            grid-template-columns: 1fr auto 1fr auto 1fr;
            align-items: center;
            gap: 0.4rem;
            padding-top: 0.65rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            text-align: center;
        }

        .np-stat .stat-num {
            display: block;
            font-size: 0.9rem;
            font-weight: 800;
            color: #ffffff;
            font-family: 'JetBrains Mono', monospace;
        }

        .np-stat .stat-desc {
            display: block;
            font-size: 0.64rem;
            color: #94a3b8;
            margin-top: 2px;
        }

        .np-divider {
            width: 1px;
            height: 22px;
            background: rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 992px) {
            .about-portrait-card {
                max-width: 440px;
                margin: 0 auto 2rem auto;
            }
        }

        /* ==========================================================================
           Scroll-Triggered Reveal Animations ("Muncul Halus saat Di-Scroll")
           ========================================================================== */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1), transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal-on-scroll.reveal-left {
            transform: translateX(-35px);
        }

        .reveal-on-scroll.reveal-right {
            transform: translateX(35px);
        }

        .reveal-on-scroll.reveal-scale {
            transform: scale(0.92);
        }

        .reveal-on-scroll.is-revealed {
            opacity: 1 !important;
            transform: translate(0, 0) scale(1) !important;
        }

        /* Staggered Delay Utilities */
        .reveal-on-scroll.delay-1 { transition-delay: 0.1s; }
        .reveal-on-scroll.delay-2 { transition-delay: 0.2s; }
        .reveal-on-scroll.delay-3 { transition-delay: 0.3s; }
        .reveal-on-scroll.delay-4 { transition-delay: 0.4s; }
        .reveal-on-scroll.delay-5 { transition-delay: 0.5s; }
        .reveal-on-scroll.delay-6 { transition-delay: 0.6s; }

        /* ==========================================================================
           About Section: Streamlined Highlights & Quick Biodata Pills
           ========================================================================== */
        .about-lead {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #94a3b8;
            margin-bottom: 1.75rem;
        }

        .about-highlights-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 1.75rem;
        }

        .highlight-box {
            display: flex;
            align-items: flex-start;
            gap: 0.85rem;
            background: rgba(16, 24, 40, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            padding: 1rem 1.15rem;
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), border-color 0.3s ease, background 0.3s ease;
        }

        .highlight-box:hover {
            transform: translateY(-3px);
            border-color: rgba(16, 185, 129, 0.4);
            background: rgba(16, 24, 40, 0.95);
        }

        .hl-icon {
            font-size: 1.35rem;
            line-height: 1;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .hl-content {
            display: flex;
            flex-direction: column;
        }

        .hl-title {
            font-size: 0.85rem;
            font-weight: 700;
            color: #fff;
            margin-bottom: 0.2rem;
        }

        .hl-desc {
            font-size: 0.78rem;
            color: #94a3b8;
            line-height: 1.4;
        }

        .about-quick-biodata {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            margin-bottom: 2rem;
        }

        .bio-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 50px;
            padding: 0.4rem 0.85rem;
            font-size: 0.8rem;
            color: #cbd5e1;
            transition: border-color 0.2s ease, background 0.2s ease;
        }

        .bio-pill:hover {
            border-color: rgba(16, 185, 129, 0.35);
            background: rgba(16, 185, 129, 0.06);
        }

        .bio-pill strong {
            color: #fff;
        }

        /* ==========================================================================
           Visual Timeline Cards
           ========================================================================== */
        .timeline-card-wrapper {
            display: flex;
            gap: 1.25rem;
            align-items: flex-start;
        }

        .timeline-icon-box {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.18), rgba(6, 182, 212, 0.08));
            border: 1px solid rgba(16, 185, 129, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            flex-shrink: 0;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        @media (max-width: 640px) {
            .about-highlights-grid {
                grid-template-columns: 1fr;
            }
            .timeline-card-wrapper {
                flex-direction: column;
                gap: 0.75rem;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Dynamic status rotator
            const statusEl = document.querySelector('.dynamic-status-text');
            if (statusEl) {
                const statuses = [
                    'AVAILABLE FOR WORK',
                    'OPEN FOR PROJECTS',
                    'READY TO BUILD',
                    'FULL-STACK DEV'
                ];
                let currentIndex = 0;

                setInterval(() => {
                    statusEl.style.opacity = '0';
                    statusEl.style.transform = 'translateY(-5px)';

                    setTimeout(() => {
                        currentIndex = (currentIndex + 1) % statuses.length;
                        statusEl.textContent = statuses[currentIndex];
                        statusEl.style.opacity = '1';
                        statusEl.style.transform = 'translateY(0)';
                    }, 280);
                }, 3200);
            }

            // Certificate Lightbox Modal Functions
            window.openCertModal = function(imgSrc, title, code, verifyUrl) {
                const modal = document.getElementById('certLightboxModal');
                const modalImg = document.getElementById('certModalImg');
                const modalTitle = document.getElementById('certModalTitle');
                const modalCode = document.getElementById('certModalCode');
                const modalLink = document.getElementById('certModalLink');
                if (!modal) return;

                modalImg.src = imgSrc;
                modalTitle.textContent = title;
                modalCode.textContent = 'Kredensial ID: ' + code;
                modalLink.href = verifyUrl;

                modal.classList.add('active');
                modal.setAttribute('aria-hidden', 'false');
                document.body.style.overflow = 'hidden';
            };

            window.closeCertModal = function() {
                const modal = document.getElementById('certLightboxModal');
                if (!modal) return;
                modal.classList.remove('active');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
            };

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeCertModal();
                }
            });
        });
    </script>
@endpush