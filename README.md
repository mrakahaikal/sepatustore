# 👟 SepatuStore — Toko Sepatu Online dengan TALL Stack

SepatuStore adalah aplikasi web toko sepatu modern berbasis TALL Stack (Tailwind CSS, Alpine.js, Laravel, dan Livewire), dirancang untuk memberikan pengalaman belanja mobile-first yang cepat dan intuitif. Proyek ini mengutamakan scalability dan maintainability melalui penerapan Repository Pattern dan penggunaan Filament sebagai admin panel modular.

## ✨ Fitur Unggulan

-   📱 UI Mobile-First: Desain responsif, fokus pada pengalaman pengguna seluler.

-   🛒 Session-Based Checkout: Pemesanan produk tanpa akun, mendukung satu pesanan dalam satu sesi.

-   🗄️ Repository Pattern: Arsitektur backend terpisah yang mudah diuji dan dikembangkan.

-   ⚡ Livewire Components: Interaktivitas dinamis tanpa perlu JavaScript berat.

-   🧑‍💼 Admin Panel dengan Filament: CRUD siap pakai dan kustomisasi panel backend.

-   📝 CMS Blog SEO-Friendly: Fitur postingan blog untuk meningkatkan visibilitas pencarian organik.

-   🔒 Middleware Proteksi Akses: Akses halaman admin hanya untuk user terotentikasi.

## ⚙️ Teknologi

| Teknologi | Fungsi                                   |
| --------- | ---------------------------------------- |
| Laravel   | Backend utama & routing                  |
| Livewire  | Komponen dinamis tanpa JavaScript manual |
| Filament  | Admin panel berbasis Laravel             |
| Alpine.js | Interaktivitas ringan di sisi frontend   |
| Tailwind  | CSS Utility-first styling                |
| SQLite    | Database relasional                      |

## 🧱 Arsitektur

-   Folder Repositories/ berisi kontrak dan implementasi logic data.

-   Livewire digunakan untuk interaksi komponen real-time seperti pemesanan dan tampilan produk.

-   Admin panel dikonfigurasi via Filament Resource untuk produk & blog.

-   Blog engine mendukung Markdown & SEO Meta (slug, tag, dsb).

## 🚀 Instalasi Lokal

```bash
git clone https://github.com/mrakahaikal/sepatustore.git
cd sepatustore

# Instalasi dependensi

composer install
npm install && npm run build

# Konfigurasi environment

cp .env.example .env
php artisan key:generate

# Migrasi database

php artisan migrate --seed

# Jalankan server

php artisan serve
```

> Note: Proyek ini menggunakan SQLite sebagai basis datanya. Anda bisa menggunakan MySQL, PostgreSQL, atau RDBMS kesukaan Anda dan PHP 8.2+ tersedia di lingkungan pengembangan lokal.

## 🧪 Rencana Pengembangan

-   [ ] Multi-item cart session

-   [ ] Integrasi payment gateway (simulasi)

## 📸 Cuplikan

-

## 🧑‍💻 Kontributor

Proyek dikembangkan oleh Raka Haikal, Laravel & .NET enthusiast.
