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
            
            <nav class="hidden md:flex items-center gap-8 text-sm font-bold text-gray-600">
                <a href="#programs" class="hover:text-brand-orange transition-colors">Program</a>
                <a href="#method" class="hover:text-brand-orange transition-colors">Metode</a>
                <a href="#testimonials" class="hover:text-brand-orange transition-colors">Testimoni</a>
            </nav>

            <div class="flex items-center gap-3">
                <div class="hidden sm:flex items-center bg-gray-100 p-0.5 rounded-full text-[11px] font-extrabold text-gray-500">
                    <span class="bg-white text-brand-navy px-2 py-0.5 rounded-full shadow-sm">ID</span>
                    <span class="px-1.5 py-0.5 text-gray-400 cursor-pointer hover:text-gray-700">EN</span>
                </div>
                <a class="bg-brand-orange hover:bg-brand-orangeHover text-white text-[11px] sm:text-xs font-black px-4 py-2 rounded-full uppercase tracking-wider transition-all shadow-md active:scale-95" href="#trial">
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
            <div class="flex flex-col-reverse md:flex-row items-center gap-10 md:gap-16">
                
                <div class="flex-1 text-center md:text-left">
                    
                    <div class="inline-flex items-center gap-2 bg-[#FF9B85] text-white px-4 py-2 rounded-full mb-4 shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
                        <span class="text-[10px] font-black tracking-widest uppercase">IT, AI & Coding School</span>
                    </div>
                    
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-brand-navy tracking-tight leading-[1.15] mb-4">
                        Coding Today,<br/>
                        <span class="text-brand-orange relative inline-block">
                            Leading Tomorrow
                            <svg class="absolute -bottom-2 left-0 w-full h-3 text-brand-orange/30" preserveaspectratio="none" viewbox="0 0 100 10"><path d="M0 5 Q 50 0 100 5" fill="transparent" stroke="currentColor" stroke-width="4"></path></svg>
                        </span>
                    </h1>
                    
                    <p class="text-sm md:text-base text-gray-500 font-medium leading-relaxed max-w-lg mx-auto md:mx-0 mb-8">
                        Mempersiapkan masa depan anak usia 5–18 tahun lewat kurikulum berstandar internasional dari <strong class="text-gray-700">UK & Jepang</strong> dengan metode yang menyenangkan.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start mb-8">
                        <a class="bg-brand-orange hover:bg-brand-orangeHover text-white text-sm font-black py-3.5 px-8 rounded-full shadow-lg shadow-orange-500/25 uppercase tracking-wider flex items-center justify-center gap-2 transition-all active:scale-95" href="#trial">
                            <span>Daftar Free Trial</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24"><path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </a>
                        <a class="bg-white hover:bg-gray-50 text-brand-navy border-2 border-brand-navy text-sm font-bold py-3.5 px-8 rounded-full transition-all active:scale-95" href="#programs">
                            Lihat Pilihan Program
                        </a>
                    </div>

                    <div class="grid grid-cols-3 gap-2 md:gap-4 max-w-md mx-auto md:mx-0">
                        <div class="bg-white p-3 rounded-xl border border-gray-100 shadow-sm text-center">
                            <span class="block text-lg font-black text-brand-orange">+10.000</span>
                            <span class="text-[10px] font-bold text-gray-500">Siswa Aktif</span>
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-gray-100 shadow-sm text-center">
                            <span class="block text-lg font-black text-brand-navy">40+ Cabang</span>
                            <span class="text-[10px] font-bold text-gray-500">& Online</span>
                        </div>
                        <div class="bg-white p-3 rounded-xl border border-gray-100 shadow-sm text-center">
                            <span class="block text-lg font-black text-brand-orange">UK & Jepang</span>
                            <span class="text-[10px] font-bold text-gray-500">Kurikulum</span>
                        </div>
                    </div>
                </div>

                <div class="flex-1 w-full relative z-20">
                    <img src="/codingkid.png" alt="Anak belajar coding dan HTML" class="w-full h-auto object-contain animate-float drop-shadow-2xl transition-transform duration-500 hover:scale-105" />
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

            <div class="flex flex-col md:flex-row items-center gap-12 md:gap-20">
                <div class="flex-1 w-full relative">
                    <div class="relative w-full max-w-md mx-auto">
                        <svg class="absolute inset-0 w-full h-full text-brand-orange -z-10 transform scale-110 translate-x-4 translate-y-4" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="currentColor" d="M42.7,-73.4C55.9,-67.1,67.1,-56.1,75.4,-42.9C83.7,-29.7,89.1,-14.8,87.3,-0.9C85.5,12.9,76.5,25.9,66.8,36.7C57.1,47.5,46.6,56.1,34.7,63.4C22.7,70.7,9.3,76.7,-4.8,84.9C-18.9,93,-33.8,103.3,-46.3,98.9C-58.7,94.6,-68.8,75.6,-76.1,57.8C-83.4,40,-87.9,23.5,-85.4,7.8C-82.9,-7.9,-73.4,-22.8,-62.8,-34.9C-52.2,-47,-40.6,-56.3,-27.9,-63C-15.3,-69.7,-1.6,-73.8,13.1,-75.5C27.8,-77.3,42.7,-79.7,42.7,-73.4Z" transform="translate(100 100)" />
                        </svg>
                        <div class="relative rounded-[40px] overflow-hidden shadow-2xl border-4 border-white">
                            <img src="/kid3.jpg" alt="Anak belajar coding" class="w-full h-auto object-cover aspect-[4/5] md:aspect-square hover:scale-105 transition-transform duration-500" />
                        </div>
                    </div>
                </div>

                <div class="flex-1 w-full">
                    <div class="space-y-8">
                        <div class="flex items-start gap-4 group">
                            <div class="mt-1 flex-shrink-0 w-8 h-8 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center font-bold text-xl transition-transform group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white">✓</div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-black text-brand-navy mb-2 group-hover:text-brand-green transition-colors">From Player to Developer</h3>
                                <p class="text-gray-500 font-medium leading-relaxed">Ubah kebiasaan main game menjadi skill produktif. Anak tidak hanya mengonsumsi teknologi, tapi menciptakannya.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div class="mt-1 flex-shrink-0 w-8 h-8 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center font-bold text-xl transition-transform group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white">✓</div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-black text-brand-navy mb-2 group-hover:text-brand-green transition-colors">21st Century Skill</h3>
                                <p class="text-gray-500 font-medium leading-relaxed">Melatih logika berpikir kritis, problem solving, dan kreativitas yang sangat dibutuhkan di masa depan.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 group">
                            <div class="mt-1 flex-shrink-0 w-8 h-8 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center font-bold text-xl transition-transform group-hover:scale-110 group-hover:bg-brand-green group-hover:text-white">✓</div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-black text-brand-navy mb-2 group-hover:text-brand-green transition-colors">Every Profession needs IT Skills</h3>
                                <p class="text-gray-500 font-medium leading-relaxed">Dari dokter hingga desainer, semua profesi kini butuh literasi digital. Bekali anak dengan fondasi yang kuat.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-10">
                        <a href="#trial" class="inline-flex items-center gap-2 bg-brand-navy hover:bg-brand-navyDark text-white font-bold py-3 px-6 rounded-full transition-all shadow-lg active:scale-95">
                            Mulai Belajar Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                    </div>
                </div>
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

        <!-- ================= SECTION 7: FINAL CTA & FOOTER (RakitAI.id Style) ================= -->
    <section class="relative w-full bg-brand-orange pt-20 pb-10 overflow-hidden text-white">
        
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

</body>
</html>