<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Voiture;
use Hamcrest\Core\HasToString;
use PhpParser\Node\Expr\Cast\Array_;
use PHPUnit\Framework\Constraint\Count;

class Concession
{
    protected $Voitures = array();
    protected $Nom;

    public function __construct(string $leNom)
    {
        $this->Nom = $leNom;
    }

    public function addVoiture(Voiture $LaVoiture) {
        array_push($this->Voitures, $LaVoiture);
    }

    public function getVoitures() {
        $result = "";
        
        for ($i = 0; $i < Count($this->Voitures); $i++) {
            $result .= " ".get_class($this->Voitures[$i])." ";
        }

        return $result;
    }

    public function getNom() {
        return $this->Nom;
    }

}
