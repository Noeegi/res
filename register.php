<?php include 'components/header.php'; ?>
<div class="flex items-center justify-center min-h-screen p-6 bg-black">
    <div class="bg-[#0D0D0D] p-8 border border-[#262626] w-full max-w-sm hover:border-[#E50914] transition duration-300">
        <div class="text-center mb-6">
            <a href="index.php" class="text-2xl font-display font-extrabold text-white tracking-tighter uppercase">Nusantara<span class="text-[#E50914]">.</span></a>
            <p class="text-[11px] text-gray-500 uppercase tracking-widest mt-1">Registrasi Pembaca</p>
        </div>
        <form action="actions/auth_register.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Username Baru</label>
                <input type="text" name="username" required class="w-full border border-[#262626] p-2.5 bg-black text-white text-sm focus:outline-none focus:border-[#E50914]">
            </div>
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Sandi Rahasia</label>
                <input type="password" name="password" required class="w-full border border-[#262626] p-2.5 bg-black text-white text-sm focus:outline-none focus:border-[#E50914]">
            </div>
            <button type="submit" name="register" class="w-full bg-white text-black p-2.5 text-xs font-bold uppercase tracking-widest hover:bg-[#E50914] hover:text-white transition">Daftar Sekarang</button>
        </form>
        <p class="text-xs text-center text-gray-500 mt-6">Sudah ada akun? <a href="login.php" class="text-[#E50914] font-bold underline">Masuk Saja</a></p>
    </div>
</div>
</body>
</html>