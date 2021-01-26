<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\CompositeVoiture;
use  App\Models\CompositeRenault;
use  App\Models\CompositePeugeot;
use  App\Models\CompositeLaRenault;
use  App\Models\CompositeLaPeugeot;
use Doctrine\ORM\Query\Expr\Composite;

class CompositeController extends Controller
{
    function go() {

        $larenault = new CompositeLaRenault(15000);
        $lapeugeot = new CompositeLaPeugeot(14000);
        $larenault1 = new CompositeLaRenault(15000);
        $lapeugeot1 = new CompositeLaPeugeot(10000);

        $voiture = new CompositeVoiture();
        $voiture->addChild($lapeugeot);
        $voiture->addChild($larenault);
        $voiture->addChild($larenault1);
        $voiture->addChild($lapeugeot1);

        $peugeot = new CompositePeugeot();
        $peugeot->addChild($lapeugeot);
        $peugeot->addChild($lapeugeot1);

        $renault = new CompositeRenault();
        $renault->addChild($larenault);
        $renault->addChild($larenault1);

        return view('composite',["rang1"=>$voiture->getPrixTotal(), "rang2Renault"=>$renault->getPrixTotal(), "rang2Peugeot"=>$peugeot->getPrixTotal(), "rang3Peugeot"=>$lapeugeot->getPrixTotal(), "rang3Renault"=>$larenault->getPrixTotal()]);
    }
}