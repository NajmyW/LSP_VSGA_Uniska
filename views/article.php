<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Legends Club</title>
    <link rel="stylesheet" href="../public/styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home.php">
                <img src="../public/images/logo.png" alt="Logo">
            </a>
            <h1 class="navbar-text mx-auto text-white">Motor Legends Club</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg topbar">
        <div class="container-fluid">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link fs-6" href="../home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="../views/profile.php">Profile</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="../views/visi_misi.php">Visi dan Misi</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="../views/produk.php">Produk Kami</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="../views/contact.php">Kontak Kami</a></li>
                <li class="nav-item"><a class="nav-link fs-6" href="../views/about.php">About Us</a></li>
            </ul>
        </div>
    </nav>

    <div class="main-container">
        <aside class="sidebar">
            <ul class="list-group">
                <li class="list-group-item"><a href="../views/article.php">Artikel</a></li>
                <li class="list-group-item"><a href="../views/event.php">Event</a></li>
                <li class="list-group-item"><a href="../views/gallery.php">Galeri Foto</a></li>
                <li class="list-group-item"><a href="../views/client.php">Klien Kami</a></li>
                <li class="list-group-item">
                    <a>Login</a>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="../views/signin.php">Sign In</a></li>
                        <li class="list-group-item"><a href="../views/signup.php">Sign Up</a></li>
                    </ul>
                </li>
            </ul>
        </aside>

        <div class="main-content">
            <main class="container my-5">
                <div class="row">
                    <!-- Article Card 1 -->
                    <div class="col-md-4 mb-4">
                        <div class="card article-card">
                            <img src="../public/images/album/img5.jpg" class="card-img-top" alt="Perawatan Mesin Motor">
                            <div class="card-body">
                                <h5 class="card-title">Perawatan Mesin Motor untuk Pemula</h5>
                                <p class="card-text">Pelajari cara merawat mesin motor Anda dengan tips-tips sederhana yang mudah diikuti. Artikel ini akan membantu Anda menjaga performa motor tetap optimal.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Article Card 2 -->
                    <div class="col-md-4 mb-4">
                        <div class="card article-card">
                            <img src="../public/images/album/img6.jpg" class="card-img-top" alt="Event Motor Terbesar">
                            <div class="card-body">
                                <h5 class="card-title">Event Motor Terbesar Tahun Ini</h5>
                                <p class="card-text">Jangan lewatkan acara motor terbesar yang akan datang. Temukan jadwal, lokasi, dan semua informasi yang Anda butuhkan untuk menghadiri event ini.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Article Card 3 -->
                    <div class="col-md-4 mb-4">
                        <div class="card article-card">
                            <img src="../public/images/album/img7.jpg" class="card-img-top" alt="Tips Berkendara Aman">
                            <div class="card-body">
                                <h5 class="card-title">Tips Berkendara Aman di Musim Hujan</h5>
                                <p class="card-text">Musim hujan membawa tantangan tersendiri untuk pengendara motor. Ikuti tips ini untuk tetap aman dan nyaman saat berkendara di kondisi cuaca yang buruk.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9xO7U0d8g5zGHN6wYw1bL0sJ9x5l5q9ZoSTmW8fHq2E0QW0pl1P" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-7n6k3Mmt6hr1Dtb1V7m8J0pA9zD4J0A0h3TxZYsFWTMPk02N8aCkUmN0U6RsP2jG1" crossorigin="anonymous"></script>
</body>

</html>