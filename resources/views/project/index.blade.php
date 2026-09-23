<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Project | Access Internship</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

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

        .dot-pattern {
            background-image: radial-gradient(
                rgba(112, 85, 150, 0.13) 1.2px,
                transparent 1.2px
            );
            background-size: 20px 20px;
        }

        .grid-pattern {
            background-image:
                linear-gradient(rgba(118, 169, 135, 0.10) 1px, transparent 1px),
                linear-gradient(90deg, rgba(154, 130, 194, 0.10) 1px, transparent 1px);
            background-size: 34px 34px;
        }

        .brand-gradient {
            background: linear-gradient(90deg, #4F795D, #705596);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .project-card.hidden-project {
            display: none;
        }
    </style>
</head>

<body class="min-h-screen bg-cream text-slate-700">

    <!-- HEADER SEDERHANA -->
    <header class="relative z-20 px-4 pt-5 sm:px-6">
        <div class="mx-auto flex max-w-6xl items-center justify-between rounded-2xl border border-white/80 bg-white/90 px-4 py-3 shadow-sm backdrop-blur-md sm:px-5">

            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <div class="flex h-10 w-10 items-center justify-center">
                    <img
                        src="{{ asset('assets/images/logo.png') }}"
                        alt="Logo Access Media"
                        class="h-10 w-10 object-contain"
                    >
                </div>

                <div>
                    <h1 class="text-sm font-extrabold text-slate-800 sm:text-base">
                        Access Internship
                    </h1>
                    <p class="text-[10px] text-slate-400 sm:text-xs">
                        CV Access Media
                    </p>
                </div>
            </a>

            <a
                href="{{ url('/') }}"
                class="inline-flex items-center gap-2 rounded-xl border border-lavender bg-white px-3 py-2 text-xs font-bold text-darkpurple transition hover:bg-lavender/30 sm:px-4 sm:text-sm"
            >
                <i class="bi bi-arrow-left"></i>
                <span>Kembali</span>
            </a>
        </div>
    </header>

    <main>

        <!-- JUDUL HALAMAN -->
        <section class="relative overflow-hidden px-6 pb-7 pt-9 sm:pb-9 sm:pt-11">
            <div class="dot-pattern absolute inset-0 opacity-60"></div>

            <div class="absolute -left-20 top-16 h-52 w-52 rounded-full bg-sage/40"></div>
            <div class="absolute right-[7%] top-12 h-28 w-28 animate-float rounded-full bg-lavender/60"></div>
            <div class="absolute bottom-4 left-[42%] h-14 w-14 animate-floatSlow rounded-full border-2 border-purple/25"></div>
            <div class="absolute right-[12%] bottom-8 hidden h-20 w-20 rotate-12 rounded-2xl border-2 border-greenmain/20 lg:block"></div>

            <div class="relative z-10 mx-auto max-w-3xl text-center">

                <span class="inline-flex rounded-full bg-mint px-4 py-2 text-xs font-bold uppercase tracking-widest text-darkgreen">
                    Arsip Project
                </span>

                <h2 class="mt-3 text-2xl font-extrabold leading-tight text-slate-800 sm:text-3xl">
                    Karya yang pernah dibuat
                    <span class="brand-gradient">
                        bersama Access Media.
                    </span>
                </h2>

                <p class="mx-auto mt-3 max-w-2xl text-sm leading-6 text-slate-500">
                    Kumpulan project yang pernah dikerjakan oleh peserta PKL dan magang
                    selama mengikuti kegiatan di CV Access Media.
                </p>

                <div class="mt-4 flex items-center justify-center gap-3">
                    <span class="h-1 w-14 rounded-full bg-greenmain"></span>
                    <span class="h-1 w-8 rounded-full bg-purple"></span>
                </div>
            </div>
        </section>

        <!-- ARSIP PROJECT -->
        <section class="relative overflow-hidden px-6 pb-24 pt-4">
            <div class="grid-pattern absolute inset-0 opacity-40"></div>

            <div class="absolute -right-20 top-24 h-48 w-48 rounded-full bg-lavender/30"></div>
            <div class="absolute -left-20 bottom-20 h-40 w-40 rounded-full bg-sage/25"></div>

            <div class="relative z-10 mx-auto max-w-6xl">

                <!-- JUDUL + JUMLAH -->
                <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-widest text-darkgreen">
                            Koleksi Project
                        </p>

                        <h3 class="mt-1 text-xl font-extrabold text-slate-800 sm:text-2xl">
                            Semua Project
                        </h3>
                    </div>

                    <div class="rounded-xl border border-sage/50 bg-white px-4 py-2 text-xs font-semibold text-slate-500 shadow-sm">
                        <span id="projectCount">6</span> Project
                    </div>
                </div>

                <!-- FILTER KATEGORI -->
                <div class="mt-7 flex flex-wrap gap-2">

                    <button
                        type="button"
                        class="category-btn active rounded-xl border border-darkpurple bg-darkpurple px-4 py-2.5 text-xs font-bold text-white transition sm:text-sm"
                        data-category="all"
                    >
                        Semua
                    </button>

                    <button
                        type="button"
                        class="category-btn rounded-xl border border-sage/70 bg-white px-4 py-2.5 text-xs font-bold text-darkgreen transition hover:bg-mint sm:text-sm"
                        data-category="website"
                    >
                        Website
                    </button>

                    <button
                        type="button"
                        class="category-btn rounded-xl border border-sage/70 bg-white px-4 py-2.5 text-xs font-bold text-darkgreen transition hover:bg-mint sm:text-sm"
                        data-category="aplikasi"
                    >
                        Aplikasi
                    </button>

                    <button
                        type="button"
                        class="category-btn rounded-xl border border-lavender bg-white px-4 py-2.5 text-xs font-bold text-darkpurple transition hover:bg-lavender/30 sm:text-sm"
                        data-category="sistem-informasi"
                    >
                        Sistem Informasi
                    </button>

                    <button
                        type="button"
                        class="category-btn rounded-xl border border-lavender bg-white px-4 py-2.5 text-xs font-bold text-darkpurple transition hover:bg-lavender/30 sm:text-sm"
                        data-category="uiux"
                    >
                        UI/UX
                    </button>
                </div>

                <!-- PROJECT GRID -->
                <div id="projectGrid" class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- PROJECT 01 -->
                    <article
                        class="project-card group overflow-hidden rounded-2xl border border-sage/50 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        data-category="website"
                    >
                        <div class="relative h-52 overflow-hidden bg-mint">
                            <img
                                src="{{ asset('assets/images/project1.png') }}"
                                alt="Nihon Access"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >

                            <span class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkgreen shadow-sm">
                                Website
                            </span>
                        </div>

                        <div class="p-5">
                            <p class="text-[11px] font-bold uppercase tracking-wider text-darkgreen">
                                Project 01
                            </p>

                            <h3 class="mt-2 text-lg font-bold text-slate-800">
                                Nihon Access
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Project website yang dibuat sebagai media informasi dan profil perusahaan.
                            </p>
                        </div>
                    </article>

                    <!-- PROJECT 02 -->
                    <article
                        class="project-card group overflow-hidden rounded-2xl border border-lavender/70 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        data-category="sistem-informasi"
                    >
                        <div class="relative h-52 overflow-hidden bg-lavender">
                            <img
                                src="{{ asset('assets/images/project2.png') }}"
                                alt="Haadirin"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >

                            <span class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkpurple shadow-sm">
                                Sistem Informasi
                            </span>
                        </div>

                        <div class="p-5">
                            <p class="text-[11px] font-bold uppercase tracking-wider text-darkpurple">
                                Project 02
                            </p>

                            <h3 class="mt-2 text-lg font-bold text-slate-800">
                                Haadirin
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Project aplikasi berbasis website untuk membantu pengelolaan informasi dan data sekolah.
                            </p>
                        </div>
                    </article>

                    <!-- PROJECT 03 -->
                    <article
                        class="project-card group overflow-hidden rounded-2xl border border-sage/50 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        data-category="uiux"
                    >
                        <div class="relative h-52 overflow-hidden bg-mint">
                            <img
                                src="{{ asset('assets/images/project3.png') }}"
                                alt="Access Internship"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >

                            <span class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkgreen shadow-sm">
                                UI/UX
                            </span>
                        </div>

                        <div class="p-5">
                            <p class="text-[11px] font-bold uppercase tracking-wider text-darkgreen">
                                Project 03
                            </p>

                            <h3 class="mt-2 text-lg font-bold text-slate-800">
                                Access Internship
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Perancangan antarmuka dan pengalaman pengguna untuk kebutuhan aplikasi berbasis digital.
                            </p>
                        </div>
                    </article>

                    <!-- PROJECT 04 -->
                    <article
                        class="project-card group overflow-hidden rounded-2xl border border-lavender/70 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        data-category="website"
                    >
                        <div class="relative h-52 overflow-hidden bg-lavender">
                            <img
                                src="{{ asset('assets/images/project4.png') }}"
                                alt="Web Panduan PetERP"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >

                            <span class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkpurple shadow-sm">
                                Website
                            </span>
                        </div>

                        <div class="p-5">
                            <p class="text-[11px] font-bold uppercase tracking-wider text-darkpurple">
                                Project 04
                            </p>

                            <h3 class="mt-2 text-lg font-bold text-slate-800">
                                Web Panduan PetERP
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Project website yang dikembangkan selama kegiatan PKL.
                            </p>
                        </div>
                    </article>

                    <!-- PROJECT 05 -->
                    <article
                        class="project-card group overflow-hidden rounded-2xl border border-sage/50 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        data-category="aplikasi"
                    >
                        <div class="relative h-52 overflow-hidden bg-mint">
                            <img
                                src="{{ asset('assets/images/project5.png') }}"
                                alt="Nalar"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >

                            <span class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkgreen shadow-sm">
                                Aplikasi
                            </span>
                        </div>

                        <div class="p-5">
                            <p class="text-[11px] font-bold uppercase tracking-wider text-darkgreen">
                                Project 05
                            </p>

                            <h3 class="mt-2 text-lg font-bold text-slate-800">
                                Nalar
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Pengembangan aplikasi untuk mendukung kebutuhan pengguna.
                            </p>
                        </div>
                    </article>

                    <!-- PROJECT 06 -->
                    <article
                        class="project-card group overflow-hidden rounded-2xl border border-lavender/70 bg-white shadow-sm transition duration-300 hover:-translate-y-1 hover:shadow-lg"
                        data-category="website"
                    >
                        <div class="relative h-52 overflow-hidden bg-lavender">
                            <img
                                src="{{ asset('assets/images/project6.png') }}"
                                alt="Karoto"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                            >

                            <span class="absolute left-4 top-4 rounded-full bg-white px-3 py-1 text-[11px] font-bold text-darkpurple shadow-sm">
                                Website
                            </span>
                        </div>

                        <div class="p-5">
                            <p class="text-[11px] font-bold uppercase tracking-wider text-darkpurple">
                                Project 06
                            </p>

                            <h3 class="mt-2 text-lg font-bold text-slate-800">
                                Karoto
                            </h3>

                            <p class="mt-2 text-sm leading-6 text-slate-500">
                                Project website yang dikembangkan selama kegiatan PKL.
                            </p>
                        </div>
                    </article>

                </div>

                <!-- EMPTY STATE -->
                <div id="emptyState" class="hidden py-16 text-center">
                    <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-2xl bg-lavender text-2xl text-darkpurple">
                        <i class="bi bi-folder2-open"></i>
                    </div>

                    <h3 class="mt-4 text-lg font-bold text-slate-800">
                        Belum ada project
                    </h3>

                    <p class="mt-2 text-sm text-slate-500">
                        Belum ada project pada kategori yang dipilih.
                    </p>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER SEDERHANA -->
    <footer class="border-t border-slate-100 bg-white">
        <div class="mx-auto max-w-6xl px-6 py-7">
            <div class="flex flex-col items-center justify-between gap-3 text-center sm:flex-row sm:text-left">

                <div class="flex items-center gap-3">
                    <img
                        src="{{ asset('assets/images/logo.png') }}"
                        alt="Logo Access Media"
                        class="h-8 w-8 object-contain"
                    >

                    <div>
                        <p class="text-sm font-bold text-slate-800">
                            Access Internship
                        </p>
                        <p class="text-[11px] text-slate-400">
                            CV Access Media
                        </p>
                    </div>
                </div>

                <p class="text-xs text-slate-400">
                    © 2026 CV Access Media. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        const categoryButtons = document.querySelectorAll('.category-btn');
        const projectCards = document.querySelectorAll('.project-card');
        const projectCount = document.getElementById('projectCount');
        const emptyState = document.getElementById('emptyState');

        function updateFilterButton(activeButton) {
            categoryButtons.forEach(button => {
                button.classList.remove(
                    'active',
                    'bg-darkpurple',
                    'text-white',
                    'border-darkpurple'
                );

                if (button.dataset.category === 'website' ||
                    button.dataset.category === 'aplikasi') {
                    button.classList.remove('text-darkgreen');
                    button.classList.add('text-darkgreen');
                } else {
                    button.classList.remove('text-darkpurple');
                    button.classList.add('text-darkpurple');
                }

                button.classList.add('bg-white');
            });

            activeButton.classList.remove('bg-white');

            activeButton.classList.add(
                'active',
                'bg-darkpurple',
                'text-white',
                'border-darkpurple'
            );
        }

        function filterProjects(category) {
            let visibleCount = 0;

            projectCards.forEach(card => {
                const cardCategory = card.dataset.category;

                if (category === 'all' || cardCategory === category) {
                    card.classList.remove('hidden-project');
                    visibleCount++;
                } else {
                    card.classList.add('hidden-project');
                }
            });

            projectCount.textContent = visibleCount;

            if (visibleCount === 0) {
                emptyState.classList.remove('hidden');
            } else {
                emptyState.classList.add('hidden');
            }
        }

        categoryButtons.forEach(button => {
            button.addEventListener('click', function () {
                const category = this.dataset.category;

                updateFilterButton(this);
                filterProjects(category);
            });
        });

        filterProjects('all');
    </script>

</body>
</html>
