<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    // Controller: menyiapkan data lalu mengirimnya ke View (landing.blade.php).
    // Nanti array ini bisa diganti data dari Model/database.
    public function index()
    {
        return view('landing', [
            'stats' => [
                ['value' => '100%', 'label' => 'Armada EV Murni'],
                ['value' => 'Rp0', 'label' => 'Biaya Tambahan'],
                ['value' => 'Tunai', 'label' => 'Bayar di Tempat'],
            ],
            'ticker' => [
                '100% Mobil listrik murni',
                'Nego tarif langsung driver',
                'Bayar tunai tanpa potongan',
                'Tanpa algoritma',
            ],
            'steps' => [
                ['no' => '01', 'title' => 'Tentukan Tujuan', 'tag' => 'Lokasi Titik', 'badge' => 'Pinpoint Lokasi Presisi',
                 'desc' => 'Masukkan titik jemput dan tujuanmu secara akurat di peta digital cerdas tanpa batasan rute.'],
                ['no' => '02', 'title' => 'Ajukan Tarif', 'tag' => 'Input Tarif', 'badge' => 'Fleksibel Tanpa Algoritma',
                 'desc' => 'Ketik nominal tawaran yang pas dengan anggaranmu sendiri. Bebas dari lonjakan otomatis algoritma dinamis.'],
                ['no' => '03', 'title' => 'Negosiasi Driver', 'tag' => 'Respon Driver', 'badge' => 'Deal Transparan Dua Arah',
                 'desc' => 'Driver dapat langsung menyetujui atau mengajukan harga tandingan. Kamu leluasa memilih driver terbaik.'],
                ['no' => '04', 'title' => 'Jalan & Bayar Tunai', 'tag' => 'Perjalanan & Bayar', 'badge' => 'Tunai di Akhir Trip',
                 'desc' => 'Nikmati kabin senyap kendaraan listrik, lalu selesaikan pembayaran tunai ke mitra tanpa potongan saldo tersembunyi.',
                 'highlight' => true],
            ],
            'drivers' => [
                ['initial' => 'PH', 'name' => 'Pak Hendra', 'rating' => '4.9', 'car' => 'B 3552 EV • 3 mnt (450m)', 'price' => 'Rp 28.000', 'deal' => true],
                ['initial' => 'PB', 'name' => 'Pak Bayu', 'rating' => '4.8', 'car' => 'B 1908 EV • 6 mnt', 'price' => 'Rp 30.000', 'deal' => false],
                ['initial' => 'IR', 'name' => 'Ibu Rina', 'rating' => '5.0', 'car' => 'B 2741 EV • 8 mnt', 'price' => 'Rp 26.000', 'deal' => false],
            ],
            'features' => [
                ['title' => 'Kabin Senyap & Sejuk', 'desc' => 'AC otomatis efisien dengan kesenyapan motor listrik murni.'],
                ['title' => 'Zero Tailpipe Emissions', 'desc' => 'Turut andil menurunkan polusi udara di setiap kilometer perjalanan.'],
                ['title' => 'Driver Profesional', 'desc' => 'Mitra terlatih dalam keselamatan berkendara ramah lingkungan.'],
                ['title' => 'Keamanan Terstandar', 'desc' => 'Fitur keselamatan aktif, sabuk pengaman menyeluruh, & monitoring rute.'],
            ],
        ]);
    }
}