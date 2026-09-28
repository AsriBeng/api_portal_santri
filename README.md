<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 🕌 Santri Portal API

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
```bash
git clone [https://github.com/USERNAME/api_portal_santri.git](https://github.com/USERNAME/api_portal_santri.git)
cd api_portal_santri
