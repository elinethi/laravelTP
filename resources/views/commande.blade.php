@extends('template')

@section('titre')
    Commande
@stop

@section('titre2')
    Commande
@stop

@section('contenu')
    <p>Voiture 1 : {{ $a->getModele() }} {{ $a->getCouleur() }} Prix : {{ $a->getPrix() }} Class : {{ get_class($a)}}</p>
    <p>Voiture 2 : {{ $b->getModele() }} {{ $b->getCouleur() }} Prix : {{ $b->getPrix() }} Class : {{ get_class($b)}}</p>
    <p>{{ $c->getNom() }}: {{ $c->getVoitures() }}</p>
    <p>Facture {{ $d->getNumero() }} au prix de {{ $d->getPrix() }} pour la voiture {{ get_class($d->getVoiture()) }}</p>
    <p>Facture {{ $e->getNumero() }} au prix de {{ $e->getPrix() }} pour la voiture {{ get_class($e->getVoiture()) }}</p>
@stop