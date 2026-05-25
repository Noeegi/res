<?php
include 'config/database.php';
include 'components/header.php';
include 'components/navbar.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

$role = $_SESSION['role'];
$result = mysqli_query($conn, "SELECT * FROM articles ORDER BY created_at DESC");
?>

<main class="max-w-5xl mx-auto px-6 py-10 w-full flex-grow">
    <div class="flex justify-between items-center mb-8 border-b border-gray-200 pb-4">
        <div>
            <h1 class="text-2xl font-serif font-bold text-[#2C2A29]">Ruang Eksplorasi</h1>
            <p class="text-xs text-gray-400">Log Masuk Sebagai: <strong class="text-gray-600"><?= $_SESSION['username']; ?></strong> (<?= ucfirst($role); ?>)</p>
        </div>
        <?php if($role === 'admin'): ?>
            <a href="create.php" class="bg-[#704F37] text-white px-4 py-2 rounded text-xs font-medium hover:bg-[#593E2B] transition shadow-sm">+ Tambah Artikel</a>
        <?php endif; ?>
    </div>

    <!-- Layout Grid Artikel Modern -->
    <div class="grid md:grid-cols-2 gap-8">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <div class="bg-white p-6 rounded border border-[#E6E1DA] flex flex-col justify-between shadow-sm">
                <div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-[10px] font-bold text-[#A07148] uppercase tracking-wider bg-[#F7F4F0] px-2 py-0.5 rounded"><?= $row['category']; ?></span>
                        <span class="text-[10px] text-gray-400"><?= date('d M Y', strtotime($row['created_at'])); ?></span>
                    </div>
                    <h2 class="text-lg font-serif font-bold text-[#2C2A29] mb-3"><?= $row['title']; ?></h2>
                    <p class="text-gray-500 text-xs leading-relaxed whitespace-pre-line mb-4"><?= $row['content']; ?></p>
                </div>
                
                <div class="pt-4 border-t border-gray-100 flex justify-end">
                    <?php if($role === 'admin'): ?>
                        <div class="space-x-4 text-xs font-medium">
                            <a href="edit.php?id=<?= $row['id']; ?>" class="text-amber-700 hover:underline">Sunting</a>
                            <a href="actions/article_delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus karya tulis ini?')" class="text-red-600 hover:underline">Hapus</a>
                        </div>
                    <?php else: ?>
                        <span class="text-[11px] text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded font-medium">✓ Selesai Dibaca</span>
                    <?php endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</main>
</body>
</html>