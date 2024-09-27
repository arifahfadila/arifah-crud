<?php
session_start(); // Memulai sesi

// Menghapus semua sesi
session_unset();
session_destroy();

// Mengarahkan pengguna kembali ke halaman login atau home
header("Location: login.php");
exit();
?>
