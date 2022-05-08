<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Episode extends Model
{
    use HasFactory;

    public $fillable = [
        'title',
        'air_date',
    ];
}
