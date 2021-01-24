<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Voiture;
use app\Models\Peugeot;
use app\Models\Renault;

class Facture
{
    protected $Numero;
    protected $Voiture;
    protected $Prix;
    protected $tva;

    public static function constructTva (int $LeNumero, $LaVoiture, $laTva) {
        $fact = new Facture($LeNumero, $LaVoiture);
        $fact->tva = $laTva;
        return $fact;
    }

    public function __construct (int $LeNumero, $LaVoiture) {
        $this->Numero = $LeNumero;
        $this->Voiture = $LaVoiture;
        $this->Prix = $LaVoiture->getPrix();
    }

    public function getNumero() {
        return $this->Numero;
    }

    public function getPrix() {
        return $this->Prix;
    }

    public function getPrixAvecTva() {
        return ($this->Prix + ($this->Prix*$this->tva)/100);
    }

    public function getVoiture() {
        return $this->Voiture;
    }

    public function getTva() {
        return $this->tva;
    }
}
