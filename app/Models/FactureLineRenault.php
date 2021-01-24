<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FactureLineRenault extends FactureLine
{
    protected $tva = 10;
    protected $facture;
    public function __construct(int $LeNumero, $LaVoiture)
    {
        $this->facture = Facture::constructTva($LeNumero, $LaVoiture, $this->tva);
    }

    function getFacture(){
        return $this->facture;
    }
}
