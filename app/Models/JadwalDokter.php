<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalDokter extends Model
{
    use HasFactory;

    protected $table = 'jadwal_dokter'; 

    public function tabel_dokter()
    {
        return $this->belongsTo(tabel_dokter::class, 'dokter_id');
    }
}
?>