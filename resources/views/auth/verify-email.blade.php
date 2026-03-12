<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verifikasi Email - Cafe Bonanza</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

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
        @keyframes pulse-ring {
            0%   { transform: scale(1);   opacity: 0.4; }
            100% { transform: scale(1.5); opacity: 0; }
        }

        .left-panel  { animation: fadeInLeft  0.7s ease forwards; }
        .right-panel { animation: fadeInRight 0.7s ease 0.1s forwards; opacity: 0; }

        .anim-1 { animation: fadeInUp 0.6s ease 0.2s  forwards; opacity: 0; }
        .anim-2 { animation: fadeInUp 0.6s ease 0.3s  forwards; opacity: 0; }
        .anim-3 { animation: fadeInUp 0.6s ease 0.4s  forwards; opacity: 0; }
        .anim-4 { animation: fadeInUp 0.6s ease 0.5s  forwards; opacity: 0; }
        .anim-5 { animation: fadeInUp 0.6s ease 0.6s  forwards; opacity: 0; }

        .float-badge  { animation: float 3s ease-in-out infinite; }
        .pulse-ring   { animation: pulse-ring 1.8s ease-out infinite; }

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
        .btn-countdown { background: #b08060 !important; cursor: not-allowed !important; }

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

            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full px-4 py-2 mb-6 text-xs font-semibold tracking-widest uppercase">
                <i class="fas fa-coffee text-amber-400"></i>
                Cafe Bonanza
            </div>

            <span class="quote-mark">"</span>
            <h1 class="font-bold text-3xl md:text-4xl mb-4 drop-shadow-lg leading-tight" style="font-family:'Playfair Display',serif;">
                Satu Langkah Lagi<br>Menuju <em>Kopi Terbaik</em>
            </h1>
            <p class="text-base md:text-lg mb-8 leading-relaxed drop-shadow-md text-white/80 font-light">
                Verifikasi email Anda untuk mulai menikmati semua layanan dan kemudahan dari Cafe Bonanza.
            </p>

            <div class="float-badge inline-flex flex-col gap-3 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl px-5 py-4">
                <p class="text-xs font-semibold tracking-widest uppercase text-amber-400 mb-1">Cara Verifikasi</p>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-amber-400 text-xs font-bold">1</span>
                    </div>
                    <span class="text-white/80">Buka email yang Anda daftarkan</span>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-amber-400 text-xs font-bold">2</span>
                    </div>
                    <span class="text-white/80">Klik link verifikasi di email</span>
                </div>
                <div class="flex items-center gap-3 text-sm">
                    <div class="w-7 h-7 rounded-full bg-amber-400/20 flex items-center justify-center flex-shrink-0">
                        <span class="text-amber-400 text-xs font-bold">3</span>
                    </div>
                    <span class="text-white/80">Akun aktif & siap digunakan</span>
                </div>
            </div>

        </div>
    </div>

    <!-- ── RIGHT PANEL ── -->
    <div class="right-panel w-full md:w-[45%] min-h-[40vh] md:min-h-screen flex flex-col justify-center items-center px-6 md:px-16 py-10 md:py-0 bg-white">

        <div class="w-full max-w-sm text-center">

            <!-- Icon dengan pulse ring -->
            <div class="anim-1 relative mx-auto mb-6 flex h-20 w-20 items-center justify-center">
                <div class="pulse-ring absolute inset-0 rounded-full bg-amber-200"></div>
                <div class="relative flex h-20 w-20 items-center justify-center rounded-full bg-amber-50 border-4 border-[#8B5E3C]/15 shadow-lg">
                    <i class="fas fa-envelope-open-text text-3xl text-[#8B5E3C]"></i>
                </div>
            </div>

            <div class="anim-2">
                <h1 class="text-[#222222] font-bold text-xl md:text-2xl mb-2">
                    Verifikasi Email Anda
                </h1>
                <p class="text-[#555555] text-sm mb-2 leading-relaxed">
                    Kami telah mengirimkan link verifikasi ke email Anda. Silakan cek inbox dan klik link tersebut untuk mengaktifkan akun.
                </p>
                <p class="text-xs text-gray-400 mb-5">
                    Cek folder <strong>Spam</strong> jika email tidak muncul dalam beberapa menit.
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="anim-2 mb-5 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                    <i class="fas fa-check-circle mr-1"></i>
                    Link verifikasi baru telah dikirim ke email Anda.
                </div>
            @endif

            <!-- TOMBOL KIRIM ULANG -->
            <div class="anim-3">
                <form method="POST" action="{{ route('verification.send') }}" id="resendForm">
                    @csrf
                    <button id="resendBtn" type="submit"
                        class="w-full rounded-full bg-[#8B5E3C] py-3 text-sm font-medium text-white transition-colors hover:bg-[#6f472c] flex items-center justify-center gap-2">
                        <span class="btn-text">
                            <i class="fas fa-paper-plane mr-2"></i>Kirim Ulang Email Verifikasi
                        </span>
                        <div class="spinner"></div>
                    </button>
                </form>
            </div>

            <!-- Countdown -->
            <div class="anim-4 mt-2" id="countdownWrap" style="display:none;">
                <p class="text-xs text-gray-400">
                    Tunggu <strong id="countdownNum" class="text-[#8B5E3C]">60</strong> detik sebelum kirim ulang
                </p>
            </div>

            <!-- LOGOUT -->
            <div class="anim-5">
                <form method="POST" action="{{ route('logout') }}" class="mt-3">
                    @csrf
                    <button type="submit"
                        class="w-full rounded-full border border-gray-300 py-3 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-50">
                        <i class="fas fa-sign-out-alt mr-2"></i>
                        Keluar
                    </button>
                </form>
            </div>

        </div>
    </div>

    <script>
        const btn           = document.getElementById('resendBtn');
        const countdownWrap = document.getElementById('countdownWrap');
        const countdownNum  = document.getElementById('countdownNum');
        const form          = document.getElementById('resendForm');

        // Kalau baru kirim ulang, langsung start countdown
        @if (session('status') == 'verification-link-sent')
            startCountdown();
        @endif

        // Spinner saat submit
        form.addEventListener('submit', function () {
            btn.classList.add('btn-loading');
            btn.disabled = true;
        });

        function startCountdown() {
            let seconds = 60;
            btn.disabled = true;
            btn.classList.add('btn-countdown');
            countdownWrap.style.display = 'block';
            countdownNum.textContent = seconds;

            const timer = setInterval(() => {
                seconds--;
                countdownNum.textContent = seconds;
                if (seconds <= 0) {
                    clearInterval(timer);
                    btn.disabled = false;
                    btn.classList.remove('btn-countdown');
                    countdownWrap.style.display = 'none';
                }
            }, 1000);
        }
    </script>

</body>
</html>