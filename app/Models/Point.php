<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Point extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'point',
        'pelanggaran_id',
        'rupam',
    ];

    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class);
    }
}
