<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompositeRenault extends Composite
{
    protected $prix;
    protected static $lesRenault = array();
    public function __construct(int $lePrix)
    {
        $this->prix = $lePrix;
        array_push(CompositeRenault::$lesRenault,$this);
    }

    public function getPrixTotal(){
        $prixTot = 0;
        foreach (CompositeRenault::$lesRenault as $voiture)
        {
            $prixTot+=$voiture->prix;
        }
        return $prixTot;
    }

}
