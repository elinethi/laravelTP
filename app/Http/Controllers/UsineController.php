<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usine;

class UsineController extends Controller
{
    function new()
    {
        $voiture1 =  Usine::getVoiture('Renault', 'Clio 4', 'Blanche');
        $voiture2 =  Usine::getVoiture('Peugeot', '207', 'Bleu');

        return view('usine', ['a'=>$voiture1, 'b'=>$voiture2]);
    }
}
