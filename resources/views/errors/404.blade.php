<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Tidak Ditemukan - Cafe Bonanza</title>

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

        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }

        .float-anim  { animation: float 3s ease-in-out infinite; }
        .fade-in-1   { animation: fadeInUp 0.6s ease forwards; opacity: 0; }
        .fade-in-2   { animation: fadeInUp 0.6s ease 0.15s forwards; opacity: 0; }
        .fade-in-3   { animation: fadeInUp 0.6s ease 0.3s forwards; opacity: 0; }
        .fade-in-4   { animation: fadeInUp 0.6s ease 0.45s forwards; opacity: 0; }
        .spin-slow   { animation: spin-slow 10s linear infinite; }
    </style>
</head>

<body class="min-h-screen flex flex-col md:flex-row">

    <!-- LEFT -->
    <div class="hidden md:flex w-[55%] min-h-screen bg-cafe relative flex-col justify-end px-16 py-16 text-white">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
        <div class="relative z-10">
            <p class="text-xs uppercase tracking-widest text-white/60 mb-3">Cafe Bonanza</p>
            <h2 class="text-4xl font-extrabold leading-tight mb-4">
                Sepertinya Anda<br>tersesat di sini.
            </h2>
            <p class="text-white/70 text-sm max-w-xs leading-relaxed">
                Halaman yang Anda cari tidak ada atau sudah dipindahkan. Yuk kembali dan temukan menu favorit Anda!
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

        <div class="absolute -top-20 -right-20 w-64 h-64 rounded-full bg-amber-50 opacity-60"></div>
        <div class="absolute -bottom-16 -left-16 w-48 h-48 rounded-full bg-orange-50 opacity-50"></div>

        <!-- Lingkaran dekorasi berputar -->
        <div class="spin-slow absolute top-10 right-10 w-16 h-16 rounded-full border-4 border-dashed border-[#8B5E3C]/10"></div>

        <div class="relative z-10 text-center w-full max-w-sm">

            <!-- Icon -->
            <div class="fade-in-1 float-anim mx-auto mb-6 flex h-24 w-24 items-center justify-center rounded-full bg-amber-50 border-4 border-[#8B5E3C]/10 shadow-lg">
                <i class="fas fa-map-signs text-4xl text-[#8B5E3C]"></i>
            </div>

            <!-- 404 watermark -->
            <p class="fade-in-2 text-8xl font-extrabold text-[#8B5E3C]/15 leading-none select-none -mb-4">404</p>

            <h1 class="fade-in-3 text-2xl font-bold text-[#222222] mt-2 mb-2">
                Halaman Tidak Ditemukan
            </h1>

            <p class="fade-in-3 text-sm text-gray-500 mb-8 leading-relaxed">
                Halaman yang Anda cari tidak tersedia. Mungkin URL salah atau halaman sudah dihapus.
            </p>

            <div class="fade-in-4 flex flex-col gap-3">
                <a href="{{ route('home') }}"
                    class="w-full rounded-full bg-[#8B5E3C] py-3 text-sm font-medium text-white transition-colors hover:bg-[#6f472c]">
                    <i class="fas fa-home mr-2"></i>
                    Kembali ke Beranda
                </a>
                <a href="{{ url()->previous() }}"
                    class="w-full rounded-full border border-gray-300 py-3 text-sm font-medium text-gray-600 transition-colors hover:bg-gray-50">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Halaman Sebelumnya
                </a>
            </div>

            <p class="fade-in-4 mt-8 text-xs text-gray-300">
                &copy; {{ date('Y') }} Cafe Bonanza. All rights reserved.
            </p>
        </div>
    </div>

</body>
</html>
