<?php
session_start();
include '../config/database.php';

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $password = trim($_POST['password']);

    // Cari username di database
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Memverifikasi password teks biasa dengan hash di database
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            
            header("Location: ../dashboard.php");
            exit;
        }
    }
    
    // Jika gagal, lempar kembali ke halaman login dengan pesan error
    header("Location: ../login.php?error=1");
    exit;
}
?>