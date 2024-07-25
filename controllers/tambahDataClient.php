<?php
// Menyertakan file konfigurasi yang berisi informasi koneksi ke database
include "../config/koneksi.php";

// Memeriksa apakah form telah disubmit dengan mengecek tombol 'submit'
if (isset($_POST['submit'])) {
    // Mengambil nilai dari form dan menyimpannya dalam variabel PHP
    $merek = $_POST['merek'];
    $deskripsi = $_POST['deskripsi'];

    // Mengecek apakah ada salah satu dari data yang kosong
    if (!$merek || !$deskripsi) {
        // Menampilkan alert dan mengarahkan pengguna kembali ke halaman form
        echo "<script>
        alert('Mohon seluruh data harus diisi!');
        window.location.href ='../views/client.php';
        </script>";
    } else {

        // Jika merek dan deskripsi belum ada, tambahkan data baru ke database
        $insertQuery = "INSERT INTO client (merek, deskripsi) VALUES ('$merek', '$deskripsi')";
        $insertResult = mysqli_query($db, $insertQuery);

        // Mengecek apakah kueri insert gagal
        if (!$insertResult) {
            // Menghentikan eksekusi dan menampilkan pesan kesalahan
            die('Terjadi kesalahan saat menambahkan database!');
        }

        // Mengarahkan pengguna ke halaman index setelah berhasil menambahkan data
        echo "<script>
                alert('Data berhasil disimpan');
                window.location.href ='../views/client.php';
                </script>";

        exit(); // Menambahkan exit() untuk menghentikan eksekusi skrip setelah redirect
    }
}
