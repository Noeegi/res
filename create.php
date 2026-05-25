<?php
include 'components/header.php';
include 'components/navbar.php';
if ($_SESSION['role'] !== 'admin') { header("Location: dashboard.php"); exit; }
?>
<div class="max-w-xl mx-auto bg-[#141414] p-8 my-10 border border-[#262626] w-full shadow-lg">
    <h2 class="text-xl font-display font-bold text-[#E50914] mb-6 uppercase tracking-tight border-b border-[#262626] pb-2">// Tulis Dokumen Kebudayaan</h2>
    <form action="actions/article_store.php" method="POST" class="space-y-4">
        <div>
            <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">Judul Manuskrip</label>
            <input type="text" name="title" required class="w-full border border-[#262626] p-2 bg-black text-white text-sm focus:border-[#E50914] outline-none">
        </div>
        <div>
            <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">Kategori Tradisi</label>
            <input type="text" name="category" required class="w-full border border-[#262626] p-2 bg-black text-white text-sm focus:border-[#E50914] outline-none">
        </div>
        <div>
            <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">Tautan Gambar Sampul (URL)</label>
            <input type="text" name="image_url" placeholder="https://..." class="w-full border border-[#262626] p-2 bg-black text-white text-sm focus:border-[#E50914] outline-none">
        </div>
        <div>
            <label class="block text-[10px] font-bold uppercase tracking-wider text-gray-400 mb-1">Isi Dokumen Narasi</label>
            <textarea name="content" rows="6" required class="w-full border border-[#262626] p-2 bg-black text-white text-sm focus:border-[#E50914] outline-none resize-none"></textarea>
        </div>
        <div class="flex space-x-3 pt-2 text-xs font-bold uppercase tracking-wider">
            <button type="submit" name="submit" class="bg-[#E50914] text-white px-4 py-2 hover:bg-white hover:text-black transition">Simpan & Publikasikan</button>
            <a href="dashboard.php" class="border border-[#262626] text-gray-400 px-4 py-2 hover:bg-[#262626] transition">Batal</a>
        </div>
    </form>
</div>
</body>
</html>