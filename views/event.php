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
            <main>

                <div class="container my-5">
                    <h1 class="mb-4">Events</h1>
                    <div class="row">

                        <!-- Event Card 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Kejuaraan Motor Nasional 2024</h5>
                                    <p class="card-text"><strong>Tanggal:</strong> 15 - 17 Maret 2024</p>
                                    <p class="card-text"><strong>Lokasi:</strong> Stadion Utama, Jakarta</p>
                                    <p class="card-text">Bergabunglah dengan kami dalam ajang kejuaraan motor bergengsi yang akan diikuti oleh berbagai klub motor dari seluruh Indonesia. Acara ini akan menampilkan berbagai kategori lomba, termasuk balapan jalan raya dan motocross.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Rapat Tahunan Klub Motor</h5>
                                    <p class="card-text"><strong>Tanggal:</strong> 25 April 2024</p>
                                    <p class="card-text"><strong>Lokasi:</strong> Kantor Pusat Klub, Bandung</p>
                                    <p class="card-text">Rapat tahunan ini adalah kesempatan bagi anggota klub untuk membahas perkembangan, rencana masa depan, dan strategi klub. Semua anggota diundang untuk memberikan masukan dan berpartisipasi dalam perencanaan acara mendatang.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Touring Bersama ke Bali</h5>
                                    <p class="card-text"><strong>Tanggal:</strong> 10 - 15 Mei 2024</p>
                                    <p class="card-text"><strong>Lokasi:</strong> Jakarta - Bali</p>
                                    <p class="card-text">Ayo bergabung dalam perjalanan touring seru dari Jakarta ke Bali! Selama perjalanan, kita akan mengunjungi beberapa destinasi menarik dan menikmati pemandangan indah.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 4 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Bazar dan Charity Ride</h5>
                                    <p class="card-text"><strong>Tanggal:</strong> 20 Juni 2024</p>
                                    <p class="card-text"><strong>Lokasi:</strong> Lapangan Parkir Mall Mega, Surabaya</p>
                                    <p class="card-text">Bazar ini akan menawarkan berbagai barang terkait motor, mulai dari aksesoris hingga peralatan. Selain itu, akan ada charity ride untuk mendukung program-program sosial.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Event Card 5 -->
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Workshop Teknisi Motor</h5>
                                    <p class="card-text"><strong>Tanggal:</strong> 5 Agustus 2024</p>
                                    <p class="card-text"><strong>Lokasi:</strong> Workshop Utama, Yogyakarta</p>
                                    <p class="card-text">Workshop ini dirancang untuk para teknisi motor dan penggemar yang ingin meningkatkan keterampilan mereka dalam perawatan dan perbaikan motor. Akan ada sesi pelatihan praktis yang dipimpin oleh teknisi berpengalaman.</p>
                                </div>
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