<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Access Internship</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accessPurple: "#8A1B78",
                        accessGreen: "#008A4B",
                        navy: "#263750"
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen flex items-center justify-center bg-slate-50 relative overflow-x-hidden px-4 py-6">

    <!-- Background Gradient -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">

        <div class="absolute -top-32 -left-32
                    w-72 h-72 sm:w-80 sm:h-80
                    bg-green-200/40
                    rounded-full
                    blur-3xl">
        </div>

        <div class="absolute -bottom-32 -right-32
                    w-72 h-72 sm:w-80 sm:h-80
                    bg-purple-200/40
                    rounded-full
                    blur-3xl">
        </div>

    </div>


    <!-- Login Card -->
    <div class="relative z-10 w-full max-w-[380px]">

        <div class="bg-white
                    rounded-3xl
                    shadow-xl shadow-slate-200/60
                    border border-slate-100
                    px-5 py-6
                    sm:px-7 sm:py-6">

            <!-- Logo -->
            <div class="flex justify-center mb-4">

                <img
                    src="assets/images/logo.png"
                    alt="Logo Access Media"
                    class="w-14 h-14 sm:w-16 sm:h-16 object-contain">

            </div>


            <!-- Title -->
            <div class="text-center mb-6">

                <h1 class="text-lg sm:text-xl font-bold text-navy">
                    Access Internship
                </h1>

                <p class="text-[11px] sm:text-xs text-slate-400 mt-1">
                    Masuk ke akun Anda
                </p>

            </div>


            <!-- Login Form -->
            <form id="loginForm" class="space-y-4">

                <!-- Email -->
                <div>

                    <label
                        for="email"
                        class="block text-xs font-semibold text-slate-700 mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        placeholder="Masukkan email"
                        autocomplete="email"
                        required
                        class="w-full
                               px-4 py-3
                               rounded-xl
                               border border-slate-200
                               text-sm
                               text-slate-700
                               outline-none
                               transition
                               focus:border-accessGreen
                               focus:ring-2
                               focus:ring-green-100">

                </div>


                <!-- Password -->
                <div>

                    <div class="flex items-center justify-between mb-2">

                        <label
                            for="password"
                            class="block text-xs font-semibold text-slate-700">
                            Password
                        </label>

                    </div>

                    <div class="relative">

                        <input
                            type="password"
                            id="password"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                            class="w-full
                                   px-4 py-3 pr-12
                                   rounded-xl
                                   border border-slate-200
                                   text-sm
                                   text-slate-700
                                   outline-none
                                   transition
                                   focus:border-accessGreen
                                   focus:ring-2
                                   focus:ring-green-100">

                        <!-- Show Password -->
                        <button
                            type="button"
                            id="togglePassword"
                            aria-label="Tampilkan password"
                            class="absolute
                                   right-3
                                   top-1/2
                                   -translate-y-1/2
                                   p-1
                                   text-slate-400
                                   hover:text-accessPurple
                                   transition">

                            <svg
                                id="eyeIcon"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="w-5 h-5">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12s-3.75 6.75-9.75 6.75S2.25 12 2.25 12Z" />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />

                            </svg>

                        </button>

                    </div>


                    <!-- Error Message -->
                    <p
                        id="loginMessage"
                        class="hidden text-xs text-red-500 mt-2">
                        Email atau password salah.
                    </p>

                </div>


                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between gap-3 text-xs">

                    <label class="flex items-center gap-2 text-slate-500 cursor-pointer">

                        <input
                            type="checkbox"
                            id="rememberMe"
                            class="w-3.5 h-3.5 accent-accessGreen">

                        <span>Ingat saya</span>

                    </label>


                    <a
                        href="#"
                        onclick="return false;"
                        class="text-accessPurple
                               font-medium
                               hover:underline
                               whitespace-nowrap">

                        Lupa password?

                    </a>

                </div>


                <!-- Login Button -->
                <button
                    type="submit"
                    class="w-full
                           py-3
                           rounded-xl
                           bg-[#7b116a]
                           text-white
                           text-sm
                           font-semibold
                           shadow-md
                           shadow-purple-200/30
                           hover:bg-[#761666]
                           active:scale-[0.98]
                           transition">

                    Masuk

                </button>

            </form>


            <!-- Footer -->
            <div class="text-center mt-6">

                <p class="text-[10px] text-slate-400">
                    © 2026 Access Internship
                </p>

            </div>

        </div>

    </div>


    <!-- JavaScript -->
    <script>

        // ==========================================
        // DATA LOGIN
        // ==========================================

        const emailBenar = "admin@access.com";
        const passwordBenar = "admin123";


        // ==========================================
        // ELEMENT
        // ==========================================

        const loginForm = document.getElementById("loginForm");

        const emailInput = document.getElementById("email");

        const passwordInput = document.getElementById("password");

        const loginMessage = document.getElementById("loginMessage");

        const togglePassword = document.getElementById("togglePassword");

        const eyeIcon = document.getElementById("eyeIcon");


        // ==========================================
        // LOGIN
        // ==========================================

        loginForm.addEventListener("submit", function(event) {

            event.preventDefault();

            const email = emailInput.value.trim();

            const password = passwordInput.value;


            // Cek email dan password
            if (
                email === emailBenar &&
                password === passwordBenar
            ) {

                // Simpan status login
                localStorage.setItem(
                    "isLoggedIn",
                    "true"
                );


                // Masuk ke dashboard
                window.location.href = "dashboard.html";

            } else {

                // Tampilkan pesan error
                loginMessage.classList.remove("hidden");


                // Beri efek border merah
                emailInput.classList.add(
                    "border-red-400"
                );

                passwordInput.classList.add(
                    "border-red-400"
                );

            }

        });


        // ==========================================
        // SHOW / HIDE PASSWORD
        // ==========================================

        togglePassword.addEventListener(
            "click",
            function() {

                if (
                    passwordInput.type === "password"
                ) {

                    passwordInput.type = "text";

                    // Icon mata terbuka
                    eyeIcon.innerHTML = `
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.98 8.223A10.477 10.477 0 0 0 2.25 12s3.75 6.75 9.75 6.75c1.69 0 3.25-.4 4.58-1.1" />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6.228 6.228A10.45 10.45 0 0 1 12 5.25c6 0 9.75 6.75 9.75 6.75a18.8 18.8 0 0 1-2.184 2.91" />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M6.228 6.228 3 3m3.228 3.228 4.114 4.114m3.058 3.058L21 21" />
                    `;

                } else {

                    passwordInput.type = "password";

                    // Icon mata tertutup
                    eyeIcon.innerHTML = `
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 12s3.75-6.75 9.75-6.75S21.75 12 21.75 12s-3.75 6.75-9.75 6.75S2.25 12 2.25 12Z" />

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    `;

                }

            }
        );


        // ==========================================
        // HILANGKAN ERROR SAAT MENGETIK ULANG
        // ==========================================

        emailInput.addEventListener(
            "input",
            function() {

                loginMessage.classList.add("hidden");

                emailInput.classList.remove(
                    "border-red-400"
                );

            }
        );


        passwordInput.addEventListener(
            "input",
            function() {

                loginMessage.classList.add("hidden");

                passwordInput.classList.remove(
                    "border-red-400"
                );

            }
        );

    </script>

</body>
</html>