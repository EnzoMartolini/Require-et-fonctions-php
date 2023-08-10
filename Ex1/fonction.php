<?php date_default_timezone_set('Europe/Paris'); ?>

<?php $CRENAUX = [

    'Lundi' => [8, 12],
    'Mardi' => [8, 12],
    'Mercredi' => [8, 12],
    'Jeudi' => [8, 12],
    'Vendredi' => [8, 12],
    'Samedi' => [8, 12],
    'Dimanche' => [8, 12],
] ?>

<?php function CRENAUX(array $hours)
{
    $message_hour=null;

    
    foreach ($hours as $day => $hour)
    {
        $style='';
        if(array_search($day, array_keys($hours)) === (int)date('w')){$style = " style = \"color : green\"" ;}
        echo "<li" . $style ."> <strong>" . $day . "</strong> : de " . $hour[0] ."h à ". $hour[1]. "h </li> </br>";

    }
} 

function isOpen(array $hours){


}

    /*
    $heure_actuelle = (int)date('H');
    $jour_actuel = date('l');
    $jours_semaine = array_keys($hours);

    $index_jour_actuel = array_search($jour_actuel, $jours_semaine);

    $creneaux_jour = $hours[$jours_semaine[$index_jour_actuel]];

    if ($heure_actuelle >= $creneaux_jour[0] && $heure_actuelle < $creneaux_jour[1]) {
        echo 'oui';
    } else {
        echo 'non';
    } */