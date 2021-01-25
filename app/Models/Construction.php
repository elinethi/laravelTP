<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construction extends Processus
{
    public static function Passe($laDemande)
    {
        if(get_class($laDemande) == 'App\Models\Construction')
        {
            return true;
        }
        else {
            return false;
        }
    }
}