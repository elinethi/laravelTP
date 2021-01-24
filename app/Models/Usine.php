<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peugeot;
use App\Models\Renault;
class Usine
{
    public static function getVoiture(String $laMarque, String $leModele, String $laCouleur) {
        if($laMarque == "Renault") {
            return new Renault($leModele, $laCouleur);
        }
        else if ($laMarque == "Peugeot") {
            return new Peugeot($leModele, $laCouleur);
        }
    }
}
