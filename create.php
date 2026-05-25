<?php
include 'components/header.php';
include 'components/navbar.php';

if ($_SESSION['role'] !== 'admin') {
    header("Location: dashboard.php");
    exit;
}
?>
<div class="max-w-xl mx-auto bg-white p-8 my-10 rounded border border-[#E6E1DA] w-full shadow-sm">
    <h2 class="text-xl font-serif font-bold text-[#704F37] mb-6 border-b pb-2">Tulis Manifestasi Budaya Baru</h2>
    <form action="actions/article_store.php" method="POST" class="space-y-4">
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Judul Utama</label>
            <input type="text" name="title" required class="w-full border border-gray-200 p-2 rounded text-sm focus:border-[#704F37] outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Kategori (Tradisi / Seni / Kuliner / Ritus)</label>
            <input type="text" name="category" required class="w-full border border-gray-200 p-2 rounded text-sm focus:border-[#704F37] outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Tautan Gambar Sampul (URL)</label>
            <input type="text" name="image_url" placeholder="https://images.unsplash.com/..." class="w-full border border-gray-200 p-2 rounded text-sm focus:border-[#704F37] outline-none">
        </div>
        <div>
            <label class="block text-xs font-semibold uppercase text-gray-500 mb-1">Narasi Konten</label>
            <textarea name="content" rows="6" required class="w-full border border-gray-200 p-2 rounded text-sm focus:border-[#704F37] outline-none resize-none"></textarea>
        </div>
        <div class="flex space-x-3 pt-2 text-xs font-medium">
            <button type="submit" name="submit" class="bg-[#704F37] text-white px-4 py-2 rounded hover:bg-[#593E2B] transition">Arsipkan Berita</button>
            <a href="dashboard.php" class="border px-4 py-2 rounded text-gray-500 hover:bg-gray-50 transition">Kembali</a>
        </div>
    </form>
</div>
</body>
</html>