<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // 1. SEED EXPERIENCES (Pendidikan, Pekerjaan, Pelatihan, Sertifikasi)
        $experiences = [
            [
                'type' => 'education',
                'title' => 'S1 - Teknik Informatika',
                'institution' => 'Universitas Pamulang',
                'period' => '2022 - 2026',
                'location' => 'Serpong, Serpong, KOTA TANGERANG SELATAN, BANTEN',
                'score' => 'IPK: 3.73',
                'description' => 'Mempelajari pengembangan perangkat lunak, pemrograman, basis data, analisis data, serta penerapan teknologi informasi. Telah menyelesaikan seluruh rangkaian perkuliahan dan menunggu jadwal wisuda pada 13 September 2026.',
                'badge' => 'Wisuda 13 September 2026',
                'sort_order' => 1,
            ],
            [
                'type' => 'education',
                'title' => 'SMK - ADMINISTRASI PERKANTORAN',
                'institution' => 'SMK KHARISMAWITA 462',
                'period' => '2015 - 2018',
                'location' => 'Bojongsari, Bojongsari, KOTA DEPOK, JAWA BARAT',
                'score' => 'Nilai: 85',
                'description' => 'Mempelajari tata kelola administrasi perkantoran, korespondensi, kearsipan dokumen digital, manajemen waktu, serta pengoperasian perangkat lunak produktivitas komputer.',
                'badge' => 'Lulusan Terbaik',
                'sort_order' => 2,
            ],
            [
                'type' => 'work',
                'title' => 'Magang PUSDIKLAT BPS',
                'institution' => 'Pusdiklat BPS (Badan Pusat Statistik)',
                'period' => 'Jan 2026 - Mar 2026',
                'location' => 'Pasar Minggu, KOTA ADM. JAKARTA SELATAN, DKI JAKARTA',
                'score' => 'Internship',
                'description' => 'Melaksanakan kegiatan magang di Pusdiklat BPS dengan membantu pengolahan dan pengelolaan data kediklatan, administrasi operasional, serta mendukung kebutuhan teknologi informasi untuk menunjang kelancaran kegiatan operasional instansi.',
                'badge' => 'Internship',
                'sort_order' => 1,
            ],
            [
                'type' => 'training',
                'title' => 'PKM UNPAM DAN SMK AL-HIDAYAH CIPUTAT',
                'institution' => 'PENGABDIAN KEPADA MASYARAKAT (PKM) UNPAM BERSAMA SMK AL-HIDAYAH CIPUTAT',
                'period' => 'Mar 2024 - Jul 2024',
                'location' => 'Ciputat, Ciputat, KOTA TANGERANG SELATAN, BANTEN',
                'score' => 'TEKNOLOGI INFORMASI DAN KOMUNIKASI - PEMROGRAMAN',
                'description' => 'Memimpin pelaksanaan kegiatan Pengabdian kepada Masyarakat (PKM) Universitas Pamulang di SMK Al-Hidayah Ciputat, mengoordinasikan tim, mengatur pelaksanaan kegiatan, serta berperan dalam memberikan edukasi dan berbagi pengetahuan mengenai fundamental pemrograman kepada para siswa.',
                'badge' => 'Ketua Tim PKM',
                'sort_order' => 1,
            ],
            [
                'type' => 'training',
                'title' => 'SEMINAR KAMPUS PRODI TEKNIK INFORMATIKA UNPAM',
                'institution' => 'Universitas Pamulang',
                'period' => 'Jul 2022 - Jul 2026',
                'location' => 'Serpong, Serpong, KOTA TANGERANG SELATAN, BANTEN',
                'score' => 'TEKNOLOGI INFORMASI DAN KOMUNIKASI - PEMROGRAMAN',
                'description' => 'Mengikuti seminar Program Studi Teknik Informatika untuk menambah wawasan dan pengetahuan di bidang teknologi informasi serta memperoleh pemahaman komprehensif mengenai perkembangan teknologi dan dunia profesional industri rekayasa perangkat lunak.',
                'badge' => 'Pengembangan Diri',
                'sort_order' => 2,
            ],
            [
                'type' => 'certification',
                'title' => 'LEMBAGA SERTIFIKASI PROFESI UNPAM',
                'institution' => 'LSP UNPAM & BNSP',
                'period' => 'Jan 2026 - Feb 2026',
                'location' => 'Universitas Pamulang',
                'score' => 'Nilai: 85 (Kompeten)',
                'description' => 'Uji kompetensi profesi bidang pemrograman dan rekayasa teknologi informasi dengan standar Badan Nasional Sertifikasi Profesi (BNSP), membuktikan kualifikasi dan keahlian teknis dalam pengembangan aplikasi.',
                'badge' => 'Certified Professional',
                'sort_order' => 1,
            ],
        ];

        foreach ($experiences as $item) {
            Experience::create($item);
        }

        // 2. SEED SKILLS
        $skills = [
            [
                'name' => 'Laravel Framework',
                'category' => 'backend',
                'level' => 'Core Expert',
                'icon' => 'laravel',
                'description' => 'MVC architecture, Eloquent ORM, Authentication, Blade Templating, REST API, Middleware, Routing',
                'sort_order' => 1,
            ],
            [
                'name' => 'PHP',
                'category' => 'backend',
                'level' => 'Core Expert',
                'icon' => 'php',
                'description' => 'Modern OOP PHP 8.1+, Composer, Design Patterns, Security, PDO, Exception Handling',
                'sort_order' => 2,
            ],
            [
                'name' => 'MySQL Database',
                'category' => 'database',
                'level' => 'Core',
                'icon' => 'mysql',
                'description' => 'Relational database design, Normalization, Query optimization, Indexes, Foreign keys',
                'sort_order' => 3,
            ],
            [
                'name' => 'JavaScript (ES6+)',
                'category' => 'frontend',
                'level' => 'Core',
                'icon' => 'javascript',
                'description' => 'DOM Manipulation, Fetch API & AJAX, Async/Await, Modular JS, Event Listeners',
                'sort_order' => 4,
            ],
            [
                'name' => 'HTML5 & CSS3',
                'category' => 'frontend',
                'level' => 'Core Expert',
                'icon' => 'html5',
                'description' => 'Semantic HTML, Responsive Layouts, Flexbox, CSS Grid, Custom Properties, Glassmorphism',
                'sort_order' => 5,
            ],
            [
                'name' => 'Tailwind CSS & Bootstrap',
                'category' => 'frontend',
                'level' => 'Core',
                'icon' => 'css3',
                'description' => 'Utility-first styling, Dark mode implementation, UI Components, Modern Aesthetics',
                'sort_order' => 6,
            ],
            [
                'name' => 'RESTful API & Integration',
                'category' => 'backend',
                'level' => 'Core',
                'icon' => 'api',
                'description' => 'JSON API design, Endpoints routing, Postman testing, Webhook handling, API documentation',
                'sort_order' => 7,
            ],
            [
                'name' => 'Git & GitHub',
                'category' => 'tools',
                'level' => 'Core',
                'icon' => 'git',
                'description' => 'Version control, Branching workflows, Repository management, Commits & Pull requests',
                'sort_order' => 8,
            ],
            [
                'name' => 'Node.js & NPM',
                'category' => 'tools',
                'level' => 'Intermediate',
                'icon' => 'nodejs',
                'description' => 'Package management, NPM scripts, Frontend tooling, Basic backend servers',
                'sort_order' => 9,
            ],
            [
                'name' => 'Laragon & Web Server',
                'category' => 'tools',
                'level' => 'Core',
                'icon' => 'server',
                'description' => 'Apache, Nginx, Local virtual hosts, PHP environment configuration',
                'sort_order' => 10,
            ],
        ];

        foreach ($skills as $item) {
            Skill::create($item);
        }

        // 3. SEED PROJECTS
        $projects = [
            [
                'title' => 'Posyandu Belimbing (Proyek Skripsi - Klasifikasi KNN)',
                'slug' => 'posyandu-belimbing-knn',
                'category' => 'Full-Stack Web App',
                'summary' => 'Sistem informasi pelayanan posyandu dan pemantauan stunting/gizi balita terintegrasi klasifikasi otomatis menggunakan metode K-Nearest Neighbor (K-NN). Proyek Skripsi S1 Teknik Informatika.',
                'description' => 'Aplikasi web komprehensif yang dirancang untuk kader dan tenaga kesehatan Posyandu Belimbing. Mengintegrasikan pencatatan penimbangan balita, rekam medis imunisasi, visualisasi grafik KMS, serta algoritma K-Nearest Neighbor (K-NN) untuk klasifikasi status gizi anak secara otomatis dan akurat.',
                'technologies' => ['Laravel', 'PHP 8.1', 'MySQL', 'Metode K-NN', 'Bootstrap 5', 'JavaScript'],
                'thumbnail' => '/images/PosyanduBelimbing-KNN.png',
                'demo_url' => 'https://posyandubelimbing.tplp004.com/',
                'github_url' => 'https://github.com/andriyan26/Portofolio-Andrian',
                'featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Kancil Rental Kamera & Alat Fotografi',
                'slug' => 'kancil-rental-kamera',
                'category' => 'Full-Stack Web App',
                'summary' => 'Platform web rental dan penyewaan kamera, lensa, dan perlengkapan fotografi profesional dengan katalog unit, ketersediaan jadwal sewa, dan manajemen reservasi.',
                'description' => 'Website penyewaan alat fotografi dan videografi profesional yang memudahkan fotografer dan kreator konten memilih peralatan kamera, lensa premium, lighting, serta melakukan reservasi tanggal sewa secara online dengan integrasi konfirmasi instan.',
                'technologies' => ['Laravel', 'PHP 8.1', 'MySQL', 'JavaScript ES6', 'CSS3 Modern', 'Bootstrap 5'],
                'thumbnail' => '/images/RentalKamera.png',
                'demo_url' => 'https://rentalkamera.tplp004.com/',
                'github_url' => 'https://github.com/andriyan26/Portofolio-Andrian',
                'featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Portofolio Pribadi Modern (AndriDev.)',
                'slug' => 'portofolio-pribadi-modern',
                'category' => 'Full-Stack Web App',
                'summary' => 'Website portofolio full-stack yang dibangun menggunakan framework Laravel 10 dengan arsitektur MVC bersih, estetika modern dark theme, verifikasi sertifikat resmi SoloLearn, dan performa tinggi.',
                'description' => 'Aplikasi web portofolio personal yang dirancang khusus untuk memamerkan karya digital, sertifikasi resmi SoloLearn, rekam jejak akademik di Universitas Pamulang, serta kemampuan rekayasa perangkat lunak full-stack.',
                'technologies' => ['Laravel 10', 'PHP 8.1', 'MySQL', 'JavaScript ES6', 'CSS3 Modern', 'Blade'],
                'thumbnail' => '/images/projects/portfolio-preview.webp',
                'demo_url' => 'http://portofolio-andrian',
                'github_url' => 'https://github.com/andriyan26/Portofolio-Andrian',
                'featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Sistem Informasi Manajemen Kantor & Data Kediklatan',
                'slug' => 'sistem-informasi-manajemen-kantor',
                'category' => 'Enterprise System',
                'summary' => 'Aplikasi manajemen operasional kantor dengan fitur pengolahan data terstruktur, rekapitulasi pelatihan, dashboard statistik, dan ekspor laporan.',
                'description' => 'Terinspirasi dari pengalaman magang di Pusdiklat BPS, sistem ini dikembangkan untuk mengotomatisasi pendataan peserta, jadwal pelatihan, kearsipan data digital, serta visualisasi data operasional ke dalam grafik analitik yang mudah dipahami.',
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Chart.js', 'Bootstrap', 'JavaScript'],
                'thumbnail' => '/images/projects/office-management.webp',
                'demo_url' => '#',
                'github_url' => 'https://github.com/andriyan26/Portofolio-Andrian',
                'featured' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'WhatsApp Bot & Notification Gateway',
                'slug' => 'whatsapp-bot-notification-gateway',
                'category' => 'API & Automation',
                'summary' => 'Layanan otomatisasi pesan dan bot interaktif WhatsApp untuk membantu broadcast notifikasi dan respon cepat pertanyaan pelanggan.',
                'description' => 'Solusi bot otomatisasi berbasis web yang terhubung dengan API WhatsApp untuk memfasilitasi pengiriman pesan notifikasi otomatis saat terjadi transaksi, tiket bantuan baru, serta auto-reply pertanyaan umum 24/7.',
                'technologies' => ['Laravel API', 'Node.js', 'Webhooks', 'MySQL', 'REST API'],
                'thumbnail' => '/images/projects/whatsapp-bot.webp',
                'demo_url' => '#',
                'github_url' => 'https://github.com/andriyan26/Portofolio-Andrian',
                'featured' => true,
                'sort_order' => 5,
            ],
            [
                'title' => 'Toko Online E-Commerce Responsif',
                'slug' => 'toko-online-e-commerce',
                'category' => 'Full-Stack Web App',
                'summary' => 'Platform penjualan online responsif dengan fitur keranjang belanja interaktif, katalog kategori dinamis, dan sistem checkout pesanan.',
                'description' => 'Platform toko online modern yang memungkinkan pelanggan menjelajahi katalog produk, menyaring berdasarkan kategori, menambahkan barang ke keranjang secara dinamis, dan melakukan pemesanan langsung. Panel admin memudahkan manajemen produk, stok, dan invoice transaksi.',
                'technologies' => ['Laravel', 'MySQL', 'JavaScript', 'CSS3', 'REST API', 'Bootstrap'],
                'thumbnail' => '/images/projects/ecommerce-preview.webp',
                'demo_url' => '#',
                'github_url' => 'https://github.com/andriyan26/Portofolio-Andrian',
                'featured' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($projects as $item) {
            Project::create($item);
        }
    }
}
