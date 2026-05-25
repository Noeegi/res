<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "blog_kebudayaan";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("<script>alert('Koneksi database gagal: " . mysqli_connect_error() . "')</script>");
}
?>