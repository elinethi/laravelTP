<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompositePeugeot extends Composite
{
    protected static $lesPeugeot = array();

    public function __construct() {
    }
    public function addChild($leChild)
    {
        array_push(CompositePeugeot::$lesPeugeot,$leChild);
    }

    public function getPrixTotal(){
        $prixTot = 0;
        foreach (CompositePeugeot::$lesPeugeot as $voiture)
        {
            $prixTot+=$voiture->getPrixTotal();
        }
        return $prixTot;
    }

}
