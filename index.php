<?php 
include 'config/database.php';
include 'components/header.php';
include 'components/navbar.php';

$result = mysqli_query($conn, "SELECT * FROM articles ORDER BY created_at DESC LIMIT 3");
?>

<header class="max-w-6xl mx-auto my-20 px-6 grid md:grid-cols-3 gap-8 items-center">
    <div class="md:col-span-2">
        <span class="text-[10px] font-bold uppercase tracking-widest text-black bg-[#E50914] px-3 py-1 inline-block mb-4 font-sans">
            Manifesto Budaya Nusantara
        </span>
        <h1 class="text-5xl md:text-7xl font-display font-extrabold tracking-tighter text-white leading-none uppercase">
            Membaca Tradisi,<br><span class="text-[#E50914]">Menembus Batas.</span>
        </h1>
    </div>
    <div>
        <p class="text-gray-400 text-sm leading-relaxed border-l-2 border-[#E50914] pl-4 font-serif italic">
            "Sebab kebudayaan bukan sekadar artefak masa lalu yang berdebu, melainkan api membara yang membakar identitas kita hari ini."
        </p>
    </div>
</header>

<main class="max-w-6xl mx-auto px-6 mb-24 w-full">
    <h2 class="text-xs font-bold uppercase tracking-widest text-[#E50914] mb-8 border-b border-[#262626] pb-2">// Katalog Karya Terbaru</h2>
    
    <div class="grid md:grid-cols-3 gap-8">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <article class="bg-[#141414] border border-[#262626] p-6 flex flex-col justify-between group hover:border-[#E50914] hover:shadow-[6px_6px_0px_0px_rgba(229,9,20,1)] transition-all duration-300">
                <div>
                    <div class="bg-black aspect-[16/10] overflow-hidden mb-4 border border-[#262626]">
                        <img src="<?= !empty($row['image_url']) ? $row['image_url'] : 'https://images.unsplash.com/photo-1590055531741-2c938a9d1643?w=600' ?>" class="w-full h-full object-cover grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105 transition duration-500" alt="Cover">
                    </div>
                    <span class="text-[10px] font-mono font-bold uppercase text-[#E50914] block mb-1">/ <?= $row['category']; ?></span>
                    <h3 class="text-xl font-serif font-bold text-white group-hover:text-[#E50914] transition-colors"><?= $row['title']; ?></h3>
                    <p class="text-gray-400 text-xs mt-3 line-clamp-3 leading-relaxed"><?= substr(strip_tags($row['content']), 0, 110); ?>...</p>
                </div>
                
                <div class="mt-6 pt-4 border-t border-[#262626]">
                    <a href="login.php" class="text-xs font-bold uppercase tracking-wider text-white group-hover:text-[#E50914] inline-flex items-center gap-2">
                        Buka Manuskrip <span class="transition-transform group-hover:translate-x-1">&rarr;</span>
                    </a>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<footer class="border-t border-[#262626] py-8 text-center text-[10px] tracking-widest uppercase text-gray-600">
    &copy; 2026 Nusantara Dark Matrix. All Rights Reserved.
</footer>
</body>
</html>