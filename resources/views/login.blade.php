<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk - VOLTARA</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f1f8e9] text-[#0b3d24]">

{{-- ===== NAVBAR ===== --}}
<header class="flex items-center justify-between bg-white/60 px-10 py-5">
    <a href="/" class="text-2xl font-bold">VOLT<span class="text-[#7cc242]">ARA</span></a>
    <nav class="hidden gap-8 text-sm md:flex">
        <a href="/" class="border-b-2 border-[#0b3d24] pb-1 font-semibold">Beranda</a>
        <a href="/#cara-kerja" class="text-[#3d5a47]">Cara Kerja</a>
        <a href="/#keunggulan" class="text-[#3d5a47]">Keunggulan</a>
        <a href="/#cara-kerja" class="text-[#3d5a47]">Cara Kerja VOLTARA</a>
    </nav>
    <div class="flex items-center gap-5 text-sm font-semibold">
        <a href="/login">Daftar</a>
        <a href="/login" class="rounded-lg bg-[#c6f04a] px-4 py-2">Masuk / Login</a>
    </div>
</header>

<main class="mx-auto grid max-w-6xl gap-8 px-6 py-14 lg:grid-cols-[1.4fr_1fr]">

    {{-- ===== KIRI: PENJELASAN ===== --}}
    <section class="rounded-3xl bg-gradient-to-br from-[#eef6e2] to-[#e3f2c4] p-10">
        <p class="w-fit rounded-full bg-[#c6f04a] px-3 py-1 text-[10px] font-bold uppercase">
            100% Armada listrik & bebas asap
        </p>
        <h1 class="mt-6 text-4xl font-bold leading-tight">Masuk &amp; Nikmati Tarif Bersih Tanpa Tekanan Algoritma.</h1>
        <p class="mt-4 text-[#3d5a47]">
            Tentukan tarif perjalananmu sendiri, negosiasi langsung dengan mitra driver EV, dan bayar tunai di tujuan dengan bebas beban.
        </p>

        <div class="mt-8 grid gap-3 sm:grid-cols-3">
            @foreach ([
                ['Tawar Langsung', 'Kesepakatan harga adil dua arah.'],
                ['Bebas Polusi', 'Hemat emisi karbon nyata di tiap km.'],
                ['Tanpa Admin', 'Bayar cash pas langsung ke driver.'],
            ] as [$judul, $isi])
                <div class="rounded-xl bg-white p-4">
                    <span class="mb-3 block h-8 w-8 rounded-lg bg-[#c6f04a]"></span>
                    <p class="text-sm font-bold">{{ $judul }}</p>
                    <p class="mt-1 text-xs text-[#3d5a47]">{{ $isi }}</p>
                </div>
            @endforeach
        </div>

        {{-- Area foto mobil: kosong dulu --}}
        <div class="relative mt-10 flex h-64 items-end rounded-2xl bg-[#4d6b52] p-4">
            <span class="absolute -top-3 right-4 rounded-full bg-[#0b3d24] px-3 py-1 text-[10px] font-bold uppercase text-[#c6f04a]">
                Deal harganya, clean jalannya
            </span>
            <span class="rounded-md bg-white px-3 py-1 text-xs font-bold">VOLTARA CAR</span>
        </div>
    </section>

    {{-- ===== KANAN: FORM LOGIN ===== --}}
    <section class="h-fit rounded-3xl bg-white p-8 shadow-sm">
        <p class="w-fit rounded-full bg-[#c6f04a] px-3 py-1 text-[10px] font-bold uppercase">Masuk cepat &amp; aman</p>
        <h2 class="mt-3 text-3xl font-bold">Mulai Perjalanan Hijau</h2>
        <p class="mt-2 text-sm text-[#3d5a47]">
            Masukkan nomor WhatsApp atau HP aktifmu. Kami akan mengirimkan kode verifikasi OTP langsung tanpa repot kata sandi.
        </p>

        @if (session('status'))
            <p class="mt-4 rounded-lg bg-[#e6f6c4] px-4 py-3 text-sm font-semibold">{{ session('status') }}</p>
        @endif

        <form method="POST" action="{{ route('login.send') }}" class="mt-6">
            @csrf

            <div class="flex justify-between text-xs font-bold">
                <label for="phone">Nomor Handphone</label>
                <span class="font-normal">WhatsApp / SMS</span>
            </div>

            <div class="mt-2 flex items-center gap-3 rounded-xl bg-[#eef3ea] px-4 py-3 {{ $errors->has('phone') ? 'ring-2 ring-red-500' : '' }}">
                <span class="h-4 w-6 rounded-sm bg-gradient-to-b from-red-500 to-white"></span>
                <span class="text-sm font-semibold">+62</span>
                <input id="phone" name="phone" type="tel" inputmode="numeric" autocomplete="tel-national"
                       value="{{ old('phone') }}" placeholder="812-3456-7890" required
                       class="flex-1 bg-transparent text-sm font-medium outline-none">
            </div>
            @error('phone')
                <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
            @enderror
            <p class="mt-2 text-xs text-[#3d5a47]">Pastikan nomor terhubung dengan WhatsApp atau SMS aktif.</p>

            {{-- Pilih jalur OTP --}}
            <p class="mt-5 text-xs font-bold">Pilih Jalur Pengiriman OTP:</p>
            <div class="mt-2 grid grid-cols-2 gap-3">
                <label class="cursor-pointer">
                    <input type="radio" name="channel" value="whatsapp" class="peer sr-only" {{ old('channel', 'whatsapp') === 'whatsapp' ? 'checked' : '' }}>
                    <span class="block rounded-xl bg-[#f3f6f0] p-3 text-xs peer-checked:bg-[#dcf2b4] peer-checked:ring-2 peer-checked:ring-[#7cc242]">
                        <b class="block text-sm">Via WhatsApp</b>
                        <span class="text-[10px] font-semibold text-[#3d5a47]">Instan • Disarankan</span>
                    </span>
                </label>
                <label class="cursor-pointer">
                    <input type="radio" name="channel" value="sms" class="peer sr-only" {{ old('channel') === 'sms' ? 'checked' : '' }}>
                    <span class="block rounded-xl bg-[#f3f6f0] p-3 text-xs peer-checked:bg-[#dcf2b4] peer-checked:ring-2 peer-checked:ring-[#7cc242]">
                        <b class="block text-sm">Via SMS Biasa</b>
                        <span class="text-[10px] font-semibold text-[#3d5a47]">Standar Operator</span>
                    </span>
                </label>
            </div>
            @error('channel')
                <p class="mt-2 text-xs font-semibold text-red-600">{{ $message }}</p>
            @enderror

            <div class="mt-4 rounded-xl bg-[#e9efe4] p-3 text-xs">
                <p class="font-bold uppercase">Tunai langsung ke driver</p>
                <p class="mt-1 text-[#3d5a47]">Tanpa perlu kartu kredit atau saldo tersangkut. Negosiasi dan bayar tunai pas.</p>
            </div>

            <button type="submit" class="mt-5 w-full rounded-xl bg-[#0b3d24] py-4 text-sm font-bold text-white hover:bg-[#14502f]">
                Lanjutkan &amp; Kirim OTP
            </button>
        </form>

        <p class="mt-6 text-center text-xs text-[#3d5a47]">
            <b class="text-[#0b3d24]">Belum punya akun?</b> Cukup masukkan nomor HP di atas, akun barumu akan otomatis dibuat setelah verifikasi kode OTP.
        </p>
        <p class="mt-3 text-center text-[11px] text-[#6b8574]">
            Dengan melanjutkan, kamu menyetujui <u>Syarat &amp; Ketentuan</u> serta <u>Kebijakan Privasi</u> VOLTARA.
        </p>
    </section>
</main>

{{-- ===== FOOTER ===== --}}
<footer class="bg-white/60 px-10 py-6 text-xs">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-3">
        <p><b class="text-base">VOLTARA</b> &nbsp;© 2025 PT Voltara Mobilitas Bersih. Hak Cipta Dilindungi.</p>
        <p class="space-x-6 font-semibold"><span>Kebijakan Privasi</span><span>Syarat &amp; Ketentuan</span><span>Bantuan Tunai</span></p>
    </div>
</footer>

</body>
</html>