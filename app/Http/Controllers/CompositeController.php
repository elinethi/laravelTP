<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\CompositeVoiture;
use  App\Models\CompositeRenault;
use  App\Models\CompositePeugeot;
use  App\Models\CompositeLaRenault;
use  App\Models\CompositeLaPeugeot;

class CompositeController extends Controller
{
    function go() {

        $voiture1 = new CompositeVoiture(15000);
        $voiture2 = new CompositeVoiture(15000);
        $voiture3 = new CompositeVoiture(10000);
        $voiture4 = new CompositeVoiture(10000);

        $renault1 = new CompositeRenault(15000);
        $renault2 = new CompositeRenault(10000);
        
        $peugeot1 = new CompositePeugeot(10000);
        $peugeot2 = new CompositePeugeot(10000);

        $larenault = new CompositeLaRenault(15000);
        $lapeugeot = new CompositeLaPeugeot(10000);

        return view('composite',["rang1"=>$voiture1->getPrixTotal(), "rang2Renault"=>$renault1->getPrixTotal(), "rang2Peugeot"=>$peugeot1->getPrixTotal(), "rang3Peugeot"=>$lapeugeot->getPrixTotal(), "rang3Renault"=>$larenault->getPrixTotal()]);
    }
}