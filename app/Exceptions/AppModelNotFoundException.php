<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class AppModelNotFoundException extends ModelNotFoundException
{
    public function setId($id)
    {
        $this->message = "$this->entityName #$id does no exist.";

        return $this;
    }
}