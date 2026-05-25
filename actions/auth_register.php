<?php
include '../config/database.php';

if (isset($_POST['register'])) {
    // Mengamankan input dari SQL Injection
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $password = trim($_POST['password']);
    
    // Mengenkripsi password dengan aman
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);
    $role = 'user'; // Default akun baru adalah user biasa

    // Cek apakah username sudah ada
    $check = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");
    
    if(mysqli_num_rows($check) == 0){
        // Query memasukkan password yang sudah di-hash
        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password_hashed', '$role')";
        if(mysqli_query($conn, $query)){
            echo "<script>alert('Registrasi Berhasil! Silakan Login.'); window.location='../login.php';</script>";
            exit;
        } else {
            echo "<script>alert('Gagal mendaftar ke database.'); window.location='../register.php';</script>";
        }
    } else {
        echo "<script>alert('Username sudah terdaftar! Gunakan nama lain.'); window.location='../register.php';</script>";
    }
}
?>