<?php
namespace App\Http\Controllers;

use App\Models\RuangInap;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    // Menampilkan halaman daftar semua ruang (rawat-inap.blade.php)
    public function index()
    {
        $ruangList = RuangInap::whereIn('id', [1, 6, 11, 15, 19, 20])->get();
        return view('rawat-inap', compact('ruangList'));
    }

    // Menampilkan halaman detail ruang berdasarkan ID (ruang-detail.blade.php)
    public function show($id)
    {
        // Ambil data kamar spesifik berdasarkan ID
        $ruang = RuangInap::findOrFail($id); 

        //filter nama kamar sebelum kata perawatan & kelas
        $namaKamar = trim(preg_split('/(Perawatan|Kelas)/i', $ruang->nama_ruang)[0]);

        // Filter berdasarkan nama kamar
        $semuaRuang = RuangInap::where('nama_ruang', 'LIKE', '%' . $namaKamar . '%')->get();

        return view('ruang-detail', compact('ruang', 'semuaRuang'));
    }
}
?>