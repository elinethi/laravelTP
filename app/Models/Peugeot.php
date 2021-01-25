<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peugeot extends Voiture
{
    protected $Prix = 15000;
    protected $Marque = "Peugeot";
    public function getPrix() {
        return $this->Prix;
    }

    public function getMarque()
    {
        return $this->Marque;
    }


}
