<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Menampilkan halaman informasi
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('information');
    }

    public function faq()
    {
        return view('information-faq');
    }
}
?>