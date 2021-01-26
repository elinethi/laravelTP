@extends('template')

@section('titre')
    State
@stop

@section('titre2')
    State
@stop

@section('contenu')
    <?php
        use App\Models\StateConstruireChassis;
        use App\Models\StateDemande;
        use App\Models\StateEnvoyer;
        use App\Models\StatePeindre;

        $state->setState(new StateDemande());
        echo "<p>".$state->action()."</p>";
        echo "<em>Changement d'état...</em>";
        $state->setState(new StateConstruireChassis());
        echo "<p>".$state->action()."</p>";
        echo "<em>Changement d'état...</em>";
        $state->setState(new StatePeindre());
        echo "<p>".$state->action()."</p>";
        echo "<em>Changement d'état...</em>";
        $state->setState(new StateEnvoyer());
        echo "<p>".$state->action()."</p>";
    ?>
@stop