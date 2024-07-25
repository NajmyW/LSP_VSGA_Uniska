<?php
// Menyertakan file konfigurasi yang berisi informasi koneksi ke database
include "../config/koneksi.php";

// Memeriksa apakah form telah disubmit dengan mengecek tombol 'submit'
if (isset($_POST['submit'])) {
    // Mengambil nilai dari form dan menyimpannya dalam variabel PHP
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Mengecek apakah ada salah satu dari data yang kosong
    if (!$username || !$password) {
        // Menampilkan alert dan mengarahkan pengguna kembali ke halaman form
        echo "<script>
        alert('Mohon seluruh data harus diisi!');
        window.location.href ='../views/signin.php';
        </script>";
    } else {
        // Mengecek apakah username dan password yang sama sudah ada di database
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) > 0) {
            // Username dan password yang sama sudah ada di database
            echo "<script>
            alert('Username dan password yang sama sudah tersedia. Silahkan pilih username atau password yang berbeda.');
            window.location.href ='../views/signin.php';
            </script>";
        } else {
            // Mengecek apakah username sudah ada di database
            $usernameQuery = "SELECT * FROM user WHERE username='$username'";
            $usernameResult = mysqli_query($db, $usernameQuery);

            if (mysqli_num_rows($usernameResult) > 0) {
                // Username sudah ada di database
                echo "<script>
                alert('Username sudah tersedia. Silahkan pilih username lain.');
                window.location.href ='../views/signin.php';
                </script>";
            } else {
                // Jika username dan password belum ada, tambahkan data baru ke database
                $insertQuery = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
                $insertResult = mysqli_query($db, $insertQuery);

                // Mengecek apakah kueri insert gagal
                if (!$insertResult) {
                    // Menghentikan eksekusi dan menampilkan pesan kesalahan
                    die('Terjadi kesalahan saat menambahkan database!');
                }

                // Mengarahkan pengguna ke halaman index setelah berhasil menambahkan data
                echo "<script>
                alert('Data berhasil dibuat, Silahkan Login Kembali');
                window.location.href ='../views/signin.php';
                </script>";
            }
        }
        exit(); // Menambahkan exit() untuk menghentikan eksekusi skrip setelah redirect
    }
}
