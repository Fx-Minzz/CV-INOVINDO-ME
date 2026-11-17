<?php
/*
|--------------------------------------------------------------------------
| PORTOFOLIO FORMAL - MINDO FANBREGAS SITORUS
|--------------------------------------------------------------------------
| Teknologi : PHP, HTML, Tailwind CSS
| Desain    : Minimalis, profesional, dan ramah ATS/rekruter
|
| CARA MENGGUNAKAN:
| 1. Simpan file ini di folder proyek Docker yang sama dengan index.php.
| 2. Buka http://localhost:8000/formal_portofolio.php
| 3. Ubah teks [ISI ...] sesuai data dan pengalamanmu.
| 4. Untuk menambahkan foto, simpan file di folder assets lalu isi
|    nilai $foto dengan path, misalnya: assets/foto-profil.jpg.
|
| Seluruh placeholder sengaja disediakan agar pemilik portofolio
| mengisi sendiri informasi yang belum tercantum pada CV.
|--------------------------------------------------------------------------
*/

$profil = [
    'nama'      => 'Mindo Fanbregas Sitorus',
    'headline'  => 'PPLG/RPL - SMKN 7 Baleendah | Pengembang Aplikasi Web',
    'telepon'   => '+62 838-4091-0949',
    'email'     => 'nclupaturu@gmail.com',
    'alamat'    => 'Kp. Caringin, RT.03/RW.02, Wargamekar',
    'deskripsi' => 'Siswa kelas XII jurusan Rekayasa Perangkat Lunak (RPL) di SMKN 7 Baleendah yang memiliki minat dalam pengembangan aplikasi berbasis web. Berpengalaman mengembangkan proyek menggunakan Laravel, PHP, dan MySQL. Memiliki kemampuan problem solving, serta pribadi yang teliti, bertanggung jawab, dan memiliki kemauan belajar tinggi.',
    'foto'      => 'asset/satu.png',
];

$pendidikan = [
    ['nama' => 'SMK NEGERI 7 BALEENDAH', 'jurusan' => 'PPLG/RPL', 'tahun' => '2024 - Sekarang'],
    ['nama' => 'SMP KP CIPARAY', 'jurusan' => '', 'tahun' => '2021 - 2024'],
    ['nama' => 'SDN BARANANG SIANG', 'jurusan' => '', 'tahun' => '2015 - 2021'],
];

$proyek = [
    [
        'nama'       => 'Perpustakaan Digital',
        'periode'    => '6 Bulan (2025)',
        'peran'      => 'Project Manager',
        'ringkasan'  => 'Membuat aplikasi yang memudahkan siswa maupun guru untuk meminjam buku secara online tanpa harus datang mengantri ke perpustakaan',
        'kontribusi' => [
            'Membuat fitur peminjaman buku, pengembalian buku, dan manajemen data buku',
            'Membuat kerangka kerja aplikasi menggunakan Laravel, PHP, dan MySQL',
            'Meningkatkan efisiensi proses peminjaman dan pengembalian buku',
        ],
        'teknologi'  => 'Laravel, PHP, MySQL, Tailwind CSS',
        'tautan'     => 'https://github.com/Fx-Minzz/Readzy', // Isi URL repository atau demo jika tersedia.
        'gambar'     => '', // Contoh: 'assets/perpustakaan.png'
    ],
    [
        'nama'       => 'Sistem Peminjaman Barang',
        'periode'    => '6 Bulan (2026)',
        'peran'      => 'Fullstack Developer',
        'ringkasan'  => 'Membuat sistem untuk mengelola peminjaman barang di sekolah dengan antarmuka yang user-friendly',
        'kontribusi' => [
            'Membuat fitur peminjaman dan pengembalian barang',
            'Mengembangkan backend menggunakan Laravel dan MySQL',
            'Merancang dan menerapkan antarmuka pengguna dengan Tailwind CSS',
        ],
        'teknologi'  => 'Laravel, PHP, MySQL, Tailwind CSS',
        'tautan'     => 'https://github.com/Fx-Minzz/Peminjaman',
        'gambar'     => '',
    ],
];

$keahlian = [
    'Bahasa pemrograman' => ['PHP'],
    'Framework / UI'     => ['Laravel', 'Tailwind CSS'],
    'Database'           => ['MySQL'],
    'Lainnya'            => ['Git', 'GitHub', 'Docker', 'Postman', 'Visual Studio Code', 'Figma'],
];

$informasiTambahan = [
    'Sertifikasi'  => '[ISI SERTIFIKAT, JIKA ADA]',
    'Organisasi'   => '[ISI PENGALAMAN ORGANISASI, JIKA ADA]',
    'Pencapaian'   => '[ISI PENCAPAIAN, JIKA ADA]',
];

function e($value): string {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio profesional <?= e($profil['nama']) ?>">
    <title>Portofolio - <?= e($profil['nama']) ?></title>

    <!-- Memuat Tailwind CSS untuk styling halaman. -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Menentukan palet warna formal: putih, abu-abu, dan navy. -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: '#183153',
                        slateText: '#334155',
                        softLine: '#dbe2ea',
                        softBg: '#f5f7fa'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-softBg font-sans text-slateText antialiased">

    <!-- PEMBUNGKUS HALAMAN: membatasi lebar konten dan memberi ruang di sekeliling dokumen. -->
    <main class="mx-auto my-5 max-w-5xl bg-white px-6 py-8 shadow-sm sm:my-10 sm:px-12 sm:py-12">

        <!-- HEADER IDENTITAS: nama, bidang yang dituju, dan kontak dalam tampilan bersih. -->
        <header class="border-b-2 border-navy pb-7">
            <!-- BARIS IDENTITAS: foto profil opsional di kiri dan informasi utama di kanan. -->
            <div class="flex flex-col gap-6 sm:flex-row sm:items-center">
                <!-- PEMBUNGKUS FOTO: tampilkan foto jika path telah diisi; jika tidak, tampilkan placeholder. -->
                <div class="h-32 w-32 shrink-0 overflow-hidden rounded-md border border-softLine bg-softBg">
                    <?php if (!empty($profil['foto'])): ?>
                        <img src="<?= e($profil['foto']) ?>" alt="Foto profil <?= e($profil['nama']) ?>"
                             class="h-full w-full object-cover">
                    <?php else: ?>
                        <div class="flex h-full items-center justify-center px-3 text-center text-xs font-medium text-slate-500">
                            [FOTO PROFIL]
                        </div>
                    <?php endif; ?>
                </div>

                <!-- PEMBUNGKUS NAMA: menampilkan nama lengkap dan headline profesional. -->
                <div class="min-w-0 flex-1">
                    <h1 class="text-3xl font-bold tracking-tight text-navy sm:text-4xl">
                        <?= e($profil['nama']) ?>
                    </h1>
                    <p class="mt-2 text-base font-medium text-slate-600">
                        <?= e($profil['headline']) ?>
                    </p>
                    <a href="/index.php"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-flex items-center gap-2 rounded-lg bg-gray-900 px-5 py-2 font-semibold text-white transition hover:bg-gray-700">
                        Lihat Portofolio Kreatif ↗
                    </a>

                    <!-- DAFTAR KONTAK: disusun sederhana agar mudah dipindai oleh perekrut. -->
                    
                    <div class="mt-5 grid gap-3 text-sm sm:grid-cols-2">

                        <!-- WHATSAPP -->
                        <a href="https://wa.me/6283840910949"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex items-center gap-3 rounded-lg border border-softLine p-3 transition hover:border-green-500 hover:bg-green-50">
                            <span class="text-xl">☎</span>
                            <div>
                                <p class="text-xs font-semibold text-slate-500">WhatsApp</p>
                                <p class="font-semibold text-navy group-hover:text-green-700">
                                    <?= e($profil['telepon']) ?>
                                </p>
                            </div>
                            <span class="ml-auto text-slate-400">↗</span>
                        </a>

                        <!-- EMAIL -->
                        <a href="mailto:<?= e($profil['email']) ?>"
                        class="group flex items-center gap-3 rounded-lg border border-softLine p-3 transition hover:border-blue-500 hover:bg-blue-50">
                            <span class="text-xl">✉</span>
                            <div>
                                <p class="text-xs font-semibold text-slate-500">Email</p>
                                <p class="break-all font-semibold text-navy group-hover:text-blue-700">
                                    <?= e($profil['email']) ?>
                                </p>
                            </div>
                            <span class="ml-auto text-slate-400">↗</span>
                        </a>

                        <!-- ALAMAT -->
                        <div class="flex items-center gap-3 rounded-lg border border-softLine p-3 sm:col-span-2">
                            <span class="text-xl">⌖</span>
                            <div>
                                <p class="text-xs font-semibold text-slate-500">Alamat</p>
                                <p class="font-semibold text-navy"><?= e($profil['alamat']) ?></p>
                            </div>
                        </div>

                        <!-- GITHUB -->
                        <a href="https://github.com/Fx-Minzz"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="group flex items-center gap-3 rounded-lg border border-softLine p-3 transition hover:border-gray-500 hover:bg-gray-50 sm:col-span-2">
                            <span class="text-xl">⌘</span>
                            <div>
                                <p class="text-xs font-semibold text-slate-500">GitHub</p>
                                <p class="font-semibold text-navy group-hover:text-gray-700">
                                    github.com/Fx-Minzz
                                </p>
                            </div>
                            <span class="ml-auto text-slate-400">↗</span>
                        </a>

                    </div>

                </div>
            </div>
        </header>

        <!-- BAGIAN PROFIL: ringkasan profesional singkat dalam satu paragraf. -->
        <section id="profil" class="border-b border-softLine py-6">
            <!-- JUDUL BAGIAN: huruf kapital kecil dengan warna navy. -->
            <h2 class="mb-3 text-sm font-bold uppercase tracking-[0.16em] text-navy">Profil Profesional</h2>
            <!-- ISI PROFIL: tempat menuliskan ringkasan diri, fokus, dan nilai yang dapat diberikan. -->
            <p class="text-sm leading-7 text-slate-700">
                <?= e($profil['deskripsi']) ?>
            </p>
        </section>

        <!-- BAGIAN PENDIDIKAN: riwayat pendidikan disusun dari yang terbaru ke yang terdahulu. -->
        <section id="pendidikan" class="border-b border-softLine py-6">
            <!-- JUDUL BAGIAN PENDIDIKAN. -->
            <h2 class="mb-4 text-sm font-bold uppercase tracking-[0.16em] text-navy">Pendidikan</h2>

            <!-- DAFTAR PENDIDIKAN: setiap baris menampilkan institusi, jurusan, dan periode. -->
            <div class="space-y-4">
                <?php foreach ($pendidikan as $item): ?>
                    <!-- ITEM PENDIDIKAN: nama sekolah di kiri dan tahun di kanan. -->
                    <div class="flex flex-col justify-between gap-1 sm:flex-row sm:gap-5">
                        <div>
                            <h3 class="font-semibold text-slate-800"><?= e($item['nama']) ?></h3>
                            <?php if (!empty($item['jurusan'])): ?>
                                <p class="mt-1 text-sm text-slate-600"><?= e($item['jurusan']) ?></p>
                            <?php endif; ?>
                        </div>
                        <p class="shrink-0 text-sm text-slate-500"><?= e($item['tahun']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- BAGIAN PROYEK: menonjolkan bukti kemampuan melalui proyek yang pernah dikerjakan. -->
        <section id="proyek" class="border-b border-softLine py-6">
            <!-- JUDUL BAGIAN PENGALAMAN PROYEK. -->
            <h2 class="mb-4 text-sm font-bold uppercase tracking-[0.16em] text-navy">Proyek Pilihan</h2>

            <!-- DAFTAR PROYEK: satu artikel untuk setiap proyek portofolio. -->
            <div class="space-y-7">
                <?php foreach ($proyek as $item): ?>
                    <!-- KARTU PROYEK: pembungkus informasi proyek tanpa ornamen berlebihan. -->
                    <article class="border-l-2 border-navy pl-4">
                        <!-- JUDUL DAN PERIODE: nama proyek, peran, serta periode pengerjaan. -->
                        <div class="flex flex-col justify-between gap-1 sm:flex-row sm:gap-4">
                            <h3 class="font-semibold text-slate-800"><?= e($item['nama']) ?></h3>
                            <p class="text-sm text-slate-500"><?= e($item['periode']) ?></p>
                        </div>

                        <!-- PERAN PROYEK: menjelaskan posisi atau tanggung jawab dalam pengerjaan. -->
                        <p class="mt-1 text-sm text-slate-600">
                            <span class="font-semibold">Peran:</span> <?= e($item['peran']) ?>
                        </p>

                        <!-- RINGKASAN PROYEK: menjelaskan masalah, tujuan, atau fungsi aplikasi. -->
                        <p class="mt-3 text-sm leading-6 text-slate-700"><?= e($item['ringkasan']) ?></p>

                        <!-- KONTRIBUSI PROYEK: daftar pekerjaan dan fitur yang benar-benar dikerjakan. -->
                        <ul class="mt-3 list-disc space-y-1 pl-5 text-sm leading-6 text-slate-700">
                            <?php foreach ($item['kontribusi'] as $kontribusi): ?>
                                <li><?= e($kontribusi) ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <!-- TEKNOLOGI PROYEK: stack yang digunakan pada proyek tersebut. -->
                        <p class="mt-3 text-sm">
                            <span class="font-semibold text-slate-700">Teknologi:</span>
                            <span class="text-slate-600"><?= e($item['teknologi']) ?></span>
                        </p>

                        <!-- TAUTAN PROYEK: tampil hanya jika repository atau demo telah diisi. -->
                        <?php if (!empty($item['tautan'])): ?>
                            <p class="mt-2 break-all text-sm">
                                <span class="font-semibold">Tautan:</span>
                                <a href="<?= e($item['tautan']) ?>" target="_blank" rel="noopener noreferrer"
                                   class="text-navy underline underline-offset-2"><?= e($item['tautan']) ?></a>
                            </p>
                        <?php else: ?>
                            <p class="mt-2 text-sm text-slate-500">Tautan proyek: [ISI LINK REPOSITORY / DEMO, JIKA ADA]</p>
                        <?php endif; ?>

                        <!-- GAMBAR PROYEK: dokumentasi opsional dengan batas ukuran yang rapi. -->
                        <?php if (!empty($item['gambar'])): ?>
                            <div class="mt-4">
                                <img src="<?= e($item['gambar']) ?>" alt="Dokumentasi <?= e($item['nama']) ?>"
                                     class="max-h-72 rounded border border-softLine object-contain">
                            </div>
                        <?php endif; ?>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- BAGIAN KETERAMPILAN: kemampuan dikelompokkan berdasarkan kategori teknis. -->
        <section id="keterampilan" class="border-b border-softLine py-6">
            <!-- JUDUL BAGIAN KETERAMPILAN. -->
            <h2 class="mb-4 text-sm font-bold uppercase tracking-[0.16em] text-navy">Keterampilan Teknis</h2>

            <!-- GRID KETERAMPILAN: kategori di kiri dan daftar teknologi di kanan. -->
            <div class="space-y-3">
                <?php foreach ($keahlian as $kategori => $daftar): ?>
                    <!-- BARIS KETERAMPILAN: label kategori dan isi skill. -->
                    <div class="grid gap-1 sm:grid-cols-[190px_1fr] sm:gap-4">
                        <h3 class="text-sm font-semibold text-slate-700"><?= e($kategori) ?></h3>
                        <p class="text-sm leading-6 text-slate-600"><?= e(implode(' • ', $daftar)) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- FOOTER: penutup sederhana tanpa dekorasi agar tampilan tetap profesional. -->
        <footer class="border-t border-softLine pt-4 text-xs text-slate-500">
            <p><?= e($profil['nama']) ?> · Portofolio</p>
        </footer>

    </main>
</body>
</html>
