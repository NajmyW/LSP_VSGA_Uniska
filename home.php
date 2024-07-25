<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Legends Club</title>
    <link rel="stylesheet" href="./public/styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <header class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="./public/images/logo.png" alt="Logo">
            </a>
            <h1 class="navbar-text mx-auto text-white">Motor Legends Club</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg topbar">
        <div class="container-fluid">
            <div class="d-flex justify-content-between w-100">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./views/profile.php">Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="./views/visi_misi.php">Visi dan Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="./views/produk.php">Produk Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="./views/contact.php">Kontak Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="./views/about.php">About Us</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="main-container">
        <aside class="sidebar">
            <ul class="list-group">
                <li class="list-group-item"><a href="./views/article.php">Artikel</a></li>
                <li class="list-group-item"><a href="./views/event.php">Event</a></li>
                <li class="list-group-item"><a href="./views/gallery.php">Galeri Foto</a></li>
                <li class="list-group-item"><a href="./views/client.php">Klien Kami</a></li>
                <li class="list-group-item">
                    <a>Login</a>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="./views/signin.php">Sign In</a></li>
                        <li class="list-group-item"><a href="./views/signup.php">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
        </aside>

        <div class="main-content">
            <main>
                <h3>Kata Pengantar</h3>
                <p class="fs-5">Selamat datang di Motor Legends Club, komunitas motor yang penuh semangat dan dedikasi! Kami sangat senang bisa berbagi perjalanan kami dengan Anda melalui halaman ini.
                    Di Motor Legends Club, kami percaya bahwa motor lebih dari sekadar alat transportasi—ia adalah simbol kebebasan, petualangan, dan persahabatan. Sejak didirikan pada tahun 2010, klub kami telah menjadi tempat berkumpulnya para penggemar motor yang berbagi gairah yang sama terhadap dunia motor. Dari perjalanan panjang yang penuh tantangan hingga acara komunitas yang penuh warna, kami berkomitmen untuk menyediakan pengalaman yang tidak hanya memuaskan, tetapi juga membangun hubungan yang erat di antara anggota kami.
                    Dalam setiap acara dan kegiatan yang kami selenggarakan, kami tidak hanya mengejar kesenangan semata, tetapi juga berusaha untuk meningkatkan keselamatan berkendara, memperdalam pengetahuan teknis, dan merayakan kecintaan kita terhadap motor. Kami memandang klub ini sebagai wadah di mana setiap individu dapat mengeksplorasi dan mengekspresikan minat mereka dalam dunia motor, sambil mendapatkan dukungan dan kebersamaan dari sesama anggota.
                    Kami mengundang Anda untuk menjelajahi berbagai informasi yang kami sajikan dalam company profile ini.
                </p>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9xO7U0d8g5zGHN6wYw1bL0sJ9x5l5q9ZoSTmW8fHq2E0QW0pl1P" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-7n6k3Mmt6hr1Dtb1V7m8J0pA9zD4J0A0h3TxZYsFWTMPk02N8aCkUmN0U6RsP2jG1" crossorigin="anonymous"></script>
</body>

</html>