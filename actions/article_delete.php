<?php
session_start();
include '../config/database.php';

if ($_SESSION['role'] !== 'admin') {
    header("Location: ../dashboard.php");
    exit;
}

$id = $_GET['id'];
if (mysqli_query($conn, "DELETE FROM articles WHERE id=$id")) {
    header("Location: ../dashboard.php");
}
?>