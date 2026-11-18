<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('login');
    }

    // Menerima nomor HP, membuat kode OTP (simulasi)
    public function sendOtp(Request $request)
    {
        $request->validate([
            'phone'   => ['required', 'string'],
            'channel' => ['required', 'in:whatsapp,sms'],
        ], [
            'phone.required' => 'Nomor handphone wajib diisi.',
        ]);

        // Bersihkan: hanya angka, buang awalan 0 atau 62
        $phone = preg_replace('/\D/', '', $request->phone);
        $phone = preg_replace('/^(0|62)/', '', $phone);

        if (! preg_match('/^8[0-9]{8,11}$/', $phone)) {
            return back()->withErrors(['phone' => 'Format nomor tidak valid. Contoh: 812-3456-7890'])->withInput();
        }

        $otp = random_int(100000, 999999);

        // SIMULASI: kode disimpan di session dan dicatat di storage/logs/laravel.log.
        // Untuk produksi, kirim lewat layanan WhatsApp/SMS gateway.
        session([
            'otp_phone'   => '62' . $phone,
            'otp_code'    => $otp,
            'otp_channel' => $request->channel,
        ]);
        Log::info("OTP untuk +62{$phone}: {$otp}");

        return back()->with('status', 'Kode OTP dikirim ke +62' . $phone . ' via ' . ($request->channel === 'whatsapp' ? 'WhatsApp' : 'SMS') . '.');
    }
}