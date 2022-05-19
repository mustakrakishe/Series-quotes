<?php

namespace App\Exceptions\Character;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class CharacterRandomNotFoundException extends ModelNotFoundException
{
    protected $message = "Any character does not exist.";
}