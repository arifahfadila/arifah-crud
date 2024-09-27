<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas di SMK N 3 Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }

        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: #333;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-title {
            font-weight: 600;
            color: #333;
        }

        .card-text {
            color: #666;
        }

        .card img {
            max-height: 200px;
            object-fit: cover;
        }

        .footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #333;
            color: #fff;
            text-align: center;
        }

        .social-icons a {
            color: white;
            margin: 0 10px;
        }

        .facilities-section {
            margin-top: 70px;
        }

        .facility-title {
            text-align: center;
            margin-bottom: 40px;
            color: #4CAF50;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMK N 3 Yogyakarta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
                aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jurusan.php">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fasilitas.php">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mapel.php">Mata Pelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.php">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Informasi Fasilitas -->
    <div class="container facilities-section mt-5">
        <h2 class="text-center mb-4">Fasilitas di SMK N 3 Yogyakarta</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/lab_komputer.jpg" class="card-img-top" alt="Laboratorium Komputer">
                    <div class="card-body">
                        <h5 class="card-title">Laboratorium Komputer</h5>
                        <p class="card-text">Laboratorium komputer yang dilengkapi perangkat keras dan perangkat lunak terkini untuk pembelajaran teknik komputer dan jaringan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/studio_multimedia.jpg" class="card-img-top" alt="Studio Multimedia">
                    <div class="card-body">
                        <h5 class="card-title">Studio Multimedia</h5>
                        <p class="card-text">Studio dengan peralatan multimedia modern untuk kegiatan pembuatan video, desain grafis, dan animasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/bengkel_elektronika.jpg" class="card-img-top" alt="Bengkel Elektronika">
                    <div class="card-body">
                        <h5 class="card-title">Bengkel Elektronika</h5>
                        <p class="card-text">Bengkel untuk praktik instalasi listrik dan perawatan alat elektronik.</p>
                    </div>
                </div>
            </div>

            <!-- Fasilitas Baru -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/bengkel_mesin.jpg" class="card-img-top" alt="Bengkel Mesin">
                    <div class="card-body">
                        <h5 class="card-title">Bengkel Mesin</h5>
                        <p class="card-text">Bengkel yang mendukung pembelajaran teknik mesin dengan peralatan modern.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/bengkel_bangunan.jpg" class="card-img-top" alt="Bengkel Bangunan">
                    <div class="card-body">
                        <h5 class="card-title">Bengkel Bangunan</h5>
                        <p class="card-text">Bengkel untuk praktik konstruksi bangunan, termasuk teknik sipil dan arsitektur.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/bengkel_otomotif.jpg" class="card-img-top" alt="Bengkel Otomotif">
                    <div class="card-body">
                        <h5 class="card-title">Bengkel Otomotif</h5>
                        <p class="card-text">Fasilitas untuk belajar tentang teknik otomotif dan perawatan kendaraan bermotor.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/aula_bima.jpg" class="card-img-top" alt="Aula Bima">
                    <div class="card-body">
                        <h5 class="card-title">Aula Bima</h5>
                        <p class="card-text">Aula besar untuk acara-acara sekolah, seminar, dan kegiatan indoor lainnya.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/lapangan_voli.jpg" class="card-img-top" alt="Lapangan Voli">
                    <div class="card-body">
                        <h5 class="card-title">Lapangan Voli</h5>
                        <p class="card-text">Lapangan voli yang digunakan untuk kegiatan olahraga siswa dan kompetisi antar kelas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://example.com/masjid.jpg" class="card-img-top" alt="Masjid Cito Jati">
                    <div class="card-body">
                        <h5 class="card-title">Masjid Cito Jati</h5>
                        <p class="card-text">Masjid sekolah untuk kegiatan ibadah dan kajian keagamaan bagi siswa dan guru.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 SMK N 3 Yogyakarta. All Rights Reserved.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
