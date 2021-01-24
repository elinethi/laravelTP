@extends('template')

@section('titre')
    Aggregation et iterator
@stop

@section('titre2')
    Aggregation et iterator
@stop

@section('contenu')
    <p>Ma liste de nom :</p>
    <ul>
        <?php 
        /*$i = 0;
        while($liste->hasNext($i)==true){
            $unNom = (String)$liste->next($i);
            echo $unNom;
         }*/
         
        for($i=0; $i<Count($liste); $i++) {
            echo "<li>".$liste[$i]."</li>";
        }
        ?>
    </ul>
@stop