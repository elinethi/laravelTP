@extends('template')

@section('titre')
    Commande
@stop

@section('titre2')
    Commande
@stop

@section('contenu')
    <p>Voiture 1 : {{ $facade->voiture1->getModele() }} {{ $facade->voiture1->getCouleur() }} Prix : {{ $facade->voiture1->getPrix() }} Class : {{ get_class($facade->voiture1)}}</p>
    <p>Voiture 2 : {{ $facade->voiture2->getModele() }} {{ $facade->voiture2->getCouleur() }} Prix : {{ $facade->voiture2->getPrix() }} Class : {{ get_class($facade->voiture2)}}</p>
    <p>{{ $facade->concession->getNom() }}: {{ $facade->concession->getVoitures() }}</p>
    <p>Facture {{ $facade->facture1->getNumero() }} au prix de {{ $facade->facture1->getPrix() }} pour la voiture {{ get_class($facade->facture1->getVoiture()) }}</p>
    <p>Facture {{ $facade->facture2->getNumero() }} au prix de {{ $facade->facture2->getPrix() }} pour la voiture {{ get_class($facade->facture2->getVoiture()) }}</p>
@stop