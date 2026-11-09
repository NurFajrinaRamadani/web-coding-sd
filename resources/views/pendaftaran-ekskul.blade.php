<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Daftar Ekstrakurikuler Coding & AI - Rakit AI</title>
    <meta name="description"
        content="Pendaftaran program ekstrakurikuler coding dan kecerdasan buatan (AI) untuk sekolah dasar dan menengah bersama Rakit AI. Kurikulum standar internasional UK & Jepang." />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            green: '#00C06A',
                            greenDark: '#009F54',
                            greenLight: '#E8F9F1',
                            navy: '#1A2B49',
                            navyMuted: '#4A5578',
                            navyDark: '#121D32',
                            orange: '#E84E38',
                            orangeHover: '#D63E29',
                            blue: '#2B7FFF',
                            purple: '#8B5CF6',
                            yellow: '#FFC727',
                            bgLight: '#FCFDFE'
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif']
                    },
                    boxShadow: {
                        'card': '0 10px 25px -5px rgba(26, 43, 73, 0.07)',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-brand-bgLight text-brand-navy antialiased selection:bg-brand-green selection:text-white pb-14 overflow-x-hidden">

    <!-- ================= HEADER / NAVBAR ================= -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a class="flex items-center gap-2" href="{{ route('home') }}">
                <img alt="Rakit AI Logo" class="h-12 w-auto object-contain" src="/logo.png" />
            </a>

            <nav class="hidden md:flex items-center gap-6 lg:gap-8 text-sm font-bold text-gray-600">
                <a href="{{ route('home') }}" class="hover:text-brand-orange transition-colors">Beranda</a>
                <a href="#pilihan-program" class="hover:text-brand-orange transition-colors">Program Ekskul</a>
                <a href="#alur-pendaftaran" class="hover:text-brand-orange transition-colors">Alur Pendaftaran</a>
                <a href="#formulir" class="text-brand-orange font-black flex items-center gap-1.5">
                    <span>Formulir Pendaftaran</span>
                    <span class="w-2 h-2 rounded-full bg-brand-orange animate-pulse"></span>
                </a>
                <a href="#faq-ekskul" class="hover:text-brand-orange transition-colors">FAQ</a>
            </nav>

            <div class="flex items-center gap-3">
                <a class="bg-brand-orange hover:bg-brand-orangeHover text-white text-[11px] sm:text-xs font-black px-4 sm:px-5 py-2.5 rounded-full uppercase tracking-wider transition-all shadow-md active:scale-95"
                    href="#formulir">
                    Daftar Sekarang
                </a>
                <button id="mobile-menu-btn"
                    class="md:hidden p-2 text-brand-navy hover:text-brand-orange transition-colors focus:outline-none"
                    type="button" aria-label="Menu navigasi">
                    <svg id="mobile-menu-open-icon" class="w-6 h-6 stroke-current stroke-2" fill="none" viewBox="0 0 24 24">
                        <path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <svg id="mobile-menu-close-icon" class="w-6 h-6 stroke-current stroke-2 hidden" fill="none" viewBox="0 0 24 24">
                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Navigation Panel -->
        <div id="mobile-menu-panel"
            class="hidden md:hidden border-t border-gray-100 bg-white/98 backdrop-blur-md px-4 pt-3 pb-5 shadow-xl transition-all">
            <nav class="flex flex-col gap-1 text-sm font-bold text-gray-700">
                <a href="{{ route('home') }}"
                    class="mobile-nav-link py-2.5 px-3 rounded-xl hover:bg-orange-50 hover:text-brand-orange transition-colors">Beranda</a>
                <a href="#pilihan-program"
                    class="mobile-nav-link py-2.5 px-3 rounded-xl hover:bg-orange-50 hover:text-brand-orange transition-colors">Program Ekskul</a>
                <a href="#alur-pendaftaran"
                    class="mobile-nav-link py-2.5 px-3 rounded-xl hover:bg-orange-50 hover:text-brand-orange transition-colors">Alur Pendaftaran</a>
                <a href="#formulir"
                    class="mobile-nav-link py-2.5 px-3 rounded-xl bg-orange-50 text-brand-orange transition-colors">Formulir Pendaftaran</a>
                <a href="#faq-ekskul"
                    class="mobile-nav-link py-2.5 px-3 rounded-xl hover:bg-orange-50 hover:text-brand-orange transition-colors">FAQ</a>
            </nav>
        </div>
    </header>

    <!-- ================= HERO SECTION ================= -->
    <section class="relative w-full overflow-hidden pt-12 md:pt-20 pb-20 md:pb-28 bg-gradient-to-b from-white via-orange-50/20 to-white">
        <!-- Background Accents -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-brand-orange/10 rounded-full blur-3xl -z-10 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-brand-yellow/15 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center max-w-3xl mx-auto">
                <div class="inline-flex items-center gap-2 bg-[#FF9B85]/20 border border-brand-orange/30 text-brand-orange px-4 py-1.5 rounded-full mb-6 shadow-sm">
                    <span class="w-2.5 h-2.5 rounded-full bg-brand-orange animate-ping"></span>
                    <span class="text-[11px] font-black tracking-widest uppercase">Pendaftaran Ekstrakurikuler 2026/2027</span>
                </div>

                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-black text-brand-navy tracking-tight leading-[1.15] mb-6">
                    Buka Potensi Siswa Lewat <br />
                    <span class="text-brand-orange relative inline-block">
                        Ekskul Coding & AI
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-brand-orange/30" preserveAspectRatio="none" viewBox="0 0 100 10">
                            <path d="M0 5 Q 50 0 100 5" fill="transparent" stroke="currentColor" stroke-width="4"></path>
                        </svg>
                    </span>
                </h1>

                <p class="text-base sm:text-lg text-gray-600 font-medium leading-relaxed max-w-2xl mx-auto mb-9">
                    Rakit AI siap bermitra dengan sekolah dasar & menengah Anda menghadirkan ekstrakurikuler teknologi interaktif berstandar <strong>UK & Jepang</strong>, dipandu mentor tersertifikasi.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#formulir"
                        class="w-full sm:w-auto bg-brand-orange hover:bg-brand-orangeHover text-white text-sm font-black py-4 px-8 rounded-full shadow-lg shadow-orange-500/25 uppercase tracking-wider flex items-center justify-center gap-2 transition-all active:scale-95">
                        <span>Isi Formulir Pendaftaran</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                    </a>
                    <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20kami%20tertarik%20membuka%20ekskul%20coding%20di%20sekolah%20kami"
                        target="_blank" rel="noopener noreferrer"
                        class="w-full sm:w-auto bg-white hover:bg-gray-50 text-brand-navy border-2 border-brand-navy text-sm font-bold py-3.5 px-8 rounded-full transition-all active:scale-95 shadow-sm flex items-center justify-center gap-2">
                        <svg class="w-4 h-4 fill-[#25D366]" viewBox="0 0 24 24">
                            <path d="M12.031 2C6.495 2 2 6.495 2 12.031a9.98 9.98 0 0 0 1.554 5.342L2 22l4.78-1.517a9.99 9.99 0 0 0 5.251 1.488c5.536 0 10.031-4.495 10.031-10.031S17.567 2 12.031 2zm0 18.232a8.21 8.21 0 0 1-4.223-1.163l-.303-.18-3.136.996.999-3.058-.198-.315a8.2 8.2 0 1 1 6.861 3.72zm4.55-6.177c-.25-.125-1.477-.729-1.706-.813-.229-.083-.396-.125-.563.125-.167.25-.646.813-.792.98-.146.166-.292.187-.542.062s-1.054-.388-2.008-1.238c-.742-.662-1.243-1.48-1.389-1.73-.146-.25-.016-.385.109-.51.112-.112.25-.292.375-.438s.167-.25.25-.417a.52.52 0 0 0-.021-.5c-.062-.125-.562-1.354-.77-1.854-.203-.487-.41-.421-.563-.429l-.479-.008c-.167 0-.438.062-.667.312s-.875.854-.875 2.083c0 1.229.896 2.417 1.021 2.583.125.167 1.763 2.693 4.271 3.777.597.258 1.064.412 1.428.528.6.191 1.146.164 1.578.099.481-.072 1.477-.604 1.685-1.188.208-.583.208-1.083.146-1.188-.063-.104-.229-.167-.479-.292z" />
                        </svg>
                        <span>Konsultasi Cepat WhatsApp</span>
                    </a>
                </div>

                <!-- Trust Badges Grid -->
                <div class="mt-14 pt-10 border-t border-gray-200/60 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                    <div>
                        <div class="text-2xl sm:text-3xl font-black text-brand-navy">40+</div>
                        <div class="text-xs sm:text-sm font-semibold text-gray-500 mt-1">Sekolah Mitra</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-black text-brand-orange">1.500+</div>
                        <div class="text-xs sm:text-sm font-semibold text-gray-500 mt-1">Siswa Ekskul Aktif</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-black text-brand-navy">UK & JP</div>
                        <div class="text-xs sm:text-sm font-semibold text-gray-500 mt-1">Standar Kurikulum</div>
                    </div>
                    <div>
                        <div class="text-2xl sm:text-3xl font-black text-brand-green">100%</div>
                        <div class="text-xs sm:text-sm font-semibold text-gray-500 mt-1">Mentor Bersertifikat</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= PILIHAN PROGRAM EKSTRAKURIKULER ================= -->
    <section class="py-16 md:py-24 bg-white border-y border-gray-100" id="pilihan-program">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-14">
                <span class="text-xs font-black uppercase tracking-widest text-brand-orange bg-orange-50 border border-orange-100 px-4 py-1.5 rounded-full inline-block mb-3">
                    Kategori Program
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy tracking-tight">
                    Pilihan Paket Ekstrakurikuler Sesuai Jenjang Siswa
                </h2>
                <p class="text-sm sm:text-base text-gray-500 font-medium mt-3">
                    Klik tombol "Pilih Program" untuk otomatis memasukkan pilihan ke formulir pendaftaran.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                <!-- Program 1 -->
                <div class="bg-[#FCFDFE] rounded-[32px] p-7 sm:p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center gap-1.5 bg-[#E8F4FF] text-[#2B7FFF] font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                🎒 Kelas 1 - 3 SD
                            </span>
                            <span class="text-[11px] font-bold text-gray-400">Tingkat Dasar</span>
                        </div>
                        <h3 class="text-2xl font-black text-brand-navy mb-2">Junior Tech Explorer</h3>
                        <p class="text-xs sm:text-sm text-gray-500 font-medium mb-6">
                            Membangun fondasi logika berpikir komputasi anak lewat visual block coding yang penuh warna dan permainan seru.
                        </p>

                        <div class="bg-gray-50 rounded-2xl p-4 mb-6 border border-gray-100/80 space-y-2">
                            <div class="text-[11px] font-black uppercase tracking-wider text-brand-navy">Materi Pokok:</div>
                            <ul class="text-xs sm:text-sm text-gray-600 space-y-1.5">
                                <li class="flex items-center gap-2"><span>•</span> Scratch Jr & Visual Coding</li>
                                <li class="flex items-center gap-2"><span>•</span> Logika Perintah & Algoritma Sederhana</li>
                                <li class="flex items-center gap-2"><span>•</span> Pembuatan Animasi & Cerita Interaktif</li>
                            </ul>
                        </div>

                        <div class="space-y-2.5 mb-8 text-xs text-gray-600">
                            <div class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full bg-green-100 text-brand-green flex items-center justify-center font-bold text-[10px]">✓</span>
                                <span>Durasi: 90 menit per sesi (1x seminggu)</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full bg-green-100 text-brand-green flex items-center justify-center font-bold text-[10px]">✓</span>
                                <span>Modul belajar terstruktur & sertifikat</span>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="selectProgram('Junior Tech Explorer (Kelas 1 - 3 SD)')"
                        class="w-full py-3.5 px-6 rounded-full border-2 border-brand-navy text-brand-navy hover:bg-brand-navy hover:text-white font-black text-xs sm:text-sm transition-all text-center block shadow-sm active:scale-95">
                        Pilih Program Ini ↓
                    </button>
                </div>

                <!-- Program 2 (Highlight) -->
                <div class="bg-white rounded-[32px] p-7 sm:p-8 border-2 border-brand-orange shadow-[0_15px_40px_rgba(232,78,56,0.12)] hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between relative">
                    <div class="absolute -top-3.5 right-6 bg-brand-orange text-white text-[10px] font-black uppercase tracking-wider px-3.5 py-1 rounded-full shadow-md">
                        🔥 Paling Diminati
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center gap-1.5 bg-[#FFF4F0] text-brand-orange font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                🎮 Kelas 4 - 6 SD
                            </span>
                            <span class="text-[11px] font-bold text-brand-orange">Tingkat Menengah</span>
                        </div>
                        <h3 class="text-2xl font-black text-brand-navy mb-2">AI & Game Creator</h3>
                        <p class="text-xs sm:text-sm text-gray-500 font-medium mb-6">
                            Mengubah kebiasaan bermain game menjadi kreator game mandiri sekaligus memahami dasar kecerdasan buatan.
                        </p>

                        <div class="bg-orange-50/50 rounded-2xl p-4 mb-6 border border-orange-100/80 space-y-2">
                            <div class="text-[11px] font-black uppercase tracking-wider text-brand-orange">Materi Pokok:</div>
                            <ul class="text-xs sm:text-sm text-gray-600 space-y-1.5">
                                <li class="flex items-center gap-2"><span>•</span> Logika Pembuatan Game 2D & Platformer</li>
                                <li class="flex items-center gap-2"><span>•</span> Pengenalan AI & Teachable Machine</li>
                                <li class="flex items-center gap-2"><span>•</span> Proyek Akhir Game Karya Sendiri</li>
                            </ul>
                        </div>

                        <div class="space-y-2.5 mb-8 text-xs text-gray-600">
                            <div class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full bg-green-100 text-brand-green flex items-center justify-center font-bold text-[10px]">✓</span>
                                <span>Durasi: 90 menit per sesi (1x seminggu)</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full bg-green-100 text-brand-green flex items-center justify-center font-bold text-[10px]">✓</span>
                                <span>Portofolio game yang bisa dimainkan bersama</span>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="selectProgram('AI & Game Creator (Kelas 4 - 6 SD)')"
                        class="w-full py-3.5 px-6 rounded-full bg-brand-orange hover:bg-brand-orangeHover text-white font-black text-xs sm:text-sm transition-all text-center block shadow-lg shadow-orange-500/25 active:scale-95">
                        Pilih Program Ini ↓
                    </button>
                </div>

                <!-- Program 3 -->
                <div class="bg-[#FCFDFE] rounded-[32px] p-7 sm:p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.04)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center gap-1.5 bg-[#F0EBFF] text-brand-purple font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                💻 SMP & SMA
                            </span>
                            <span class="text-[11px] font-bold text-gray-400">Tingkat Lanjut</span>
                        </div>
                        <h3 class="text-2xl font-black text-brand-navy mb-2">Young Tech Leaders</h3>
                        <p class="text-xs sm:text-sm text-gray-500 font-medium mb-6">
                            Persiapan portofolio kompetensi masa depan melalui bahasa pemrograman industri dunia nyata seperti Python dan Web.
                        </p>

                        <div class="bg-gray-50 rounded-2xl p-4 mb-6 border border-gray-100/80 space-y-2">
                            <div class="text-[11px] font-black uppercase tracking-wider text-brand-navy">Materi Pokok:</div>
                            <ul class="text-xs sm:text-sm text-gray-600 space-y-1.5">
                                <li class="flex items-center gap-2"><span>•</span> Python Programming Fundamentals</li>
                                <li class="flex items-center gap-2"><span>•</span> Dasar Pengembangan Web Modern</li>
                                <li class="flex items-center gap-2"><span>•</span> Prompt Engineering & AI Project Integration</li>
                            </ul>
                        </div>

                        <div class="space-y-2.5 mb-8 text-xs text-gray-600">
                            <div class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full bg-green-100 text-brand-green flex items-center justify-center font-bold text-[10px]">✓</span>
                                <span>Durasi: 120 menit per sesi (1x seminggu)</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-4 h-4 rounded-full bg-green-100 text-brand-green flex items-center justify-center font-bold text-[10px]">✓</span>
                                <span>Bimbingan lomba sains & portofolio digital</span>
                            </div>
                        </div>
                    </div>

                    <button type="button" onclick="selectProgram('Young Tech Leaders (SMP - SMA)')"
                        class="w-full py-3.5 px-6 rounded-full border-2 border-brand-navy text-brand-navy hover:bg-brand-navy hover:text-white font-black text-xs sm:text-sm transition-all text-center block shadow-sm active:scale-95">
                        Pilih Program Ini ↓
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= ALUR PENDAFTARAN ================= -->
    <section class="py-16 md:py-24 bg-[#FCFDFE]" id="alur-pendaftaran">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-black uppercase tracking-widest text-brand-navy bg-gray-100 px-4 py-1.5 rounded-full inline-block mb-3">
                    Proses Mudah
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy tracking-tight">
                    Alur Pendaftaran Ekstrakurikuler
                </h2>
                <p class="text-sm sm:text-base text-gray-500 font-medium mt-3">
                    Hanya butuh 4 langkah mudah untuk memulai ekstrakurikuler coding di sekolah Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative">
                <!-- Step 1 -->
                <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm relative text-center flex flex-col items-center">
                    <div class="w-14 h-14 rounded-2xl bg-orange-100 text-brand-orange font-black text-xl flex items-center justify-center mb-5">
                        1
                    </div>
                    <h3 class="text-lg font-black text-brand-navy mb-2">Isi Formulir</h3>
                    <p class="text-xs sm:text-sm text-gray-500 font-medium leading-relaxed">
                        Lengkapi data sekolah atau data siswa pada formulir pendaftaran di halaman ini.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm relative text-center flex flex-col items-center">
                    <div class="w-14 h-14 rounded-2xl bg-blue-100 text-brand-blue font-black text-xl flex items-center justify-center mb-5">
                        2
                    </div>
                    <h3 class="text-lg font-black text-brand-navy mb-2">Konsultasi WhatsApp</h3>
                    <p class="text-xs sm:text-sm text-gray-500 font-medium leading-relaxed">
                        Tim kurikulum kami akan menghubungi Anda untuk diskusi teknis dan jadwal.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm relative text-center flex flex-col items-center">
                    <div class="w-14 h-14 rounded-2xl bg-yellow-100 text-brand-yellow font-black text-xl flex items-center justify-center mb-5">
                        3
                    </div>
                    <h3 class="text-lg font-black text-brand-navy mb-2">Free Trial / Demo</h3>
                    <p class="text-xs sm:text-sm text-gray-500 font-medium leading-relaxed">
                        Kami adakan 1 sesi demo ekskul gratis langsung di sekolah agar siswa mencoba.
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="bg-white rounded-3xl p-6 border border-gray-100 shadow-sm relative text-center flex flex-col items-center">
                    <div class="w-14 h-14 rounded-2xl bg-green-100 text-brand-green font-black text-xl flex items-center justify-center mb-5">
                        4
                    </div>
                    <h3 class="text-lg font-black text-brand-navy mb-2">Kelas Dimulai</h3>
                    <p class="text-xs sm:text-sm text-gray-500 font-medium leading-relaxed">
                        Jadwal ditetapkan, perangkat siap, dan siswa mulai petualangan belajarnya!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FORMULIR PENDAFTARAN ================= -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-white via-orange-50/30 to-white" id="formulir">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Notifikasi Sukses Jika Ada -->
            @if (session('success'))
                <div class="mb-10 bg-emerald-50 border-2 border-emerald-400 rounded-3xl p-6 sm:p-8 shadow-lg text-emerald-900 animate-fade-in">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-500 text-white flex items-center justify-center flex-shrink-0 text-2xl font-bold shadow-md">
                            ✓
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-emerald-900 mb-1">Pendaftaran Berhasil Dikirim!</h3>
                            <p class="text-sm font-medium text-emerald-800 leading-relaxed">
                                {{ session('success') }}
                            </p>
                            <div class="mt-4 flex flex-wrap gap-3">
                                <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20saya%20sudah%20mengisi%20formulir%20pendaftaran%20ekskul%20di%20website"
                                    target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white font-bold text-xs px-5 py-2.5 rounded-full shadow-sm">
                                    <span>Konfirmasi Cepat via WhatsApp</span>
                                    <span>→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Form Card Wrapper -->
            <div class="bg-white rounded-[36px] border border-gray-100 shadow-[0_20px_50px_rgba(26,43,73,0.08)] p-6 sm:p-10 md:p-12 relative">
                
                <!-- Card Header -->
                <div class="text-center max-w-xl mx-auto mb-10">
                    <div class="inline-flex items-center gap-2 bg-orange-100 text-brand-orange px-3.5 py-1.5 rounded-full text-xs font-black uppercase tracking-wider mb-3">
                        Formulir Resmi
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-brand-navy tracking-tight">
                        Form Pendaftaran Ekstrakurikuler
                    </h2>
                    <p class="text-sm text-gray-500 font-medium mt-2">
                        Pilih kategori pendaftar di bawah ini, isi data dengan benar, dan tim kami akan segera menghubungi Anda.
                    </p>
                </div>

                <!-- Tab Pemilih: Sekolah vs Siswa -->
                <div class="flex p-1.5 bg-gray-100 rounded-2xl max-w-md mx-auto mb-10">
                    <button type="button" id="tab-btn-sekolah" onclick="switchCategory('sekolah')"
                        class="flex-1 py-3 px-4 rounded-xl text-xs sm:text-sm font-black transition-all bg-white text-brand-navy shadow-sm">
                        🏫 Kemitraan Sekolah
                    </button>
                    <button type="button" id="tab-btn-siswa" onclick="switchCategory('siswa')"
                        class="flex-1 py-3 px-4 rounded-xl text-xs sm:text-sm font-bold transition-all text-gray-500 hover:text-brand-navy">
                        👨‍👩‍👧 Siswa / Orang Tua
                    </button>
                </div>

                <!-- Formulir HTML -->
                <form action="{{ route('ekskul.daftar.store') }}" method="POST" id="registration-form" class="space-y-6">
                    @csrf
                    <input type="hidden" name="tipe_pendaftar" id="input_tipe_pendaftar" value="sekolah" />

                    <!-- ================= FIELDS KHUSUS SEKOLAH ================= -->
                    <div id="section-fields-sekolah" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="nama_pic" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                    Nama Lengkap PIC / Koordinator <span class="text-brand-orange">*</span>
                                </label>
                                <input type="text" id="nama_pic" name="nama_pic" required
                                    placeholder="Contoh: Bpk. Ahmad Fauzi, S.Pd"
                                    class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition" />
                            </div>

                            <div>
                                <label for="jabatan" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                    Jabatan di Sekolah
                                </label>
                                <select id="jabatan" name="jabatan"
                                    class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition">
                                    <option value="Wakasek Kesiswaan">Wakasek Kesiswaan</option>
                                    <option value="Kepala Sekolah">Kepala Sekolah</option>
                                    <option value="Wakasek Kurikulum">Wakasek Kurikulum</option>
                                    <option value="Koordinator Ekstrakurikuler">Koordinator Ekstrakurikuler</option>
                                    <option value="Guru IT / Komputer">Guru IT / Komputer</option>
                                    <option value="Komite Sekolah / Yayasan">Komite Sekolah / Yayasan</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="nama_sekolah" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                    Nama Sekolah <span class="text-brand-orange">*</span>
                                </label>
                                <input type="text" id="nama_sekolah" name="nama_sekolah" required
                                    placeholder="Contoh: SD Islam Al-Azhar / SDN 01 Pagi"
                                    class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition" />
                            </div>

                            <div>
                                <label for="kota" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                    Kota / Kabupaten <span class="text-brand-orange">*</span>
                                </label>
                                <input type="text" id="kota" name="kota" required
                                    placeholder="Contoh: Jakarta Selatan, Surabaya, Bandung"
                                    class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition" />
                            </div>
                        </div>

                        <div>
                            <label for="estimasi_siswa" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                Estimasi Jumlah Siswa yang Berminat
                            </label>
                            <select id="estimasi_siswa" name="estimasi_siswa"
                                class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition">
                                <option value="10 - 20 Siswa (1 Kelas)">10 - 20 Siswa (1 Kelas)</option>
                                <option value="21 - 40 Siswa (2 Kelas)">21 - 40 Siswa (2 Kelas)</option>
                                <option value="41 - 80 Siswa (3-4 Kelas)">41 - 80 Siswa (3-4 Kelas)</option>
                                <option value="Lebih dari 80 Siswa">Lebih dari 80 Siswa</option>
                                <option value="Belum dipastikan (Ingin Sosialisasi Dahulu)">Belum dipastikan (Ingin Sosialisasi Dahulu)</option>
                            </select>
                        </div>
                    </div>

                    <!-- ================= FIELDS KHUSUS SISWA ================= -->
                    <div id="section-fields-siswa" class="space-y-6 hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="nama_siswa" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                    Nama Lengkap Siswa <span class="text-brand-orange">*</span>
                                </label>
                                <input type="text" id="nama_siswa" name="nama_siswa"
                                    placeholder="Contoh: Rayhan Pratama"
                                    class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition" />
                            </div>

                            <div>
                                <label for="usia_kelas" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                    Usia & Kelas Saat Ini
                                </label>
                                <input type="text" id="usia_kelas" name="usia_kelas"
                                    placeholder="Contoh: 9 Tahun / Kelas 4 SD"
                                    class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="nama_wali" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                    Nama Orang Tua / Wali <span class="text-brand-orange">*</span>
                                </label>
                                <input type="text" id="nama_wali" name="nama_wali"
                                    placeholder="Contoh: Ibu Ratna Dewi"
                                    class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition" />
                            </div>

                            <div>
                                <label for="asal_sekolah" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                    Asal Sekolah Siswa
                                </label>
                                <input type="text" id="asal_sekolah" name="asal_sekolah"
                                    placeholder="Contoh: SD Negeri 05 Bandung"
                                    class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition" />
                            </div>
                        </div>
                    </div>

                    <!-- ================= FIELDS BERSAMA ================= -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        <div>
                            <label for="whatsapp" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                Nomor WhatsApp Aktif <span class="text-brand-orange">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-3.5 text-sm font-bold text-gray-400">+62</span>
                                <input type="tel" id="whatsapp" name="whatsapp" required
                                    placeholder="81234567890"
                                    class="w-full pl-14 pr-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition" />
                            </div>
                        </div>

                        <div>
                            <label for="program" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                                Pilihan Program Ekskul <span class="text-brand-orange">*</span>
                            </label>
                            <select id="program" name="program" required
                                class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition">
                                <option value="Junior Tech Explorer (Kelas 1 - 3 SD)">Junior Tech Explorer (Kelas 1 - 3 SD)</option>
                                <option value="AI & Game Creator (Kelas 4 - 6 SD)" selected>AI & Game Creator (Kelas 4 - 6 SD) [Favorit]</option>
                                <option value="Young Tech Leaders (SMP - SMA)">Young Tech Leaders (SMP - SMA)</option>
                                <option value="Semua Jenjang (Paket Komplit Sekolah)">Semua Jenjang (Paket Komplit Sekolah)</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="catatan" class="block text-xs font-black uppercase tracking-wider text-brand-navy mb-2">
                            Pertanyaan / Catatan Tambahan (Opsional)
                        </label>
                        <textarea id="catatan" name="catatan" rows="3"
                            placeholder="Tuliskan jika ada kebutuhan hari khusus, fasilitas lab komputer di sekolah, atau pertanyaan lainnya..."
                            class="w-full px-4 py-3.5 rounded-2xl bg-gray-50 border border-gray-200 text-brand-navy text-sm font-medium focus:bg-white focus:outline-none focus:ring-4 focus:ring-brand-orange/20 focus:border-brand-orange transition"></textarea>
                    </div>

                    <!-- Actions Buttons -->
                    <div class="pt-4 flex flex-col sm:flex-row gap-4 items-center">
                        <button type="submit" id="submit-btn"
                            class="w-full sm:flex-1 py-4 px-8 rounded-full bg-brand-orange hover:bg-brand-orangeHover text-white font-black text-sm uppercase tracking-wider shadow-lg shadow-orange-500/25 transition-all duration-200 active:scale-95 flex items-center justify-center gap-2">
                            <span>Kirim Pendaftaran Sekarang</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>

                        <button type="button" onclick="sendViaWhatsApp()"
                            class="w-full sm:w-auto py-4 px-7 rounded-full bg-[#25D366] hover:bg-[#20ba59] text-white font-bold text-sm shadow-md transition-all active:scale-95 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M12.031 2C6.495 2 2 6.495 2 12.031a9.98 9.98 0 0 0 1.554 5.342L2 22l4.78-1.517a9.99 9.99 0 0 0 5.251 1.488c5.536 0 10.031-4.495 10.031-10.031S17.567 2 12.031 2zm0 18.232a8.21 8.21 0 0 1-4.223-1.163l-.303-.18-3.136.996.999-3.058-.198-.315a8.2 8.2 0 1 1 6.861 3.72zm4.55-6.177c-.25-.125-1.477-.729-1.706-.813-.229-.083-.396-.125-.563.125-.167.25-.646.813-.792.98-.146.166-.292.187-.542.062s-1.054-.388-2.008-1.238c-.742-.662-1.243-1.48-1.389-1.73-.146-.25-.016-.385.109-.51.112-.112.25-.292.375-.438s.167-.25.25-.417a.52.52 0 0 0-.021-.5c-.062-.125-.562-1.354-.77-1.854-.203-.487-.41-.421-.563-.429l-.479-.008c-.167 0-.438.062-.667.312s-.875.854-.875 2.083c0 1.229.896 2.417 1.021 2.583.125.167 1.763 2.693 4.271 3.777.597.258 1.064.412 1.428.528.6.191 1.146.164 1.578.099.481-.072 1.477-.604 1.685-1.188.208-.583.208-1.083.146-1.188-.063-.104-.229-.167-.479-.292z" />
                            </svg>
                            <span>Kirim Langsung via WA</span>
                        </button>
                    </div>

                    <p class="text-center text-xs text-gray-400 font-medium mt-4">
                        🔒 Data Anda terenkripsi aman dan hanya digunakan oleh tim kemitraan resmi Rakit AI.
                    </p>
                </form>
            </div>
        </div>
    </section>

    <!-- ================= FASILITAS & BENEFIT KEMITRAAN ================= -->
    <section class="py-16 md:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-xs font-black uppercase tracking-widest text-brand-orange bg-orange-50 border border-orange-100 px-4 py-1.5 rounded-full inline-block mb-3">
                    Keunggulan Rakit AI
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy tracking-tight">
                    Fasilitas Lengkap untuk Sekolah & Siswa
                </h2>
                <p class="text-sm sm:text-base text-gray-500 font-medium mt-3">
                    Sekolah tidak perlu repot menyusun silabus atau melatih instruktur dari nol.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl bg-gray-50 border border-gray-100 hover:bg-white hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-orange-500/10 text-brand-orange text-2xl flex items-center justify-center mb-5 font-bold">
                        📚
                    </div>
                    <h3 class="text-xl font-black text-brand-navy mb-2">Silabus Siap Pakai</h3>
                    <p class="text-sm text-gray-600 font-medium leading-relaxed">
                        Kurikulum berstandar internasional dari UK & Jepang yang disesuaikan dengan psikologi dan tahap perkembangan anak.
                    </p>
                </div>

                <div class="p-8 rounded-3xl bg-gray-50 border border-gray-100 hover:bg-white hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-brand-blue text-2xl flex items-center justify-center mb-5 font-bold">
                        👨‍🏫
                    </div>
                    <h3 class="text-xl font-black text-brand-navy mb-2">Mentor Tersertifikasi</h3>
                    <p class="text-sm text-gray-600 font-medium leading-relaxed">
                        Instruktur berpengalaman yang lolos seleksi ketat, ramah anak, dan menguasai metode pembelajaran project-based learning.
                    </p>
                </div>

                <div class="p-8 rounded-3xl bg-gray-50 border border-gray-100 hover:bg-white hover:shadow-xl transition-all">
                    <div class="w-12 h-12 rounded-2xl bg-green-500/10 text-brand-green text-2xl flex items-center justify-center mb-5 font-bold">
                        🏆
                    </div>
                    <h3 class="text-xl font-black text-brand-navy mb-2">Dukungan Lomba & Pameran</h3>
                    <p class="text-sm text-gray-600 font-medium leading-relaxed">
                        Pendampingan intensif bagi siswa untuk berkompetisi di ajang coding nasional dan internasional serta pameran karya akhir semester.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FAQ KHUSUS PENDAFTARAN EKSKUL ================= -->
    <section class="py-16 md:py-24 bg-[#FCFDFE] border-t border-gray-100" id="faq-ekskul">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="text-xs font-black uppercase tracking-widest text-brand-navy bg-gray-100 px-4 py-1.5 rounded-full inline-block mb-3">
                    Pertanyaan Umum
                </span>
                <h2 class="text-3xl sm:text-4xl font-black text-brand-navy tracking-tight">
                    Tanya Jawab Pendaftaran Ekskul
                </h2>
            </div>

            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
                    <button type="button" class="faq-question w-full flex items-center justify-between text-left font-black text-brand-navy text-base">
                        <span>Apakah sekolah harus memiliki laboratorium komputer sendiri?</span>
                        <span class="faq-arrow text-brand-orange text-lg transition-transform duration-200">↓</span>
                    </button>
                    <div class="faq-answer hidden mt-3 pt-3 border-t border-gray-100 text-sm text-gray-600 font-medium leading-relaxed">
                        Laboratorium komputer sangat membantu, namun jika sekolah belum memiliki lab komputer lengkap, tim Rakit AI dapat membantu skema sewa perangkat laptop atau siswa dapat membawa laptop secara mandiri.
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
                    <button type="button" class="faq-question w-full flex items-center justify-between text-left font-black text-brand-navy text-base">
                        <span>Berapa minimal jumlah siswa untuk membuka 1 kelas ekstrakurikuler?</span>
                        <span class="faq-arrow text-brand-orange text-lg transition-transform duration-200">↓</span>
                    </button>
                    <div class="faq-answer hidden mt-3 pt-3 border-t border-gray-100 text-sm text-gray-600 font-medium leading-relaxed">
                        Minimal peserta untuk membuka 1 rombongan belajar (rombel) ekskul adalah 10-12 siswa agar proses belajar interaktif dan pendampingan mentor tetap optimal.
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
                    <button type="button" class="faq-question w-full flex items-center justify-between text-left font-black text-brand-navy text-base">
                        <span>Bagaimana sistem pembayaran biaya ekskul?</span>
                        <span class="faq-arrow text-brand-orange text-lg transition-transform duration-200">↓</span>
                    </button>
                    <div class="faq-answer hidden mt-3 pt-3 border-t border-gray-100 text-sm text-gray-600 font-medium leading-relaxed">
                        Kami menyediakan dua skema: skema subsidi penuh oleh sekolah/yayasan atau skema iuran bulanan dari orang tua murid yang berminat dengan sistem tagihan terpadu yang transparan.
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-2xl border border-gray-100 p-5 shadow-sm">
                    <button type="button" class="faq-question w-full flex items-center justify-between text-left font-black text-brand-navy text-base">
                        <span>Apakah bisa mengadakan sesi demo/trial terlebih dahulu di sekolah?</span>
                        <span class="faq-arrow text-brand-orange text-lg transition-transform duration-200">↓</span>
                    </button>
                    <div class="faq-answer hidden mt-3 pt-3 border-t border-gray-100 text-sm text-gray-600 font-medium leading-relaxed">
                        Ya, tentu saja! Rakit AI menyediakan 1 sesi workshop atau demo coding interaktif gratis langsung di sekolah Anda agar siswa dan pihak sekolah dapat merasakan keseruan kurikulum kami secara langsung.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= FOOTER ================= -->
    <footer class="bg-brand-navyDark text-white pt-14 pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8 pb-10 border-b border-white/10">
                <div class="flex flex-col items-center md:items-start gap-3 text-center md:text-left">
                    <a href="{{ route('home') }}" class="inline-block bg-white rounded-xl px-3 py-1.5">
                        <img alt="Rakit AI Logo" class="h-9 w-auto object-contain" src="/logo.png" />
                    </a>
                    <p class="text-sm text-white/60 font-medium max-w-xs">Coding Today, Leading Tomorrow.</p>
                </div>

                <nav class="flex flex-wrap justify-center gap-x-7 gap-y-3 text-sm font-bold">
                    <a href="{{ route('home') }}" class="text-white/80 hover:text-brand-yellow transition-colors">Beranda</a>
                    <a href="{{ route('home') }}#programs" class="text-white/80 hover:text-brand-yellow transition-colors">Program</a>
                    <a href="{{ route('home') }}#pricing" class="text-white/80 hover:text-brand-yellow transition-colors">Paket & Biaya</a>
                    <a href="{{ route('ekskul.daftar') }}" class="text-brand-yellow font-black">Daftar Ekstrakurikuler</a>
                    <a href="{{ route('home') }}#faq" class="text-white/80 hover:text-brand-yellow transition-colors">FAQ</a>
                </nav>

                <div class="flex gap-3">
                    <a href="#" class="px-4 py-2 rounded-full bg-white/10 hover:bg-brand-orange text-xs font-bold transition-colors">Instagram</a>
                    <a href="#" class="px-4 py-2 rounded-full bg-white/10 hover:bg-brand-orange text-xs font-bold transition-colors">YouTube</a>
                    <a href="#" class="px-4 py-2 rounded-full bg-white/10 hover:bg-brand-orange text-xs font-bold transition-colors">WhatsApp</a>
                </div>
            </div>

            <div class="mt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-white/50 gap-4">
                <p>Copyright © 2026 PT Pintar Kapan Aja (PIKA). All rights reserved.</p>
                <div class="flex gap-5">
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Kebijakan Privasi</a>
                    <a href="{{ route('home') }}" class="hover:text-white transition-colors">Syarat & Ketentuan</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= FLOATING WHATSAPP BUTTON ================= -->
    <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20saya%20ingin%20minta%20demo%20belajar%20ekskul"
        target="_blank" rel="noopener noreferrer" aria-label="Minta Demo Belajar via WhatsApp"
        class="fixed bottom-6 right-4 sm:right-6 z-50 inline-flex items-center gap-2.5 bg-[#25D366] hover:bg-[#20ba59] text-white font-semibold text-sm sm:text-base pl-4 pr-5 py-3 sm:py-3.5 rounded-full shadow-[0_8px_25px_rgba(37,211,102,0.38)] hover:shadow-[0_12px_28px_rgba(37,211,102,0.5)] hover:-translate-y-0.5 active:scale-95 transition-all duration-200 group">
        <svg class="w-6 h-6 fill-current flex-shrink-0 group-hover:scale-110 transition-transform duration-200" viewBox="0 0 24 24">
            <path
                d="M12.031 2C6.495 2 2 6.495 2 12.031a9.98 9.98 0 0 0 1.554 5.342L2 22l4.78-1.517a9.99 9.99 0 0 0 5.251 1.488c5.536 0 10.031-4.495 10.031-10.031S17.567 2 12.031 2zm0 18.232a8.21 8.21 0 0 1-4.223-1.163l-.303-.18-3.136.996.999-3.058-.198-.315a8.2 8.2 0 1 1 6.861 3.72zm4.55-6.177c-.25-.125-1.477-.729-1.706-.813-.229-.083-.396-.125-.563.125-.167.25-.646.813-.792.98-.146.166-.292.187-.542.062s-1.054-.388-2.008-1.238c-.742-.662-1.243-1.48-1.389-1.73-.146-.25-.016-.385.109-.51.112-.112.25-.292.375-.438s.167-.25.25-.417a.52.52 0 0 0-.021-.5c-.062-.125-.562-1.354-.77-1.854-.203-.487-.41-.421-.563-.429l-.479-.008c-.167 0-.438.062-.667.312s-.875.854-.875 2.083c0 1.229.896 2.417 1.021 2.583.125.167 1.763 2.693 4.271 3.777.597.258 1.064.412 1.428.528.6.191 1.146.164 1.578.099.481-.072 1.477-.604 1.685-1.188.208-.583.208-1.083.146-1.188-.063-.104-.229-.167-.479-.292z" />
        </svg>
        <span>Minta Demo Belajar</span>
    </a>

    <!-- ================= INTERACTIVE SCRIPT ================= -->
    <script>
        // Switch Kategori Form (Sekolah vs Siswa)
        function switchCategory(type) {
            const btnSekolah = document.getElementById('tab-btn-sekolah');
            const btnSiswa = document.getElementById('tab-btn-siswa');
            const secSekolah = document.getElementById('section-fields-sekolah');
            const secSiswa = document.getElementById('section-fields-siswa');
            const hiddenType = document.getElementById('input_tipe_pendaftar');

            const reqPic = document.getElementById('nama_pic');
            const reqSekolah = document.getElementById('nama_sekolah');
            const reqKota = document.getElementById('kota');
            const reqSiswa = document.getElementById('nama_siswa');
            const reqWali = document.getElementById('nama_wali');

            hiddenType.value = type;

            if (type === 'sekolah') {
                btnSekolah.className = "flex-1 py-3 px-4 rounded-xl text-xs sm:text-sm font-black transition-all bg-white text-brand-navy shadow-sm";
                btnSiswa.className = "flex-1 py-3 px-4 rounded-xl text-xs sm:text-sm font-bold transition-all text-gray-500 hover:text-brand-navy";
                secSekolah.classList.remove('hidden');
                secSiswa.classList.add('hidden');

                if (reqPic) reqPic.required = true;
                if (reqSekolah) reqSekolah.required = true;
                if (reqKota) reqKota.required = true;
                if (reqSiswa) reqSiswa.required = false;
                if (reqWali) reqWali.required = false;
            } else {
                btnSiswa.className = "flex-1 py-3 px-4 rounded-xl text-xs sm:text-sm font-black transition-all bg-white text-brand-navy shadow-sm";
                btnSekolah.className = "flex-1 py-3 px-4 rounded-xl text-xs sm:text-sm font-bold transition-all text-gray-500 hover:text-brand-navy";
                secSiswa.classList.remove('hidden');
                secSekolah.classList.add('hidden');

                if (reqPic) reqPic.required = false;
                if (reqSekolah) reqSekolah.required = false;
                if (reqKota) reqKota.required = false;
                if (reqSiswa) reqSiswa.required = true;
                if (reqWali) reqWali.required = true;
            }
        }

        // Auto Select Program from Cards
        function selectProgram(progName) {
            const progSelect = document.getElementById('program');
            if (progSelect) {
                progSelect.value = progName;
                document.getElementById('formulir').scrollIntoView({ behavior: 'smooth' });
                progSelect.classList.add('ring-4', 'ring-brand-orange/40');
                setTimeout(() => {
                    progSelect.classList.remove('ring-4', 'ring-brand-orange/40');
                }, 1500);
            }
        }

        // Send Via WhatsApp directly
        function sendViaWhatsApp() {
            const type = document.getElementById('input_tipe_pendaftar').value;
            const waNum = document.getElementById('whatsapp').value.trim();
            const program = document.getElementById('program').value;
            const catatan = document.getElementById('catatan').value.trim();

            let message = '';
            if (type === 'sekolah') {
                const pic = document.getElementById('nama_pic').value.trim() || '-';
                const jabatan = document.getElementById('jabatan').value;
                const sekolah = document.getElementById('nama_sekolah').value.trim() || '-';
                const kota = document.getElementById('kota').value.trim() || '-';
                const estimasi = document.getElementById('estimasi_siswa').value;

                message = `Halo Tim Kemitraan Rakit AI,%0A%0ASaya ingin mendaftarkan sekolah kami untuk program Ekstrakurikuler Coding & AI:%0A%0A` +
                    `*Data Sekolah:*%0A` +
                    `• Nama PIC: ${encodeURIComponent(pic)}%0A` +
                    `• Jabatan: ${encodeURIComponent(jabatan)}%0A` +
                    `• Nama Sekolah: ${encodeURIComponent(sekolah)}%0A` +
                    `• Kota: ${encodeURIComponent(kota)}%0A` +
                    `• WhatsApp: 0${encodeURIComponent(waNum)}%0A` +
                    `• Program yang diminati: ${encodeURIComponent(program)}%0A` +
                    `• Estimasi Siswa: ${encodeURIComponent(estimasi)}%0A` +
                    (catatan ? `• Catatan: ${encodeURIComponent(catatan)}%0A%0A` : `%0A`) +
                    `Mohon informasi lebih lanjut mengenai proposal dan jadwal demo gratis. Terima kasih!`;
            } else {
                const siswa = document.getElementById('nama_siswa').value.trim() || '-';
                const usia = document.getElementById('usia_kelas').value.trim() || '-';
                const wali = document.getElementById('nama_wali').value.trim() || '-';
                const sekolah = document.getElementById('asal_sekolah').value.trim() || '-';

                message = `Halo Tim Rakit AI,%0A%0ASaya ingin mendaftarkan anak saya untuk program Ekstrakurikuler Coding & AI:%0A%0A` +
                    `*Data Siswa:*%0A` +
                    `• Nama Siswa: ${encodeURIComponent(siswa)}%0A` +
                    `• Usia/Kelas: ${encodeURIComponent(usia)}%0A` +
                    `• Nama Orang Tua: ${encodeURIComponent(wali)}%0A` +
                    `• Asal Sekolah: ${encodeURIComponent(sekolah)}%0A` +
                    `• WhatsApp: 0${encodeURIComponent(waNum)}%0A` +
                    `• Pilihan Program: ${encodeURIComponent(program)}%0A` +
                    (catatan ? `• Catatan: ${encodeURIComponent(catatan)}%0A%0A` : `%0A`) +
                    `Boleh minta informasi jadwal kelas dan biayanya? Terima kasih!`;
            }

            window.open(`https://wa.me/?text=${message}`, '_blank');
        }

        // Toggle FAQ Accordions
        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const answer = btn.nextElementSibling;
                const arrow = btn.querySelector('.faq-arrow');
                const isHidden = answer.classList.contains('hidden');

                document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
                document.querySelectorAll('.faq-arrow').forEach(arr => arr.style.transform = 'rotate(0deg)');

                if (isHidden) {
                    answer.classList.remove('hidden');
                    if (arrow) arrow.style.transform = 'rotate(180deg)';
                }
            });
        });

        // Toggle Mobile Menu
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenuPanel = document.getElementById('mobile-menu-panel');
        const mobileOpenIcon = document.getElementById('mobile-menu-open-icon');
        const mobileCloseIcon = document.getElementById('mobile-menu-close-icon');

        if (mobileMenuBtn && mobileMenuPanel) {
            mobileMenuBtn.addEventListener('click', function() {
                const isHidden = mobileMenuPanel.classList.toggle('hidden');
                if (mobileOpenIcon && mobileCloseIcon) {
                    mobileOpenIcon.classList.toggle('hidden', !isHidden);
                    mobileCloseIcon.classList.toggle('hidden', isHidden);
                }
            });

            mobileMenuPanel.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenuPanel.classList.add('hidden');
                    if (mobileOpenIcon && mobileCloseIcon) {
                        mobileOpenIcon.classList.remove('hidden');
                        mobileCloseIcon.classList.add('hidden');
                    }
                });
            });
        }
    </script>
</body>

</html>

