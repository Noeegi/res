<?php include 'components/header.php'; ?>
<div class="flex items-center justify-center min-h-screen p-6 bg-black">
    <div class="bg-[#0D0D0D] p-8 border border-[#262626] w-full max-w-sm hover:border-[#E50914] transition duration-300">
        <div class="text-center mb-6">
            <a href="index.php" class="text-2xl font-display font-extrabold text-white tracking-tighter uppercase">Nusantara<span class="text-[#E50914]">.</span></a>
            <p class="text-[11px] text-gray-500 uppercase tracking-widest mt-1">Otentikasi Identitas</p>
        </div>
        
        <?php if(isset($_GET['error'])): ?>
            <p class="text-[#E50914] text-xs text-center bg-[#262626] p-2 rounded mb-4 font-mono">DATA LOGIN SALAH.</p>
        <?php endif; ?>

        <form action="actions/auth_login.php" method="POST" class="space-y-4">
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Username</label>
                <input type="text" name="username" required class="w-full border border-[#262626] p-2.5 bg-black text-white text-sm focus:outline-none focus:border-[#E50914]">
            </div>
            <div>
                <label class="block text-[10px] font-bold uppercase tracking-widest text-gray-400 mb-1">Password</label>
                <input type="password" name="password" required class="w-full border border-[#262626] p-2.5 bg-black text-white text-sm focus:outline-none focus:border-[#E50914]">
            </div>
            <button type="submit" name="login" class="w-full bg-[#E50914] text-white p-2.5 text-xs font-bold uppercase tracking-widest hover:bg-white hover:text-black transition">Masuk Akses</button>
        </form>
        <p class="text-xs text-center text-gray-500 mt-6">Belum terdaftar? <a href="register.php" class="text-[#E50914] font-bold underline">Buat Akun</a></p>
    </div>
</div>
</body>
</html>