@extends('template')

@section('titre')
    Composite
@stop

@section('titre2')
    Composite
@stop

@section('contenu')
    <h3>Prix Total rang 1 : {{$rang1}}</h3>
    <h3>Prix Total rang 2 Renault : {{$rang2Renault}}</h3>
    <h3>Prix Total rang 2 Peugeot : {{$rang2Peugeot}}</h3>
    <h3>Prix Total rang 3 La Renault : {{$rang3Renault}}</h3>
    <h3>Prix Total rang 3 La Peugeot : {{$rang3Peugeot}}</h3>
@stop