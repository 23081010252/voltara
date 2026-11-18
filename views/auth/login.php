
<?php
$pageTitle = "Masuk / Login - VOLTARA";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="stylesheet" href="/voltara-app/public/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<div class="page-container">

    <!-- NAVBAR -->
    <header class="navbar">

        <div class="logo">
            <span class="logo-icon">V</span>OLT<span>ARA</span>
        </div>

        <nav class="nav-menu">
            <a href="#" class="active">Beranda</a>
            <a href="#">Cara Kerja</a>
            <a href="#">Keunggulan</a>
            <a href="#">Cara Kerja VOLTARA</a>
        </nav>

        <div class="nav-action">
            <a href="#" class="register">Daftar</a>
            <a href="#" class="login-button">⇥ Masuk / Login</a>
        </div>

    </header>


    <!-- MAIN CONTENT -->
    <main class="main-content">

        <!-- LEFT SECTION -->
        <section class="hero-section">

            <div class="hero-content">

                <div class="hero-label">
                    ◉ 100% ARMADA LISTRIK & BEBAS ASAP
                </div>

                <h1>
                    Masuk & Nikmati Tarif Bersih
                    Tanpa Tekanan Algoritma.
                </h1>

                <p class="hero-description">
                    Tentukan tarif perjalananmu sendiri, negosiasi langsung
                    dengan mitra driver EV, dan bayar tunai di tujuan
                    dengan bebas beban.
                </p>

                <!-- FEATURES -->
                <div class="features">

                    <div class="feature-card">
                        <div class="feature-icon">♧</div>
                        <h4>Tawar Langsung</h4>
                        <p>Kesepakatan harga adil dua arah.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon green">♧</div>
                        <h4>Bebas Polusi</h4>
                        <p>Hemat emisi karbon nyata di tiap km.</p>
                    </div>

                    <div class="feature-card">
                        <div class="feature-icon">▣</div>
                        <h4>Tanpa Admin</h4>
                        <p>Bayar cash pas langsung ke driver.</p>
                    </div>

                </div>

                <!-- HERO IMAGE -->
                <div class="hero-image">

                    <div class="image-label">
                        ⚡ DEAL HARGANYA, CLEAN JALANNYA
                    </div>

                    <img
                        src="/voltara-app/public/images/voltara-car.jpg"
                        alt="Kendaraan listrik VOLTARA"
                    >

                    <div class="car-caption">
                        🚍 VOLTARA CAR
                    </div>

                </div>

            </div>

        </section>


        <!-- RIGHT SECTION: LOGIN -->
        <section class="login-section">

            <div class="login-label">
                ♧ MASUK CEPAT & AMAN
            </div>

            <h2>Mulai Perjalanan Hijau</h2>

            <p class="login-description">
                Masukkan nomor WhatsApp atau HP aktifmu.
                Kami akan mengirimkan kode verifikasi OTP
                langsung tanpa repot kata sandi.
            </p>

            <form action="#" method="POST">

                <!-- PHONE NUMBER -->
                <div class="form-heading">
                    <label for="phone">Nomor Handphone</label>
                    <span>WhatsApp / SMS</span>
                </div>

                <div class="phone-input">

                    <span class="country-code">🇮🇩 +62⌄</span>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="812-3456-7890"
                        required
                    >

                    <span class="check-icon">✓</span>

                </div>

                <p class="phone-note">
                    ▤ Pastikan nomor terhubung dengan WhatsApp
                    atau SMS aktif.
                </p>


                <!-- OTP METHOD -->
                <div class="otp-heading">
                    Pilih Jalur Pengiriman OTP:
                </div>

                <div class="otp-options">

                    <label class="otp-option selected">
                        <input
                            type="radio"
                            name="otp_method"
                            value="whatsapp"
                            checked
                        >

                        <span class="otp-icon">▤</span>

                        <span class="otp-text">
                            <strong>Via WhatsApp</strong>
                            <small>Instan • Disarankan</small>
                        </span>
                    </label>


                    <label class="otp-option">
                        <input
                            type="radio"
                            name="otp_method"
                            value="sms"
                        >

                        <span class="otp-icon sms">▤</span>

                        <span class="otp-text">
                            <strong>Via SMS Biasa</strong>
                            <small>Standar Operator</small>
                        </span>
                    </label>

                </div>


                <!-- PAYMENT INFORMATION -->
                <div class="payment-info">

                    <div class="payment-icon">▣</div>

                    <div>
                        <strong>TUNAI LANGSUNG KE DRIVER</strong>
                        <p>
                            Tanpa perlu kartu kredit atau saldo
                            tersangkut. Negosiasi dan bayar tunai pas.
                        </p>
                    </div>

                </div>


                <!-- SUBMIT -->
                <button type="submit" class="submit-button">
                    Lanjutkan & Kirim OTP
                </button>

            </form>


            <!-- LOGIN FOOTER -->
            <div class="login-footer">

                <p>
                    <strong>Belum punya akun?</strong>
                    Cukup masukkan nomor HP di atas, akun barumu
                    akan otomatis dibuat setelah verifikasi kode OTP.
                </p>

                <p class="terms">
                    Dengan melanjutkan, kamu menyetujui
                    <a href="#">Syarat & Ketentuan</a> serta
                    <a href="#">Kebijakan Privasi</a> VOLTARA.
                </p>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="footer">

        <div class="footer-brand">
            <strong>VOLTARA</strong>
            <span>© 2025 PT Voltara Mobilitas Bersih. Hak Cipta Dilindungi.</span>
        </div>

        <div class="footer-links">
            <a href="#">Kebijakan Privasi</a>
            <a href="#">Syarat & Ketentuan</a>
            <a href="#">Bantuan Tunai</a>
        </div>

    </footer>

</div>

</body>
</html>
