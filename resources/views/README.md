<div align="center">

# 🌷 Laravel Portfolio ✨  
### by **ALIN**  
*“Sedikit pusing, tapi akhirnya berhasil juga~”* 💪😆

![Laravel](https://img.shields.io/badge/Laravel-10.x-ff2d20?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-orange?logo=mysql)
![Status](https://img.shields.io/badge/Status-Finished-success)

</div>

---

## 💫 Tentang Project
Project ini adalah **website portofolio pribadi** yang aku buat dengan framework **Laravel**.  
Isinya ada profil, CRUD aktivitas, form kontak, dan sistem login admin — semua dikerjain dengan penuh perjuangan, ngantuk, dan kopi 😭☕  

Dibuat untuk **tugas Framework Laravel – Pertemuan 6 (Deploy ke GitHub)**.

---

## 🚀 Fitur Utama
- ✨ Landing Page & Profil
- 🗂️ CRUD Aktivitas (Tambah, Edit, Hapus)
- 🔐 Login & Logout Admin
- 💌 Form Kontak tersimpan di database
- 📱 Responsive dan tampilan modern

---

## 🧰 Teknologi yang Dipakai
- **Laravel 10.x**
- **PHP 8+**
- **MySQL / MariaDB**
- **Composer**
- **Blade Template + Custom CSS**

---

## ⚙️ Cara Menjalankan Project (Langkah demi langkah)

Langkah-langkah di bawah ini untuk menjalankan project Laravel di komputer lokal kamu 👇  

### 1️⃣ Clone Repository dari GitHub
Unduh salinan project dari repo GitHub ke komputer kamu:
```bash
git clone https://github.com/avvlinnn/laravel-portofolio.git
Setelah itu masuk ke folder project-nya:

bash
Salin kode
cd laravel-portofolio
2️⃣ Install Dependency Laravel
Laravel butuh beberapa library biar bisa jalan. Jalankan:

bash
Salin kode
composer install
Ini bakal ngunduh semua paket PHP yang dibutuhkan oleh Laravel.

3️⃣ Copy File Environment
Laravel pakai file .env buat nyimpen pengaturan penting seperti database.
Bikin salinan dari file contoh:

bash
Salin kode
cp .env.example .env
Lalu buka file .env itu dan atur koneksi database kamu:

makefile
Salin kode
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
4️⃣ Generate Application Key
Laravel butuh application key untuk keamanan session & enkripsi data.
Jalankan perintah ini:

bash
Salin kode
php artisan key:generate
Setelah ini, key akan otomatis ditambahkan ke file .env.

5️⃣ Jalankan Server Laravel
Sekarang saatnya menyalakan server Laravel:

bash
Salin kode
php artisan serve
Setelah muncul tulisan Server running on [http://127.0.0.1:8000],
buka link itu di browser kamu, dan... 🎉 project siap dijalankan!

👩🏻‍💻 Developer
Dibuat oleh ALIN (2023150016)
Mahasiswa Fastikom Unsiq 🖤
“Belajar sambil panik, tapi tetep jalan terus.” 😭🔥

<div align="center">
✨ “Setiap error pasti ada hikmahnya... setelah 3 jam Googling.” ✨

</div> ```
