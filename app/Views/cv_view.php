<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Portofolio - <?= esc($profil['nama'] ?? 'Nama Anda') ?></title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css?v=1.2">

    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <script>
        tailwind.config = {
            darkMode: 'class', // Mengaktifkan mode 'class'
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
</head>
<body class="bg-gray-50 dark:bg-gray-950 text-gray-800 dark:text-gray-300 font-sans transition-colors duration-300">

    <nav class="bg-white/70 dark:bg-gray-950/70 backdrop-blur-md text-gray-900 dark:text-white shadow-sm sticky top-0 z-50 transition-colors duration-300">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center relative z-10">
        
        <a class="text-2xl font-bold" href="#">
            <?php 
                $nama = esc($profil['nama'] ?? 'M F');
                $parts = explode(' ', $nama);
                $initials = '';
                foreach ($parts as $part) {
                    $initials .= strtoupper(substr($part, 0, 1));
                }
            ?>
            <span class="bg-blue-600 text-white rounded-md px-2 py-1 mr-1"><?= $initials ?></span>
            <span class="hidden sm:inline"><?= $nama ?></span>
        </a>
        
        <div class="hidden md:flex items-center space-x-8">
            <ul class="flex space-x-8">
                <li><a class="hover:text-blue-600 dark:hover:text-blue-400" href="#tentang">Tentang</a></li>
                <li><a class="hover:text-blue-600 dark:hover:text-blue-400" href="#pengalaman">Pengalaman</a></li>
                <li><a class="hover:text-blue-600 dark:hover:text-blue-400" href="#pendidikan">Pendidikan</a></li>
                <li><a class="hover:text-blue-600 dark:hover:text-blue-400" href="#keahlian">Keahlian</a></li>
            </ul>
            
            <button id="theme-toggle" class="theme-toggle-btn text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 focus:outline-none ml-4 p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition">
                <svg id="theme-toggle-moon" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-sun" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM10 18a1 1 0 01-1-1v-1a1 1 0 112 0v1a1 1 0 01-1 1zm-4.95-2.121a1 1 0 00-1.414 1.414l.707.707a1 1 0 001.414-1.414l-.707-.707zM18 10a1 1 0 01-1-1h-1a1 1 0 110-2h1a1 1 0 011 1zM3 10a1 1 0 01-1-1h-1a1 1 0 110-2h1a1 1 0 011 1zM4.95 6.464a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707z"></path></svg>
            </button>
        </div>
        
        <div class="md:hidden flex items-center">
             <button id="theme-toggle-mobile" class="theme-toggle-btn mr-4 p-2 rounded-full text-slate-900 dark:text-white">
                <svg id="theme-toggle-moon-mobile" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                <svg id="theme-toggle-sun-mobile" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.707.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM10 18a1 1 0 01-1-1v-1a1 1 0 112 0v1a1 1 0 01-1 1zm-4.95-2.121a1 1 0 00-1.414 1.414l.707.707a1 1 0 001.414-1.414l-.707-.707zM18 10a1 1 0 01-1-1h-1a1 1 0 110-2h1a1 1 0 011 1zM3 10a1 1 0 01-1-1h-1a1 1 0 110-2h1a1 1 0 011 1zM4.95 6.464a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707z"></path></svg>
            </button>
            <button id="mobile-menu-button" class="text-slate-900 dark:text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>
    </div>
    
    <div id="mobile-menu" class="hidden md:hidden bg-white dark:bg-slate-800 shadow-lg">
        <ul class="flex flex-col p-4 space-y-2">
            <li><a class="block py-2 px-4 text-slate-800 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-700 rounded transition-colors duration-200" href="#tentang">Tentang</a></li>
            <li><a class="block py-2 px-4 text-slate-800 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-700 rounded transition-colors duration-200" href="#pengalaman">Pengalaman</a></li>
            <li><a class="block py-2 px-4 text-slate-800 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-700 rounded transition-colors duration-200" href="#pendidikan">Pendidikan</a></li>
            <li><a class="block py-2 px-4 text-slate-800 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-700 rounded transition-colors duration-200" href="#keahlian">Keahlian</a></li>
        </ul>
    </div>
</nav>
    <header class="relative bg-gray-50 dark:bg-gray-950 text-center min-h-screen flex flex-col justify-center items-center overflow-hidden p-6 transition-colors duration-300" id="tentang">
        
        <div class="wave-background"></div>
        
        <div class="container mx-auto relative z-10">
            
            <?php if (!empty($profil['url_foto'])) : ?>
                <img data-aos="fade-in" data-aos-delay="100" src="/images/komik.jpg" class="w-40 h-40 md:w-48 md:h-48 rounded-full mx-auto mb-8 border-4 border-blue-500 dark:border-blue-600 shadow-xl object-cover" alt="Foto Profil">
            <?php endif; ?>
            
            <h1 data-aos="fade-up" data-aos-delay="200" class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-gray-900 dark:text-white mb-2 leading-tight">
                <?php 
                    $fullName = esc($profil['nama'] ?? 'Nama Anda');
                    $spacePos = strrpos($fullName, ' ');
                    $firstName = ($spacePos === false) ? $fullName : substr($fullName, 0, $spacePos);
                    $lastName = ($spacePos === false) ? '' : substr($fullName, $spacePos + 1);
                ?>
                <?= $firstName ?> 
                <span class="text-blue-600 dark:text-blue-500"><?= $lastName ?></span>
            </h1>
            <p data-aos="fade-up" data-aos-delay="300" class="text-lg md:text-2xl text-gray-700 dark:text-gray-300 max-w-3xl mx-auto mb-10 font-light tracking-wide">
                <?= esc($profil['ringkasan'] ?? 'Ringkasan singkat...') ?>
            </p>
            
            <div data-aos="fade-up" data-aos-delay="400" class="flex flex-wrap justify-center gap-4">
                <a href="mailto:<?= esc($profil['email']) ?>" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 transform hover:scale-105 shadow-lg text-lg">
                    Hubungi Saya
                </a>
                <a href="#keahlian" class="bg-transparent border-2 border-gray-400 dark:border-gray-600 hover:bg-gray-700 hover:border-gray-700 text-gray-700 dark:text-white hover:text-white font-medium py-3 px-8 rounded-full transition shadow-lg text-lg">
                    Lihat Keahlian
                </a>
            </div>
        </div>
    </header>

    <main class="container mx-auto p-6 md:p-12 max-w-6xl">
        
        <section id="pengalaman" class="my-20 py-10" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-16">Perjalanan Karir</h2>
            <div class="relative pl-6 md:pl-10 border-l-4 border-gray-200 dark:border-gray-700 space-y-12">
                <?php if (!empty($pengalaman)) : ?>
                    <?php foreach ($pengalaman as $index => $item) : ?>
                        <div class="relative" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                            <div class="timeline-dot absolute -left-[1.8rem] md:-left-[32px] top-1 w-6 h-6 bg-blue-600 rounded-full border-4 border-gray-50 dark:border-gray-950"></div>
                            <div class="bg-white dark:bg-gray-800 p-6 md:p-8 rounded-xl shadow-xl transition-all duration-300 hover:shadow-2xl hover:border-l-4 hover:border-blue-500 transform hover:-translate-y-1">
                                <h3 class="text-2xl font-semibold text-blue-600 dark:text-blue-400 mb-1"><?= esc($item['posisi']) ?></h3>
                                <p class="text-gray-700 dark:text-gray-400 font-medium text-lg mb-2"><?= esc($item['judul']) ?></p>
                                <p class="text-sm text-gray-500 dark:text-gray-500 mb-4">
                                    <?= date('M Y', strtotime($item['tanggal_mulai'])) ?> - 
                                    <?= $item['tanggal_selesai'] ? date('M Y', strtotime($item['tanggal_selesai'])) : 'Sekarang' ?>
                                </p>
                                <p class="text-gray-700 dark:text-gray-300 text-base leading-relaxed"><?= esc($item['deskripsi']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="text-center text-gray-500">Belum ada data pengalaman.</p>
                <?php endif; ?>
            </div>
        </section>

        <section id="pendidikan" class="my-20 py-10" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-16">Latar Belakang Pendidikan</h2>
            <div class="relative pl-6 md:pl-10 border-l-4 border-gray-200 dark:border-gray-700 space-y-12">
                <?php if (!empty($pendidikan)) : ?>
                    <?php foreach ($pendidikan as $index => $item) : ?>
                        <div class="relative" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                            <div class="timeline-dot absolute -left-[1.8rem] md:-left-[32px] top-1 w-6 h-6 bg-blue-600 rounded-full border-4 border-gray-50 dark:border-gray-950"></div>
                            <div class="bg-white dark:bg-gray-800 p-6 md:p-8 rounded-xl shadow-xl transition-all duration-300 hover:shadow-2xl hover:border-l-4 hover:border-blue-500 transform hover:-translate-y-1">
                                <h3 class="text-2xl font-semibold text-blue-600 dark:text-blue-400 mb-1"><?= esc($item['institusi']) ?></h3>
                                <p class="text-gray-700 dark:text-gray-400 font-medium text-lg mb-2"><?= esc($item['jurusan']) ?></p>
                                <p class="text-sm text-gray-500 dark:text-gray-500 mb-4">
                                    <?= date('Y', strtotime($item['tanggal_mulai'])) ?> - 
                                    <?= $item['tanggal_selesai'] ? date('Y', strtotime($item['tanggal_selesai'])) : 'Sekarang' ?>
                                </p>
                                <p class="text-gray-700 dark:text-gray-300 text-base leading-relaxed"><?= esc($item['keterangan']) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p class="text-center text-gray-500">Belum ada data pendidikan.</p>
                <?php endif; ?>
            </div>
        </section>

        <section id="keahlian" class="my-20 py-10" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-center text-gray-900 dark:text-white mb-16">Kumpulan Keahlian</h2>
            
            <div class="skill-list max-w-3xl mx-auto">
                
                <?php if (!empty($skills_with_level)) : ?>
                    <?php foreach ($skills_with_level as $skill) : ?>
                        
                        <div class="skill-item" data-aos="fade-up">
                            <div class="skill-item-header">
                                <span class="skill-name"><?= esc($skill['nama']) ?></span>
                                <span class="skill-level"><?= esc($skill['level']) ?></span>
                            </div>
                            <div class="skill-bar-container">
                                <div class="skill-bar-fill" data-level="<?= $skill['percentage'] ?>%"></div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-center text-gray-500">Belum ada data keahlian.</p>
                <?php endif; ?>

            </div>
        </section>

    </main>

    <footer class="bg-white dark:bg-gray-950 text-gray-500 dark:text-gray-400 text-center p-8 mt-20 transition-colors duration-300">
        <div class="container mx-auto">
            <div class="flex justify-center gap-6 mb-4">
    
    <a href="mailto:<?= esc($profil['email']) ?>" 
       class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition transform hover:scale-110"
       title="Kirim Email">
        <span class="sr-only">Email</span> <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h15a3 3 0 013 3v15a3 3 0 01-3 3h-15a3 3 0 01-3-3V4.5zM3 6.879v10.621A1.5 1.5 0 004.5 19.5h15a1.5 1.5 0 001.5-1.5V6.879L12 14.121 3 6.879zM19.5 4.5a1.5 1.5 0 00-1.06-.44l-7.94 7.94a.75.75 0 01-1.06 0L1.56 4.06A1.5 1.5 0 001.5 4.5v.223l10.5 7.875L22.5 4.723V4.5A1.5 1.5 0 0021 3H4.5a1.5 1.5 0 00-1.06.44z" clip-rule="evenodd" />
        </svg>
    </a>

    <a href="<?= esc($profil['url_linkedin']) ?>" target="_blank" 
       class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition transform hover:scale-110"
       title="LinkedIn">
        <span class="sr-only">LinkedIn</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
        </svg>
    </a>

    <a href="<?= esc($profil['url_github']) ?>" target="_blank" 
       class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-400 transition transform hover:scale-110"
       title="GitHub">
        <span class="sr-only">GitHub</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.109-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.91 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
        </svg>
    </a>

</div>
            <p>&copy; <?= date('Y') ?> <?= esc($profil['nama'] ?? 'Nama Anda') ?>. Dibuat dengan CodeIgniter & Tailwind CSS.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="/js/main.js"></script>

</body>
</html>