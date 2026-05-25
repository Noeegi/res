<?php
include 'config/database.php';
include 'components/header.php';
include 'components/navbar.php';

if ($_SESSION['role'] !== 'admin') { header("Location: dashboard.php"); exit; }

$id = $_GET['id'];
$article = mysqli_query($conn, "SELECT * FROM articles WHERE id=$id");
$data = mysqli_fetch_assoc($article);
?>
<div class="max-w-xl mx-auto bg-white p-8 my-10 rounded border border-[#E6E1DA] w-full shadow-sm">
    <h2 class="text-xl font-serif font-bold text-[#704F37] mb-6 border-b pb-2">Ubah Data Manuskrip</h2>
    <form action="actions/article_update.php" method="POST" class="space-y-4">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Judul</label>
            <input type="text" name="title" value="<?= $data['title']; ?>" required class="w-full border border-gray-200 p-2 rounded text-sm focus:border-[#704F37] outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Kategori</label>
            <input type="text" name="category" value="<?= $data['category']; ?>" required class="w-full border border-gray-200 p-2 rounded text-sm focus:border-[#704F37] outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">URL Gambar</label>
            <input type="text" name="image_url" value="<?= $data['image_url']; ?>" class="w-full border border-gray-200 p-2 rounded text-sm focus:border-[#704F37] outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Isi Narasi</label>
            <textarea name="content" rows="6" required class="w-full border border-gray-200 p-2 rounded text-sm focus:border-[#704F37] outline-none resize-none"><?= $data['content']; ?></textarea>
        </div>
        <div class="flex space-x-3 pt-2 text-xs font-medium">
            <button type="submit" name="update" class="bg-amber-700 text-white px-4 py-2 rounded hover:bg-amber-800 transition">Perbarui Dokumen</button>
            <a href="dashboard.php" class="border px-4 py-2 rounded text-gray-500 hover:bg-gray-50 transition">Batal</a>
        </div>
    </form>
</div>
</body>
</html>