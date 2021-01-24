<?php

namespace App\Http\Controllers;

use App\Models\Concession;
use Illuminate\Http\Request;
use App\Models\Usine;
use App\Models\Facture;

class CommandeController extends Controller
{

    function new()
    {
        $concession = new Concession("Concession de Lannion");
        $voiture1 =  Usine::getVoiture('Renault', 'Clio 4', 'Blanche');
        $voiture2 =  Usine::getVoiture('Peugeot', '207', 'Bleu');
        $concession->addVoiture($voiture1);
        $concession->addVoiture($voiture2);
        $facture1 = new Facture(1 , $voiture1);
        $facture2 = new Facture(2 , $voiture2);

        return view('commande', ['a'=>$voiture1, 'b'=>$voiture2,'c'=>$concession, 'd'=>$facture1, 'e'=>$facture2]);
    }
}