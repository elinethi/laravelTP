<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConstructionState extends Model
{
    private $state;

    public function setState($newState)
    {
        $this->state = $newState;
    }

    public function action()
    {
        return $this->state->action($this);
    }
}
