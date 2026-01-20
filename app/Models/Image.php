<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function hp() 
    {
        return $this->belongsTo(Hp::class, 'hp_no', 'no');
    }
}
