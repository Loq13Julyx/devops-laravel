<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifikasi Email - Cafe Bonanza</title>
</head>
<body style="margin:0; padding:0; background-color:#f5ede3; font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f5ede3; padding: 40px 0;">
        <tr>
            <td align="center">

                <!-- Wrapper -->
                <table width="570" cellpadding="0" cellspacing="0" style="max-width:570px; width:100%;">

                    <!-- Top label -->
                    <tr>
                        <td align="center" style="padding-bottom: 20px;">
                            <span style="font-size:12px; color:#9a7a5a; letter-spacing:1px;">
                                ☕ &nbsp; CAFE BONANZA
                            </span>
                        </td>
                    </tr>

                    <!-- Card -->
                    <tr>
                        <td style="background-color:#ffffff; border-radius:16px; overflow:hidden; box-shadow: 0 4px 24px rgba(139,94,60,0.12);">

                            <!-- Banner Header -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background: linear-gradient(135deg, #8B5E3C 0%, #6f472c 100%); padding: 36px 48px 32px; text-align:center; border-radius:16px 16px 0 0;">

                                        <!-- Icon circle -->
                                        <div style="width:64px; height:64px; background:rgba(255,255,255,0.15); border-radius:50%; margin:0 auto 16px; display:flex; align-items:center; justify-content:center; line-height:64px; font-size:28px;">
                                            ✉️
                                        </div>

                                        <p style="color:rgba(255,255,255,0.7); font-size:11px; font-weight:600; letter-spacing:3px; text-transform:uppercase; margin:0 0 8px 0;">
                                            Cafe Bonanza
                                        </p>
                                        <h1 style="color:#ffffff; font-size:24px; font-weight:800; margin:0 0 8px 0; letter-spacing:-0.3px;">
                                            Verifikasi Email Anda
                                        </h1>
                                        <p style="color:rgba(255,255,255,0.65); font-size:13px; margin:0;">
                                            Satu langkah lagi menuju kopi terbaik ☕
                                        </p>

                                    </td>
                                </tr>
                            </table>

                            <!-- Body Content -->
                            <table width="100%" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="padding: 40px 48px 32px;">

                                        <p style="color:#3d2314; font-size:16px; font-weight:600; margin:0 0 8px 0;">
                                            Halo! 👋
                                        </p>
                                        <p style="color:#6b4c30; font-size:15px; line-height:1.7; margin:0 0 16px 0;">
                                            Terima kasih telah mendaftar di <strong>Cafe Bonanza</strong>. Kami sangat senang menyambut Anda!
                                        </p>
                                        <p style="color:#6b4c30; font-size:15px; line-height:1.7; margin:0 0 28px 0;">
                                            Silakan klik tombol di bawah ini untuk memverifikasi alamat email dan mengaktifkan akun Anda.
                                        </p>

                                        <!-- CTA Button -->
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center" style="padding-bottom: 28px;">
                                                    <a href="{{ $url }}"
                                                        style="display:inline-block; background: linear-gradient(135deg, #8B5E3C 0%, #6f472c 100%); color:#ffffff; font-size:15px; font-weight:700; text-decoration:none; padding:14px 40px; border-radius:50px; letter-spacing:0.3px; box-shadow: 0 4px 12px rgba(139,94,60,0.35);">
                                                        ✅ &nbsp; Verifikasi Email Saya
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>

                                        <!-- Info box -->
                                        <table width="100%" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td style="background-color:#fdf6ee; border-left:4px solid #8B5E3C; border-radius:8px; padding:16px 20px;">
                                                    <p style="color:#8B5E3C; font-size:13px; font-weight:600; margin:0 0 6px 0;">
                                                        ⏰ Perhatian
                                                    </p>
                                                    <p style="color:#6b4c30; font-size:13px; line-height:1.6; margin:0;">
                                                        Link verifikasi ini akan <strong>kedaluwarsa dalam 60 menit</strong>. Jika sudah lewat, silakan minta link baru dari halaman verifikasi.
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>

                                        <!-- Divider -->
                                        <table width="100%" cellpadding="0" cellspacing="0" style="margin: 28px 0 20px;">
                                            <tr>
                                                <td style="border-top: 1px solid #f0e0d0;"></td>
                                            </tr>
                                        </table>

                                        <!-- Fallback URL -->
                                        <p style="color:#9a7a5a; font-size:12px; line-height:1.6; margin:0 0 8px 0;">
                                            Jika tombol tidak berfungsi, salin dan tempel URL berikut ke browser Anda:
                                        </p>
                                        <p style="word-break:break-all; font-size:11px; color:#8B5E3C; margin:0 0 20px 0;">
                                            {{ $url }}
                                        </p>

                                        <p style="color:#9a7a5a; font-size:12px; line-height:1.6; margin:0;">
                                            Jika Anda tidak merasa mendaftar di Cafe Bonanza, abaikan email ini.
                                        </p>

                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="padding: 24px 0;">
                            <p style="color:#9a7a5a; font-size:12px; line-height:1.6; margin:0 0 4px 0;">
                                Salam hangat, <strong style="color:#8B5E3C;">Tim Cafe Bonanza</strong> ☕
                            </p>
                            <p style="color:#b8a090; font-size:11px; margin:0;">
                                © {{ date('Y') }} Cafe Bonanza. All rights reserved.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>