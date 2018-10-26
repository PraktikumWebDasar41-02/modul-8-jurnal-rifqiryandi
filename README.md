# Modul8-Jurnal

Silahkan siapkan beberapa file php yang terdiri atas 6 file :
- koneksi.php 
- index.php
- register.php
- dashboard.php
- newData.php
- profile.php

* Koneksi.php = Berisikan script untuk menyambungkan ke database
* index.php = Halaman awal untuk login dan juga berisikan create user (username dan password)
* register.php = Halaman untuk membuat user baru yang berisikan username, password dan re-type password
* dashboard.php = Halaman setelah login berhasil. Halaman ini berisikan semua data diri dari semua mahasiswa yang telah  menginputkan data-datanya. Dalam bentuk tabel. Dihalaman ini juga terdapat menu pencarian berdasarkan NIM
* newData.php = Halaman ini berfungsi sebagai halaman untuk membuat data diri baru berdasarkan data diri masing-masing. (3 data yang berbeda). Isi dari inputannya adalah Nama Depan, Nama Belakang, NIM , Kelas, Hobi, Genre Film yang disukai (Horror, Anime, Action, Drama / bentuk checkbox), Tempat Wisata (Bali, Tanjung Selor, Jakarta, Lombok/bentuknya checkbox) dan tanggal lahir. 
profile.php = Halaman ini berisikan data-data sesuai dengan username bukan semua data dari semua user. terdapat juga tombol untuk logout
* Gunakan OOP
* Lakukan Validasi untuk setiap form inputan

Aplikasi pendaftaran mahasiswa dengan ketentuan:
- NIM harus angka dan 10 karakter
- username harus huruf dengan maksimal 20 karakter
- password minimal 6 karakter
- Nama harus huruf dengan maksimal 25 karakter
- Email sesuai ketentuan email pada umumnya. Contoh (asprakwebdas@gmail.com)
- Semua halaman harus login terlebih dahulu untuk mengaksesnya kecuali index.php,koneksi.php,dan juga register.php. Akan muncul - pesan error jika mengakses halaman selain 3 halaman tersebut tanpa login
- Tampilkan pesan error jika pengguna salah menginputkan data.


Ketentuan Jurnal :
- Menggunakan Database
- Menggunakan Bootstrap
- Upload File SQL dan File Kodingan
- Nama Database : modul8
- Nama Tabel : jurnal

