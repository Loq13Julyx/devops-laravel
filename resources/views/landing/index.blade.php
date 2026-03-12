<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cafe Bonanza - Kopi & Cita Rasa Terbaik</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,800;1,700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        :root {
            --brown: #8B5E3C;
            --brown-dark: #6f472c;
            --brown-deep: #3d2314;
            --cream: #fdf6ee;
            --gold: #c9a84c;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--cream);
            color: #2a1a0e;
            overflow-x: hidden;
        }

        h1,
        h2,
        h3 {
            font-family: 'Playfair Display', serif;
        }

        /* ── NAVBAR ── */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 20px 6%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: background 0.4s, backdrop-filter 0.4s, box-shadow 0.4s;
        }

        nav.scrolled {
            background: rgba(253, 246, 238, 0.92);
            backdrop-filter: blur(12px);
            box-shadow: 0 2px 24px rgba(139, 94, 60, 0.08);
        }

        .nav-logo {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 800;
            color: var(--cream);
            letter-spacing: -0.5px;
            transition: color 0.4s;
        }

        nav.scrolled .nav-logo {
            color: var(--brown-deep);
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            font-size: 0.85rem;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            letter-spacing: 0.5px;
            transition: color 0.3s;
        }

        nav.scrolled .nav-links a {
            color: #5a3a1a;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .nav-btn {
            background: var(--gold);
            color: #fff !important;
            padding: 10px 24px;
            border-radius: 50px;
            font-weight: 600 !important;
            transition: background 0.3s, transform 0.2s !important;
        }

        .nav-btn:hover {
            background: var(--brown) !important;
            transform: translateY(-1px);
        }

        /* ── HERO ── */
        .hero {
            height: 100vh;
            min-height: 680px;
            position: relative;
            display: flex;
            align-items: center;
            background: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, rgba(30, 12, 4, 0.82) 0%, rgba(60, 25, 10, 0.55) 60%, rgba(0, 0, 0, 0.2) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            padding: 0 8%;
            max-width: 680px;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(201, 168, 76, 0.2);
            border: 1px solid rgba(201, 168, 76, 0.4);
            color: var(--gold);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
            animation: fadeInUp 0.7s ease forwards;
        }

        .hero-title {
            font-size: clamp(2.8rem, 6vw, 5rem);
            font-weight: 800;
            line-height: 1.1;
            color: #fff;
            margin-bottom: 1.2rem;
            animation: fadeInUp 0.7s ease 0.15s forwards;
            opacity: 0;
        }

        .hero-title em {
            color: var(--gold);
            font-style: italic;
        }

        .hero-sub {
            font-size: 1rem;
            font-weight: 300;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.75);
            margin-bottom: 2.5rem;
            animation: fadeInUp 0.7s ease 0.3s forwards;
            opacity: 0;
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            animation: fadeInUp 0.7s ease 0.45s forwards;
            opacity: 0;
        }

        .btn-primary {
            background: var(--gold);
            color: #fff;
            padding: 14px 32px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            letter-spacing: 0.3px;
            transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
            box-shadow: 0 8px 24px rgba(201, 168, 76, 0.35);
        }

        .btn-primary:hover {
            background: var(--brown);
            transform: translateY(-2px);
            box-shadow: 0 12px 32px rgba(139, 94, 60, 0.4);
        }

        .btn-outline {
            border: 1.5px solid rgba(255, 255, 255, 0.5);
            color: #fff;
            padding: 14px 32px;
            border-radius: 50px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            transition: border-color 0.3s, background 0.3s, transform 0.2s;
        }

        .btn-outline:hover {
            border-color: var(--gold);
            background: rgba(201, 168, 76, 0.1);
            transform: translateY(-2px);
        }

        /* Hero scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 2.5rem;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.7rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            animation: bounce 2s ease infinite;
        }

        .scroll-indicator i {
            font-size: 1rem;
        }

        /* Hero stats */
        .hero-stats {
            position: absolute;
            bottom: 3rem;
            right: 8%;
            display: flex;
            gap: 2.5rem;
            animation: fadeInUp 0.7s ease 0.6s forwards;
            opacity: 0;
        }

        .stat {
            text-align: center;
        }

        .stat-num {
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            font-weight: 800;
            color: var(--gold);
            line-height: 1;
        }

        .stat-label {
            font-size: 0.7rem;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.55);
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 4px;
        }

        /* ── SECTION COMMON ── */
        section {
            padding: 100px 8%;
        }

        .section-tag {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: var(--brown);
            margin-bottom: 1rem;
        }

        .section-tag::before {
            content: '';
            width: 30px;
            height: 2px;
            background: var(--gold);
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            line-height: 1.2;
            color: var(--brown-deep);
            margin-bottom: 1rem;
        }

        .section-title em {
            color: var(--brown);
            font-style: italic;
        }

        /* ── ABOUT ── */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            align-items: center;
        }

        .about-img-wrap {
            position: relative;
        }

        .about-img-main {
            width: 100%;
            height: 520px;
            object-fit: cover;
            border-radius: 24px;
            box-shadow: 0 24px 64px rgba(139, 94, 60, 0.2);
        }

        .about-img-badge {
            position: absolute;
            bottom: -24px;
            right: -24px;
            background: var(--brown-deep);
            color: #fff;
            border-radius: 20px;
            padding: 20px 28px;
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.2);
        }

        .about-img-badge .big {
            font-family: 'Playfair Display', serif;
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--gold);
        }

        .about-img-badge .small {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.6);
            letter-spacing: 1px;
        }

        .about-text p {
            font-size: 0.95rem;
            line-height: 1.9;
            color: #6b4c30;
            margin-bottom: 1.5rem;
            font-weight: 300;
        }

        .about-features {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-top: 2.5rem;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: rgba(139, 94, 60, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--brown);
            font-size: 1rem;
            flex-shrink: 0;
        }

        .feature-item h4 {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--brown-deep);
        }

        .feature-item p {
            font-size: 0.78rem;
            color: #9a7a5a;
            margin-top: 2px;
        }

        /* ── MENU ── */
        .menu-section {
            background: var(--brown-deep);
        }

        .menu-section .section-tag {
            color: var(--gold);
        }

        .menu-section .section-tag::before {
            background: var(--gold);
        }

        .menu-section .section-title {
            color: #fff;
        }

        .menu-section .section-title em {
            color: var(--gold);
        }

        .menu-tabs {
            display: flex;
            gap: 0.5rem;
            margin: 2.5rem 0 2rem;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 10px 24px;
            border-radius: 50px;
            font-size: 0.82rem;
            font-weight: 500;
            border: 1.5px solid rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.6);
            background: transparent;
            cursor: pointer;
            transition: all 0.3s;
        }

        .tab-btn.active,
        .tab-btn:hover {
            background: var(--gold);
            border-color: var(--gold);
            color: #fff;
        }

        .menu-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .menu-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s, border-color 0.3s;
            cursor: pointer;
        }

        .menu-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 48px rgba(0, 0, 0, 0.3);
            border-color: rgba(201, 168, 76, 0.3);
        }

        .menu-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.4s;
        }

        .menu-card:hover .menu-img {
            transform: scale(1.05);
        }

        .menu-card-body {
            padding: 1.2rem 1.4rem 1.4rem;
        }

        .menu-card-tag {
            font-size: 0.68rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 6px;
        }

        .menu-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.15rem;
            color: #fff;
            margin-bottom: 6px;
        }

        .menu-card p {
            font-size: 0.78rem;
            color: rgba(255, 255, 255, 0.45);
            line-height: 1.6;
        }

        .menu-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        .menu-price {
            font-size: 1rem;
            font-weight: 600;
            color: var(--gold);
        }

        .menu-order-btn {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            background: var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 0.8rem;
            transition: background 0.3s, transform 0.2s;
        }

        .menu-card:hover .menu-order-btn {
            background: var(--brown);
            transform: scale(1.1);
        }

        /* ── TESTIMONIAL ── */
        .testimonials {
            background: #fff;
        }

        .testi-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-top: 3rem;
        }

        .testi-card {
            background: var(--cream);
            border-radius: 20px;
            padding: 2rem;
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .testi-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 40px rgba(139, 94, 60, 0.1);
        }

        .testi-card::before {
            content: '"';
            font-family: 'Playfair Display', serif;
            font-size: 5rem;
            line-height: 1;
            color: var(--gold);
            opacity: 0.2;
            position: absolute;
            top: 1rem;
            right: 1.5rem;
        }

        .testi-stars {
            color: var(--gold);
            font-size: 0.8rem;
            margin-bottom: 1rem;
        }

        .testi-text {
            font-size: 0.88rem;
            line-height: 1.8;
            color: #6b4c30;
            font-weight: 300;
        }

        .testi-author {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(139, 94, 60, 0.1);
        }

        .testi-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--gold);
        }

        .testi-name {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--brown-deep);
        }

        .testi-role {
            font-size: 0.72rem;
            color: #9a7a5a;
        }

        /* ── CTA ── */
        .cta-section {
            background: url('https://images.unsplash.com/photo-1442512595331-e89e73853f31?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;
            position: relative;
            text-align: center;
            padding: 120px 8%;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(61, 35, 20, 0.88), rgba(139, 94, 60, 0.75));
        }

        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            margin: 0 auto;
        }

        .cta-content h2 {
            font-size: clamp(2rem, 4vw, 3.2rem);
            color: #fff;
            margin-bottom: 1rem;
        }

        .cta-content p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2.5rem;
            line-height: 1.8;
        }

        /* ── FOOTER ── */
        footer {
            background: var(--brown-deep);
            padding: 60px 8% 30px;
            color: rgba(255, 255, 255, 0.5);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .footer-brand h3 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: #fff;
            margin-bottom: 1rem;
        }

        .footer-brand p {
            font-size: 0.83rem;
            line-height: 1.8;
        }

        .footer-col h4 {
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 1.2rem;
        }

        .footer-col a {
            display: block;
            font-size: 0.83rem;
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            margin-bottom: 0.6rem;
            transition: color 0.3s;
        }

        .footer-col a:hover {
            color: var(--gold);
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            padding-top: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.78rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-links a {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.15);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            transition: border-color 0.3s, color 0.3s, background 0.3s;
        }

        .social-links a:hover {
            border-color: var(--gold);
            color: var(--gold);
            background: rgba(201, 168, 76, 0.1);
        }

        /* ── ANIMATIONS ── */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(28px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateX(-50%) translateY(0);
            }

            50% {
                transform: translateX(-50%) translateY(8px);
            }
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 900px) {

            .about-grid,
            .menu-grid,
            .testi-grid {
                grid-template-columns: 1fr;
            }

            .hero-stats {
                display: none;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }

            .about-img-badge {
                right: 0;
                bottom: -12px;
            }

            nav {
                padding: 16px 5%;
            }

            section {
                padding: 70px 5%;
            }
        }

        @media (max-width: 600px) {
            .menu-grid {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }

            .nav-links {
                display: none;
            }
        }
    </style>
</head>

<body>

    <!-- ── NAVBAR ── -->
    <nav id="navbar">
        <div class="nav-logo">Bonanza</div>
        <div class="nav-links">
            <a href="#about">Tentang</a>
            <a href="#menu">Menu</a>
            <a href="#testimonial">Ulasan</a>
            @guest
                <a href="{{ route('login') }}" class="nav-btn">Masuk</a>
            @endguest
            @auth
                @if (auth()->user()->hasVerifiedEmail())
                    <span style="color:rgba(255,255,255,0.6); font-size:0.85rem;">Halo, {{ auth()->user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" style="margin:0;">
                        @csrf
                        <button type="submit" class="nav-btn"
                            style="border:none;cursor:pointer;font-family:'Poppins',sans-serif;">Keluar</button>
                    </form>
                @else
                    <a href="{{ route('verification.notice') }}" class="nav-btn">Verifikasi Email</a>
                @endif
            @endauth
        </div>
    </nav>

    <!-- ── HERO ── -->
    <section class="hero" id="home">
        <div class="hero-overlay"></div>

        <div class="hero-content">
            <div class="hero-badge">
                <i class="fas fa-coffee"></i>
                Selamat Datang di Cafe Bonanza
            </div>
            <h1 class="hero-title">
                Setiap Tegukan,<br>Sebuah <em>Cerita</em>
            </h1>
            <p class="hero-sub">
                Nikmati kopi pilihan dari biji terbaik Nusantara, sajian kuliner otentik, dan suasana hangat yang
                membuatmu betah berlama-lama.
            </p>
            <div class="hero-actions">
                <a href="#menu" class="btn-primary">
                    <i class="fas fa-utensils" style="margin-right:8px;"></i>
                    Lihat Menu
                </a>
                @guest
                    <a href="{{ route('login') }}" class="btn-outline">
                        <i class="fas fa-sign-in-alt" style="margin-right:8px;"></i>
                        Masuk Sekarang
                    </a>
                @endguest
            </div>
        </div>

        <div class="hero-stats">
            <div class="stat">
                <div class="stat-num">50+</div>
                <div class="stat-label">Menu Pilihan</div>
            </div>
            <div class="stat">
                <div class="stat-num">5K+</div>
                <div class="stat-label">Pelanggan</div>
            </div>
            <div class="stat">
                <div class="stat-num">4.9</div>
                <div class="stat-label">Rating</div>
            </div>
        </div>

        <div class="scroll-indicator">
            <span>Scroll</span>
            <i class="fas fa-chevron-down"></i>
        </div>
    </section>

    <!-- ── ABOUT ── -->
    <section id="about">
        <div class="about-grid">
            <div class="about-img-wrap">
                <img src="https://images.unsplash.com/photo-1559925393-8be0ec4767c8?auto=format&fit=crop&w=800&q=80"
                    alt="Cafe Interior" class="about-img-main">
                <div class="about-img-badge">
                    <div class="big">10+</div>
                    <div class="small">Tahun Melayani</div>
                </div>
            </div>

            <div class="about-text">
                <div class="section-tag">Tentang Kami</div>
                <h2 class="section-title">Tempat Dimana <em>Kopi</em> Bertemu Kenangan</h2>
                <p>
                    Cafe Bonanza lahir dari kecintaan mendalam terhadap kopi dan kebersamaan. Sejak berdiri, kami
                    berkomitmen menghadirkan pengalaman ngopi yang tak terlupakan dengan bahan-bahan pilihan terbaik.
                </p>
                <p>
                    Setiap cangkir yang kami sajikan merupakan hasil dedikasi barista berpengalaman kami yang meracik
                    dengan penuh cinta dan keahlian.
                </p>

                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-seedling"></i></div>
                        <div>
                            <h4>Bahan Segar</h4>
                            <p>Dipilih langsung dari petani lokal</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-award"></i></div>
                        <div>
                            <h4>Barista Tersertifikasi</h4>
                            <p>Terlatih & berpengalaman</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-wifi"></i></div>
                        <div>
                            <h4>Free WiFi</h4>
                            <p>Koneksi cepat & stabil</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon"><i class="fas fa-parking"></i></div>
                        <div>
                            <h4>Parkir Luas</h4>
                            <p>Nyaman & aman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── MENU ── -->
    <section class="menu-section" id="menu">
        <div class="section-tag">Menu Kami</div>
        <h2 class="section-title">Sajian <em>Istimewa</em> Untuk Anda</h2>

        <div class="menu-tabs">
            <button class="tab-btn active">Semua</button>
            <button class="tab-btn">Kopi</button>
            <button class="tab-btn">Non-Kopi</button>
            <button class="tab-btn">Makanan</button>
            <button class="tab-btn">Dessert</button>
        </div>

        <div class="menu-grid">
            <div class="menu-card">
                <div style="overflow:hidden;">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=600&q=80"
                        alt="Espresso" class="menu-img">
                </div>
                <div class="menu-card-body">
                    <div class="menu-card-tag">Signature Coffee</div>
                    <h3>Bonanza Espresso</h3>
                    <p>Espresso pekat dengan crema sempurna dari biji arabika Toraja pilihan.</p>
                    <div class="menu-card-footer">
                        <div class="menu-price">Rp 28.000</div>
                        <a href="{{ route('login') }}" class="menu-order-btn"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="menu-card">
                <div style="overflow:hidden;">
                    <img src="https://images.unsplash.com/photo-1561047029-3000c68339ca?auto=format&fit=crop&w=600&q=80"
                        alt="Latte" class="menu-img">
                </div>
                <div class="menu-card-body">
                    <div class="menu-card-tag">Popular</div>
                    <h3>Caramel Latte</h3>
                    <p>Perpaduan espresso lembut dengan susu segar dan sirup karamel homemade.</p>
                    <div class="menu-card-footer">
                        <div class="menu-price">Rp 35.000</div>
                        <a href="{{ route('login') }}" class="menu-order-btn"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>

            <div class="menu-card">
                <div style="overflow:hidden;">
                    <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?auto=format&fit=crop&w=600&q=80"
                        alt="Pasta" class="menu-img">
                </div>
                <div class="menu-card-body">
                    <div class="menu-card-tag">Chef's Special</div>
                    <h3>Creamy Mushroom Pasta</h3>
                    <p>Pasta segar dengan saus krim jamur truffle yang kaya rasa dan aroma.</p>
                    <div class="menu-card-footer">
                        <div class="menu-price">Rp 65.000</div>
                        <a href="{{ route('login') }}" class="menu-order-btn"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── TESTIMONIAL ── -->
    <section class="testimonials" id="testimonial">
        <div style="text-align:center; max-width:520px; margin:0 auto 1rem;">
            <div class="section-tag" style="justify-content:center;">Ulasan Pelanggan</div>
            <h2 class="section-title">Apa Kata <em>Mereka</em>?</h2>
        </div>

        <div class="testi-grid">
            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">Kopinya luar biasa! Suasananya nyaman banget buat kerja atau santai. Barista-nya
                    juga ramah dan profesional.</p>
                <div class="testi-author">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=80&q=80"
                        class="testi-avatar" alt="">
                    <div>
                        <div class="testi-name">Rizky Firmansyah</div>
                        <div class="testi-role">Pelanggan Setia</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-stars">★★★★★</div>
                <p class="testi-text">Tempat favorit saya tiap weekend! Makanannya enak, harga terjangkau, dan WiFi-nya
                    kenceng. Recommended banget!</p>
                <div class="testi-author">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=80&q=80"
                        class="testi-avatar" alt="">
                    <div>
                        <div class="testi-name">Sari Dewi</div>
                        <div class="testi-role">Food Blogger</div>
                    </div>
                </div>
            </div>

            <div class="testi-card">
                <div class="testi-stars">★★★★☆</div>
                <p class="testi-text">Menu dessert-nya juara! Creamy Pasta-nya bikin ketagihan. Pasti balik lagi sama
                    keluarga minggu depan.</p>
                <div class="testi-author">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=80&q=80"
                        class="testi-avatar" alt="">
                    <div>
                        <div class="testi-name">Budi Santoso</div>
                        <div class="testi-role">Pelanggan Baru</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="cta-section">
        <div class="cta-content">
            <h2>Siap Memesan<br>Menu Favorit Anda?</h2>
            <p>Daftar sekarang dan nikmati kemudahan memesan menu Cafe Bonanza kapan saja, di mana saja.</p>
            @guest
                <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                    <a href="{{ route('register') }}" class="btn-primary">
                        <i class="fas fa-user-plus" style="margin-right:8px;"></i>
                        Daftar Gratis
                    </a>
                    <a href="{{ route('login') }}" class="btn-outline">
                        Sudah punya akun? Masuk
                    </a>
                </div>
            @endguest
            @auth
                <a href="{{ route('home') }}" class="btn-primary">
                    <i class="fas fa-coffee" style="margin-right:8px;"></i>
                    Pesan Sekarang
                </a>
            @endauth
        </div>
    </section>

    <!-- ── FOOTER ── -->
    <footer>
        <div class="footer-grid">
            <div class="footer-brand">
                <h3>Cafe Bonanza</h3>
                <p>Tempat terbaik untuk menikmati kopi berkualitas dan sajian kuliner otentik dalam suasana yang hangat
                    dan nyaman.</p>
                <div class="social-links" style="margin-top:1.5rem;">
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Menu</h4>
                <a href="#">Kopi</a>
                <a href="#">Non-Kopi</a>
                <a href="#">Makanan</a>
                <a href="#">Dessert</a>
            </div>
            <div class="footer-col">
                <h4>Informasi</h4>
                <a href="#">Tentang Kami</a>
                <a href="#">Promo</a>
                <a href="#">Karir</a>
                <a href="#">Blog</a>
            </div>
            <div class="footer-col">
                <h4>Kontak</h4>
                <a href="#"><i class="fas fa-map-marker-alt" style="margin-right:6px;"></i>Jl. Kopi No. 1,
                    Malang</a>
                <a href="#"><i class="fas fa-phone" style="margin-right:6px;"></i>+62 812-3456-7890</a>
                <a href="#"><i class="fas fa-clock" style="margin-right:6px;"></i>08.00 – 22.00 WIB</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Cafe Bonanza. All rights reserved.</span>
            <span>Made with <i class="fas fa-heart" style="color:var(--gold);"></i> in Malang</span>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 60);
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(a => {
            a.addEventListener('click', e => {
                const target = document.querySelector(a.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Menu tabs (UI only)
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
            });
        });

        // Scroll reveal
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.7s ease forwards';
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.menu-card, .testi-card, .feature-item').forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    </script>

</body>

</html>
