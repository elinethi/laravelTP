@extends('template')

@section('titre')
    Observeur
@stop

@section('titre2')
Observeur
@stop

@section('contenu')
    <h3>Sujet : {{$sujet->getTexte()}} </h3>
    <?php
    $i = 1;
    foreach($sujet->getObservateur() as $observ){
        echo "<p> Observateur n°".$i." : ".$observ->display()."</p>";
        $i++;
    }
    ?>
    <?php $sujet->update("Bonjour tout  le monde") ?>
    <em>Modification en cours...</em>
    <h3>Sujet : {{$sujet->getTexte()}} </h3>
    <?php
    $i = 1;
    foreach($sujet->getObservateur() as $observ){
        echo "<p> Observateur n°".$i." : ".$observ->display()."</p>";
        $i++;
    }
    ?>
    <?php $sujet->update("Et voilà") ?>
    <em>Modification en cours...</em>
    <h3>Sujet : {{$sujet->getTexte()}} </h3>
    <?php
    $i = 1;
    foreach($sujet->getObservateur() as $observ){
        echo "<p> Observateur n°".$i." : ".$observ->display()."</p>";
        $i++;
    }
    ?>
    
@stop