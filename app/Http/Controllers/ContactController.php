<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function sendToWhatsApp(Request $request) {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'nohp' => 'required|string|max:20',
            'pesan' => 'required|string|max:255',
        ]);

        $nama = urlencode($request->nama);
        $email = urlencode($request->email);
        $nohp = urlencode($request->nohp);
        $pesan = urlencode($request->pesan);

        // nomor WA tujuan
        $target = '6281390895162';
        $url = "https://api.whatsapp.com/send?phone={$target}&text=Nama:%20{$nama}%0AEmail:%20{$email}%0ANo.%20HP:%20{$nohp}%0APesan:%20{$pesan}";

        return redirect()->away($url);
    }
}
