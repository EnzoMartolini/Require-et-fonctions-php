<?php 
date_default_timezone_set('Europe/Paris');

$crenaux = array ( 
    'Lundi' => [8, 12],
    'Mardi' => [ 7, 14 ],
    'Mercredi' => [ 1, 14 ],
    'Jeudi' => [ 7, 14 ],
    'Vendredi' => [ 7, 14 ],
    'Samedi' => [0],
    'Dimanche' => [0],
);
function CRENAUX(array $hours)
{
    foreach($hours as $clé => $valeur){
        $style = ' style =';
        if ($valeur[0] !=0)
            {
                if(array_search($clé, array_keys($hours)) === ((int)(gmdate('N'))-1))
                {
                    $style .= 'color:green;';
                }
                echo '<li' . $style . '>' . $clé . ' le magasin est ouvert de ' . $valeur[0] . 'h à ' . $valeur[1] . 'h </li> </br>';
            }
        else 
        {
            echo '<li>' . $clé . ' le magasin est fermé </li> </br>';
        }

    };


}

function isOpen (array $hours) 
{
    $jour_actuel= ((int)gmdate('N') - 1);
    $heure_actuelle=(int)date('G');
    $jour_semaine=array_keys($hours);
    $jour_actuel_semaine=array_search($jour_actuel, array_keys($jour_semaine));
    $crenaux = $hours[$jour_semaine[$jour_actuel_semaine]];

    if(!isset($_GET['jour']) && !isset($_GET['heure']))
    {        
        if ($heure_actuelle > $crenaux[0] && $heure_actuelle < $crenaux[1])
        {
            echo '<p style= color:green>Le magasin est ouvert </p>';
        }
        else
        {
            echo '<p style= color:red>Le magasin est fermé </p>';
        }
    } else {

        if (isset($_GET['jour']) && isset($_GET['heure'])) {
            $jour = $_GET['jour'];
            $heure = $_GET['heure'];
            $crenaux = $hours[$jour];
            if ($heure > $crenaux[0] && $heure < $crenaux[1]) {
                echo '<p style= color:green>Le magasin sera ouvert </p>';
            } else {
                echo '<p style= color:red>Le magasin sera fermé </p>';
            }
        }

    }
    

}

function formulaire (array $jours)
{ 
    foreach ($jours as $clé => $jour)
    {
        echo '<option value="'.$clé.'">'.$clé.'</option>';
    }

}