<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 🕌 Portal Santri API

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.3" />
  <img src="https://img.shields.io/badge/Laravel-13.33.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 13" />
  <img src="https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/Authentication-Sanctum-F4645F?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel Sanctum" />
</p>

Backend RESTful API modern dan berkinerja tinggi untuk ekosistem **Portal Santri Mobile**. Dibangun dengan kombinasi **PHP 8.3** dan **Laravel 13.33.0**, API ini dirancang untuk menangani otentikasi multi-role berbasis token secara aman, efisien, dan fleksibel.

---

## 🌟 Fitur Utama API

- 🔐 **Token-Based Authentication**: Menggunakan Laravel Sanctum untuk manajemen sesi login mobile (Flutter) yang aman.
- 👥 **Multi-Role User Management**: Mendukung hirarki hak akses pengguna terstruktur:
  - **Admin**: Pengelola penuh sistem
  - **Bendahara**: Keuangan & pembayaran SPP
  - **Sekretaris**: Administrasi & perizinan
  - **Ustadz**: Pengajar & pencatatan hafalan/tahfizh
  - **Santri**: Pengguna santri / wali santri
- ⚡ **Lightweight & High Performance**: Arsitektur API bersih, modular, dan terstruktur sesuai standar REST API modern.

---

## 🚀 Tech Stack

- **Language**: PHP 8.3
- **Framework**: Laravel 13.33.0
- **Database**: MySQL / MariaDB
- **Authentication**: Laravel Sanctum

---

## 🛠️ Panduan Instalasi Lokal

### 1. Prasyarat Sistem
Pastikan perangkat kamu sudah terinstal:
- PHP >= 8.3
- Composer >= 2.x
- MySQL Database

### 2. Clone Repositori
git clone https://github.com/USERNAME/api_portal_santri.git
cd api_portal_santri

### 3. Install Dependensi
composer install

### 4. Konfigurasi Environment
Salin file .env.example menjadi .env:
cp .env.example .env

Buka file .env dan atur konfigurasi database kamu:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_santri_portal
DB_USERNAME=root
DB_PASSWORD=

### 5. Generate Application Key & Jalankan Migrasi + Seed
php artisan key:generate
php artisan migrate:fresh --seed

### 6. Jalankan Server Lokal
php artisan serve

Server API kamu sekarang berjalan di http://127.0.0.1:8000.

---

## 🔑 Akun Seeder Default untuk Pengujian

Setiap akun dibekali dengan password default: 1234567890

| ID Role | Role | Email | Password Default |
| :---: | :--- | :--- | :--- |
| **1** | **Admin** | admin@gmail.com | 1234567890 |
| **2** | **Bendahara** | bendahara@gmail.com | 1234567890 |
| **3** | **Sekretaris** | sekretaris@gmail.com | 1234567890 |
| **4** | **Santri** | santri@gmail.com | 1234567890 |
| **5** | **Ustadz** | ustadz@gmail.com | 1234567890 |

---

## 📌 Endpoint API Autentikasi

### 1. Login
- **Endpoint**: POST /api/login
- **Headers**:
  Accept: application/json
  Content-Type: application/json
- **Body Request**:
  {
    "email": "admin@gmail.com",
    "password": "1234567890"
  }

### 2. Get Profile (Protected)
- **Endpoint**: GET /api/me
- **Headers**:
  Authorization: Bearer <YOUR_SANCTUM_TOKEN>
  Accept: application/json

### 3. Logout (Protected)
- **Endpoint**: POST /api/logout
- **Headers**:
  Authorization: Bearer <YOUR_SANCTUM_TOKEN>
  Accept: application/json

---

## 🛡️ Security Vulnerabilities

If you discover a security vulnerability within this application, please send an e-mail to Taylor Otwell via taylor@laravel.com. All security vulnerabilities will be promptly addressed.

---

## 📄 License

The Laravel framework and this project are open-sourced software licensed under the MIT license (https://opensource.org/licenses/MIT).
