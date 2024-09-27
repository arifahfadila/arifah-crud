<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - SMK N 3 Yogyakarta</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #f7f9fc, #e0f7fa);
        }
        /* Navbar */
        .navbar {
            padding: 1rem 2rem;
        }
        .navbar-brand {
            font-weight: 600;
        }
        .navbar-nav .nav-link {
            margin-right: 15px;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #1abc9c;
        }
        .navbar-toggler {
            border: none;
        }

        /* Hero section */
        .hero-section {
            background: url('https://smkn3jogja.sch.id/wp-content/uploads/2023/06/DJI_0290-1-3-scaled.jpg') no-repeat center center/cover;
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            text-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .hero-section p {
            font-size: 1.5rem;
        }

        /* Card styles */
        .card {
            border: none;
            margin-bottom: 2rem;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #007bff;
        }
        .card-text {
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            padding: 2rem 0;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar dengan Offcanvas -->
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

    <!-- Hero section -->
    <div class="hero-section">
        <div>
            <h1>Selamat Datang di SMK N 3 Yogyakarta</h1>
            <p>Menjadi yang terbaik dalam teknologi dan pendidikan</p>
        </div>
    </div>

    <!-- Konten utama halaman -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">Informasi Seputar SKAGATA</h2>

        <!-- Profil Sekolah -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">PROFIL SKAGATA</h5>
                <p class="card-text">SMK Negeri 3 Yogyakarta adalah salah satu sekolah tertua di Indonesia yang telah mengalami beberapa kali perubahan nama. Sekolah ini berlokasi di Jalan Robert Wolter Monginsidi, Yogyakarta dan telah berdiri sejak tahun 1919.</p>
            </div>
        </div>

        <!-- Program Sekolah -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">PROGRAM SEKOLAH</h5>
                <p class="card-text">SMK N 3 Yogyakarta meluncurkan program ketarunaan pada tahun 2022 untuk membentuk karakter siswa yang disiplin dan siap kerja di dunia industri.</p>
            </div>
        </div>

        <!-- Ekstrakurikuler -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">EKSTRAKURIKULER</h5>
                <p class="card-text">SMK N 3 Yogyakarta menawarkan berbagai kegiatan ekstrakurikuler seperti Paskibra, Pramuka, Futsal, dan lainnya untuk mengembangkan potensi siswa di luar akademik.</p>
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
