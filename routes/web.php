<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('hello');
});
//Exercice 1 : Singleton
Route::get('/singleton', 'App\Http\Controllers\SingletonController@go');

//Exercice 2 : Factory
Route::get('/usine', 'App\Http\Controllers\UsineController@new');

//Exercice 3 : Facade
Route::get('/commande', 'App\Http\Controllers\CommandeController@new');

//Exercice 4 : Iterator
Route::get('/aggregation', 'App\Http\Controllers\AggregationController@go');

//Exercice 5 : Observeur
Route::get('/observeur', 'App\Http\Controllers\ObserveurController@go');

//Exercice 6 : Strategie
Route::get('/strategie', 'App\Http\Controllers\StrategieController@go');

//Exercice 7 : Template
Route::get('/template', 'App\Http\Controllers\TemplateController@go');

//Exercice 8 : Command
Route::get('/command', function () {
    return view('command');
});

//Exercice 9 : Composite
Route::get('/composite', 'App\Http\Controllers\CompositeController@go');

//Exercice 10 : Chain Of Responsability
Route::get('/chain', 'App\Http\Controllers\ChainController@go');

//Exercice 11 : State
Route::get('/state', 'App\Http\Controllers\StateController@go');