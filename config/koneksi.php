<?php
// Mendefinisikan variabel untuk server, user, password, dan nama database
$server = "localhost";
$user = "root";
$password =  "";
$nama_database = "db_motorClub";

// Mencoba untuk membuat koneksi ke database menggunakan mysqli_connect
$db = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa apakah koneksi berhasil atau gagal
if (!$db) {
    // Jika koneksi gagal, tampilkan pesan error dan hentikan eksekusi skrip
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} else {
    // Jika koneksi berhasil, tampilkan pesan di konsol JavaScript
    echo "<script>console.log('berhasil terkoneksi')</script>";
}
