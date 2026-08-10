<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    //
    use HasFactory;
    protected $table = 'konsultasi';

    // memberitahu Eloquent bahwa column boleh kosong/tidak diisi
    const UPDATED_AT = null;
}
