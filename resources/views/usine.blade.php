@extends('template')

@section('titre')
    Class Usine
@stop

@section('titre2')
    Class Usine
@stop

@section('contenu')
    <p>Voiture 1 : {{ $a->getModele() }} {{ $a->getCouleur() }} Class : {{ get_class($a)}}</p>
    <p>Voiture 2 : {{ $b->getModele() }} {{ $b->getCouleur() }} Class : {{ get_class($b)}}</p>

@stop