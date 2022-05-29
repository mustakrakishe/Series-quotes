<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory, CrudTrait;

    public $fillable = [
        'name',
        'birthday',
        'occupations',
        'img',
        'nickname',
        'portrayed',
    ];

    public $perPage = 10;
    
    public function episodes()
    {
        return $this->belongsToMany(Episode::class);
    }
    
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}
