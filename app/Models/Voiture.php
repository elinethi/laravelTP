<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture
{
    protected $Modele;
    protected $Couleur;

    public function __construct(String $leModele, String $laCouleur) {
        $this->Modele = $leModele;
        $this->Couleur = $laCouleur;
    }

    public function getModele() {
        return $this->Modele;
    } 

    public  function getCouleur() {
        return $this->Couleur;
    } 

    public function getTexte() {
        return $this->getModele()." ".get_class($this);
    }
    
}
