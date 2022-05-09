<?php

namespace App\Http\Controllers;

use App\Http\Resources\CharacterCollection;
use App\Models\Character;

class CharacterController extends Controller
{
    public function index()
    {
        return new CharacterCollection(Character::with(['episodes', 'quotes'])->get());
    }
}
