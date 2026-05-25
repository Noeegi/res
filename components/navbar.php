<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="border-b border-[#262626] bg-[#0D0D0D]/90 backdrop-blur-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="index.php" class="text-xl font-display font-extrabold tracking-tighter uppercase text-white hover:text-[#E50914] transition-colors duration-300">
            Nusantara<span class="text-[#E50914]">.</span>
        </a>
        <div class="space-x-6 text-xs font-bold uppercase tracking-widest flex items-center">
            <a href="index.php" class="text-gray-400 hover:text-white transition">Beranda</a>
            <?php if(isset($_SESSION['username'])): ?>
                <a href="dashboard.php" class="text-white hover:text-[#E50914] transition border-b border-[#E50914]">Dashboard</a>
                <a href="logout.php" class="bg-[#E50914] text-white px-3 py-1.5 hover:bg-white hover:text-black transition tracking-normal font-sans font-bold">Keluar</a>
            <?php else: ?>
                <a href="login.php" class="text-gray-400 hover:text-white transition">Masuk</a>
                <a href="register.php" class="bg-[#E50914] text-white px-4 py-2 hover:bg-white hover:text-black transition shadow-[3px_3px_0px_0px_rgba(255,255,255,0.2)]">Daftar</a>
            <?php endif; ?>
        </div>
    </div>
</nav>