<?php include 'components/header.php'; ?>
<div class="flex items-center justify-center min-h-screen p-6">
    <div class="bg-white p-8 rounded border border-[#E6E1DA] w-full max-w-sm shadow-sm">
        <div class="text-center mb-6">
            <a href="index.php" class="text-2xl font-serif font-bold text-[#704F37]">SelasarBudaya.</a>
            <p class="text-xs text-gray-400 mt-1">Daftar akun pembaca kebudayaan</p>
        </div>
        <form action="actions/auth_register.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-500 mb-1">Username Baru</label>
                <input type="text" name="username" required class="w-full border border-gray-200 p-2.5 rounded text-sm focus:outline-none focus:border-[#704F37] bg-gray-50/50">
            </div>
            <div>
                <label class="block text-xs font-semibold uppercase tracking-wider text-gray-500 mb-1">Buat Password</label>
                <input type="password" name="password" required class="w-full border border-gray-200 p-2.5 rounded text-sm focus:outline-none focus:border-[#704F37] bg-gray-50/50">
            </div>
            <button type="submit" name="register" class="w-full bg-[#A07148] text-white p-2.5 rounded text-sm font-medium hover:bg-[#865E3C] transition shadow-sm">Daftar Pembaca</button>
        </form>
        <p class="text-xs text-center text-gray-400 mt-6">Sudah terdaftar? <a href="login.php" class="text-[#704F37] font-semibold underline">Login Di Sini</a></p>
    </div>
</div>
</body>
</html>