<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Menampilkan halaman detail artikel berita / majalah kesehatan secara dinamis.
     *
     * @param  string  $slug
     * @return \Illuminate\View\View
     */

    public function index()
    {
        $list_berita = News::all();

        return view('news', compact('list_berita'));
    }

    public function show($slug)
    {
        // Mengambil data artikel tunggal dari Model terpusat
        $article = News::findBySlug($slug);

        // Jika artikel tidak ditemukan, lemparkan eror 404
        if (!$article) {
            abort(404, 'Artikel Berita atau Majalah tidak ditemukan.');
        }

        $recentNews = News::where('slug', '!=', $slug)->take(4)->get();

        return view('news-detail', compact('article', 'recentNews'));
    }
}