# Kerak Telor Rahman

Projek Ujian Praktik Pemrograman Framework - Website Modern Promosi Makanan Khas Daerah Indonesia (DKI Jakarta - Kerak Telor).

## Fitur
- **Tampilan Modern & Responsif**: Menggunakan Tailwind CSS (via CDN) dengan skema warna premium (Merah Gelap #7F1D1D dan Emas #D4AF37).
- **Halaman Depan Dinamis**: Menampilkan daftar menu makanan.
- **Halaman Detail Produk**: Menampilkan detail makanan yang di-generate menggunakan AI.
- **Admin Dashboard**: Autentikasi Admin dan pengelolaan CRUD menu.
- **Validasi Form**: Mencegah input kosong atau harga tidak valid pada form Admin.

## Teknologi
- CodeIgniter 4
- Tailwind CSS
- MySQL Database

## Cara Instalasi
1. Clone repository ini.
2. Buat database baru bernama `ulanganpakrinto` di MySQL.
3. Ubah koneksi database di dalam file `.env` jika diperlukan.
4. Jalankan migrasi dan seeder:
   ```bash
   php spark migrate
   php spark db:seed MenuSeeder
   ```
5. Jalankan server lokal:
   ```bash
   php spark serve
   ```
6. Akses halaman admin di `http://localhost:8080/admin/login` (Username: `admin`, Password: `password123`).

## Catatan
- Gambar ilustrasi di-generate menggunakan AI untuk memberikan visualisasi terbaik dari Kerak Telor khas Betawi.
- Seluruh commit historis disimpan secara bertahap sesuai petunjuk ujian.
