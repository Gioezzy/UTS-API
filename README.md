# 📝 UTS Konstruksi dan Evolusi Perangkat Lunak

- **Nama** : Giovanni Yuda Prastika
- **NIM**  : 2311082019
- **Kelas**: TRPL 2C

# 🌸 Anime Explorer — Laravel + RapidAPI (MyAnimeList)

[![Laravel](https://img.shields.io/badge/Laravel-10.x-red.svg)](https://laravel.com)
[![License](https://img.shields.io/github/license/namamu/anime-explorer.svg)](LICENSE)
[![MyAnimeList API](https://img.shields.io/badge/API-MyAnimeList-blue.svg)](https://rapidapi.com/pyuser/api/myanimelist-api1)

Anime Explorer adalah aplikasi web berbasis Laravel yang mengkonsumsi MyAnimeList API (via RapidAPI) untuk menampilkan informasi anime populer, musiman, dan rekomendasi secara real-time. UI responsif, data diambil langsung dari API, dan ditampilkan menggunakan DataTables.

---

## ✨ Fitur Utama

- 🔍 **Lihat Anime Musiman**  
  Telusuri anime berdasarkan musim (Spring, Summer, Fall, Winter) dan tahun.

- 🏆 **Top Anime Charts**  
  Tampilkan anime teratas berdasarkan kategori (TV, Movie, OVA, dll).

- 🎯 **Rekomendasi Anime**  
  Temukan anime yang sedang direkomendasikan secara global.

- 📊 **Tabel Interaktif (DataTables)**  
  Data bisa dicari, diurutkan, dan dipaginasi secara otomatis.

---

## 🖼️ Preview UI

<img src="https://cdn.myanimelist.net/images/anime/1565/142711.jpg" alt="Anime Screenshot" width="600" style="border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.2); margin-top: 16px;">

---

## 📁 Struktur Folder

```
├── app/
│   └── Http/
│       └── Controllers/
│       │   └── Api/
│       │      └── Anime.php
│       └── Services/
│           └── ApiService.php       
├── resources/
│   └── views/
│       └── layout/
│       │   └── footer.blade.php  
│       │   └── header.blade.php  
│       └── main.blade.php       
│       └── season.blade.php  
│       └── top.blade.php  
├── routes/
│   └── web.php                 
```

---

## 🚀 Cara Menjalankan

```bash
git clone https://github.com/Gioezzy/UTS-API.git
cd UTS-API
composer install
cp .env.example .env
php artisan key:generate
```

Lalu tambahkan konfigurasi `.env` berikut:

```
RAPIDAPI_KEY=your_rapidapi_key
RAPIDAPI_HOST=myanimelist-api1.p.rapidapi.com
```

Terakhir, jalankan server:
```bash
php artisan serve
```

---

## 📚 Dokumentasi API

Gunakan endpoint MyAnimeList API melalui RapidAPI:  
🔗 https://rapidapi.com/pyuser/api/myanimelist-api1

---

## ⚖️ Lisensi

Proyek ini menggunakan lisensi MIT. Lihat file [LICENSE](LICENSE) untuk detailnya.

---

© 2025 Anime Explorer by [GiovanniYudaPrastika]. All rights reserved.
