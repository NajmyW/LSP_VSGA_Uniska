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
                <div class="row">
                    <!-- Keanggotaan Klub -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Keanggotaan Klub</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Bergabunglah dengan *Motor Legends Club* dan nikmati akses penuh ke semua fasilitas dan kegiatan kami. Keanggotaan klub memberikan Anda keuntungan seperti akses ke acara eksklusif, pelatihan berkendara, dan diskon khusus dari mitra kami.</p>
                                <h6>Jenis Keanggotaan:</h6>
                                <ul>
                                    <li>Keanggotaan Individual: Untuk individu yang ingin bergabung dengan klub dan menikmati semua manfaat keanggotaan.</li>
                                    <li>Keanggotaan Keluarga: Untuk keluarga yang ingin bergabung bersama dan mendapatkan diskon khusus.</li>
                                    <li>Keanggotaan Korporat: Untuk perusahaan atau organisasi yang ingin menjadi bagian dari komunitas kami dan memanfaatkan peluang jaringan.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Pelatihan Berkendara -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Pelatihan Berkendara</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Kami menyediakan pelatihan berkendara untuk semua level keterampilan, dari pemula hingga mahir. Pelatihan ini dirancang untuk meningkatkan keterampilan berkendara Anda, mengajarkan teknik berkendara yang aman, dan mempersiapkan Anda untuk berbagai situasi di jalan.</p>
                                <h6>Jenis Pelatihan:</h6>
                                <ul>
                                    <li>Kelas Dasar: Untuk pemula yang baru mulai berkendara dan membutuhkan pelatihan dasar.</li>
                                    <li>Kelas Lanjutan: Untuk pengendara yang ingin meningkatkan keterampilan mereka dan mempelajari teknik berkendara yang lebih kompleks.</li>
                                    <li>Pelatihan Khusus: Termasuk pelatihan untuk kondisi cuaca ekstrem, berkendara di medan berat, dan situasi darurat.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Merchandise dan Aksesori -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Merchandise dan Aksesori</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Tunjukkan semangat Anda sebagai anggota *Motor Legends Club* dengan berbagai merchandise dan aksesori resmi kami. Kami menawarkan berbagai produk yang dirancang untuk memenuhi kebutuhan penggemar motor.</p>
                                <h6>Produk Kami:</h6>
                                <ul>
                                    <li>Pakaian Klub: T-shirt, jaket, dan hoodie dengan desain eksklusif klub.</li>
                                    <li>Aksesori: Topi, sarung tangan, dan pelindung motor yang bergaya dan fungsional.</li>
                                    <li>Cinderamata: Kaos kaki, mug, dan stiker dengan logo klub.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Event Organizer -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Event Organizer</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Kami menawarkan layanan penyelenggaraan acara untuk berbagai kebutuhan motor. Dari ride-out hingga pameran dan kompetisi, kami memiliki pengalaman dan sumber daya untuk mengorganisir acara yang sukses.</p>
                                <h6>Layanan Kami:</h6>
                                <ul>
                                    <li>Ride-Out: Perencanaan dan pelaksanaan ride-out ke destinasi menarik dengan rute yang telah dirancang dengan cermat.</li>
                                    <li>Pameran Motor: Menyelenggarakan pameran motor dengan berbagai peserta dan produk.</li>
                                    <li>Kompetisi: Organisasi kompetisi modifikasi motor dan balapan dengan standar tinggi.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Konsultasi dan Dukungan Teknis -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Konsultasi dan Dukungan Teknis</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Kami menyediakan layanan konsultasi dan dukungan teknis untuk membantu Anda dalam segala hal terkait motor. Baik itu tentang modifikasi, perawatan, atau pemilihan aksesori, tim ahli kami siap membantu.</p>
                                <h6>Layanan Kami:</h6>
                                <ul>
                                    <li>Konsultasi Modifikasi: Saran dan panduan tentang modifikasi motor untuk meningkatkan performa atau penampilan.</li>
                                    <li>Dukungan Perawatan: Bantuan teknis untuk pemeliharaan rutin dan perbaikan motor.</li>
                                    <li>Pemilihan Aksesori: Rekomendasi dan pemilihan aksesori yang sesuai dengan kebutuhan dan gaya berkendara Anda.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Program Kemitraan dan Sponsorship -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title">Program Kemitraan dan Sponsorship</h5>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Kami menawarkan peluang kemitraan dan sponsorship bagi perusahaan yang ingin berkolaborasi dengan *Motor Legends Club*. Ini termasuk peluang branding, sponsor acara, dan kerja sama dalam berbagai proyek.</p>
                                <h6>Oportunitas Kemitraan:</h6>
                                <ul>
                                    <li>Kemitraan Produk: Kesempatan untuk mempromosikan produk Anda melalui kanal kami.</li>
                                    <li>Sponsorship Acara: Mendapatkan eksposur dan pengakuan sebagai sponsor acara besar kami.</li>
                                    <li>Proyek Kolaborasi: Bekerja sama dalam proyek-proyek khusus yang bermanfaat bagi komunitas motor.</li>
                                </ul>
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