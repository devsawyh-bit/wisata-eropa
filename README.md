# EUROPA — Informasi Wisata Eropa

Website informasi wisata negara-negara di Eropa yang dibuat menggunakan Laravel. Website ini membantu pengunjung mengenal destinasi wisata, kota, kategori, dan deskripsi singkat dari setiap negara.

## Fitur

- Halaman Beranda
- Daftar destinasi wisata Eropa
- Kategori wisata
- Halaman detail destinasi berdasarkan ID
- Halaman Tentang
- Navigasi antarhalaman
- Tampilan responsif dengan Blade Template

## Destinasi Wisata

Website ini menampilkan enam destinasi:

1. Finlandia — Helsinki
2. Skotlandia — Edinburgh
3. Spanyol — Barcelona
4. Prancis — Paris
5. Inggris — London
6. Norwegia — Oslo

## Teknologi

- PHP
- Laravel
- Blade Template
- HTML
- CSS

## Instalasi dan Menjalankan Proyek

1. Clone repository ini.
2. Masuk ke folder proyek:

   ```bash
   cd wisata-eropa
   ```

3. Instal dependensi:

   ```bash
   composer install
   ```

4. Salin `.env.example` menjadi `.env`.
5. Buat application key:

   ```bash
   php artisan key:generate
   ```

6. Jalankan server lokal:

   ```bash
   php artisan serve
   ```

7. Buka `http://127.0.0.1:8000` di browser.

## Catatan

Data destinasi disimpan dalam array pada Controller. Proyek ini tidak menggunakan database untuk menyimpan data destinasi wisata.
