<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renault extends Voiture
{
    protected $Prix = 17000;
    protected $Marque = "Renault";
    public function getPrix() {
        return $this->Prix;
    }

    public function getMarque()
    {
        return $this->Marque;
    }

    public function getTexte() {
        return $this->getMarque()." ".$this->getModele()." ".get_class($this);
    }
}
