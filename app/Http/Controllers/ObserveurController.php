<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sujet;

class ObserveurController extends Controller
{
    function go()
    {
        $sujet = new sujet("Bonjour");

        return view('observeur', ['sujet'=>$sujet]);
    }
    
}
