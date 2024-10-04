<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurusan di SMK N 3 Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f2f6fc, #d9eaf5);
        }

        /* Navbar */
        .navbar {
            padding: 1rem 2rem;
        }
        .navbar-brand {
            font-weight: 600;
            font-size: 1.5rem;
        }
        .navbar-nav .nav-link {
            margin-right: 20px;
            font-size: 1.1rem;
        }
        .navbar-nav .nav-link:hover {
            color: #1abc9c;
        }

        /* Card Styles */
        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 2rem;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #000000; /* Change to black */
        }
        .card-text {
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
        }

        /* Section Title */
        h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
            color: #333;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
        }

        /* Search Bar */
        .form-control {
            border-radius: 30px;
        }
        .btn-success {
            border-radius: 30px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SMK N 3 Yogyakarta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">SMK N 3 Yogyakarta</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                            <a class="nav-link" href="ekstra.php">Ekstrakurikuler</a>
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

    <!-- Informasi Jurusan -->
    <div class="container mt-5 pt-5">
        <h2 class="text-center mb-4">Jurusan di SMK N 3 Yogyakarta</h2>
        <!-- Baris 1 -->
        <div class="row">
            <!-- Teknik Komputer dan Jaringan -->
            <div class="col-md-4">
                <div class="card">
                    <img src="ft/ft.jpg" class="card-img-top" alt="Teknik Komputer dan Jaringan">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Komputer dan Jaringan</h5>
                        <p class="card-text">Jurusan ini mempelajari cara merakit, memperbaiki, dan memelihara komputer serta jaringan.</p>
                    </div>
                </div>
            </div>

            <!-- Broadcasting dan Perfilman -->
            <div class="col-md-4">
                <div class="card">
                    <img src="ft/ftt.jpg" class="card-img-top" alt="Broadcasting dan Perfilman">
                    <div class="card-body">
                        <h5 class="card-title">Broadcasting dan Perfilman</h5>
                        <p class="card-text">Jurusan ini mempelajari desain grafis, pembuatan video, animasi, dan pengembangan web.</p>
                    </div>
                </div>
            </div>

            <!-- Teknik Otomotif -->
            <div class="col-md-4">
                <div class="card">
                    <img src="ft/fttt.jpg" class="card-img-top" alt="Teknik Otomotif">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Otomotif</h5>
                        <p class="card-text">Jurusan ini mempelajari elektronika, instalasi listrik, serta teknologi otomatisasi.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris 2 -->
        <div class="row mt-4">
            <!-- Teknik Elektronika -->
            <div class="col-md-4">
                <div class="card">
                    <img src="ft/ftttt.jpg" class="card-img-top" alt="Teknik Elektronika">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Elektronika</h5>
                        <p class="card-text">Jurusan ini mempelajari elektronika, instalasi listrik, serta teknologi otomatisasi.</p>
                    </div>
                </div>
            </div>

            <!-- Teknik Listrik -->
            <div class="col-md-4">
                <div class="card">
                    <img src="ft/fttttt.jpg" class="card-img-top" alt="Teknik Listrik">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Listrik</h5>
                        <p class="card-text">Jurusan ini mempelajari elektronika, instalasi listrik, serta teknologi otomatisasi.</p>
                    </div>
                </div>
            </div>

            <!-- Desain Pemodelan Informasi Bangunan -->
            <div class="col-md-4">
                <div class="card">
                    <img src="ft/bangunan.jpg" class="card-img-top" alt="Desain Pemodelan Informasi Bangunan">
                    <div class="card-body">
                        <h5 class="card-title">Desain Pemodelan Informasi Bangunan</h5>
                        <p class="card-text">Jurusan yang mempelajari tentang perencanaan, pembuatan, dan perbaikan bangunan.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Baris 3 -->
        <div class="row mt-4">
            <!-- Konstruksi Perumahan -->
            <div class="col-md-4">
                <div class="card">
                    <img src="ft/kp.jpg" class="card-img-top" alt="Konstruksi Perumahan">
                    <div class="card-body">
                        <h5 class="card-title">Konstruksi Perumahan</h5>
                        <p class="card-text">Jurusan ini berfokus pada pembangunan perumahan, mulai dari perencanaan, pelaksanaan, hingga evaluasi kegiatan konstruksi.</p>
                    </div>
                </div>
            </div>

            <!-- Teknik Mesin -->
            <div class="col-md-4">
                <div class="card">
                    <img src="ft/tm.jpg" class="card-img-top" alt="Teknik Mesin">
                    <div class="card-body">
                        <h5 class="card-title">Teknik Mesin</h5>
                        <p class="card-text">Jurusan yang mempelajari aplikasi prinsip fisika untuk mendesain, menganalisis, membuat, dan memelihara sistem mekanik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>    
        <p>&copy; 2024 SMK N 3 Yogyakarta. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
