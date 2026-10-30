<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Rakit AI - Coding & AI School for Kids & Teens</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            green: '#00C06A', greenDark: '#009F54', greenLight: '#E8F9F1',
                            navy: '#1A2B49', navyMuted: '#4A5578', navyDark: '#121D32',
                            orange: '#E84E38', orangeHover: '#D63E29',
                            blue: '#2B7FFF', purple: '#8B5CF6', yellow: '#FFC727',
                            bgLight: '#FCFDFE'
                        }
                    },
                    fontFamily: { sans: ['"Plus Jakarta Sans"', 'sans-serif'] },
                    boxShadow: {
                        'card': '0 10px 25px -5px rgba(26, 43, 73, 0.07)',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        .animate-float { animation: float 4s ease-in-out infinite; }

        @keyframes slideInRight {
            0% { transform: translateX(100%); opacity: 0; }
            100% { transform: translateX(0); opacity: 1; }
        }
        .animate-slide-in-right { animation: slideInRight 1.5s cubic-bezier(0.25, 1, 0.5, 1) forwards; }
    </style>
</head>
<body class="bg-brand-bgLight text-brand-navy antialiased selection:bg-brand-green selection:text-white pb-14 overflow-x-hidden">

    <!-- ================= HEADER ================= -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <a class="flex items-center gap-2" href="#">
                <img alt="Rakit AI Logo" class="h-12 w-auto object-contain" src="/logo.png"/>
            </a>
            
            <nav class="hidden md:flex items-center gap-6 lg:gap-8 text-sm font-bold text-gray-600">
                <a href="#programs" class="hover:text-brand-orange transition-colors">Program</a>
                <a href="#pricing" class="hover:text-brand-orange transition-colors">Paket & Biaya</a>
                <a href="#ekskul" class="hover:text-brand-orange transition-colors">Ekstrakurikuler</a>
                <a href="#testimonials" class="hover:text-brand-orange transition-colors">Testimoni</a>
                <a href="#faq" class="hover:text-brand-orange transition-colors">FAQ</a>
            </nav>

            <div class="flex items-center gap-3">
                <a class="bg-brand-orange hover:bg-brand-orangeHover text-white text-[11px] sm:text-xs font-black px-4 sm:px-5 py-2.5 rounded-full uppercase tracking-wider transition-all shadow-md active:scale-95" href="#trial">
                    Free Trial
                </a>
                <button class="md:hidden p-1 text-brand-navy" type="button">
                    <svg class="w-6 h-6 stroke-current stroke-2" fill="none" viewbox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- ================= HERO SECTION ================= -->
    <section class="relative w-full overflow-hidden pt-10 md:pt-20 pb-32">
        
        <div class="absolute inset-0 bg-white -z-20"></div>
        
        <div class="absolute top-0 right-0 w-[40%] h-full -z-10 opacity-30">
            <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 0 L100 100 L0 100 C 30 80, 20 50, 50 20 Z" fill="#E84E38"/>
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl mx-auto text-center">
                
                <div class="inline-flex items-center gap-2 bg-[#FF9B85] text-white px-4 py-2 rounded-full mb-6 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
                    <span class="text-[10px] font-black tracking-widest uppercase">IT, AI & Coding School</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-navy tracking-tight leading-[1.15] mb-5">
                    Coding Today,<br/>
                    <span class="text-brand-orange relative inline-block">
                        Leading Tomorrow
                        <svg class="absolute -bottom-2 left-0 w-full h-3 text-brand-orange/30" preserveaspectratio="none" viewbox="0 0 100 10"><path d="M0 5 Q 50 0 100 5" fill="transparent" stroke="currentColor" stroke-width="4"></path></svg>
                    </span>
                </h1>
                
                <p class="text-sm md:text-base lg:text-lg text-gray-500 font-medium leading-relaxed max-w-xl mx-auto mb-8">
                    Mempersiapkan masa depan anak usia 5–18 tahun lewat kurikulum berstandar internasional dari <strong class="text-gray-700">UK & Jepang</strong> dengan metode yang menyenangkan.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-3.5 justify-center items-center mb-10">
                    <a class="bg-brand-orange hover:bg-brand-orangeHover text-white text-sm font-black py-3.5 px-8 rounded-full shadow-lg shadow-orange-500/25 uppercase tracking-wider flex items-center justify-center gap-2 transition-all active:scale-95" href="#trial">
                        <span>Daftar Free Trial</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    </a>
                    <a class="bg-white hover:bg-gray-50 text-brand-navy border-2 border-brand-navy text-sm font-bold py-3.5 px-8 rounded-full transition-all active:scale-95 shadow-sm" href="#programs">
                        Lihat Pilihan Program
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-3 md:gap-5 max-w-md mx-auto">
                    <div class="bg-white p-3.5 rounded-xl border border-gray-100 shadow-sm text-center">
                        <span class="block text-lg md:text-xl font-black text-brand-orange">+10.000</span>
                        <span class="text-[10px] md:text-xs font-bold text-gray-500">Siswa Aktif</span>
                    </div>
                    <div class="bg-white p-3.5 rounded-xl border border-gray-100 shadow-sm text-center">
                        <span class="block text-lg md:text-xl font-black text-brand-navy">40+ Cabang</span>
                        <span class="text-[10px] md:text-xs font-bold text-gray-500">& Online</span>
                    </div>
                    <div class="bg-white p-3.5 rounded-xl border border-gray-100 shadow-sm text-center">
                        <span class="block text-lg md:text-xl font-black text-brand-orange">UK & Jepang</span>
                        <span class="text-[10px] md:text-xs font-bold text-gray-500">Kurikulum</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= GELOMBANG PEMISAH 1 (Putih ke Abu) ================= -->
    <div class="relative w-full h-[80px] md:h-[120px] -mt-24 z-10">
        <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120 L0 60 C 320 0, 640 100, 960 60 C 1120 40, 1280 80, 1440 60 L1440 120 Z" fill="#FCFDFE"/>
        </svg>
    </div>

    <!-- ================= WHY US (4 Pillars) ================= -->
    <section class="relative w-full overflow-hidden pt-16 pb-32 mt-10 bg-brand-bgLight">
        
        <div class="absolute top-0 right-0 w-[80%] h-full -z-20 opacity-30">
            <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 C 30 80, 50 30, 100 0 L100 100 Z" fill="#BAE6FD"/>
            </svg>
        </div>
        
        <div class="absolute bottom-0 left-0 w-full h-[70%] -z-10">
            <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 40 Q 20 20, 40 40 T 100 40 L100 100 L0 100 Z" fill="#E84E38"/>
            </svg>
        </div>

        <div class="absolute bottom-0 left-0 w-32 md:w-48 opacity-90 animate-float z-0 pointer-events-none">
            <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Smilies/Robot.png" alt="Robot" class="w-full h-auto drop-shadow-xl" />
        </div>
        
        <div class="absolute bottom-0 right-0 w-24 md:w-40 opacity-90 animate-float z-0 pointer-events-none" style="animation-delay: 1s;">
            <img src="https://raw.githubusercontent.com/Tarikul-Islam-Anik/Animated-Fluent-Emojis/master/Emojis/Animals/Bear.png" alt="Bear" class="w-full h-auto drop-shadow-xl" />
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-12">
                <span class="text-[10px] font-black uppercase tracking-widest text-brand-orange bg-orange-50 border border-orange-100 px-3 py-1 rounded-full">Keunggulan Kami</span>
                <h2 class="text-3xl md:text-4xl font-black text-brand-navy mt-3">More Than Just A <span class="text-brand-orange">Coding School</span></h2>
                <p class="text-sm text-gray-500 mt-2 max-w-xl mx-auto">Bukan hanya belajar sintaks, kami membekali anak dengan logika berpikir, AI tools, dan kreativitas digital masa depan.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-card flex flex-col transform hover:-translate-y-1 transition-transform">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center mb-3 text-2xl">🌍</div>
                    <h3 class="font-black text-sm md:text-base text-brand-navy mb-1.5">Kurikulum Global</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Standar UK & Jepang yang disusun sistematis dan progresif.</p>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-card flex flex-col transform hover:-translate-y-1 transition-transform">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 text-brand-orange flex items-center justify-center mb-3 text-2xl">🎮</div>
                    <h3 class="font-black text-sm md:text-base text-brand-navy mb-1.5">Game-Based</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Scratch, Roblox, Python, hingga Website yang seru & aplikatif.</p>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-card flex flex-col transform hover:-translate-y-1 transition-transform">
                    <div class="w-12 h-12 rounded-xl bg-orange-50 text-orange-500 flex items-center justify-center mb-3 text-2xl">👩‍🏫</div>
                    <h3 class="font-black text-sm md:text-base text-brand-navy mb-1.5">Mentor Bersertifikat</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Guru ramah, suportif, dan terlatih membimbing setiap anak.</p>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-card flex flex-col transform hover:-translate-y-1 transition-transform">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center mb-3 text-2xl">💡</div>
                    <h3 class="font-black text-sm md:text-base text-brand-navy mb-1.5">Future Skills</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Problem solving, logika kritis, kreativitas, dan kepemimpinan digital.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================= GELOMBANG PEMISAH 2 (Abu ke Putih) ================= -->
    <div class="relative w-full h-[80px] md:h-[120px] -mt-24 z-10">
        <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120 L0 60 C 320 0, 640 100, 960 60 C 1120 40, 1280 80, 1440 60 L1440 120 Z" fill="#FFFFFF"/>
        </svg>
    </div>

    <!-- ================= SECTION 3: WHY CODING ================= -->
    <section class="relative w-full py-20 md:py-28 bg-white overflow-hidden" id="programs">
        
        <div class="absolute top-10 left-10 md:top-20 md:left-32 text-yellow-400 animate-pulse">
            <svg class="w-10 h-10 md:w-16 md:h-16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <div class="absolute bottom-10 right-10 md:bottom-20 md:right-20 text-yellow-400 animate-bounce" style="animation-duration: 3s;">
            <svg class="w-8 h-8 md:w-12 md:h-12" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <div class="absolute bottom-20 left-10 md:left-20 text-red-400 animate-spin" style="animation-duration: 10s;">
            <svg class="w-12 h-12 md:w-20 md:h-20" fill="currentColor" viewBox="0 0 24 24"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"/></svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black text-brand-navy leading-tight">
                    Why Coding Is Important <br class="hidden md:block" /> For Young Generation?
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 max-w-6xl mx-auto">
                <div class="bg-brand-bgLight p-6 sm:p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col group hover:-translate-y-1 hover:shadow-card transition-all duration-300">
                    <div class="mb-4 flex-shrink-0 w-10 h-10 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center font-bold text-xl transition-transform group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white">✓</div>
                    <h3 class="text-xl md:text-2xl font-black text-brand-navy mb-2 group-hover:text-brand-green transition-colors">From Player to Developer</h3>
                    <p class="text-gray-500 font-medium leading-relaxed text-sm md:text-base">Ubah kebiasaan main game menjadi skill produktif. Anak tidak hanya mengonsumsi teknologi, tapi menciptakannya.</p>
                </div>

                <div class="bg-brand-bgLight p-6 sm:p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col group hover:-translate-y-1 hover:shadow-card transition-all duration-300">
                    <div class="mb-4 flex-shrink-0 w-10 h-10 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center font-bold text-xl transition-transform group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white">✓</div>
                    <h3 class="text-xl md:text-2xl font-black text-brand-navy mb-2 group-hover:text-brand-green transition-colors">21st Century Skill</h3>
                    <p class="text-gray-500 font-medium leading-relaxed text-sm md:text-base">Melatih logika berpikir kritis, problem solving, dan kreativitas yang sangat dibutuhkan di masa depan.</p>
                </div>

                <div class="bg-brand-bgLight p-6 sm:p-8 rounded-3xl border border-gray-100 shadow-sm flex flex-col group hover:-translate-y-1 hover:shadow-card transition-all duration-300">
                    <div class="mb-4 flex-shrink-0 w-10 h-10 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center font-bold text-xl transition-transform group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white">✓</div>
                    <h3 class="text-xl md:text-2xl font-black text-brand-navy mb-2 group-hover:text-brand-green transition-colors">Every Profession needs IT Skills</h3>
                    <p class="text-gray-500 font-medium leading-relaxed text-sm md:text-base">Dari dokter hingga desainer, semua profesi kini butuh literasi digital. Bekali anak dengan fondasi yang kuat.</p>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="#trial" class="inline-flex items-center gap-2 bg-brand-navy hover:bg-brand-navyDark text-white font-bold py-3.5 px-8 rounded-full transition-all shadow-lg active:scale-95">
                    Mulai Belajar Sekarang
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= GELOMBANG PEMISAH 3 (Putih ke Oranye) ================= -->
    <div class="relative w-full h-[80px] md:h-[120px] -mt-24 z-10">
        <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120 L0 60 C 320 0, 640 100, 960 60 C 1120 40, 1280 80, 1440 60 L1440 120 Z" fill="#FF9B85"/>
        </svg>
    </div>

        <!-- ================= SECTION 4: PROGRAM SHOWCASE ================= -->
    <section class="relative w-full py-16 md:py-24 bg-[#FF9B85] overflow-hidden text-white">        
        <div class="absolute top-0 left-0 w-full h-16 md:h-24 bg-gradient-to-b from-white/20 to-transparent pointer-events-none z-0"></div>
        <div class="absolute inset-0 shadow-[0_-20px_50px_rgba(0,0,0,0.1),0_20px_50px_rgba(0,0,0,0.1)] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-12 gap-8">
                <div class="max-w-2xl">
                    <span class="text-brand-orange font-black tracking-widest uppercase text-sm mb-3 block">SKILL MASA DEPAN</span>
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black leading-[1.1]">
                        Yang anak pelajari <br class="hidden md:block" /> di Rakit AI.
                    </h2>
                </div>

                <div class="flex bg-white/10 p-1.5 rounded-xl backdrop-blur-sm overflow-x-auto hide-scrollbar">
                    <button class="px-6 py-3 rounded-lg bg-brand-orange text-white font-bold text-sm whitespace-nowrap transition-all shadow-md">Semua</button>
                    <button class="px-6 py-3 rounded-lg text-white/70 hover:text-white hover:bg-white/5 font-bold text-sm whitespace-nowrap transition-all">Coding & AI</button>
                    <button class="px-6 py-3 rounded-lg text-white/70 hover:text-white hover:bg-white/5 font-bold text-sm whitespace-nowrap transition-all">Robotik</button>
                </div>
            </div>

            <!-- GRID 4 KOLOM -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
                
                <!-- Card 1: AI -->
                <div class="bg-white rounded-3xl overflow-hidden group cursor-pointer transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="h-48 md:h-56 overflow-hidden relative bg-[#E8E2FA] flex items-center justify-center p-4">
                        <!-- GANTI GAMBAR AI KAMU -->
                        <img src="/iot.png" alt="Artificial Intelligence" class="w-full h-full object-contain drop-shadow-2xl group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6 text-brand-navy flex flex-col flex-grow">
                        <h3 class="text-xl font-black mb-2 group-hover:text-brand-orange transition-colors">Artificial Intelligence (AI)</h3>
                        <p class="text-sm text-gray-500 font-medium mb-4 line-clamp-3 flex-grow">Membuat mesin bisa berpikir, belajar, dan mengambil keputusan seperti otak manusia.</p>
                        <div class="flex flex-wrap gap-2 text-xs font-bold text-brand-orange mt-auto">
                            <span>Machine Learning</span> <span class="text-gray-300">•</span>
                            <span>Neural Net</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Coding -->
                <div class="bg-white rounded-3xl overflow-hidden group cursor-pointer transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="h-48 md:h-56 overflow-hidden relative bg-gray-100 flex items-center justify-center p-4">
                        <!-- GANTI GAMBAR CODING KAMU -->
                        <img src="/coding.png" alt="Coding" class="w-full h-full object-contain drop-shadow-2xl group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6 text-brand-navy flex flex-col flex-grow">
                        <h3 class="text-xl font-black mb-2 group-hover:text-brand-orange transition-colors">Coding</h3>
                        <p class="text-sm text-gray-500 font-medium mb-4 line-clamp-3 flex-grow">Bahasa utama untuk memberi instruksi dan logika kerja pada AI, IoT, dan perangkat Robotik.</p>
                        <div class="flex flex-wrap gap-2 text-xs font-bold text-brand-orange mt-auto">
                            <span>KodyBlocks</span> <span class="text-gray-300">•</span>
                            <span>Python</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3: IoT -->
                <div class="bg-white rounded-3xl overflow-hidden group cursor-pointer transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="h-48 md:h-56 overflow-hidden relative bg-[#E8F9F1] flex items-center justify-center p-4">
                        <!-- GANTI GAMBAR IOT KAMU -->
                        <img src="/game.png" alt="Internet of Things" class="w-full h-full object-contain drop-shadow-2xl group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6 text-brand-navy flex flex-col flex-grow">
                        <h3 class="text-xl font-black mb-2 group-hover:text-brand-orange transition-colors">Internet of Things (IoT)</h3>
                        <p class="text-sm text-gray-500 font-medium mb-4 line-clamp-3 flex-grow">Menghubungkan semua perangkat fisik di sekitarmu ke internet, agar bisa dikontrol dari mana saja.</p>
                        <div class="flex flex-wrap gap-2 text-xs font-bold text-brand-orange mt-auto">
                            <span>Smart Home</span> <span class="text-gray-300">•</span>
                            <span>Sensors</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Robotik -->
                <div class="bg-white rounded-3xl overflow-hidden group cursor-pointer transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl flex flex-col">
                    <div class="h-48 md:h-56 overflow-hidden relative bg-[#FFF3E0] flex items-center justify-center p-4">
                        <!-- GANTI GAMBAR ROBOTIK KAMU -->
                        <img src="/robotic.png" alt="Internet of Things" class="w-full h-full object-contain drop-shadow-2xl group-hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-6 text-brand-navy flex flex-col flex-grow">
                        <h3 class="text-xl font-black mb-2 group-hover:text-brand-orange transition-colors">Robotik</h3>
                        <p class="text-sm text-gray-500 font-medium mb-4 line-clamp-3 flex-grow">Merancang, merakit, dan menggerakkan perangkat fisik atau robot agar bisa bekerja otomatis.</p>
                        <div class="flex flex-wrap gap-2 text-xs font-bold text-brand-orange mt-auto">
                            <span>Arduino</span> <span class="text-gray-300">•</span>
                            <span>Lego Mindstorms</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-16 md:h-24 bg-gradient-to-t from-white/10 to-transparent pointer-events-none z-0"></div>
    </section>

    <!-- ================= GELOMBANG PEMISAH 4 (Oranye ke Putih) ================= -->
    <div class="relative w-full h-[80px] md:h-[120px] -mt-24 z-10">
        <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120 L0 60 C 320 0, 640 100, 960 60 C 1120 40, 1280 80, 1440 60 L1440 120 Z" fill="#FFFFFF"/>
        </svg>
    </div>

    <!-- ================= SECTION 5: ONLINE / OFFLINE ================= -->
    <section class="relative w-full py-20 md:py-28 bg-white overflow-hidden">
        
        <div class="absolute top-10 right-10 w-64 h-64 bg-brand-orange/10 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-10 left-10 w-72 h-72 bg-blue-100 rounded-full blur-3xl -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">
                
                <div class="flex-1 text-center lg:text-left">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-navy leading-[1.15] mb-6">
                        We Are Available <br class="hidden lg:block" />
                        For <span class="text-brand-orange">Online / Offline</span> Class!
                    </h2>
                    <p class="text-base md:text-lg text-gray-500 font-medium leading-relaxed mb-8 max-w-lg mx-auto lg:mx-0">
Ikuti kelas pemrograman kami! Tersedia secara tatap muka di cabang terdekat Anda atau secara daring dengan jadwal fleksibel yang bisa Anda akses kapan saja, di mana saja. Pilih salah satu opsi yang paling sesuai untuk Anda!                    </p>
                    <a href="#trial" class="inline-flex items-center justify-center bg-brand-orange hover:bg-brand-orangeHover text-white text-sm md:text-base font-black py-4 px-8 rounded-full shadow-lg shadow-orange-500/30 uppercase tracking-wider transition-all active:scale-95">
                        Book Free Trial
                    </a>
                </div>

                <div class="flex-1 w-full relative h-[400px] md:h-[500px]">
                    
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[65%] md:w-[60%] z-20">
                        <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Online Class" class="w-full h-auto rounded-2xl shadow-2xl border-4 border-white object-cover aspect-video" />
                    </div>

                    <div class="absolute top-0 left-0 w-[35%] z-10 animate-float">
                        <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Siswa" class="w-full h-auto rounded-xl shadow-lg border-4 border-white object-cover aspect-square" />
                    </div>

                    <div class="absolute bottom-4 right-0 w-[45%] z-30 animate-float" style="animation-delay: 1s;">
                        <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Offline Class" class="w-full h-auto rounded-xl shadow-xl border-4 border-white object-cover aspect-[4/3]" />
                    </div>

                    <div class="absolute bottom-0 left-4 md:left-12 w-[30%] z-30 animate-float" style="animation-delay: 2s;">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Happy Kid" class="w-full h-auto rounded-xl shadow-lg border-4 border-white object-cover aspect-[3/4]" />
                    </div>

                    <div class="absolute top-1/4 left-1/2 -translate-x-1/2 z-10 bg-white p-3 rounded-full shadow-lg text-brand-orange animate-bounce">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <div class="absolute bottom-1/4 left-1/4 z-10 bg-brand-orange p-2.5 rounded-full shadow-lg text-white animate-spin" style="animation-duration: 10s;">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 11h-6V5h-2v6H5v2h6v6h2v-6h6z"/></svg>
                    </div>
                    <div class="absolute top-10 right-10 z-0 bg-blue-400 p-4 rounded-full opacity-50 blur-sm"></div>
                    <div class="absolute bottom-16 right-16 z-0 bg-yellow-400 p-6 rounded-full opacity-60 blur-md"></div>

                </div>
            </div>
        </div>
    </section>


        {{-- <!-- ================= SECTION 6: STUDENT PROJECT PORTFOLIO ================= --> --}}
        <!-- ================= SECTION 6: STUDENT PROJECT PORTFOLIO (Clean & Static) ================= -->
    <section class="relative w-full py-20 md:py-28 bg-brand-bgLight overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Judul -->
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-navy tracking-tight">
                    Student Project Portfolio
                </h2>
            </div>

            <!-- Container Slider & Tombol -->
            <div class="relative">
                
                <!-- Tombol Panah Kiri -->
                <button class="absolute left-0 top-1/2 -translate-y-1/2 -ml-4 md:-ml-6 z-20 flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-brand-orange hover:bg-brand-orangeHover text-white rounded-full shadow-xl transition-transform active:scale-90">
                    <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path></svg>
                </button>

                <!-- GRID CARDS -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 px-4 md:px-0">
                    
                    <!-- Card 1 -->
                    <div class="bg-white rounded-[32px] overflow-visible shadow-[0_10px_30px_rgba(0,0,0,0.08)] flex flex-col relative pt-0 mt-12 border border-gray-100 hover:-translate-y-2 transition-transform duration-300">
                        <div class="h-40 w-full rounded-t-[32px] overflow-hidden bg-[#E8F4FF]">
                            <!-- GANTI GAMBAR PROYEK DARI UNSPLASH -->
                            <img src="https://images.unsplash.com/photo-1552820728-8b83bb6b773f?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Proyek 1" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute top-28 left-1/2 -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-brand-orange overflow-hidden shadow-md">
                            <!-- GANTI FOTO SISWA DARI UNSPLASH -->
                            <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Siswa 1" class="w-full h-full object-cover" />
                        </div>
                        <div class="pt-12 pb-6 px-6 text-center flex flex-col items-center flex-grow">
                            <span class="inline-block bg-[#FFC727] text-brand-navy font-bold text-xs md:text-sm px-5 py-1.5 rounded-md mb-4 shadow-sm">Mobile App</span>
                            <h3 class="text-lg md:text-xl font-black text-brand-navy mb-2 uppercase tracking-wide">CLICKER GAME</h3>
                            <p class="text-xs md:text-sm text-gray-500 font-medium mt-auto">Ni Komang Amelia<br>Kartadi (10)</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white rounded-[32px] overflow-visible shadow-[0_10px_30px_rgba(0,0,0,0.08)] flex flex-col relative pt-0 mt-12 border border-gray-100 hover:-translate-y-2 transition-transform duration-300">
                        <div class="h-40 w-full rounded-t-[32px] overflow-hidden bg-[#FFF3E0]">
                            <img src="https://images.unsplash.com/photo-1511512578047-dfb367046420?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Proyek 2" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute top-28 left-1/2 -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-blue-400 overflow-hidden shadow-md">
                            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Siswa 2" class="w-full h-full object-cover" />
                        </div>
                        <div class="pt-12 pb-6 px-6 text-center flex flex-col items-center flex-grow">
                            <span class="inline-block bg-[#8ED8FF] text-brand-navy font-bold text-xs md:text-sm px-5 py-1.5 rounded-md mb-4 shadow-sm">Mobile Game</span>
                            <h3 class="text-lg md:text-xl font-black text-brand-navy mb-2 uppercase tracking-wide">A CARP LIFE</h3>
                            <p class="text-xs md:text-sm text-gray-500 font-medium mt-auto">Bima Sakti Habibie (11)</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white rounded-[32px] overflow-visible shadow-[0_10px_30px_rgba(0,0,0,0.08)] flex flex-col relative pt-0 mt-12 border border-gray-100 hover:-translate-y-2 transition-transform duration-300">
                        <div class="h-40 w-full rounded-t-[32px] overflow-hidden bg-[#E8F9F1]">
                            <img src="https://images.unsplash.com/photo-1538481199705-c710c4e965fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Proyek 3" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute top-28 left-1/2 -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-purple-400 overflow-hidden shadow-md">
                            <img src="https://images.unsplash.com/photo-1580894732444-8ecded7900cd?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Siswa 3" class="w-full h-full object-cover" />
                        </div>
                        <div class="pt-12 pb-6 px-6 text-center flex flex-col items-center flex-grow">
                            <span class="inline-block bg-[#FFB4A2] text-brand-navy font-bold text-xs md:text-sm px-5 py-1.5 rounded-md mb-4 shadow-sm">Desktop Game</span>
                            <h3 class="text-lg md:text-xl font-black text-brand-navy mb-2 uppercase tracking-wide">SUPER RUNNNS</h3>
                            <p class="text-xs md:text-sm text-gray-500 font-medium mt-auto">Sherlyn Julita Davila (12)</p>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-white rounded-[32px] overflow-visible shadow-[0_10px_30px_rgba(0,0,0,0.08)] flex flex-col relative pt-0 mt-12 border border-gray-100 hover:-translate-y-2 transition-transform duration-300">
                        <div class="h-40 w-full rounded-t-[32px] overflow-hidden bg-[#F3E8FF]">
                            <img src="https://images.unsplash.com/photo-1614680376573-df3480f0c6ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Proyek 4" class="w-full h-full object-cover" />
                        </div>
                        <div class="absolute top-28 left-1/2 -translate-x-1/2 w-20 h-20 rounded-full border-4 border-white bg-pink-400 overflow-hidden shadow-md">
                            <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Siswa 4" class="w-full h-full object-cover" />
                        </div>
                        <div class="pt-12 pb-6 px-6 text-center flex flex-col items-center flex-grow">
                            <span class="inline-block bg-[#A8E8CE] text-brand-navy font-bold text-xs md:text-sm px-5 py-1.5 rounded-md mb-4 shadow-sm">Mobile Game</span>
                            <h3 class="text-lg md:text-xl font-black text-brand-navy mb-2 uppercase tracking-wide">LEO CATCHIN' COINZ</h3>
                            <p class="text-xs md:text-sm text-gray-500 font-medium mt-auto">Hasna Nuril Hadi (10)</p>
                        </div>
                    </div>

                </div>

                <!-- Tombol Panah Kanan -->
                <button class="absolute right-0 top-1/2 -translate-y-1/2 -mr-4 md:-mr-6 z-20 flex items-center justify-center w-12 h-12 md:w-14 md:h-14 bg-brand-orange hover:bg-brand-orangeHover text-white rounded-full shadow-xl transition-transform active:scale-90">
                    <svg class="w-6 h-6 md:w-8 md:h-8" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"></path></svg>
                </button>

            </div>
        </div>
    </section>

    <!-- ================= SECTION 7: PRICING (Pilihan Paket & Harga Kelas) ================= -->
    <section class="relative w-full py-20 md:py-28 bg-white overflow-hidden" id="pricing">
        <!-- Dekorasi Background -->
        <div class="absolute top-10 left-10 w-72 h-72 bg-brand-orange/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>
        <div class="absolute bottom-10 right-10 w-80 h-80 bg-blue-100/40 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
                <span class="text-[11px] sm:text-xs font-black uppercase tracking-widest text-brand-orange bg-orange-50 border border-orange-100 px-4 py-1.5 rounded-full inline-block mb-3">
                    PILIHAN PAKET & HARGA KELAS
                </span>
                <h2 class="text-3xl md:text-5xl font-black text-brand-navy leading-tight tracking-tight">
                    Investasi Terbaik untuk <span class="text-brand-orange">Masa Depan Digital</span> Anak
                </h2>
                <p class="text-sm md:text-base text-gray-500 font-medium mt-3 leading-relaxed">
                    Kurikulum terstruktur standar internasional dengan bimbingan mentor ramah dan berdedikasi. Pilih program yang paling pas untuk tahapan usia ananda.
                </p>

                <!-- Billing Switcher (Bulanan vs Term 3 Bulan) -->
                <div class="mt-8 inline-flex items-center p-1.5 bg-gray-100 rounded-full border border-gray-200 shadow-inner">
                    <button type="button" id="billing-monthly-btn" class="px-5 py-2.5 rounded-full text-xs sm:text-sm font-extrabold transition-all duration-300 bg-white text-brand-navy shadow-sm">
                        Bulanan (Reguler)
                    </button>
                    <button type="button" id="billing-term-btn" class="px-5 py-2.5 rounded-full text-xs sm:text-sm font-extrabold transition-all duration-300 text-gray-500 hover:text-brand-navy flex items-center gap-1.5">
                        <span>Paket Term (3 Bulan)</span>
                        <span class="bg-brand-orange text-white text-[10px] font-black px-2 py-0.5 rounded-full">Hemat 15%</span>
                    </button>
                </div>
            </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch pt-4">
                
                <!-- CARD 1: Junior Coder -->
                <div class="bg-white rounded-[32px] p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.06)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between relative">
                    <div>
                        <!-- Header Card -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center gap-1.5 bg-[#E8F4FF] text-[#2B7FFF] font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                <span>🚀</span> Tingkat Pemula
                            </span>
                            <span class="text-xs font-bold text-gray-400">Usia 6 - 9 Tahun</span>
                        </div>
                        
                        <h3 class="text-2xl font-black text-brand-navy mb-2">Junior Coder</h3>
                        <p class="text-xs sm:text-sm text-gray-500 font-medium mb-6 leading-relaxed">
                            Membangun fondasi logika berpikir komputasional melalui visual block coding, puzzle interaktif, dan animasi yang seru.
                        </p>

                        <!-- Price -->
                        <div class="bg-[#F8FAFC] rounded-2xl p-5 mb-6 border border-gray-100">
                            <div class="flex items-baseline gap-1">
                                <span class="text-xs font-bold text-gray-400">Rp</span>
                                <span class="text-3xl sm:text-4xl font-black text-brand-navy pricing-junior">349.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-400 pricing-period">/bulan</span>
                            </div>
                            <p class="text-[11px] font-bold text-brand-orange mt-1.5 pricing-junior-note">
                                Biaya investasi reguler bulanan (4 sesi)
                            </p>
                        </div>

                        <!-- Benefits List -->
                        <div class="space-y-3.5 mb-8">
                            <p class="text-xs font-extrabold uppercase tracking-wider text-brand-navy">Benefit & Fasilitas Paket:</p>
                            
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium"><strong>4x Pertemuan</strong> per bulan (1x/minggu @60 Menit)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Materi: <strong>Scratch Jr & KodyBlocks</strong> animasi</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Kelas kecil (Maks. 3-4 anak / privat 1-on-1)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Pengasahan <strong>Computational Thinking</strong> & kreativitas</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Pembuatan <strong>2 Proyek Game</strong> buatan mandiri</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Laporan perkembangan berkala untuk orang tua</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">E-Sertifikat kelulusan level resmi</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20saya%20tertarik%20dengan%20Paket%20Junior%20Coder" target="_blank" class="w-full py-4 px-6 rounded-full border-2 border-brand-navy text-brand-navy hover:bg-brand-navy hover:text-white font-black text-xs sm:text-sm transition-all duration-300 text-center block shadow-sm hover:shadow-md active:scale-95">
                        Pilih Paket Junior Coder
                    </a>
                </div>

                <!-- CARD 2: Young AI Developer (HIGHLIGHTED / POPULAR) -->
                <div class="bg-white rounded-[32px] p-8 border-2 border-brand-orange shadow-[0_20px_50px_rgba(232,78,56,0.18)] hover:shadow-2xl transition-all duration-300 lg:-translate-y-4 flex flex-col justify-between relative z-20">
                    <!-- Floating Badge -->
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-gradient-to-r from-brand-orange to-[#D63E29] text-white font-black text-[11px] tracking-wider uppercase px-4 py-1.5 rounded-full shadow-lg flex items-center gap-1.5 whitespace-nowrap">
                        <span>⭐</span> PALING DIMINATI ORANG TUA
                    </div>

                    <div>
                        <!-- Header Card -->
                        <div class="flex items-center justify-between mb-4 pt-1">
                            <span class="inline-flex items-center gap-1.5 bg-[#FFF0ED] text-brand-orange font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                <span>🤖</span> Tingkat Menengah
                            </span>
                            <span class="text-xs font-bold text-gray-400">Usia 10 - 13 Tahun</span>
                        </div>
                        
                        <h3 class="text-2xl font-black text-brand-navy mb-2 flex items-center gap-2">
                            Young AI Developer
                        </h3>
                        <p class="text-xs sm:text-sm text-gray-500 font-medium mb-6 leading-relaxed">
                            Menciptakan game 3D, memahami logika Machine Learning, prompting AI anak, dan perancangan aplikasi interaktif.
                        </p>

                        <!-- Price -->
                        <div class="bg-orange-50/70 rounded-2xl p-5 mb-6 border border-orange-100">
                            <div class="flex items-baseline gap-1">
                                <span class="text-xs font-bold text-brand-orange">Rp</span>
                                <span class="text-3xl sm:text-4xl font-black text-brand-orange pricing-ai">499.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-500 pricing-period">/bulan</span>
                            </div>
                            <p class="text-[11px] font-bold text-brand-orange mt-1.5 pricing-ai-note">
                                Pilihan favorit 65% orang tua siswa Rakit AI
                            </p>
                        </div>

                        <!-- Benefits List -->
                        <div class="space-y-3.5 mb-8">
                            <p class="text-xs font-extrabold uppercase tracking-wider text-brand-navy">Semua Benefit Junior, Ditambah:</p>
                            
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium"><strong>4x Pertemuan</strong> per bulan (1x/minggu @90 Menit)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">Materi: <strong>Roblox Studio, Game 3D & AI Prompting</strong></span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">Eksplorasi konsep <strong>Machine Learning for Kids</strong></span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">Membangun <strong>3 Proyek Game Portofolio</strong> riil</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">Sesi <strong>Showcase Day</strong> karya di depan orang tua</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">Mentoring suportif & akses komunitas kreatif Rakit AI</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">E-Sertifikat kompetensi terakreditasi</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20saya%20tertarik%20dengan%20Paket%20Young%20AI%20Developer" target="_blank" class="w-full py-4 px-6 rounded-full bg-brand-orange hover:bg-brand-orangeHover text-white font-black text-xs sm:text-sm transition-all duration-300 text-center block shadow-lg shadow-orange-500/30 active:scale-95">
                        Daftar Paket Populer Ini
                    </a>
                </div>

                <!-- CARD 3: Teen Innovator -->
                <div class="bg-white rounded-[32px] p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.06)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between relative">
                    <div>
                        <!-- Header Card -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center gap-1.5 bg-[#F3E8FF] text-[#8B5CF6] font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                <span>⚡</span> Tingkat Lanjut
                            </span>
                            <span class="text-xs font-bold text-gray-400">Usia 14 - 17 Tahun</span>
                        </div>
                        
                        <h3 class="text-2xl font-black text-brand-navy mb-2">Teen Innovator</h3>
                        <p class="text-xs sm:text-sm text-gray-500 font-medium mb-6 leading-relaxed">
                            Mempelajari coding profesional dengan Python, web application, algoritma data, hingga penerapan solusi kecerdasan buatan.
                        </p>

                        <!-- Price -->
                        <div class="bg-[#F8FAFC] rounded-2xl p-5 mb-6 border border-gray-100">
                            <div class="flex items-baseline gap-1">
                                <span class="text-xs font-bold text-gray-400">Rp</span>
                                <span class="text-3xl sm:text-4xl font-black text-brand-navy pricing-teen">699.000</span>
                                <span class="text-xs sm:text-sm font-semibold text-gray-400 pricing-period">/bulan</span>
                            </div>
                            <p class="text-[11px] font-bold text-brand-orange mt-1.5 pricing-teen-note">
                                Persiapan portofolio & karir masa depan (4 sesi)
                            </p>
                        </div>

                        <!-- Benefits List -->
                        <div class="space-y-3.5 mb-8">
                            <p class="text-xs font-extrabold uppercase tracking-wider text-brand-navy">Benefit & Fasilitas Paket:</p>
                            
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium"><strong>4x Pertemuan</strong> per bulan (1x/minggu @90 Menit)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Materi: <strong>Python Pro, Web App & Applied AI</strong></span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Bimbingan proyek portofolio <strong>GitHub & Lomba Sains</strong></span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Mentoring 1-on-1 dengan praktisi industri tech</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Persiapan beasiswa & seleksi jurusan teknologi</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Akses eksklusif Rakit AI Hackathon & Innovation Lab</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Surat rekomendasi mentor & sertifikat tingkat lanjut</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button -->
                    <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20saya%20tertarik%20dengan%20Paket%20Teen%20Innovator" target="_blank" class="w-full py-4 px-6 rounded-full border-2 border-brand-navy text-brand-navy hover:bg-brand-navy hover:text-white font-black text-xs sm:text-sm transition-all duration-300 text-center block shadow-sm hover:shadow-md active:scale-95">
                        Pilih Paket Teen Innovator
                    </a>
                </div>

            </div>

            <!-- Guarantee Banner -->
            <div class="mt-12 max-w-4xl mx-auto bg-[#F8FAFC] border border-gray-200/80 rounded-2xl md:rounded-3xl p-6 sm:p-8 flex flex-col sm:flex-row items-center gap-5 text-center sm:text-left">
                <div class="w-14 h-14 rounded-2xl bg-orange-100 text-brand-orange flex items-center justify-center text-2xl flex-shrink-0 shadow-inner">
                    🛡️
                </div>
                <div class="flex-grow">
                    <h4 class="font-black text-brand-navy text-base md:text-lg mb-1">100% Garansi Kepuasan Belajar</h4>
                    <p class="text-xs md:text-sm text-gray-500 font-medium leading-relaxed">
                        Jika setelah 2 sesi pertama ananda merasa metode belajar kurang cocok, kami berikan jaminan pengembalian dana penuh tanpa syarat rumit.
                    </p>
                </div>
                <a href="#trial" class="flex-shrink-0 bg-brand-navy hover:bg-brand-navyDark text-white font-bold text-xs sm:text-sm px-6 py-3.5 rounded-full transition-all shadow-md active:scale-95">
                    Coba Free Trial Dulu
                </a>
            </div>
        </div>
    </section>

    <!-- ================= SECTION: EKSTRAKURIKULER SEKOLAH (School Partnership / Ekskul Coding & AI) ================= -->
    <section class="relative w-full py-20 md:py-28 bg-[#FCFDFE] overflow-hidden border-t border-gray-100/80" id="ekskul">
        <!-- Dekorasi Background -->
        <div class="absolute top-1/4 right-0 w-96 h-96 bg-brand-orange/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>
        <div class="absolute bottom-10 left-5 w-80 h-80 bg-blue-50/50 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
                <span class="text-[11px] sm:text-xs font-black uppercase tracking-widest text-brand-orange bg-orange-50 border border-orange-100 px-4 py-1.5 rounded-full inline-block mb-3">
                    KEMITRAAN SEKOLAH
                </span>
                <h2 class="text-3xl md:text-5xl font-black text-brand-navy leading-tight tracking-tight">
                    Hadirkan Ekstrakurikuler <span class="text-brand-orange">Coding & AI</span> di Sekolah Anda
                </h2>
                <p class="text-sm md:text-base text-gray-500 font-medium mt-3 leading-relaxed">
                    Rakit AI bekerja sama dengan sekolah dasar dan menengah untuk menyelenggarakan program ekstrakurikuler teknologi interaktif, mempersiapkan siswa menghadapi era digital sejak dini.
                </p>
            </div>

            <!-- Card Paket Ekskul (Grid 3 Kolom) -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch mb-16 pt-2">
                
                <!-- CARD 1: Junior Tech Explorer -->
                <div class="bg-white rounded-[32px] p-7 sm:p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.05)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between relative group">
                    <div>
                        <!-- Header Card -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center gap-1.5 bg-[#E8F4FF] text-[#2B7FFF] font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                <span>🎒</span> Kelas 1 - 3 SD
                            </span>
                            <span class="text-[11px] font-bold text-gray-400">Tingkat Dasar</span>
                        </div>

                        <h3 class="text-2xl font-black text-brand-navy mb-2">Junior Tech Explorer</h3>
                        
                        <!-- Fokus Materi -->
                        <div class="bg-gray-50/90 rounded-2xl p-4 mb-6 border border-gray-100">
                            <span class="text-[11px] font-black uppercase tracking-wider text-brand-navy/70 block mb-1">Fokus Pembelajaran:</span>
                            <p class="text-xs sm:text-sm text-gray-600 font-medium leading-relaxed">
                                Logika blok visual, animasi Scratch, dan pengenalan dasar komputer.
                            </p>
                        </div>

                        <!-- Benefit List -->
                        <div class="space-y-3.5 mb-8">
                            <p class="text-xs font-extrabold uppercase tracking-wider text-brand-navy">Benefit Sekolah & Siswa:</p>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Modul berkala mingguan yang terstruktur</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-green-100 text-brand-green flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Sertifikat pencapaian tingkat dasar</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button Outline -->
                    <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20saya%20tertarik%20mengajukan%20proposal%20ekskul%20Junior%20Tech%20Explorer%20untuk%20sekolah%20kami" target="_blank" class="w-full py-4 px-6 rounded-full border-2 border-brand-navy text-brand-navy hover:bg-brand-navy hover:text-white font-black text-xs sm:text-sm transition-all duration-300 text-center block shadow-sm hover:shadow-md active:scale-95">
                        Ajukan Proposal
                    </a>
                </div>

                <!-- CARD 2: AI & Game Creator (HIGHLIGHTED) -->
                <div class="bg-white rounded-[32px] p-7 sm:p-8 border-2 border-brand-orange shadow-[0_20px_50px_rgba(232,78,56,0.16)] hover:shadow-2xl transition-all duration-300 lg:-translate-y-3 flex flex-col justify-between relative z-20 group">
                    <!-- Highlight Badge -->
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-gradient-to-r from-brand-orange to-[#D63E29] text-white font-black text-[11px] tracking-wider uppercase px-4 py-1.5 rounded-full shadow-lg flex items-center gap-1.5 whitespace-nowrap">
                        <span>⭐</span> PROGRAM PALING DIMINATI
                    </div>

                    <div>
                        <!-- Header Card -->
                        <div class="flex items-center justify-between mb-4 pt-1">
                            <span class="inline-flex items-center gap-1.5 bg-[#FFF0ED] text-brand-orange font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                <span>🎮</span> Kelas 4 - 6 SD
                            </span>
                            <span class="text-[11px] font-black text-brand-orange bg-orange-100/70 px-2.5 py-0.5 rounded-md">Paling Populer</span>
                        </div>

                        <h3 class="text-2xl font-black text-brand-navy mb-2">AI & Game Creator</h3>
                        
                        <!-- Fokus Materi -->
                        <div class="bg-orange-50/70 rounded-2xl p-4 mb-6 border border-orange-100">
                            <span class="text-[11px] font-black uppercase tracking-wider text-brand-orange block mb-1">Fokus Pembelajaran:</span>
                            <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed">
                                Pembuatan game (Roblox / 2D Godot), pengenalan konsep AI, dan proyek IoT sederhana.
                            </p>
                        </div>

                        <!-- Benefit List -->
                        <div class="space-y-3.5 mb-8">
                            <p class="text-xs font-extrabold uppercase tracking-wider text-brand-navy">Benefit Sekolah & Siswa:</p>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">Mentor berpengalaman hadir ke sekolah (offline/hybrid)</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">Pameran karya akhir semester</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-orange-100 text-brand-orange flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-700 font-medium">Bimbingan lomba koding</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button Primary Orange -->
                    <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20saya%20ingin%20konsultasi%20program%20ekskul%20AI%20%26%20Game%20Creator%20untuk%20sekolah" target="_blank" class="w-full py-4 px-6 rounded-full bg-brand-orange hover:bg-brand-orangeHover text-white font-black text-xs sm:text-sm transition-all duration-300 text-center block shadow-lg shadow-orange-500/30 active:scale-95">
                        Konsultasi Program
                    </a>
                </div>

                <!-- CARD 3: Young Tech Leaders -->
                <div class="bg-white rounded-[32px] p-7 sm:p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.05)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between relative group">
                    <div>
                        <!-- Header Card -->
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center gap-1.5 bg-[#F3E8FF] text-[#8B5CF6] font-extrabold text-xs px-3.5 py-1.5 rounded-full">
                                <span>⚡</span> Jenjang Lanjutan / SMP
                            </span>
                            <span class="text-[11px] font-bold text-gray-400">Tingkat Lanjut</span>
                        </div>

                        <h3 class="text-2xl font-black text-brand-navy mb-2">Young Tech Leaders</h3>
                        
                        <!-- Fokus Materi -->
                        <div class="bg-gray-50/90 rounded-2xl p-4 mb-6 border border-gray-100">
                            <span class="text-[11px] font-black uppercase tracking-wider text-brand-navy/70 block mb-1">Fokus Pembelajaran:</span>
                            <p class="text-xs sm:text-sm text-gray-600 font-medium leading-relaxed">
                                Pemrograman Python, Web Design (HTML/CSS), serta pemecahan masalah berbasis proyek nyata.
                            </p>
                        </div>

                        <!-- Benefit List -->
                        <div class="space-y-3.5 mb-8">
                            <p class="text-xs font-extrabold uppercase tracking-wider text-brand-navy">Benefit Sekolah & Siswa:</p>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-purple-100 text-brand-purple flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Portofolio karya digital</span>
                            </div>
                            <div class="flex items-start gap-3">
                                <span class="w-5 h-5 rounded-full bg-purple-100 text-brand-purple flex items-center justify-center text-xs flex-shrink-0 mt-0.5 font-bold">✓</span>
                                <span class="text-xs sm:text-sm text-gray-600 font-medium">Pendampingan expo teknologi sekolah</span>
                            </div>
                        </div>
                    </div>

                    <!-- Button Outline -->
                    <a href="https://wa.me/?text=Halo%20Rakit%20AI,%20saya%20tertarik%20mengajukan%20proposal%20ekskul%20Young%20Tech%20Leaders%20untuk%20sekolah%20kami" target="_blank" class="w-full py-4 px-6 rounded-full border-2 border-brand-navy text-brand-navy hover:bg-brand-navy hover:text-white font-black text-xs sm:text-sm transition-all duration-300 text-center block shadow-sm hover:shadow-md active:scale-95">
                        Ajukan Proposal
                    </a>
                </div>

            </div>

            <!-- Nilai Tambah Sekolah (4 Kartu Mini Horizontal) -->
            <div class="mb-14">
                <div class="text-center mb-6">
                    <h3 class="text-xl md:text-2xl font-black text-brand-navy">Nilai Tambah untuk Sekolah</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-medium mt-1">Dukungan holistik agar kegiatan ekstrakurikuler berjalan efektif dan berkelanjutan</p>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-5">
                    <!-- Mini Card 1 -->
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-3.5 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <div class="w-11 h-11 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center text-xl flex-shrink-0 shadow-inner">
                            📚
                        </div>
                        <div>
                            <h4 class="font-black text-sm text-brand-navy mb-1">Kurikulum Terstandar</h4>
                            <p class="text-xs text-gray-500 font-medium leading-relaxed">Disesuaikan dengan kalender akademik sekolah.</p>
                        </div>
                    </div>

                    <!-- Mini Card 2 -->
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-3.5 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <div class="w-11 h-11 rounded-xl bg-orange-50 text-brand-orange flex items-center justify-center text-xl flex-shrink-0 shadow-inner">
                            👨‍🏫
                        </div>
                        <div>
                            <h4 class="font-black text-sm text-brand-navy mb-1">Mentor Tersertifikasi</h4>
                            <p class="text-xs text-gray-500 font-medium leading-relaxed">Instruktur profesional, berpengalaman, dan ramah anak.</p>
                        </div>
                    </div>

                    <!-- Mini Card 3 -->
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-3.5 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <div class="w-11 h-11 rounded-xl bg-emerald-50 text-brand-green flex items-center justify-center text-xl flex-shrink-0 shadow-inner">
                            📊
                        </div>
                        <div>
                            <h4 class="font-black text-sm text-brand-navy mb-1">Laporan Berkala</h4>
                            <p class="text-xs text-gray-500 font-medium leading-relaxed">Rekap laporan perkembangan minat dan bakat siswa untuk sekolah/guru.</p>
                        </div>
                    </div>

                    <!-- Mini Card 4 -->
                    <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-sm flex items-start gap-3.5 hover:shadow-md hover:-translate-y-1 transition-all duration-300">
                        <div class="w-11 h-11 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center text-xl flex-shrink-0 shadow-inner">
                            🏆
                        </div>
                        <div>
                            <h4 class="font-black text-sm text-brand-navy mb-1">Support Fasilitas & Lomba</h4>
                            <p class="text-xs text-gray-500 font-medium leading-relaxed">Pendampingan pameran karya dan kejuaraan koding.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banner Call to Action (CTA) -->
            <div class="max-w-5xl mx-auto bg-gradient-to-r from-orange-50 via-white to-orange-50/80 border border-orange-200/90 rounded-2xl md:rounded-3xl p-6 sm:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-sm text-center md:text-left">
                <div class="flex flex-col sm:flex-row items-center gap-4 max-w-2xl">
                    <div class="w-14 h-14 rounded-2xl bg-brand-orange text-white flex items-center justify-center text-2xl flex-shrink-0 shadow-md shadow-orange-500/25">
                        🤝
                    </div>
                    <div>
                        <h4 class="font-black text-brand-navy text-base md:text-lg mb-1">Tertarik membuka ekskul Rakit AI di sekolah Bapak/Ibu?</h4>
                        <p class="text-xs md:text-sm text-gray-500 font-medium leading-relaxed">
                            Hubungi tim kemitraan kami untuk proposal lengkap, skema program offline/hybrid, dan presentasi gratis ke sekolah.
                        </p>
                    </div>
                </div>
                
                <a href="https://wa.me/?text=Halo%20Tim%20Kemitraan%20Rakit%20AI,%20kami%20tertarik%20membuka%20ekskul%20coding%20%26%20AI%20di%20sekolah%20kami.%20Boleh%20minta%20informasi%20proposalnya?" target="_blank" class="flex-shrink-0 inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white text-xs sm:text-sm font-extrabold px-6 sm:px-7 py-3.5 rounded-full shadow-lg shadow-green-500/25 active:scale-95 transition-all whitespace-nowrap">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.842-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                    <span>Hubungi Tim Kemitraan via WhatsApp</span>
                </a>
            </div>

        </div>
    </section>

    <!-- ================= SECTION 8: TESTIMONIALS (Ulasan Orang Tua Siswa) ================= -->
    <section class="relative w-full py-20 md:py-28 bg-brand-bgLight overflow-hidden" id="testimonials">
        <!-- Dekorasi Background -->
        <div class="absolute top-1/2 left-0 -translate-y-1/2 w-96 h-96 bg-brand-orange/5 rounded-full blur-3xl -z-10 pointer-events-none"></div>
        <div class="absolute top-10 right-10 w-72 h-72 bg-emerald-50 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16">
                <span class="text-[11px] sm:text-xs font-black uppercase tracking-widest text-brand-orange bg-orange-50 border border-orange-100 px-4 py-1.5 rounded-full inline-block mb-3">
                    ULASAN & CERITA ORANG TUA
                </span>
                <h2 class="text-3xl md:text-5xl font-black text-brand-navy leading-tight tracking-tight">
                    Dipercaya Lebih dari <span class="text-brand-orange">1.500+ Orang Tua</span> di Indonesia
                </h2>
                <p class="text-sm md:text-base text-gray-500 font-medium mt-3 leading-relaxed">
                    Kisah nyata bagaimana anak-anak bertransformasi dari sekadar konsumen game menjadi kreator digital yang penuh rasa ingin tahu dan percaya diri.
                </p>
            </div>

            <!-- Stats Bar -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-14 max-w-5xl mx-auto">
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-card text-center">
                    <div class="text-2xl sm:text-3xl font-black text-brand-orange">4.9 / 5.0</div>
                    <div class="text-xs font-bold text-gray-500 mt-1">⭐ Skor Kepuasan Wali Murid</div>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-card text-center">
                    <div class="text-2xl sm:text-3xl font-black text-brand-navy">1.500+</div>
                    <div class="text-xs font-bold text-gray-500 mt-1">🚀 Siswa Telah Belajar</div>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-card text-center">
                    <div class="text-2xl sm:text-3xl font-black text-brand-navy">98%</div>
                    <div class="text-xs font-bold text-gray-500 mt-1">🏆 Tuntaskan Proyek Pertama</div>
                </div>
                <div class="bg-white p-5 rounded-2xl border border-gray-100 shadow-card text-center">
                    <div class="text-2xl sm:text-3xl font-black text-brand-navy">100%</div>
                    <div class="text-xs font-bold text-gray-500 mt-1">👩‍🏫 Mentor Tersertifikasi</div>
                </div>
            </div>

            <!-- Testimonials Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Testi Card 1 -->
                <div class="bg-white rounded-[32px] p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.06)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between relative group">
                    <div class="mb-6">
                        <!-- Rating Stars & Quote Icon -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex text-amber-400 gap-1 text-sm">
                                ★★★★★
                            </div>
                            <span class="text-brand-orange/30 group-hover:text-brand-orange transition-colors">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            </span>
                        </div>

                        <!-- Quote Text -->
                        <p class="text-xs sm:text-sm text-gray-600 font-medium leading-relaxed italic">
                            "Arka (8 thn) dulu kecanduan main game di tablet sampai susah disuruh belajar. Setelah ikut kelas Junior Coder di Rakit AI, waktu gadget-nya berubah 180 derajat jadi produktif! Dia sangat senang bisa bikin animasi dan game labirin sendiri, bahkan dengan bangga dipamerkan ke keluarga saat kumpul lebaran. Terima kasih Rakit AI!"
                        </p>
                    </div>

                    <!-- Parent Profile -->
                    <div class="pt-5 border-t border-gray-100 flex items-center gap-3.5">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Ibu Ratna Kumalasari" class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange flex-shrink-0" />
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-black text-brand-navy text-sm">Ibu Ratna Kumalasari</h4>
                                <span class="text-brand-green text-xs" title="Verified Parent">✓</span>
                            </div>
                            <p class="text-[11px] text-gray-400 font-medium">Bunda dari Arka (8 thn, Kelas 3 SD)</p>
                            <span class="inline-block bg-[#E8F4FF] text-[#2B7FFF] text-[10px] font-extrabold px-2 py-0.5 rounded-md mt-1">Paket Junior Coder</span>
                        </div>
                    </div>
                </div>

                <!-- Testi Card 2 -->
                <div class="bg-white rounded-[32px] p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.06)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between relative group">
                    <div class="mb-6">
                        <!-- Rating Stars & Quote Icon -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex text-amber-400 gap-1 text-sm">
                                ★★★★★
                            </div>
                            <span class="text-brand-orange/30 group-hover:text-brand-orange transition-colors">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            </span>
                        </div>

                        <!-- Quote Text -->
                        <p class="text-xs sm:text-sm text-gray-600 font-medium leading-relaxed italic">
                            "Awalnya ragu apakah anak perempuan saya akan tertarik dengan coding. Ternyata penyampaian mentornya super seru, sabar, dan penuh apresiasi. Nadira belajar logika Roblox dan konsep AI dasar tanpa rasa jenuh. Nilai matematikanya di sekolah ikut melonjak karena terbiasa berpikir runut dan analitis."
                        </p>
                    </div>

                    <!-- Parent Profile -->
                    <div class="pt-5 border-t border-gray-100 flex items-center gap-3.5">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Bapak Hendra Wijaya" class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange flex-shrink-0" />
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-black text-brand-navy text-sm">Bapak Hendra Wijaya</h4>
                                <span class="text-brand-green text-xs" title="Verified Parent">✓</span>
                            </div>
                            <p class="text-[11px] text-gray-400 font-medium">Ayah dari Nadira (11 thn, Kelas 6 SD)</p>
                            <span class="inline-block bg-[#FFF0ED] text-brand-orange text-[10px] font-extrabold px-2 py-0.5 rounded-md mt-1">Paket Young AI Developer</span>
                        </div>
                    </div>
                </div>

                <!-- Testi Card 3 -->
                <div class="bg-white rounded-[32px] p-8 border border-gray-100 shadow-[0_10px_30px_rgba(0,0,0,0.06)] hover:shadow-xl transition-all duration-300 hover:-translate-y-2 flex flex-col justify-between relative group">
                    <div class="mb-6">
                        <!-- Rating Stars & Quote Icon -->
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex text-amber-400 gap-1 text-sm">
                                ★★★★★
                            </div>
                            <span class="text-brand-orange/30 group-hover:text-brand-orange transition-colors">
                                <svg class="w-8 h-8 fill-current" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                            </span>
                        </div>

                        <!-- Quote Text -->
                        <p class="text-xs sm:text-sm text-gray-600 font-medium leading-relaxed italic">
                            "Program Teen Innovator beneran membuka pintu masa depan anak saya. Farel diajarkan Python dan logika AI sungguhan oleh mentor industri. Bulan lalu dia berhasil memenangkan lomba sains teknologi remaja di sekolahnya berkat proyek otomasi buatannya di Rakit AI. Investasi terbaik untuk masa depan anak!"
                        </p>
                    </div>

                    <!-- Parent Profile -->
                    <div class="pt-5 border-t border-gray-100 flex items-center gap-3.5">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80" alt="Ibu Maya Kartika" class="w-12 h-12 rounded-full object-cover border-2 border-brand-orange flex-shrink-0" />
                        <div>
                            <div class="flex items-center gap-1.5">
                                <h4 class="font-black text-brand-navy text-sm">Ibu Maya Kartika, M.Pd</h4>
                                <span class="text-brand-green text-xs" title="Verified Parent">✓</span>
                            </div>
                            <p class="text-[11px] text-gray-400 font-medium">Bunda dari Farel (14 thn, Kelas 2 SMP)</p>
                            <span class="inline-block bg-[#F3E8FF] text-[#8B5CF6] text-[10px] font-extrabold px-2 py-0.5 rounded-md mt-1">Paket Teen Innovator</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= SECTION 9: FAQ (Frequently Asked Questions) ================= -->
    <section class="relative w-full py-20 md:py-28 bg-white overflow-hidden" id="faq">
        <!-- Dekorasi Background -->
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-orange-50/60 rounded-full blur-3xl -z-10 pointer-events-none"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-12 md:mb-16">
                <span class="text-[11px] sm:text-xs font-black uppercase tracking-widest text-brand-orange bg-orange-50 border border-orange-100 px-4 py-1.5 rounded-full inline-block mb-3">
                    FREQUENTLY ASKED QUESTIONS
                </span>
                <h2 class="text-3xl md:text-5xl font-black text-brand-navy leading-tight tracking-tight">
                    Pertanyaan yang Sering <span class="text-brand-orange">Ditanyakan</span>
                </h2>
                <p class="text-sm md:text-base text-gray-500 font-medium mt-3 max-w-xl mx-auto leading-relaxed">
                    Semua jawaban seputar kurikulum, jadwal, perangkat, dan metode belajar di Rakit AI untuk memudahkan Ayah & Bunda.
                </p>
            </div>

            <!-- Accordion List -->
            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="bg-[#FCFDFE] rounded-2xl md:rounded-3xl border border-gray-200/80 hover:border-orange-200 transition-all duration-200 overflow-hidden shadow-sm">
                    <button type="button" class="faq-btn w-full px-6 py-5 md:py-6 text-left flex items-center justify-between gap-4 focus:outline-none cursor-pointer">
                        <span class="text-sm md:text-base font-bold text-brand-navy">
                            Apakah anak yang belum pernah belajar coding sama sekali bisa ikut?
                        </span>
                        <span class="faq-icon flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-gray-500 font-medium leading-relaxed border-t border-gray-100 pt-4">
                        Tentu saja bisa! Lebih dari 90% siswa baru kami memulai dari nol tanpa pengalaman koding sama sekali. Kami menggunakan kurikulum berjenjang dengan pendekatan visual (visual block programming) dan metode pembelajaran berbasis game yang interaktif, sehingga anak belajar dengan rasa senang layaknya merakit puzzle tanpa merasa terbebani.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-[#FCFDFE] rounded-2xl md:rounded-3xl border border-gray-200/80 hover:border-orange-200 transition-all duration-200 overflow-hidden shadow-sm">
                    <button type="button" class="faq-btn w-full px-6 py-5 md:py-6 text-left flex items-center justify-between gap-4 focus:outline-none cursor-pointer">
                        <span class="text-sm md:text-base font-bold text-brand-navy">
                            Perangkat apa saja yang dibutuhkan untuk mengikuti kelas?
                        </span>
                        <span class="faq-icon flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-gray-500 font-medium leading-relaxed border-t border-gray-100 pt-4">
                        Cukup sediakan laptop atau komputer (PC) berbasis Windows atau macOS dengan koneksi internet yang stabil, webcam, mikrofon, dan browser Google Chrome ter-update. Untuk level dasar (Junior Coder), spesifikasi laptop standar sekolah/pekerjaan sudah sangat mencukupi tanpa memerlukan laptop gaming spesifikasi tinggi.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-[#FCFDFE] rounded-2xl md:rounded-3xl border border-gray-200/80 hover:border-orange-200 transition-all duration-200 overflow-hidden shadow-sm">
                    <button type="button" class="faq-btn w-full px-6 py-5 md:py-6 text-left flex items-center justify-between gap-4 focus:outline-none cursor-pointer">
                        <span class="text-sm md:text-base font-bold text-brand-navy">
                            Apakah kelas diadakan secara online atau tatap muka (offline)?
                        </span>
                        <span class="faq-icon flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-gray-500 font-medium leading-relaxed border-t border-gray-100 pt-4">
                        Kami menyediakan kedua opsi fleksibel! Ayah & Bunda bisa memilih kelas online tatap layar secara live interaktif via Zoom dari rumah, atau kelas tatap muka langsung (offline) di cabang center Rakit AI terdekat di kota Anda dengan fasilitas lab komputer modern.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-[#FCFDFE] rounded-2xl md:rounded-3xl border border-gray-200/80 hover:border-orange-200 transition-all duration-200 overflow-hidden shadow-sm">
                    <button type="button" class="faq-btn w-full px-6 py-5 md:py-6 text-left flex items-center justify-between gap-4 focus:outline-none cursor-pointer">
                        <span class="text-sm md:text-base font-bold text-brand-navy">
                            Berapa jumlah siswa dalam setiap sesi kelas?
                        </span>
                        <span class="faq-icon flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-gray-500 font-medium leading-relaxed border-t border-gray-100 pt-4">
                        Untuk menjaga kualitas interaksi maksimal, kelas reguler kami batasi maksimal hanya 3 hingga 4 anak per kelompok. Kami juga menyediakan opsi kelas Privat 1-on-1 (1 mentor 1 anak) bagi yang menginginkan fleksibilitas jadwal dan bimbingan yang 100% dipersonalisasi sesuai kecepatan belajar ananda.
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-[#FCFDFE] rounded-2xl md:rounded-3xl border border-gray-200/80 hover:border-orange-200 transition-all duration-200 overflow-hidden shadow-sm">
                    <button type="button" class="faq-btn w-full px-6 py-5 md:py-6 text-left flex items-center justify-between gap-4 focus:outline-none cursor-pointer">
                        <span class="text-sm md:text-base font-bold text-brand-navy">
                            Bagaimana jika anak berhalangan hadir pada jadwal kelas (reschedule)?
                        </span>
                        <span class="faq-icon flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-gray-500 font-medium leading-relaxed border-t border-gray-100 pt-4">
                        Kami sangat memahami kesibukan sekolah anak. Orang tua cukup mengonfirmasi izin ketidakhadiran minimal 12 jam sebelum sesi dimulai, dan tim kami akan mengatur jadwal sesi pengganti (Make-up Class) tanpa ada biaya tambahan sama sekali, sehingga anak tidak akan kehilangan materi.
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-[#FCFDFE] rounded-2xl md:rounded-3xl border border-gray-200/80 hover:border-orange-200 transition-all duration-200 overflow-hidden shadow-sm">
                    <button type="button" class="faq-btn w-full px-6 py-5 md:py-6 text-left flex items-center justify-between gap-4 focus:outline-none cursor-pointer">
                        <span class="text-sm md:text-base font-bold text-brand-navy">
                            Apakah ada sesi coba gratis (Free Trial) sebelum mendaftar?
                        </span>
                        <span class="faq-icon flex-shrink-0 w-8 h-8 rounded-full bg-orange-50 text-brand-orange flex items-center justify-center transition-all duration-300">
                            <svg class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div class="faq-content hidden px-6 pb-6 text-xs sm:text-sm text-gray-500 font-medium leading-relaxed border-t border-gray-100 pt-4">
                        Tentu saja ada! Kami menyediakan 1 sesi Free Trial Class (durasi 30-45 menit) 100% gratis. Melalui sesi ini, anak bisa langsung merasakan asyiknya membuat proyek coding perdananya, sekaligus mentor kami akan membantu memetakan level dan minat belajar ananda.
                    </div>
                </div>

            </div>

            <!-- WhatsApp Help Box -->
            <div class="mt-12 bg-gradient-to-r from-orange-50/80 via-white to-orange-50/80 border border-orange-100 rounded-3xl p-6 sm:p-8 flex flex-col sm:flex-row items-center justify-between gap-6 text-center sm:text-left shadow-sm">
                <div>
                    <h3 class="text-lg md:text-xl font-black text-brand-navy mb-1">Masih punya pertanyaan yang belum terjawab?</h3>
                    <p class="text-xs md:text-sm text-gray-500 font-medium">Tim konsultan edukasi kami siap membantu Ayah & Bunda memilihkan program terbaik.</p>
                </div>
                <a href="https://wa.me/" target="_blank" class="flex-shrink-0 inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white text-xs sm:text-sm font-extrabold px-6 py-3.5 rounded-full shadow-lg shadow-green-500/25 active:scale-95 transition-all">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24"><path d="M12.031 2C6.495 2 2 6.495 2 12.031a9.98 9.98 0 0 0 1.554 5.342L2 22l4.78-1.517a9.99 9.99 0 0 0 5.251 1.488c5.536 0 10.031-4.495 10.031-10.031S17.567 2 12.031 2zm0 18.232a8.21 8.21 0 0 1-4.223-1.163l-.303-.18-3.136.996.999-3.058-.198-.315a8.2 8.2 0 1 1 6.861 3.72zm4.55-6.177c-.25-.125-1.477-.729-1.706-.813-.229-.083-.396-.125-.563.125-.167.25-.646.813-.792.98-.146.166-.292.187-.542.062s-1.054-.388-2.008-1.238c-.742-.662-1.243-1.48-1.389-1.73-.146-.25-.016-.385.109-.51.112-.112.25-.292.375-.438s.167-.25.25-.417a.52.52 0 0 0-.021-.5c-.062-.125-.562-1.354-.77-1.854-.203-.487-.41-.421-.563-.429l-.479-.008c-.167 0-.438.062-.667.312s-.875.854-.875 2.083c0 1.229.896 2.417 1.021 2.583.125.167 1.763 2.693 4.271 3.777.597.258 1.064.412 1.428.528.6.191 1.146.164 1.578.099.481-.072 1.477-.604 1.685-1.188.208-.583.208-1.083.146-1.188-.063-.104-.229-.167-.479-.292z"></path></svg>
                    <span>Konsultasi via WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ================= SECTION 10: FINAL CTA & FOOTER (RakitAI.id Style) ================= -->
    <section class="relative w-full bg-brand-orange pt-20 pb-10 overflow-hidden text-white" id="trial">
        
        <!-- Dekorasi Background (Opsional: bisa diganti bentuk gelombang atau pattern) -->
        <div class="absolute top-0 left-0 w-full h-full opacity-10 pointer-events-none">
            <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100 C 30 80, 50 30, 100 0 L100 100 Z" fill="#FFFFFF"/>
            </svg>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            
            <!-- Judul Besar -->
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black leading-tight mb-6">
                Siap Belajar Teknologi <br class="hidden md:block" />
                Tanpa Harus Bingung
            </h2>

            <!-- Deskripsi -->
            <p class="text-base md:text-lg text-white/90 font-medium leading-relaxed mb-10 max-w-2xl mx-auto">
                Gabung sekarang dan mulai langkah pertamamu bareng mentor profesional, komunitas suportif, dan support system yang selalu siap bantu kamu berkembang.
            </p>

            <!-- FORM INPUT EMAIL + TOMBOL -->
            <!-- Dibuat rounded-full dan menempel jadi satu kesatuan -->
            <form class="flex flex-col sm:flex-row items-center justify-center w-full max-w-2xl mx-auto mb-16" onsubmit="event.preventDefault(); alert('Terima kasih! Cek email kamu untuk informasi selanjutnya.');">
                <div class="relative w-full">
                    <input 
                        type="email" 
                        placeholder="Masukan Email..." 
                        required
                        class="w-full pl-6 pr-4 sm:pr-48 py-4 rounded-full sm:rounded-r-none sm:rounded-l-full text-brand-navy font-medium focus:outline-none focus:ring-4 focus:ring-white/30 border-none shadow-lg"
                    />
                    <!-- Tombol ditaruh di dalam input (desktop), dan di bawah (mobile) -->
                    <button 
                        type="submit" 
                        class="w-full sm:w-auto sm:absolute sm:right-1 sm:top-1 sm:bottom-1 px-8 py-4 sm:py-0 mt-3 sm:mt-0 bg-[#D63E29] hover:bg-[#C43522] text-white font-bold rounded-full transition-all shadow-md active:scale-95 flex items-center justify-center"
                    >
                        Ambil Kelas Gratis
                    </button>
                </div>
            </form>

            <!-- Copyright -->
            <p class="text-sm text-white/80 font-medium mb-8">
                Copyright © 2025. PT Pintar Kapan Aja (PIKA)
            </p>

            <!-- Footer Links Kecil -->
            <div class="flex flex-wrap justify-center gap-6 text-sm font-bold text-white/90 mb-8">
                <a href="#" class="hover:text-white hover:underline transition-all">Instagram</a>
                <a href="#" class="hover:text-white hover:underline transition-all">YouTube</a>
                <a href="#" class="hover:text-white hover:underline transition-all">LinkedIn</a>
                <a href="#" class="hover:text-white hover:underline transition-all">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white hover:underline transition-all">Syarat & Ketentuan</a>
            </div>

        </div>
    </section>

    <!-- ================= GELOMBANG PEMISAH 5 (Putih/Abu ke Putih Footer) ================= -->
    <!-- Opsional: Kalau mau tetap pakai gelombang sebelum footer -->
    <!-- <div class="relative w-full h-[80px] md:h-[120px] -mt-10 z-10 bg-brand-bgLight">
        <svg class="w-full h-full" preserveAspectRatio="none" viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 120 L0 60 C 320 0, 640 100, 960 60 C 1120 40, 1280 80, 1440 60 L1440 120 Z" fill="#FFFFFF"/>
        </svg>
    </div> -->

    <!-- ================= FOOTER ================= -->
    <footer class="max-w-7xl mx-auto mt-20 pt-10 pb-10 px-4 sm:px-6 lg:px-8 border-t border-gray-200 text-center">
        <img alt="Rakit AI Logo" class="h-10 w-auto object-contain mx-auto mb-4" src="/logo.png"/>
        <p class="text-sm text-gray-500 leading-relaxed mb-6 max-w-md mx-auto">Empowering next-generation digital creators, problem solvers & leaders with coding and AI education.</p>
        <div class="flex justify-center gap-6 text-sm text-gray-400 font-semibold mb-6">
            <a class="hover:text-brand-orange transition-colors" href="#">Instagram</a>
            <a class="hover:text-brand-orange transition-colors" href="#">YouTube</a>
            <a class="hover:text-brand-orange transition-colors" href="#">LinkedIn</a>
        </div>
        <p class="text-xs text-gray-400">© 2024 PT Rakit AI Indonesia. All Rights Reserved.</p>
    </footer>

    <!-- ================= FLOATING WHATSAPP ================= -->
    <div class="fixed bottom-6 right-6 z-50">
        <a aria-label="Chat WhatsApp" class="flex items-center justify-center w-14 h-14 bg-[#25D366] hover:bg-[#20ba59] text-white rounded-full shadow-lg shadow-green-500/40 transition-transform active:scale-90" href="https://wa.me/" target="_blank">
            <svg class="w-7 h-7 fill-current" viewbox="0 0 24 24"><path d="M12.031 2C6.495 2 2 6.495 2 12.031a9.98 9.98 0 0 0 1.554 5.342L2 22l4.78-1.517a9.99 9.99 0 0 0 5.251 1.488c5.536 0 10.031-4.495 10.031-10.031S17.567 2 12.031 2zm0 18.232a8.21 8.21 0 0 1-4.223-1.163l-.303-.18-3.136.996.999-3.058-.198-.315a8.2 8.2 0 1 1 6.861 3.72zm4.55-6.177c-.25-.125-1.477-.729-1.706-.813-.229-.083-.396-.125-.563.125-.167.25-.646.813-.792.98-.146.166-.292.187-.542.062s-1.054-.388-2.008-1.238c-.742-.662-1.243-1.48-1.389-1.73-.146-.25-.016-.385.109-.51.112-.112.25-.292.375-.438s.167-.25.25-.417a.52.52 0 0 0-.021-.5c-.062-.125-.562-1.354-.77-1.854-.203-.487-.41-.421-.563-.429l-.479-.008c-.167 0-.438.062-.667.312s-.875.854-.875 2.083c0 1.229.896 2.417 1.021 2.583.125.167 1.763 2.693 4.271 3.777.597.258 1.064.412 1.428.528.6.191 1.146.164 1.578.099.481-.072 1.477-.604 1.685-1.188.208-.583.208-1.083.146-1.188-.063-.104-.229-.167-.479-.292z"></path></svg>
            <span class="absolute top-0 right-0 w-3.5 h-3.5 bg-red-500 border-2 border-white rounded-full"></span>
        </a>
    </div>

    <!-- ================= JAVASCRIPT INTERACTIONS ================= -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // FAQ Accordion Interaction
            const faqButtons = document.querySelectorAll('.faq-btn');
            faqButtons.forEach(btn => {
                btn.addEventListener('click', function () {
                    const content = this.nextElementSibling;
                    const svgIcon = this.querySelector('.faq-icon svg');
                    const isOpen = !content.classList.contains('hidden');

                    // Tutup item FAQ lainnya (opsional untuk pengalaman accordion yang bersih)
                    document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
                    document.querySelectorAll('.faq-icon svg').forEach(svg => {
                        svg.style.transform = 'rotate(0deg)';
                    });

                    // Toggle item yang sedang diklik
                    if (!isOpen) {
                        content.classList.remove('hidden');
                        if (svgIcon) svgIcon.style.transform = 'rotate(180deg)';
                    }
                });
            });

            // Pricing Billing Switcher Interaction
            const btnMonthly = document.getElementById('billing-monthly-btn');
            const btnTerm = document.getElementById('billing-term-btn');
            const elJuniorPrice = document.querySelector('.pricing-junior');
            const elAiPrice = document.querySelector('.pricing-ai');
            const elTeenPrice = document.querySelector('.pricing-teen');
            const elPeriods = document.querySelectorAll('.pricing-period');
            const elJuniorNote = document.querySelector('.pricing-junior-note');
            const elAiNote = document.querySelector('.pricing-ai-note');
            const elTeenNote = document.querySelector('.pricing-teen-note');

            if (btnMonthly && btnTerm) {
                btnMonthly.addEventListener('click', function () {
                    // Update tampilan tombol
                    btnMonthly.classList.add('bg-white', 'text-brand-navy', 'shadow-sm');
                    btnMonthly.classList.remove('text-gray-500');
                    btnTerm.classList.remove('bg-white', 'text-brand-navy', 'shadow-sm');
                    btnTerm.classList.add('text-gray-500');

                    // Update harga bulanan
                    if (elJuniorPrice) elJuniorPrice.textContent = '349.000';
                    if (elAiPrice) elAiPrice.textContent = '499.000';
                    if (elTeenPrice) elTeenPrice.textContent = '699.000';

                    elPeriods.forEach(p => p.textContent = '/bulan');

                    if (elJuniorNote) elJuniorNote.textContent = 'Biaya investasi reguler bulanan (4 sesi)';
                    if (elAiNote) elAiNote.textContent = 'Pilihan favorit 65% orang tua siswa Rakit AI';
                    if (elTeenNote) elTeenNote.textContent = 'Persiapan portofolio & karir masa depan (4 sesi)';
                });

                btnTerm.addEventListener('click', function () {
                    // Update tampilan tombol
                    btnTerm.classList.add('bg-white', 'text-brand-navy', 'shadow-sm');
                    btnTerm.classList.remove('text-gray-500');
                    btnMonthly.classList.remove('bg-white', 'text-brand-navy', 'shadow-sm');
                    btnMonthly.classList.add('text-gray-500');

                    // Update harga term (3 bulan - diskon 15%)
                    if (elJuniorPrice) elJuniorPrice.textContent = '890.000';
                    if (elAiPrice) elAiPrice.textContent = '1.270.000';
                    if (elTeenPrice) elTeenPrice.textContent = '1.780.000';

                    elPeriods.forEach(p => p.textContent = '/term (3 bln)');

                    if (elJuniorNote) elJuniorNote.textContent = '🎉 Hemat Rp 157.000 (12 sesi penuh)';
                    if (elAiNote) elAiNote.textContent = '🎉 Hemat Rp 227.000 + Bonus Merchandise';
                    if (elTeenNote) elTeenNote.textContent = '🎉 Hemat Rp 317.000 + Sesi Konsultasi Eksklusif';
                });
            }
        });
    </script>

</body>
</html>