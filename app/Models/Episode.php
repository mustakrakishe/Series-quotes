<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'air_date',
    ];
    
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
