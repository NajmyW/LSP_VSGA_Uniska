<?php
// Menyertakan file konfigurasi
include "../config/koneksi.php";

// Memeriksa apakah form telah disubmit dengan mengecek tombol 'submit'
if (isset($_POST['submit'])) {
    // Mengambil nilai dari form dan menyimpannya dalam variabel PHP
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menggunakan prepared statements untuk menghindari SQL injection
    $stmt = $db->prepare("SELECT username, password FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Menyimpan hasil query dalam array asosiatif
        $row = $result->fetch_assoc();

        // Debugging output
        echo "Username yang ditemukan: " . htmlspecialchars($row['username']) . "<br>";
        echo "Password yang disimpan: " . htmlspecialchars($row['password']) . "<br>";

        // Memverifikasi password (tanpa hashing)
        if ($password === $row['password']) {
            // Password benar
            // Mengarahkan pengguna ke halaman index setelah berhasil menambahkan data
            header("Location: ../home.php");
            // Redirect atau lakukan tindakan lain di sini
        } else {
            // Password salah
            echo "<script>
        alert('Username atau password salah!');
        window.location.href ='../views/signin.php';
        </script>";
        }
    } else {
        // Username tidak ditemukan
        echo "<script>
            alert('Username atau password salah!');
            window.location.href ='../views/signin.php';
            </script>";
    }

    // Menutup statement dan koneksi
    $stmt->close();
}

// Menutup koneksi database
$db->close();
