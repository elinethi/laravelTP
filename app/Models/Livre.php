<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Processus
{
    public static function Passe($laDemande)
    {
        if(get_class($laDemande) == 'App\Models\Livre')
        {
            return true;
        }
        else {
            return false;
        }
    }
}