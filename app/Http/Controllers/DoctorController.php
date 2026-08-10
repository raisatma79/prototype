<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\JadwalDokter;

class DoctorController extends Controller
{
    /**
     * Menampilkan daftar jadwal praktek dokter ter-update
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */

    public function dokter()
    {

        $tabel_dokter = DB::table('tabel_dokter')->get();

        return view('dokter', compact('tabel_dokter'));
    }

    public function schedule(Request $request)
    {
        $jadwal_dokter = JadwalDokter::with('tabel_dokter')->get();
        $tabel_dokter = JadwalDokter::with('tabel_dokter');

        if ($request->filled('search')) {
            $search = $request->search;
            $tabel_dokter->whereHas('tabel_dokter', function($doc) use ($search) {
                $doc->where('nama_dokter', 'Like', '%' . $search . '%');
            });
        }

        if ($request->filled('speciality') && $request->speciality != 'all') {
            $speciality = $request->speciality;
            $tabel_dokter->whereHas('tabel_dokter', function($doc) use ($speciality) {
                $doc->where('spesialis', $speciality);
            });
        }

        $jadwal_dokter = $tabel_dokter->get();

        return view('schedule', compact('jadwal_dokter'));
    }
}