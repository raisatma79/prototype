<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;
use App\Models\Consultation;
use App\Models\PoliKlinik;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman beranda utama (home)
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $list_poliklinik = PoliKlinik::whereIn('id', [1, 3, 4])->get();
        $list_berita = News::whereIn('id', [1, 2, 3, 4])->get();
        $list_informasi = Home::all();
        $list_fasilitas = DB::table('fasilitas')->whereIn('id', [1, 2, 3])->get();
        return view('home', compact('list_berita', 'list_poliklinik', 'list_informasi', 'list_fasilitas'));
    }

    public function store(Request $request)
    {
        // 1. Validasi Turnstile dari Cloudflare terlebih dahulu
        $turnstileResponse = $request->input('cf-turnstile-response');

        try {
            // Mengirim request ke server Cloudflare untuk memverifikasi token
            $verify = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                // Pastikan key di file .env Anda bernama TURNSTILE_SECRET_KEY sesuai pemanggilan di bawah ini
                'secret' => env('TURNSTILE_SECRET_KEY'), 
                'response' => $turnstileResponse,
                'remoteip' => $request->ip(),
            ]);
            
            $result = $verify->json();
        } catch (\Exception $e){
            // Mengembalikan user ke halaman sebelumnya jika gagal menghubungi Cloudflare (fail closed)
            return back()->withErrors(['captcha' => 'Terjadi kesalahan jaringan saat memvalidasi CAPTCHA.'])->withInput();
        }

        // Mengecek apakah respons dari Cloudflare menyatakan gagal
        if (empty($result['success']) || !$result['success']){
            return back()->withErrors(['captcha' => 'Validasi bot gagal. Silahkan coba lagi.'])->withInput();
        }


        // 2. Validasi input form (berjalan hanya jika Turnstile sukses)
        $request->validate([
            'nama_pengirim' => 'required|string|max:100',
            'alamat'        => 'nullable|string|max:100',
            'email'         => 'required|email|max:100',
            'nomor_telepon' => 'nullable|string|max:50',
            'keluhan'       => 'required|string|max:255',
        ],  [
            'nama_pengirim.required' => 'Nama wajib diisi!',
            'email.required'         => 'Email tidak boleh kosong',
            'email.email'            => 'Format email tidak valid',
            'keluhan.required'       => 'Keluhan tidak boleh kosong',
        ]);


        // 3. Simpan data ke database
        $konsultasi = new Consultation;
        $konsultasi->nama_pengirim = $request->nama_pengirim;
        $konsultasi->alamat = $request->alamat;
        $konsultasi->email = $request->email;
        $konsultasi->nomor_telepon = $request->nomor_telepon;
        $konsultasi->keluhan = $request->keluhan;
        $konsultasi->save();

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('home')->with('status', 'Data berhasil terkirim');
    }
}
?>