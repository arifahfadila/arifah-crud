<?php
// Daftar ekstrakurikuler
$ekskul = [
    [
        "nama" => "Paskibra",
        "deskripsi" => "Pelatihan baris-berbaris dan upacara bendera."
    ],
    [
        "nama" => "Pramuka",
        "deskripsi" => "Kegiatan kepanduan untuk melatih kemandirian dan kedisiplinan."
    ],
    [
        "nama" => "Basket",
        "deskripsi" => "Latihan basket untuk meningkatkan kemampuan fisik dan kerja sama tim."
    ],
    [
        "nama" => "PMR",
        "deskripsi" => "Palang Merah Remaja yang melatih pertolongan pertama dan kesehatan."
    ],
    [
        "nama" => "Tarung Derajat",
        "deskripsi" => "Seni bela diri untuk meningkatkan kekuatan fisik dan mental."
    ],
    [
        "nama" => "English Club",
        "deskripsi" => "Kegiatan untuk meningkatkan kemampuan berbahasa Inggris."
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler SMK N 3 Yogyakarta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
        }

        .container {
            margin: 2rem auto;
            max-width: 1200px;
        }

        .ekskul-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 1rem;
            padding: 1rem;
            text-align: left;
            width: 30%;
            display: inline-block;
            vertical-align: top;
        }

        .ekskul-card h3 {
            color: #4CAF50;
            font-size: 1.5rem;
            margin: 1rem 0 0.5rem;
        }

        .ekskul-card p {
            color: #333;
        }

        footer {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            margin-top: 2rem;
        }

        .navbar {
            background-color: #343a40;
            padding: 1rem;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 1rem;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        .search-form {
            display: inline-block;
            margin-left: auto;
        }

        .search-form input {
            padding: 0.5rem;
            border: none;
            border-radius: 5px;
        }

        .search-form button {
            padding: 0.5rem 1rem;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            margin-left: 0.5rem;
        }
    </style>
</head>

<body>
   <!-- Navbar -->
   <nav class="navbar">
        <a href="index.php">Beranda</a>
        <a href="jurusan.php">Jurusan</a>
        <a href="fasilitas.php">Fasilitas</a>
        <a href="ekstra.php">Ekstrakurikuler</a>
        <a href="kontak.php">Kontak</a>
        <a href="logout.php">Logout</a>

        <form class="search-form" role="search">
            <input type="search" placeholder="Search" aria-label="Search">
            <button type="submit">Search</button>
        </form>
    </nav>

    <h1>Ekstrakurikuler SMK N 3 Yogyakarta</h1>

    <div class="container">
        <?php
        // Loop untuk menampilkan setiap ekstrakurikuler
        foreach ($ekskul as $e) {
            echo '
            <div class="ekskul-card">
                <h3>' . $e["nama"] . '</h3>
                <p>' . $e["deskripsi"] . '</p>
            </div>';
        }
        ?>
    </div>

    <footer>
        <p>&copy; 2024 SMK N 3 Yogyakarta. All rights reserved.</p>
    </footer>

</body>
</html>
