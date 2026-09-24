<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Project | Access Internship</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        green: {
                            50: "#EFFAF4",
                            100: "#DDF3E7",
                            500: "#008A4B",
                            600: "#007A43",
                            700: "#006A3A",
                        },
                        purple: {
                            50: "#FBF0F8",
                            100: "#F1D9EB",
                            400: "#A42B8E",
                            500: "#8A1B78",
                            600: "#761666",
                        },
                        navy: "#263750",
                    }
                }
            }
        }
    </script>

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #F8FAF9;
        }

        .dashboard-bg {
            background:
                radial-gradient(
                    circle at 90% 5%,
                    rgba(138, 27, 120, 0.08),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 5% 90%,
                    rgba(0, 138, 75, 0.08),
                    transparent 25%
                ),
                #F8FAF9;
        }

        .soft-shadow {
            box-shadow:
                0 2px 8px rgba(38, 55, 80, 0.04),
                0 1px 2px rgba(38, 55, 80, 0.03);
        }

        .menu-item {
            transition: all 0.2s ease;
        }

        .menu-item:hover {
            background: #EFFAF4;
            color: #008A4B;
        }

        .menu-active {
            background: linear-gradient(
                90deg,
                #DDF3E7,
                #F1D9EB
            );
            color: #006A3A;
        }

        .project-card {
            transition: all 0.2s ease;
        }

        .project-card:hover {
            transform: translateY(-2px);
            box-shadow:
                0 8px 20px rgba(38, 55, 80, 0.08);
        }

        .profile-dropdown {
            animation: profileShow 0.15s ease;
        }

        @keyframes profileShow {
            from {
                opacity: 0;
                transform: translateY(5px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #F8FAF9;
        }

        ::-webkit-scrollbar-thumb {
            background: #CBD5D0;
            border-radius: 10px;
        }

        @media (max-width: 480px) {

            .dashboard-bg {
                padding: 12px !important;
            }

            .project-header {
                padding: 15px !important;
            }

            .project-header h1 {
                font-size: 16px !important;
            }

            .project-header p {
                max-width: 200px !important;
            }

            .project-header a {
                padding: 8px 9px !important;
                font-size: 8px !important;
            }

            .project-section {
                padding: 13px !important;
            }

            .project-card {
                padding: 0 !important;
            }
        }
    </style>
</head>


<body class="text-slate-600 overflow-x-hidden">


    <!-- ========================= -->
    <!-- SIDEBAR -->
    <!-- ========================= -->

    <aside
        class="fixed left-0 top-0 z-50 h-screen w-[220px] bg-white border-r border-slate-200 flex flex-col
        max-md:top-auto max-md:bottom-0 max-md:w-full max-md:h-[68px]
        max-md:flex-row max-md:border-r-0 max-md:border-t max-md:border-slate-200">


        <!-- LOGO / BRAND -->

        <div
            class="h-[78px] px-5 flex items-center border-b border-slate-200 shrink-0
            max-md:hidden">

            <div class="flex items-center gap-3 min-w-0">

                <img
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Logo Access Media"
                    class="w-11 h-11 object-contain shrink-0">

                <div class="min-w-0">

                    <h1
                        class="text-[13px] font-bold text-navy whitespace-nowrap">
                        Access Internship
                    </h1>

                    <p
                        class="text-[10px] text-slate-400 mt-1 whitespace-nowrap">
                        CV Access Media
                    </p>

                </div>

            </div>

        </div>


        <!-- MENU UTAMA -->

        <nav
            class="flex-1 px-3 py-5 overflow-y-auto
            max-md:flex max-md:flex-row max-md:items-center
            max-md:justify-around max-md:w-full max-md:p-1.5
            max-md:overflow-x-auto max-md:overflow-y-hidden">

            <p
                class="px-3 mb-3 text-[9px] font-semibold uppercase
                tracking-[0.12em] text-slate-400 max-md:hidden">
                Menu Utama
            </p>


            <!-- DASHBOARD -->

            <a
                href="{{ url('/dashboard') }}"
                class="menu-item flex items-center gap-3 px-3 py-2.5 rounded-lg
                text-xs text-slate-500 mb-1
                max-md:flex-col max-md:justify-center max-md:gap-1
                max-md:min-w-[62px] max-md:px-2 max-md:py-2 max-md:mb-0">

                <svg
                    class="w-4 h-4 max-md:w-[18px] max-md:h-[18px]"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M4 4h6v6H4V4Zm10 0h6v6h-6V4ZM4 14h6v6H4v-6Zm10 0h6v6h-6v-6Z" />

                </svg>

                <span class="max-md:text-[8px]">
                    Dashboard
                </span>

            </a>


            <!-- PROJECT -->

            <a
                href="{{ url('/project') }}"
                class="menu-item menu-active flex items-center gap-3 px-3 py-2.5 rounded-lg
                text-xs font-semibold mb-1
                max-md:flex-col max-md:justify-center max-md:gap-1
                max-md:min-w-[62px] max-md:px-2 max-md:py-2 max-md:mb-0">

                <svg
                    class="w-4 h-4 max-md:w-[18px] max-md:h-[18px]"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M4 7h16v13H4V7Zm4 0V4h8v3" />

                </svg>

                <span class="max-md:text-[8px]">
                    Project
                </span>

            </a>


            <!-- DOKUMENTASI -->

            <a
                href="dokumentasi.html"
                class="menu-item flex items-center gap-3 px-3 py-2.5 rounded-lg
                text-xs text-slate-500 mb-1
                max-md:flex-col max-md:justify-center max-md:gap-1
                max-md:min-w-[62px] max-md:px-2 max-md:py-2 max-md:mb-0">

                <svg
                    class="w-4 h-4 max-md:w-[18px] max-md:h-[18px]"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M5 4h14v16H5V4Zm3 4h8m-8 4h8m-8 4h5" />

                </svg>

                <span class="max-md:text-[8px]">
                    Dokumentasi
                </span>

            </a>


            <!-- INSTANSI -->

            <a
                href="instansi.html"
                class="menu-item flex items-center gap-3 px-3 py-2.5 rounded-lg
                text-xs text-slate-500
                max-md:flex-col max-md:justify-center max-md:gap-1
                max-md:min-w-[62px] max-md:px-2 max-md:py-2">

                <svg
                    class="w-4 h-4 max-md:w-[18px] max-md:h-[18px]"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6" />

                </svg>

                <span class="max-md:text-[8px]">
                    Instansi
                </span>

            </a>


            <!-- PROFILE MOBILE -->

            <a
                href="profile.html"
                class="menu-item flex items-center gap-3 px-3 py-2.5 rounded-lg
                text-xs text-slate-500
                max-md:flex-col max-md:justify-center max-md:gap-1
                max-md:min-w-[62px] max-md:px-2 max-md:py-2 md:hidden">

                <svg
                    class="w-4 h-4 max-md:w-[18px] max-md:h-[18px]"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="M20 21a8 8 0 0 0-16 0M12 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" />

                </svg>

                <span class="max-md:text-[8px]">
                    Profile
                </span>

            </a>

        </nav>


        <!-- ADMINISTRATOR -->

        <div
            class="relative p-3 border-t border-slate-200 shrink-0
            max-md:hidden">

            <button
                id="profileToggle"
                type="button"
                class="w-full flex items-center gap-3 p-2 rounded-lg
                hover:bg-slate-50 transition text-left">

                <div
                    class="w-8 h-8 rounded-full bg-gradient-to-br
                    from-green-100 to-purple-100 flex items-center
                    justify-center shrink-0">

                    <span
                        class="text-[11px] font-bold text-green-700">
                        A
                    </span>

                </div>

                <div class="min-w-0 flex-1">

                    <p
                        class="text-[11px] font-semibold text-navy truncate">
                        Administrator
                    </p>

                    <p class="text-[9px] text-slate-400">
                        Admin
                    </p>

                </div>

                <svg
                    id="profileChevron"
                    class="w-4 h-4 text-slate-400 transition-transform duration-200"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="m6 9 6 6 6-6" />

                </svg>

            </button>


            <!-- DROPDOWN PROFILE -->

            <div
                id="profileDropdown"
                class="profile-dropdown hidden absolute left-3 right-3
                bottom-[68px] z-50 bg-white border border-slate-200
                rounded-xl shadow-xl p-2">


                <!-- PROFILE -->

                <a
                    href="profile.html"
                    class="flex items-center gap-3 px-3 py-2.5
                    rounded-lg text-[10px] font-medium text-slate-500
                    hover:bg-green-50 hover:text-green-700 transition">

                    <div
                        class="w-7 h-7 rounded-lg bg-green-100
                        flex items-center justify-center">

                        <svg
                            class="w-3.5 h-3.5 text-green-600"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M20 21a8 8 0 0 0-16 0M12 13a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z" />

                        </svg>

                    </div>

                    <div>

                        <p class="font-semibold text-navy">
                            Profile
                        </p>

                        <p class="text-[8px] text-slate-400 mt-0.5">
                            Lihat profile admin
                        </p>

                    </div>

                </a>


                <!-- LOGOUT -->

                <button
                    id="logoutButton"
                    type="button"
                    class="w-full flex items-center gap-3 px-3 py-2.5
                    rounded-lg text-[10px] font-medium text-slate-500
                    hover:bg-red-50 hover:text-red-500 transition text-left">

                    <div
                        class="w-7 h-7 rounded-lg bg-red-50
                        flex items-center justify-center">

                        <svg
                            class="w-3.5 h-3.5 text-red-500"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M15 8l4 4m0 0-4 4m4-4H9m3-7V4H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-1" />

                        </svg>

                    </div>

                    <div>

                        <p class="font-semibold text-slate-600">
                            Logout
                        </p>

                        <p class="text-[8px] text-slate-400 mt-0.5">
                            Keluar dari akun
                        </p>

                    </div>

                </button>

            </div>

        </div>

    </aside>


    <!-- ========================= -->
    <!-- MAIN -->
    <!-- ========================= -->

    <main
        class="ml-[220px] min-h-screen
        max-md:ml-0 max-md:pb-[68px]">


        <!-- NAVBAR / HEADER -->

        <header
            class="sticky top-0 z-40 h-[78px]
            bg-white border-b border-slate-200 px-7
            flex items-center justify-between
            max-md:h-[64px] max-md:px-4">

            <div class="min-w-0">

                <h2
                    class="text-[17px] font-bold text-navy
                    max-md:text-[15px]">
                    Project
                </h2>

                <p
                    class="text-[11px] text-slate-400 mt-0.5
                    truncate max-md:text-[9px]">
                    Daftar project Access Internship
                </p>

            </div>

        </header>


<!-- ========================= -->
<!-- CONTENT -->
<!-- ========================= -->

<div
    class="dashboard-bg min-h-[calc(100vh-78px)]
    p-6 max-md:p-4 max-sm:p-3">

    <!-- HEADER DETAIL PROJECT -->
    <section class="relative overflow-hidden mb-5">

        <!-- DECORATION -->
        <div
            class="absolute -right-10 -top-16 w-40 h-40
            rounded-full bg-purple-100/60
            max-md:w-28 max-md:h-28
            max-md:-right-8 max-md:-top-10">
        </div>

        <div
            class="absolute -left-10 -bottom-20 w-36 h-36
            rounded-full bg-green-100/60
            max-md:w-28 max-md:h-28">
        </div>

        <!-- BACK BUTTON -->
        <div class="relative z-10">

            <a
                href="{{ url('/project') }}"
                class="inline-flex items-center
                px-3 py-2.5
                bg-green-500
                border border-green-700
                rounded-lg
                text-[10px]
                font-semibold
                text-white
                hover:bg-green-700
                transition">
<svg
                            class="w-4 h-4"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M15 18l-6-6 6-6" />

                        </svg>
                Kembali

            </a>

        </div>

    </section>


    <!-- DETAIL PROJECT -->
<section
    class="bg-white border border-slate-200
    rounded-2xl soft-shadow overflow-hidden
    max-w-6xl">

    <div class="grid grid-cols-1 md:grid-cols-2">

        <!-- FOTO PROJECT -->
        <div
            class="min-h-[300px] md:min-h-[420px]
            bg-gradient-to-br from-green-50
            via-white to-purple-50
            flex items-center justify-center
            border-b md:border-b-0 md:border-r
            border-slate-100">

            <!-- Placeholder foto -->
            <svg
                class="w-16 h-16 text-slate-300"
                fill="none"
                stroke="currentColor"
                viewBox="0 0 24 24">

                <rect
                    x="3" y="3"
                    width="18" height="18"
                    rx="2"
                    stroke-width="1.5"/>

                <path
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m7 15 3-3 2 2 2-2 3 3"/>

            </svg>

        </div>


        <!-- INFORMASI PROJECT -->
        <div class="p-6 md:p-8 flex flex-col justify-center">

            <!-- JENIS PROJECT -->
            <div class="mb-5">

                <span
                    class="inline-flex px-3 py-1.5
                    rounded-lg bg-green-50
                    text-green-600 text-[10px]
                    font-semibold">

                    {{ $project->jenis_project }}

                </span>

            </div>


            <!-- NAMA PROJECT -->
            <h2
                class="text-2xl font-bold
                text-navy leading-tight mb-4">

                {{ $project->nama_project }}

            </h2>


            <!-- DESKRIPSI -->
            <p
                class="text-[11px] text-slate-500
                leading-relaxed">

                {{ $project->deskripsi ?? '-' }}

            </p>


            <!-- PEMISAH -->
            <div class="border-t border-slate-100 my-6"></div>


            <!-- KATEGORI PESERTA -->
            <div class="flex items-center justify-between gap-4 mb-5">

                <p class="text-[10px] text-slate-400">
                    Kategori Peserta
                </p>

                <p class="text-[11px] font-semibold text-navy text-right">
                    {{ $project->kategori_peserta ?? '-' }}
                </p>

            </div>


            <!-- TANGGAL -->
            <div class="flex items-center justify-between gap-4">

                <p class="text-[10px] text-slate-400">
                    Tanggal
                </p>

                <p class="text-[11px] font-semibold text-navy text-right">

                    @if($project->tanggal)
                        {{ \Carbon\Carbon::parse($project->tanggal)->format('d M Y') }}
                    @else
                        -
                    @endif

                </p>

            </div>

        </div>

    </div>

</section>

</div>
    <!-- ========================= -->
    <!-- JAVASCRIPT -->
    <!-- ========================= -->

    <script>

        // =========================
        // PROJECT MENU
        // =========================

        document
            .querySelectorAll(".project-menu-button")
            .forEach(function (button) {

                button.addEventListener("click", function (event) {

                    event.stopPropagation();

                    const menu =
                        button.parentElement.querySelector(".project-menu");

                    document
                        .querySelectorAll(".project-menu")
                        .forEach(function (item) {

                            if (item !== menu) {
                                item.classList.add("hidden");
                            }

                        });

                    menu.classList.toggle("hidden");

                });

            });


        // =========================
        // CLOSE PROJECT MENU
        // =========================

        document.addEventListener("click", function () {

            document
                .querySelectorAll(".project-menu")
                .forEach(function (menu) {

                    menu.classList.add("hidden");

                });

        });


        // =========================
        // PROFILE DROPDOWN
        // =========================

        const profileToggle =
            document.getElementById("profileToggle");

        const profileDropdown =
            document.getElementById("profileDropdown");

        const profileChevron =
            document.getElementById("profileChevron");


        if (profileToggle && profileDropdown) {

            profileToggle.addEventListener("click", function (event) {

                event.stopPropagation();

                profileDropdown.classList.toggle("hidden");

                if (profileChevron) {

                    profileChevron.classList.toggle("rotate-180");

                }

            });

        }


        document.addEventListener("click", function (event) {

            if (
                profileDropdown &&
                profileToggle &&
                !profileDropdown.contains(event.target) &&
                !profileToggle.contains(event.target)
            ) {

                profileDropdown.classList.add("hidden");

                if (profileChevron) {

                    profileChevron.classList.remove("rotate-180");

                }

            }

        });


        // =========================
        // LOGOUT
        // =========================

        const logoutButton =
            document.getElementById("logoutButton");


        if (logoutButton) {

            logoutButton.addEventListener("click", function () {

                const confirmLogout =
                    confirm("Apakah Anda yakin ingin logout?");

                if (confirmLogout) {

                    localStorage.removeItem("isLoggedIn");

                    window.location.href =
                        "{{ url('/login') }}";

                }

            });

        }

    </script>

</body>

</html>