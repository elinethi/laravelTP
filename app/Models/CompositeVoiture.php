<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompositeVoiture extends Composite
{
    public static $lesVoitures = array();
    
    public function __construct()
    {
        
    }
    public function addChild($leChild)
    {
        array_push(CompositeVoiture::$lesVoitures,$leChild);
    }

    public function getPrixTotal(){
        $prixTot = 0;
        foreach (CompositeVoiture::$lesVoitures as $voiture)
        {
            $prixTot+=$voiture->getPrixTotal();
        }
        return $prixTot;
    }

}
