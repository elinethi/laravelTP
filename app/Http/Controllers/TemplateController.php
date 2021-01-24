<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usine;

class TemplateController extends Controller
{
    function go(){
        $renault =  Usine::getVoiture('Renault', 'Clio 4', 'Blanche');
        $peugeot =  Usine::getVoiture('Peugeot', '207', 'Bleu');
    
        return view('templateClass', ['Renault'=>$renault, 'Peugeot'=>$peugeot]);
    }
    
}
