<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Renault;
use App\Models\Peugeot;
use App\Models\FactureLineRenault;
use App\Models\FactureLinePeugeot;

class FactureLine
{

    protected $factureLine;
    public function __construct(Voiture $laVoiture, int $leNumero)
    {
        if(get_class($laVoiture) == "App\Models\Renault")
        {
            $this->factureLine = new FactureLineRenault($leNumero , $laVoiture);
        }
        else if(get_class($laVoiture) == "App\Models\Peugeot")
        {
            $this->factureLine = new FactureLinePeugeot($leNumero , $laVoiture);
        }
    }

    function getFactureLine() {
        return $this->factureLine;
    }
}
