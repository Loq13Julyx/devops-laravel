<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Cafe Bonanza</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        body { font-family: 'Poppins', sans-serif; }

        /* ── FADE IN ANIMATIONS ── */
        @keyframes fadeInLeft {
            from { opacity: 0; transform: translateX(-30px); }
            to   { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInRight {
            from { opacity: 0; transform: translateX(30px); }
            to   { opacity: 1; transform: translateX(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50%       { transform: translateY(-6px); }
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .left-panel  { animation: fadeInLeft  0.7s ease forwards; }
        .right-panel { animation: fadeInRight 0.7s ease 0.1s forwards; opacity: 0; }

        .anim-1 { animation: fadeInUp 0.6s ease 0.2s forwards; opacity: 0; }
        .anim-2 { animation: fadeInUp 0.6s ease 0.3s forwards; opacity: 0; }
        .anim-3 { animation: fadeInUp 0.6s ease 0.4s forwards; opacity: 0; }
        .anim-4 { animation: fadeInUp 0.6s ease 0.5s forwards; opacity: 0; }
        .anim-5 { animation: fadeInUp 0.6s ease 0.6s forwards; opacity: 0; }
        .anim-6 { animation: fadeInUp 0.6s ease 0.7s forwards; opacity: 0; }

        .float-badge { animation: float 3s ease-in-out infinite; }

        /* ── SPINNER ── */
        .spinner {
            display: none;
            width: 18px; height: 18px;
            border: 2px solid rgba(255,255,255,0.4);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
        }
        .btn-loading .btn-text { display: none; }
        .btn-loading .spinner  { display: inline-block; }

        /* ── STARS ── */
        .star { color: #f59e0b; }

        /* ── LEFT QUOTE ── */
        .quote-mark {
            font-family: 'Playfair Display', serif;
            font-size: 6rem; line-height: 0.8;
            color: rgba(255,255,255,0.15);
            display: block; margin-bottom: -1rem;
        }
    </style>
</head>

<body class="min-h-screen flex flex-col md:flex-row">

    <!-- ── LEFT PANEL ── -->
    <div class="left-panel w-full md:w-[55%] min-h-[60vh] md:min-h-screen relative flex flex-col justify-center items-center md:items-start px-6 md:px-16 py-16 md:py-20 text-white"
        style="background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;">

        <div class="absolute inset-0 bg-gradient-to-br from-black/75 via-black/60 to-black/40"></div>

        <div class="relative z-10 max-w-md text-center md:text-left">

            <!-- Logo badge -->
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 mb-6 text-xs font-semibold tracking-widest uppercase">
                <i class="fas fa-coffee text-amber-400"></i>
                Cafe Bonanza
            </div>

            <!-- Quote -->
            <span class="quote-mark">"</span>
            <h1 class="font-bold text-3xl md:text-4xl mb-4 drop-shadow-lg leading-tight" style="font-family:'Playfair Display',serif;">
                Setiap Tegukan<br>Punya <em>Ceritanya</em>
            </h1>
            <p class="text-base md:text-lg mb-8 leading-relaxed drop-shadow-md text-white/80 font-light">
                Nikmati kopi pilihan dan sajian terbaik. Masuk untuk mulai memesan menu favorit Anda.
            </p>

            <!-- Rating badge -->
            <div class="float-badge inline-flex items-center gap-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl px-5 py-3">
                <div class="flex flex-col">
                    <div class="flex gap-0.5 mb-1">
                        <i class="fas fa-star star text-sm"></i>
                        <i class="fas fa-star star text-sm"></i>
                        <i class="fas fa-star star text-sm"></i>
                        <i class="fas fa-star star text-sm"></i>
                        <i class="fas fa-star star text-sm"></i>
                    </div>
                    <span class="text-xs text-white/70">4.9 · 5.000+ pelanggan puas</span>
                </div>
                <div class="w-px h-8 bg-white/20"></div>
                <div class="text-center">
                    <div class="text-lg font-bold text-amber-400">50+</div>
                    <div class="text-xs text-white/60">Menu Pilihan</div>
                </div>
            </div>

        </div>
    </div>

    <!-- ── RIGHT PANEL ── -->
    <div class="right-panel w-full md:w-[45%] min-h-[40vh] md:min-h-screen flex flex-col justify-center items-center px-6 md:px-16 py-10 md:py-0 bg-white">

        <div class="w-full max-w-sm">

            <div class="anim-1">
                <h1 class="text-[#222222] font-bold text-xl md:text-2xl mb-1 md:mb-2 text-center">
                    Halo, selamat datang! 👋
                </h1>
                <p class="text-[#555555] text-sm mb-6 md:mb-8 text-center">
                    Masuk ke sistem Cafe Bonanza untuk melanjutkan aktivitas Anda.
                </p>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            @if (session('error'))
                <div class="anim-1 mb-4 rounded-xl border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-3" id="loginForm">
                @csrf

                <!-- EMAIL -->
                <div class="anim-2">
                    <div class="relative">
                        <input
                            name="email"
                            type="email"
                            placeholder="Email"
                            value="{{ old('email') }}"
                            required autofocus
                            class="w-full rounded-full border px-4 py-3 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8B5E3C] {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}" />
                        <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                    @error('email')
                        <p class="mt-1 px-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- PASSWORD -->
                <div class="anim-3">
                    <div class="relative">
                        <input
                            id="password"
                            name="password"
                            type="password"
                            placeholder="Password"
                            required
                            class="w-full rounded-full border px-4 py-3 pl-12 pr-10 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8B5E3C] {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}" />
                        <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 focus:outline-none hover:text-gray-600">
                            <i id="eyeIcon" class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                    @error('password')
                        <p class="mt-1 px-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- FORGOT + REMEMBER -->
                <div class="anim-4 flex items-center justify-between text-sm pt-1">
                    <label for="remember_me" class="inline-flex items-center gap-2 text-gray-600 cursor-pointer">
                        <input id="remember_me" type="checkbox" name="remember"
                            class="rounded border-gray-300 text-[#8B5E3C] focus:ring-[#8B5E3C]" />
                        <span>Ingat saya</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-[#8B5E3C] hover:underline font-medium">
                            Lupa Password?
                        </a>
                    @endif
                </div>

                <!-- SUBMIT BUTTON -->
                <div class="anim-5">
                    <button id="submitBtn" type="submit"
                        class="mt-2 w-full rounded-full bg-[#8B5E3C] py-3 text-center text-sm font-medium text-white transition-colors hover:bg-[#6f472c] flex items-center justify-center gap-2">
                        <span class="btn-text">Masuk</span>
                        <div class="spinner"></div>
                    </button>
                </div>

                <!-- REGISTER LINK -->
                @if (Route::has('register'))
                    <div class="anim-6">
                        <p class="text-center text-sm text-gray-600">
                            Belum punya akun?
                            <a href="{{ route('register') }}" class="font-semibold text-[#8B5E3C] hover:underline">
                                Daftar Sekarang
                            </a>
                        </p>
                    </div>
                @endif

            </form>
        </div>
    </div>

    <script>
        // Toggle password visibility
        function togglePassword() {
            const input = document.getElementById('password');
            const icon  = document.getElementById('eyeIcon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            }
        }

        // Loading spinner on submit
        document.getElementById('loginForm').addEventListener('submit', function () {
            const btn = document.getElementById('submitBtn');
            btn.classList.add('btn-loading');
            btn.disabled = true;
        });
    </script>

</body>
</html>