<?php 

$crenaux = [
    'lundi' => [8,12],
    'mardi' => [8,12],
    'mercredi' => [1,12],
    'jeudi' => [8,12],
    'vendredi' => [8,12],
    'samedi' => [null],
    'dimanche' => [null],
];

function horaires (array $crenaux)
{

    foreach ($crenaux as $clé => $value):
        
        $style='';
        $position = array_search($clé, array_keys($crenaux))+1;

        if($position == date('w')): //Met en vert le jour J
            $style=' style=color:green';
        endif;

        if ($value[0] != null): //Affiche les horraires
            echo "<p". $style ."> Ouvert le ". $clé ." de " . $value[0] . 'h à '. $value[1] .'h </p></br>';
        endif;
        
    endforeach;
}

function isOpen ($array){
    $keys = array_keys($array);
    $jour = $keys[date('w')-1];
    $heure= date('g');
    $crenaux=($array[$jour]);

    if($crenaux[0] !==null && date('g') >= $crenaux[0] && date('g') < $crenaux[1]):
        echo '<p style=color:green>Le magasin est ouvert </p>';
    else:
        echo '<p style=color:red>Le magasin est fermé</p>';
    endif;

}

function jour ($array){
    foreach ($array as $clé => $value):
        echo '<option value=' . $clé . '>' . $clé . '</option>';
    endforeach;
}

function disponibilité($array){

    $jour=$_GET['jour'];
    $heure=$_GET['heure'];
    $crenaux=$array[$jour];

    if($heure >= $crenaux[0] && $heure < $crenaux[1]):
        echo '<p style=color:green>Le magasin sera ouvert </p>';
    else:
        echo '<p style=color:red>Le magasin sera fermé</p>';
    endif;

}

?>