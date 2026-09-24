<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Project | Access Internship</title>

    <script src="https://cdn.tailwindcss.com"></script>

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
                        navy: '#26354D'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-cream text-navy">

<div class="min-h-screen flex">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-white border-r border-gray-200 hidden md:flex flex-col">

        <!-- LOGO -->
        <div class="p-6 border-b border-gray-100">
            <div class="flex items-center gap-3">

                <img
                    src="{{ asset('assets/images/logo.png') }}"
                    alt="Access Internship"
                    class="w-10 h-10 object-contain"
                >

                <div>
                    <h1 class="font-bold text-lg text-navy">
                        Access Internship
                    </h1>

                    <p class="text-xs text-gray-500">
                        CV Access Media
                    </p>
                </div>

            </div>
        </div>


        <!-- MENU -->
        <nav class="flex-1 p-4 space-y-2">

            <a
                href="{{ url('/dashboard') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-mint hover:text-darkgreen transition"
            >
                Dashboard
            </a>

            <a
                href="{{ url('/project') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl bg-mint text-darkgreen font-semibold"
            >
                Project
            </a>

            <a
                href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-mint hover:text-darkgreen transition"
            >
                Dokumentasi
            </a>

            <a
                href="#"
                class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-mint hover:text-darkgreen transition"
            >
                Instansi
            </a>

        </nav>


        <!-- LOGOUT -->
        <div class="p-4 border-t border-gray-100">

            <a
                href="{{ url('/login') }}"
                class="block px-4 py-3 rounded-xl text-red-500 hover:bg-red-50 transition"
            >
                Logout
            </a>

        </div>

    </aside>


    <!-- MAIN CONTENT -->
    <main class="flex-1">

        <!-- HEADER -->
        <header class="bg-white border-b border-gray-200 px-6 py-5">

            <div class="max-w-6xl mx-auto">

                <div class="flex items-center justify-between gap-4">

                    <div>

                        <p class="text-sm text-gray-500 mb-1">
                            Project
                        </p>

                        <h2 class="text-2xl md:text-3xl font-bold text-navy">
                            Detail Project
                        </h2>

                    </div>


                    <a
                        href="{{ url('/project') }}"
                        class="px-4 py-2.5 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 transition"
                    >
                        ← Kembali
                    </a>

                </div>

            </div>

        </header>


        <!-- DETAIL -->
        <section class="px-6 py-8">

            <div class="max-w-6xl mx-auto">

                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden">


                    <!-- THUMBNAIL -->
                    @if($project->thumbnail)

                        <div class="w-full h-64 md:h-80 bg-gray-100">

                            <img
                                src="{{ asset('storage/' . $project->thumbnail) }}"
                                alt="{{ $project->nama_project }}"
                                class="w-full h-full object-cover"
                            >

                        </div>

                    @else

                        <div class="w-full h-64 md:h-80 bg-mint flex items-center justify-center">

                            <span class="text-darkgreen font-medium">
                                Tidak ada thumbnail
                            </span>

                        </div>

                    @endif


                    <!-- PROJECT INFORMATION -->
                    <div class="p-6 md:p-8">

                        <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-5">

                            <div>

                                <!-- JENIS PROJECT -->
                                <span class="inline-block px-3 py-1 rounded-full bg-lavender text-darkpurple text-sm font-medium mb-3">
                                    {{ $project->jenis_project }}
                                </span>


                                <!-- NAMA PROJECT -->
                                <h1 class="text-2xl md:text-3xl font-bold text-navy">
                                    {{ $project->nama_project }}
                                </h1>

                            </div>


                            <!-- EDIT -->
                            <a
                                href="{{ url('/project/' . $project->id . '/edit') }}"
                                class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl bg-greenmain text-white font-medium hover:bg-darkgreen transition"
                            >
                                Edit Project
                            </a>

                        </div>


                        <!-- INFORMATION -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-8">


                            <!-- KATEGORI -->
                            <div class="p-4 rounded-xl bg-gray-50">

                                <p class="text-sm text-gray-500 mb-1">
                                    Kategori Peserta
                                </p>

                                <p class="font-semibold text-navy">
                                    {{ $project->kategori_peserta ?: '-' }}
                                </p>

                            </div>


                            <!-- TANGGAL -->
                            <div class="p-4 rounded-xl bg-gray-50">

                                <p class="text-sm text-gray-500 mb-1">
                                    Tanggal
                                </p>

                                <p class="font-semibold text-navy">

                                    {{ $project->tanggal
                                        ? \Carbon\Carbon::parse($project->tanggal)->format('d F Y')
                                        : '-'
                                    }}

                                </p>

                            </div>

                        </div>


                        <!-- DESKRIPSI -->
                        <div class="mt-8">

                            <h3 class="text-lg font-bold text-navy mb-3">
                                Deskripsi Project
                            </h3>

                            <div class="p-5 rounded-xl bg-gray-50 text-gray-600 leading-relaxed whitespace-pre-line">

                                {{ $project->deskripsi ?: 'Belum ada deskripsi project.' }}

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>