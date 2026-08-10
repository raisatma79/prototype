<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends model
{
    use HasFactory;

    protected $table = 'tabel_berita';

    /**
     * Mencari data satu artikel spesifik berdasarkan parameter slug.
     *
     * @param  string  $slug
     * @return array|null
     */
    public static function findBySlug($slug)
    {
        return collect(self::all())->firstWhere('slug', $slug);
    }
}