<?php

namespace App\Http\Controllers;

use App\Models\observateur;
use Illuminate\Http\Request;
use App\Models\sujet;

class ObserveurController extends Controller
{
    function go()
    {
        $sujet = new sujet("Bonjour");
        $observeur1 = new observateur();
        $observeur2 = new observateur();
        $sujet->addObserveur($observeur1);
        $sujet->addObserveur($observeur2);

        return view('observeur', ['sujet'=>$sujet, 'observeur1'=>$observeur1, 'observeur2'=>$observeur2]);
    }
    
}
