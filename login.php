<?php
session_start();

// Daftar pengguna yang diizinkan login (hanya untuk contoh)
$allowed_users = [
    "admin@siswa.skagata.sch.id" => "1234",
    "guru@siswa.skagata.sch.id" => "guru456",
    "siswa@siswa.skagata.sch.id" => "siswa789"
];

// Jika form login di-submit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi email untuk domain yang diizinkan
    if (filter_var($username, FILTER_VALIDATE_EMAIL) && strpos($username, '@siswa.skagata.sch.id') !== false) {
        // Periksa username dan password dari daftar pengguna
        if (isset($allowed_users[$username]) && $allowed_users[$username] == $password) {
            // Jika login berhasil, simpan informasi pengguna di sesi
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect ke halaman home
            exit();
        } else {
            $error = "Login gagal! Username atau password salah.";
        }
    } else {
        $error = "Hanya pengguna dengan domain @siswa.skagata.sch.id yang dapat login.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMK N 3 Yogyakarta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f2f6fc;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container h2 {
            margin-bottom: 1.5rem;
            font-weight: 600;
            color: #333;
            text-align: center;
        }

        .form-label {
            font-weight: 500;
            color: #333;
        }

        .form-control {
            border-radius: 5px;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            width: 100%;
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            margin-top: 1rem;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: red;
            margin-bottom: 1rem;
            text-align: center;
        }

        footer {
            text-align: center;
            margin-top: 1rem;
            color: #aaa;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <?php if (isset($error)): ?>
            <div class="error-message">
                <p><?php echo $error; ?></p>
            </div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <div class="mb-3">
                <label for="username" class="form-label">Email:</label>
                <input type="email" id="username" name="username" class="form-control" placeholder="name@siswa.skagata.sch.id" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

  
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>