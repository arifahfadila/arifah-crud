<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mata Pelajaran di SMK N 3 Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
        }
        h1, h2, h3 {
            margin-top: 20px;
            color: #4CAF50;
        }
        .jurusan-card {
            margin-bottom: 20px;
        }
        .jurusan-header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 8px 8px 0 0;
        }
        .kelas-header {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #333;
            color: #fff;
            text-align: center;
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
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
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
                            <a class="nav-link active" href="mapel.php">Mata Pelajaran</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kontak.php">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 pt-4">
        <h1 class="text-center">Mata Pelajaran Berdasarkan Jurusan dan Kelas</h1>

        <!-- Menampilkan hasil jurusan dan mata pelajaran -->
        <?php
        $mataPelajaran = [
            'Teknik Komputer dan Jaringan' => [
                'Kelas 10' => ['Matematika', 'Bahasa Indonesia', 'Fisika', 'Komputer Dasar', 'Jaringan Dasar'],
                'Kelas 11' => ['Matematika', 'Bahasa Inggris', 'Sistem Operasi', 'Pemrograman Dasar', 'Jaringan Lanjut'],
                'Kelas 12' => ['Matematika', 'Kewirausahaan', 'Administrasi Jaringan', 'Keamanan Jaringan', 'Proyek Akhir']
            ],
            'Multimedia' => [
                'Kelas 10' => ['Matematika', 'Bahasa Indonesia', 'Desain Grafis', 'Animasi Dasar', 'Fotografi Dasar'],
                'Kelas 11' => ['Matematika', 'Bahasa Inggris', 'Video Editing', 'Pemrograman Web', 'Desain Interaktif'],
                'Kelas 12' => ['Matematika', 'Kewirausahaan', 'Proyek Video', 'Proyek Desain Grafis', 'Proyek Akhir']
            ],
            'Teknik Elektro' => [
                'Kelas 10' => ['Matematika', 'Bahasa Indonesia', 'Elektronika Dasar', 'Instalasi Listrik', 'Fisika'],
                'Kelas 11' => ['Matematika', 'Bahasa Inggris', 'Sistem Kendali', 'Rangkaian Elektronik', 'Instrumentasi'],
                'Kelas 12' => ['Matematika', 'Kewirausahaan', 'Proyek Instalasi Listrik', 'Mikrokontroler', 'Proyek Akhir']
            ]
        ];
        ?>

        <?php foreach ($mataPelajaran as $jurusan => $kelas): ?>
            <div class="card jurusan-card">
                <div class="jurusan-header">
                    <h2><?php echo $jurusan; ?></h2>
                </div>
                <div class="card-body">
                    <?php foreach ($kelas as $namaKelas => $pelajaran): ?>
                        <div class="kelas-header">
                            <h4><?php echo $namaKelas; ?></h4>
                        </div>
                        <ul class="list-group">
                            <?php foreach ($pelajaran as $item): ?>
                                <li class="list-group-item"><?php echo $item; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2024 SMK N 3 Yogyakarta. All Rights Reserved.</p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
