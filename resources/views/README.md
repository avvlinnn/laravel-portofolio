<div align="center">

#  Laravel Portfolio 🌙
**By Alin**  

*A minimalist portfolio website built with Laravel.*  

![Laravel](https://img.shields.io/badge/Laravel-10.x-2c2c2c?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-36454F?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-2e3b45?logo=mysql)
![Status](https://img.shields.io/badge/Status-Selesai-4a4a4a)

</div>

---

## 🖤 Tentang Project
Project ini adalah **website portofolio pribadi** yang dibuat menggunakan **Laravel Framework**.  
Isinya mencakup halaman profil, manajemen aktivitas (CRUD), form kontak, dan sistem login admin.  
Dibuat dengan gaya tampilan yang sederhana, gelap, dan modern agar tetap nyaman dilihat.

---

## ✨ Fitur Utama
- Halaman profil & landing page  
- CRUD aktivitas (Tambah, Edit, Hapus)  
- Login & Logout admin  
- Form kontak yang tersimpan di database  
- Desain responsive dan minimalis  

---

## ⚙️ Teknologi yang Digunakan
- Laravel 10.x  
- PHP 8+  
- MySQL / MariaDB  
- Composer  
- Blade Template & Custom CSS  

---

## 🧩 Cara Menjalankan Project di Lokal

### 1️⃣ Clone Repository
Unduh project dari GitHub ke komputer kamu:
```bash
git clone https://github.com/avvlinnn/laravel-portofolio.git
cd laravel-portofolio
```

2️⃣ Install Dependency
Jalankan perintah berikut untuk menginstal library Laravel:

```bash
composer install
```

3️⃣ Konfigurasi File Environment
Salin file contoh:

```bash
cp .env.example .env
```
Lalu buka file .env dan sesuaikan bagian database:
```bash
makefile
```

```bash
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

4️⃣ Generate Application Key
Buat kunci aplikasi Laravel agar sistem keamanan aktif:

```bash
php artisan key:generate
```

5️⃣ Jalankan Server
Nyalakan server Laravel lokal:

```bash
php artisan serve
```
Buka di browser: http://127.0.0.1:8000

👩🏻‍💻 Developer
Awalin Nisa' (2023150016)
Mahasiswa Fastikom Unsiq

