<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateDemande extends State
{
    public function action($demande)
    {
        return "La demande est en cours.";
    }
}
