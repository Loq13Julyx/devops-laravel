<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maintenance - Cafe Bonanza</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        body { font-family: 'Poppins', sans-serif; }

        .bg-cafe {
            background: url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1200&q=80') no-repeat center center/cover;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50%       { transform: translateY(-12px); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @keyframes spin-gear {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }

        @keyframes spin-gear-reverse {
            from { transform: rotate(0deg); }
            to   { transform: rotate(-360deg); }
        }

        @keyframes progress {
            0%   { width: 0%; }
            100% { width: 100%; }
        }

        .float-anim      { animation: float 3s ease-in-out infinite; }
        .fade-in-1       { animation: fadeInUp 0.6s ease forwards; opacity: 0; }
        .fade-in-2       { animation: fadeInUp 0.6s ease 0.15s forwards; opacity: 0; }
        .fade-in-3       { animation: fadeInUp 0.6s ease 0.3s forwards; opacity: 0; }
        .fade-in-4       { animation: fadeInUp 0.6s ease 0.45s forwards; opacity: 0; }
        .gear-spin       { animation: spin-gear 4s linear infinite; display: inline-block; }
        .gear-spin-rev   { animation: spin-gear-reverse 3s linear infinite; display: inline-block; }
        .progress-bar    { animation: progress 3s ease-in-out infinite alternate; }
    </style>
</head>

<body class="min-h-screen flex flex-col md:flex-row">

    <!-- LEFT -->
    <div class="hidden md:flex w-[55%] min-h-screen bg-cafe relative flex-col justify-end px-16 py-16 text-white">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
        <div class="relative z-10">
            <p class="text-xs uppercase tracking-widest text-white/60 mb-3">Cafe Bonanza</p>
            <h2 class="text-4xl font-extrabold leading-tight mb-4">
                Kami sedang<br>berbenah sebentar.
            </h2>
            <p class="text-white/70 text-sm max-w-xs leading-relaxed">
                Cafe Bonanza sedang dalam pemeliharaan untuk memberikan pengalaman yang lebih baik. Kami akan segera kembali!
            </p>
            <div class="mt-8 flex gap-2">
                <div class="h-1 w-12 rounded-full bg-[#8B5E3C]"></div>
                <div class="h-1 w-4 rounded-full bg-white/30"></div>
                <div class="h-1 w-2 rounded-full bg-white/20"></div>
            </div>
        </div>
    </div>

    <!-- RIGHT -->
    <div class="w-full md:w-[45%] min-h-screen flex flex-col justify-center items-center px-8 py-16 bg-white relative overflow-hidden">

        <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-blue-50 opacity-40"></div>
        <div class="absolute -bottom-16 -left-16 w-48 h-48 rounded-full bg-amber-50 opacity-50"></div>

        <div class="relative z-10 text-center w-full max-w-sm">

            <!-- Icon gear berputar -->
            <div class="fade-in-1 float-anim mx-auto mb-6 flex h-24 w-24 items-center justify-center rounded-full bg-blue-50 border-4 border-blue-100 shadow-lg relative">
                <i class="gear-spin fas fa-cog text-3xl text-blue-400 absolute"></i>
                <i class="gear-spin-rev fas fa-cog text-lg text-blue-200 absolute" style="top: 10px; right: 10px;"></i>
            </div>

            <!-- 503 watermark -->
            <p class="fade-in-2 text-8xl font-extrabold text-blue-400/15 leading-none select-none -mb-4">503</p>

            <h1 class="fade-in-3 text-2xl font-bold text-[#222222] mt-2 mb-2">
                Sedang Maintenance
            </h1>

            <p class="fade-in-3 text-sm text-gray-500 mb-6 leading-relaxed">
                Sistem kami sedang dalam pemeliharaan untuk meningkatkan layanan. Silakan kembali beberapa saat lagi.
            </p>

            <!-- Progress bar animasi -->
            <div class="fade-in-3 mb-8">
                <div class="w-full bg-gray-100 rounded-full h-2 overflow-hidden">
                    <div class="progress-bar h-2 rounded-full bg-gradient-to-r from-[#8B5E3C] to-amber-400"></div>
                </div>
                <p class="text-xs text-gray-400 mt-2">Sedang memproses pembaruan...</p>
            </div>

            <div class="fade-in-4 flex flex-col gap-3">
                <button onclick="window.location.reload()"
                    class="w-full rounded-full bg-[#8B5E3C] py-3 text-sm font-medium text-white transition-colors hover:bg-[#6f472c]">
                    <i class="fas fa-redo mr-2"></i>
                    Coba Lagi
                </button>
            </div>

            <p class="fade-in-4 mt-8 text-xs text-gray-300">
                &copy; {{ date('Y') }} Cafe Bonanza. All rights reserved.
            </p>
        </div>
    </div>

</body>
</html>