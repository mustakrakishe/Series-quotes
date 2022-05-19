<?php

namespace App\Exceptions\Character;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class CharacterByNameNotFoundException extends ModelNotFoundException
{
    public function setName(string $name)
    {
        $this->message = "Character with name $name does not exist.";

        return $this;
    }
}