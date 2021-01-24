<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Iterator;

class ListeNom extends Model
{
    protected $nom = array('Eline', 'Ambre', 'Glenn', 'Elouan', 'Corentin', 'Romain');

    public function getIterator(){
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
