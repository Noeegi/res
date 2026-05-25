<?php
session_start();
include '../config/database.php';

if ($_SESSION['role'] !== 'admin') {
    header("Location: ../dashboard.php");
    exit;
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $image_url = mysqli_real_escape_string($conn, $_POST['image_url']);

    $query = "UPDATE articles SET title='$title', category='$category', content='$content', image_url='$image_url' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: ../dashboard.php");
    }
}
?>