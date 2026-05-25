<?php
session_start();
include '../config/database.php';

if ($_SESSION['role'] !== 'admin') {
    header("Location: ../dashboard.php");
    exit;
}

if (isset($_POST['submit'])) {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $image_url = mysqli_real_escape_string($conn, $_POST['image_url']);

    $query = "INSERT INTO articles (title, category, content, image_url) VALUES ('$title', '$category', '$content', '$image_url')";
    if (mysqli_query($conn, $query)) {
        header("Location: ../dashboard.php");
    }
}
?>