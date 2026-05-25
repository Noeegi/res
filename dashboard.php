<?php
include 'config/database.php';
include 'components/header.php';
include 'components/navbar.php';

if (!isset($_SESSION['username'])) { header("Location: login.php"); exit; }
$role = $_SESSION['role'];
$result = mysqli_query($conn, "SELECT * FROM articles ORDER BY created_at DESC");
?>

<main class="max-w-6xl mx-auto px-6 py-12 w-full flex-grow">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12 border-b border-[#262626] pb-6 gap-4">
        <div>
            <h1 class="text-3xl font-display font-extrabold uppercase tracking-tight text-white">Pusat Kendali</h1>
            <p class="text-xs text-gray-500 mt-1">Sesi: <span class="text-[#E50914] font-bold"><?= $_SESSION['username']; ?></span> <span class="bg-[#E50914] text-white text-[9px] px-2 py-0.5 ml-1 font-mono uppercase font-bold"><?= $role; ?></span></p>
        </div>
        <?php if($role === 'admin'): ?>
            <a href="create.php" class="bg-[#E50914] text-white px-5 py-2.5 text-xs font-bold uppercase tracking-wider hover:bg-white hover:text-black transition shadow-[4px_4px_0px_0px_rgba(255,255,255,0.1)]">
                + Rilis Tulisan Baru
            </a>
        <?php endif; ?>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="bg-[#141414] p-6 border border-[#262626] flex flex-col justify-between hover:border-[#E50914] transition-all">
                <div>
                    <div class="flex justify-between items-center mb-3">
                        <span class="text-[9px] font-mono font-bold text-black bg-[#E50914] px-2 py-0.5 uppercase tracking-wider"><?= $row['category']; ?></span>
                        <span class="text-[10px] text-gray-500 font-mono"><?= date('d/m/Y', strtotime($row['created_at'])); ?></span>
                    </div>
                    <h2 class="text-xl font-serif font-bold text-white mb-3 leading-tight"><?= $row['title']; ?></h2>
                    <p class="text-gray-400 text-xs leading-relaxed whitespace-pre-line mb-6 border-l border-[#262626] pl-3"><?= $row['content']; ?></p>
                </div>
                
                <div class="pt-4 border-t border-[#262626] flex justify-end items-center">
                    <?php if($role === 'admin'): ?>
                        <div class="space-x-4 text-xs font-bold uppercase tracking-wider">
                            <a href="edit.php?id=<?= $row['id']; ?>" class="text-gray-400 hover:text-white underline">Sunting</a>
                            <a href="actions/article_delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus permanen arsip ini?')" class="text-[#E50914] hover:underline">Hapus</a>
                        </div>
                    <?php else: ?>
                        <span class="text-[9px] font-bold uppercase tracking-widest text-[#E50914] bg-[#262626] px-2 py-1">✓ Selesai Terbaca</span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>
</body>
</html>