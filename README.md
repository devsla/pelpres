# Pelpres

Aplikasi CRUD sederhana dengan PHP dan MySQL sebagai praktik belajar.

## Todo

- [x] CRUD
- [ ] Pagination
- [ ] Search
- [ ] Login
- [ ] Register
## Screenshoot

<details>
<summary>Click to expand!</summary>

![Demo 1](/screenshots/demo-1.png)
</details>

## Instalasi

1. Clone repository ini
2. Buat database baru dengan nama `pelpres`
3. Import file `pelpres.sql` ke database `pelpres`
4. Atur konfigurasi database dan aplikasi di file `config.php`
5. Jalankan aplikasi di browser dengan cara
    1. Buka terminal
    2. Jalankan perintah `php -S localhost:8000 -t public`
    3. Buka browser dan ketikkan `localhost:8000`

## Struktur Folder

* `core` berisi file-file yang digunakan untuk koneksi ke database dan fungsi-fungsi yang digunakan di aplikasi
* `public` berisi file `index.php` yang digunakan untuk menjalankan aplikasi
* `pages` berisi file-file yang digunakan untuk membuat halaman web
* `templates` berisi file-file yang digunakan untuk membuat layout template untuk setiap halaman yang ada pada folder `pages`
    