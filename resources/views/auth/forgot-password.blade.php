<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lupa Password - Cafe Bonanza</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />

    <style>
        body { font-family: 'Poppins', sans-serif; }

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
        @keyframes popIn {
            0%   { opacity: 0; transform: scale(0.8); }
            70%  { transform: scale(1.05); }
            100% { opacity: 1; transform: scale(1); }
        }

        .left-panel  { animation: fadeInLeft  0.7s ease forwards; }
        .right-panel { animation: fadeInRight 0.7s ease 0.1s forwards; opacity: 0; }

        .anim-1 { animation: fadeInUp 0.6s ease 0.2s forwards; opacity: 0; }
        .anim-2 { animation: fadeInUp 0.6s ease 0.3s forwards; opacity: 0; }
        .anim-3 { animation: fadeInUp 0.6s ease 0.4s forwards; opacity: 0; }
        .anim-4 { animation: fadeInUp 0.6s ease 0.5s forwards; opacity: 0; }

        .success-pop { animation: popIn 0.5s ease forwards; }
        .float-badge { animation: float 3s ease-in-out infinite; }

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
        style="background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;">

        <div class="absolute inset-0 bg-gradient-to-br from-black/75 via-black/60 to-black/40"></div>

        <div class="relative z-10 max-w-md text-center md:text-left">

            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 mb-6 text-xs font-semibold tracking-widest uppercase">
                <i class="fas fa-coffee text-amber-400"></i>
                Cafe Bonanza
            </div>

            <span class="quote-mark">"</span>
            <h1 class="font-bold text-3xl md:text-4xl mb-4 drop-shadow-lg leading-tight" style="font-family:'Playfair Display',serif;">
                Jangan Khawatir,<br><em>Kami Siap</em> Membantu
            </h1>
            <p class="text-base md:text-lg mb-8 leading-relaxed drop-shadow-md text-white/80 font-light">
                Masukkan email Anda dan kami akan segera mengirimkan link untuk mengatur ulang password.
            </p>

            <div class="float-badge inline-flex flex-col gap-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl px-5 py-4">
                <p class="text-xs font-semibold tracking-widest uppercase text-amber-400 mb-1">Langkah Reset Password</p>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-amber-400 text-xs font-bold">1</span>
                    </div>
                    <span class="text-white/80">Masukkan email akun Anda</span>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-amber-400 text-xs font-bold">2</span>
                    </div>
                    <span class="text-white/80">Cek email & klik link reset</span>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-amber-400 text-xs font-bold">3</span>
                    </div>
                    <span class="text-white/80">Buat password baru & masuk</span>
                </div>
            </div>

        </div>
    </div>

    <!-- ── RIGHT PANEL ── -->
    <div class="right-panel w-full md:w-[45%] min-h-[40vh] md:min-h-screen flex flex-col justify-center items-center px-6 md:px-16 py-10 md:py-0 bg-white">

        <div class="w-full max-w-sm">

            @if (session('status'))
                {{-- SUCCESS STATE --}}
                <div class="success-pop flex flex-col items-center text-center">

                    <div class="mb-5 flex h-20 w-20 items-center justify-center rounded-full bg-green-100 border-4 border-green-200 shadow-lg">
                        <i class="fas fa-envelope-open-text text-3xl text-green-600"></i>
                    </div>

                    <h1 class="text-[#222222] font-bold text-xl md:text-2xl mb-2">
                        Email Terkirim! 🎉
                    </h1>

                    <p class="text-[#555555] text-sm mb-3 leading-relaxed">
                        {{ session('status') }}
                    </p>

                    <div class="w-full rounded-xl bg-amber-50 border border-amber-100 px-4 py-3 mb-6 text-left">
                        <p class="text-xs text-amber-700 font-medium mb-1">
                            <i class="fas fa-lightbulb mr-1"></i> Tips
                        </p>
                        <p class="text-xs text-amber-600 leading-relaxed">
                            Cek folder <strong>Spam</strong> atau <strong>Promosi</strong> jika email tidak muncul dalam beberapa menit. Link berlaku selama <strong>60 menit</strong>.
                        </p>
                    </div>

                    <a href="{{ route('login') }}"
                        class="w-full rounded-full bg-[#8B5E3C] py-3 text-center text-sm font-medium text-white transition-colors hover:bg-[#6f472c]">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Kembali ke Login
                    </a>

                    <p class="mt-4 text-sm text-gray-500">
                        Tidak menerima email?
                        <a href="{{ route('password.request') }}" class="font-semibold text-[#8B5E3C] hover:underline">
                            Kirim ulang
                        </a>
                    </p>
                </div>

            @else
                {{-- FORM STATE --}}
                <div class="anim-1">
                    <div class="mx-auto mb-5 flex h-16 w-16 items-center justify-center rounded-full bg-amber-50 border-2 border-[#8B5E3C]/20">
                        <i class="fas fa-key text-2xl text-[#8B5E3C]"></i>
                    </div>
                    <h1 class="text-[#222222] font-bold text-xl md:text-2xl mb-1 text-center">
                        Lupa Password?
                    </h1>
                    <p class="text-[#555555] text-sm mb-6 text-center leading-relaxed">
                        Masukkan email Anda untuk menerima link reset password.
                    </p>
                </div>

                <form method="POST" action="{{ route('password.email') }}" class="space-y-3" id="forgotForm">
                    @csrf

                    <div class="anim-2">
                        <div class="relative">
                            <input name="email" type="email" placeholder="Alamat Email"
                                value="{{ old('email') }}" required autofocus
                                class="w-full rounded-full border px-4 py-3 pl-12 pr-4 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-1 focus:ring-[#8B5E3C] {{ $errors->has('email') ? 'border-red-500' : 'border-gray-300' }}" />
                            <i class="fas fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                        </div>
                        @error('email')
                            <p class="mt-1 px-2 text-xs text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="anim-3">
                        <button id="submitBtn" type="submit"
                            class="mt-2 w-full rounded-full bg-[#8B5E3C] py-3 text-center text-sm font-medium text-white transition-colors hover:bg-[#6f472c] flex items-center justify-center gap-2">
                            <span class="btn-text">
                                <i class="fas fa-paper-plane mr-2"></i>Kirim Link Reset
                            </span>
                            <div class="spinner"></div>
                        </button>
                    </div>

                    <div class="anim-4">
                        <p class="text-center text-sm text-gray-600">
                            Ingat password?
                            <a href="{{ route('login') }}" class="font-semibold text-[#8B5E3C] hover:underline">
                                Kembali ke Login
                            </a>
                        </p>
                    </div>
                </form>
            @endif

        </div>
    </div>

    <script>
        const form = document.getElementById('forgotForm');
        if (form) {
            form.addEventListener('submit', function () {
                const btn = document.getElementById('submitBtn');
                btn.classList.add('btn-loading');
                btn.disabled = true;
            });
        }
    </script>

</body>
</html>