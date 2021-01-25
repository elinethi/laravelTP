<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acheminement extends Processus
{
    public static function Passe($laDemande)
    {
        if(get_class($laDemande) == 'App\Models\Acheminement')
        {
            return true;
        }
        else {
            return false;
        }
    }
}
