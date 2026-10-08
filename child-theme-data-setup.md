# Alur Isi Data Child Theme Velocity MP (Iklan Baris)

Demo: https://mp.velocitydeveloper.com — marketplace iklan baris gaya OLX (pengunjung daftar, lalu pasang iklan sendiri).

## Plugin

- Wajib aktif: **Velocity Addons** dan **Velocity Iklan** (post type `iklan`, taksonomi **Kategori Iklan** & **Lokasi Iklan**, form pasang iklan, pencarian).
- **Kirki**, **VD Store**, dan **VD Marketplace** **tidak diperlukan** (VD Store/VD Marketplace dipakai tema lain, `velocity-marketplace-child`).
- Saat Velocity Iklan diaktifkan, halaman **Akun Saya** (`akun-saya`) dan **Pencarian Iklan** (`cari-iklan`) dibuat otomatis. **Jangan ubah slug-nya**: form pencarian di header mengarah ke `/cari-iklan` dan menu akun ke `/akun-saya`.

## Customize

1. Set halaman **Beranda** sebagai halaman depan (Settings › Reading › A static page), template **"No Title"**. Isinya lihat bagian Halaman › Beranda.
2. **Site Identity**: **Logo** = logo klien ukuran ±**320 x 81 px** (tampil di kiri header, sejajar menu), site title, tagline, site icon.
   - Apabila warna logo tidak kontras dengan latar putih header, berikan **background/pelat** di belakang logo.
3. **Header Image**: banner tipis di **atas** header, ukuran **870 x 90 px**, di atas latar warna utama.
   - Opsional; apabila tidak ada banner dari client, buat banner promosi sederhana (mis. "Pasang Iklan Gratis") atau kosongkan.
4. **Warna**: **Primary Color** = warna utama (latar kotak pencarian di bawah header, latar Header Image, tombol). Demo **#f3aa05**; sesuaikan dengan warna logo client.
5. Seksi bernama sesuai nama tema (dari plugin Velocity Iklan) › **Banner Single Iklan**: gambar di samping detail iklan, ukuran **262 x 399 px** (demo: ajakan pasang iklan).
6. **Menus**: menu di lokasi **Primary Menu**: **Beranda**, **Tentang Kami**, **Iklan** (Custom Link `/iklan/` = arsip semua iklan).
   - Link akun (Iklan Saya, Pasang Iklan, Profil) ditambahkan otomatis oleh Velocity Iklan, tidak perlu dibuat manual.

## Pengunjung & Akun

- Settings › General: centang **Anyone can register**, **New User Default Role = Subscriber**. Pengunjung yang login membuat iklan lewat **Akun Saya › Pasang Iklan** (`/akun-saya/?hal=pasang-iklan`).

## Kategori & Lokasi Iklan

- **Kategori Iklan** (`kategori`): kategori induk + subkategori, mis. Elektronik › Laptop, Mobil › Rental, Property › Apartemen. Demo: Elektronik, Fashion, Hobi, Industri, Loker, Mobil, Motor, Property.
  - Setiap **kategori induk wajib punya gambar ikon** (kolom gambar di halaman edit kategori), ikon persegi **±60 x 60 px**, PNG latar transparan. Ikon tampil di grid kategori beranda.
  - Kategori induk tampil di beranda **hanya bila ada iklan** di dirinya atau di subkategorinya.
  - Sesuaikan kategori dengan bidang usaha client (ambil dari form isian website); hapus kategori demo yang tidak relevan.
- **Lokasi Iklan** (`lokasi`): provinsi sebagai induk (dipakai pilihan "Semua Lokasi" pada pencarian), kota/kabupaten sebagai anak.

## Iklan

- Isi iklan di menu **Iklan** (post type `iklan`) atau lewat form Pasang Iklan: **Judul**, **Deskripsi**, **Gambar** (foto utama, wajib), **Gallery** (foto lain), **Harga** (angka saja, mis. `325000`), **Kategori** (pilih subkategori), **Lokasi**, **Alamat Lengkap**, dan **Detail** (satu baris per spesifikasi, format `Nama=Nilai`, mis. `Kondisi=Baru`).
- Iklan **Premium** (meta `jenis` = `premium`) tampil lebih dulu di hasil pencarian.
- Minimal **8 iklan contoh** tersebar di beberapa kategori agar grid kategori beranda dan arsip iklan terlihat penuh.

## Halaman

- **Beranda** (template "No Title"): blok **Columns 66/33**:
  - kolom kiri: shortcode `[velocity-iklan-kategori]` (grid kategori induk + ikon);
  - kolom kanan (latar **#f5f5f5**, padding 20px): judul "Mudah, Murah, Cepat!", daftar keunggulan, dan tombol **Pasang Iklan** (warna utama) ke `/akun-saya/?hal=pasang-iklan`.
- **Pencarian Iklan** (`cari-iklan`, template Empty): berisi `[velocity-iklan-filter]`.
- **Akun Saya** (`akun-saya`, template Empty): berisi `[velocity-iklan-profile]`.
- **Tentang Kami**: profil singkat marketplace client (2 paragraf).

## Header

- Urutan header: Header Image (bila ada) → logo + menu → kotak pencarian iklan (`[velocity-iklan-search]`: lokasi, kategori, kata kunci) — otomatis dari tema, tidak perlu diisi.

## Widgets

- Tema ini **tidak memakai Main Sidebar** (dinonaktifkan child theme).
- **Footer Widget 1–4** (demo):
  1. **Image**: logo klien kecil (±200 x 51 px), link ke beranda.
  2. **Text**: link Iklan, Tentang Kami, Artikel.
  3. **Text**: link 3 kategori iklan.
  4. **Text**: link 3 kategori iklan lainnya.
- Footer menampilkan copyright otomatis.

## Artikel

- Opsional: kategori **Artikel** dengan minimal 3 tulisan (tips jual beli), ditautkan dari footer.
