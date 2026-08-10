<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PoliKlinik;

class PoliklinikController extends Controller
{
    public function rawatjalan()
    {
        $rawat_jalan = PoliKlinik::all();
        return view('rawat-jalan', compact('rawat_jalan'));
    }

    public function poliklinik($id)
    {
        $poliklinik = PoliKlinik::findOrFail($id);
        return view('poli-detail', compact('poliklinik'));
    }
}

?>