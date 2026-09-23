<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Internship | CV Access Media</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sage: '#B7D9C2',
                        mint: '#E4F2E8',
                        greenmain: '#76A987',
                        darkgreen: '#4F795D',
                        lavender: '#D9CBEF',
                        purple: '#9A82C2',
                        darkpurple: '#705596',
                        cream: '#FAFAF8',
                    },
                    animation: {
                        float: 'float 7s ease-in-out infinite',
                        floatSlow: 'floatSlow 10s ease-in-out infinite',
                        pulseSoft: 'pulseSoft 5s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-14px)' },
                        },
                        floatSlow: {
                            '0%, 100%': { transform: 'translate(0, 0)' },
                            '50%': { transform: 'translate(12px, -16px)' },
                        },
                        pulseSoft: {
                            '0%, 100%': { opacity: '0.45', transform: 'scale(1)' },
                            '50%': { opacity: '0.75', transform: 'scale(1.06)' },
                        },
                    }
                }
            }
        }
    </script>
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* PATTERN BACKGROUNDS */
        .dot-pattern {
            background-image: radial-gradient(rgba(112, 85, 150, 0.13) 1.2px, transparent 1.2px);
            background-size: 20px 20px;
        }
        .grid-pattern {
            background-image: linear-gradient(rgba(118, 169, 135, 0.10) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(154, 130, 194, 0.10) 1px, transparent 1px);
            background-size: 34px 34px;
        }
        .square-pattern {
            background-image: linear-gradient(90deg, rgba(112, 85, 150, 0.08) 1px, transparent 1px),
                              linear-gradient(rgba(118, 169, 135, 0.08) 1px, transparent 1px);
            background-size: 26px 26px;
        }
        .brand-gradient {
            background: linear-gradient(90deg, #4F795D, #705596);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
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
<body class="bg-cream text-slate-700">

    <!-- NAVBAR -->
    <header class="fixed left-0 right-0 top-0 z-50">
        <nav class="mx-auto mt-4 max-w-6xl px-4">
            <div class="relative flex items-center justify-between rounded-2xl border border-white/80 bg-white/90 px-5 py-3 shadow-sm backdrop-blur-md">
                <!-- LOGO -->
                <a href="#beranda" class="flex items-center gap-3">
                    <div class="flex h-10 w-10 items-center justify-center">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Access Media" class="h-10 w-10 object-contain">
                    </div>
                    <div>
                        <h1 class="text-sm font-extrabold text-slate-800 sm:text-base">Access Internship</h1>
                        <p class="text-[10px] text-slate-400 sm:text-xs">CV Access Media</p>
                    </div>
                </a>

                <!-- DESKTOP NAV -->
                <div class="hidden items-center gap-5 text-sm font-semibold lg:flex">
                    <a href="#beranda" data-section="beranda" data-translate="nav-beranda" class="nav-link relative py-2 text-darkpurple">
                        Beranda
                        <span class="nav-line absolute bottom-0 left-0 right-0 h-[2px] rounded-full bg-darkpurple"></span>
                    </a>
                    <a href="#tentang" data-section="tentang" data-translate="nav-tentang" class="nav-link relative py-2 text-slate-600 transition hover:text-darkpurple">
                        Tentang
                        <span class="nav-line absolute bottom-0 left-0 right-0 hidden h-[2px] rounded-full bg-darkpurple"></span>
                    </a>
                    <a href="#arsip" data-section="arsip" data-translate="nav-arsip" class="nav-link relative py-2 text-slate-600 transition hover:text-darkpurple">
                        Arsip Project
                        <span class="nav-line absolute bottom-0 left-0 right-0 hidden h-[2px] rounded-full bg-darkpurple"></span>
                    </a>
                    <a href="#kegiatan" data-section="kegiatan" data-translate="nav-kegiatan" class="nav-link relative py-2 text-slate-600 transition hover:text-darkpurple">
                        Kegiatan
                        <span class="nav-line absolute bottom-0 left-0 right-0 hidden h-[2px] rounded-full bg-darkpurple"></span>
                    </a>
                    <a href="#instansi" data-section="instansi" data-translate="nav-instansi" class="nav-link relative py-2 text-slate-600 transition hover:text-darkpurple">
                        Instansi
                        <span class="nav-line absolute bottom-0 left-0 right-0 hidden h-[2px] rounded-full bg-darkpurple"></span>
                    </a>
                </div>

                <!-- MOBILE BUTTON -->
                <button id="menuButton" type="button" aria-label="Buka menu" aria-expanded="false" class="flex h-10 w-10 items-center justify-center rounded-xl bg-lavender text-darkpurple lg:hidden">
                    <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- MOBILE MENU -->
                <div id="mobileMenu" class="absolute right-0 top-[calc(100%+10px)] hidden w-[235px] rounded-2xl border border-slate-100 bg-white p-3 shadow-xl lg:hidden">
                    <div class="flex flex-col">
                        <a href="#beranda" data-section="beranda" data-translate="nav-beranda" class="mobile-nav-link relative py-3 text-sm font-semibold text-darkpurple">
                            Beranda
                            <span class="mobile-line absolute bottom-1 left-0 right-0 h-[2px] rounded-full bg-darkpurple"></span>
                        </a>
                        <a href="#tentang" data-section="tentang" data-translate="nav-tentang" class="mobile-nav-link relative py-3 text-sm font-semibold text-slate-600">
                            Tentang
                            <span class="mobile-line absolute bottom-1 left-0 right-0 hidden h-[2px] rounded-full bg-darkpurple"></span>
                        </a>
                        <a href="#arsip" data-section="arsip" data-translate="nav-arsip" class="mobile-nav-link relative py-3 text-sm font-semibold text-slate-600">
                            Arsip Project
                            <span class="mobile-line absolute bottom-1 left-0 right-0 hidden h-[2px] rounded-full bg-darkpurple"></span>
                        </a>
                        <a href="#kegiatan" data-section="kegiatan" data-translate="nav-kegiatan" class="mobile-nav-link relative py-3 text-sm font-semibold text-slate-600">
                            Kegiatan
                            <span class="mobile-line absolute bottom-1 left-0 right-0 hidden h-[2px] rounded-full bg-darkpurple"></span>
                        </a>
                        <a href="#instansi" data-section="instansi" data-translate="nav-instansi" class="mobile-nav-link relative py-3 text-sm font-semibold text-slate-600">
                            Instansi
                            <span class="mobile-line absolute bottom-1 left-0 right-0 hidden h-[2px] rounded-full bg-darkpurple"></span>
                        </a>
                        
                        <div class="my-2 border-t border-slate-100"></div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- HERO -->
        <section id="beranda" class="relative flex min-h-screen items-center overflow-hidden bg-cream pt-20">
            <div class="dot-pattern absolute inset-0 opacity-60"></div>
            <div class="absolute -left-20 top-32 h-56 w-56 rounded-full bg-sage/45 blur-sm"></div>
            <div class="absolute right-[8%] top-28 h-32 w-32 animate-float rounded-full bg-lavender/60"></div>
            <div class="absolute bottom-10 left-[42%] h-16 w-16 animate-floatSlow rounded-full border-2 border-purple/30"></div>
            <div class="absolute right-[5%] top-[45%] hidden h-28 w-28 rotate-12 rounded-3xl border-2 border-greenmain/20 lg:block"></div>
            <div class="absolute bottom-16 right-[20%] hidden h-12 w-12 -rotate-12 rounded-xl border border-darkpurple/20 lg:block"></div>

            <div class="relative z-10 mx-auto grid max-w-6xl items-center gap-10 px-6 py-10 lg:grid-cols-2">
                <!-- LEFT -->
                <div>
                    <div class="inline-flex items-center gap-2 rounded-full border border-sage bg-white px-4 py-2 text-xs font-bold uppercase tracking-widest text-darkgreen shadow-sm">
                        <span class="h-2 w-2 rounded-full bg-greenmain"></span>
                        <span data-translate="hero-badge">Program PKL & Magang</span>
                    </div>
                    <h2 class="mt-6 text-4xl font-extrabold leading-tight text-slate-800 sm:text-5xl">
                        <span data-translate="hero-title-1">Bangun Pengalaman,</span>
                        <span class="brand-gradient" data-translate="hero-title-2">Kembangkan Potensi.</span>
                    </h2>
                    <p class="mt-5 max-w-xl text-base leading-7 text-slate-500" data-translate="hero-desc">
                        Access Media membuka kesempatan bagi siswa dan mahasiswa untuk mendapatkan pengalaman kerja, mengembangkan keterampilan, dan terlibat langsung dalam berbagai kegiatan serta project.
                    </p>
                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#arsip" data-translate="hero-btn-1" class="rounded-xl bg-darkgreen px-5 py-3 text-sm font-bold text-white shadow-md shadow-greenmain/20 transition hover:-translate-y-0.5 hover:bg-greenmain">
                            Jelajahi Arsip Project 
                        </a>
                        <a href="#tentang" data-translate="hero-btn-2" class="rounded-xl border border-lavender bg-white px-5 py-3 text-sm font-bold text-darkpurple transition hover:bg-lavender/30">
                            Kenali Program
                        </a>
                    </div>
                    <!-- BRAND LINE -->
                    <div class="mt-8 flex items-center gap-3">
                        <div class="h-1 w-14 rounded-full bg-greenmain"></div>
                        <div class="h-1 w-8 rounded-full bg-purple"></div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="relative flex justify-center lg:justify-end">
                    <div class="absolute -left-6 top-12 z-20 hidden h-16 w-16 rotate-12 rounded-2xl border-2 border-greenmain/40 bg-white/60 backdrop-blur-sm lg:block"></div>
                    <div class="absolute -right-5 -top-8 z-20 h-20 w-20 animate-float rounded-full border-4 border-lavender bg-white/70 backdrop-blur-sm"></div>
                    <div class="absolute -bottom-6 -left-5 z-20 h-12 w-12 animate-floatSlow rounded-full bg-sage"></div>
                    <div class="relative w-full max-w-md rounded-[2rem] border-2 border-purple/40 bg-white p-3 shadow-xl">
                        <div class="overflow-hidden rounded-[1.6rem]">
                            <img src="{{ asset('assets/images/7.jpeg') }}" alt="Foto Peserta PKL" class="h-[420px] w-full object-cover transition duration-700 hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATISTICS -->
        <section class="relative overflow-hidden border-y border-sage/50 bg-white">
            <div class="square-pattern absolute inset-0 opacity-50"></div>
            <div class="relative z-10 mx-auto grid max-w-6xl grid-cols-2 sm:grid-cols-4">
                <div class="border-r border-sage/40 p-6 text-center">
                    <p class="text-3xl font-extrabold text-darkgreen">100+</p>
                    <p class="mt-1 text-xs font-medium text-slate-500" data-translate="stat-1">Peserta PKL & Magang</p>
                </div>
                <div class="border-b border-purple/20 p-6 text-center sm:border-b-0 sm:border-r">
                    <p class="text-3xl font-extrabold text-darkpurple">10+</p>
                    <p class="mt-1 text-xs font-medium text-slate-500" data-translate="stat-2">Instansi</p>
                </div>
                <div class="border-r border-sage/40 p-6 text-center">
                    <p class="text-3xl font-extrabold text-darkgreen">5+</p>
                    <p class="mt-1 text-xs font-medium text-slate-500" data-translate="stat-3">Tahun Program</p>
                </div>
                <div class="p-6 text-center">
                    <p class="text-3xl font-extrabold text-darkpurple">20+</p>
                    <p class="mt-1 text-xs font-medium text-slate-500" data-translate="stat-4">Kegiatan</p>
                </div>
            </div>
        </section>

        <!-- TENTANG -->
        <section id="tentang" class="relative overflow-hidden px-6 py-24">
            <div class="dot-pattern absolute right-0 top-0 h-64 w-64 opacity-40"></div>
            <div class="absolute -left-20 bottom-10 h-40 w-40 rounded-full bg-lavender/35"></div>

            <div class="relative z-10 mx-auto max-w-6xl">
                <!-- HEADER -->
                <div class="mx-auto max-w-3xl text-center">
                    <span class="inline-flex rounded-full bg-lavender px-4 py-2 text-xs font-bold uppercase tracking-widest text-darkpurple" data-translate="about-badge">
                        Tentang
                    </span>
                    <h2 class="mt-4 text-3xl font-extrabold leading-tight text-slate-800 sm:text-4xl">
                        <span data-translate="about-title-1">Ruang untuk</span> <span class="text-darkpurple" data-translate="about-title-2">belajar dan berkembang.</span>
                    </h2>
                    <p class="mt-4 leading-7 text-slate-500" data-translate="about-desc">
                        Program PKL dan magang di Access Media memberikan kesempatan bagi peserta untuk mengenal lingkungan kerja sekaligus mengembangkan kemampuan melalui kegiatan dan project.
                    </p>
                </div>

                <!-- CONTENT -->
                <div class="mt-12 grid items-start gap-8 lg:grid-cols-[0.85fr_1.15fr]">
                    <!-- TOOLS -->
                    <div class="relative overflow-hidden rounded-3xl border border-sage/60 bg-white p-7 shadow-sm">
                        <div class="dot-pattern absolute right-0 top-0 h-24 w-24 opacity-50"></div>
                        <div class="relative flex items-center gap-3">
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-mint text-xl text-greenmain">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-800" data-translate="tools-title">Tools & Teknologi</h3>
                                <p class="text-xs text-slate-400" data-translate="tools-subtitle">Yang digunakan dalam proses belajar</p>
                            </div>
                        </div>

                        <div class="relative mt-6 grid grid-cols-2 gap-3">
                            <div class="rounded-xl bg-mint px-4 py-3 text-sm font-semibold text-darkgreen">✓ HTML</div>
                            <div class="rounded-xl bg-lavender px-4 py-3 text-sm font-semibold text-darkpurple">✓ Laravel</div>
                            <div class="rounded-xl bg-mint px-4 py-3 text-sm font-semibold text-darkgreen">✓ CSS</div>
                            <div class="rounded-xl bg-lavender px-4 py-3 text-sm font-semibold text-darkpurple">✓ PHP</div>
                            <div class="rounded-xl bg-mint px-4 py-3 text-sm font-semibold text-darkgreen">✓ JavaScript</div>
                            <div class="rounded-xl bg-lavender px-4 py-3 text-sm font-semibold text-darkpurple">✓ MySQL</div>
                            <div class="rounded-xl bg-mint px-4 py-3 text-sm font-semibold text-darkgreen">✓ VS Code</div>
                            <div class="rounded-xl bg-lavender px-4 py-3 text-sm font-semibold text-darkpurple">✓ Figma</div>
                            <div class="rounded-xl bg-mint px-4 py-3 text-sm font-semibold text-darkgreen">✓ Canva</div>
                            <div class="rounded-xl bg-lavender px-4 py-3 text-sm font-semibold text-darkpurple">✓ GitHub</div>
                        </div>
                    </div>

                    <!-- BENEFITS -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- CARD 1 -->
                        <div class="group relative overflow-hidden rounded-2xl border border-sage/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                            <div class="absolute left-0 top-0 h-1 w-full bg-greenmain"></div>
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-mint text-xl text-greenmain">
                                <i class="bi bi-briefcase-fill"></i>
                            </div>
                            <h3 class="mt-4 font-bold text-slate-800" data-translate="benefit-1-title">Pengalaman Kerja</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="benefit-1-desc">Mengenal suasana dan proses kerja secara langsung.</p>
                        </div>
                        <!-- CARD 2 -->
                        <div class="group relative overflow-hidden rounded-2xl border border-lavender/70 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                            <div class="absolute left-0 top-0 h-1 w-full bg-purple"></div>
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-lavender text-xl text-purple">
                                <i class="bi bi-person-workspace"></i>
                            </div>
                            <h3 class="mt-4 font-bold text-slate-800" data-translate="benefit-2-title">Bimbingan</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="benefit-2-desc">Mendapat arahan dan bimbingan langsung dari pimpinan Access Media.</p>
                        </div>
                        <!-- CARD 3 -->
                        <div class="group relative overflow-hidden rounded-2xl border border-lavender/70 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                            <div class="absolute left-0 top-0 h-1 w-full bg-purple"></div>
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-lavender text-xl text-purple">
                                <i class="bi bi-rocket-takeoff-fill"></i>
                            </div>
                            <h3 class="mt-4 font-bold text-slate-800" data-translate="benefit-3-title">Pengembangan Skill</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="benefit-3-desc">Mengasah kemampuan teknis maupun soft skill.</p>
                        </div>
                        <!-- CARD 4 -->
                        <div class="group relative overflow-hidden rounded-2xl border border-sage/50 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg">
                            <div class="absolute left-0 top-0 h-1 w-full bg-greenmain"></div>
                            <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-mint text-xl text-greenmain">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3 class="mt-4 font-bold text-slate-800" data-translate="benefit-4-title">Kerja Sama</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="benefit-4-desc">Belajar berkomunikasi dan bekerja dalam tim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ARSIP PROJECT -->
        <section id="arsip" class="relative overflow-hidden bg-white px-6 py-24">
            <div class="grid-pattern absolute inset-0 opacity-50"></div>
            <div class="absolute -right-20 top-16 h-48 w-48 rounded-full bg-lavender/35"></div>
            <div class="absolute left-[45%] top-8 hidden h-10 w-10 rotate-45 rounded-lg border border-purple/20 lg:block"></div>

            <div class="relative z-10 mx-auto max-w-6xl">
                <!-- HEADER -->
                <div class="flex flex-col justify-between gap-5 lg:flex-row lg:items-end">
                    <div class="max-w-2xl">
                        <span class="inline-flex rounded-full bg-mint px-4 py-2 text-xs font-bold uppercase tracking-widest text-darkgreen" data-translate="project-badge">
                            Arsip Project
                        </span>
                        <h2 class="mt-4 text-3xl font-extrabold text-slate-800 sm:text-4xl">
                            <span data-translate="project-title-1">Karya yang pernah dibuat</span> <span class="text-darkpurple" data-translate="project-title-2">bersama Access Media.</span>
                        </h2>
                        <p class="mt-4 leading-7 text-slate-500" data-translate="project-desc">
                            Kumpulan project yang pernah dikerjakan oleh peserta PKL dan magang selama mengikuti kegiatan di CV Access Media.
                        </p>
                    </div>
                    <div class="hidden h-16 w-16 items-center justify-center rounded-2xl bg-lavender text-2xl text-darkpurple shadow-sm lg:flex">
                        ✦
                    </div>
                </div>

                <!-- PROJECT CARDS -->
                <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- PROJECT 1 -->
                    <div class="group overflow-hidden rounded-2xl border border-sage/50 bg-cream shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative h-44 overflow-hidden bg-mint">
                            <img src="{{ asset('assets/images/project1.png') }}" alt="Project 1" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            <div class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkgreen shadow-sm" data-translate="tag-website">Website</div>
                        </div>
                        <div class="p-5">
                            <div class="text-xs font-bold text-darkgreen">PROJECT 01</div>
                            <h3 class="mt-2 font-bold text-slate-800" data-translate="p1-title">Nihon Access</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="p1-desc">Project website yang dibuat sebagai media informasi dan profil perusahaan.</p>
                        </div>
                    </div>

                    <!-- PROJECT 2 -->
                    <div class="group overflow-hidden rounded-2xl border border-lavender/70 bg-cream shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative h-44 overflow-hidden bg-lavender">
                            <img src="{{ asset('assets/images/project2.png') }}" alt="Project 2" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            <div class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkpurple shadow-sm" data-translate="tag-sisinfo">Sistem Informasi</div>
                        </div>
                        <div class="p-5">
                            <div class="text-xs font-bold text-darkpurple">PROJECT 02</div>
                            <h3 class="mt-2 font-bold text-slate-800" data-translate="p2-title">Haadirin</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="p2-desc">Project aplikasi berbasis website untuk membantu pengelolaan informasi dan data sekolah.</p>
                        </div>
                    </div>

                    <!-- PROJECT 3 -->
                    <div class="group overflow-hidden rounded-2xl border border-sage/50 bg-cream shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative h-44 overflow-hidden bg-mint">
                            <img src="{{ asset('assets/images/project3.png') }}" alt="Project 3" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            <div class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkgreen shadow-sm">UI/UX</div>
                        </div>
                        <div class="p-5">
                            <div class="text-xs font-bold text-darkgreen">PROJECT 03</div>
                            <h3 class="mt-2 font-bold text-slate-800" data-translate="p3-title">Access Internship</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="p3-desc">Perancangan antarmuka dan pengalaman pengguna untuk kebutuhan aplikasi berbasis digital.</p>
                        </div>
                    </div>

                    <!-- PROJECT TAMBAHAN -->
                    <div id="moreProjects" class="hidden contents">
                        <!-- PROJECT 4 -->
                        <div class="group overflow-hidden rounded-2xl border border-lavender/70 bg-cream shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="relative h-44 overflow-hidden bg-lavender">
                                <img src="{{ asset('assets/images/project4.png') }}" alt="Project 4" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <div class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkpurple shadow-sm" data-translate="tag-website">Website</div>
                            </div>
                            <div class="p-5">
                                <div class="text-xs font-bold text-darkpurple">PROJECT 04</div>
                                <h3 class="mt-2 font-bold text-slate-800" data-translate="p4-title">Web Panduan PetERP</h3>
                                <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="p4-desc">Project website yang dikembangkan selama kegiatan PKL.</p>
                            </div>
                        </div>

                        <!-- PROJECT 5 -->
                        <div class="group overflow-hidden rounded-2xl border border-sage/50 bg-cream shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="relative h-44 overflow-hidden bg-mint">
                                <img src="{{ asset('assets/images/project5.png') }}" alt="Project 5" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <div class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkgreen shadow-sm" data-translate="tag-app">Aplikasi</div>
                            </div>
                            <div class="p-5">
                                <div class="text-xs font-bold text-darkgreen">PROJECT 05</div>
                                <h3 class="mt-2 font-bold text-slate-800" data-translate="p5-title">Nalar</h3>
                                <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="p5-desc">Pengembangan aplikasi berbasis web untuk mendukung kebutuhan pengguna.</p>
                            </div>
                        </div>

                        <!-- PROJECT 6 -->
                        <div class="group overflow-hidden rounded-2xl border border-sage/50 bg-cream shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="relative h-44 overflow-hidden bg-mint">
                                <img src="{{ asset('assets/images/project6.png') }}" alt="Project 6" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <div class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkpurple shadow-sm" data-translate="tag-website">Website</div>
                            </div>
                            <div class="p-5">
                                <div class="text-xs font-bold text-darkgreen">PROJECT 06</div>
                                <h3 class="mt-2 font-bold text-slate-800" data-translate="p6-title">Karoto</h3>
                                <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="p6-desc">Pengembangan website untuk perusahaan dengan desain modern dan responsif.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- BUTTON LIHAT SEMUA PROJECT -->
                <div class="mt-8 text-center">
                    <button id="showProjectsBtn" type="button" class="inline-flex items-center gap-2 rounded-xl border border-lavender bg-white px-5 py-3 text-sm font-bold text-darkpurple transition hover:bg-lavender/30">
                        <span id="showProjectsText" data-translate="btn-all-projects">Lihat semua project</span>
                        <svg id="showProjectsIcon" class="h-4 w-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- KEGIATAN -->
        <section id="kegiatan" class="relative overflow-hidden bg-mint/50 px-6 py-24">
            <div class="absolute -left-10 top-20 h-32 w-32 rounded-full border-2 border-greenmain/20"></div>
            <div class="absolute right-10 top-12 h-20 w-20 rounded-full bg-lavender/50"></div>
            <div class="absolute bottom-10 right-[30%] h-10 w-10 rotate-45 rounded-lg border border-purple/20"></div>

            <div class="relative z-10 mx-auto max-w-6xl">
                <!-- HEADER -->
                <div class="mx-auto max-w-3xl text-center">
                    <span class="inline-flex rounded-full bg-white px-4 py-2 text-xs font-bold uppercase tracking-widest text-darkgreen shadow-sm" data-translate="activity-badge">
                        Kegiatan PKL dan Magang
                    </span>
                    <h2 class="mt-4 text-3xl font-extrabold text-slate-800 sm:text-4xl"><span data-translate="activity-title-1">Kira-kira PKL/Magang</span>
                        <span class="text-darkpurple" data-translate="activity-title-2">ngapain aja, ya?</span>
                    </h2>
                    <p class="mt-4 leading-7 text-slate-500" data-translate="activity-desc">
                        Berbagai kegiatan yang dilakukan peserta selama menjalani PKL maupun magang di lingkungan Access Media.
                    </p>
                </div>

                <!-- CARDS -->
                <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <!-- 01 -->
                    <div class="group rounded-2xl border border-white bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative h-40 overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/images/kegiatan1.jpeg') }}" alt="Pengenalan Lingkungan Kerja" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            <span class="absolute left-3 top-3 rounded-lg bg-mint px-3 py-1 text-xs font-extrabold text-darkgreen">01</span>
                        </div>
                        <h3 class="mt-5 font-bold text-slate-800" data-translate="act-1-title">Pengenalan Lingkungan Kerja</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="act-1-desc">Mengenal lingkungan kerja, aturan, alur kegiatan, serta pembagian tugas selama PKL.</p>
                    </div>

                    <!-- 02 -->
                    <div class="group rounded-2xl border border-white bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative h-40 overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/images/kegiatan2.jpeg') }}" alt="Pengembangan Website" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            <span class="absolute left-3 top-3 rounded-lg bg-lavender px-3 py-1 text-xs font-extrabold text-darkpurple">02</span>
                        </div>
                        <h3 class="mt-5 font-bold text-slate-800" data-translate="act-2-title">Pengembangan Website</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="act-2-desc">Mengerjakan project website dan belajar proses pengembangan aplikasi secara bertahap.</p>
                    </div>

                    <!-- 03 -->
                    <div class="group rounded-2xl border border-white bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative h-40 overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/images/kegiatan3.jpeg') }}" alt="Desain UI/UX" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            <span class="absolute left-3 top-3 rounded-lg bg-lavender px-3 py-1 text-xs font-extrabold text-darkpurple">03</span>
                        </div>
                        <h3 class="mt-5 font-bold text-slate-800" data-translate="act-3-title">Desain UI/UX</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="act-3-desc">Membuat rancangan tampilan website yang menarik, rapi, dan mudah digunakan.</p>
                    </div>

                    <!-- 04 -->
                    <div class="group rounded-2xl border border-white bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <div class="relative h-40 overflow-hidden rounded-xl">
                            <img src="{{ asset('assets/images/kegiatan4.jpeg') }}" alt="Database & Backend" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                            <span class="absolute left-3 top-3 rounded-lg bg-mint px-3 py-1 text-xs font-extrabold text-darkgreen">04</span>
                        </div>
                        <h3 class="mt-5 font-bold text-slate-800" data-translate="act-4-title">Database & Backend</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="act-4-desc">Mengenal database, pengelolaan data, serta proses backend dalam sebuah aplikasi.</p>
                    </div>

                    <!-- DOKUMENTASI TAMBAHAN -->
                    <div id="moreDokumentasi" class="hidden contents">
                        <!-- 05 -->
                        <div class="group rounded-2xl border border-white bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="relative h-40 overflow-hidden rounded-xl">
                                <img src="{{ asset('assets/images/kegiatan5.jpeg') }}" alt="Testing Website" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <span class="absolute left-3 top-3 rounded-lg bg-mint px-3 py-1 text-xs font-extrabold text-darkgreen">05</span>
                            </div>
                            <h3 class="mt-5 font-bold text-slate-800" data-translate="act-5-title">Testing Website</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="act-5-desc">Melakukan pengecekan dan pengujian fitur agar website dapat berjalan dengan baik.</p>
                        </div>

                        <!-- 06 -->
                        <div class="group rounded-2xl border border-white bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="relative h-40 overflow-hidden rounded-xl">
                                <img src="{{ asset('assets/images/kegiatan6.jpeg') }}" alt="Dokumentasi Project" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <span class="absolute left-3 top-3 rounded-lg bg-lavender px-3 py-1 text-xs font-extrabold text-darkpurple">06</span>
                            </div>
                            <h3 class="mt-5 font-bold text-slate-800" data-translate="act-6-title">Dokumentasi Project</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="act-6-desc">Mendokumentasikan proses pengerjaan project selama kegiatan PKL.</p>
                        </div>

                        <!-- 07 -->
                        <div class="group rounded-2xl border border-white bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="relative h-40 overflow-hidden rounded-xl">
                                <img src="{{ asset('assets/images/kegiatan7.jpeg') }}" alt="Presentasi Project" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <span class="absolute left-3 top-3 rounded-lg bg-lavender px-3 py-1 text-xs font-extrabold text-darkpurple">07</span>
                            </div>
                            <h3 class="mt-5 font-bold text-slate-800" data-translate="act-7-title">Presentasi Project</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="act-7-desc">Menyampaikan hasil project dan menjelaskan proses pengerjaan yang telah dilakukan.</p>
                        </div>

                        <!-- 08 -->
                        <div class="group rounded-2xl border border-white bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-2 hover:shadow-xl">
                            <div class="relative h-40 overflow-hidden rounded-xl">
                                <img src="{{ asset('assets/images/kegiatan8.jpeg') }}" alt="Evaluasi Kegiatan PKL" class="h-full w-full object-cover transition duration-500 group-hover:scale-105">
                                <span class="absolute left-3 top-3 rounded-lg bg-mint px-3 py-1 text-xs font-extrabold text-darkgreen">08</span>
                            </div>
                            <h3 class="mt-5 font-bold text-slate-800" data-translate="act-8-title">Evaluasi Kegiatan PKL</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-500" data-translate="act-8-desc">Melakukan evaluasi terhadap kegiatan dan hasil pembelajaran selama PKL.</p>
                        </div>
                    </div>
                </div>

                <!-- BUTTON -->
                <div class="mt-8 text-center">
                    <button id="showDokumentasiBtn" type="button" class="inline-flex items-center gap-2 rounded-xl bg-white px-5 py-3 text-sm font-bold text-darkpurple shadow-sm ring-1 ring-lavender transition hover:bg-lavender/20">
                        <span id="showDokumentasiText" data-translate="btn-all-doc">Lihat Semua Dokumentasi</span>
                        <svg id="showDokumentasiIcon" class="h-4 w-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6" />
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <!-- INSTANSI -->
        <section id="instansi" class="relative overflow-hidden bg-white py-20">
            <!-- DECORATION -->
            <div class="square-pattern absolute right-0 top-0 h-72 w-72 opacity-40"></div>
            <div class="absolute -left-12 bottom-8 h-32 w-32 rounded-full border-2 border-lavender/50"></div>

            <div class="relative z-10 mx-auto max-w-7xl px-6 lg:px-10">
                <!-- HEADER -->
                <div class="mb-10 max-w-3xl">
                    <span class="inline-flex rounded-full bg-lavender px-4 py-2 text-xs font-bold uppercase tracking-widest text-darkpurple" data-translate="instansi-badge">
                        Instansi
                    </span>

                    <h2 class="mt-4 text-4xl font-extrabold leading-tight text-slate-800">
                        <span data-translate="instansi-title-1">
                            Instansi yang telah
                        </span>
                        <span class="brand-gradient" data-translate="instansi-title-2">
                            bekerja sama.
                        </span>
                    </h2>

                    <p class="mt-5 text-base leading-8 text-slate-500" data-translate="instansi-desc">
                        Access Media menjadi tempat belajar dan berkembang bagi peserta dari berbagai sekolah maupun perguruan tinggi.
                    </p>
                </div>

                <!-- CAROUSEL --> 
<div class="relative"> 
    <!-- TRACK --> 
    <div class="overflow-hidden px-2"> 
        <div id="instansiTrack" class="flex gap-6 transition-transform duration-500 ease-out"> 

            <!-- CARD 1 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-sage/60 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-mint"> 
                            <img src="{{ asset('assets/images/smkn 1 banjar.png') }}"
                                 alt="Logo SMKN 1 Banjar"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">SMKN 1 Banjar</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="school-type">Sekolah</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 2 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-lavender/70 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-lavender"> 
                            <img src="{{ asset('assets/images/smkn 3 banjar.png') }}"
                                 alt="Logo SMKN 3 Banjar"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">SMKN 3 Banjar</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="school-type">Sekolah</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 3 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-sage/60 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-mint"> 
                            <img src="{{ asset('assets/images/smkn 1 kawali.png') }}"
                                 alt="Logo SMKN 1 Kawali"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">SMKN 1 Kawali</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="school-type">Sekolah</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 4 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-lavender/70 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-lavender"> 
                            <img src="{{ asset('assets/images/smkn al-khoeriyah.png') }}"
                                 alt="Logo SMKN Al-Khoeriyah"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">SMKN Al-Khoeriyah</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="school-type">Sekolah</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 5 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-sage/60 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-mint"> 
                            <img src="{{ asset('assets/images/smkn 1 cipatujah.png') }}"
                                 alt="Logo SMKN 1 Cipatujah"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">SMKN 1 Cipatujah</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="school-type">Sekolah</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 6 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-lavender/70 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-lavender"> 
                            <img src="{{ asset('assets/images/smkn 2 tasikmalaya.png') }}"
                                 alt="Logo SMKN 2 Tasikmalaya"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">SMKN 2 Tasikmalaya</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="school-type">Sekolah</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 7 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-sage/60 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-mint"> 
                            <img src="{{ asset('assets/images/smkn 4 tasikmalaya.png') }}"
                                 alt="Logo SMKN 4 Tasikmalaya"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">SMKN 4 Tasikmalaya</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="school-type">Sekolah</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 8 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-lavender/70 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-lavender"> 
                            <img src="{{ asset('assets/images/smkn manonjaya.png') }}"
                                 alt="Logo SMKN Manonjaya"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">SMKN Manonjaya</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="school-type">Sekolah</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 9 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-sage/60 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-mint"> 
                            <img src="{{ asset('assets/images/Logo_LP3I.png') }}"
                                 alt="Logo LP3I"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">LP3I</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="uni-type">Perguruan Tinggi</p> 
                    </div> 
                </div> 
            </div> 

            <!-- CARD 10 --> 
            <div class="instansi-card w-full shrink-0 md:w-[calc((100%-1.5rem)/2)] lg:w-[calc((100%-4.5rem)/4)]"> 
                <div class="min-h-[245px] rounded-2xl border border-lavender/70 bg-white p-7 shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"> 
                    <div class="flex h-full flex-col items-center text-center"> 
                        <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-lavender"> 
                            <img src="{{ asset('assets/images/unper.png') }}"
                                 alt="Logo UNPER Tasikmalaya"
                                 class="h-14 w-14 object-contain">
                        </div> 
                        <h3 class="text-xl font-bold text-slate-800">UNPER Tasikmalaya</h3> 
                        <p class="mt-2 text-sm text-slate-500" data-translate="uni-type">Perguruan Tinggi</p> 
                    </div> 
                </div> 
            </div> 

        </div> 
    </div> 
</div>
            </div>
        </section>

        <!-- CTA -->
        <section id="kontak" class="relative overflow-hidden px-6 py-24">
            <div class="absolute left-[8%] top-10 h-36 w-36 rounded-full bg-sage/50"></div>
            <div class="absolute right-[8%] bottom-8 h-48 w-48 rounded-full bg-lavender/60"></div>
            <div class="absolute left-[25%] bottom-10 h-10 w-10 rounded-full border-2 border-purple/30"></div>
            <div class="absolute right-[30%] top-8 h-12 w-12 rotate-45 rounded-lg border-2 border-greenmain/25"></div>

            <div class="relative mx-auto max-w-6xl overflow-hidden rounded-[2rem] border border-white bg-gradient-to-r from-mint to-lavender p-1 shadow-xl">
                <div class="relative overflow-hidden rounded-[1.85rem] bg-white px-8 py-12 text-center sm:px-12">
                    <div class="dot-pattern absolute inset-0 opacity-40"></div>
                    <div class="absolute -left-16 -top-16 h-40 w-40 rounded-full bg-sage/50"></div>
                    <div class="absolute -bottom-16 -right-16 h-40 w-40 rounded-full bg-lavender/60"></div>

                    <div class="relative z-10 mx-auto max-w-3xl">
                        <span class="inline-flex rounded-full bg-mint px-4 py-2 text-xs font-bold uppercase tracking-widest text-darkgreen" data-translate="cta-badge">
                            Mulai Langkahmu
                        </span>
                        <h2 class="mt-4 text-3xl font-extrabold text-slate-800 sm:text-4xl">
                            <span data-translate="cta-title-1">Siap mendapatkan pengalaman</span> <span class="brand-gradient" data-translate="cta-title-2">di dunia kerja?</span>
                        </h2>
                        <p class="mx-auto mt-4 max-w-2xl leading-7 text-slate-500" data-translate="cta-desc">
                            Kenali lebih jauh kegiatan, project, dan pengalaman peserta PKL maupun magang di Access Media.
                        </p>
                        <div class="mt-7 flex justify-center">
                            <a href="https://wa.me/6285220419992" target="_blank" data-translate="cta-btn" class="rounded-xl bg-darkpurple px-6 py-3 text-sm font-bold text-white shadow-md shadow-purple/20 transition hover:-translate-y-0.5 hover:bg-purple">
                                Hubungi Kami
                            </a>
                        </div>
                        <div class="mt-8 flex items-center justify-center gap-2">
                            <span class="h-1 w-10 rounded-full bg-greenmain"></span>
                            <span class="h-1 w-16 rounded-full bg-purple"></span>
                            <span class="h-1 w-10 rounded-full bg-greenmain"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="border-t border-slate-100 bg-white">
        <div class="mx-auto max-w-6xl px-6 py-10">
            <div class="grid gap-8 md:grid-cols-2">
                <!-- BRAND -->
                <div>
                    <div class="flex items-center gap-3">
                        <div class="flex h-10 w-10 items-center justify-center">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo Access Media" class="h-10 w-10 object-contain">
                        </div>
                        <div>
                            <h3 class="font-extrabold text-slate-800">Access Internship</h3>
                            <p class="text-xs text-slate-400">CV Access Media</p>
                        </div>
                    </div>
                    <p class="mt-4 max-w-md text-sm leading-6 text-slate-500" data-translate="footer-desc">
                        Portal informasi PKL dan magang bagi siswa serta mahasiswa. Access Media juga menyediakan les private sebagai layanan pembelajaran tambahan.
                    </p>
                </div>  

                <!-- Hubungi Access Media -->
                <div>
                    <h3 class="text-xl font-bold text-slate-900 mb-5" data-translate="footer-contact-title">Hubungi Access Media</h3>
                    <div class="grid grid-cols-2 gap-x-8 gap-y-3">
                        <!-- WhatsApp -->
                        <a href="https://wa.me/6285220419992" target="_blank" class="group flex items-center gap-2.5 py-1.5">
                            <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center shrink-0 group-hover:bg-green-100 transition">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21l1.6-3.7A9 9 0 1112 21a9 9 0 01-9-9"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9c.3 2 2.5 4.2 4.5 4.5l1.5-1.5 2 1"/>
                                </svg>
                            </div>
                            <span class="text-base text-slate-500 group-hover:text-green-600 transition">whatsapp</span>
                        </a>

                        <!-- Website -->
                        <a href="https://www.accessmedia.co.id/" target="_blank" class="group flex items-center gap-2.5 py-1.5">
                            <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center shrink-0 group-hover:bg-blue-100 transition">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <circle cx="12" cy="12" r="9" stroke-width="2"/>
                                    <path stroke-linecap="round" stroke-width="2" d="M3 12h18M12 3c2.5 2.7 3.5 5.7 3.5 9s-1 6.3-3.5 9c-2.5-2.7-3.5-5.7-3.5-9S9.5 5.7 12 3z"/>
                                </svg>
                            </div>
                            <span class="text-base text-slate-500 group-hover:text-blue-600 transition">accessmedia.co.id</span>
                        </a>

                        <!-- Instagram -->
                        <a href="https://www.instagram.com/acm.pkl/" target="_blank" class="group flex items-center gap-2.5 py-1.5">
                            <div class="w-8 h-8 rounded-lg bg-pink-50 flex items-center justify-center shrink-0 group-hover:bg-pink-100 transition">
                                <svg class="w-4 h-4 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="3" y="3" width="18" height="18" rx="5" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="4" stroke-width="2"/>
                                    <circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
                                </svg>
                            </div>
                            <span class="text-base text-slate-500 group-hover:text-pink-600 transition">acm.pkl</span>
                        </a>

                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@accessmedia3331" target="_blank" class="group flex items-center gap-2.5 py-1.5">
                            <div class="w-8 h-8 rounded-lg bg-red-50 flex items-center justify-center shrink-0 group-hover:bg-red-100 transition">
                                <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.5 6.2a3 3 0 00-2.1-2.1C19.5 3.5 12 3.5 12 3.5s-7.5 0-9.4.6A3 3 0 00.5 6.2 31 31 0 000 12a31 31 0 00.5 5.8 3 3 0 002.1 2.1c1.9.6 9.4.6 9.4.6s7.5 0 9.4-.6a3 3 0 002.1-2.1A31 31 0 0024 12a31 31 0 00-.5-5.8z"/>
                                    <path fill="white" d="M9.75 15.5l5.5-3.5-5.5-3.5v7z"/>
                                </svg>
                            </div>
                            <span class="text-base text-slate-500 group-hover:text-red-600 transition">Access Media</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-8 border-t border-slate-100 pt-6 text-center text-xs text-slate-400" data-translate="footer-rights">
                © 2026 CV Access Media. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // KAMUS BAHASA (TRANSLATION DICTIONARY)
        const translations = {
            id: {
                "nav-beranda": "Beranda",
                "nav-tentang": "Tentang",
                "nav-arsip": "Arsip Project",
                "nav-kegiatan": "Kegiatan",
                "nav-instansi": "Instansi",
                "btn-kontak": "Kontak",
                "hero-badge": "Program PKL & Magang",
                "hero-title-1": "Bangun Pengalaman,",
                "hero-title-2": "Kembangkan Potensi.",
                "hero-desc": "Access Media membuka kesempatan bagi siswa dan mahasiswa untuk mendapatkan pengalaman kerja, mengembangkan keterampilan, dan terlibat langsung dalam berbagai kegiatan serta project.",
                "hero-btn-1": "Jelajahi Arsip Project",
                "hero-btn-2": "Kenali Program",
                "stat-1": "Peserta PKL & Magang",
                "stat-2": "Instansi",
                "stat-3": "Tahun Program",
                "stat-4": "Kegiatan",
                "about-badge": "Tentang",
                "about-title-1": "Ruang untuk",
                "about-title-2": "belajar dan berkembang.",
                "about-desc": "Program PKL dan magang di Access Media memberikan kesempatan bagi peserta untuk mengenal lingkungan kerja sekaligus mengembangkan kemampuan melalui kegiatan dan project.",
                "tools-title": "Tools & Teknologi",
                "tools-subtitle": "Yang digunakan dalam proses belajar",
                "benefit-1-title": "Pengalaman Kerja",
                "benefit-1-desc": "Mengenal suasana dan proses kerja secara langsung.",
                "benefit-2-title": "Bimbingan",
                "benefit-2-desc": "Mendapat arahan dan bimbingan langsung dari pimpinan Access Media.",
                "benefit-3-title": "Pengembangan Skill",
                "benefit-3-desc": "Mengasah kemampuan teknis maupun soft skill.",
                "benefit-4-title": "Kerja Sama",
                "benefit-4-desc": "Belajar berkomunikasi dan bekerja dalam tim.",
                "project-badge": "Arsip Project",
                "project-title-1": "Karya yang pernah dibuat",
                "project-title-2": "bersama Access Media.",
                "project-desc": "Kumpulan project yang pernah dikerjakan oleh peserta PKL dan magang selama mengikuti kegiatan di CV Access Media.",
                "tag-website": "Website",
                "tag-sisinfo": "Sistem Informasi",
                "tag-app": "Aplikasi",
                "p1-title": "Website Company Profile",
                "p1-desc": "Project website yang dibuat sebagai media informasi dan profil perusahaan.",
                "p2-title": "Sistem Informasi Sekolah",
                "p2-desc": "Project aplikasi berbasis website untuk membantu pengelolaan informasi dan data sekolah.",
                "p3-title": "Perancangan UI/UX Website",
                "p3-desc": "Perancangan antarmuka dan pengalaman pengguna untuk kebutuhan aplikasi berbasis digital.",
                "p4-title": "Project Website",
                "p4-desc": "Project website yang dikembangkan selama kegiatan PKL.",
                "p5-title": "Aplikasi Berbasis Web",
                "p5-desc": "Pengembangan aplikasi berbasis web untuk mendukung kebutuhan pengguna.",
                "btn-all-projects": "Lihat semua project",
                "activity-badge": "Kegiatan PKL dan Magang",
                "activity-title-1": "Selama PKL/Magang",
                "activity-title-2": "ngapain aja?",
                "activity-desc": "Berbagai kegiatan yang dilakukan peserta selama menjalani PKL maupun magang di lingkungan Access Media.",
                "act-1-title": "Pengenalan Lingkungan Kerja",
                "act-1-desc": "Mengenal lingkungan kerja, aturan, alur kegiatan, serta pembagian tugas selama PKL.",
                "act-2-title": "Pengembangan Website",
                "act-2-desc": "Mengerjakan project website dan belajar proses pengembangan aplikasi secara bertahap.",
                "act-3-title": "Desain UI/UX",
                "act-3-desc": "Membuat rancangan tampilan website yang menarik, rapi, dan mudah digunakan.",
                "act-4-title": "Database & Backend",
                "act-4-desc": "Mengenal database, pengelolaan data, serta proses backend dalam sebuah aplikasi.",
                "act-5-title": "Testing Website",
                "act-5-desc": "Melakukan pengecekan dan pengujian fitur agar website dapat berjalan dengan baik.",
                "act-6-title": "Dokumentasi Project",
                "act-6-desc": "Mendokumentasikan proses pengerjaan project selama kegiatan PKL.",
                "act-7-title": "Presentasi Project",
                "act-7-desc": "Menyampaikan hasil project dan menjelaskan proses pengerjaan yang telah dilakukan.",
                "act-8-title": "Evaluasi Kegiatan PKL",
                "act-8-desc": "Melakukan evaluasi terhadap kegiatan dan hasil pembelajaran selama PKL.",
                "btn-all-doc": "Lihat Semua Dokumentasi",
                "instansi-badge": "Instansi",
                "instansi-title-1": "Instansi yang telah",
                "instansi-title-2": "bekerja sama.",
                "instansi-desc": "Access Media menjadi tempat belajar dan berkembang bagi peserta dari berbagai sekolah maupun perguruan tinggi.",
                "school-type": "Sekolah",
                "uni-type": "Perguruan Tinggi",
                "cta-badge": "Mulai Langkahmu",
                "cta-title-1": "Siap mendapatkan pengalaman",
                "cta-title-2": "di dunia kerja?",
                "cta-desc": "Kenali lebih jauh kegiatan, project, dan pengalaman peserta PKL maupun magang di Access Media.",
                "cta-btn": "Hubungi Kami",
                "footer-desc": "Portal informasi PKL dan magang bagi siswa serta mahasiswa. Access Media juga menyediakan les private sebagai layanan pembelajaran tambahan.",
                "footer-contact-title": "Hubungi Access Media",
                "footer-rights": "© 2026 CV Access Media. All rights reserved."
            },
            en: {
                "nav-beranda": "Home",
                "nav-tentang": "About",
                "nav-arsip": "Project Archive",
                "nav-kegiatan": "Activities",
                "nav-instansi": "Institutions",
                "btn-kontak": "Contact",
                "hero-badge": "Internship Program",
                "hero-title-1": "Build Experience,",
                "hero-title-2": "Develop Potential.",
                "hero-desc": "Access Media opens opportunities for students to gain work experience, develop skills, and directly participate in various activities and projects.",
                "hero-btn-1": "Explore Project Archive",
                "hero-btn-2": "Learn Program",
                "stat-1": "Internship Participants",
                "stat-2": "Institutions",
                "stat-3": "Years Program",
                "stat-4": "Activities",
                "about-badge": "About",
                "about-title-1": "Space to",
                "about-title-2": "learn and grow.",
                "about-desc": "The internship program at Access Media provides participants with an opportunity to experience the work environment while developing skills through activities and projects.",
                "tools-title": "Tools & Technology",
                "tools-subtitle": "Used in the learning process",
                "benefit-1-title": "Work Experience",
                "benefit-1-desc": "Directly experience the work atmosphere and processes.",
                "benefit-2-title": "Mentorship",
                "benefit-2-desc": "Get direct guidance and direction from Access Media leadership.",
                "benefit-3-title": "Skill Development",
                "benefit-3-desc": "Sharpen technical abilities as well as soft skills.",
                "benefit-4-title": "Teamwork",
                "benefit-4-desc": "Learn to communicate and work collaboratively in teams.",
                "project-badge": "Project Archive",
                "project-title-1": "Works created",
                "project-title-2": "with Access Media.",
                "project-desc": "A collection of projects completed by internship participants while joining CV Access Media.",
                "tag-website": "Website",
                "tag-sisinfo": "Information System",
                "tag-app": "Application",
                "p1-title": "Company Profile Website",
                "p1-desc": "Website project created as an information medium and company profile.",
                "p2-title": "School Information System",
                "p2-desc": "Website-based application project to assist school data and information management.",
                "p3-title": "Website UI/UX Design",
                "p3-desc": "Interface and user experience design for digital application needs.",
                "p4-title": "Website Project",
                "p4-desc": "Website project developed during the internship period.",
                "p5-title": "Web-Based Application",
                "p5-desc": "Web-based application development to support user needs.",
                "btn-all-projects": "View all projects",
                "activity-badge": "Internship Activities",
                "activity-title-1": "During Internship",
                "activity-title-2": "what do we do?",
                "activity-desc": "Various activities undertaken by participants during their internship at Access Media.",
                "act-1-title": "Work Environment Introduction",
                "act-1-desc": "Understanding the work environment, rules, activity flows, and task assignments.",
                "act-2-title": "Website Development",
                "act-2-desc": "Working on website projects and learning application development step by step.",
                "act-3-title": "UI/UX Design",
                "act-3-desc": "Creating attractive, neat, and user-friendly website interfaces.",
                "act-4-title": "Database & Backend",
                "act-4-desc": "Learning databases, data management, and backend processes in an application.",
                "act-5-title": "Website Testing",
                "act-5-desc": "Checking and testing features to ensure the website runs properly.",
                "act-6-title": "Project Documentation",
                "act-6-desc": "Documenting the project development process throughout the internship.",
                "act-7-title": "Project Presentation",
                "act-7-desc": "Presenting project results and explaining the development process.",
                "act-8-title": "Internship Evaluation",
                "act-8-desc": "Evaluating activities and learning outcomes during the internship.",
                "btn-all-doc": "View All Documentation",
                "instansi-badge": "Institutions",
                "instansi-title-1": "Partnered",
                "instansi-title-2": "Institutions.",
                "instansi-desc": "Access Media serves as a learning and growth hub for participants from various schools and universities.",
                "school-type": "School",
                "uni-type": "Higher Education",
                "cta-badge": "Start Your Step",
                "cta-title-1": "Ready to gain experience",
                "cta-title-2": "in the working world?",
                "cta-desc": "Learn more about activities, projects, and participant experiences at Access Media.",
                "cta-btn": "Contact Us",
                "footer-desc": "Internship information portal for students. Access Media also provides private tutoring as an additional learning service.",
                "footer-contact-title": "Contact Access Media",
                "footer-rights": "© 2026 CV Access Media. All rights reserved."
            }
        };

        function switchLang(lang) {
            const enBtn = document.getElementById("langEn");
            const idBtn = document.getElementById("langId");
            const enBtnMobile = document.getElementById("langEnMobile");
            const idBtnMobile = document.getElementById("langIdMobile");

            if (lang === 'en') {
                enBtn.className = "rounded-full bg-darkgreen px-3 py-1 text-xs font-bold text-white shadow-sm transition";
                idBtn.className = "rounded-full px-3 py-1 text-xs font-bold text-slate-500 transition";
                enBtnMobile.className = "rounded-full bg-darkgreen px-3 py-1 text-xs font-bold text-white shadow-sm transition";
                idBtnMobile.className = "rounded-full px-3 py-1 text-xs font-bold text-slate-500 transition";
            } else {
                idBtn.className = "rounded-full bg-darkgreen px-3 py-1 text-xs font-bold text-white shadow-sm transition";
                enBtn.className = "rounded-full px-3 py-1 text-xs font-bold text-slate-500 transition";
                idBtnMobile.className = "rounded-full bg-darkgreen px-3 py-1 text-xs font-bold text-white shadow-sm transition";
                enBtnMobile.className = "rounded-full px-3 py-1 text-xs font-bold text-slate-500 transition";
            }

            const elements = document.querySelectorAll("[data-translate]");
            elements.forEach(el => {
                const key = el.getAttribute("data-translate");
                if (translations[lang] && translations[lang][key]) {
                    el.textContent = translations[lang][key];
                }
            });

            document.documentElement.setAttribute('lang', lang);
        }

        // CAROUSEL INSTANSI BERGERAK MULUS, KONTINYU, DAN TIDAK TERLALU CEPAT
        const instansiTrack = document.getElementById("instansiTrack");
        let animationId = null;
        let scrollPosition = 0;

        function initContinuousCarousel() {
            if (!instansiTrack) return;

            instansiTrack.querySelectorAll(".instansi-clone").forEach(card => card.remove());

            const originalCards = Array.from(instansiTrack.querySelectorAll(".instansi-card"));
            if (originalCards.length === 0) return;

            originalCards.forEach(card => {
                const clone = card.cloneNode(true);
                clone.classList.add("instansi-clone");
                instansiTrack.appendChild(clone);
            });

            instansiTrack.style.transition = "none";
            scrollPosition = 0;

            function step() {
                // Kecepatan diatur ke 0.5 agar gerakan terasa santai, halus, dan tidak terlalu cepat
                scrollPosition += 1; 

                const singleCardWidth = originalCards[0].offsetWidth + 24;
                const totalOriginalWidth = singleCardWidth * originalCards.length;

                if (scrollPosition >= totalOriginalWidth) {
                    scrollPosition = 0;
                }

                instansiTrack.style.transform = `translateX(-${scrollPosition}px)`;
                animationId = requestAnimationFrame(step);
            }

            cancelAnimationFrame(animationId);
            animationId = requestAnimationFrame(step);
        }

        window.addEventListener("load", () => {
            initContinuousCarousel();
        });

        window.addEventListener("resize", () => {
            cancelAnimationFrame(animationId);
            initContinuousCarousel();
        });

        document.addEventListener("DOMContentLoaded", function () {
            const menuButton = document.getElementById("menuButton");
            const mobileMenu = document.getElementById("mobileMenu");
            const menuIcon = document.getElementById("menuIcon");
            const navLinks = document.querySelectorAll(".nav-link");
            const mobileNavLinks = document.querySelectorAll(".mobile-nav-link");
            const sections = document.querySelectorAll("#beranda, #tentang, #arsip, #kegiatan, #instansi");

            function setActive(sectionId) {
                navLinks.forEach(function (link) {
                    const line = link.querySelector(".nav-line");
                    link.classList.remove("text-darkpurple");
                    link.classList.add("text-slate-600");
                    line.classList.add("hidden");

                    if (link.dataset.section === sectionId) {
                        link.classList.remove("text-slate-600");
                        link.classList.add("text-darkpurple");
                        line.classList.remove("hidden");
                    }
                });

                mobileNavLinks.forEach(function (link) {
                    const line = link.querySelector(".mobile-line");
                    link.classList.remove("text-darkpurple");
                    link.classList.add("text-slate-600");
                    line.classList.add("hidden");

                    if (link.dataset.section === sectionId) {
                        link.classList.remove("text-slate-600");
                        link.classList.add("text-darkpurple");
                        line.classList.remove("hidden");
                    }
                });
            }

            menuButton.addEventListener("click", function () {
                const isClosed = mobileMenu.classList.contains("hidden");
                if (isClosed) {
                    mobileMenu.classList.remove("hidden");
                    menuButton.setAttribute("aria-expanded", "true");
                    menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />`;
                } else {
                    mobileMenu.classList.add("hidden");
                    menuButton.setAttribute("aria-expanded", "false");
                    menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />`;
                }
            });

            mobileNavLinks.forEach(function (link) {
                link.addEventListener("click", function () {
                    setActive(link.dataset.section);
                    mobileMenu.classList.add("hidden");
                    menuButton.setAttribute("aria-expanded", "false");
                    menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />`;
                });
            });

            navLinks.forEach(function (link) {
                link.addEventListener("click", function () {
                    setActive(link.dataset.section);
                });
            });

            const observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        setActive(entry.target.id);
                    }
                });
            }, {
                rootMargin: "-30% 0px -55% 0px",
                threshold: 0
            });

            sections.forEach(function (section) {
                observer.observe(section);
            });

            setActive("beranda");
        });

        // SHOW / HIDE PROJECTS
        const showProjectsBtn = document.getElementById("showProjectsBtn");
        const moreProjects = document.getElementById("moreProjects");
        const showProjectsText = document.getElementById("showProjectsText");
        const showProjectsIcon = document.getElementById("showProjectsIcon");

        if (showProjectsBtn) {
            showProjectsBtn.addEventListener("click", function () {
                if (moreProjects.classList.contains("hidden")) {
                    moreProjects.classList.remove("hidden");
                    showProjectsText.textContent = document.documentElement.lang === 'en' ? "Hide projects" : "Sembunyikan project";
                    showProjectsIcon.style.transform = "rotate(180deg)";
                } else {
                    moreProjects.classList.add("hidden");
                    showProjectsText.textContent = document.documentElement.lang === 'en' ? "View all projects" : "Lihat semua project";
                    showProjectsIcon.style.transform = "rotate(0deg)";
                }
            });
        }

        // SHOW / HIDE DOKUMENTASI
        const showDokumentasiBtn = document.getElementById("showDokumentasiBtn");
        const moreDokumentasi = document.getElementById("moreDokumentasi");
        const showDokumentasiText = document.getElementById("showDokumentasiText");
        const showDokumentasiIcon = document.getElementById("showDokumentasiIcon");

        if (showDokumentasiBtn) {
            showDokumentasiBtn.addEventListener("click", function () {
                if (moreDokumentasi.classList.contains("hidden")) {
                    moreDokumentasi.classList.remove("hidden");
                    showDokumentasiText.textContent = document.documentElement.lang === 'en' ? "Hide Documentation" : "Sembunyikan dokumentasi";
                    showDokumentasiIcon.style.transform = "rotate(180deg)";
                } else {
                    moreDokumentasi.classList.add("hidden");
                    showDokumentasiText.textContent = document.documentElement.lang === 'en' ? "View All Documentation" : "Lihat Semua Dokumentasi";
                    showDokumentasiIcon.style.transform = "rotate(0deg)";
                }
            });
        }
    </script>
</body>
</html>