<?php

namespace App\Http\Controllers;

use App\Models\ListeNom;
use Illuminate\Http\Request;

class AggregationController extends Controller
{
    function go() {

        $listeNom = new listeNom;
        $listeNom->createIterator();

        return view('aggregation',["liste"=>$listeNom->getIterator()]);
    }
}
