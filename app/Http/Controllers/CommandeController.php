<?php

namespace App\Http\Controllers;

use App\Models\Concession;
use Illuminate\Http\Request;
use App\Models\Facade;

class CommandeController extends Controller
{

    function new()
    {
        $facade = new Facade;
        $facade->commander("Concession de Lannion",'Renault', 'Clio 4', 'Blanche','Peugeot', '207', 'Bleu');

        return view('commande', ['facade'=>$facade]);
    }
}