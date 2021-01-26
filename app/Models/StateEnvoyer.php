<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StateEnvoyer extends State
{
    public function action($demande)
    {
        return "L'envoie est en cours.";
    }
}