<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PoliKlinik;

class ServiceController extends Controller
{
    /**
     * Menampilkan halaman layanan
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $fasilitas = DB::table('fasilitas')->get();
        return view('service', compact('fasilitas'));
    }

    public function rawatjalan()
    {
        $rawat_jalan = PoliKlinik::all();
        return view('rawat-jalan', compact('rawat_jalan'));
    }
}