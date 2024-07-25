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

     <div class="main-container d-flex">
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

         <div class="main-content flex-fill">
             <div class="container">
                 <div class="content-box">
                     <h3>Visi</h3>
                     <p class="fs-5">Menjadi komunitas motor terdepan yang dikenal karena semangat kebersamaan, keselamatan, dan keahlian dalam berkendara.</p>
                     <h3>Misi</h3>
                     <ol>
                         <li class="fs-5">Mendorong pertumbuhan komunitas yang positif dan mendukung antara penggemar motor.</li>
                         <li class="fs-5">Mengadakan pelatihan dan acara yang meningkatkan keterampilan berkendara dan pengetahuan tentang motor.</li>
                         <li class="fs-5">Menyediakan platform bagi anggota untuk berbagi pengalaman dan berkolaborasi dalam proyek-proyek motor.</li>
                         <li class="fs-5">Menjalin kemitraan dengan berbagai perusahaan dan organisasi terkait untuk memperluas jaringan dan sumber daya.</li>
                     </ol>
                 </div>
             </div>
         </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9xO7U0d8g5zGHN6wYw1bL0sJ9x5l5q9ZoSTmW8fHq2E0QW0pl1P" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-7n6k3Mmt6hr1Dtb1V7m8J0pA9zD4J0A0h3TxZYsFWTMPk02N8aCkUmN0U6RsP2jG1" crossorigin="anonymous"></script>
 </body>

 </html>