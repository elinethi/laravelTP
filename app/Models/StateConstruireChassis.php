<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateConstruireChassis extends State
{
    public function action($demande)
    {
        return "La construction du chassis est en cours.";
    }
}
