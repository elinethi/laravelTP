<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iterateur extends ListeNom
{
    
    protected $nom;

    public function __construct($liste)
    {
        $this->nom = $liste;
    }
    
    public function getNom(){
        return $this->nom;
    }

    public function hasNext($i){
        if($i < Count($this->nom)) {
            return true;
        }
        return false;
    }

    public function next($i) {
     
        if($this->hasNext($i)){
           return $this->nom[$i++];
        }
        return null;
     }
}
