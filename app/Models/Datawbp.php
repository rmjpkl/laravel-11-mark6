<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datawbp extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'lokasi',
        'tn',
        'tanggal_masuk',
        'status',
    ];

}
