<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sujet
{
    protected $lesObservateurs = array();
    protected $texte;

    public function __construct($leTexte)
    {
        $this->texte = $leTexte;
        array_push($this->lesObservateurs, new observateur, new observateur);
    }

    public function update($newTexte)
    {
        $this->texte = $newTexte;
        foreach($this->lesObservateurs as $observ) 
        {
            $observ->addNotif();
        }
    }

    public function getObservateur()
    {
        return $this->lesObservateurs;
    }

    public function getTexte()
    {
        return $this->texte;
    }
}
