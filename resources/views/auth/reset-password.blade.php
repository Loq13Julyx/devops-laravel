<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password - Cafe Bonanza</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }

        /* ── ANIMATIONS ── */
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

        .anim-1 { animation: fadeInUp 0.6s ease 0.2s  forwards; opacity: 0; }
        .anim-2 { animation: fadeInUp 0.6s ease 0.3s  forwards; opacity: 0; }
        .anim-3 { animation: fadeInUp 0.6s ease 0.35s forwards; opacity: 0; }
        .anim-4 { animation: fadeInUp 0.6s ease 0.4s  forwards; opacity: 0; }
        .anim-5 { animation: fadeInUp 0.6s ease 0.45s forwards; opacity: 0; }
        .anim-6 { animation: fadeInUp 0.6s ease 0.5s  forwards; opacity: 0; }
        .anim-7 { animation: fadeInUp 0.6s ease 0.55s forwards; opacity: 0; }

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
        style="background:url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;">

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
                Buat Password<br><em>Baru yang Kuat</em>
            </h1>
            <p class="text-base md:text-lg mb-8 leading-relaxed drop-shadow-md text-white/80 font-light">
                Pastikan password baru Anda aman dan mudah diingat untuk melindungi akun Cafe Bonanza Anda.
            </p>

            <!-- Tips badge -->
            <div class="float-badge inline-flex flex-col gap-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl px-5 py-4">
                <p class="text-xs font-semibold tracking-widest uppercase text-amber-400 mb-1">Tips Password Kuat</p>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check text-amber-400 text-xs"></i>
                    </div>
                    <span class="text-white/80">Minimal 8 karakter</span>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check text-amber-400 text-xs"></i>
                    </div>
                    <span class="text-white/80">Kombinasi huruf besar & angka</span>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check text-amber-400 text-xs"></i>
                    </div>
                    <span class="text-white/80">Tambahkan karakter spesial (!@#$)</span>
                </div>
            </div>

        </div>
    </div>

    <!-- ── RIGHT PANEL ── -->
    <div class="right-panel w-full md:w-[45%] min-h-[40vh] md:min-h-screen flex flex-col justify-center items-center px-6 md:px-16 py-10 md:py-0 bg-white">

        <div class="w-full max-w-sm">

            <!-- Header -->
            <div class="anim-1">
                <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-amber-50 border-2 border-[#8B5E3C]/20">
                    <i class="fas fa-shield-alt text-2xl text-[#8B5E3C]"></i>
                </div>
                <h1 class="text-[#222222] font-bold text-xl md:text-2xl mb-2 text-center">
                    Reset Password
                </h1>
                <p class="text-[#555555] text-sm mb-6 text-center">
                    Silakan masukkan password baru Anda.
                </p>
            </div>

            <!-- Notifications -->
            @if (session('status'))
                <div class="anim-1 mb-4 rounded-xl bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-700">
                    <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="anim-1 mb-4 rounded-xl bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                    <ul class="space-y-1">
                        @foreach ($errors->all() as $error)
                            <li><i class="fas fa-exclamation-circle mr-1"></i>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('password.store') }}" class="space-y-3" id="resetForm">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- EMAIL -->
                <div class="anim-2">
                    <div class="relative">
                        <input name="email" type="email" placeholder="Email"
                            value="{{ old('email', $request->email) }}" required autofocus
                            class="w-full rounded-full border px-4 py-3 pl-12 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8B5E3C] {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}">
                        <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                    @error('email')
                        <p class="mt-1 px-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- PASSWORD BARU -->
                <div class="anim-3">
                    <div class="relative">
                        <input id="password" name="password" type="password" placeholder="Password Baru"
                            required oninput="checkStrength(this.value)"
                            class="w-full rounded-full border px-4 py-3 pl-12 pr-11 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8B5E3C] {{ $errors->has('password') ? 'border-red-500' : 'border-gray-300' }}">
                        <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <button type="button" onclick="togglePassword('password', 'eye-password')"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <i id="eye-password" class="fas fa-eye-slash"></i>
                        </button>
                    </div>

                    <!-- Password strength indicator -->
                    <div id="strengthWrap" class="mt-2 px-1" style="display:none;">
                        <div class="flex gap-1 mb-1">
                            <div class="flex-1 h-1 rounded-full bg-gray-200 overflow-hidden">
                                <div id="bar1" class="h-full rounded-full transition-all duration-300" style="width:0%"></div>
                            </div>
                            <div class="flex-1 h-1 rounded-full bg-gray-200 overflow-hidden">
                                <div id="bar2" class="h-full rounded-full transition-all duration-300" style="width:0%"></div>
                            </div>
                            <div class="flex-1 h-1 rounded-full bg-gray-200 overflow-hidden">
                                <div id="bar3" class="h-full rounded-full transition-all duration-300" style="width:0%"></div>
                            </div>
                            <div class="flex-1 h-1 rounded-full bg-gray-200 overflow-hidden">
                                <div id="bar4" class="h-full rounded-full transition-all duration-300" style="width:0%"></div>
                            </div>
                        </div>
                        <p id="strengthText" class="text-xs px-1"></p>
                    </div>

                    @error('password')
                        <p class="mt-1 px-2 text-xs text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- KONFIRMASI PASSWORD -->
                <div class="anim-4">
                    <div class="relative">
                        <input id="password_confirmation" name="password_confirmation" type="password"
                            placeholder="Konfirmasi Password" required oninput="checkMatch()"
                            class="w-full rounded-full border border-gray-300 px-4 py-3 pl-12 pr-11 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8B5E3C]">
                        <i class="fas fa-lock absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        <button type="button" onclick="togglePassword('password_confirmation', 'eye-confirm')"
                            class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 focus:outline-none">
                            <i id="eye-confirm" class="fas fa-eye-slash"></i>
                        </button>
                    </div>
                    <p id="matchText" class="mt-1 text-xs px-2 hidden"></p>
                </div>

                <!-- BUTTON -->
                <div class="anim-5">
                    <button id="submitBtn" type="submit"
                        class="mt-2 w-full rounded-full bg-[#8B5E3C] py-3 text-sm font-medium text-white transition-colors hover:bg-[#6f472c] flex items-center justify-center gap-2">
                        <span class="btn-text">
                            <i class="fas fa-shield-alt mr-2"></i>Reset Password
                        </span>
                        <div class="spinner"></div>
                    </button>
                </div>

                <div class="anim-6">
                    <p class="text-center text-sm text-gray-600">
                        <a href="{{ route('login') }}" class="font-semibold text-[#8B5E3C] hover:underline">
                            <i class="fas fa-arrow-left mr-1"></i> Kembali ke Login
                        </a>
                    </p>
                </div>

            </form>
        </div>
    </div>

    <script>
        // Toggle password visibility
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon  = document.getElementById(iconId);
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            }
        }

        // Password strength checker
        function checkStrength(val) {
            const wrap = document.getElementById('strengthWrap');
            const text = document.getElementById('strengthText');
            const bars = ['bar1', 'bar2', 'bar3', 'bar4'];

            if (!val) { wrap.style.display = 'none'; return; }
            wrap.style.display = 'block';

            let score = 0;
            if (val.length >= 8)           score++;
            if (/[A-Z]/.test(val))         score++;
            if (/[0-9]/.test(val))         score++;
            if (/[^A-Za-z0-9]/.test(val))  score++;

            const colors = ['#ef4444', '#f97316', '#eab308', '#22c55e'];
            const labels = [
                { text: 'Sangat Lemah', color: '#ef4444' },
                { text: 'Lemah',        color: '#f97316' },
                { text: 'Cukup',        color: '#eab308' },
                { text: 'Kuat',         color: '#22c55e' },
            ];

            bars.forEach((id, i) => {
                const bar = document.getElementById(id);
                if (i < score) {
                    bar.style.width      = '100%';
                    bar.style.background = colors[score - 1];
                } else {
                    bar.style.width = '0%';
                }
            });

            const info = labels[score - 1] || labels[0];
            text.textContent = 'Kekuatan: ' + info.text;
            text.style.color = info.color;

            checkMatch();
        }

        // Password match checker
        function checkMatch() {
            const pw      = document.getElementById('password').value;
            const confirm = document.getElementById('password_confirmation').value;
            const msg     = document.getElementById('matchText');

            if (!confirm) { msg.classList.add('hidden'); return; }
            msg.classList.remove('hidden');

            if (pw === confirm) {
                msg.textContent = '✓ Password cocok';
                msg.style.color = '#22c55e';
            } else {
                msg.textContent = '✗ Password tidak cocok';
                msg.style.color = '#ef4444';
            }
        }

        // Loading spinner on submit
        document.getElementById('resetForm').addEventListener('submit', function () {
            const btn = document.getElementById('submitBtn');
            btn.classList.add('btn-loading');
            btn.disabled = true;
        });
    </script>

</body>
</html>