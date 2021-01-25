<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Iterator;
use SebastianBergmann\CodeCoverage\Node\Iterator as NodeIterator;

class ListeNom
{
    protected $lIterateur;
    public function createIterator()
    {
        return $this->lIterateur = new Iterateur(array('Eline', 'Ambre', 'Glenn', 'Elouan', 'Corentin', 'Romain'));
    }

    public function getIterator(){
        return $this->lIterateur->getNom();
    }

}
