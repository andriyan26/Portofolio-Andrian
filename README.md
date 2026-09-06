# Portofolio-Andrian 🚀

> **Portofolio Resmi Andrian** — *Full-Stack Developer & Software Engineer* lulusan S1 Teknik Informatika Universitas Pamulang (IPK: 3.73).

Website portofolio modern dengan estetika *dark-mode*, efek *glassmorphism*, interaktivitas kursor dinamis, animasi *scroll-reveal* bertahap, serta verifikasi kredensial sertifikasi resmi SoloLearn.

---

## 🌟 Fitur Utama

- **🎨 Premium Dark Theme & Glassmorphism**: Desain responsif, modern, dan elegan dengan aksen warna Emerald (`#10b981`) dan Cyan (`#06b6d4`).
- **🖱️ Interactive Cursor Glow & Spotlight**: Sorotan cahaya dinamis yang mendeteksi dan mengikuti koordinat kursor mouse saat menjelajahi kartu komponen.
- **✨ Smooth Scroll-Reveal Animation**: Transisi *fade-in & slide-up* bertahap (*staggered*) saat setiap bagian halaman di-scroll oleh pengunjung.
- **📜 Sertifikasi Resmi SoloLearn**:
  - **HTML Course** (ID: `CC-4QAZO7VP`) — [Verifikasi](https://www.sololearn.com/certificates/CC-4QAZO7VP)
  - **CSS Course** (ID: `CC-T7GAIGRZ`) — [Verifikasi](https://www.sololearn.com/certificates/CC-T7GAIGRZ)
  - **JavaScript Course** (ID: `CC-G7CPXGBP`) — [Verifikasi](https://www.sololearn.com/certificates/CC-G7CPXGBP)
  - **JavaScript Intermediate** (ID: `CC-FOGV1OIK`) — [Verifikasi](https://www.sololearn.com/certificates/CC-FOGV1OIK)
  - Dilengkapi fitur **Lightbox Modal Viewer** untuk melihat sertifikat asli dalam resolusi tinggi.
- **💼 Riwayat Interaktif (Timeline)**: Tab dinamis untuk Pendidikan, Pengalaman Kerja, Pelatihan & PKM, serta Sertifikasi Profesi BNSP.
- **💻 Showcase Proyek**: Galeri proyek terpilih dengan pemfilteran kategori (Full-Stack, Web App, dsb.) dan tautan diskusi proyek.
- **📨 Formulir Kontak Terintegrasi**: Formulir pesan langsung terhubung ke database dan nomor WhatsApp resmi.

---

## 🛠️ Tech Stack

- **Backend**: PHP 8.1+, Laravel 9 / 10
- **Database**: MySQL 8.0+
- **Frontend**: HTML5 Semantik, Vanilla Modern CSS (Flexbox, Grid, Custom Properties, Glassmorphism), Vanilla JavaScript (ES6+, IntersectionObserver, Canvas/RAF)
- **Tooling & Environment**: Laragon, Apache, Git

---

## 🚀 Panduan Instalasi Lokal

1. **Clone repositori**:
   ```bash
   git clone https://github.com/andriyan26/Portofolio-Andrian.git
   cd Portofolio-Andrian
   ```

2. **Install dependensi Composer**:
   ```bash
   composer install
   ```

3. **Konfigurasi Environment**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi Database** di file `.env`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Migrasi & Seed Data Awal**:
   ```bash
   php artisan migrate --seed
   ```

6. **Jalankan Aplikasi**:
   ```bash
   php artisan serve
   ```
   Akses melalui browser di `http://127.0.0.1:8000` atau melalui domain lokal Laragon Anda.

---

## 📬 Kontak & Hubungi

- **Nama**: Andrian
- **Lokasi**: Sawangan, Depok, Jawa Barat
- **WhatsApp**: [+62 856-9052-928](https://wa.me/628569052928)
- **Email**: andriandowehz123@gmail.com
- **LinkedIn**: [linkedin.com/in/andriyan26](https://linkedin.com/in/andriyan26)
- **GitHub**: [github.com/andriyan26](https://github.com/andriyan26)

---

&copy; 2026 Andrian. All Rights Reserved.
