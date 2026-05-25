<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="border-b border-[#E6E1DA] bg-white/80 backdrop-blur-md sticky top-0 z-50 transition-all">
    <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="index.php" class="text-xl font-serif font-bold tracking-wide text-[#704F37] hover:opacity-80 transition">
            Selasar<span class="text-[#A07148]">Budaya.</span>
        </a>
        <div class="space-x-6 text-sm font-medium flex items-center">
            <a href="index.php" class="hover:text-[#704F37] transition">Beranda</a>
            <?php if(isset($_SESSION['username'])): ?>
                <a href="dashboard.php" class="text-[#704F37] font-semibold hover:underline">Dashboard</a>
                <a href="logout.php" class="bg-red-50 text-red-600 px-3 py-1.5 rounded hover:bg-red-100 transition text-xs">Keluar</a>
            <?php else: ?>
                <a href="login.php" class="hover:text-[#704F37] transition">Masuk</a>
                <a href="register.php" class="bg-[#704F37] text-white px-4 py-2 rounded shadow-sm hover:bg-[#593E2B] transition text-xs">Daftar</a>
            <?php endif; ?>
        </div>
    </div>
</nav>