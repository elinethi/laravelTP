@extends('template')

@section('titre')
    Strategie
@stop

@section('titre2')
    Strategie
@stop

@section('contenu')
    <h3>Facture n°{{ $factureRenault->getNumero() }} :</h3>
    <ul>
        <li>Modele voiture : {{$factureRenault->getVoiture()->getModele()}}</li>
        <li>Prix de base : {{$factureRenault->getPrix()}}</li>
        <li>Prix avec tva à {{$factureRenault->getTva()}}% : {{$factureRenault->getPrixAvecTva()}}</li>
        <li>Class : {{get_class($factureLineRenault)}}</li>
    </ul>
    <h3>Facture n°{{ $facturePeugeot->getNumero() }} :</h3>
    <ul>
        <li>Modele voiture : {{$facturePeugeot->getVoiture()->getModele()}}</li>
        <li>Prix de base : {{$facturePeugeot->getPrix()}}</li>
        <li>Prix avec tva à {{$facturePeugeot->getTva()}}% : {{$facturePeugeot->getPrixAvecTva()}}</li>
        <li>Class : {{get_class($factureLinePeugeot)}}</li>
    </ul>
@stop