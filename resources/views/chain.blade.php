@extends('template')

@section('titre')
    Chain Of Responsability
@stop

@section('titre2')
Chain Of Responsability
@stop

@section('contenu')
    <?php

        use App\Models\Acheminement;
        use App\Models\Livre;
        use App\Models\Construction;
        use App\Models\Processus;

        $demande1 = new Acheminement;
        $demande2 = new Livre;
        $demande3 = new Construction;

    ?>

    <h3>Avec une demande de type acheminement : </h3>
    <p> <?php echo Processus::envoieDemande($demande1); ?> </p>

    <h3>Avec une demande de type livrée : </h3>
    <p> <?php echo Processus::envoieDemande($demande2); ?> </p>

    <h3>Avec une demande de type construction : </h3>
    <p> <?php echo Processus::envoieDemande($demande3); ?> </p>
@stop