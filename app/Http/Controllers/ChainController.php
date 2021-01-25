<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Processus;

class ChainController extends Controller
{
    function go()
    {
        //$leProcess = new Processus;

        return view('chain'); //, ['processus'=>$leProcess]);
    }
}
