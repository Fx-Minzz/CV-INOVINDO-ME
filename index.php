<?php
/*
|--------------------------------------------------------------------------
| PORTOFOLIO - MINDO FANBREGAS SITORUS
|--------------------------------------------------------------------------
| Teknologi: PHP, HTML, Tailwind CSS
| Cara menjalankan:
| 1. Simpan file ini sebagai index.php.
| 2. Letakkan di folder proyek/server PHP (contoh: htdocs/portofolio).
| 3. Jalankan Apache/PHP, lalu buka http://localhost/portofolio.
| 4. Ganti teks bertanda [ISI ...] dengan informasi milikmu sendiri.
|
| Catatan:
| - Struktur dan gaya visual mengikuti CV Kreatif PDF yang diberikan.
| - Konten identitas yang sudah tercantum di CV dipertahankan.
| - Bagian placeholder sengaja dikosongkan agar dapat kamu lengkapi.
|--------------------------------------------------------------------------
*/

// Data utama. Ubah nilai di bagian ini untuk memperbarui isi portofolio.
$profil = [
    'nama'      => 'MINDO FANBREGAS SITORUS',
    'tagline'   => 'REKAYASA PERANGKAT LUNAK (RPL)',
    'telepon'   => '+62 838-4091-0949',
    'email'     => 'nclupaturu@gmail.com',
    'alamat'    => 'Kp. Caringin, RT.03/RW.02, Wargamekar',
    'deskripsi' => 'Siswa SMKN 7 Baleendah yang berfokus pada bidang Rekayasa Perangkat Lunak (RPL). Berpengalaman dalam Laravel, Tailwind, MySQL, dan PHP',
    'foto'      => 'asset/satu.png',
];

$pendidikan = [
    ['nama' => 'SDN BARANANG SIANG', 'tahun' => '2015 - 2021'],
    ['nama' => 'SMP KP CIPARAY', 'tahun' => '2021 - 2024'],
    ['nama' => 'SMK NEGERI 7 BALEENDAH', 'tahun' => '2024 - Sekarang'],
];

// Tambahkan atau ubah proyek sesuai pengalamanmu.
$proyek = [
    [
        'nama' => 'Proyek - Perpustakaan Digital',
        'deskripsi' => 'Membuat proyek berbasis website, membuat fitur pengelolaan buku, peminjaman dan pengembalian, serta menerapkan operasi CRUD.',
        'teknologi' => 'Laravel, Tailwind CSS, PHP, MySQL',

        // ARRAY DOKUMENTASI PERPUSTAKAAN
        'gambar' => [
            'asset/perpustakaan/dashboard.png',
            'asset/perpustakaan/kategori.png',
            'asset/perpustakaan/buku.png',
            'asset/perpustakaan/laporan.png',
            'asset/perpustakaan/peminjaman.png',
            'asset/perpustakaan/user.png',
        ],
    ],

    [
        'nama' => 'Proyek - Peminjaman Barang',
        'deskripsi' => 'Membuat proyek berbasis website, membuat sistem autentikasi dan hak akses, mengelola data menggunakan MySQL.',
        'teknologi' => 'Laravel, Tailwind CSS, PHP, MySQL',

        // ARRAY DOKUMENTASI PEMINJAMAN
        'gambar' => [
            'asset/peminjaman/dashboard.png',
            'asset/peminjaman/alat.png',
            'asset/peminjaman/kategori.png',
            'asset/peminjaman/user.png',
            'asset/peminjaman/peminjaman.png',
            'asset/peminjaman/pengembalian.png',
            'asset/peminjaman/log.png',
            'asset/peminjaman/laporan.png',
        ],
    ],
];

$keahlian = [
    'Laravel',
    'Tailwind CSS',
    'PHP',
    'MySQL',
];

// Escape output agar teks yang diisi tidak dianggap sebagai HTML.
function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio | <?= e($profil['nama']) ?></title>

    <!-- Tailwind CSS melalui CDN. -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Konfigurasi warna agar konsisten dengan CV Kreatif. -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        parchment: '#f6dfad',
                        paper: '#ffedc8',
                        wood: '#75401f',
                        woodDark: '#3f2416',
                        pixelGreen: '#79a943',
                        forest: '#244c2b',
                        ink: '#4a3020'
                    },
                    fontFamily: {
                        pixel: ['"Courier New"', 'monospace']
                    },
                    boxShadow: {
                        pixel: '5px 5px 0 #3f2416, -2px -2px 0 #3f2416',
                        panel: '4px 4px 0 #3f2416'
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen bg-woodDark p-3 text-ink sm:p-6">

    <!-- PEMBUNGKUS UTAMA: latar perkamen, bingkai tebal, dan jarak halaman. -->
    <main class="mx-auto max-w-5xl border-[8px] border-woodDark bg-parchment p-3 shadow-pixel sm:border-[12px] sm:p-7">

        <!-- DEKORASI ATAS: kotak hijau pixel sebagai aksen sudut ala Minecraft. -->
        <div class="mb-5 flex justify-between" aria-hidden="true">
            <span class="h-5 w-5 border-4 border-forest bg-pixelGreen"></span>
            <span class="h-5 w-5 border-4 border-forest bg-pixelGreen"></span>
        </div>

        <!-- HEADER PROFIL: area foto di kiri dan nama serta kontak di kanan. -->
        <header class="mb-8 grid gap-6 md:grid-cols-[230px_1fr] md:items-center">

            <!-- PEMBUNGKUS FOTO: ganti kotak placeholder dengan tag img milikmu. -->
            <div class="mx-auto w-full max-w-[230px] border-[7px] border-gray-700 bg-gray-400 p-2 shadow-pixel">
                <div class="flex aspect-square items-center justify-center border-4 border-gray-900 bg-[#d8c18f] text-center text-sm font-bold text-wood">
                    <img src="<?= e($profil['foto']) ?>" alt="Foto Profil" class="w-32 h-32 object-cover rounded-lg">
                </div>

                <!-- PEMBUNGKUS IKON TEKNOLOGI: dekorasi kecil seperti ikon pada CV. -->
                <div class="mt-2 grid grid-cols-4 gap-1 text-center text-xs font-black">
                    <span class="border-2 border-gray-800 bg-gray-900 p-2 text-red-400">PHP</span>
                    <span class="border-2 border-gray-800 bg-gray-900 p-2 text-cyan-300">CSS</span>
                    <span class="border-2 border-gray-800 bg-gray-900 p-2 text-yellow-300">SQL</span>
                    <span class="border-2 border-gray-800 bg-gray-900 p-2 text-green-300">...</span>
                </div>
            </div>

            <!-- PEMBUNGKUS IDENTITAS: nama besar, garis aksen hijau, dan informasi kontak. -->
            <div>
                <h1 class="font-pixel text-3xl font-black leading-tight tracking-tight text-forest sm:text-5xl">
                    <?= e($profil['nama']) ?>
                </h1>
                <p class="mt-2 text-sm font-bold text-wood sm:text-base"><?= e($profil['tagline']) ?></p>
                <a href="/index_formal.php"
                target="_blank"
                rel="noopener noreferrer"
                class="mt-4 inline-flex items-center gap-2 border-4 border-woodDark bg-forest px-5 py-2 font-bold text-paper shadow-panel transition hover:-translate-y-1 hover:bg-wood">
                    <span>▣</span>
                    Lihat Portofolio Formal
                    <span>↗</span>
                </a>

                <!-- GARIS PEMISAH: garis hijau sebagai aksen visual header. -->
                <div class="my-4 h-1 w-full bg-pixelGreen"></div>

                <!-- KARTU KONTAK: panel cokelat dengan teks krem seperti bagian kontak CV. -->
                <div class="border-4 border-woodDark bg-wood p-4 text-paper shadow-panel sm:p-5">
                    <div class="grid gap-3 text-sm font-bold sm:text-base">
                        <p><span class="mr-2 text-pixelGreen">▣</span><?= e($profil['tagline']) ?></p>
                        <p><span class="mr-2 text-pixelGreen">☎</span><?= e($profil['telepon']) ?></p>
                        <p><span class="mr-2 text-pixelGreen">✉</span><?= e($profil['email']) ?></p>
                        <p><span class="mr-2 text-pixelGreen">⌖</span><?= e($profil['alamat']) ?></p>
                    </div>
                </div>
            </div>
        </header>

        <!-- KOMPONEN PANEL: pola judul cokelat dan isi panel warna perkamen. -->

        <!-- BAGIAN PROFIL: deskripsi singkat tentang dirimu. -->
        <section id="profil" class="mb-6 overflow-hidden border-4 border-woodDark shadow-panel">
            <!-- HEADER PANEL PROFIL: ikon blok rumput dan judul hijau. -->
            <div class="flex items-center gap-3 bg-wood px-4 py-3 text-pixelGreen">
                <span class="text-2xl">▰</span>
                <h2 class="font-pixel text-xl font-black uppercase sm:text-2xl">Profil</h2>
            </div>
            <!-- ISI PANEL PROFIL: ganti placeholder dengan paragraf profil pribadi. -->
            <div class="bg-paper p-5 text-sm font-semibold leading-7 sm:text-base">
                <?= e($profil['deskripsi']) ?>
            </div>
        </section>

        <!-- BAGIAN PENDIDIKAN: daftar sekolah dan periode pendidikan. -->
        <section id="pendidikan" class="mb-6 overflow-hidden border-4 border-woodDark shadow-panel">
            <!-- HEADER PANEL PENDIDIKAN: judul panel dengan ikon buku. -->
            <div class="flex items-center gap-3 bg-wood px-4 py-3 text-pixelGreen">
                <span class="text-2xl">▤</span>
                <h2 class="font-pixel text-xl font-black uppercase sm:text-2xl">Pendidikan</h2>
            </div>
            <!-- ISI PANEL PENDIDIKAN: tiap baris memuat nama sekolah dan tahun. -->
            <div class="space-y-4 bg-paper p-5">
                <?php foreach ($pendidikan as $item): ?>
                    <!-- BARIS PENDIDIKAN: titik hijau, nama sekolah, dan tahun di sisi kanan. -->
                    <div class="grid gap-1 text-sm font-bold sm:grid-cols-[1fr_auto] sm:items-center sm:text-base">
                        <p><span class="mr-2 text-pixelGreen">▪</span><?= e($item['nama']) ?></p>
                        <p class="pl-4 text-forest sm:pl-0"><?= e($item['tahun']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- BAGIAN PENGALAMAN PROYEK: daftar proyek yang pernah dibuat. -->
        <section id="proyek" class="mb-6 overflow-hidden border-4 border-woodDark shadow-panel">
            <!-- HEADER PANEL PROYEK: ikon alat dan judul bagian pengalaman. -->
            <div class="flex items-center gap-3 bg-wood px-4 py-3 text-pixelGreen">
                <span class="text-2xl">⚒</span>
                <h2 class="font-pixel text-xl font-black uppercase sm:text-2xl">Pengalaman Proyek</h2>
            </div>

            <!-- ISI PANEL PROYEK: setiap proyek memiliki judul, deskripsi, teknologi, dan gambar opsional. -->
            <div class="divide-y-2 divide-dashed divide-pixelGreen bg-paper px-5">
                <?php foreach ($proyek as $item): ?>
                    <!-- KARTU PROYEK: satu pembungkus untuk seluruh informasi satu proyek. -->
                    <article class="py-5">
                        <!-- JUDUL PROYEK: nama proyek ditampilkan dengan penanda hijau. -->
                        <h3 class="font-bold text-ink">
                            <span class="mr-2 text-pixelGreen">▪</span><?= e($item['nama']) ?>
                        </h3>

                        <!-- DESKRIPSI PROYEK: uraian tugas, fitur, kontribusi, dan hasil proyek. -->
                        <p class="mt-2 pl-5 text-sm font-medium leading-6 sm:text-base">
                            <?= e($item['deskripsi']) ?>
                        </p>

                        <!-- TEKNOLOGI PROYEK: informasi stack yang digunakan pada proyek. -->
                        <p class="mt-2 pl-5 text-sm font-bold text-forest">
                            Teknologi: <?= e($item['teknologi']) ?>
                        </p>

                        <!-- DOKUMENTASI PROYEK: gambar hanya tampil jika path gambar sudah diisi. -->
                        
                        <!-- DOKUMENTASI PROYEK: galeri screenshot menggunakan array PHP. -->
                        <?php if (!empty($item['gambar'])): ?>

                            <!-- GALERI DOKUMENTASI PROYEK -->
                            <div class="mt-5 grid grid-cols-1 gap-4 pl-5 sm:grid-cols-2">

                                <?php foreach ($item['gambar'] as $gambar): ?>

                                    <!-- PEMBUNGKUS SETIAP GAMBAR -->
                                    <div class="overflow-hidden rounded-lg border-4 border-woodDark bg-parchment shadow-panel">

                                        <img
                                            src="<?= e($gambar) ?>"
                                            alt="Dokumentasi <?= e($item['nama']) ?>"
                                            class="h-48 w-full object-contain"
                                            loading="lazy"
                                        >

                                    </div>

                                <?php endforeach; ?>

                            </div>

                        <?php else: ?>

    <!-- PLACEHOLDER JIKA BELUM ADA DOKUMENTASI -->
    <div class="ml-5 mt-4 flex min-h-28 items-center justify-center border-2 border-dashed border-wood bg-parchment p-4 text-center text-xs font-bold text-wood">
        [TAMBAHKAN SCREENSHOT / DOKUMENTASI PROYEK]
    </div>

<?php endif; ?>

                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- BAGIAN KETERAMPILAN: daftar teknologi dalam bentuk kotak seperti tombol item game. -->
        <section id="keterampilan" class="mb-6 overflow-hidden border-4 border-woodDark shadow-panel">
            <!-- HEADER PANEL KETERAMPILAN: ikon pedang dan judul hijau. -->
            <div class="flex items-center gap-3 bg-wood px-4 py-3 text-pixelGreen">
                <span class="text-2xl">⚔</span>
                <h2 class="font-pixel text-xl font-black uppercase sm:text-2xl">Keterampilan</h2>
            </div>
            <!-- ISI PANEL KETERAMPILAN: grid responsif berisi badge teknologi. -->
            <div class="grid grid-cols-2 gap-3 bg-paper p-5 sm:grid-cols-4">
                <?php foreach ($keahlian as $skill): ?>
                    <!-- BADGE SKILL: kotak hijau dengan border gelap dan bayangan pixel. -->
                    <div class="border-4 border-woodDark bg-forest px-3 py-3 text-center text-sm font-black text-paper shadow-panel">
                        <?= e($skill) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- FOOTER: penutup halaman dengan gaya sederhana dan warna hijau gelap. -->
        <footer class="border-t-4 border-dashed border-pixelGreen pt-5 text-center">
            <p class="font-pixel text-sm font-black text-forest sm:text-base"><?= e($profil['nama']) ?></p>
            <p class="mt-2 text-xs font-semibold text-wood">PORTOFOLIO PRIBADI</p>
        </footer>

        <!-- DEKORASI BAWAH: aksen kotak pixel untuk menyeimbangkan bagian atas halaman. -->
        <div class="mt-5 flex justify-between" aria-hidden="true">
            <span class="h-5 w-5 border-4 border-forest bg-pixelGreen"></span>
            <span class="h-5 w-5 border-4 border-forest bg-pixelGreen"></span>
        </div>
    </main>
</body>
</html>
