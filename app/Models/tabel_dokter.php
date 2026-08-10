<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tabel_dokter extends Model
{
    use HasFactory;

    protected $table = 'tabel_dokter';

    public function jadwal_dokter()
    {
        return $this->hasMany(JadwalDokter::class, 'dokter_id');
    }
}
