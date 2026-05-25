<?php include 'components/header.php'; ?>
<div class="flex items-center justify-center min-h-screen p-6">
    <div class="bg-white p-8 rounded border border-[#E6E1DA] w-full max-w-sm shadow-sm">
        <div class="text-center mb-6">
            <a href="index.php" class="text-2xl font-serif font-bold text-[#704F37]">SelasarBudaya.</a>
            <p class="text-xs text-gray-400 mt-1">Masuk untuk melihat galeri artikel lengkap</p>
        </div>
        
        <?php if(isset($_GET['error'])): ?>
            <p class="text-red-500 text-xs text-center bg-red-50 p-2 rounded mb-4">Username atau password keliru.</p>
        <?php endif; ?>

        <form action="actions/auth_login.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-500 mb-1">Username</label>
                <input type="text" name="username" required class="w-full border border-gray-200 p-2.5 rounded text-sm focus:outline-none focus:border-[#704F37] bg-gray-50/50">
            </div>
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-500 mb-1">Password</label>
                <input type="password" name="password" required class="w-full border border-gray-200 p-2.5 rounded text-sm focus:outline-none focus:border-[#704F37] bg-gray-50/50">
            </div>
            <button type="submit" name="login" class="w-full bg-[#704F37] text-white p-2.5 rounded text-sm font-medium hover:bg-[#593E2B] transition shadow-sm">Masuk Sistem</button>
        </form>
        <p class="text-xs text-center text-gray-400 mt-6">Belum bergabung? <a href="register.php" class="text-[#704F37] font-semibold underline">Buat Akun</a></p>
    </div>
</div>
</body>
</html>