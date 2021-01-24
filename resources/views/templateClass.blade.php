@extends('template')

@section('titre')
    Template
@stop

@section('titre2')
    Template
@stop

@section('contenu')
    <p>J'ai passé la classe Voiture en abstract avec la function getTexte()</p>
    <h3>getTexte() n°1 : {{ $Renault->getTexte() }}</h3>
    <h3>getTexte() n°2 : {{ $Peugeot->getTexte() }}</h3>
@stop