<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IndikatorMutu;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman tentang kami
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('about');
    }

    public function indikatorMutu()
    {
        $tabel_indikator_mutu = IndikatorMutu::orderBy('tahun', 'desc')->get()->groupBy('tahun');

        return view('indikator-mutu', compact('tabel_indikator_mutu'));
    }
}
?>