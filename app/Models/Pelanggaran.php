<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'point',
    ];

    public function points()
    {
        return $this->hasMany(Point::class);
    }
}
