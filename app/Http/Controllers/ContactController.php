<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validasi data dari form
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'perusahaan' => 'nullable|string|max:255',
            'email' => 'required|email',
            'kebutuhan' => 'required|string',
            'pesan' => 'required|string',
        ]);

        // 2. Kirim email ke alamat perusahaan Anda
        // Ganti email di bawah dengan email penerima (email perusahaan Anda)
        Mail::to('muhdihyachal@gmail.com')->send(new ContactMessage($data));

        // 3. Kembali ke halaman contact dengan pesan sukses
        return back()->with('success', 'Terima kasih! Pesan Anda telah berhasil dikirim. Tim kami akan segera menghubungi Anda.');
    }
}