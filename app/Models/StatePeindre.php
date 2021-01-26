<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatePeindre extends State
{
    public function action($demande)
    {
        return "La peinture est en cours.";
    }
}
