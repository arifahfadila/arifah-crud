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
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(6, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        .form-label {
            font-weight: 500;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn-primary {
            width: 100%;
            margin-top: 1rem;
            padding: 0.75rem;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 1rem;
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
                <input type="email" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
