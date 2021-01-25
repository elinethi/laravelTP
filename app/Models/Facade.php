<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facade extends Model
{
    public $concession;
    public $voiture1;
    public $voiture2;
    public $facture1;
    public $facture2;
    
    public function commander($nomConcession, $marqueVoiture1, $modelVoiture1, $couleurVoiture1, $marqueVoiture2, $modelVoiture2, $couleurVoiture2)
    {
        $this->concession = new Concession($nomConcession);
        $this->voiture1 =  Usine::getVoiture($marqueVoiture1, $modelVoiture1, $couleurVoiture1);
        $this->voiture2 =  Usine::getVoiture($marqueVoiture2, $modelVoiture2, $couleurVoiture2);
        $this->concession->addVoiture($this->voiture1);
        $this->concession->addVoiture($this->voiture2);
        $this->facture1 = new Facture(1 , $this->voiture1);
        $this->facture2 = new Facture(2 , $this->voiture2);
    }
}
