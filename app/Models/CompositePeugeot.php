<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompositePeugeot extends Composite
{
    protected $prix;
    protected static $lesPeugeot = array();
    public function __construct(int $lePrix)
    {
        $this->prix = $lePrix;
        array_push(CompositePeugeot::$lesPeugeot,$this);
    }

    public function getPrixTotal(){
        $prixTot = 0;
        foreach (CompositePeugeot::$lesPeugeot as $voiture)
        {
            $prixTot+=$voiture->prix;
        }
        return $prixTot;
    }

}
