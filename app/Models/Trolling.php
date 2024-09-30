<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trolling extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lokasi',
        'tanggal',
        'jam',
        'rupam',
        'petugas',
        'koordinat',
    ];
}
