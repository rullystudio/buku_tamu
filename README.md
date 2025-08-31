# 📖 Buku Tamu Sederhana dengan PHP & MySQL

Project ini adalah aplikasi **Buku Tamu sederhana** berbasis web yang dibuat menggunakan **PHP** dan **MySQL**.  
Cocok untuk latihan dasar **CRUD (Create, Read, Delete)**.

---

## 🚀 Fitur
- Menambahkan data tamu (Nama, Pesan, Tanggal otomatis).
- Menampilkan daftar tamu.
- Menghapus data tamu.
- Tampilan sederhana dengan HTML + CSS.

---

## 🛠️ Teknologi yang Digunakan
- PHP (Native)
- MySQL
- HTML, CSS, Bootstrap (opsional)

---

## 📂 Struktur Folder

buku_tamu/
├── index.php # Menampilkan daftar tamu
├── tambah.php # Form input data tamu
├── hapus.php # Hapus data tamu
├── config.php # Koneksi database
├── style.css # (Opsional) Styling tampilan
└── database.sql # File SQL untuk import ke MySQL


---

## ⚙️ Cara Instalasi
1. Clone repository ini:
   ```bash
   git clone https://github.com/username/buku_tamu.git

  D:/xampp/htdocs/buku_tamu

2. Pindahkan folder ke direktori htdocs (jika menggunakan XAMPP):

  D:/xampp/htdocs/buku_tamu


Import database:

Buka phpMyAdmin

Buat database baru, misalnya buku_tamu

Import file database.sql

Sesuaikan konfigurasi database di config.php:

<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "buku_tamu";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>


Jalankan project melalui browser:

http://localhost/buku_tamu

📜 Lisensi

Proyek ini bersifat open-source. Silakan gunakan dan modifikasi sesuai kebutuhan.

