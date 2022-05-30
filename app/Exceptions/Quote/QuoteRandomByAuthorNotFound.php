<?php

namespace App\Exceptions\Quote;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class QuoteRandomByCharacterNameNotFound extends ModelNotFoundException
{
    public function setName(string $name)
    {
        $this->message = "Any quote of the character with name $name does not exist.";

        return $this;
    }
}