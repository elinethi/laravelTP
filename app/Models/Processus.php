<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Processus
{
    public static function envoieDemande($laDemande){
        if(Construction::Passe($laDemande) == true)
        {
            return "La demande ".get_class($laDemande)." a été satisfaite au niveau de la Construction.";
        } 
        else {
            if(Acheminement::Passe($laDemande) == true)
            {
                return "La demande ".get_class($laDemande)." a été satisfaite au niveau de l'Acheminement.";
            }
            else {
                if(Livre::Passe($laDemande) == true)
                {
                    return "La demande ".get_class($laDemande)." a été Livrée.";
                } 
            }
        }
    }
    public static abstract function Passe($laDemande);
}
