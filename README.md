# 📋 Aplikasi CRUD Pegawai Sederhana

Aplikasi manajemen data pegawai berbasis web yang dibangun menggunakan **PHP Native** dan database **MySQL**. Proyek ini dirancang sebagai contoh implementasi dasar operasi CRUD (Create, Read, Update, Delete) tanpa menggunakan framework.

---

## ✨ Fitur Utama
- **Tambah Pegawai**: Input data NIP, Nama, Jabatan, dan Alamat.
- **Daftar Pegawai**: Menampilkan seluruh data dari database ke dalam tabel.
- **Edit Data**: Memperbarui informasi pegawai secara dinamis.
- **Hapus Data**: Menghapus record data dengan konfirmasi.
- **Antarmuka Bersih**: Menggunakan HTML standar (bisa ditambahkan CSS/Bootstrap).

---

## 🛠️ Persyaratan Sistem
Pastikan lingkungan pengembangan Anda sudah siap:
- **PHP**: Versi 7.4 atau lebih tinggi.
- **Database**: MySQL / MariaDB.
- **Web Server**: Apache (XAMPP, Laragon, atau Nginx).

---

## 🚀 Cara Instalasi & Penggunaan

### 1. Persiapan Database
Buat database baru di **phpMyAdmin** dengan nama `db_pegawai`, lalu jalankan query SQL berikut:

```sql
CREATE DATABASE db_pegawai;

USE db_pegawai;

CREATE TABLE pegawai (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nip VARCHAR(20) NOT NULL,
    nama VARCHAR(100) NOT NULL,
    jabatan VARCHAR(50) NOT NULL,
    alamat TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---
Keterangan : Web ini hanya di gunakan untuk mengelola data pegawai saja 
