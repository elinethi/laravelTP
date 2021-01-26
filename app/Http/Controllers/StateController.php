<?php

namespace App\Http\Controllers;

use App\Models\ConstructionState;

use Illuminate\Http\Request;

class StateController extends Controller
{
    function go()
    {
        $constructionState = new ConstructionState();
        

        return view('state', ['state'=>$constructionState]);
    }
}
