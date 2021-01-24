<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singleton;

class SingletonController extends Controller
{
    function go()
    {
        $a = Singleton::getInstance();
        $b = Singleton::getInstance();

        return view('singleton', ['a'=>$a->increment(), 'b'=>$b->increment()]);
    }
}
