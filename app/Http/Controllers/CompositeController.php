<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\CompositeVoiture;

class CompositeController extends Controller
{
    function go() {

        $voiture1 = new CompositeVoiture(15000);
        $voiture2 = new CompositeVoiture(15000);
        $voiture3 = new CompositeVoiture(10000);
        $voiture4 = new CompositeVoiture(10000);

        return view('composite',["rang1"=>$voiture1->getPrixTotal()]);
    }
}
