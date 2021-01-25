<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompositeVoiture extends Composite
{
    protected $prix;
    public static $lesVoitures = array();
    public function __construct(int $lePrix)
    {
        $this->prix = $lePrix;
        array_push(CompositeVoiture::$lesVoitures,$this);
    }

    public function getPrixTotal(){
        $prixTot = 0;
        foreach (CompositeVoiture::$lesVoitures as $voiture)
        {
            $prixTot+=$voiture->prix;
        }
        return $prixTot;
    }

}
