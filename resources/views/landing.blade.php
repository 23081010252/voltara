<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VOLTARA - Deal Harganya, Clean Jalannya</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#f6faee] text-[#0b3d24]">

{{-- ===== NAVBAR ===== --}}
<header class="flex items-center justify-between px-8 py-4">
    <span class="text-2xl font-bold">VOLT<span class="text-[#7cc242]">ARA</span></span>
    <nav class="flex items-center gap-8 text-sm">
        <a href="/" class="border-b-2 border-[#0b3d24] pb-1 font-semibold">Beranda</a>
        <a href="/order" class="text-[#3d5a47]">Pesan Kendaraan</a>
        <a href="/riwayat" class="text-[#3d5a47]">Riwayat Pemesanan</a>
        <a href="/driver" class="rounded-full bg-[#0b3d24] px-4 py-1.5 text-xs font-semibold text-[#c6f04a]">Mode Pengemudi</a>
    </nav>
    <div class="flex items-center gap-3 rounded-xl border border-[#d8e4cf] px-3 py-1.5">
        <span class="grid h-8 w-8 place-items-center rounded-full bg-[#0b3d24] text-xs font-bold text-white">DP</span>
        <div class="text-xs leading-tight">
            <p class="font-semibold">Dimas Pratama</p>
            <p class="text-[#6b8574]">Terverifikasi • Pelanggan</p>
        </div>
    </div>
</header>

<main>
{{-- ===== HERO (area gambar latar dikosongkan) ===== --}}
<section class="bg-[#2b4a35] px-6 py-24 text-center text-white">
    <p class="mx-auto w-fit rounded-full border border-[#c6f04a] px-5 py-1.5 text-xs font-semibold text-[#c6f04a]">
        Deal harganya, clean jalannya.
    </p>
    <h1 class="mx-auto mt-8 max-w-3xl text-5xl font-bold leading-tight">
        Nikmati Perjalanan Ramah Lingkungan Bersama <span class="text-[#c6f04a] underline">VOLTARA</span>
    </h1>
    <p class="mx-auto mt-6 max-w-xl text-white/90">
        Nikmati perjalanan dengan armada mobil listrik resmi VOLTARA. Tentukan tarif sendiri, negosiasi langsung
        dengan driver tanpa lonjakan biaya, bayar tunai setelah sampai.
    </p>
    <a href="/order" class="mt-8 inline-block rounded-lg bg-[#c6f04a] px-8 py-3 font-semibold text-[#0b3d24]">Masuk untuk Pesan</a>

    <div class="mt-14 flex justify-center gap-16">
        @foreach ($stats as $s)
            <div>
                <p class="text-2xl font-bold text-[#c6f04a]">{{ $s['value'] }}</p>
                <p class="text-xs">{{ $s['label'] }}</p>
            </div>
        @endforeach
    </div>
</section>

<div class="flex gap-10 overflow-hidden bg-[#0b3d24] px-6 py-2.5 text-xs font-semibold uppercase text-white">
    @foreach ($ticker as $t)
        <span class="whitespace-nowrap">{{ $t }}</span>
    @endforeach
</div>

{{-- ===== CARA KERJA ===== --}}
<section class="px-8 py-20">
    <div class="text-center">
        <p class="mx-auto w-fit rounded-full bg-[#c6f04a] px-3 py-1 text-[10px] font-bold uppercase">Alur perjalanan intuitif</p>
        <h2 class="mt-4 text-4xl font-bold">Sesimpel Itu Cara Kerjanya.</h2>
        <p class="mx-auto mt-3 max-w-xl text-sm text-[#3d5a47]">
            Empat langkah mudah dari jemput hingga sampai tujuan dengan armada mobil listrik resmi dan transparansi tarif tanpa kejutan.
        </p>
    </div>

    <div class="mx-auto mt-14 grid max-w-6xl gap-5 md:grid-cols-4">
        @foreach ($steps as $s)
            <article class="flex flex-col rounded-2xl bg-white p-6 {{ !empty($s['highlight']) ? 'border-2 border-[#c6f04a]' : 'border border-[#e3ebdc]' }}">
                <span class="grid h-11 w-11 place-items-center rounded-full bg-[#0b3d24] font-bold text-white">{{ $s['no'] }}</span>
                <p class="mt-5 text-[10px] text-[#6b8574]">TAHAP {{ $s['no'] }} • {{ $s['tag'] }}</p>
                <h3 class="mt-1 text-lg font-bold">{{ $s['title'] }}</h3>
                <p class="mt-2 flex-1 text-xs text-[#3d5a47]">{{ $s['desc'] }}</p>
                <span class="mt-6 w-fit rounded-full border border-[#e3ebdc] px-3 py-1 text-[10px] font-semibold">✓ {{ $s['badge'] }}</span>
            </article>
        @endforeach
    </div>
</section>

{{-- ===== LIVE BIDDING ===== --}}
<section class="grid items-center gap-12 bg-[#0a3d26] px-8 py-20 text-white md:grid-cols-2">
    <div class="mx-auto max-w-md">
        <p class="w-fit rounded bg-[#1f5a3a] px-2 py-1 text-[10px] font-bold uppercase text-[#c6f04a]">Transparansi kesepakatan</p>
        <h2 class="mt-5 text-4xl font-bold text-[#c6f04a]">Your Price. Your Choice.</h2>
        <p class="mt-4 text-[#b9d4c2]">
            Bukan sekadar mengikuti tarif. Kamu punya kesempatan untuk mengajukan harga dan mencapai kesepakatan langsung dengan driver.
        </p>
        <div class="mt-6 flex gap-3">
            <div class="rounded-lg bg-[#14502f] p-3">
                <p class="font-bold text-[#c6f04a]">~15 Detik</p>
                <p class="text-[10px] text-[#b9d4c2]">Rata-rata waktu kesepakatan</p>
            </div>
            <div class="rounded-lg bg-[#14502f] p-3">
                <p class="font-bold text-[#c6f04a]">100%</p>
                <p class="text-[10px] text-[#b9d4c2]">Bebas Lonjakan Tersembunyi</p>
            </div>
        </div>
    </div>

    <div class="mx-auto w-full max-w-sm rounded-2xl bg-white p-5 text-[#0b3d24]">
        <div class="flex justify-between text-[10px] font-semibold">
            <span>● LIVE DRIVER BIDDING</span>
            <span class="rounded-full bg-[#e6f6c4] px-2 py-0.5">{{ count($drivers) }} Penawaran Masuk</span>
        </div>
        <p class="mt-2 text-xs">SCBD → Pondok Indah</p>

        <div class="mt-3 space-y-2">
            @foreach ($drivers as $d)
                <div class="rounded-xl border p-3 {{ $d['deal'] ? 'border-[#7cc242]' : 'border-[#e3ebdc] bg-[#f5f7f2]' }}">
                    <div class="flex items-center gap-3">
                        <span class="grid h-9 w-9 place-items-center rounded-full bg-[#e3ebdc] text-xs font-bold">{{ $d['initial'] }}</span>
                        <div class="flex-1 text-xs">
                            <p class="font-bold">{{ $d['name'] }} <span class="font-normal text-[#c98a00]">★ {{ $d['rating'] }}</span></p>
                            <p class="text-[#6b8574]">{{ $d['car'] }}</p>
                        </div>
                        <p class="font-bold">{{ $d['price'] }}</p>
                    </div>
                    <div class="mt-2 flex gap-2 text-xs">
                        <button class="flex-1 rounded-md bg-[#0b3d24] py-1.5 font-semibold text-white">
                            {{ $d['deal'] ? '✓ Disepakati' : 'Terima' }}
                        </button>
                        <button class="px-3 text-[#6b8574]">{{ $d['deal'] ? 'Tawar Balik' : 'Tolak' }}</button>
                    </div>
                </div>
            @endforeach
        </div>

        <p class="mt-3 rounded-lg border border-[#e3ebdc] px-3 py-2 text-[10px]">
            ✓ Tarif disepakati langsung: <b>Rp 28.000</b> (Bayar Tunai saat sampai)
        </p>
    </div>
</section>

{{-- ===== KABIN (area foto mobil dikosongkan) ===== --}}
<section class="bg-[#eceee6] px-8 py-20">
    <div class="mx-auto max-w-6xl">
        <div class="flex items-end justify-between gap-10">
            <div>
                <p class="w-fit rounded bg-[#d9f2a6] px-2 py-1 text-[10px] font-bold uppercase">Kabin modern & bersih</p>
                <h2 class="mt-4 max-w-md text-4xl font-bold">More Than a Ride. A Cleaner Way to Move.</h2>
            </div>
            <p class="max-w-xs text-sm text-[#3d5a47]">
                Rasakan pengalaman perjalanan dengan mobil listrik yang nyaman, modern, dan lebih ramah lingkungan.
            </p>
        </div>

        <div class="mt-10 overflow-hidden rounded-3xl bg-white shadow-sm">
            <div class="flex h-96 items-end justify-between bg-[#6b7d63] p-8 text-white">
                <div>
                    <span class="rounded bg-[#c6f04a] px-2 py-1 text-[10px] font-bold text-[#0b3d24]">UNIT ARMADA RESMI VOLTARA</span>
                    <h3 class="mt-2 text-3xl font-bold">Kabin Luas, Senyap, dan Berenergi Bersih</h3>
                </div>
                <div class="rounded-lg bg-white/15 px-3 py-2 text-xs">
                    <b>0 g/km CO₂</b>
                    <p>Emisi Langsung di Rute Perkotaan</p>
                </div>
            </div>
            <div class="grid gap-6 p-6 md:grid-cols-4">
                @foreach ($features as $f)
                    <div class="text-xs">
                        <p class="text-sm font-bold">{{ $f['title'] }}</p>
                        <p class="mt-1 text-[#3d5a47]">{{ $f['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ===== CTA ===== --}}
<section class="px-8 py-12">
    <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-between gap-6 rounded-3xl bg-[#14502f] p-10 text-white">
        <div class="max-w-lg">
            <p class="w-fit rounded bg-[#c6f04a] px-2 py-1 text-[10px] font-bold uppercase text-[#0b3d24]">Siap mengaspal bersih?</p>
            <h2 class="mt-4 text-4xl font-bold">Deal Harganya, Clean Jalannya Sekarang Juga!</h2>
            <p class="mt-3 text-sm text-[#b9d4c2]">
                Gunakan platform VOLTARA tanpa ribet unduh berkas berat. Cukup masukkan tujuan dan tentukan harga pertama kamu!
            </p>
        </div>
        <div class="flex gap-3 text-sm font-semibold">
            <a href="/order" class="rounded-full bg-[#c6f04a] px-6 py-3 text-[#0b3d24]">Pesan Perjalanan</a>
            <a href="/driver" class="rounded-full bg-[#0b3d24] px-6 py-3">Daftar Mitra Driver</a>
        </div>
    </div>
</section>
</main>

{{-- ===== FOOTER ===== --}}
<footer class="border-t border-[#e3ebdc] px-8 py-10 text-xs text-[#3d5a47]">
    <div class="mx-auto flex max-w-6xl flex-wrap items-start justify-between gap-6">
        <div class="max-w-xs">
            <p class="text-xl font-bold text-[#0b3d24]">VOLTARA</p>
            <p class="mt-2">Layanan transportasi online ramah lingkungan berbasis kendaraan listrik. Solusi mobilitas urban cepat, bersih, dan hemat untuk kota masa depan.</p>
        </div>
        <div class="max-w-sm rounded-xl border border-[#e3ebdc] bg-white p-4">
            <p class="font-bold text-[#0b3d24]">Tunai ke Driver (Cash Only)</p>
            <p class="mt-1">Sistem tarif pasti & transparan langsung dibayar tunai saat tiba di tujuan. Bebas biaya admin tersembunyi.</p>
        </div>
        <p class="font-semibold">Zero Carbon Mobility</p>
    </div>
    <div class="mx-auto mt-8 flex max-w-6xl justify-between">
        <p>© 2025 VOLTARA Mobilitas Bersih Indonesia. Seluruh hak cipta dilindungi.</p>
        <p class="space-x-4"><span>Ketentuan Layanan</span><span>Privasi</span><span>Standar Emisi Hijau</span></p>
    </div>
</footer>

</body>
</html>