<?php 
include 'config/database.php';
include 'components/header.php';
include 'components/navbar.php';

$result = mysqli_query($conn, "SELECT * FROM articles ORDER BY created_at DESC LIMIT 3");
?>

<header class="max-w-3xl mx-auto text-center my-16 px-6">
    <span class="text-[10px] font-bold uppercase tracking-widest text-[#704F37] bg-[#EFECE6] px-3 py-1 rounded-full">Arsip Kebudayaan Nusantara</span>
    <h1 class="text-4xl md:text-5xl font-serif font-bold mt-4 mb-6 leading-tight text-[#2C2A29]">Menjelajahi Kedalaman Budaya Indonesia.</h1>
    <p class="text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">Ruang digital minimalis untuk merenungkan warisan, ritus, sejarah, dan seni adiluhung Sabang sampai Merauke.</p>
</header>

<main class="max-w-5xl mx-auto px-6 mb-20 w-full">
    <h2 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-6 border-b border-gray-200 pb-2">Sorotan Kebudayaan Terbaru</h2>
    <div class="grid md:grid-cols-3 gap-10">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <article class="group flex flex-col justify-between">
                <div>
                    <div class="bg-gray-100 aspect-[4/3] rounded overflow-hidden mb-4 border border-[#E6E1DA]">
                        <img src="<?= !empty($row['image_url']) ? $row['image_url'] : 'https://images.unsplash.com/photo-1590055531741-2c938a9d1643?w=600' ?>" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Cover">
                    </div>
                    <span class="text-[11px] font-bold uppercase text-[#A07148] tracking-wider"><?= $row['category']; ?></span>
                    <h3 class="text-lg font-serif font-bold mt-1 text-[#2C2A29] group-hover:text-[#704F37] transition"><?= $row['title']; ?></h3>
                    <p class="text-gray-500 text-xs mt-2 line-clamp-3 leading-relaxed"><?= substr(strip_tags($row['content']), 0, 100); ?>...</p>
                </div>
                <a href="login.php" class="text-xs font-semibold text-[#704F37] mt-4 inline-block hover:underline">Baca Selengkapnya &rarr;</a>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<footer class="text-center py-6 border-t border-[#E6E1DA] text-xs text-gray-400">
    &copy; 2026 Selasar Budaya Indonesia. All Rights Reserved.
</footer>
</body>
</html>