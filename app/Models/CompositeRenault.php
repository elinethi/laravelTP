<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompositeRenault extends Composite
{
    protected static $lesRenault = array();

    public function __construct() {
    }

    public function addChild($leChild)
    {
        array_push(CompositeRenault::$lesRenault,$leChild);
    }

    public function getPrixTotal(){
        $prixTot = 0;
        foreach (CompositeRenault::$lesRenault as $voiture)
        {
            $prixTot+=$voiture->getPrixTotal();
        }
        return $prixTot;
    }

}
