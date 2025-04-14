# Dokumentasi

## Website Kelurahan Taman

Website Kelurahan Taman adalah platform informasi resmi yang digunakan untuk menyampaikan berita, pengumuman, dan layanan digital kepada warga Kelurahaan Taman. Tujuan dari proyek ini adalah untuk membuat situs web berbasis WordPress yang sudah ada menjadi lebih mudah beradaptasi dan mudah dikembangkan dengan mengganti tampilan dan fungsionalitasnya dengan sistem baru yang dibangun dengan kerangka kerja Laravel.

## Tujuan Proyek

- Melakukan migrasi dari WordPress ke Laravel
- Memberikan kontrol penuh terhadap fitur dan tampilan website
- Memudahkan admin kelurahan dalam mengelola konten

## Fitur Utama

- **Manajemen Navbar Menu**
  - Menambah, menghapus, dan mengedit menu navigasi sesuai kebutuhan

- **Manajemen Berita / Blog**
  - Tambah berita baru
  - Edit berita yang sudah ada
  - Hapus berita
  - Tampilkan daftar berita ke publik

## ⚙️ Teknologi yang Digunakan

- Laravel 11
- PHP 8.4.3
- Blade Template Engine
- Tailwind CSS

## 🛠️ Cara Install & Menjalankan Project

```bash
# Clone repo
git clone https://github.com/monichaochaa/Project-Website-Kelurahan.git
cd website-kelurahan-taman (sesuai nama proyek yang disimpan)

# Install dependencies
composer install

# Copy .env dan atur database
cp .env.example .env
php artisan key:generate

# Jalankan migrasi database (jika sudah dibuat)
php artisan migrate

# Jalankan server lokal
php artisan serve
