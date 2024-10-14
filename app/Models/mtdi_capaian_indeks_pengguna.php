<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mtdi_capaian_indeks_pengguna extends Model
{
    use HasFactory;

    protected $fillable = ['tahun','kategori','nilai'];
}
